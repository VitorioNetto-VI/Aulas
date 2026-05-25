<?php
require 'config.php';
require 'auth.php';

// Verificar autenticação
if (!isset($_SESSION['user']) || empty($_SESSION['user']['id'])) {
    header('Location: login.php');
    exit;
}

$userId = $_SESSION['user']['id'];

$post = null;
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id=?");
    $stmt->execute([$_GET['id']]);
    $post = $stmt->fetch();
}

// Função de upload melhorada
function upload($f, $oldFile = null) {
    if (empty($f['name']) || $f['error'] !== UPLOAD_ERR_OK) {
        return $oldFile;
    }
    
    // Garantir que a pasta de uploads existe
    $uploadDir = dirname(__DIR__) . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    
    // Gerar nome seguro para o arquivo
    $extension = pathinfo($f['name'], PATHINFO_EXTENSION);
    $safeName = time() . '_' . bin2hex(random_bytes(8)) . '.' . $extension;
    
    // Mover o arquivo
    if (move_uploaded_file($f['tmp_name'], $uploadDir . $safeName)) {
        // Se existir um arquivo antigo, removê-lo
        if ($oldFile && file_exists($uploadDir . $oldFile)) {
            unlink($uploadDir . $oldFile);
        }
        return $safeName;
    }
    
    return $oldFile;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar dados obrigatórios
    if (empty($_POST['title'])) {
        die("Título é obrigatório!");
    }
    
    // Gerar slug
    $slug = strtolower(preg_replace('/[^a-z0-9]+/','-', $_POST['title']));
    
    // Processar uploads
    $thumb  = upload($_FILES['thumb'], $_POST['thumb_old'] ?? null);
    $cover  = upload($_FILES['cover'], $_POST['cover_old'] ?? null);
    $footer = upload($_FILES['footer'], $_POST['footer_old'] ?? null);
    
    if ($post) {
        // Atualizar post existente
        $stmt = $pdo->prepare("
            UPDATE posts SET 
                title=?, slug=?, summary=?, content=?, contentHTML=?, 
                meta_title=?, meta_desc=?, 
                thumb=?, cover=?, footer_img=?, 
                updated_by=?
            WHERE id=?
        ");
        $stmt->execute([
            $_POST['title'], $slug, $_POST['summary'], $_POST['content'], $_POST['contentHTML'],
            $_POST['meta_title'], $_POST['meta_desc'],
            $thumb, $cover, $footer,
            $userId, $post['id']
        ]);
        
        // Auditoria: post atualizado
        $details = json_encode([
            'post_id' => $post['id'],
            'title' => $_POST['title'],
            'changes' => [
                'title' => $_POST['title'] !== $post['title'] ? "De: {$post['title']} Para: {$_POST['title']}" : null,
                'summary' => $_POST['summary'] !== $post['summary'] ? "Resumo alterado" : null,
                'thumb' => $thumb !== $post['thumb'] ? "Thumbnail atualizada" : null,
                'cover' => $cover !== $post['cover'] ? "Capa atualizada" : null,
                'footer' => $footer !== $post['footer_img'] ? "Imagem de rodapé atualizada" : null
            ]
        ], JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        
        logUserAction($pdo, 'post_updated', $details);
        $message = "Post atualizado com sucesso!";
    } else {
        // Criar novo post
        $stmt = $pdo->prepare("
            INSERT INTO posts 
            (title,slug,summary,content,contentHTML,meta_title,meta_desc,thumb,cover,footer_img,created_by)
            VALUES (?,?,?,?,?,?,?,?,?,?,?)
        ");
        $stmt->execute([
            $_POST['title'], $slug, $_POST['summary'], $_POST['content'],$_POST['contentHTML'],
            $_POST['meta_title'], $_POST['meta_desc'],
            $thumb, $cover, $footer,
            $userId
        ]);
        
        $newPostId = $pdo->lastInsertId();
        
         $details = json_encode([
            'post_id' => $newPostId,
            'title' => $_POST['title'],
            'slug' => $slug,
            'has_thumb' => !empty($thumb),
            'has_cover' => !empty($cover),
            'has_footer' => !empty($footer),
            'content_length' => strlen($_POST['content']),
            'contentHTML_length' => strlen($_POST['contentHTML']),
            'summary_length' => strlen($_POST['summary'])
        ], JSON_UNESCAPED_UNICODE);
        
        logUserAction($pdo, 'post_created', $details);
        $message = "Post criado com sucesso!";
    }
    
    // Mensagem de sucesso na sessão
    $_SESSION['success_message'] = $message;
    header("Location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post ? 'Editar Post' : 'Novo Post' ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Quill.js CSS -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    
    <!-- KaTeX para fórmulas matemáticas -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css">
    
    <style>
        .ql-toolbar {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            border: 1px solid #d1d5db !important;
        }
        .ql-container {
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            border: 1px solid #d1d5db !important;
            border-top: none !important;
            min-height: 400px;
            font-size: 16px;
        }
        .ql-editor {
            min-height: 400px;
        }
        .ql-toolbar button.ql-attachment::before {
            content: "📎";
            font-size: 16px;
        }
        .ql-toolbar button.ql-formula::before {
            content: "Σ";
            font-size: 18px;
            font-weight: bold;
        }
        .attachment-preview {
            border: 2px dashed #3b82f6;
            border-radius: 8px;
            padding: 10px;
            margin: 10px 0;
            background-color: #f0f9ff;
        }
        .upload-progress {
            width: 100%;
            height: 4px;
            background-color: #e5e7eb;
            border-radius: 2px;
            overflow: hidden;
            margin: 5px 0;
        }
        .upload-progress-bar {
            height: 100%;
            background-color: #10b981;
            width: 0%;
            transition: width 0.3s ease;
        }
        
        /* Estilo para links de anexos no editor */
        .ql-editor a[href*="uploads/"] {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 8px;
            background-color: #f3f4f6;
            border-radius: 4px;
            text-decoration: none;
            color: #1f2937;
            border: 1px solid #d1d5db;
            margin: 2px;
        }
        
        .ql-editor a[href*="uploads/"]:hover {
            background-color: #e5e7eb;
            text-decoration: underline;
        }
        
        /* Estilo para imagens no editor */
        .ql-editor img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        
        .ql-editor img:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto py-10 px-4">
        <!-- Mensagem de status (se houver) -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                <?= $_SESSION['success_message'] ?>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>
        
        <!-- Cabeçalho com navegação -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-bold">
                    <?= $post ? '✏️ Editar Post' : '📝 Novo Post' ?>
                </h1>
                <p class="text-gray-600">Preencha os dados do post abaixo</p>
            </div>
            <div>
                <a href="admin.php" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Voltar</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-8">
            <form method="post" enctype="multipart/form-data" class="space-y-6" onsubmit="prepareContent()">
                <!-- Título -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Título *</label>
                    <input class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           name="title" placeholder="Digite o título do post"
                           value="<?= htmlspecialchars($post['title'] ?? '') ?>" required>
                </div>

                <!-- SEO -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Meta Title (SEO)</label>
                        <input class="w-full border border-gray-300 p-3 rounded" 
                               name="meta_title" placeholder="Título para SEO"
                               value="<?= htmlspecialchars($post['meta_title'] ?? '') ?>">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description (SEO)</label>
                        <textarea class="w-full border border-gray-300 p-3 rounded" 
                                  name="meta_desc" placeholder="Descrição para SEO" rows="3"><?= htmlspecialchars($post['meta_desc'] ?? '') ?></textarea>
                    </div>
                </div>

                <!-- Resumo -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Resumo</label>
                    <textarea class="w-full border border-gray-300 p-3 rounded" 
                              name="summary" placeholder="Resumo breve do post" rows="4"><?= $post['summary'] ?? '' ?></textarea>
                </div>

                <!-- Conteúdo -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Conteúdo</label>
                    
                    <!-- Container do Editor Quill -->
                    <div id="editor-container">
                        <div id="editor"><?= $post['content'] ?? '' ?></div>
                    </div>
                    
                    <!-- Campo para enviar o conteúdo HTML -->
                    <label class="block text-sm font-medium text-gray-700 mb-2">conteúdo HTML</label>
                    <textarea id="contentHTM" name="contentHTM" class="w-full border border-gray-300 p-3 rounded" rows="4"><?= $post['contentHTML'] ?? '' ?></textarea>
                </div>

                <!-- Imagens -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <?php
                    $files = [
                        'thumb' => ['label' => 'Thumbnail', 'desc' => 'Pequena imagem para listagens'],
                        'cover' => ['label' => 'Capa', 'desc' => 'Imagem principal do post'],
                        'footer' => ['label' => 'Rodapé', 'desc' => 'Imagem para o rodapé']
                    ];
                    
                    foreach($files as $key => $info):
                        $oldValue = $key === 'footer' ? ($post['footer_img'] ?? '') : ($post[$key] ?? '');
                    ?>
                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <?= $info['label'] ?>
                        </label>
                        <p class="text-xs text-gray-500 mb-2"><?= $info['desc'] ?></p>
                        
                        <!-- Upload atual -->
                        <input type="file" name="<?= $key ?>" class="w-full text-sm" accept="image/*">
                        
                        <!-- Arquivo atual -->
                        <?php if ($oldValue): ?>
                            <div class="mt-2 text-sm">
                                <p class="text-gray-600">Arquivo atual:</p>
                                <p class="font-mono text-xs"><?= htmlspecialchars($oldValue) ?></p>
                                <input type="hidden" name="<?= $key ?>_old" value="<?= htmlspecialchars($oldValue) ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Botões -->
                <div class="flex justify-end gap-3 pt-4 border-t">
                    <a href="admin.php" class="px-5 py-2 rounded bg-gray-300 hover:bg-gray-400 transition">
                        Cancelar
                    </a>
                    <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
                        <?= $post ? 'Atualizar' : 'Publicar' ?>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Quill.js Script -->
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    
    <!-- KaTeX Script -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    
    <script>
    // Configuração estendida do Quill
    const Attachment = Quill.import('formats/link');
    
    // Registrar módulo customizado para anexos
    class CustomAttachment extends Attachment {
        static create(value) {
            const node = super.create(value);
            node.setAttribute('href', value);
            node.setAttribute('target', '_blank');
            node.setAttribute('rel', 'noopener noreferrer');
            node.classList.add('custom-attachment');
            return node;
        }
    }
    
    CustomAttachment.blotName = 'attachment';
    CustomAttachment.tagName = 'A';
    Quill.register(CustomAttachment, true);
    
    // Inicializar Quill Editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: {
                container: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'align': [] }],
                    ['link', 'image', 'attachment']
                ],
                handlers: {
                    'attachment': attachmentHandler,
                    'image': imageHandler
                }
            }
        },
        placeholder: 'Digite seu conteúdo aqui...'
    });
    
    // Função para preparar o conteúdo antes do envio do formulário
    function prepareContent() {
        var content = quill.root.innerHTML;
        var contentHTML = '';
        document.getElementById('content').value = content;
        document.getElementById('contentHTML').value = contentHTML;
        
        if (content === '<p><br></p>' || content === '<p></p>') {
            document.getElementById('content').value = '';
            document.getElementById('contentHTML').value = '';
        }
    }
    
    // Handler para upload de imagens
    function imageHandler() {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        
        input.click();
        
        input.onchange = async function() {
            const files = Array.from(input.files);
            
            for (const file of files) {
                await uploadFile(file, 'image');
            }
        };
    }
    
    // Handler para anexos
    function attachmentHandler() {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', '.pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.zip,.rar,.7z,.json,.csv');
        
        input.click();
        
        input.onchange = async function() {
            const files = Array.from(input.files);
            
            for (const file of files) {
                await uploadFile(file, 'file');
            }
        };
    }
    
    // Handler para fórmulas
    function formulaHandler() {
        const formula = prompt('Digite a fórmula em LaTeX (ex: E = mc^2, \\frac{a}{b}):');
        if (formula) {
            try {
                // Usar KaTeX para renderizar a fórmula
                const range = quill.getSelection();
                const formulaHtml = katex.renderToString(formula, {
                    throwOnError: false,
                    displayMode: false
                });
                
                quill.insertEmbed(range.index, 'formula', formulaHtml);
            } catch (error) {
                alert('Erro na fórmula. Verifique a sintaxe LaTeX.');
                console.error('Erro na fórmula:', error);
            }
        }
    }
    
    // Função para fazer upload do arquivo
    async function uploadFile(file, type) {
        const formData = new FormData();
        formData.append('file', file);
        
        // Mostrar progresso
        const range = quill.getSelection();
        
        if (type === 'image') {
            // Inserir placeholder para imagem
            quill.insertEmbed(range.index, 'image', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
        } else {
            // Inserir placeholder para anexo
            quill.insertText(range.index, `📎 Enviando ${file.name}...`, {
                'color': '#6b7280',
                'italic': true
            });
        }
        
        try {
            const response = await fetch('upload_handler.php', {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            });
            
            const result = await response.json();
            
            if (result.success) {
                // Remover placeholder e inserir o conteúdo real
                if (type === 'image') {
                    // Remover placeholder da imagem
                    quill.deleteText(range.index, 1);
                    // Inserir imagem com caminho correto (../uploads/)
                    quill.insertEmbed(range.index, 'image', result.url);
                } else {
                    // Remover placeholder do anexo
                    quill.deleteText(range.index, 1);
                    // Inserir link clicável para o arquivo
                    quill.insertText(range.index, `📎 ${result.originalName}`, 'link', result.url);
                }
                
                // Mostrar mensagem de sucesso
                showNotification('✅ Arquivo enviado com sucesso!', 'success');
            } else {
                throw new Error(result.error || 'Erro no upload');
            }
        } catch (error) {
            // Remover placeholder em caso de erro
            quill.deleteText(range.index, 1);
            
            // Mostrar mensagem de erro
            showNotification(`❌ Erro: ${error.message}`, 'error');
            console.error('Erro no upload:', error);
        }
    }
    
    // Função para mostrar notificações
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 px-4 py-3 rounded shadow-lg z-50 ${
            type === 'success' ? 'bg-green-100 text-green-800 border-green-300' :
            type === 'error' ? 'bg-red-100 text-red-800 border-red-300' :
            'bg-blue-100 text-blue-800 border-blue-300'
        } border`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Remover após 5 segundos
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.5s';
            setTimeout(() => notification.remove(), 500);
        }, 5000);
    }
    
    // Registrar módulo de fórmulas
    const Formula = Quill.import('formats/formula');
    quill.register(Formula, true);
    
    // Carregar conteúdo existente se estiver editando
    <?php if (isset($post['content']) && !empty($post['content'])): ?>
    quill.root.innerHTML = `<?= addslashes($post['content']) ?>`;
    <?php endif; ?>
    
    // Função para processar fórmulas LaTeX no conteúdo existente
    document.addEventListener('DOMContentLoaded', function() {
        const formulas = quill.container.querySelectorAll('.ql-formula');
        formulas.forEach(formula => {
            const latex = formula.getAttribute('data-value');
            if (latex) {
                try {
                    formula.innerHTML = katex.renderToString(latex, {
                        throwOnError: false,
                        displayMode: formula.classList.contains('ql-formula-display')
                    });
                } catch (error) {
                    console.error('Erro ao renderizar fórmula:', error);
                }
            }
        });
    });
    </script>
</body>
</html>
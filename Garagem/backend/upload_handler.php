<?php
// upload_handler.php
require 'config.php';
require 'auth.php';

// Verificar autenticação
if (!isset($_SESSION['user']) || empty($_SESSION['user']['id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Não autorizado']);
    exit;
}

header('Content-Type: application/json');

// Configurações de upload
$maxFileSize = 25 * 1024 * 1024; // 25MB
$allowedTypes = [
    // Imagens
    'image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml',
    // Documentos
    'application/pdf',
    'application/msword',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'application/vnd.ms-excel',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'application/vnd.ms-powerpoint',
    'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    'text/plain',
    // Arquivos compactados
    'application/zip',
    'application/x-rar-compressed',
    'application/x-7z-compressed',
    // Outros
    'application/json',
    'text/csv'
];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido']);
    exit;
}

// Verificar se há arquivo
if (!isset($_FILES['file'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Nenhum arquivo enviado']);
    exit;
}

$file = $_FILES['file'];
$userId = $_SESSION['user']['id'];

// Verificar erros
if ($file['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(['error' => 'Erro no upload: ' . $file['error']]);
    exit;
}

// Verificar tamanho
if ($file['size'] > $maxFileSize) {
    http_response_code(400);
    echo json_encode(['error' => 'Arquivo muito grande. Máximo: 25MB']);
    exit;
}

// Verificar tipo de arquivo
$fileType = mime_content_type($file['tmp_name']);
$isImage = strpos($fileType, 'image/') === 0;

if (!in_array($fileType, $allowedTypes)) {
    http_response_code(400);
    echo json_encode(['error' => 'Tipo de arquivo não permitido: ' . $fileType]);
    exit;
}

// Garantir que a pasta de uploads existe
$uploadDir = dirname(__DIR__) . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Gerar nome seguro para o arquivo
$originalName = $file['name'];
$extension = pathinfo($originalName, PATHINFO_EXTENSION);
$safeName = time() . '_' . bin2hex(random_bytes(8)) . '.' . $extension;

// Mover o arquivo
if (move_uploaded_file($file['tmp_name'], $uploadDir . $safeName)) {
    // URL CORRETA para acesso - ajustada para seu site
    // Seu editor está em: /bomsolo/backend/
    // Sua pasta uploads está em: /bomsolo/uploads/
    // Então a URL deve ser: /bomsolo/uploads/nome_arquivo
    // Mas como o editor está na pasta backend, precisamos sair dela
    
    // Para o editor (backend), use o caminho correto relativo
    $url_for_editor = '../uploads/' . $safeName;
    
    // Para salvar no banco de dados (será usado no frontend), use caminho absoluto do site
    $url_for_database = '/bomsolo/uploads/' . $safeName;
    
    echo json_encode([
        'success' => true,
        'url' => $url_for_editor, // Usamos o caminho relativo para o editor
        'url_for_db' => $url_for_database, // Guardamos o caminho absoluto para o banco
        'type' => $isImage ? 'image' : 'file',
        'originalName' => $originalName,
        'size' => $file['size'],
        'mimeType' => $fileType
    ]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Erro ao salvar arquivo']);
}
?>
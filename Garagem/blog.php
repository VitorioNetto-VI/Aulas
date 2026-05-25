<?php 
require 'backend/config.php';

$stmt = $pdo->prepare("
    SELECT p.*, u.name AS author 
    FROM posts p 
    LEFT JOIN users u ON u.id = p.created_by 
    WHERE p.slug = ?
");
$stmt->execute([$_GET['slug']]);
$p = $stmt->fetch();

// Função para limpar classes do Quill.js, mas manter as de alinhamento
function cleanQuillContent($content) {
    // Remover classes específicas do Quill, exceto as de alinhamento
    $content = str_replace('class="ql-editor"', '', $content);
    
    // Manter apenas as classes de alinhamento (ql-align-*)
    $content = preg_replace('/class="([^"]*ql-align-(?:center|right|left|justify)[^"]*)"([^>]*)>/', 
                           'class="$1"$2>', $content);
    
    // Remover outras classes do Quill
    $content = preg_replace('/\s*ql-(?!align)[a-zA-Z0-9\-]+\s*/', ' ', $content);
    
    // Limpar espaços extras
    $content = preg_replace('/class="\s+/', 'class="', $content);
    $content = preg_replace('/\s+"/', '"', $content);
    $content = preg_replace('/class="\s*"/', '', $content);
    
    // Remover outros atributos do Quill
    $content = preg_replace('/spellcheck="[^"]*"/', '', $content);
    $content = preg_replace('/data-gramm="[^"]*"/', '', $content);
    $content = preg_replace('/data-gramm_id="[^"]*"/', '', $content);
    
    return $content;
}

$cleanContent = isset($p['content']) ? cleanQuillContent($p['content']) : '';
?>
<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($p['meta_title'] ?? $p['title'] ?? 'Leitura') ?></title>
    <meta name="description" content="<?= htmlspecialchars($p['meta_desc'] ?? '') ?>">

    <!-- OpenGraph -->
    <meta property="og:title" content="<?= htmlspecialchars($p['title'] ?? '') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($p['meta_desc'] ?? '') ?>">
    <?php if (!empty($p['cover'])): ?>
    <meta property="og:image" content="../uploads/<?= $p['cover'] ?>">
    <?php endif; ?>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Configuração do Tailwind para Dark Mode -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'primary-dark': '#1a202c',
                        'secondary-dark': '#2d3748',
                        'neon-pink': '#ff00ff',
                        'neon-blue': '#00ffff',
                        'neon-green': '#00ff00',
                        'win-gray': '#c0c0c0',
                        'win-blue': '#000080'
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    
    <!-- KaTeX for Math -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css">
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>

    <style>
        :root {
            --neon-pink: #ff00ff;
            --neon-blue: #00ffff;
            --neon-green: #00ff00;
            --bg-dark: #1a1a2e;
            --win-gray: #c0c0c0;
            --win-blue: #000080;
        }

        body {
            font-family: 'VT323', monospace;
            background-color: var(--bg-dark);
            background-image: url('https://image.qwenlm.ai/public_source/55a2910b-bff9-437c-926b-8f4500a118be/18ef5eedd-e254-4fb9-8eb0-0e9d7cbb8afb.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #e0e0e0;
        }

        .pixel-font {
            font-family: 'Press Start 2P', cursive;
            text-transform: uppercase;
        }

        /* Retro Window Container */
        .retro-window {
            background-color: var(--win-gray);
            border: 3px solid white;
            border-right-color: #404040;
            border-bottom-color: #404040;
            box-shadow: 8px 8px 0px rgba(0,0,0,0.5);
            color: black;
        }

        .retro-title-bar {
            background: linear-gradient(90deg, var(--win-blue), #1084d0);
            color: white;
            padding: 6px 10px;
            font-family: 'Press Start 2P', cursive;
            font-size: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .retro-btn {
            background-color: var(--win-gray);
            border: 2px solid white;
            border-right-color: #404040;
            border-bottom-color: #404040;
            box-shadow: 1px 1px 0px black;
            font-family: 'Press Start 2P', cursive;
            font-size: 8px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            padding: 8px 12px;
            color: black;
            transition: all 0.1s;
        }
        .retro-btn:active {
            border: 2px solid #404040;
            border-right-color: white;
            border-bottom-color: white;
            transform: translate(1px, 1px);
            box-shadow: none;
        }
        .retro-btn:hover {
            background-color: #d4d4d4;
        }

        /* Dark mode detection script */
        (function() {
            const savedTheme = localStorage.getItem('theme') || 
                             (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();

        /* ============================================ */
        /* ESTILOS PARA CONTEÚDO FORMATADO (QUILL.JS)   */
        /* ============================================ */
        
        /* Estilos para conteúdo formatado */
        .article-content {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            font-size: 18px;
            line-height: 1.8;
            color: #374151;
        }
        
        .dark .article-content {
            color: #d1d5db;
        }
        
        .article-content > * {
            margin-bottom: 1.5rem;
        }
        
        .article-content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #111827;
            margin-top: 2rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .dark .article-content h1 {
            color: #f3f4f6;
        }
        
        .article-content h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #1f2937;
            margin-top: 1.75rem;
            margin-bottom: 0.875rem;
        }
        
        .dark .article-content h2 {
            color: #e5e7eb;
        }
        
        .article-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #374151;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }
        
        .dark .article-content h3 {
            color: #d1d5db;
        }
        
        .article-content p {
            margin-bottom: 1.5rem;
        }
        
        .article-content ul, .article-content ol {
            margin-left: 2rem;
            margin-bottom: 1.5rem;
        }
        
        .article-content li {
            margin-bottom: 0.75rem;
        }
        
        .article-content ul li {
            list-style-type: disc;
        }
        
        .article-content ol li {
            list-style-type: decimal;
        }
        
        .article-content a {
            color: #2563eb;
            text-decoration: underline;
            transition: color 0.2s;
        }
        
        .dark .article-content a {
            color: #60a5fa;
        }
        
        .article-content a:hover {
            color: #1d4ed8;
        }
        
        .dark .article-content a:hover {
            color: #93c5fd;
        }
        
        .article-content strong, .article-content b {
            font-weight: 700;
            color: #111827;
        }
        
        .dark .article-content strong,
        .dark .article-content b {
            color: #f3f4f6;
        }
        
        .article-content em, .article-content i {
            font-style: italic;
        }
        
        .article-content u {
            text-decoration: underline;
        }
        
        .article-content blockquote {
            border-left: 4px solid #10b981;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #6b7280;
            background-color: #f9fafb;
            padding: 1.5rem;
            border-radius: 0.375rem;
        }
        
        .dark .article-content blockquote {
            background-color: #374151;
            color: #d1d5db;
            border-left-color: #34d399;
        }
        
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 0.75rem;
            margin: 2rem 0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .dark .article-content img {
            filter: brightness(0.9);
        }
        
        /* ALINHAMENTO DO QUILL.JS - CORREÇÃO CRÍTICA */
        .article-content .ql-align-center,
        .article-content p.ql-align-center,
        .article-content h1.ql-align-center,
        .article-content h2.ql-align-center,
        .article-content h3.ql-align-center,
        .article-content div.ql-align-center,
        .article-content span.ql-align-center,
        .article-content .ql-align-center p,
        .article-content .ql-align-center h1,
        .article-content .ql-align-center h2,
        .article-content .ql-align-center h3,
        .article-content .ql-align-center div {
            text-align: center !important;
        }
        
        .article-content .ql-align-right,
        .article-content p.ql-align-right,
        .article-content h1.ql-align-right,
        .article-content h2.ql-align-right,
        .article-content h3.ql-align-right,
        .article-content div.ql-align-right,
        .article-content span.ql-align-right,
        .article-content .ql-align-right p,
        .article-content .ql-align-right h1,
        .article-content .ql-align-right h2,
        .article-content .ql-align-right h3,
        .article-content .ql-align-right div {
            text-align: right !important;
        }
        
        .article-content .ql-align-left,
        .article-content p.ql-align-left,
        .article-content h1.ql-align-left,
        .article-content h2.ql-align-left,
        .article-content h3.ql-align-left,
        .article-content div.ql-align-left,
        .article-content span.ql-align-left,
        .article-content .ql-align-left p,
        .article-content .ql-align-left h1,
        .article-content .ql-align-left h2,
        .article-content .ql-align-left h3,
        .article-content .ql-align-left div {
            text-align: left !important;
        }
        
        .article-content .ql-align-justify,
        .article-content p.ql-align-justify,
        .article-content h1.ql-align-justify,
        .article-content h2.ql-align-justify,
        .article-content h3.ql-align-justify,
        .article-content div.ql-align-justify,
        .article-content span.ql-align-justify,
        .article-content .ql-align-justify p,
        .article-content .ql-align-justify h1,
        .article-content .ql-align-justify h2,
        .article-content .ql-align-justify h3,
        .article-content .ql-align-justify div {
            text-align: justify !important;
        }
        
        /* Alinhamento para elementos diretos */
        [class*="ql-align-"] {
            text-align: inherit !important;
        }
        
        p[class*="ql-align-"],
        h1[class*="ql-align-"],
        h2[class*="ql-align-"],
        h3[class*="ql-align-"],
        div[class*="ql-align-"] {
            text-align: inherit !important;
        }
        
        /* Estilos específicos para listas com alinhamento */
        .article-content .ql-align-center ul,
        .article-content .ql-align-center ol,
        .article-content ul.ql-align-center,
        .article-content ol.ql-align-center {
            display: inline-block;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
        }
        
        .article-content .ql-align-right ul,
        .article-content .ql-align-right ol,
        .article-content ul.ql-align-right,
        .article-content ol.ql-align-right {
            display: inline-block;
            text-align: left;
            margin-left: auto;
            margin-right: 0;
        }
        
        /* Estilos para tabelas */
        .article-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
        }
        
        .article-content table th,
        .article-content table td {
            border: 1px solid #d1d5db;
            padding: 0.75rem;
            text-align: left;
        }
        
        .dark .article-content table th,
        .dark .article-content table td {
            border-color: #4b5563;
        }
        
        .article-content table th {
            background-color: #f9fafb;
            font-weight: 600;
        }
        
        .dark .article-content table th {
            background-color: #374151;
            color: #f3f4f6;
        }
        
        .dark .article-content table td {
            background-color: #1f2937;
            color: #d1d5db;
        }
        
        .article-content code {
            background-color: #f3f4f6;
            padding: 0.2rem 0.4rem;
            border-radius: 0.25rem;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 0.875em;
        }
        
        .dark .article-content code {
            background-color: #374151;
            color: #f3f4f6;
        }
        
        .article-content pre {
            background-color: #1f2937;
            color: #f9fafb;
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 2rem 0;
        }
        
        .article-content hr {
            border: none;
            border-top: 2px solid #e5e7eb;
            margin: 3rem 0;
        }
        
        .dark .article-content hr {
            border-color: #4b5563;
        }
        
        /* Melhor espaçamento entre elementos */
        .article-content *:first-child {
            margin-top: 0;
        }
        
        .article-content *:last-child {
            margin-bottom: 0;
        }
        
        /* Estilos específicos para blocos do Quill */
        .ql-syntax {
            background-color: #1f2937;
            color: #f9fafb;
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 1rem 0;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 14px;
        }
        
        .ql-indent-1 { padding-left: 3em; }
        .ql-indent-2 { padding-left: 6em; }
        .ql-indent-3 { padding-left: 9em; }
        .ql-indent-4 { padding-left: 12em; }
        .ql-indent-5 { padding-left: 15em; }
        .ql-indent-6 { padding-left: 18em; }
        .ql-indent-7 { padding-left: 21em; }
        .ql-indent-8 { padding-left: 24em; }
        
        /* Estilos para font-size do Quill */
        .ql-size-small { font-size: 0.75em; }
        .ql-size-large { font-size: 1.5em; }
        .ql-size-huge { font-size: 2.5em; }
        
        /* Estilos para cores do Quill */
        .ql-font-serif { font-family: Georgia, serif; }
        .ql-font-monospace { font-family: 'Monaco', 'Menlo', monospace; }
        
        /* Estilos para fórmulas matemáticas */
        .katex {
            font-size: 1.1em;
            margin: 0 0.1em;
        }

        .katex-display {
            overflow: auto hidden;
            padding: 1em 0;
            margin: 1em 0;
            text-align: center;
            background-color: #f8f9fa;
            border-radius: 0.5rem;
        }
        
        .dark .katex-display {
            background-color: #374151;
        }

        /* Estilos para anexos */
        .custom-attachment {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            margin: 0.25rem;
            background-color: #f3f4f6;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            color: #374151;
            text-decoration: none;
            transition: all 0.2s;
        }
        
        .dark .custom-attachment {
            background-color: #374151;
            border-color: #4b5563;
            color: #d1d5db;
        }

        .custom-attachment:hover {
            background-color: #e5e7eb;
            border-color: #9ca3af;
            text-decoration: none;
        }
        
        .dark .custom-attachment:hover {
            background-color: #4b5563;
            border-color: #6b7280;
        }

        .custom-attachment::before {
            content: "📎";
            margin-right: 0.5rem;
        }

        /* Estilos para imagens no conteúdo */
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
            margin: 1.5rem 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .dark .article-content img {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
        }

        .article-content img[src*="placeholder"] {
            display: none;
        }
        
        /* Transições suaves para dark mode */
        body, .bg-white, .bg-gray-50, .bg-green-50, 
        .bg-green-100, .bg-green-800, .bg-green-900 {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 12px; }
        ::-webkit-scrollbar-track { background: #2a2a2a; border-left: 2px solid white; }
        ::-webkit-scrollbar-thumb { background: var(--neon-blue); border: 2px solid white; }
        ::-webkit-scrollbar-thumb:hover { background: var(--neon-pink); }
    </style>
</head>

<body class="min-h-screen flex flex-col transition-colors duration-300">
    <!-- Script para detectar tema do sistema -->
    <script>
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            }
        });
    </script>

    <!-- Botão para alternar tema -->
    <button id="theme-toggle" class="fixed top-4 right-4 z-50 p-2 rounded-lg bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors shadow-lg retro-window" style="padding: 4px;">
        <svg id="sun-icon" class="w-5 h-5 text-yellow-500 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path>
        </svg>
        <svg id="moon-icon" class="w-5 h-5 text-gray-700 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
    </button>

    <!-- Header Navigation (Retro Style) -->
    <header class="sticky top-0 z-40 mb-8">
        <div class="retro-window mx-4 mt-4">
            <div class="retro-title-bar">
                <span>SYSTEM: POST_VIEWER.EXE</span>
                <div class="flex space-x-1">
                    <div class="w-3 h-3 bg-gray-400 border border-white"></div>
                    <div class="w-3 h-3 bg-gray-400 border border-white"></div>
                    <div class="w-3 h-3 bg-red-500 border border-white"></div>
                </div>
            </div>
            <div class="p-3 bg-[#c0c0c0] flex justify-between items-center">
                <a href="../#blog" class="retro-btn">
                    &lt; VOLTAR AO BLOG
                </a>
                <span class="pixel-font text-blue-900 text-xs md:text-sm truncate max-w-[200px] md:max-w-md">
                    <?= htmlspecialchars($p['title'] ?? 'CARREGANDO...') ?>
                </span>
            </div>
        </div>
    </header>
<div class="flex flex-col items-center">
    <!-- 📰 CONTEÚDO DO POST -->
    <main class="flex-grow max-w-3xl lg:max-w-4xl mx-auto bg-white dark:bg-gray-800 mt-4 mb-12 rounded-xl shadow-xl dark:shadow-gray-900/50 overflow-hidden transition-colors duration-300 retro-window" style="margin-left: 20px; margin-right: 20px;">

        <!-- Imagem de capa -->
        <?php if (!empty($p['cover'])): ?>
        <div class="relative h-96 overflow-hidden">
            <img 
                src="../uploads/<?= $p['cover'] ?>" 
                alt="<?= htmlspecialchars($p['title']) ?>"
                class="w-full h-full object-cover dark:brightness-90"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        </div>
        <?php endif; ?>

        <!-- Conteúdo -->
        <div class="px-6 py-10 lg:px-12 lg:py-16">

            <!-- Título -->
            <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-green-900 dark:text-green-300 mb-6 leading-tight transition-colors duration-300 pixel-font" style="font-size: 1.5rem !important;">
                <?= htmlspecialchars($p['title']) ?>
            </h1>

            <!-- Autor + Data -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 dark:text-gray-400 mb-8">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-700 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium text-gray-800 dark:text-gray-300">
                        <?= $p['author'] ?? 'Equipe Editorial' ?>
                    </span>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-700 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                    <?= date('d/m/Y', strtotime($p['created_at'])) ?>
                </div>
            </div>

            <!-- Resumo -->
            <?php if (!empty($p['summary'])): ?>
            <div class="bg-green-50 dark:bg-gray-700 border-l-4 border-green-600 dark:border-green-400 pl-6 py-4 mb-10 rounded-r-lg transition-colors duration-300">
                <p class="text-lg text-gray-700 dark:text-gray-300 italic">
                    <?= htmlspecialchars($p['summary']) ?>
                </p>
            </div>
            <?php endif; ?>

            <!-- Conteúdo rico -->
            <article class="article-content">
                <?= $cleanContent ?>
            </article>

            <!-- Imagem final -->
            <?php if (!empty($p['footer_img'])): ?>
                <div class="mt-12">
                    <img 
                        src="../uploads/<?= $p['footer_img'] ?>" 
                        class="rounded-xl shadow-lg dark:shadow-gray-900/50 w-full dark:brightness-90"
                        alt="Imagem final do post"
                    >
                    <?php if (!empty($p['footer_caption'])): ?>
                    <p class="text-center text-sm text-gray-500 dark:text-gray-400 mt-3 italic">
                        <?= htmlspecialchars($p['footer_caption']) ?>
                    </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Tags/Categorias (se houver) -->
            <?php if (!empty($p['tags'])): ?>
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-300 mb-4">Tags:</h3>
                <div class="flex flex-wrap gap-2">
                    <?php 
                    $tags = explode(',', $p['tags']);
                    foreach ($tags as $tag): 
                        if (trim($tag)): ?>
                    <span class="px-3 py-1 bg-green-100 dark:bg-gray-700 text-green-800 dark:text-green-300 rounded-full text-sm transition-colors duration-300">
                        <?= htmlspecialchars(trim($tag)) ?>
                    </span>
                    <?php endif; endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </main>
                        </div>
    <!-- Footer (Retro Style) -->
    <footer class="bg-black border-t-4 border-white p-6 text-center mt-auto">
        <p class="pixel-font text-xs text-green-500 mb-2">SYSTEM STATUS: ONLINE</p>
        <p class="font-mono text-sm text-gray-400">&copy; 2026 GARAGE UNICORN. ALL RIGHTS RESERVED.</p>
        <p class="font-mono text-xs text-gray-600 mt-2">DESIGNED BY VITÓRIO NETTO</p>
    </footer>
    
    <script>
    // Renderizar fórmulas LaTeX no blog
    document.addEventListener('DOMContentLoaded', function() {
        // Procurar elementos com fórmulas (geralmente spans com classe específica)
        const mathElements = document.querySelectorAll('.ql-formula, [data-latex], .katex');
        
        mathElements.forEach(element => {
            let latex = element.textContent || element.getAttribute('data-latex');
            
            if (!latex && element.querySelector('.katex-mathml')) {
                // Tentar extrair do MathML
                const annotation = element.querySelector('annotation');
                if (annotation) {
                    latex = annotation.textContent;
                }
            }
            
            if (latex) {
                try {
                    katex.render(latex, element, {
                        throwOnError: false,
                        displayMode: element.classList.contains('display') || 
                                    element.parentElement.classList.contains('display')
                    });
                } catch (error) {
                    console.error('Erro ao renderizar fórmula:', error, latex);
                }
            }
        });
        
        // Lógica do botão de alternar tema
        const themeToggle = document.getElementById('theme-toggle');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');
        
        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                const html = document.documentElement;
                const isDark = html.classList.contains('dark');
                
                if (isDark) {
                    html.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                    sunIcon.classList.add('hidden');
                    moonIcon.classList.remove('hidden');
                } else {
                    html.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                    sunIcon.classList.remove('hidden');
                    moonIcon.classList.add('hidden');
                }
            });
            
            // Atualizar ícones iniciais
            const isDark = document.documentElement.classList.contains('dark');
            if (isDark) {
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            } else {
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            }
        }
    });
    </script>
</body>
</html>


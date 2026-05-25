<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP - Integração HTML + PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --code-bg: #1e1e2e;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 40px 20px;
            color: white;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .lesson-image {
            width: 100%;
            max-width: 800px;
            margin: 30px auto;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            display: block;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.25);
        }

        .card h2 {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card h3 {
            color: var(--secondary);
            font-size: 1.4rem;
            margin: 25px 0 15px;
        }

        .badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-right: 10px;
        }

        .badge-basic {
            background: var(--primary);
            color: white;
        }

        .badge-intermediate {
            background: var(--warning);
            color: white;
        }

        .badge-advanced {
            background: var(--danger);
            color: white;
        }

        .code-block {
            background: var(--code-bg);
            color: #e2e8f0;
            padding: 20px;
            border-radius: 10px;
            overflow-x: auto;
            font-family: 'Fira Code', monospace;
            font-size: 0.9rem;
            margin: 15px 0;
            border-left: 4px solid var(--primary);
            cursor: pointer;
            position: relative;
        }

        .code-block:hover {
            border-left-color: var(--success);
        }

        .code-block .comment {
            color: #6a9955;
        }

        .code-block .keyword {
            color: #569cd6;
        }

        .code-block .string {
            color: #ce9178;
        }

        .code-block .variable {
            color: #9cdcfe;
        }

        .code-block .function {
            color: #dcdcaa;
        }

        .code-block .number {
            color: #b5cea8;
        }

        .code-block .type {
            color: #4ec9b0;
        }

        .code-block .tag {
            color: #569cd6;
        }

        .code-block .attr {
            color: #9cdcfe;
        }

        .code-block::after {
            content: '📋 Clique para copiar';
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 0.75rem;
            opacity: 0.5;
            transition: opacity 0.3s;
        }

        .code-block:hover::after {
            opacity: 1;
        }

        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .comparison-table th,
        .comparison-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .comparison-table th {
            background: var(--primary);
            color: white;
        }

        .comparison-table tr:hover {
            background: #f1f5f9;
        }

        .info-box {
            background: #eff6ff;
            border-left: 4px solid var(--primary);
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 20px 0;
        }

        .warning-box {
            background: #fffbeb;
            border-left: 4px solid var(--warning);
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 20px 0;
        }

        .success-box {
            background: #ecfdf5;
            border-left: 4px solid var(--success);
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 20px 0;
        }

        .danger-box {
            background: #fef2f2;
            border-left: 4px solid var(--danger);
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 20px 0;
        }

        .output-box {
            background: var(--code-bg);
            color: #10b981;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Fira Code', monospace;
            margin: 15px 0;
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .tab {
            padding: 10px 20px;
            background: #e2e8f0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .tab.active {
            background: var(--primary);
            color: white;
        }

        .tab:hover:not(.active) {
            background: #cbd5e1;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .challenge-box {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 30px;
            border-radius: 16px;
            margin: 30px 0;
        }

        .challenge-box h3 {
            color: white;
            margin-bottom: 15px;
        }

        .challenge-box ul {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .challenge-box li {
            margin-bottom: 10px;
        }

        .nav-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255,255,255,0.3);
            z-index: 1000;
        }

        .nav-progress-bar {
            height: 100%;
            background: var(--success);
            width: 0%;
            transition: width 0.3s ease;
        }

        .section-nav {
            position: sticky;
            top: 20px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .section-nav h4 {
            margin-bottom: 15px;
            color: var(--dark);
        }

        .section-nav ul {
            list-style: none;
        }

        .section-nav li {
            margin-bottom: 8px;
        }

        .section-nav a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .section-nav a:hover {
            color: var(--primary);
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .interactive-demo {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .result-display {
            background: #f1f5f9;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            min-height: 80px;
            font-family: 'Fira Code', monospace;
            font-size: 0.9rem;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-success {
            background: var(--success);
            color: white;
        }

        .btn-success:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        .btn-warning {
            background: var(--warning);
            color: white;
        }

        .btn-warning:hover {
            background: #d97706;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            padding: 40px 20px;
            color: white;
            margin-top: 50px;
        }

        .quiz-container {
            background: white;
            border-radius: 16px;
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }

        .quiz-question {
            margin-bottom: 20px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 10px;
        }

        .quiz-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 15px;
        }

        .quiz-option {
            padding: 12px 20px;
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quiz-option:hover {
            border-color: var(--primary);
            background: #eff6ff;
        }

        .quiz-option.correct {
            border-color: var(--success);
            background: #ecfdf5;
        }

        .quiz-option.incorrect {
            border-color: var(--danger);
            background: #fef2f2;
        }

        .quiz-feedback {
            margin-top: 15px;
            padding: 15px;
            border-radius: 8px;
            display: none;
        }

        .quiz-feedback.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .quiz-feedback.correct {
            background: #ecfdf5;
            color: var(--success);
        }

        .quiz-feedback.incorrect {
            background: #fef2f2;
            color: var(--danger);
        }

        .hint-box {
            background: #fef3c7;
            border-left: 4px solid var(--warning);
            padding: 15px;
            border-radius: 0 8px 8px 0;
            margin: 15px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .hint-box:hover {
            background: orange;
            color: blue;
        }

        .hint-content {
            display: none;
            margin-top: 15px;
            padding: 15px;
            background: white;
            border-radius: 8px;
        }

        .hint-content.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .form-demo {
            background: #f8fafc;
            padding: 25px;
            border-radius: 10px;
            margin: 20px 0;
            border: 2px solid #e2e8f0;
        }

        .form-demo label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .form-demo input,
        .form-demo select,
        .form-demo textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            margin-bottom: 15px;
            transition: border-color 0.3s ease;
        }

        .form-demo input:focus,
        .form-demo select:focus,
        .form-demo textarea:focus {
            outline: none;
            border-color: var(--primary);
        }

        .security-checklist {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin: 15px 0;
        }

        .security-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-bottom: 1px solid #e2e8f0;
        }

        .security-item:last-child {
            border-bottom: none;
        }

        .security-item input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            position: relative;
        }

        .step-indicator::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 3px;
            background: #e2e8f0;
            transform: translateY(-50%);
            z-index: 0;
        }

        .step {
            background: white;
            border: 3px solid var(--primary);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--primary);
            z-index: 1;
            position: relative;
        }

        .step.active {
            background: var(--primary);
            color: white;
        }

        .step-label {
            text-align: center;
            margin-top: 10px;
            font-size: 0.85rem;
            color: var(--gray);
        }

        .crud-diagram {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 30px 0;
        }

        .crud-card {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .crud-card:hover {
            transform: scale(1.05);
        }

        .crud-card h4 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .crud-card p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8rem;
            }

            .card {
                padding: 20px;
            }

            .code-block {
                font-size: 0.8rem;
                padding: 15px;
            }

            .grid-2,
            .grid-3 {
                grid-template-columns: 1fr;
            }

            .section-nav {
                position: static;
                margin-bottom: 20px;
            }

            .tabs {
                flex-direction: column;
            }

            .tab {
                width: 100%;
                text-align: center;
            }

            .crud-diagram {
                grid-template-columns: repeat(2, 1fr);
            }

            .step-indicator {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .step-indicator::before {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="nav-progress">
        <div class="nav-progress-bar" id="progressBar"></div>
    </div>

    <div class="container">
        <header>
            <h1>🔗 Integração HTML + PHP</h1>
            <p>Domine formulários, uploads, sessões, segurança e CRUD completo</p>
        </header>

        <img src="https://image.qwenlm.ai/public_source/3563890c-b866-4f9e-9d42-71941393d625/198a2ffa6-f2a0-470f-afaf-36848aa6db9e.png" alt="Integração HTML PHP com formulários e banco de dados" class="lesson-image">

        <div class="grid-2">
            <div class="section-nav">
                <h4>📚 Navegação da Aula</h4>
                <ul>
                    <li><a href="#intro">1. Introdução</a></li>
                    <li><a href="#html-php">2. HTML + PHP</a></li>
                    <li><a href="#validation">3. Validação</a></li>
                    <li><a href="#upload">4. Upload de Arquivos</a></li>
                    <li><a href="#sessions">5. Sessões e Cookies</a></li>
                    <li><a href="#security">6. Segurança</a></li>
                    <li><a href="#crud">7. CRUD MySQL</a></li>
                    <li><a href="#challenge">8. Desafio</a></li>
                    <li><a href="#quiz">9. Quiz</a></li>
                    <li><a href="#summary">10. Resumo</a></li>
                </ul>
            </div>

            <div class="interactive-demo">
                <h3>🎯 Simulador de Formulário PHP</h3>
                <p style="margin-bottom: 15px; color: var(--gray);">Teste validações em tempo real</p>
                
                <form id="formSimulator">
                    <label>Nome:</label>
                    <input type="text" id="simName" placeholder="Seu nome" required>
                    
                    <label>Email:</label>
                    <input type="email" id="simEmail" placeholder="email@exemplo.com" required><br />
                    
                    <label>Senha:</label>
                    <input type="password" id="simPassword" placeholder="Mínimo 8 caracteres" required>
                    
                    <label>Upload (simulado):</label>
                    <input type="file" id="simFile" accept="image/*,.pdf"><br />
                    
                    <button type="submit" class="btn btn-primary">
                        🚀 Validar Dados
                    </button>
                </form>
                
                <div class="result-display" id="simResult">
                    <em>Os resultados da validação aparecerão aqui...</em>
                </div>
            </div>
        </div>

        <!-- Introdução -->
        <section id="intro" class="card">
            <h2>📖 1. Introdução à Integração HTML + PHP</h2>
            <p>Agora que você já conhece os fundamentos do PHP e processamento de formulários, vamos aprender a integrar completamente HTML com PHP para criar aplicações web dinâmicas e seguras.</p>
            
            <div class="info-box">
                <strong>💡 O que você vai aprender:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Integração completa de HTML com PHP</li>
                    <li>Validação avançada de formulários</li>
                    <li>Upload seguro de arquivos</li>
                    <li>Gerenciamento de sessões e cookies</li>
                    <li>Segurança em formulários (XSS, CSRF, SQL Injection)</li>
                    <li>CRUD completo com PHP + MySQL</li>
                </ul>
            </div>

            <div class="step-indicator">
                <div>
                    <div class="step active">1</div>
                    <div class="step-label">HTML</div>
                </div>
                <div>
                    <div class="step active">2</div>
                    <div class="step-label">PHP</div>
                </div>
                <div>
                    <div class="step active">3</div>
                    <div class="step-label">MySQL</div>
                </div>
                <div>
                    <div class="step">4</div>
                    <div class="step-label">CRUD</div>
                </div>
            </div>

            <div class="success-box">
                <strong>✅ Pré-requisitos desta aula:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Conhecimento de HTML e CSS</li>
                    <li>Variáveis e tipos de dados em PHP</li>
                    <li>Processamento de formulários (POST/GET)</li>
                    <li>Estruturas de controle (if, switch, loops)</li>
                </ul>
            </div>
        </section>

        <!-- HTML + PHP Integration -->
        <section id="html-php" class="card">
            <h2>🔗 2. Integração HTML + PHP</h2>
            <p>Aprenda a misturar HTML e PHP de forma eficiente para criar páginas dinâmicas.</p>

            <div class="tabs">
                <button class="tab active" onclick="showTab('php-in-html')">PHP no HTML</button>
                <button class="tab" onclick="showTab('html-in-php')">HTML no PHP</button>
                <button class="tab" onclick="showTab('templates')">Templates</button>
            </div>

            <div id="php-in-html" class="tab-content active">
                <h3>Inserindo PHP dentro do HTML</h3>
                <span class="badge badge-basic">Básico</span>
                <div class="code-block">
<span class="comment">&lt;!-- pagina.php --&gt;</span>
<span class="tag">&lt;!DOCTYPE html&gt;</span>
<span class="tag">&lt;html</span> <span class="attr">lang</span>=<span class="string">"pt-BR"</span><span class="tag">&gt;</span>
<span class="tag">&lt;head&gt;</span>
    <span class="tag">&lt;meta</span> <span class="attr">charset</span>=<span class="string">"UTF-8"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;title&gt;</span><?php echo "Título Dinâmico"; ?><span class="tag">&lt;/title&gt;</span>
<span class="tag">&lt;/head&gt;</span>
<span class="tag">&lt;body&gt;</span>
    <span class="tag">&lt;h1&gt;</span>Bem-vindo, <?php echo $nome; ?>!<span class="tag">&lt;/h1&gt;</span>
    
    <span class="comment">&lt;!-- Interpolação direta --&gt;</span>
    <span class="tag">&lt;p&gt;</span>Hoje é <?php echo date('d/m/Y'); ?><span class="tag">&lt;/p&gt;</span>
    
    <span class="comment">&lt;!-- Condicionais no HTML --&gt;</span>
    <?php if ($usuarioLogado): ?>
        <span class="tag">&lt;p&gt;</span>Olá, <?php echo $nomeUsuario; ?>!<span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;a</span> <span class="attr">href</span>=<span class="string">"logout.php"</span><span class="tag">&gt;</span>Sair<span class="tag">&lt;/a&gt;</span>
    <?php else: ?>
        <span class="tag">&lt;a</span> <span class="attr">href</span>=<span class="string">"login.php"</span><span class="tag">&gt;</span>Entrar<span class="tag">&lt;/a&gt;</span>
    <?php endif; ?>
    
    <span class="comment">&lt;!-- Loop no HTML --&gt;</span>
    <span class="tag">&lt;ul&gt;</span>
    <?php foreach ($itens as $item): ?>
        <span class="tag">&lt;li&gt;</span><?php echo $item; ?><span class="tag">&lt;/li&gt;</span>
    <?php endforeach; ?>
    <span class="tag">&lt;/ul&gt;</span>
<span class="tag">&lt;/body&gt;</span>
<span class="tag">&lt;/html&gt;</span>
                </div>

                <div class="info-box">
                    <strong>💡 Sintaxe Alternativa:</strong>
                    <p style="margin-top: 10px;">Use <code><?php if ($variave): ?> ... <?php endif; ?></code> para melhor legibilidade em templates HTML.</p>
                </div>
            </div>

            <div id="html-in-php" class="tab-content">
                <h3>Gerando HTML com PHP</h3>
                <span class="badge badge-intermediate">Intermediário</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Gerando HTML dinamicamente</span>

<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="variable">$itens</span> = [<span class="string">"Item 1"</span>, <span class="string">"Item 2"</span>, <span class="string">"Item 3"</span>];

<span class="comment"># Método 1: echo múltiplo</span>
<span class="function">echo</span> <span class="string">'&lt;!DOCTYPE html&gt;'</span>;
<span class="function">echo</span> <span class="string">'&lt;html&gt;&lt;head&gt;&lt;title&gt;Página&lt;/title&gt;&lt;/head&gt;&lt;body&gt;'</span>;
<span class="function">echo</span> <span class="string">"&lt;h1&gt;Bem-vindo, </span><span class="variable">$nome</span><span class="string">!&lt;/h1&gt;"</span>;
<span class="function">echo</span> <span class="string">'&lt;/body&gt;&lt;/html&gt;'</span>;

<span class="comment"># Método 2: Heredoc (mais limpo)</span>
<span class="variable">$html</span> = <<<HTML
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;&lt;title&gt;Página de {$nome}&lt;/title&gt;&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Bem-vindo, {$nome}!&lt;/h1&gt;
    &lt;ul&gt;
HTML;

<span class="keyword">foreach</span> (<span class="variable">$itens</span> <span class="keyword">as</span> <span class="variable">$item</span>) {
    <span class="variable">$html</span> .= <span class="string">"&lt;li&gt;</span><span class="variable">$item</span><span class="string">&lt;/li&gt;"</span>;
}

<span class="variable">$html</span> .= <<<HTML
    &lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;
HTML;

<span class="function">echo</span> <span class="variable">$html</span>;
<span class="comment">?&gt;</span>
                </div>

                <div class="warning-box">
                    <strong>⚠️ Cuidado com aspas:</strong>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Aspas duplas ("") interpolam variáveis</li>
                        <li>Aspas simples ('') não interpolam</li>
                        <li>Use heredoc para HTML complexo</li>
                    </ul>
                </div>
            </div>

            <div id="templates" class="tab-content">
                <h3>Sistema de Templates</h3>
                <span class="badge badge-advanced">Avançado</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># config.php - Configurações globais</span>
<span class="variable">$siteNome</span> = <span class="string">"Meu Site"</span>;
<span class="variable">$usuarioLogado</span> = <span class="keyword">true</span>;
<span class="variable">$nomeUsuario</span> = <span class="string">"Vitório"</span>;

<span class="comment"># header.php - Cabeçalho reutilizável</span>
<span class="comment">?&gt;</span>
<span class="tag">&lt;!DOCTYPE html&gt;</span>
<span class="tag">&lt;html</span> <span class="attr">lang</span>=<span class="string">"pt-BR"</span><span class="tag">&gt;</span>
<span class="tag">&lt;head&gt;</span>
    <span class="tag">&lt;meta</span> <span class="attr">charset</span>=<span class="string">"UTF-8"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;title&gt;</span><?php echo $siteNome; ?><span class="tag">&lt;/title&gt;</span>
<span class="tag">&lt;/head&gt;</span>
<span class="tag">&lt;body&gt;</span>
    <span class="tag">&lt;header&gt;</span>
        <span class="tag">&lt;nav&gt;</span>
            <span class="tag">&lt;a</span> <span class="attr">href</span>=<span class="string">"index.php"</span><span class="tag">&gt;</span>Início<span class="tag">&lt;/a&gt;</span>
            <?php if ($usuarioLogado): ?>
                <span class="tag">&lt;span&gt;</span>Olá, <?php echo $nomeUsuario; ?><span class="tag">&lt;/span&gt;</span>
            <?php endif; ?>
        <span class="tag">&lt;/nav&gt;</span>
    <span class="tag">&lt;/header&gt;</span>
    <span class="tag">&lt;main&gt;</span>
<span class="comment">&lt;?php</span>

<span class="comment"># index.php - Página principal</span>
<span class="function">require</span> <span class="string">'config.php'</span>;
<span class="function">require</span> <span class="string">'header.php'</span>;
<span class="comment">?&gt;</span>

<span class="tag">&lt;h1&gt;</span>Página Principal<span class="tag">&lt;/h1&gt;</span>
<span class="tag">&lt;p&gt;</span>Conteúdo da página...<span class="tag">&lt;/p&gt;</span>

<span class="comment">&lt;?php</span>
<span class="function">require</span> <span class="string">'footer.php'</span>;
<span class="comment">?&gt;</span>
                </div>

                <div class="success-box">
                    <strong>✅ Vantagens dos Templates:</strong>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Código reutilizável (DRY)</li>
                        <li>Manutenção facilitada</li>
                        <li>Separação de responsabilidades</li>
                        <li>Equipes podem trabalhar em paralelo</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Validação Avançada -->
        <section id="validation" class="card">
            <h2>✅ 3. Validação Avançada de Formulários</h2>
            <p>Valide dados do lado do servidor para garantir segurança e integridade dos dados.</p>

            <div class="tabs">
                <button class="tab active" onclick="showTab('basic-validation')">Básica</button>
                <button class="tab" onclick="showTab('filter-validation')">Filter_var</button>
                <button class="tab" onclick="showTab('custom-validation')">Customizada</button>
            </div>

            <div id="basic-validation" class="tab-content active">
                <h3>Validação Básica</h3>
                <span class="badge badge-basic">Básico</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="variable">$erros</span> = [];

<span class="comment"># Verificar se formulário foi enviado</span>
<span class="keyword">if</span> (<span class="variable">$_SERVER</span>[<span class="string">'REQUEST_METHOD'</span>] === <span class="string">'POST'</span>) {
    
    <span class="comment"># Campo obrigatório</span>
    <span class="keyword">if</span> (<span class="keyword">empty</span>(<span class="variable">$_POST</span>[<span class="string">'nome'</span>])) {
        <span class="variable">$erros</span>[] = <span class="string">"Nome é obrigatório"</span>;
    }
    
    <span class="comment"># Tamanho mínimo</span>
    <span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$_POST</span>[<span class="string">'nome'</span>]) < 3) {
        <span class="variable">$erros</span>[] = <span class="string">"Nome deve ter pelo menos 3 caracteres"</span>;
    }
    
    <span class="comment"># Email válido</span>
    <span class="keyword">if</span> (!<span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'email'</span>], FILTER_VALIDATE_EMAIL)) {
        <span class="variable">$erros</span>[] = <span class="string">"Email inválido"</span>;
    }
    
    <span class="comment"># Senha forte</span>
    <span class="variable">$senha</span> = <span class="variable">$_POST</span>[<span class="string">'senha'</span>];
    <span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$senha</span>) < 8) {
        <span class="variable">$erros</span>[] = <span class="string">"Senha deve ter pelo menos 8 caracteres"</span>;
    }
    
    <span class="comment"># Confirmar senha</span>
    <span class="keyword">if</span> (<span class="variable">$senha</span> !== <span class="variable">$_POST</span>[<span class="string">'confirmar_senha'</span>]) {
        <span class="variable">$erros</span>[] = <span class="string">"Senhas não coincidem"</span>;
    }
    
    <span class="comment"># Se não houver erros</span>
    <span class="keyword">if</span> (<span class="keyword">empty</span>(<span class="variable">$erros</span>)) {
        <span class="comment"># Processar dados...</span>
        <span class="variable">$sucesso</span> = <span class="string">"Cadastro realizado com sucesso!"</span>;
    }
}
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="filter-validation" class="tab-content">
                <h3>Usando filter_var()</h3>
                <span class="badge badge-intermediate">Intermediário</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Filtros de validação</span>

<span class="comment"># Email</span>
<span class="variable">$email</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'email'</span>], FILTER_VALIDATE_EMAIL);

<span class="comment"># URL</span>
<span class="variable">$url</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'website'</span>], FILTER_VALIDATE_URL);

<span class="comment"># Inteiro</span>
<span class="variable">$idade</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'idade'</span>], FILTER_VALIDATE_INT, [
    <span class="string">'options'</span> => [<span class="string">'min_range'</span> => 18, <span class="string">'max_range'</span> => 100]
]);

<span class="comment"># IP</span>
<span class="variable">$ip</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'ip'</span>], FILTER_VALIDATE_IP);

<span class="comment"># Filtros de sanitização</span>

<span class="comment"># Remover tags HTML</span>
<span class="variable">$nome</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'nome'</span>], FILTER_SANITIZE_STRING);

<span class="comment"># Sanitizar email</span>
<span class="variable">$email</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'email'</span>], FILTER_SANITIZE_EMAIL);

<span class="comment"># Sanitizar URL</span>
<span class="variable">$url</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'website'</span>], FILTER_SANITIZE_URL);

<span class="comment"># Sanitizar inteiro</span>
<span class="variable">$idade</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'idade'</span>], FILTER_SANITIZE_NUMBER_INT);
<span class="comment">?&gt;</span>
                </div>

                <div class="info-box">
                    <strong>💡 Dica:</strong> Sempre sanitize os dados antes de usar, mesmo após validar!
                </div>
            </div>

            <div id="custom-validation" class="tab-content">
                <h3>Validação Customizada</h3>
                <span class="badge badge-advanced">Avançado</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="keyword">function</span> <span class="function">validarCPF</span>(<span class="variable">$cpf</span>) {
    <span class="comment"># Remove caracteres não numéricos</span>
    <span class="variable">$cpf</span> = <span class="function">preg_replace</span>(<span class="string">'/[^0-9]/'</span>, <span class="string">''</span>, <span class="variable">$cpf</span>);
    
    <span class="comment"># Verifica se tem 11 dígitos</span>
    <span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$cpf</span>) !== 11) {
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
    
    <span class="comment"># Verifica se todos os dígitos são iguais</span>
    <span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="string">'/(\d)\1{10}/'</span>, <span class="variable">$cpf</span>)) {
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
    
    <span class="comment"># Validação dos dígitos verificadores</span>
    <span class="comment"># ... (algoritmo completo do CPF)</span>
    
    <span class="keyword">return</span> <span class="keyword">true</span>;
}

<span class="keyword">function</span> <span class="function">validarTelefone</span>(<span class="variable">$telefone</span>) {
    <span class="variable">$telefone</span> = <span class="function">preg_replace</span>(<span class="string">'/[^0-9]/'</span>, <span class="string">''</span>, <span class="variable">$telefone</span>);
    
    <span class="comment"># Aceita 10 ou 11 dígitos</span>
    <span class="keyword">if</span> (!<span class="function">in_array</span>(<span class="function">strlen</span>(<span class="variable">$telefone</span>), [10, 11])) {
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
    
    <span class="keyword">return</span> <span class="keyword">true</span>;
}

<span class="keyword">function</span> <span class="function">validarSenhaForte</span>(<span class="variable">$senha</span>) {
    <span class="comment"># Mínimo 8 caracteres</span>
    <span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$senha</span>) < 8) {
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
    
    <span class="comment"># Pelo menos uma letra maiúscula</span>
    <span class="keyword">if</span> (!<span class="function">preg_match</span>(<span class="string">'/[A-Z]/'</span>, <span class="variable">$senha</span>)) {
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
    
    <span class="comment"># Pelo menos um número</span>
    <span class="keyword">if</span> (!<span class="function">preg_match</span>(<span class="string">'/[0-9]/'</span>, <span class="variable">$senha</span>)) {
        <span class="keyword">return</span> <span class="keyword">false</span>;
    }
    
    <span class="keyword">return</span> <span class="keyword">true</span>;
}

<span class="comment"># Uso</span>
<span class="keyword">if</span> (!<span class="function">validarCPF</span>(<span class="variable">$_POST</span>[<span class="string">'cpf'</span>])) {
    <span class="variable">$erros</span>[] = <span class="string">"CPF inválido"</span>;
}
<span class="comment">?&gt;</span>
                </div>
            </div>
        </section>

        <!-- Upload de Arquivos -->
        <section id="upload" class="card">
            <h2>📁 4. Upload de Arquivos</h2>
            <p>Aprenda a fazer upload de arquivos de forma segura e eficiente.</p>

            <div class="grid-2">
                <div>
                    <h3>Formulário de Upload</h3>
                    <div class="code-block">
<span class="comment">&lt;!-- upload.html --&gt;</span>
<span class="tag">&lt;form</span> <span class="attr">action</span>=<span class="string">"processa_upload.php"</span> 
      <span class="attr">method</span>=<span class="string">"POST"</span> 
      <span class="attr">enctype</span>=<span class="string">"multipart/form-data"</span><span class="tag">&gt;</span>
    
    <span class="tag">&lt;label&gt;</span>Selecione o arquivo:<span class="tag">&lt;/label&gt;</span>
    <span class="tag">&lt;input</span> <span class="attr">type</span>=<span class="string">"file"</span> <span class="attr">name</span>=<span class="string">"arquivo"</span> 
           <span class="attr">accept</span>=<span class="string">"image/*,.pdf"</span> <span class="attr">required</span><span class="tag">&gt;</span>
    
    <span class="tag">&lt;button</span> <span class="attr">type</span>=<span class="string">"submit"</span><span class="tag">&gt;</span>Enviar<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;/form&gt;</span>

<span class="comment"># enctype é OBRIGATÓRIO para upload!</span>
                    </div>
                </div>

                <div>
                    <h3>Processamento PHP</h3>
                    <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="variable">$diretorio</span> = <span class="string">"uploads/"</span>;
<span class="variable">$arquivo</span> = <span class="variable">$_FILES</span>[<span class="string">'arquivo'</span>];

<span class="comment"># Verificar erros</span>
<span class="keyword">if</span> (<span class="variable">$arquivo</span>[<span class="string">'error'</span>] !== UPLOAD_ERR_OK) {
    <span class="variable">$erros</span>[] = <span class="string">"Erro no upload"</span>;
}

<span class="comment"># Validar tamanho (2MB)</span>
<span class="variable">$tamanhoMaximo</span> = 2 * 1024 * 1024;
<span class="keyword">if</span> (<span class="variable">$arquivo</span>[<span class="string">'size'</span>] > <span class="variable">$tamanhoMaximo</span>) {
    <span class="variable">$erros</span>[] = <span class="string">"Arquivo muito grande"</span>;
}

<span class="comment"># Validar extensão</span>
<span class="variable">$extensoesPermitidas</span> = [<span class="string">'jpg'</span>, <span class="string">'jpeg'</span>, <span class="string">'png'</span>, <span class="string">'pdf'</span>];
<span class="variable">$extensao</span> = <span class="function">strtolower</span>(<span class="function">pathinfo</span>(<span class="variable">$arquivo</span>[<span class="string">'name'</span>], PATHINFO_EXTENSION));

<span class="keyword">if</span> (!<span class="function">in_array</span>(<span class="variable">$extensao</span>, <span class="variable">$extensoesPermitidas</span>)) {
    <span class="variable">$erros</span>[] = <span class="string">"Extensão não permitida"</span>;
}

<span class="comment"># Gerar nome único</span>
<span class="variable">$novoNome</span> = <span class="function">uniqid</span>() . <span class="string">'.'</span> . <span class="variable">$extensao</span>;

<span class="comment"># Mover arquivo</span>
<span class="keyword">if</span> (<span class="function">move_uploaded_file</span>(<span class="variable">$arquivo</span>[<span class="string">'tmp_name'</span>], <span class="variable">$diretorio</span> . <span class="variable">$novoNome</span>)) {
    <span class="variable">$sucesso</span> = <span class="string">"Upload realizado!"</span>;
}
<span class="comment">?&gt;</span>
                    </div>
                </div>
            </div>

            <div class="warning-box">
                <strong>⚠️ Segurança no Upload:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Nunca confie apenas na extensão do arquivo</li>
                    <li>Valide o MIME type com <code>finfo_file()</code></li>
                    <li>Armazene uploads fora da raiz web quando possível</li>
                    <li>Renomeie arquivos para evitar sobrescrita</li>
                    <li>Limite o tamanho máximo dos arquivos</li>
                </ul>
            </div>

            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Validação avançada de MIME type</span>
<span class="variable">$finfo</span> = <span class="keyword">new</span> <span class="type">finfo</span>(FILEINFO_MIME_TYPE);
<span class="variable">$mimeType</span> = <span class="variable">$finfo</span>-><span class="function">file</span>(<span class="variable">$arquivo</span>[<span class="string">'tmp_name'</span>]);

<span class="variable">$mimePermitidos</span> = [
    <span class="string">'image/jpeg'</span>,
    <span class="string">'image/png'</span>,
    <span class="string">'application/pdf'</span>
];

<span class="keyword">if</span> (!<span class="function">in_array</span>(<span class="variable">$mimeType</span>, <span class="variable">$mimePermitidos</span>)) {
    <span class="variable">$erros</span>[] = <span class="string">"Tipo de arquivo não permitido"</span>;
}
<span class="comment">?&gt;</span>
            </div>
        </section>

        <!-- Sessões e Cookies -->
        <section id="sessions" class="card">
            <h2>🍪 5. Sessões e Cookies</h2>
            <p>Gerencie estado e dados persistentes entre páginas.</p>

            <div class="tabs">
                <button class="tab active" onclick="showTab('sessions-tab')">Sessões</button>
                <button class="tab" onclick="showTab('cookies-tab')">Cookies</button>
                <button class="tab" onclick="showTab('comparison-tab')">Comparação</button>
            </div>

            <div id="sessions-tab" class="tab-content active">
                <h3>Trabalhando com Sessões</h3>
                <span class="badge badge-intermediate">Intermediário</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Iniciar sessão (DEVE ser a primeira linha)</span>
<span class="function">session_start</span>();

<span class="comment"># Armazenar dados na sessão</span>
<span class="variable">$_SESSION</span>[<span class="string">'usuario_id'</span>] = 1;
<span class="variable">$_SESSION</span>[<span class="string">'usuario_nome'</span>] = <span class="string">"Vitório"</span>;
<span class="variable">$_SESSION</span>[<span class="string">'usuario_email'</span>] = <span class="string">"vitorio@email.com"</span>;
<span class="variable">$_SESSION</span>[<span class="string">'logado'</span>] = <span class="keyword">true</span>;

<span class="comment"># Acessar dados da sessão</span>
<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_SESSION</span>[<span class="string">'usuario_nome'</span>])) {
    <span class="function">echo</span> <span class="string">"Bem-vindo, "</span> . <span class="variable">$_SESSION</span>[<span class="string">'usuario_nome'</span>];
}

<span class="comment"># Verificar se usuário está logado</span>
<span class="keyword">if</span> (!<span class="keyword">isset</span>(<span class="variable">$_SESSION</span>[<span class="string">'logado'</span>]) || <span class="variable">$_SESSION</span>[<span class="string">'logado'</span>] !== <span class="keyword">true</span>) {
    <span class="function">header</span>(<span class="string">'Location: login.php'</span>);
    <span class="function">exit</span>;
}

<span class="comment"># Remover um item da sessão</span>
<span class="function">unset</span>(<span class="variable">$_SESSION</span>[<span class="string">'carrinho'</span>]);

<span class="comment"># Destruir toda a sessão (logout)</span>
<span class="variable">$_SESSION</span> = [];
<span class="function">session_destroy</span>();

<span class="comment"># Flash messages (mensagem única)</span>
<span class="variable">$_SESSION</span>[<span class="string">'flash_sucesso'</span>] = <span class="string">"Cadastro realizado!"</span>;

<span class="comment"># Na próxima página</span>
<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_SESSION</span>[<span class="string">'flash_sucesso'</span>])) {
    <span class="function">echo</span> <span class="variable">$_SESSION</span>[<span class="string">'flash_sucesso'</span>];
    <span class="function">unset</span>(<span class="variable">$_SESSION</span>[<span class="string">'flash_sucesso'</span>]);
}
<span class="comment">?&gt;</span>
                </div>

                <div class="info-box">
                    <strong>💡 Importante:</strong>
                    <p style="margin-top: 10px;"><code>session_start()</code> deve ser a PRIMEIRA linha do seu script PHP, antes de qualquer output HTML!</p>
                </div>
            </div>

            <div id="cookies-tab" class="tab-content">
                <h3>Trabalhando com Cookies</h3>
                <span class="badge badge-intermediate">Intermediário</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Criar cookie (antes de qualquer output)</span>
<span class="function">setcookie</span>(<span class="string">'usuario'</span>, <span class="string">'Vitório'</span>, <span class="function">time</span>() + 3600); <span class="comment"># 1 hora</span>

<span class="comment"># Cookie com mais opções</span>
<span class="function">setcookie</span>(
    <span class="string">'usuario'</span>,           <span class="comment"># nome</span>
    <span class="string">'Vitório'</span>,            <span class="comment"># valor</span>
    <span class="function">time</span>() + 86400,        <span class="comment"># expiração (24 horas)</span>
    <span class="string">'/'</span>,                   <span class="comment"># caminho</span>
    <span class="string">'seudominio.com'</span>,      <span class="comment"># domínio</span>
    <span class="keyword">true</span>,                  <span class="comment"># secure (apenas HTTPS)</span>
    <span class="keyword">true</span>                   <span class="comment"># httponly (não acessível via JS)</span>
);

<span class="comment"># Acessar cookie</span>
<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_COOKIE</span>[<span class="string">'usuario'</span>])) {
    <span class="function">echo</span> <span class="string">"Olá, "</span> . <span class="variable">$_COOKIE</span>[<span class="string">'usuario'</span>];
}

<span class="comment"># Deletar cookie</span>
<span class="function">setcookie</span>(<span class="string">'usuario'</span>, <span class="string">''</span>, <span class="function">time</span>() - 3600);

<span class="comment"># Cookie seguro para remember-me</span>
<span class="variable">$token</span> = <span class="function">bin2hex</span>(<span class="function">random_bytes</span>(32));
<span class="function">setcookie</span>(<span class="string">'remember_token'</span>, <span class="variable">$token</span>, <span class="function">time</span>() + 604800, <span class="string">'/'</span>, <span class="string">''</span>, <span class="keyword">true</span>, <span class="keyword">true</span>);
<span class="comment">?&gt;</span>
                </div>

                <div class="warning-box">
                    <strong>⚠️ Segurança em Cookies:</strong>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Use <code>httponly=true</code> para prevenir XSS</li>
                        <li>Use <code>secure=true</code> para enviar apenas via HTTPS</li>
                        <li>Nunca armazene dados sensíveis em cookies</li>
                        <li>Cookies são visíveis ao usuário</li>
                    </ul>
                </div>
            </div>

            <div id="comparison-tab" class="tab-content">
                <h3>Sessão vs Cookie</h3>
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>Sessão</th>
                            <th>Cookie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Armazenamento</strong></td>
                            <td>Servidor</td>
                            <td>Navegador do cliente</td>
                        </tr>
                        <tr>
                            <td><strong>Segurança</strong></td>
                            <td>Mais seguro</td>
                            <td>Menos seguro</td>
                        </tr>
                        <tr>
                            <td><strong>Capacidade</strong></td>
                            <td>Quase ilimitada</td>
                            <td>~4KB por cookie</td>
                        </tr>
                        <tr>
                            <td><strong>Duração</strong></td>
                            <td>Até sessão terminar</td>
                            <td>Até expiração definida</td>
                        </tr>
                        <tr>
                            <td><strong>Acesso</strong></td>
                            <td>PHP (servidor)</td>
                            <td>PHP + JavaScript</td>
                        </tr>
                        <tr>
                            <td><strong>Uso Ideal</strong></td>
                            <td>Dados sensíveis, login</td>
                            <td>Preferências, remember-me</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Segurança -->
        <section id="security" class="card">
            <h2>🔒 6. Segurança em Formulários</h2>
            <p>Proteja sua aplicação contra as principais vulnerabilidades web.</p>

            <div class="crud-diagram">
                <div class="crud-card" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
                    <h4>🚫</h4>
                    <p>XSS</p>
                </div>
                <div class="crud-card" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                    <h4>🛡️</h4>
                    <p>CSRF</p>
                </div>
                <div class="crud-card" style="background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);">
                    <h4>🗄️</h4>
                    <p>SQL Injection</p>
                </div>
                <div class="crud-card" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                    <h4>🔐</h4>
                    <p>Hash de Senhas</p>
                </div>
            </div>

            <div class="tabs">
                <button class="tab active" onclick="showTab('xss-tab')">XSS</button>
                <button class="tab" onclick="showTab('csrf-tab')">CSRF</button>
                <button class="tab" onclick="showTab('sql-tab')">SQL Injection</button>
                <button class="tab" onclick="showTab('password-tab')">Senhas</button>
            </div>

            <div id="xss-tab" class="tab-content active">
                <h3>Prevenção contra XSS</h3>
                <span class="badge badge-advanced">Avançado</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># ❌ VULNERÁVEL A XSS</span>
<span class="variable">$nome</span> = <span class="variable">$_GET</span>[<span class="string">'nome'</span>];
<span class="function">echo</span> <span class="string">"Olá, "</span> . <span class="variable">$nome</span>;
<span class="comment"># Se nome = &lt;script&gt;alert('XSS')&lt;/script&gt;</span>

<span class="comment"># ✅ SEGURO - Usando htmlspecialchars</span>
<span class="variable">$nome</span> = <span class="function">htmlspecialchars</span>(<span class="variable">$_GET</span>[<span class="string">'nome'</span>], ENT_QUOTES, <span class="string">'UTF-8'</span>);
<span class="function">echo</span> <span class="string">"Olá, "</span> . <span class="variable">$nome</span>;
<span class="comment"># Output: &amp;lt;script&amp;gt;alert('XSS')&amp;lt;/script&amp;gt;</span>

<span class="comment"># Função helper para output seguro</span>
<span class="keyword">function</span> <span class="function">e</span>(<span class="variable">$string</span>) {
    <span class="keyword">return</span> <span class="function">htmlspecialchars</span>(<span class="variable">$string</span>, ENT_QUOTES, <span class="string">'UTF-8'</span>);
}

<span class="comment"># Uso</span>
<span class="function">echo</span> <span class="function">e</span>(<span class="variable">$_POST</span>[<span class="string">'comentario'</span>]);
<span class="function">echo</span> <span class="function">e</span>(<span class="variable">$usuario</span>[<span class="string">'nome'</span>]);

<span class="comment"># Para HTML permitido (rich text)</span>
<span class="variable">$html</span> = <span class="function">strip_tags</span>(<span class="variable">$_POST</span>[<span class="string">'conteudo'</span>], <span class="string">'&lt;p&gt;&lt;br&gt;&lt;strong&gt;&lt;em&gt;'</span>);
<span class="comment">?&gt;</span>
                </div>

                <div class="danger-box">
                    <strong>🚫 XSS (Cross-Site Scripting):</strong>
                    <p style="margin-top: 10px;">Permite que atacantes injetem scripts maliciosos em suas páginas. Sempre escape output!</p>
                </div>
            </div>

            <div id="csrf-tab" class="tab-content">
                <h3>Prevenção contra CSRF</h3>
                <span class="badge badge-advanced">Avançado</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="function">session_start</span>();

<span class="comment"># Gerar token CSRF</span>
<span class="keyword">if</span> (<span class="keyword">empty</span>(<span class="variable">$_SESSION</span>[<span class="string">'csrf_token'</span>])) {
    <span class="variable">$_SESSION</span>[<span class="string">'csrf_token'</span>] = <span class="function">bin2hex</span>(<span class="function">random_bytes</span>(32));
}

<span class="comment"># No formulário HTML</span>
<span class="comment">?&gt;</span>
<span class="tag">&lt;form</span> <span class="attr">method</span>=<span class="string">"POST"</span> <span class="attr">action</span>=<span class="string">"processa.php"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;input</span> <span class="attr">type</span>=<span class="string">"hidden"</span> <span class="attr">name</span>=<span class="string">"csrf_token"</span> 
           <span class="attr">value</span>=<span class="string">"&lt;?php echo $_SESSION['csrf_token']; ?&gt;"</span><span class="tag">&gt;</span>
    <span class="comment"># ... outros campos</span>
<span class="tag">&lt;/form&gt;</span>
<span class="comment">&lt;?php</span>

<span class="comment"># Na validação</span>
<span class="keyword">if</span> (!<span class="keyword">isset</span>(<span class="variable">$_POST</span>[<span class="string">'csrf_token'</span>]) || 
    <span class="variable">$_POST</span>[<span class="string">'csrf_token'</span>] !== <span class="variable">$_SESSION</span>[<span class="string">'csrf_token'</span>]) {
    <span class="function">die</span>(<span class="string">"Token CSRF inválido!"</span>);
}

<span class="comment"># Regenerar token após uso</span>
<span class="variable">$_SESSION</span>[<span class="string">'csrf_token'</span>] = <span class="function">bin2hex</span>(<span class="function">random_bytes</span>(32));
<span class="comment">?&gt;</span>
                </div>

                <div class="info-box">
                    <strong>💡 CSRF (Cross-Site Request Forgery):</strong>
                    <p style="margin-top: 10px;">Ataques que forçam usuários a executar ações indesejadas. Use tokens únicos por sessão!</p>
                </div>
            </div>

            <div id="sql-tab" class="tab-content">
                <h3>Prevenção contra SQL Injection</h3>
                <span class="badge badge-advanced">Avançado</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># ❌ VULNERÁVEL A SQL INJECTION</span>
<span class="variable">$email</span> = <span class="variable">$_POST</span>[<span class="string">'email'</span>];
<span class="variable">$sql</span> = <span class="string">"SELECT * FROM usuarios WHERE email = '</span><span class="variable">$email</span><span class="string">'"</span>;
<span class="comment"># Se email = ' OR '1'='1</span>

<span class="comment"># ✅ SEGURO - Prepared Statements (PDO)</span>
<span class="variable">$pdo</span> = <span class="keyword">new</span> <span class="type">PDO</span>(<span class="string">"mysql:host=localhost;dbname=meubanco"</span>, <span class="string">"usuario"</span>, <span class="string">"senha"</span>);

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM usuarios WHERE email = :email"</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">':email'</span> => <span class="variable">$_POST</span>[<span class="string">'email'</span>]]);
<span class="variable">$usuario</span> = <span class="variable">$stmt</span>-><span class="function">fetch</span>();

<span class="comment"># Prepared Statement com múltiplos parâmetros</span>
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(
    <span class="string">"INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)"</span>
);
<span class="variable">$stmt</span>-><span class="function">execute</span>([
    <span class="string">':nome'</span> => <span class="variable">$_POST</span>[<span class="string">'nome'</span>],
    <span class="string">':email'</span> => <span class="variable">$_POST</span>[<span class="string">'email'</span>],
    <span class="string">':senha'</span> => <span class="function">password_hash</span>(<span class="variable">$_POST</span>[<span class="string">'senha'</span>], PASSWORD_DEFAULT)
]);

<span class="comment"># mysqli também suporta prepared statements</span>
<span class="variable">$mysqli</span> = <span class="keyword">new</span> <span class="type">mysqli</span>(<span class="string">"localhost"</span>, <span class="string">"usuario"</span>, <span class="string">"senha"</span>, <span class="string">"meubanco"</span>);
<span class="variable">$stmt</span> = <span class="variable">$mysqli</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM usuarios WHERE email = ?"</span>);
<span class="variable">$stmt</span>-><span class="function">bind_param</span>(<span class="string">"s"</span>, <span class="variable">$_POST</span>[<span class="string">'email'</span>]);
<span class="variable">$stmt</span>-><span class="function">execute</span>();
<span class="comment">?&gt;</span>
                </div>

                <div class="danger-box">
                    <strong>🚫 SQL Injection:</strong>
                    <p style="margin-top: 10px;">Permite que atacantes executem comandos SQL maliciosos. SEMPRE use Prepared Statements!</p>
                </div>
            </div>

            <div id="password-tab" class="tab-content">
                <h3>Hash Seguro de Senhas</h3>
                <span class="badge badge-advanced">Avançado</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># ❌ NUNCA faça isso</span>
<span class="variable">$senha</span> = <span class="function">md5</span>(<span class="variable">$_POST</span>[<span class="string">'senha'</span>]); <span class="comment"># Inseguro!</span>
<span class="variable">$senha</span> = <span class="function">sha1</span>(<span class="variable">$_POST</span>[<span class="string">'senha'</span>]); <span class="comment"># Inseguro!</span>

<span class="comment"># ✅ SEGURO - password_hash() e password_verify()</span>

<span class="comment"># Criar hash da senha (no cadastro)</span>
<span class="variable">$senhaHash</span> = <span class="function">password_hash</span>(<span class="variable">$_POST</span>[<span class="string">'senha'</span>], PASSWORD_DEFAULT);

<span class="comment"># Opções avançadas</span>
<span class="variable">$options</span> = [
    <span class="string">'cost'</span> => 12, <span class="comment"># Aumentar para mais segurança (mais lento)</span>
];
<span class="variable">$senhaHash</span> = <span class="function">password_hash</span>(<span class="variable">$_POST</span>[<span class="string">'senha'</span>], PASSWORD_BCRYPT, <span class="variable">$options</span>);

<span class="comment"># Verificar senha (no login)</span>
<span class="keyword">if</span> (<span class="function">password_verify</span>(<span class="variable">$_POST</span>[<span class="string">'senha'</span>], <span class="variable">$senhaHashDoBanco</span>)) {
    <span class="comment"># Senha correta!</span>
    <span class="variable">$_SESSION</span>[<span class="string">'logado'</span>] = <span class="keyword">true</span>;
} <span class="keyword">else</span> {
    <span class="comment"># Senha incorreta</span>
}

<span class="comment"># Verificar se precisa rehash (atualizar custo)</span>
<span class="keyword">if</span> (<span class="function">password_needs_rehash</span>(<span class="variable">$senhaHashDoBanco</span>, PASSWORD_DEFAULT)) {
    <span class="variable">$novoHash</span> = <span class="function">password_hash</span>(<span class="variable">$_POST</span>[<span class="string">'senha'</span>], PASSWORD_DEFAULT);
    <span class="comment"># Atualizar no banco de dados</span>
}
<span class="comment">?&gt;</span>
                </div>

                <div class="success-box">
                    <strong>✅ Boas Práticas:</strong>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Use <code>password_hash()</code> com <code>PASSWORD_DEFAULT</code></li>
                        <li>Use <code>password_verify()</code> para verificar</li>
                        <li>Nunca armazene senhas em texto puro</li>
                        <li>Implemente rate limiting para login</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- CRUD MySQL -->
        <section id="crud" class="card">
            <h2>🗄️ 7. CRUD Completo com PHP + MySQL</h2>
            <p>Aprenda a criar operações completas de Create, Read, Update e Delete.</p>

            <div class="crud-diagram">
                <div class="crud-card">
                    <h4>C</h4>
                    <p>Create<br>Inserir</p>
                </div>
                <div class="crud-card">
                    <h4>R</h4>
                    <p>Read<br>Ler</p>
                </div>
                <div class="crud-card">
                    <h4>U</h4>
                    <p>Update<br>Atualizar</p>
                </div>
                <div class="crud-card">
                    <h4>D</h4>
                    <p>Delete<br>Excluir</p>
                </div>
            </div>

            <div class="tabs">
                <button class="tab active" onclick="showTab('conexao-tab')">Conexão</button>
                <button class="tab" onclick="showTab('create-tab')">Create</button>
                <button class="tab" onclick="showTab('read-tab')">Read</button>
                <button class="tab" onclick="showTab('update-tab')">Update</button>
                <button class="tab" onclick="showTab('delete-tab')">Delete</button>
            </div>

            <div id="conexao-tab" class="tab-content active">
                <h3>Conexão com Banco de Dados</h3>
                <span class="badge badge-basic">Básico</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># config.php - Configuração do banco</span>

<span class="keyword">define</span>(<span class="string">'DB_HOST'</span>, <span class="string">'localhost'</span>);
<span class="keyword">define</span>(<span class="string">'DB_NAME'</span>, <span class="string">'meubanco'</span>);
<span class="keyword">define</span>(<span class="string">'DB_USER'</span>, <span class="string">'root'</span>);
<span class="keyword">define</span>(<span class="string">'DB_PASS'</span>, <span class="string">''</span>);
<span class="keyword">define</span>(<span class="string">'DB_CHARSET'</span>, <span class="string">'utf8mb4'</span>);

<span class="keyword">try</span> {
    <span class="variable">$pdo</span> = <span class="keyword">new</span> <span class="type">PDO</span>(
        <span class="string">"mysql:host=</span>"</span> . DB_HOST . <span class="string">";dbname=</span>"</span> . DB_NAME . <span class="string">";charset=</span>"</span> . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            <span class="type">PDO</span>::ATTR_ERRMODE => <span class="type">PDO</span>::ERRMODE_EXCEPTION,
            <span class="type">PDO</span>::ATTR_DEFAULT_FETCH_MODE => <span class="type">PDO</span>::FETCH_ASSOC,
            <span class="type">PDO</span>::ATTR_EMULATE_PREPARES => <span class="keyword">false</span>,
        ]
    );
} <span class="keyword">catch</span> (<span class="type">PDOException</span> <span class="variable">$e</span>) {
    <span class="function">die</span>(<span class="string">"Erro na conexão: "</span> . <span class="variable">$e</span>-><span class="function">getMessage</span>());
}
<span class="comment">?&gt;</span>
                </div>

                <div class="info-box">
                    <strong>💡 Configurações Importantes:</strong>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><code>ERRMODE_EXCEPTION</code> - Lança exceptions em erros</li>
                        <li><code>FETCH_ASSOC</code> - Retorna arrays associativos</li>
                        <li><code>EMULATE_PREPARES = false</code> - Prepared statements reais</li>
                    </ul>
                </div>
            </div>

            <div id="create-tab" class="tab-content">
                <h3>Create - Inserir Dados</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="keyword">require</span> <span class="string">'config.php'</span>;

<span class="keyword">if</span> (<span class="variable">$_SERVER</span>[<span class="string">'REQUEST_METHOD'</span>] === <span class="string">'POST'</span>) {
    <span class="variable">$nome</span> = <span class="function">filter_input</span>(INPUT_POST, <span class="string">'nome'</span>, FILTER_SANITIZE_STRING);
    <span class="variable">$email</span> = <span class="function">filter_input</span>(INPUT_POST, <span class="string">'email'</span>, FILTER_SANITIZE_EMAIL);
    <span class="variable">$senha</span> = <span class="function">password_hash</span>(<span class="function">filter_input</span>(INPUT_POST, <span class="string">'senha'</span>), PASSWORD_DEFAULT);
    
    <span class="variable">$sql</span> = <span class="string">"INSERT INTO usuarios (nome, email, senha, criado_em) 
                VALUES (:nome, :email, :senha, NOW())"</span>;
    
    <span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="variable">$sql</span>);
    <span class="variable">$stmt</span>-><span class="function">execute</span>([
        <span class="string">':nome'</span> => <span class="variable">$nome</span>,
        <span class="string">':email'</span> => <span class="variable">$email</span>,
        <span class="string">':senha'</span> => <span class="variable">$senha</span>
    ]);
    
    <span class="variable">$id</span> = <span class="variable">$pdo</span>-><span class="function">lastInsertId</span>();
    <span class="variable">$_SESSION</span>[<span class="string">'flash'</span>] = <span class="string">"Usuário cadastrado com ID: </span><span class="variable">$id</span><span class="string">"</span>;
    
    <span class="function">header</span>(<span class="string">'Location: lista.php'</span>);
    <span class="function">exit</span>;
}
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="read-tab" class="tab-content">
                <h3>Read - Listar Dados</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="keyword">require</span> <span class="string">'config.php'</span>;

<span class="comment"># Listar todos</span>
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">query</span>(<span class="string">"SELECT * FROM usuarios ORDER BY criado_em DESC"</span>);
<span class="variable">$usuarios</span> = <span class="variable">$stmt</span>-><span class="function">fetchAll</span>();

<span class="comment"># Listar com paginação</span>
<span class="variable">$pagina</span> = <span class="variable">$_GET</span>[<span class="string">'pagina'</span>] ?? 1;
<span class="variable">$porPagina</span> = 10;
<span class="variable">$offset</span> = (<span class="variable">$pagina</span> - 1) * <span class="variable">$porPagina</span>;

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(
    <span class="string">"SELECT * FROM usuarios ORDER BY criado_em DESC LIMIT :offset, :limite"</span>
);
<span class="variable">$stmt</span>-><span class="function">bindValue</span>(<span class="string">':offset'</span>, <span class="variable">$offset</span>, <span class="type">PDO</span>::PARAM_INT);
<span class="variable">$stmt</span>-><span class="function">bindValue</span>(<span class="string">':limite'</span>, <span class="variable">$porPagina</span>, <span class="type">PDO</span>::PARAM_INT);
<span class="variable">$stmt</span>-><span class="function">execute</span>();
<span class="variable">$usuarios</span> = <span class="variable">$stmt</span>-><span class="function">fetchAll</span>();

<span class="comment"># Buscar um único</span>
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM usuarios WHERE id = :id"</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">':id'</span> => <span class="variable">$_GET</span>[<span class="string">'id'</span>]]);
<span class="variable">$usuario</span> = <span class="variable">$stmt</span>-><span class="function">fetch</span>();

<span class="comment"># Buscar com filtro</span>
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(
    <span class="string">"SELECT * FROM usuarios WHERE nome LIKE :busca"</span>
);
<span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">':busca'</span> => <span class="string">"%</span><span class="variable">$_GET</span>[<span class="string">'busca'</span>]<span class="string">%"</span>]);
<span class="variable">$usuarios</span> = <span class="variable">$stmt</span>-><span class="function">fetchAll</span>();
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="update-tab" class="tab-content">
                <h3>Update - Atualizar Dados</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="keyword">require</span> <span class="string">'config.php'</span>;

<span class="keyword">if</span> (<span class="variable">$_SERVER</span>[<span class="string">'REQUEST_METHOD'</span>] === <span class="string">'POST'</span>) {
    <span class="variable">$id</span> = <span class="function">filter_input</span>(INPUT_POST, <span class="string">'id'</span>, FILTER_SANITIZE_NUMBER_INT);
    <span class="variable">$nome</span> = <span class="function">filter_input</span>(INPUT_POST, <span class="string">'nome'</span>, FILTER_SANITIZE_STRING);
    <span class="variable">$email</span> = <span class="function">filter_input</span>(INPUT_POST, <span class="string">'email'</span>, FILTER_SANITIZE_EMAIL);
    
    <span class="variable">$sql</span> = <span class="string">"UPDATE usuarios 
                SET nome = :nome, email = :email, atualizado_em = NOW() 
                WHERE id = :id"</span>;
    
    <span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="variable">$sql</span>);
    <span class="variable">$resultado</span> = <span class="variable">$stmt</span>-><span class="function">execute</span>([
        <span class="string">':id'</span> => <span class="variable">$id</span>,
        <span class="string">':nome'</span> => <span class="variable">$nome</span>,
        <span class="string">':email'</span> => <span class="variable">$email</span>
    ]);
    
    <span class="keyword">if</span> (<span class="variable">$resultado</span>) {
        <span class="variable">$_SESSION</span>[<span class="string">'flash'</span>] = <span class="string">"Usuário atualizado com sucesso!"</span>;
    }
    
    <span class="function">header</span>(<span class="string">'Location: lista.php'</span>);
    <span class="function">exit</span>;
}

<span class="comment"># Carregar dados para edição</span>
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM usuarios WHERE id = :id"</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">':id'</span> => <span class="variable">$_GET</span>[<span class="string">'id'</span>]]);
<span class="variable">$usuario</span> = <span class="variable">$stmt</span>-><span class="function">fetch</span>();
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="delete-tab" class="tab-content">
                <h3>Delete - Excluir Dados</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="keyword">require</span> <span class="string">'config.php'</span>;

<span class="comment"># Soft delete (recomendado)</span>
<span class="variable">$sql</span> = <span class="string">"UPDATE usuarios 
            SET ativo = 0, excluido_em = NOW() 
            WHERE id = :id"</span>;

<span class="comment"># Hard delete (exclusão permanente)</span>
<span class="variable">$sql</span> = <span class="string">"DELETE FROM usuarios WHERE id = :id"</span>;

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="variable">$sql</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">':id'</span> => <span class="variable">$_GET</span>[<span class="string">'id'</span>]]);

<span class="variable">$_SESSION</span>[<span class="string">'flash'</span>] = <span class="string">"Usuário excluído com sucesso!"</span>;
<span class="function">header</span>(<span class="string">'Location: lista.php'</span>);
<span class="function">exit</span>;
<span class="comment">?&gt;</span>

<span class="comment"># Confirmação em JavaScript</span>
<span class="tag">&lt;a</span> <span class="attr">href</span>=<span class="string">"excluir.php?id=&lt;?php echo $usuario['id']; ?&gt;"</span>
   <span class="attr">onclick</span>=<span class="string">"return confirm('Tem certeza que deseja excluir?')"</span><span class="tag">&gt;</span>
    Excluir
<span class="tag">&lt;/a&gt;</span>
                </div>

                <div class="warning-box">
                    <strong>⚠️ Cuidado ao Excluir:</strong>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Sempre confirme antes de excluir</li>
                        <li>Considere soft delete (marcar como inativo)</li>
                        <li>Verifique dependências em outras tabelas</li>
                        <li>Faça backup antes de operações em massa</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Desafio -->
        <section id="challenge" class="challenge-box">
            <h3>🎯 8. Desafio Prático: Sistema de Cadastro Completo</h3>
            <p>Crie um sistema completo de gerenciamento de usuários:</p>
            
            <ul>
                <li>✅ Formulário de cadastro com validação completa (nome, email, senha, confirmar senha)</li>
                <li>✅ Upload de foto de perfil (validar tipo e tamanho)</li>
                <li>✅ Hash de senha com password_hash()</li>
                <li>✅ Sistema de login com sessão</li>
                <li>✅ Página de lista de usuários (CRUD Read)</li>
                <li>✅ Edição e exclusão de usuários</li>
                <li>✅ Proteção CSRF em todos os formulários</li>
                <li>✅ Escape de output com htmlspecialchars()</li>
                <li>✅ Prepared statements em todas as queries</li>
                <li>✅ Flash messages para feedback</li>
            </ul>

            <div class="hint-box" onclick="toggleHint('hint1')">
                <strong>💡 Clique para ver estrutura sugerida</strong>
                <div id="hint1" class="hint-content">
                    <div class="code-block" style="background: rgba(50,0,255,0.5);">
# Estrutura de arquivos:
/config.php          - Conexão com banco
/functions.php       - Funções auxiliares
/cadastro.php        - Formulário de cadastro
/processa_cadastro.php
/login.php
/processa_login.php
/lista.php           - Listar usuários
/editar.php
/excluir.php
/logout.php
/uploads/            - Pasta para fotos
                    </div>
                </div>
            </div>

            <div class="code-block" style="background: rgba(255,255,255,0.2); margin-top: 20px;">
<span class="comment"># Critérios de Avaliação:</span>
✓ Validação completa de todos os campos
✓ Segurança (CSRF, XSS, SQL Injection)
✓ Hash de senhas
✓ Upload seguro de arquivos
✓ CRUD completo funcionando
✓ Código organizado e comentado
            </div>
        </section>

        <!-- Quiz -->
        <section id="quiz" class="quiz-container">
            <h2>🧠 9. Quiz de Conhecimento</h2>
            <p>Teste o que você aprendeu!</p>

            <div class="quiz-question" data-correct="2">
                <p><strong>1. Qual atributo é obrigatório no formulário para upload de arquivos?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) method="POST"</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) action="upload.php"</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) enctype="multipart/form-data"</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) target="_blank"</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> enctype="multipart/form-data" é obrigatório para upload de arquivos.
                </div>
            </div>

            <div class="quiz-question" data-correct="1">
                <p><strong>2. Qual função deve ser chamada antes de usar $_SESSION?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) session_init()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) session_start()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) session_begin()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) session_create()</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> session_start() deve ser a primeira linha do script.
                </div>
            </div>

            <div class="quiz-question" data-correct="0">
                <p><strong>3. Qual função previne ataques XSS ao exibir dados do usuário?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) htmlspecialchars()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) strip_tags()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) addslashes()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) trim()</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> htmlspecialchars() converte caracteres especiais em entidades HTML.
                </div>
            </div>

            <div class="quiz-question" data-correct="3">
                <p><strong>4. Como prevenir SQL Injection?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) Usar addslashes()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) Validar com filter_var()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) Usar mysqli_real_escape_string()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) Prepared Statements</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> Prepared Statements é a forma mais segura de prevenir SQL Injection.
                </div>
            </div>

            <div class="quiz-question" data-correct="1">
                <p><strong>5. Qual função usar para hash de senhas?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) md5()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) password_hash()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) sha1()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) crypt()</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> password_hash() é a função segura e recomendada para senhas.
                </div>
            </div>

            <div class="quiz-question" data-correct="2">
                <p><strong>6. O que significa CRUD?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) Create, Run, Update, Delete</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) Copy, Read, Update, Delete</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) Create, Read, Update, Delete</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) Create, Read, Upload, Download</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> CRUD são as 4 operações básicas: Create, Read, Update, Delete.
                </div>
            </div>
        </section>

        <!-- Resumo -->
        <section id="summary" class="card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <h2 style="color: white;">📝 10. Resumo da Aula</h2>
            <div class="grid-2">
                <div>
                    <h3 style="color: white;">✅ O que aprendemos:</h3>
                    <ul style="margin-left: 20px; line-height: 2;">
                        <li>Integração HTML + PHP (templates)</li>
                        <li>Validação avançada de formulários</li>
                        <li>Upload seguro de arquivos</li>
                        <li>Sessões e Cookies</li>
                        <li>Segurança: XSS, CSRF, SQL Injection</li>
                        <li>Hash de senhas com password_hash()</li>
                        <li>CRUD completo com PDO + MySQL</li>
                    </ul>
                </div>
                <div>
                    <h3 style="color: white;">📚 Próxima aula:</h3>
                    <ul style="margin-left: 20px; line-height: 2;">
                        <li>APIs REST com PHP</li>
                        <li>Autenticação JWT</li>
                        <li>Paginação avançada</li>
                        <li>Upload múltiplo de arquivos</li>
                        <li>Envio de emails</li>
                        <li>Deploy de aplicações PHP</li>
                    </ul>
                </div>
            </div>

            <div class="security-checklist" style="margin-top: 30px; background: rgba(255,255,255,0.1);">
                <h4 style="color: white; margin-bottom: 15px;">🔒 Checklist de Segurança</h4>
                <div class="security-item">
                    <input type="checkbox" id="sec1">
                    <label for="sec1" style="color: white;">Usar Prepared Statements em todas as queries</label>
                </div>
                <div class="security-item">
                    <input type="checkbox" id="sec2">
                    <label for="sec2" style="color: white;">Escapar output com htmlspecialchars()</label>
                </div>
                <div class="security-item">
                    <input type="checkbox" id="sec3">
                    <label for="sec3" style="color: white;">Implementar tokens CSRF em formulários</label>
                </div>
                <div class="security-item">
                    <input type="checkbox" id="sec4">
                    <label for="sec4" style="color: white;">Hash de senhas com password_hash()</label>
                </div>
                <div class="security-item">
                    <input type="checkbox" id="sec5">
                    <label for="sec5" style="color: white;">Validar upload de arquivos (tipo e tamanho)</label>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <p style="font-size: 1.2rem; margin-bottom: 20px;">🎉 Parabéns por completar esta aula!</p>
                <button class="btn btn-success" onclick="scrollToTop()">⬆️ Voltar ao Topo</button>
            </div>
        </section>

        <footer>
            <p>Aula de PHP - Integração HTML + PHP</p>
            <p style="opacity: 0.8; margin-top: 10px;">Duração: 3 horas | Nível: Básico-Intermediário</p>
            <p style="opacity: 0.6; margin-top: 20px;">Complete o desafio e pratique todos os conceitos!</p>
        </footer>
    </div>

    <script>
        // Progress bar
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const progress = (scrollTop / docHeight) * 100;
            document.getElementById('progressBar').style.width = progress + '%';
        });

        // Tabs functionality
        function showTab(tabId) {
            const parent = event.target.closest('.card') || event.target.closest('section');
            parent.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            parent.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            parent.querySelector('#' + tabId).classList.add('active');
            event.target.classList.add('active');
        }

        // Toggle hint
        function toggleHint(hintId) {
            const hint = document.getElementById(hintId);
            hint.classList.toggle('show');
        }

        // Form simulator
        document.getElementById('formSimulator').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('simName').value;
            const email = document.getElementById('simEmail').value;
            const password = document.getElementById('simPassword').value;
            const file = document.getElementById('simFile').files[0];
            
            const resultDiv = document.getElementById('simResult');
            const errors = [];
            
            // Validações
            if (name.length < 3) {
                errors.push('❌ Nome deve ter pelo menos 3 caracteres');
            }
            
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                errors.push('❌ Email inválido');
            }
            
            if (password.length < 8) {
                errors.push('❌ Senha deve ter pelo menos 8 caracteres');
            }
            
            if (!/[A-Z]/.test(password)) {
                errors.push('❌ Senha deve ter letra maiúscula');
            }
            
            if (!/[0-9]/.test(password)) {
                errors.push('❌ Senha deve ter número');
            }
            
            if (file) {
                const validTypes = ['image/jpeg', 'image/png', 'application/pdf'];
                const maxSize = 2 * 1024 * 1024; // 2MB
                
                if (!validTypes.includes(file.type)) {
                    errors.push('❌ Tipo de arquivo não permitido');
                }
                
                if (file.size > maxSize) {
                    errors.push('❌ Arquivo muito grande (máx 2MB)');
                }
            }
            
            let output = '';
            
            if (errors.length > 0) {
                output = '<strong style="color: #ef4444;">Erros de validação:</strong><br><br>';
                output += errors.join('<br>');
            } else {
                output = '<strong style="color: #10b981;">✅ Todos os dados válidos!</strong><br><br>';
                output += `Nome: ${name}<br>`;
                output += `Email: ${email}<br>`;
                output += `Senha: ${'*'.repeat(password.length)}<br>`;
                if (file) {
                    output += `Arquivo: ${file.name} (${(file.size / 1024).toFixed(2)} KB)<br>`;
                }
                output += '<br><span style="color: #6366f1;">📤 Dados prontos para envio ao servidor!</span>';
            }
            
            resultDiv.innerHTML = output;
            resultDiv.style.animation = 'none';
            resultDiv.offsetHeight;
            resultDiv.style.animation = 'fadeIn 0.3s ease';
        });

        // Quiz functionality
        function checkAnswer(option, selectedIndex) {
            const question = option.closest('.quiz-question');
            const correctIndex = parseInt(question.dataset.correct);
            const feedback = question.querySelector('.quiz-feedback');
            
            question.querySelectorAll('.quiz-option').forEach(opt => {
                opt.style.pointerEvents = 'none';
            });
            
            if (selectedIndex === correctIndex) {
                option.classList.add('correct');
                feedback.classList.add('correct', 'show');
            } else {
                option.classList.add('incorrect');
                question.querySelectorAll('.quiz-option')[correctIndex].classList.add('correct');
                feedback.classList.add('incorrect', 'show');
            }
        }

        // Smooth scroll for navigation
        document.querySelectorAll('.section-nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Code block copy functionality
        document.querySelectorAll('.code-block').forEach(codeBlock => {
            codeBlock.addEventListener('click', () => {
                const code = codeBlock.innerText;
                navigator.clipboard.writeText(code).then(() => {
                    const originalBorder = codeBlock.style.borderLeftColor;
                    codeBlock.style.borderLeftColor = '#10b981';
                    
                    setTimeout(() => {
                        codeBlock.style.borderLeftColor = originalBorder;
                    }, 500);
                });
            });
        });

        // Scroll to top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card, .challenge-box, .quiz-container').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Initialize first tabs
        document.querySelectorAll('.tabs').forEach(tabContainer => {
            const firstTab = tabContainer.querySelector('.tab:first-child');
            const firstContent = tabContainer.querySelector('.tab-content:first-child');
            if (firstTab && firstContent) {
                firstTab.classList.add('active');
                firstContent.classList.add('active');
            }
        });
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP - Processamento de Formulários e Estruturas de Controle</title>
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

        .badge-post {
            background: var(--success);
            color: white;
        }

        .badge-get {
            background: var(--warning);
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

        .btn-secondary {
            background: var(--secondary);
            color: white;
        }

        .btn-secondary:hover {
            background: #7c3aed;
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

        .output-box {
            background: var(--code-bg);
            color: #10b981;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Fira Code', monospace;
            margin: 15px 0;
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
            min-height: 60px;
        }

        footer {
            text-align: center;
            padding: 40px 20px;
            color: white;
            margin-top: 50px;
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

            .grid-2 {
                grid-template-columns: 1fr;
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
            <h1>🐘 Aula de PHP</h1>
            <p>Processamento de Formulários (POST/GET) e Estruturas de Controle</p>
        </header>

        <img src="https://image.qwenlm.ai/public_source/3563890c-b866-4f9e-9d42-71941393d625/1d3886684-3282-48df-b40e-9ad8f85a2ee2.png" alt="PHP Form Processing" class="lesson-image">

        <div class="grid-2">
            <div class="section-nav">
                <h4>📚 Navegação da Aula</h4>
                <ul>
                    <li><a href="#intro">1. Introdução</a></li>
                    <li><a href="#post">2. Método POST</a></li>
                    <li><a href="#get">3. Método GET</a></li>
                    <li><a href="#comparison">4. Comparação POST vs GET</a></li>
                    <li><a href="#challenge">5. Desafio em Sala</a></li>
                    <li><a href="#control">6. Estruturas de Controle</a></li>
                    <li><a href="#loops">7. Estruturas de Repetição</a></li>
                    <li><a href="#functions">8. Funções</a></li>
                </ul>
            </div>

            <div class="interactive-demo">
                <h3>🎯 Simulador de Método HTTP</h3>
                <p style="margin-bottom: 15px; color: var(--gray);">Teste a diferença entre POST e GET</p>
                <form id="httpSimulator">
                    <label>Nome:</label>
                    <input type="text" id="simName" placeholder="Seu nome" required>
                    
                    <label>Email:</label>
                    <input type="email" id="simEmail" placeholder="seu@email.com" required>
                    
                    <label>Método:</label>
                    <select id="simMethod">
                        <option value="POST">POST</option>
                        <option value="GET">GET</option>
                    </select>
                    
                    <button type="submit" class="btn btn-primary">
                        🚀 Enviar Dados
                    </button>
                </form>
                
                <div class="result-display" id="simResult">
                    <em>Os dados aparecerão aqui após o envio...</em>
                </div>
            </div>
        </div>

        <!-- Introdução -->
        <section id="intro" class="card">
            <h2>📖 1. Introdução ao Processamento de Formulários</h2>
            <p>Na aula anterior, aprendemos sobre variáveis, arrays e tipos de dados em PHP. Agora vamos aprender como receber dados de formulários HTML e processá-los no servidor usando PHP.</p>
            
            <div class="info-box">
                <strong>💡 O que vamos aprender:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Como funcionam os métodos POST e GET</li>
                    <li>Como capturar dados de formulários</li>
                    <li>Super-globais $_POST e $_GET</li>
                    <li>Estruturas de controle em PHP</li>
                </ul>
            </div>
        </section>

        <!-- Método POST -->
        <section id="post" class="card">
            <h2>📤 2. Método POST</h2>
            <span class="badge badge-post">POST</span>
            <p>O método POST envia os dados no corpo da requisição HTTP, sendo mais seguro para informações sensíveis.</p>

            <h3>Exemplo de Formulário HTML:</h3>
            <div class="code-block">
<span class="comment">&lt;!-- formulario.html --&gt;</span>
<span class="keyword">&lt;form</span> <span class="string">action="processa.php"</span> <span class="string">method="POST"</span><span class="keyword">&gt;</span>
    <span class="keyword">&lt;label&gt;</span>Nome:<span class="keyword">&lt;/label&gt;</span>
    <span class="keyword">&lt;input</span> <span class="string">type="text"</span> <span class="string">name="nome"</span><span class="keyword">&gt;</span>
    
    <span class="keyword">&lt;label&gt;</span>Email:<span class="keyword">&lt;/label&gt;</span>
    <span class="keyword">&lt;input</span> <span class="string">type="email"</span> <span class="string">name="email"</span><span class="keyword">&gt;</span>
    
    <span class="keyword">&lt;label&gt;</span>Senha:<span class="keyword">&lt;/label&gt;</span>
    <span class="keyword">&lt;input</span> <span class="string">type="password"</span> <span class="string">name="senha"</span><span class="keyword">&gt;</span>
    
    <span class="keyword">&lt;button</span> <span class="string">type="submit"</span><span class="keyword">&gt;</span>Enviar<span class="keyword">&lt;/button&gt;</span>
<span class="keyword">&lt;/form&gt;</span>
            </div>

            <h3>Processamento em PHP:</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment">// processa.php</span>

<span class="comment">// Capturando dados do formulário via POST</span>
<span class="variable">$nome</span> = <span class="variable">$_POST</span>[<span class="string">'nome'</span>];
<span class="variable">$email</span> = <span class="variable">$_POST</span>[<span class="string">'email'</span>];
<span class="variable">$senha</span> = <span class="variable">$_POST</span>[<span class="string">'senha'</span>];

<span class="comment">// Validação básica</span>
<span class="keyword">if</span> (<span class="keyword">empty</span>(<span class="variable">$nome</span>) || <span class="keyword">empty</span>(<span class="variable">$email</span>)) {
    <span class="function">echo</span> <span class="string">"Preencha todos os campos!"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"Bem-vindo, </span><span class="variable">$nome</span><span class="string">!"</span>;
    <span class="function">echo</span> <span class="string">"Email: </span><span class="variable">$email</span><span class="string">"</span>;
}
<span class="comment">?&gt;</span>
            </div>

            <div class="success-box">
                <strong>✅ Vantagens do POST:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Dados não aparecem na URL</li>
                    <li>Mais seguro para senhas e dados sensíveis</li>
                    <li>Pode enviar grandes quantidades de dados</li>
                    <li>Ideal para criação, atualização e exclusão de dados</li>
                </ul>
            </div>
        </section>

        <!-- Método GET -->
        <section id="get" class="card">
            <h2>📥 3. Método GET</h2>
            <span class="badge badge-get">GET</span>
            <p>O método GET envia os dados através da URL, sendo visível e limitado em tamanho.</p>

            <h3>Exemplo de Formulário HTML:</h3>
            <div class="code-block">
                <span class="comment">&lt;!-- busca.html --&gt;</span>
                <span class="keyword">&lt;form</span> <span class="string">action="busca.php"</span> <span class="string">method="GET"</span><span class="keyword">&gt;</span>
                    <span class="keyword">&lt;input</span> <span class="string">type="text"</span> <span class="string">name="termo"</span> <span class="string">placeholder="Buscar..."</span><span class="keyword">&gt;</span>
                    <span class="keyword">&lt;button</span> <span class="string">type="submit"</span><span class="keyword">&gt;</span>Buscar<span class="keyword">&lt;/button&gt;</span>
                <span class="keyword">&lt;/form&gt;</span>

                <span class="comment">&lt;!-- Resultado na URL: busca.php?termo=php --&gt;</span>
            </div>

            <h3>Processamento em PHP:</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment">// busca.php</span>

<span class="comment">// Capturando dados via GET</span>
<span class="variable">$termo</span> = <span class="variable">$_GET</span>[<span class="string">'termo'</span>] ?? <span class="string">''</span>;

<span class="comment">// Verificando se há um termo de busca</span>
<span class="keyword">if</span> (!<span class="keyword">empty</span>(<span class="variable">$termo</span>)) {
    <span class="function">echo</span> <span class="string">"Resultados para: </span><span class="variable">$termo</span><span class="string">"</span>;
    
    <span class="comment">// Aqui iria a lógica de busca no banco de dados</span>
    <span class="variable">$resultados</span> = [
        [<span class="string">'titulo'</span> => <span class="string">'Introdução ao PHP'</span>],
        [<span class="string">'titulo'</span> => <span class="string">'PHP Avançado'</span>]
    ];
    
    <span class="keyword">foreach</span> (<span class="variable">$resultados</span> <span class="keyword">as</span> <span class="variable">$resultado</span>) {
        <span class="function">echo</span> <span class="string">"- </span><span class="variable">$resultado</span>[<span class="string">'titulo'</span>]<span class="string">"</span>;
    }
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"Digite um termo para buscar."</span>;
}
<span class="comment">?&gt;</span>
            </div>

            <div class="warning-box">
                <strong>⚠️ Cuidados com GET:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Dados visíveis na URL (não use para senhas!)</li>
                    <li>Limite de tamanho na URL (varia por navegador)</li>
                    <li>Dados ficam no histórico do navegador</li>
                    <li>Ideal para buscas, filtros e paginação</li>
                </ul>
            </div>
        </section>

        <!-- Comparação -->
        <section id="comparison" class="card">
            <h2>⚖️ 4. Comparação: POST vs GET</h2>
            
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>POST</th>
                        <th>GET</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Visibilidade</strong></td>
                        <td>Dados ocultos (corpo da requisição)</td>
                        <td>Dados visíveis na URL</td>
                    </tr>
                    <tr>
                        <td><strong>Segurança</strong></td>
                        <td>Mais seguro para dados sensíveis</td>
                        <td>Menos seguro (URL exposta)</td>
                    </tr>
                    <tr>
                        <td><strong>Tamanho</strong></td>
                        <td>Ilimitado (praticamente)</td>
                        <td>Limitado (~2048 caracteres)</td>
                    </tr>
                    <tr>
                        <td><strong>Cache</strong></td>
                        <td>Não é cacheado</td>
                        <td>Pode ser cacheado</td>
                    </tr>
                    <tr>
                        <td><strong>Uso Ideal</strong></td>
                        <td>Forms de login, cadastro, upload</td>
                        <td>Buscas, filtros, paginação</td>
                    </tr>
                    <tr>
                        <td><strong>Super-global</strong></td>
                        <td>$_POST</td>
                        <td>$_GET</td>
                    </tr>
                </tbody>
            </table>

            <div class="info-box">
                <strong>🔒 Dica de Segurança:</strong> Sempre valide e sanitize os dados recebidos, independentemente do método usado!
                <div class="code-block" style="margin-top: 15px;">
<span class="variable">$nome</span> = <span class="function">htmlspecialchars</span>(<span class="variable">$_POST</span>[<span class="string">'nome'</span>]);
<span class="variable">$email</span> = <span class="function">filter_var</span>(<span class="variable">$_POST</span>[<span class="string">'email'</span>], FILTER_SANITIZE_EMAIL);
                </div>
            </div>
        </section>

        <!-- Desafio -->
        <section id="challenge" class="challenge-box">
            <h3>🎯 5. Desafio em Sala de Aula</h3>
            <p>Crie um sistema de cadastro de alunos com as seguintes funcionalidades:</p>
            
            <ul>
                <li>✅ Formulário HTML com método POST contendo: Nome, Idade, Email e Matéria Favorita</li>
                <li>✅ Arquivo PHP que recebe e valida os dados</li>
                <li>✅ Exibir mensagem de sucesso ou erro conforme validação</li>
                <li>✅ Se válido, mostrar todos os dados do aluno em formato organizado</li>
                <li>✅ Usar arrays associativos para armazenar os dados</li>
            </ul>

            <div class="code-block" style="background: rgba(255,255,255,0.2);">
<span class="comment"># Estrutura esperada:</span>
cadastro.html (formulário)
processa_cadastro.php (processamento)

<span class="comment"># Critérios de avaliação:</span>
- Validação de campos obrigatórios
- Validação de email
- Mensagens claras para o usuário
- Código organizado e comentado
            </div>

            <button class="btn btn-success" onclick="showHint()">💡 Ver Dica</button>
            <div id="hint" style="display: none; margin-top: 20px; background: rgba(255,255,255,0.3); padding: 15px; border-radius: 8px;">
                <strong>Dica:</strong> Use o operador null coalescing (??) para evitar erros quando o campo não existir:
                <div class="code-block" style="background: rgba(0,0,0,0.3); margin-top: 10px;">
<span class="variable">$nome</span> = <span class="variable">$_POST</span>[<span class="string">'nome'</span>] ?? <span class="string">''</span>;
<span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$nome</span>) < 3) {
    <span class="function">echo</span> <span class="string">"Nome deve ter pelo menos 3 caracteres"</span>;
}
                </div>
            </div>
        </section>

        <!-- Estruturas de Controle -->
        <section id="control" class="card">
            <h2>🔀 6. Estruturas de Controle</h2>
            <p>Agora vamos aprofundar nas estruturas de controle do PHP, essenciais para tomar decisões no seu código.</p>

            <div class="tabs">
                <button class="tab active" onclick="showTab('if-else')">If/Else</button>
                <button class="tab" onclick="showTab('switch')">Switch</button>
                <button class="tab" onclick="showTab('match')">Match (PHP 8+)</button>
                <button class="tab" onclick="showTab('ternary')">Ternário</button>
            </div>

            <div id="if-else" class="tab-content active">
                <h3>Condicionais If/Else</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="variable">$idade</span> = 18;

<span class="comment"># If simples</span>
<span class="keyword">if</span> (<span class="variable">$idade</span> >= 18) {
    <span class="function">echo</span> <span class="string">"Maior de idade"</span>;
}

<span class="comment"># If/Else</span>
<span class="keyword">if</span> (<span class="variable">$idade</span> >= 18) {
    <span class="function">echo</span> <span class="string">"Pode votar"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"Não pode votar"</span>;
}

<span class="comment"># If/Elseif/Else</span>
<span class="variable">$nota</span> = 75;

<span class="keyword">if</span> (<span class="variable">$nota</span> >= 90) {
    <span class="variable">$conceito</span> = <span class="string">"A"</span>;
} <span class="keyword">elseif</span> (<span class="variable">$nota</span> >= 75) {
    <span class="variable">$conceito</span> = <span class="string">"B"</span>;
} <span class="keyword">elseif</span> (<span class="variable">$nota</span> >= 60) {
    <span class="variable">$conceito</span> = <span class="string">"C"</span>;
} <span class="keyword">else</span> {
    <span class="variable">$conceito</span> = <span class="string">"D"</span>;
}

<span class="function">echo</span> <span class="string">"Conceito: </span><span class="variable">$conceito</span><span class="string">"</span>;
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="switch" class="tab-content">
                <h3>Switch Case</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="variable">$dia</span> = 3;

<span class="keyword">switch</span> (<span class="variable">$dia</span>) {
    <span class="keyword">case</span> 1:
        <span class="function">echo</span> <span class="string">"Domingo"</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> 2:
        <span class="function">echo</span> <span class="string">"Segunda-feira"</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> 3:
        <span class="function">echo</span> <span class="string">"Terça-feira"</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> 4:
        <span class="function">echo</span> <span class="string">"Quarta-feira"</span>;
        <span class="keyword">break</span>;
    <span class="keyword">default</span>:
        <span class="function">echo</span> <span class="string">"Dia inválido"</span>;
}

<span class="comment"># Switch com múltiplos cases</span>
<span class="variable">$mes</span> = 5;

<span class="keyword">switch</span> (<span class="variable">$mes</span>) {
    <span class="keyword">case</span> 12:
    <span class="keyword">case</span> 1:
    <span class="keyword">case</span> 2:
        <span class="variable">$estacao</span> = <span class="string">"Verão"</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> 3:
    <span class="keyword">case</span> 4:
    <span class="keyword">case</span> 5:
        <span class="variable">$estacao</span> = <span class="string">"Outono"</span>;
        <span class="keyword">break</span>;
    <span class="keyword">default</span>:
        <span class="variable">$estacao</span> = <span class="string">"Desconhecida"</span>;
}
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="match" class="tab-content">
                <h3>Match Expression (PHP 8+)</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Match é mais conciso que switch</span>
<span class="variable">$status</span> = 200;

<span class="variable">$mensagem</span> = <span class="keyword">match</span> (<span class="variable">$status</span>) {
    200, 201 => <span class="string">"Sucesso"</span>,
    400 => <span class="string">"Erro do cliente"</span>,
    404 => <span class="string">"Não encontrado"</span>,
    500 => <span class="string">"Erro do servidor"</span>,
    <span class="keyword">default</span> => <span class="string">"Status desconhecido"</span>
};

<span class="function">echo</span> <span class="variable">$mensagem</span>;

<span class="comment"># Match com expressões</span>
<span class="variable">$idade</span> = 25;

<span class="variable>$categoria</span> = <span class="keyword">match</span> (<span class="keyword">true</span>) {
    <span class="variable">$idade</span> < 12 => <span class="string">"Criança"</span>,
    <span class="variable">$idade</span> < 18 => <span class="string">"Adolescente"</span>,
    <span class="variable">$idade</span> < 60 => <span class="string">"Adulto"</span>,
    <span class="keyword">default</span> => <span class="string">"Idoso"</span>
};
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="ternary" class="tab-content">
                <h3>Operador Ternário e Null Coalescing</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Ternário tradicional</span>
<span class="variable">$idade</span> = 20;
<span class="variable">$status</span> = (<span class="variable">$idade</span> >= 18) ? <span class="string">"Maior"</span> : <span class="string">"Menor"</span>;

<span class="comment"># Equivalente a:</span>
<span class="keyword">if</span> (<span class="variable">$idade</span> >= 18) {
    <span class="variable">$status</span> = <span class="string">"Maior"</span>;
} <span class="keyword">else</span> {
    <span class="variable">$status</span> = <span class="string">"Menor"</span>;
}

<span class="comment"># Null Coalescing (??)</span>
<span class="variable">$nome</span> = <span class="variable">$_GET</span>[<span class="string">'nome'</span>] ?? <span class="string">"Visitante"</span>;

<span class="comment"># Equivalente a:</span>
<span class="variable">$nome</span> = <span class="keyword">isset</span>(<span class="variable">$_GET</span>[<span class="string">'nome'</span>]) ? <span class="variable">$_GET</span>[<span class="string">'nome'</span>] : <span class="string">"Visitante"</span>;

<span class="comment"># Null Coalescing Assignment (??=) PHP 7.4+</span>
<span class="variable">$config</span>[<span class="string">'tema'</span>] ??= <span class="string">"claro"</span>;

<span class="comment"># Ternário Elvis (?:)</span>
<span class="variable">$nome</span> = <span class="variable">$usuario</span>[<span class="string">'nome'</span>] ?: <span class="string">"Anônimo"</span>;
<span class="comment">?&gt;</span>
                </div>
            </div>
        </section>

        <!-- Estruturas de Repetição -->
        <section id="loops" class="card">
            <h2>🔄 7. Estruturas de Repetição</h2>
            
            <div class="grid-2">
                <div>
                    <h3>For</h3>
                    <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Loop For tradicional</span>
<span class="keyword">for</span> (<span class="variable">$i</span> = 0; <span class="variable">$i</span> < 5; <span class="variable">$i</span>++) {
    <span class="function">echo</span> <span class="string">"Número: </span><span class="variable">$i</span><span class="string">\n"</span>;
}

<span class="comment"># For com array</span>
<span class="variable">$frutas</span> = [<span class="string">"Maçã"</span>, <span class="string">"Banana"</span>, <span class="string">"Uva"</span>];

<span class="keyword">for</span> (<span class="variable">$i</span> = 0; <span class="variable">$i</span> < <span class="function">count</span>(<span class="variable">$frutas</span>); <span class="variable">$i</span>++) {
    <span class="function">echo</span> <span class="variable">$frutas</span>[<span class="variable">$i</span>] . <span class="string">"\n"</span>;
}
<span class="comment">?&gt;</span>
                    </div>
                </div>

                <div>
                    <h3>While</h3>
                    <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Loop While</span>
<span class="variable">$contador</span> = 0;

<span class="keyword">while</span> (<span class="variable">$contador</span> < 5) {
    <span class="function">echo</span> <span class="string">"Contador: </span><span class="variable">$contador</span><span class="string">\n"</span>;
    <span class="variable">$contador</span>++;
}

<span class="comment"># Do-While (executa pelo menos uma vez)</span>
<span class="variable">$numero</span> = 0;

<span class="keyword">do</span> {
    <span class="function">echo</span> <span class="string">"Número: </span><span class="variable">$numero</span><span class="string">\n"</span>;
    <span class="variable">$numero</span>++;
} <span class="keyword">while</span> (<span class="variable">$numero</span> < 3);
<span class="comment">?&gt;</span>
                    </div>
                </div>
            </div>

            <h3>Foreach (Ideal para Arrays)</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="variable">$alunos</span> = [
    [<span class="string">"nome"</span> => <span class="string">"Vitório"</span>, <span class="string">"nota"</span> => 8.5],
    [<span class="string">"nome"</span> => <span class="string">"Maria"</span>, <span class="string">"nota"</span> => 9.0],
    [<span class="string">"nome"</span> => <span class="string">"João"</span>, <span class="string">"nota"</span> => 7.5]
];

<span class="comment"># Foreach simples</span>
<span class="keyword">foreach</span> (<span class="variable">$alunos</span> <span class="keyword">as</span> <span class="variable">$aluno</span>) {
    <span class="function">echo</span> <span class="variable">$aluno</span>[<span class="string">"nome"</span>] . <span class="string">"\n"</span>;
}

<span class="comment"># Foreach com chave e valor</span>
<span class="keyword">foreach</span> (<span class="variable">$alunos</span> <span class="keyword">as</span> <span class="variable">$indice</span> => <span class="variable">$aluno</span>) {
    <span class="function">echo</span> <span class="string">"Aluno </span><span class="variable">$indice</span><span class="string">: </span><span class="variable">$aluno</span>[<span class="string">"nome"</span>]<span class="string"> - Nota: </span><span class="variable">$aluno</span>[<span class="string">"nota"</span>]<span class="string">\n"</span>;
}

<span class="comment"># Foreach por referência (modifica o original)</span>
<span class="keyword">foreach</span> (<span class="variable">$alunos</span> <span class="keyword">as</span> <span class="variable">$chave</span> => <span class="variable">&$aluno</span>) {
    <span class="variable">$aluno</span>[<span class="string">"nota"</span>] += 0.5; <span class="comment"># Bônus de 0.5</span>
}
<span class="comment">?&gt;</span>
            </div>

            <h3>Break e Continue</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Break - sai do loop</span>
<span class="keyword">for</span> (<span class="variable">$i</span> = 0; <span class="variable">$i</span> < 10; <span class="variable">$i</span>++) {
    <span class="keyword">if</span> (<span class="variable">$i</span> == 5) {
        <span class="keyword">break</span>; <span class="comment"># Para no 5</span>
    }
    <span class="function">echo</span> <span class="variable">$i</span> . <span class="string">" "</span>;
}
<span class="comment"># Saída: 0 1 2 3 4</span>

<span class="comment"># Continue - pula para próxima iteração</span>
<span class="keyword">for</span> (<span class="variable">$i</span> = 0; <span class="variable">$i</span> < 10; <span class="variable">$i</span>++) {
    <span class="keyword">if</span> (<span class="variable">$i</span> % 2 == 0) {
        <span class="keyword">continue</span>; <span class="comment"># Pula pares</span>
    }
    <span class="function">echo</span> <span class="variable">$i</span> . <span class="string">" "</span>;
}
<span class="comment"># Saída: 1 3 5 7 9</span>
<span class="comment">?&gt;</span>
            </div>
        </section>

        <!-- Funções -->
        <section id="functions" class="card">
            <h2>⚙️ 8. Funções em PHP</h2>
            
            <h3>Funções Básicas</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Função simples</span>
<span class="keyword">function</span> <span class="function">saudacao</span>(<span class="variable">$nome</span>) {
    <span class="keyword">return</span> <span class="string">"Olá, </span><span class="variable">$nome</span><span class="string">!"</span>;
}

<span class="function">echo</span> <span class="function">saudacao</span>(<span class="string">"Vitório"</span>);
<span class="comment"># Saída: Olá, Vitório!</span>

<span class="comment"># Função com parâmetro padrão</span>
<span class="keyword">function</span> <span class="function">saudacaoCompleta</span>(<span class="variable">$nome</span>, <span class="variable">$hora</span> = <span class="string">"dia"</span>) {
    <span class="keyword">return</span> <span class="string">"Bom </span><span class="variable">$hora</span><span class="string">, </span><span class="variable">$nome</span><span class="string">!"</span>;
}

<span class="function">echo</span> <span class="function">saudacaoCompleta</span>(<span class="string">"Maria"</span>);
<span class="function">echo</span> <span class="function">saudacaoCompleta</span>(<span class="string">"João"</span>, <span class="string">"tarde"</span>);

<span class="comment"># Função com tipos declarados (PHP 7+)</span>
<span class="keyword">function</span> <span class="function">somar</span>(<span class="keyword">int</span> <span class="variable">$a</span>, <span class="keyword">int</span> <span class="variable">$b</span>): <span class="keyword">int</span> {
    <span class="keyword">return</span> <span class="variable">$a</span> + <span class="variable">$b</span>;
}

<span class="function">echo</span> <span class="function">somar</span>(5, 3); <span class="comment"># 8</span>
<span class="comment">?&gt;</span>
            </div>

            <h3>Funções com Arrays</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="keyword">function</span> <span class="function">calcularMedia</span>(<span class="keyword">array</span> <span class="variable">$notas</span>): <span class="keyword">float</span> {
    <span class="variable">$soma</span> = <span class="function">array_sum</span>(<span class="variable">$notas</span>);
    <span class="variable">$quantidade</span> = <span class="function">count</span>(<span class="variable">$notas</span>);
    
    <span class="keyword">return</span> <span class="variable">$soma</span> / <span class="variable">$quantidade</span>;
}

<span class="variable">$notasAluno</span> = [8.5, 9.0, 7.5, 8.0];
<span class="variable">$media</span> = <span class="function">calcularMedia</span>(<span class="variable">$notasAluno</span>);

<span class="function">echo</span> <span class="string">"Média: </span><span class="variable">$media</span><span class="string">"</span>;

<span class="comment"># Função com parâmetros variáveis</span>
<span class="keyword">function</span> <span class="function">somarTodos</span>(...<span class="variable">$numeros</span>): <span class="keyword">int</span> {
    <span class="keyword">return</span> <span class="function">array_sum</span>(<span class="variable">$numeros</span>);
}

<span class="function">echo</span> <span class="function">somarTodos</span>(1, 2, 3, 4, 5); <span class="comment"># 15</span>
<span class="comment">?&gt;</span>
            </div>

            <h3>Funções Anônimas e Arrow Functions</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Função anônima</span>
<span class="variable">$dobrar</span> = <span class="keyword">function</span>(<span class="variable">$n</span>) {
    <span class="keyword">return</span> <span class="variable">$n</span> * 2;
};

<span class="function">echo</span> <span class="variable">$dobrar</span>(5); <span class="comment"># 10</span>

<span class="comment"># Arrow Function (PHP 7.4+)</span>
<span class="variable">$triplicar</span> = <span class="keyword">fn</span>(<span class="variable">$n</span>) => <span class="variable">$n</span> * 3;

<span class="function">echo</span> <span class="variable">$triplicar</span>(5); <span class="comment"># 15</span>

<span class="comment"># Usando com array_map</span>
<span class="variable">$numeros</span> = [1, 2, 3, 4, 5];
<span class="variable">$quadrados</span> = <span class="function">array_map</span>(
    <span class="keyword">fn</span>(<span class="variable">$n</span>) => <span class="variable">$n</span> ** 2,
    <span class="variable">$numeros</span>
);

<span class="comment"># [1, 4, 9, 16, 25]</span>
<span class="comment">?&gt;</span>
            </div>
        </section>

        <!-- Resumo -->
        <section class="card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <h2 style="color: white;">📝 Resumo da Aula</h2>
            <div class="grid-2">
                <div>
                    <h3 style="color: white;">✅ O que aprendemos:</h3>
                    <ul style="margin-left: 20px; line-height: 2;">
                        <li>Diferença entre POST e GET</li>
                        <li>Como processar formulários HTML</li>
                        <li>Super-globais $_POST e $_GET</li>
                        <li>Estruturas condicionais (if, switch, match)</li>
                        <li>Estruturas de repetição (for, while, foreach)</li>
                        <li>Criação e uso de funções</li>
                    </ul>
                </div>
                <div>
                    <h3 style="color: white;">📚 Próxima aula:</h3>
                    <ul style="margin-left: 20px; line-height: 2;">
                        <li>Integração completa HTML + PHP</li>
                        <li>Validação avançada de formulários</li>
                        <li>Upload de arquivos</li>
                        <li>Sessões e Cookies</li>
                        <li>Segurança em formulários</li>
                        <li><a href="Aula3.php" target="_blank"><button class="btn btn-success"> ir Para Proxima Aula </button></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <footer>
            <p> Aula de PHP - Desenvolvido para aprendizado</p>
            <p style="opacity: 0.8; margin-top: 10px;">Pratique os exemplos e complete o desafio!</p>
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
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            document.getElementById(tabId).classList.add('active');
            event.target.classList.add('active');
        }

        // Show hint
        function showHint() {
            const hint = document.getElementById('hint');
            hint.style.display = hint.style.display === 'none' ? 'block' : 'none';
        }

        // HTTP Simulator
        document.getElementById('httpSimulator').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('simName').value;
            const email = document.getElementById('simEmail').value;
            const method = document.getElementById('simMethod').value;
            
            const resultDiv = document.getElementById('simResult');
            
            if (method === 'POST') {
                resultDiv.innerHTML = `
                    <strong style="color: #10b981;">📤 Método POST</strong><br>
                    <div style="margin-top: 10px; font-family: 'Fira Code', monospace; font-size: 0.85rem;">
                        <span style="color: #569cd6;">$_POST</span> = [<br>
                        &nbsp;&nbsp;<span style="color: #ce9178;">'nome'</span> => <span style="color: #ce9178;">"${name}"</span>,<br>
                        &nbsp;&nbsp;<span style="color: #ce9178;">'email'</span> => <span style="color: #ce9178;">"${email}"</span><br>
                        ]<br><br>
                        <span style="color: #6a9955;">// Dados enviados no corpo da requisição</span><br>
                        <span style="color: #6a9955;">// Não aparecem na URL</span>
                    </div>
                `;
            } else {
                resultDiv.innerHTML = `
                    <strong style="color: #f59e0b;">📥 Método GET</strong><br>
                    <div style="margin-top: 10px; font-family: 'Fira Code', monospace; font-size: 0.85rem;">
                        <span style="color: #569cd6;">$_GET</span> = [<br>
                        &nbsp;&nbsp;<span style="color: #ce9178;">'nome'</span> => <span style="color: #ce9178;">"${name}"</span>,<br>
                        &nbsp;&nbsp;<span style="color: #ce9178;">'email'</span> => <span style="color: #ce9178;">"${email}"</span><br>
                        ]<br><br>
                        <span style="color: #6a9955;">// URL resultante:</span><br>
                        <span style="color: #ce9178;">?nome=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}</span>
                    </div>
                `;
            }
            
            // Animation
            resultDiv.style.animation = 'none';
            resultDiv.offsetHeight;
            resultDiv.style.animation = 'fadeIn 0.3s ease';
        });

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
            codeBlock.style.position = 'relative';
            codeBlock.style.cursor = 'pointer';
            
            codeBlock.title = 'Clique para copiar';
            
            codeBlock.addEventListener('click', () => {
                const code = codeBlock.innerText;
                navigator.clipboard.writeText(code).then(() => {
                    const originalBg = codeBlock.style.background;
                    codeBlock.style.background = '#10b981';
                    
                    setTimeout(() => {
                        codeBlock.style.background = originalBg;
                    }, 500);
                });
            });
        });

        // Add some interactive animations on scroll
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

        document.querySelectorAll('.card, .challenge-box').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP - Semântica Básica</title>
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
            background: #fde68a;
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

        .type-indicator {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 10px;
        }

        .type-string {
            background: #fce7f3;
            color: #db2777;
        }

        .type-int {
            background: #dbeafe;
            color: #2563eb;
        }

        .type-float {
            background: #d1fae5;
            color: #059669;
        }

        .type-bool {
            background: #fef3c7;
            color: #d97706;
        }

        .type-null {
            background: #e2e8f0;
            color: #475569;
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
        }
    </style>
</head>
<body>
    <div class="nav-progress">
        <div class="nav-progress-bar" id="progressBar"></div>
    </div>

    <div class="container">
        <header>
            <h1>🐘 Semântica Básica de PHP</h1>
            <p>Aprenda os fundamentos: variáveis, tipos de dados, echo, print e var_dump</p>
        </header>

        <img src="https://image.qwenlm.ai/public_source/3563890c-b866-4f9e-9d42-71941393d625/198a2ffa6-f2a0-470f-afaf-36848aa6db9e.png" alt="PHP Code Editor com sintaxe básica" class="lesson-image">

        <div class="grid-2">
            <div class="section-nav">
                <h4>📚 Navegação da Aula</h4>
                <ul>
                    <li><a href="#intro">1. Introdução ao PHP</a></li>
                    <li><a href="#variables">2. Variáveis</a></li>
                    <li><a href="#types">3. Tipos de Dados</a></li>
                    <li><a href="#output">4. Saída de Dados</a></li>
                    <li><a href="#vardump">5. var_dump()</a></li>
                    <li><a href="#comparison">6. Comparativo</a></li>
                    <li><a href="#challenge">7. Desafio Prático</a></li>
                    <li><a href="#advanced">8. Aprofundamento</a></li>
                    <li><a href="#quiz">9. Quiz</a></li>
                    <li><a href="#summary">10. Resumo</a></li>
                </ul>
            </div>

            <div class="interactive-demo">
                <h3>🎯 Testador de Variáveis PHP</h3>
                <p style="margin-bottom: 15px; color: var(--gray);">Simule declarações de variáveis e veja o output</p>
                
                <form id="variableTester">
                    <label>Nome da Variável:</label>
                    <input type="text" id="varName" placeholder="$nome" required style="width: 100%; padding: 12px; border: 2px solid #e2e8f0; border-radius: 8px; margin-bottom: 15px;">
                    
                    <label>Valor:</label>
                    <input type="text" id="varValue" placeholder=' "Vitório" ou 31 ' required style="width: 100%; padding: 12px; border: 2px solid #e2e8f0; border-radius: 8px; margin-bottom: 15px;">
                    
                    <label>Tipo de Saída:</label>
                    <select id="outputType" style="width: 100%; padding: 12px; border: 2px solid #e2e8f0; border-radius: 8px; margin-bottom: 15px;">
                        <option value="echo">echo</option>
                        <option value="print">print</option>
                        <option value="vardump">var_dump</option>
                    </select>
                    
                    <button type="submit" class="btn btn-primary">
                        🚀 Executar Código
                    </button>
                </form>
                
                <div class="result-display" id="simResult">
                    <em>O resultado da execução aparecerá aqui...</em>
                </div>
            </div>
        </div>

        <!-- Introdução -->
        <section id="intro" class="card">
            <h2>📖 1. Introdução ao PHP</h2>
            <p>PHP (Hypertext Preprocessor) é uma linguagem de programação server-side amplamente utilizada para desenvolvimento web. Nesta aula, vamos aprender os fundamentos da semântica básica do PHP.</p>
            
            <div class="info-box">
                <strong>💡 O que você vai aprender:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Como declarar variáveis em PHP</li>
                    <li>Tipos de dados básicos (string, int, float, bool, null)</li>
                    <li>Diferenças entre echo, print e var_dump</li>
                    <li>Case-sensitivity em PHP</li>
                    <li>Boas práticas de nomenclatura</li>
                </ul>
            </div>

            <div class="warning-box">
                <strong>⚠️ Pré-requisitos:</strong>
                <p style="margin-top: 10px;">Conhecimento básico de HTML e CSS. Não é necessário experiência prévia com programação.</p>
            </div>

            <h3>Primeiro Código PHP</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment">// Seu primeiro código PHP</span>
<span class="function">echo</span> <span class="string">"Olá, Mundo!"</span>;
<span class="comment">?&gt;</span>

<span class="comment"># Output: Olá, Mundo!</span>
            </div>

            <div class="success-box">
                <strong>✅ Estrutura Básica:</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li><code>&lt;?php</code> - Tag de abertura do PHP</li>
                    <li><code>?&gt;</code> - Tag de fechamento (opcional em arquivos puramente PHP)</li>
                    <li><code>;</code> - Ponto e vírgula obrigatório no final de cada instrução</li>
                    <li><code>//</code> - Comentário de uma linha</li>
                    <li><code>/* */</code> - Comentário de múltiplas linhas</li>
                </ul>
            </div>
        </section>

        <!-- Variáveis -->
        <section id="variables" class="card">
            <h2>💾 2. Variáveis em PHP</h2>
            <p>Variáveis são espaços na memória que armazenam valores. Em PHP, todas as variáveis começam com o símbolo <code>$</code>.</p>

            <div class="tabs">
                <button class="tab active" onclick="showTab('var-declaration')">Declaração</button>
                <button class="tab" onclick="showTab('var-rules')">Regras</button>
                <button class="tab" onclick="showTab('var-examples')">Exemplos</button>
            </div>

            <div id="var-declaration" class="tab-content active">
                <h3>Como Declarar Variáveis</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Sintaxe básica</span>
<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="variable">$idade</span> = <span class="number">31</span>;
<span class="variable">$altura</span> = <span class="number">1.81</span>;

<span class="comment"># Atribuindo valor de uma variável para outra</span>
<span class="variable">$nomeCompleto</span> = <span class="variable">$nome</span>;

<span class="comment"># Reatribuindo valor</span>
<span class="variable">$idade</span> = <span class="number">32</span>; <span class="comment"># Agora idade vale 32</span>
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="var-rules" class="tab-content">
                <h3>Regras de Nomenclatura</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># ✅ NOMES VÁLIDOS</span>
<span class="variable">$nome</span> = <span class="string">"João"</span>;
<span class="variable">$nomeCompleto</span> = <span class="string">"João Silva"</span>;
<span class="variable">$nome_completo</span> = <span class="string">"João Silva"</span>;
<span class="variable">$_nome</span> = <span class="string">"João"</span>;
<span class="variable">$nome123</span> = <span class="string">"João"</span>;

<span class="comment"># ❌ NOMES INVÁLIDOS</span>
<span class="comment"># $123nome = "João";  // Não pode começar com número</span>
<span class="comment"># $nome-completo = "João";  // Não pode usar hífen</span>
<span class="comment"># $nome completo = "João";  // Não pode ter espaços</span>

<span class="comment"># ⚠️ PHP É CASE-SENSITIVE</span>
<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="variable">$Nome</span> = <span class="string">"Maria"</span>;
<span class="variable">$NOME</span> = <span class="string">"José"</span>;

<span class="function">echo</span> <span class="variable">$nome</span>;  <span class="comment"># Output: Vitório</span>
<span class="function">echo</span> <span class="variable">$Nome</span>;  <span class="comment"># Output: Maria</span>
<span class="function">echo</span> <span class="variable">$NOME</span>;  <span class="comment"># Output: José</span>
<span class="comment">?&gt;</span>
                </div>

                <div class="warning-box">
                    <strong>⚠️ Atenção ao Case-Sensitivity!</strong>
                    <p style="margin-top: 10px;"><code>$nome</code>, <code>$Nome</code> e <code>$NOME</code> são variáveis DIFERENTES em PHP!</p>
                </div>
            </div>

            <div id="var-examples" class="tab-content">
                <h3>Exemplos Práticos</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Dados de um aluno</span>
<span class="variable">$nomeAluno</span> = <span class="string">"Vitório"</span>;
<span class="variable">$idadeAluno</span> = <span class="number">31</span>;
<span class="variable">$alturaAluno</span> = <span class="number">1.81</span>;
<span class="variable">$ehProfessor</span> = <span class="keyword">true</span>;

<span class="comment"># Concatenando strings</span>
<span class="variable">$mensagem</span> = <span class="string">"Olá, "</span> . <span class="variable">$nomeAluno</span> . <span class="string">"! Seja bem-vindo!"</span>;
<span class="function">echo</span> <span class="variable">$mensagem</span>;
<span class="comment"># Output: Olá, Vitório! Seja bem-vindo!</span>

<span class="comment"># Interpolação de variáveis (aspas duplas)</span>
<span class="function">echo</span> <span class="string">"A altura do </span><span class="variable">$nomeAluno</span><span class="string"> é </span><span class="variable">$alturaAluno</span><span class="string"> metros."</span>;
<span class="comment"># Output: A altura do Vitório é 1.81 metros.</span>

<span class="comment"># Aspas simples não interpolam</span>
<span class="function">echo</span> <span class="string">'A altura do </span><span class="variable">$nomeAluno</span><span class="string"> é </span><span class="variable">$alturaAluno</span><span class="string"> metros.'</span>;
<span class="comment"># Output: A altura do $nomeAluno é $alturaAluno metros.</span>
<span class="comment">?&gt;</span>
                </div>
            </div>
        </section>

        <!-- Tipos de Dados -->
        <section id="types" class="card">
            <h2>📊 3. Tipos de Dados</h2>
            <p>PHP é uma linguagem fracamente tipada, o que significa que você não precisa declarar o tipo da variável explicitamente.</p>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Descrição</th>
                        <th>Exemplo</th>
                        <th>Indicador</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>string</strong></td>
                        <td>Texto/Caracteres</td>
                        <td><code>"Olá Mundo"</code></td>
                        <td><span class="type-indicator type-string">string</span></td>
                    </tr>
                    <tr>
                        <td><strong>int</strong></td>
                        <td>Números inteiros</td>
                        <td><code>42</code>, <code>-10</code></td>
                        <td><span class="type-indicator type-int">int</span></td>
                    </tr>
                    <tr>
                        <td><strong>float</strong></td>
                        <td>Números decimais</td>
                        <td><code>3.14</code>, <code>-0.5</code></td>
                        <td><span class="type-indicator type-float">float</span></td>
                    </tr>
                    <tr>
                        <td><strong>bool</strong></td>
                        <td>Verdadeiro ou Falso</td>
                        <td><code>true</code>, <code>false</code></td>
                        <td><span class="type-indicator type-bool">bool</span></td>
                    </tr>
                    <tr>
                        <td><strong>null</strong></td>
                        <td>Valor nulo/vazio</td>
                        <td><code>null</code></td>
                        <td><span class="type-indicator type-null">null</span></td>
                    </tr>
                </tbody>
            </table>

            <h3>Exemplos de Cada Tipo</h3>
            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># STRING - Texto entre aspas</span>
<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="variable">$cidade</span> = <span class="string">'São Paulo'</span>;

<span class="comment"># INT - Números inteiros</span>
<span class="variable">$idade</span> = <span class="number">31</span>;
<span class="variable">$ano</span> = <span class="number">2024</span>;
<span class="variable">$negativo</span> = <span class="number">-50</span>;

<span class="comment"># FLOAT - Números decimais (ponto, não vírgula)</span>
<span class="variable">$altura</span> = <span class="number">1.81</span>;
<span class="variable">$peso</span> = <span class="number">75.5</span>;
<span class="variable">$pi</span> = <span class="number">3.14159</span>;

<span class="comment"># BOOL - Booleanos (true/false)</span>
<span class="variable">$ehProfessor</span> = <span class="keyword">true</span>;
<span class="variable">$estaAtivo</span> = <span class="keyword">false</span>;
<span class="variable">$temAcesso</span> = <span class="keyword">true</span>;

<span class="comment"># NULL - Valor nulo</span>
<span class="variable">$valorNulo</span> = <span class="keyword">null</span>;
<span class="variable">$naoDefinido</span>; <span class="comment"># Também é null por padrão</span>

<span class="comment"># Verificando tipos com gettype()</span>
<span class="function">echo</span> <span class="function">gettype</span>(<span class="variable">$nome</span>);     <span class="comment"># string</span>
<span class="function">echo</span> <span class="function">gettype</span>(<span class="variable">$idade</span>);     <span class="comment"># integer</span>
<span class="function">echo</span> <span class="function">gettype</span>(<span class="variable">$altura</span>);    <span class="comment"># double</span>
<span class="function">echo</span> <span class="function">gettype</span>(<span class="variable">$ehProfessor</span>); <span class="comment"># boolean</span>
<span class="function">echo</span> <span class="function">gettype</span>(<span class="variable">$valorNulo</span>); <span class="comment"># NULL</span>
<span class="comment">?&gt;</span>
            </div>

            <div class="info-box">
                <strong>💡 Dica Importante:</strong>
                <p style="margin-top: 10px;">Em PHP, use <strong>ponto</strong> (.) para números decimais, não vírgula. Exemplo: <code>1.81</code> ✅, <code>1,81</code> ❌</p>
            </div>
        </section>

        <!-- Saída de Dados -->
        <section id="output" class="card">
            <h2>📤 4. Saída de Dados (echo e print)</h2>
            <p>PHP oferece várias formas de exibir dados na tela. As mais comuns são <code>echo</code> e <code>print</code>.</p>

            <div class="tabs">
                <button class="tab active" onclick="showTab('echo-tab')">echo</button>
                <button class="tab" onclick="showTab('print-tab')">print</button>
                <button class="tab" onclick="showTab('difference-tab')">Diferenças</button>
            </div>

            <div id="echo-tab" class="tab-content active">
                <h3>Usando echo</h3>
                <span class="badge badge-basic">Básico</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># echo - Mais comum e ligeiramente mais rápido</span>

<span class="comment"># Saída simples</span>
<span class="function">echo</span> <span class="string">"Olá, Mundo!"</span>;

<span class="comment"># Múltiplos parâmetros (vírgula)</span>
<span class="function">echo</span> <span class="string">"Nome: "</span>, <span class="string">"Vitório"</span>, <span class="string">" | Idade: "</span>, <span class="number">31</span>;

<span class="comment"># Concatenação com ponto</span>
<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="function">echo</span> <span class="string">"Bem-vindo, "</span> . <span class="variable">$nome</span> . <span class="string">"!"</span>;

<span class="comment"># Interpolação (aspas duplas)</span>
<span class="function">echo</span> <span class="string">"Bem-vindo, </span><span class="variable">$nome</span><span class="string">!"</span>;

<span class="comment"># echo NÃO retorna valor (void)</span>
<span class="variable">$resultado</span> = <span class="function">echo</span> <span class="string">"Teste"</span>; <span class="comment"># ERRO! echo não retorna nada</span>

<span class="comment"># Quebra de linha em HTML</span>
<span class="function">echo</span> <span class="string">"Linha 1&lt;br&gt;"</span>;
<span class="function">echo</span> <span class="string">"Linha 2&lt;br&gt;"</span>;

<span class="comment"># Quebra de linha em CLI</span>
<span class="function">echo</span> <span class="string">"Linha 1\n"</span>;
<span class="function">echo</span> <span class="string">"Linha 2\n"</span>;
<span class="comment">?&gt;</span>
                </div>

                <div class="output-box">
Output:
Olá, Mundo!
Nome: Vitório | Idade: 31
Bem-vindo, Vitório!
Bem-vindo, Vitório!
Linha 1
Linha 2
                </div>
            </div>

            <div id="print-tab" class="tab-content">
                <h3>Usando print</h3>
                <span class="badge badge-basic">Básico</span>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># print - Similar ao echo, mas retorna 1</span>

<span class="comment"># Saída simples</span>
<span class="function">print</span> <span class="string">"Olá, Mundo!"</span>;

<span class="comment"># print com parênteses (opcional)</span>
<span class="function">print</span>(<span class="string">"Olá, Mundo!"</span>);

<span class="comment"># print retorna 1 (sempre)</span>
<span class="variable">$resultado</span> = <span class="function">print</span> <span class="string">"Teste"</span>;
<span class="function">echo</span> <span class="variable">$resultado</span>; <span class="comment"># Output: 1</span>

<span class="comment"># print ACEITA apenas UM parâmetro</span>
<span class="function">print</span> <span class="string">"Nome: "</span>, <span class="string">"Vitório"</span>; <span class="comment"># ERRO! print só aceita 1 parâmetro</span>

<span class="comment"># Concatenação necessária</span>
<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="function">print</span> <span class="string">"Bem-vindo, "</span> . <span class="variable">$nome</span> . <span class="string">"!"</span>;

<span class="comment"># Pode ser usado em expressões</span>
<span class="variable">$x</span> = <span class="function">print</span> <span class="string">"Valor: "</span> . <span class="number">10</span>;
<span class="function">echo</span> <span class="string">"\nRetorno: "</span> . <span class="variable">$x</span>; <span class="comment"># Output: Retorno: 1</span>
<span class="comment">?&gt;</span>
                </div>

                <div class="output-box">
Output:
Olá, Mundo!
Teste1
Bem-vindo, Vitório!
Valor: 10
Retorno: 1
                </div>
            </div>

            <div id="difference-tab" class="tab-content">
                <h3>Diferenças: echo vs print</h3>
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>echo</th>
                            <th>print</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Parênteses</strong></td>
                            <td>Opcionais</td>
                            <td>Opcionais</td>
                        </tr>
                        <tr>
                            <td><strong>Múltiplos parâmetros</strong></td>
                            <td>✅ Suporta</td>
                            <td>❌ Não suporta</td>
                        </tr>
                        <tr>
                            <td><strong>Valor de retorno</strong></td>
                            <td>❌ Nenhum (void)</td>
                            <td>✅ Retorna 1</td>
                        </tr>
                        <tr>
                            <td><strong>Performance</strong></td>
                            <td>Ligeiramente mais rápido</td>
                            <td>Ligeiramente mais lento</td>
                        </tr>
                        <tr>
                            <td><strong>Uso recomendado</strong></td>
                            <td>Saídas simples e múltiplas</td>
                            <td>Quando precisa do retorno</td>
                        </tr>
                    </tbody>
                </table>

                <div class="success-box">
                    <strong>✅ Recomendação:</strong>
                    <p style="margin-top: 10px;">Use <code>echo</code> na maioria dos casos. É mais rápido e suporta múltiplos parâmetros. Use <code>print</code> apenas quando precisar do valor de retorno.</p>
                </div>
            </div>
        </section>

        <!-- var_dump -->
        <section id="vardump" class="card">
            <h2>🔍 5. var_dump() - Depuração</h2>
            <p>A função <code>var_dump()</code> é essencial para debugging. Ela exibe informações detalhadas sobre uma variável, incluindo tipo e valor.</p>

            <span class="badge badge-intermediate">Intermediário</span>

            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># var_dump() - Mostra tipo E valor da variável</span>

<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="variable">$idade</span> = <span class="number">31</span>;
<span class="variable">$altura</span> = <span class="number">1.81</span>;
<span class="variable">$ativo</span> = <span class="keyword">true</span>;
<span class="variable">$nulo</span> = <span class="keyword">null</span>;

<span class="function">var_dump</span>(<span class="variable">$nome</span>);
<span class="comment"># Output: string(7) "Vitório"</span>

<span class="function">var_dump</span>(<span class="variable">$idade</span>);
<span class="comment"># Output: int(31)</span>

<span class="function">var_dump</span>(<span class="variable">$altura</span>);
<span class="comment"># Output: float(1.81)</span>

<span class="function">var_dump</span>(<span class="variable">$ativo</span>);
<span class="comment"># Output: bool(true)</span>

<span class="function">var_dump</span>(<span class="variable">$nulo</span>);
<span class="comment"># Output: NULL</span>

<span class="comment"># var_dump com múltiplas variáveis</span>
<span class="function">var_dump</span>(<span class="variable">$nome</span>, <span class="variable">$idade</span>, <span class="variable">$altura</span>);

<span class="comment"># var_dump com arrays</span>
<span class="variable">$frutas</span> = [<span class="string">"Maçã"</span>, <span class="string">"Banana"</span>, <span class="string">"Uva"</span>];
<span class="function">var_dump</span>(<span class="variable">$frutas</span>);
<span class="comment"># Output: array(3) { [0]=> string(4) "Maçã" [1]=> string(6) "Banana" [2]=> string(3) "Uva" }</span>

<span class="comment"># Dica: Use &lt;pre&gt; para formatar melhor no HTML</span>
<span class="function">echo</span> <span class="string">"&lt;pre&gt;"</span>;
<span class="function">var_dump</span>(<span class="variable">$frutas</span>);
<span class="function">echo</span> <span class="string">"&lt;/pre&gt;"</span>;
<span class="comment">?&gt;</span>
            </div>

            <div class="info-box">
                <strong>💡 Quando usar var_dump():</strong>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Debugging durante desenvolvimento</li>
                    <li>Verificar o tipo real de uma variável</li>
                    <li>Inspecionar estrutura de arrays e objetos</li>
                    <li>Identificar valores null inesperados</li>
                </ul>
            </div>

            <h3>Comparativo de Saída</h3>
            <div class="grid-2">
                <div>
                    <h4>Com echo</h4>
                    <div class="code-block">
<span class="variable">$valor</span> = <span class="keyword">true</span>;
<span class="function">echo</span> <span class="variable">$valor</span>;
<span class="comment"># Output: 1</span>
                    </div>
                </div>
                <div>
                    <h4>Com var_dump</h4>
                    <div class="code-block">
<span class="variable">$valor</span> = <span class="keyword">true</span>;
<span class="function">var_dump</span>(<span class="variable">$valor</span>);
<span class="comment"># Output: bool(true)</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comparativo Geral -->
        <section id="comparison" class="card">
            <h2>⚖️ 6. Comparativo Geral</h2>
            
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Função</th>
                        <th>Retorna Valor?</th>
                        <th>Mostra Tipo?</th>
                        <th>Múltiplos Parâmetros?</th>
                        <th>Uso Principal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>echo</strong></td>
                        <td>❌ Não</td>
                        <td>❌ Não</td>
                        <td>✅ Sim</td>
                        <td>Exibir conteúdo ao usuário</td>
                    </tr>
                    <tr>
                        <td><strong>print</strong></td>
                        <td>✅ Sim (1)</td>
                        <td>❌ Não</td>
                        <td>❌ Não</td>
                        <td>Exibir conteúdo (raro)</td>
                    </tr>
                    <tr>
                        <td><strong>var_dump</strong></td>
                        <td>❌ Não</td>
                        <td>✅ Sim</td>
                        <td>✅ Sim</td>
                        <td>Debugging/Depuração</td>
                    </tr>
                    <tr>
                        <td><strong>print_r</strong></td>
                        <td>✅ Sim</td>
                        <td>❌ Não</td>
                        <td>❌ Não</td>
                        <td>Exibir arrays/objetos</td>
                    </tr>
                </tbody>
            </table>

            <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="variable">$dados</span> = [<span class="string">"nome"</span> => <span class="string">"Vitório"</span>, <span class="string">"idade"</span> => <span class="number">31</span>];

<span class="comment"># echo - Apenas valor</span>
<span class="function">echo</span> <span class="variable">$dados</span>[<span class="string">"nome"</span>];
<span class="comment"># Output: Vitório</span>

<span class="comment"># print_r - Estrutura legível</span>
<span class="function">print_r</span>(<span class="variable">$dados</span>);
<span class="comment"># Output: Array ( [nome] => Vitório [idade] => 31 )</span>

<span class="comment"># var_dump - Estrutura detalhada</span>
<span class="function">var_dump</span>(<span class="variable">$dados</span>);
<span class="comment"># Output: array(2) { ["nome"]=> string(7) "Vitório" ["idade"]=> int(31) }</span>
<span class="comment">?&gt;</span>
            </div>
        </section>

        <!-- Desafio Prático -->
        <section id="challenge" class="challenge-box">
            <h3>🎯 7. Desafio Prático em Sala</h3>
            <p>Crie um script PHP que demonstre todos os conceitos aprendidos nesta aula:</p>
            
            <ul>
                <li>✅ Declare pelo menos 5 variáveis de tipos diferentes (string, int, float, bool, null)</li>
                <li>✅ Use <code>echo</code> para exibir uma mensagem de boas-vindas com interpolação</li>
                <li>✅ Use <code>print</code> para exibir um valor e capture o retorno</li>
                <li>✅ Use <code>var_dump()</code> para mostrar o tipo de todas as variáveis</li>
                <li>✅ Demonstre case-sensitivity criando variáveis com nomes similares</li>
                <li>✅ Concatene strings usando o operador ponto (.)</li>
            </ul>

            <div class="hint-box" onclick="toggleHint('hint1')">
                <strong>💡 Clique para ver uma dica</strong>
                <div id="hint1" class="hint-content">
                    <div class="code-block" style="background: rgba(255,255,255,0.3);">
<span class="comment"># Estrutura sugerida:</span>
<span class="variable">$nome</span> = <span class="string">"Seu Nome"</span>;
<span class="variable">$idade</span> = <span class="number">XX</span>;
<span class="variable">$altura</span> = <span class="number">X.XX</span>;
<span class="variable">$estudando</span> = <span class="keyword">true</span>;
<span class="variable">$cargo</span> = <span class="keyword">null</span>;

<span class="function">echo</span> <span class="string">"Olá, eu sou </span><span class="variable">$nome</span><span class="string">!"</span>;
<span class="function">print</span>(<span class="string">"Tenho "</span> . <span class="variable">$idade</span> . <span class="string">" anos"</span>);
<span class="function">var_dump</span>(<span class="variable">$nome</span>, <span class="variable">$idade</span>, <span class="variable">$altura</span>, <span class="variable">$estudando</span>, <span class="variable">$cargo</span>);
                    </div>
                </div>
            </div>

            <div class="code-block" style="background: rgba(255,255,255,0.2); margin-top: 20px;">
<span class="comment"># Critérios de Avaliação:</span>
✓ Todas as variáveis declaradas corretamente
✓ Uso adequado de echo, print e var_dump
✓ Código organizado e comentado
✓ Output esperado sem erros
            </div>
        </section>

        <!-- Aprofundamento -->
        <section id="advanced" class="card">
            <h2>🚀 8. Aprofundamento</h2>
            <p>Agora que você domina o básico, vamos explorar alguns conceitos mais avançados.</p>

            <div class="tabs">
                <button class="tab active" onclick="showTab('constantes')">Constantes</button>
                <button class="tab" onclick="showTab('operadores')">Operadores</button>
                <button class="tab" onclick="showTab('escopo')">Escopo</button>
            </div>

            <div id="constantes" class="tab-content active">
                <h3>Constantes</h3>
                <p>Constantes são valores que não podem ser alterados após definição.</p>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Definindo constantes</span>
<span class="function">define</span>(<span class="string">"NOME"</span>, <span class="string">"Minha Aplicação"</span>);
<span class="function">define</span>(<span class="string">"VERSÃO"</span>, <span class="string">"1.0.0"</span>);
<span class="function">define</span>(<span class="string">"ATIVO"</span>, <span class="keyword">true</span>);

<span class="comment"># Constante com const (apenas em escopo global)</span>
<span class="keyword">const</span> PI = <span class="number">3.14159</span>;

<span class="comment"># Usando constantes</span>
<span class="function">echo</span> NOME;
<span class="function">echo</span> <span class="string">"Versão: "</span> . VERSÃO;
<span class="function">echo</span> PI;

<span class="comment"># Constantes são case-sensitive por padrão</span>
<span class="function">echo</span> nome; <span class="comment"># ERRO! Constante não definida</span>

<span class="comment"># Constante case-insensitive (PHP 7.3+)</span>
<span class="function">define</span>(<span class="string">"COR"</span>, <span class="string">"Azul"</span>, <span class="keyword">true</span>);
<span class="function">echo</span> cor; <span class="comment"># Funciona: Azul</span>

<span class="comment"># Verificando se constante existe</span>
<span class="keyword">if</span> (<span class="function">defined</span>(<span class="string">"NOME"</span>)) {
    <span class="function">echo</span> <span class="string">"Constante NOME existe!"</span>;
}
<span class="comment">?&gt;</span>
                </div>

                <div class="warning-box">
                    <strong>⚠️ Diferença Variável vs Constante:</strong>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Variável: <code>$nome</code> (com $)</li>
                        <li>Constante: <code>NOME</code> (sem $)</li>
                        <li>Variável pode mudar, constante não</li>
                    </ul>
                </div>
            </div>

            <div id="operadores" class="tab-content">
                <h3>Operadores Úteis</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Operador de concatenação (.)</span>
<span class="variable">$nome</span> = <span class="string">"Vitório"</span>;
<span class="variable">$sobrenome</span> = <span class="string">"Silva"</span>;
<span class="variable">$nomeCompleto</span> = <span class="variable">$nome</span> . <span class="string">" "</span> . <span class="variable">$sobrenome</span>;

<span class="comment"># Operador de atribuição concatenada (.=)</span>
<span class="variable">$mensagem</span> = <span class="string">"Olá"</span>;
<span class="variable">$mensagem</span> .= <span class="string">", "</span>;
<span class="variable">$mensagem</span> .= <span class="variable">$nome</span>;
<span class="variable">$mensagem</span> .= <span class="string">"!"</span>;
<span class="comment"># Resultado: "Olá, Vitório!"</span>

<span class="comment"># Operador null coalescing (??) - PHP 7+</span>
<span class="variable">$nome</span> = <span class="variable">$_GET</span>[<span class="string">'nome'</span>] ?? <span class="string">"Visitante"</span>;
<span class="comment"># Se $_GET['nome'] existir, usa ele. Senão, usa "Visitante"</span>

<span class="comment"># Operador spaceship (&lt;=&gt;) - PHP 7+</span>
<span class="variable">$resultado</span> = <span class="number">5</span> &lt;=&gt; <span class="number">3</span>; <span class="comment"># 1 (5 > 3)</span>
<span class="variable">$resultado</span> = <span class="number">3</span> &lt;=&gt; <span class="number">5</span>; <span class="comment"># -1 (3 < 5)</span>
<span class="variable">$resultado</span> = <span class="number">5</span> &lt;=&gt; <span class="number">5</span>; <span class="comment"># 0 (5 == 5)</span>

<span class="comment"># Operador de incremento/decremento</span>
<span class="variable">$x</span> = <span class="number">5</span>;
<span class="variable">$x</span>++; <span class="comment"># 6 (pós-incremento)</span>
<span class="variable">$x</span>--; <span class="comment"># 5 (pós-decremento)</span>
++<span class="variable">$x</span>; <span class="comment"># 6 (pré-incremento)</span>
--<span class="variable">$x</span>; <span class="comment"># 5 (pré-decremento)</span>
<span class="comment">?&gt;</span>
                </div>
            </div>

            <div id="escopo" class="tab-content">
                <h3>Escopo de Variáveis</h3>
                <div class="code-block">
<span class="comment">&lt;?php</span>
<span class="comment"># Escopo global</span>
<span class="variable">$global</span> = <span class="string">"Sou global"</span>;

<span class="keyword">function</span> <span class="function">testarEscopo</span>() {
    <span class="comment"># Escopo local</span>
    <span class="variable">$local</span> = <span class="string">"Sou local"</span>;
    
    <span class="function">echo</span> <span class="variable">$local</span>;  <span class="comment"># Funciona</span>
    <span class="comment"># echo $global;  # ERRO! Não acessa global diretamente</span>
    
    <span class="comment"># Acessando variável global</span>
    <span class="keyword">global</span> <span class="variable">$global</span>;
    <span class="function">echo</span> <span class="variable">$global</span>;  <span class="comment"># Agora funciona</span>
    
    <span class="comment"># Ou usando $GLOBALS</span>
    <span class="function">echo</span> <span class="variable">$GLOBALS</span>[<span class="string">'global'</span>];
}

<span class="function">testarEscopo</span>();

<span class="comment"># echo $local;  # ERRO! Variável local não existe fora da função</span>

<span class="comment"># Variáveis estáticas (mantêm valor entre chamadas)</span>
<span class="keyword">function</span> <span class="function">contador</span>() {
    <span class="keyword">static</span> <span class="variable">$count</span> = <span class="number">0</span>;
    <span class="variable">$count</span>++;
    <span class="function">echo</span> <span class="variable">$count</span>;
}

<span class="function">contador</span>(); <span class="comment"># 1</span>
<span class="function">contador</span>(); <span class="comment"># 2</span>
<span class="function">contador</span>(); <span class="comment"># 3</span>
<span class="comment">?&gt;</span>
                </div>
            </div>
        </section>

        <!-- Quiz -->
        <section id="quiz" class="quiz-container">
            <h2>🧠 9. Quiz de Conhecimento</h2>
            <p>Teste o que você aprendeu!</p>

            <div class="quiz-question" data-correct="2">
                <p><strong>1. Qual símbolo é usado para declarar variáveis em PHP?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) @</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) #</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) $</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) %</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> Em PHP, todas as variáveis começam com o símbolo $.
                </div>
            </div>

            <div class="quiz-question" data-correct="1">
                <p><strong>2. O que acontece se você usar $nome e $Nome no mesmo script?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) É um erro de sintaxe</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) São variáveis diferentes</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) São a mesma variável</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) O PHP converte automaticamente</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> PHP é case-sensitive, então $nome e $Nome são variáveis diferentes.
                </div>
            </div>

            <div class="quiz-question" data-correct="0">
                <p><strong>3. Qual função mostra o tipo E o valor de uma variável?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) var_dump()</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) echo</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) print</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) gettype()</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> var_dump() exibe informações detalhadas incluindo tipo e valor.
                </div>
            </div>

            <div class="quiz-question" data-correct="3">
                <p><strong>4. Qual é a diferença principal entre echo e print?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) echo é mais lento</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) print não aceita strings</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) echo requer parênteses</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) print retorna valor, echo não</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> print retorna 1, enquanto echo não retorna valor algum.
                </div>
            </div>

            <div class="quiz-question" data-correct="1">
                <p><strong>5. Como se declara um número decimal em PHP?</strong></p>
                <div class="quiz-options">
                    <div class="quiz-option" onclick="checkAnswer(this, 0)">A) 1,81</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 1)">B) 1.81</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 2)">C) 1:81</div>
                    <div class="quiz-option" onclick="checkAnswer(this, 3)">D) decimal(1,81)</div>
                </div>
                <div class="quiz-feedback">
                    <strong>✅ Correto!</strong> Em PHP usa-se ponto (.) para números decimais, não vírgula.
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
                        <li>Variáveis começam com $</li>
                        <li>PHP é case-sensitive</li>
                        <li>Tipos: string, int, float, bool, null</li>
                        <li>echo - saída rápida, múltiplos parâmetros</li>
                        <li>print - retorna 1, um parâmetro</li>
                        <li>var_dump() - debugging com tipo e valor</li>
                        <li>Constantes com define() e const</li>
                    </ul>
                </div>
                <div>
                    <h3 style="color: white;">📚 Próxima aula:</h3>
                    <ul style="margin-left: 20px; line-height: 2;">
                        <li>Estruturas de controle (if/else, switch)</li>
                        <li>Laços de repetição (for, while, foreach)</li>
                        <li>Arrays e manipulação</li>
                        <li>Funções em PHP</li>
                        <li>Processamento de formulários</li>
                        <li><a href="Aula2.php" target="_blank"><button class="btn btn-success"> ir Para Proxima Aula </button></a></li>

                    </ul>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <p style="font-size: 1.2rem; margin-bottom: 20px;">🎉 Parabéns por completar esta aula!</p>
                <button class="btn btn-success" onclick="scrollToTop()">⬆️ Voltar ao Topo</button>
            </div>
        </section>

        <footer>
            <p>Aula de PHP - Semântica Básica</p>
            <p style="opacity: 0.8; margin-top: 10px;">Duração: 3 horas | Nível: Básico</p>
            <p style="opacity: 0.6; margin-top: 20px;">Pratique os exemplos e complete o desafio!</p>
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

        // Variable tester simulator
        document.getElementById('variableTester').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const varName = document.getElementById('varName').value;
            let varValue = document.getElementById('varValue').value;
            const outputType = document.getElementById('outputType').value;
            
            const resultDiv = document.getElementById('simResult');
            
            // Detect type
            let detectedType = 'string';
            let displayValue = varValue;
            
            if (varValue.toLowerCase() === 'true' || varValue.toLowerCase() === 'false') {
                detectedType = 'bool';
            } else if (varValue === 'null') {
                detectedType = 'null';
            } else if (!isNaN(varValue) && varValue.includes('.')) {
                detectedType = 'float';
            } else if (!isNaN(varValue)) {
                detectedType = 'int';
            } else if (varValue.startsWith('"') || varValue.startsWith("'")) {
                displayValue = varValue.slice(1, -1);
            }
            
            let output = '';
            
            if (outputType === 'echo') {
                output = `<span style="color: #569cd6;">echo</span> ${varName};<br><br>`;
                output += `<strong>Output:</strong> ${displayValue}`;
            } else if (outputType === 'print') {
                output = `<span style="color: #569cd6;">print</span> ${varName};<br><br>`;
                output += `<strong>Output:</strong> ${displayValue}<br>`;
                output += `<strong>Return:</strong> 1`;
            } else if (outputType === 'vardump') {
                output = `<span style="color: #569cd6;">var_dump</span>(${varName});<br><br>`;
                output += `<strong>Output:</strong> `;
                
                if (detectedType === 'string') {
                    output += `<span style="color: #4ec9b0;">string</span>(${displayValue.length}) "${displayValue}"`;
                } else if (detectedType === 'int') {
                    output += `<span style="color: #4ec9b0;">int</span>(${varValue})`;
                } else if (detectedType === 'float') {
                    output += `<span style="color: #4ec9b0;">float</span>(${varValue})`;
                } else if (detectedType === 'bool') {
                    output += `<span style="color: #4ec9b0;">bool</span>(${varValue.toLowerCase()})`;
                } else if (detectedType === 'null') {
                    output += `<span style="color: #4ec9b0;">NULL</span>`;
                }
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
            
            // Disable all options
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
                    
                    const originalAfter = codeBlock.style.getPropertyValue('--after-content');
                    codeBlock.style.setProperty('--after-content', '✅ Copiado!');
                    
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

        // Add scroll animations
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


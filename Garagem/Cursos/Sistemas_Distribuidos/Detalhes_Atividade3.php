<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Passo a Passo: Setup de Replicação MySQL com Docker</title>
    
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #ec4899;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;
            --database: #0891b2;
            
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #1e1b4b;
            
            --card-bg: rgba(255, 255, 255, 0.95);
            --code-bg: #1e1e2e;
            --text-main: #1e293b;
            --text-muted: #64748b;
            
            --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1);
            --shadow-xl: 0 20px 25px -5px rgba(0,0,0,0.1);
            
            --radius-card: 16px;
            --radius-element: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            color: var(--text-main);
            line-height: 1.6;
            min-height: 100vh;
            padding-bottom: 4rem;
        }

        .progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255,255,255,0.1);
            z-index: 1000;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            width: 0%;
            transition: width 0.1s ease;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            text-align: center;
            padding: 3rem 0;
            color: white;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        header p {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.8);
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius-card);
            padding: 2rem;
            box-shadow: var(--shadow-xl);
            margin-bottom: 2rem;
        }

        .card h2 {
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card h3 {
            color: var(--text-main);
            margin: 1.5rem 0 1rem;
        }

        /* File Tree */
        .file-tree {
            background: var(--code-bg);
            border-radius: var(--radius-element);
            padding: 1.5rem;
            font-family: 'Fira Code', monospace;
            color: #e2e8f0;
            margin: 1.5rem 0;
            overflow-x: auto;
        }

        .file-tree .folder {
            color: var(--warning);
            font-weight: 600;
        }

        .file-tree .file {
            color: var(--success);
            padding-left: 1.5rem;
        }

        .file-tree .comment {
            color: #5c6370;
            font-style: italic;
        }

        /* Code Block */
        .code-container {
            position: relative;
            margin: 1.5rem 0;
            border-radius: var(--radius-element);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .code-header {
            background: rgba(0, 0, 0, 0.3);
            padding: 0.5rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .code-title {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
            font-family: 'Fira Code', monospace;
        }

        .copy-btn {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.75rem;
            transition: all 0.2s;
        }

        .copy-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: white;
        }

        .copy-btn.copied {
            background: var(--success);
            border-color: var(--success);
        }

        pre {
            background: var(--code-bg);
            padding: 1.5rem;
            overflow-x: auto;
            margin: 0;
            border-left: 4px solid var(--primary);
            max-height: 600px;
            overflow-y: auto;
        }

        code {
            font-family: 'Fira Code', ui-monospace;
            font-size: 0.95rem;
            line-height: 1.7;
            color: rgba(255, 0, 255, 0.8);
        }

        /* Syntax Highlighting */
        .kw { color: #c678dd; }
        .str { color: #98c379; }
        .num { color: #d19a66; }
        .com { color: #5c6370; font-style: italic; }
        .func { color: #61afef; }

        /* Step Indicator */
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .step {
            flex: 1;
            min-width: 120px;
            padding: 1rem;
            background: rgba(99, 102, 241, 0.1);
            border-radius: var(--radius-element);
            text-align: center;
            border: 2px solid transparent;
            transition: all 0.3s;
        }

        .step.active {
            border-color: var(--primary);
            background: rgba(99, 102, 241, 0.2);
        }

        .step.completed {
            border-color: var(--success);
            background: rgba(16, 185, 129, 0.1);
        }

        .step-number {
            display: block;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .step.completed .step-number {
            color: var(--success);
        }

        .step-label {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        /* Info Box */
        .info-box {
            padding: 1.5rem;
            border-radius: var(--radius-element);
            margin: 1.5rem 0;
            border-left: 4px solid;
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }

        .info-box.success {
            background: rgba(16, 185, 129, 0.1);
            border-color: var(--success);
        }

        .info-box.warning {
            background: rgba(245, 158, 11, 0.1);
            border-color: var(--warning);
        }

        .info-box.info {
            background: rgba(59, 130, 246, 0.1);
            border-color: var(--info);
        }

        .info-icon {
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        /* Checklist */
        .checklist {
            list-style: none;
            margin: 1rem 0;
        }

        .checklist li {
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .checklist li:last-child {
            border-bottom: none;
        }

        .checklist input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .checklist label {
            cursor: pointer;
            flex: 1;
        }

        /* Terminal Simulation */
        .terminal {
            background: #1a1a2e;
            border-radius: var(--radius-element);
            overflow: hidden;
            margin: 1.5rem 0;
        }

        .terminal-header {
            background: #0f0f1a;
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .terminal-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .terminal-dot.red { background: #ff5f56; }
        .terminal-dot.yellow { background: #ffbd2e; }
        .terminal-dot.green { background: #27c93f; }

        .terminal-title {
            color: rgba(255,255,255,0.5);
            font-size: 0.85rem;
            margin-left: 0.5rem;
        }

        .terminal-body {
            padding: 1rem;
            font-family: 'Fira Code', monospace;
            font-size: 0.85rem;
            color: #e2e8f0;
            max-height: 400px;
            overflow-y: auto;
        }

        .terminal-line {
            margin-bottom: 0.5rem;
        }

        .terminal-line.command {
            color: var(--success);
        }

        .terminal-line.output {
            color: rgba(255,255,255,0.7);
            padding-left: 1rem;
        }

        .terminal-line.error {
            color: var(--danger);
        }

        .terminal-line.success {
            color: var(--success);
        }

        /* Toast */
        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--success);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: var(--radius-element);
            box-shadow: var(--shadow-lg);
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            header h1 {
                font-size: 1.8rem;
            }

            .step-indicator {
                flex-direction: column;
            }

            .step {
                min-width: 100%;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            animation: fadeIn 0.6s ease;
        }

        /* Collapsible */
        .collapsible {
            background: rgba(99, 102, 241, 0.05);
            border: 1px solid var(--primary);
            border-radius: var(--radius-element);
            margin: 1rem 0;
            overflow: hidden;
        }

        .collapsible-header {
            padding: 1rem 1.5rem;
            background: rgba(99, 102, 241, 0.1);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--primary-dark);
        }

        .collapsible-header:hover {
            background: rgba(99, 102, 241, 0.15);
        }

        .collapsible-content {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .collapsible.active .collapsible-content {
            padding: 1.5rem;
            max-height: 1000px;
        }

        .collapsible-icon {
            transition: transform 0.3s ease;
        }

        .collapsible.active .collapsible-icon {
            transform: rotate(180deg);
        }

        /* Screenshot Placeholder */
        .screenshot-placeholder {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: var(--radius-element);
            padding: 3rem;
            text-align: center;
            color: white;
            margin: 1.5rem 0;
        }

        .screenshot-placeholder img {
            max-width: 100%;
            border-radius: var(--radius-element);
            box-shadow: var(--shadow-xl);
        }
    </style>
</head>
<body>
    <!-- Barra de Progresso -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Toast Notification -->
    <div class="toast" id="toast">✅ Código copiado!</div>

    <div class="container">
        <header>
            <h1>🚀 Guia Passo a Passo: Replicação MySQL com Docker</h1>
            <p>Setup completo de 1 Master + 3 Slaves com RabbitMQ - Tutorial "Copy & Paste"</p>
        </header>

        <!-- Step Indicator -->
        <div class="step-indicator">
            <div class="step active" id="step1">
                <span class="step-number">1</span>
                <span class="step-label">Preparar Pastas</span>
            </div>
            <div class="step" id="step2">
                <span class="step-number">2</span>
                <span class="step-label">Criar Arquivos</span>
            </div>
            <div class="step" id="step3">
                <span class="step-number">3</span>
                <span class="step-label">Iniciar Docker</span>
            </div>
            <div class="step" id="step4">
                <span class="step-number">4</span>
                <span class="step-label">Configurar Replicação</span>
            </div>
            <div class="step" id="step5">
                <span class="step-number">5</span>
                <span class="step-label">Testar Sistema</span>
            </div>
        </div>

        <!-- Seção 1: Estrutura de Pastas -->
        <section class="card" id="section1">
            <h2>📁 Passo 1: Preparar Estrutura de Pastas</h2>
            
            <div class="info-box info">
                <span class="info-icon">💡</span>
                <div>
                    <strong>Onde fazer:</strong> Crie uma pasta nova em qualquer local do seu computador (ex: Área de Trabalho ou Documentos). Todos os arquivos abaixo devem estar nesta mesma pasta.
                </div>
            </div>

            <h3>Estrutura Final das Pastas:</h3>
            <div class="file-tree">
<pre><span class="folder">replicacao-mysql/</span>                    <span class="com"># ← Pasta principal (crie esta)</span>
│
├── <span class="file">docker-compose.yml</span>               <span class="com"># ← Arquivo de configuração Docker</span>
├── <span class="file">setup_replication.sh</span>             <span class="com"># ← Script de configuração (Linux/Mac)</span>
├── <span class="file">setup_replication.bat</span>            <span class="com"># ← Script de configuração (Windows)</span>
│
├── <span class="folder">scripts/</span>                           <span class="com"># ← Pasta para scripts SQL</span>
│   ├── <span class="file">init_master.sql</span>              <span class="com"># ← Script de inicialização do Master</span>
│   └── <span class="file">init_slave.sql</span>               <span class="com"># ← Script de inicialização dos Slaves</span>
│
└── <span class="folder">python/</span>                            <span class="com"># ← Pasta para código Python (opcional)</span>
    ├── <span class="file">db_producer.py</span>
    ├── <span class="file">db_writer.py</span>
    └── <span class="file">db_router.py</span></pre>
            </div>

            <h3>Comando para Criar a Estrutura:</h3>
            
            <div class="terminal">
                <div class="terminal-header">
                    <div class="terminal-dot red"></div>
                    <div class="terminal-dot yellow"></div>
                    <div class="terminal-dot green"></div>
                    <span class="terminal-title">Terminal (Windows PowerShell ou Linux/Mac)</span>
                </div>
                <div class="terminal-body">
                    <div class="terminal-line command">mkdir replicacao-mysql</div>
                    <div class="terminal-line command">cd replicacao-mysql</div>
                    <div class="terminal-line command">mkdir scripts</div>
                    <div class="terminal-line command">mkdir python</div>
                    <div class="terminal-line success">✅ Estrutura de pastas criada!</div>
                </div>
            </div>

            <div class="checklist">
                <h4>✅ Checklist de Verificação:</h4>
                <li>
                    <input type="checkbox" id="check1a" onchange="updateStep(1)">
                    <label for="check1a">Pasta principal "replicacao-mysql" criada</label>
                </li>
                <li>
                    <input type="checkbox" id="check1b" onchange="updateStep(1)">
                    <label for="check1b">Pasta "scripts" criada dentro da principal</label>
                </li>
                <li>
                    <input type="checkbox" id="check1c" onchange="updateStep(1)">
                    <label for="check1c">Pasta "python" criada dentro da principal (opcional)</label>
                </li>
            </div>
        </section>

        <!-- Seção 2: Criar Arquivos -->
        <section class="card" id="section2">
            <h2>📝 Passo 2: Criar Arquivos de Configuração</h2>
            
            <div class="info-box warning">
                <span class="info-icon">⚠️</span>
                <div>
                    <strong>Importante:</strong> Use um editor de texto como VS Code, Notepad++ ou Bloco de Notas. Salve todos os arquivos com codificação <strong>UTF-8</strong>.
                </div>
            </div>

            <div class="tabs-container" style="margin: 2rem 0;">
                <div class="tabs-header" style="display: flex; gap: 0.5rem; border-bottom: 2px solid rgba(0,0,0,0.1); margin-bottom: 1rem; flex-wrap: wrap;">
                    <button class="tab-btn active" onclick="openTab(event, 'dockercompose')" style="padding: 0.75rem 1.5rem; background: transparent; border: none; cursor: pointer; font-weight: 600; border-bottom: 2px solid transparent; margin-bottom: -2px;">docker-compose.yml</button>
                    <button class="tab-btn" onclick="openTab(event, 'initmaster')" style="padding: 0.75rem 1.5rem; background: transparent; border: none; cursor: pointer; font-weight: 600; border-bottom: 2px solid transparent; margin-bottom: -2px;">init_master.sql</button>
                    <button class="tab-btn" onclick="openTab(event, 'initslave')" style="padding: 0.75rem 1.5rem; background: transparent; border: none; cursor: pointer; font-weight: 600; border-bottom: 2px solid transparent; margin-bottom: -2px;">init_slave.sql</button>
                    <button class="tab-btn" onclick="openTab(event, 'setupsh')" style="padding: 0.75rem 1.5rem; background: transparent; border: none; cursor: pointer; font-weight: 600; border-bottom: 2px solid transparent; margin-bottom: -2px;">setup_replication.sh</button>
                </div>

                <div id="dockercompose" class="tab-content active">
                    <h3>Arquivo: <code>docker-compose.yml</code></h3>
                    <p><strong>Onde salvar:</strong> Na raiz da pasta <code>replicacao-mysql/</code></p>
                    
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">docker-compose.yml</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="kw">version</span>: <span class="str">'3.8'</span>

<span class="kw">services</span>:
  <span class="com"># RabbitMQ - Fila de Mensagens</span>
  rabbitmq:
    <span class="kw">image</span>: rabbitmq:3-management
    <span class="kw">container_name</span>: rabbitmq_db
    <span class="kw">ports</span>:
      - <span class="str">"5672:5672"</span>
      - <span class="str">"15672:15672"</span>
    <span class="kw">environment</span>:
      RABBITMQ_DEFAULT_USER: <span class="str">guest</span>
      RABBITMQ_DEFAULT_PASS: <span class="str">guest</span>
    <span class="kw">networks</span>:
      - db_network
    <span class="kw">healthcheck</span>:
      <span class="kw">test</span>: [<span class="str">"CMD"</span>, <span class="str">"rabbitmq-diagnostics"</span>, <span class="str">"-q"</span>, <span class="str">"ping"</span>]
      <span class="kw">interval</span>: 30s
      <span class="kw">timeout</span>: 10s
      <span class="kw">retries</span>: 5

  <span class="com"># MySQL Master - Recebe todas as escritas</span>
  mysql_master:
    <span class="kw">image</span>: mysql:8.0
    <span class="kw">container_name</span>: mysql_master
    <span class="kw">ports</span>:
      - <span class="str">"3306:3306"</span>
    <span class="kw">environment</span>:
      MYSQL_ROOT_PASSWORD: <span class="str">rootpassword</span>
      MYSQL_DATABASE: <span class="str">appdb</span>
      MYSQL_USER: <span class="str">appuser</span>
      MYSQL_PASSWORD: <span class="str">apppassword</span>
    <span class="kw">command</span>: >
      --server-id=1
      --log-bin=mysql-bin
      --binlog-format=ROW
      --gtid-mode=ON
      --enforce-gtid-consistency=ON
    <span class="kw">volumes</span>:
      - master_data:/var/lib/mysql
      - ./scripts/init_master.sql:/docker-entrypoint-initdb.d/init.sql
    <span class="kw">networks</span>:
      - db_network
    <span class="kw">healthcheck</span>:
      <span class="kw">test</span>: [<span class="str">"CMD"</span>, <span class="str">"mysqladmin"</span>, <span class="str">"ping"</span>, <span class="str">"-h"</span>, <span class="str">"localhost"</span>]
      <span class="kw">interval</span>: 10s
      <span class="kw">timeout</span>: 5s
      <span class="kw">retries</span>: 5

  <span class="com"># MySQL Slave 1</span>
  mysql_slave1:
    <span class="kw">image</span>: mysql:8.0
    <span class="kw">container_name</span>: mysql_slave1
    <span class="kw">ports</span>:
      - <span class="str">"3307:3306"</span>
    <span class="kw">environment</span>:
      MYSQL_ROOT_PASSWORD: <span class="str">rootpassword</span>
      MYSQL_DATABASE: <span class="str">appdb</span>
      MYSQL_USER: <span class="str">appuser</span>
      MYSQL_PASSWORD: <span class="str">apppassword</span>
    <span class="kw">command</span>: >
      --server-id=2
      --read-only=1
      --relay-log=mysql-relay-bin
    <span class="kw">volumes</span>:
      - slave1_data:/var/lib/mysql
    <span class="kw">networks</span>:
      - db_network
    <span class="kw">depends_on</span>:
      mysql_master:
        <span class="kw">condition</span>: service_healthy

  <span class="com"># MySQL Slave 2</span>
  mysql_slave2:
    <span class="kw">image</span>: mysql:8.0
    <span class="kw">container_name</span>: mysql_slave2
    <span class="kw">ports</span>:
      - <span class="str">"3308:3306"</span>
    <span class="kw">environment</span>:
      MYSQL_ROOT_PASSWORD: <span class="str">rootpassword</span>
      MYSQL_DATABASE: <span class="str">appdb</span>
      MYSQL_USER: <span class="str">appuser</span>
      MYSQL_PASSWORD: <span class="str">apppassword</span>
    <span class="kw">command</span>: >
      --server-id=3
      --read-only=1
      --relay-log=mysql-relay-bin
    <span class="kw">volumes</span>:
      - slave2_data:/var/lib/mysql
    <span class="kw">networks</span>:
      - db_network
    <span class="kw">depends_on</span>:
      mysql_master:
        <span class="kw">condition</span>: service_healthy

  <span class="com"># MySQL Slave 3</span>
  mysql_slave3:
    <span class="kw">image</span>: mysql:8.0
    <span class="kw">container_name</span>: mysql_slave3
    <span class="kw">ports</span>:
      - <span class="str">"3309:3306"</span>
    <span class="kw">environment</span>:
      MYSQL_ROOT_PASSWORD: <span class="str">rootpassword</span>
      MYSQL_DATABASE: <span class="str">appdb</span>
      MYSQL_USER: <span class="str">appuser</span>
      MYSQL_PASSWORD: <span class="str">apppassword</span>
    <span class="kw">command</span>: >
      --server-id=4
      --read-only=1
      --relay-log=mysql-relay-bin
    <span class="kw">volumes</span>:
      - slave3_data:/var/lib/mysql
    <span class="kw">networks</span>:
      - db_network
    <span class="kw">depends_on</span>:
      mysql_master:
        <span class="kw">condition</span>: service_healthy

<span class="kw">networks</span>:
  db_network:
    <span class="kw">driver</span>: bridge

<span class="kw">volumes</span>:
  master_data:
  slave1_data:
  slave2_data:
  slave3_data:</code></pre>
                    </div>
                </div>

                <div id="initmaster" class="tab-content">
                    <h3>Arquivo: <code>scripts/init_master.sql</code></h3>
                    <p><strong>Onde salvar:</strong> Dentro da pasta <code>scripts/</code></p>
                    
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">scripts/init_master.sql</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="com">-- Script de inicialização do MySQL Master</span>
<span class="com">-- Este script é executado automaticamente quando o container inicia</span>

<span class="com">-- Criar usuário de replicação</span>
CREATE USER <span class="str">'repl'</span>@<span class="str">'%'</span> IDENTIFIED BY <span class="str">'replpassword'</span>;
GRANT REPLICATION SLAVE <span class="kw">ON</span> *.* <span class="kw">TO</span> <span class="str">'repl'</span>@<span class="str">'%'</span>;
FLUSH PRIVILEGES;

<span class="com">-- Criar banco de dados e tabela de exemplo</span>
USE appdb;

CREATE TABLE <span class="kw">IF NOT EXISTS</span> users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<span class="com">-- Inserir alguns dados de exemplo</span>
INSERT INTO users (name, email) VALUES 
    (<span class="str">'João Silva'</span>, <span class="str">'joao@email.com'</span>),
    (<span class="str">'Maria Santos'</span>, <span class="str">'maria@email.com'</span>),
    (<span class="str">'Pedro Oliveira'</span>, <span class="str">'pedro@email.com'</span>);

<span class="com">-- Mostrar status inicial</span>
SELECT <span class="str">'Master inicializado com sucesso!'</span> AS status;
SHOW MASTER STATUS;</code></pre>
                    </div>
                </div>

                <div id="initslave" class="tab-content">
                    <h3>Arquivo: <code>scripts/init_slave.sql</code></h3>
                    <p><strong>Onde salvar:</strong> Dentro da pasta <code>scripts/</code> (opcional, configuração principal é feita via script shell)</p>
                    
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">scripts/init_slave.sql</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="com">-- Script de inicialização dos MySQL Slaves</span>
<span class="com">-- Nota: A configuração de replicação é feita via script setup_replication.sh</span>
<span class="com">-- Este arquivo é apenas para inicialização básica</span>

<span class="com">-- Criar banco de dados se não existir</span>
CREATE DATABASE <span class="kw">IF NOT EXISTS</span> appdb;

USE appdb;

<span class="com">-- Criar tabela vazia (será preenchida pela replicação)</span>
CREATE TABLE <span class="kw">IF NOT EXISTS</span> users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SELECT <span class="str">'Slave inicializado! Aguardando configuração de replicação...'</span> AS status;</code></pre>
                    </div>

                    <div class="info-box info">
                        <span class="info-icon">ℹ️</span>
                        <div>
                            <strong>Nota:</strong> A configuração real de replicação (CHANGE MASTER TO) é feita pelo script <code>setup_replication.sh</code> após todos os containers estarem rodando.
                        </div>
                    </div>
                </div>

                <div id="setupsh" class="tab-content">
                    <h3>Arquivo: <code>setup_replication.sh</code> (Linux/Mac) ou <code>setup_replication.bat</code> (Windows)</h3>
                    <p><strong>Onde salvar:</strong> Na raiz da pasta <code>replicacao-mysql/</code></p>
                    
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">setup_replication.sh (Linux/Mac)</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="com">#!/bin/bash</span>
<span class="com"># Script de configuração de replicação MySQL</span>
<span class="com"># Execute após: docker-compose up -d</span>

<span class="kw">echo</span> "🚀 Iniciando configuração de replicação..."

<span class="com"># Aguardar containers estarem prontos</span>
<span class="kw">echo</span> "⏳ Aguardando MySQL Master iniciar (30 segundos)..."
sleep 30

<span class="com"># Configurar cada Slave</span>
<span class="kw">for</span> i <span class="kw">in</span> 1 2 3; <span class="kw">do</span>
    <span class="kw">echo</span> "📋 Configurando Slave $i..."
    
    docker exec mysql_slave$i mysql -uroot -prootpassword -e <span class="str">"
        STOP SLAVE;
        RESET SLAVE;
        CHANGE MASTER TO
            MASTER_HOST='mysql_master',
            MASTER_USER='repl',
            MASTER_PASSWORD='replpassword',
            MASTER_AUTO_POSITION=1;
        START SLAVE;
    "</span>
    
    <span class="kw">echo</span> "✅ Slave $i configurado"
<span class="kw">done</span>

<span class="com"># Verificar status da replicação</span>
<span class="kw">echo</span> ""
<span class="kw">echo</span> "📊 Status da Replicação:"
<span class="kw">echo</span> "========================"

<span class="kw">for</span> i <span class="kw">in</span> 1 2 3; <span class="kw">do</span>
    <span class="kw">echo</span> ""
    <span class="kw">echo</span> "=== Slave $i ==="
    docker exec mysql_slave$i mysql -uroot -prootpassword -e <span class="str">"SHOW SLAVE STATUS\G"</span> | \
        grep -E <span class="str">"Slave_IO_Running|Slave_SQL_Running|Seconds_Behind_Master"</span>
<span class="kw">done</span>

<span class="kw">echo</span> ""
<span class="kw">echo</span> "🎉 Configuração concluída!"</code></pre>
                    </div>

                    <div class="info-box warning">
                        <span class="info-icon">⚠️</span>
                        <div>
                            <strong>Windows:</strong> No Windows, crie um arquivo <code>setup_replication.bat</code> com comandos Docker equivalentes ou execute os comandos manualmente no PowerShell.
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklist">
                <h4>✅ Checklist de Verificação:</h4>
                <li>
                    <input type="checkbox" id="check2a" onchange="updateStep(2)">
                    <label for="check2a">docker-compose.yml criado na raiz</label>
                </li>
                <li>
                    <input type="checkbox" id="check2b" onchange="updateStep(2)">
                    <label for="check2b">scripts/init_master.sql criado</label>
                </li>
                <li>
                    <input type="checkbox" id="check2c" onchange="updateStep(2)">
                    <label for="check2c">scripts/init_slave.sql criado</label>
                </li>
                <li>
                    <input type="checkbox" id="check2d" onchange="updateStep(2)">
                    <label for="check2d">setup_replication.sh criado (ou .bat no Windows)</label>
                </li>
            </div>
        </section>

        <!-- Seção 3: Iniciar Docker -->
        <section class="card" id="section3">
            <h2>🐳 Passo 3: Iniciar Containers Docker</h2>
            
            <div class="info-box info">
                <span class="info-icon">💡</span>
                <div>
                    <strong>Pré-requisito:</strong> Certifique-se que o Docker Desktop está instalado e rodando. Verifique com o comando <code>docker --version</code>.
                </div>
            </div>

            <h3>Comandos para Iniciar (Execute na pasta replicacao-mysql):</h3>
            
            <div class="terminal">
                <div class="terminal-header">
                    <div class="terminal-dot red"></div>
                    <div class="terminal-dot yellow"></div>
                    <div class="terminal-dot green"></div>
                    <span class="terminal-title">Terminal - Navegue até a pasta do projeto</span>
                </div>
                <div class="terminal-body">
                    <div class="terminal-line command">cd caminho/para/replicacao-mysql</div>
                    <div class="terminal-line command">docker-compose up -d</div>
                    <div class="terminal-line output">[+] Running 5/5</div>
                    <div class="terminal-line output"> ✔ Container rabbitmq_db    Started</div>
                    <div class="terminal-line output"> ✔ Container mysql_master   Started</div>
                    <div class="terminal-line output"> ✔ Container mysql_slave1   Started</div>
                    <div class="terminal-line output"> ✔ Container mysql_slave2   Started</div>
                    <div class="terminal-line output"> ✔ Container mysql_slave3   Started</div>
                    <div class="terminal-line success">✅ Todos os containers iniciados!</div>
                </div>
            </div>

            <h3>Verificar se os Containers estão Rodando:</h3>
            
            <div class="terminal">
                <div class="terminal-header">
                    <div class="terminal-dot red"></div>
                    <div class="terminal-dot yellow"></div>
                    <div class="terminal-dot green"></div>
                    <span class="terminal-title">Terminal - Verificar status</span>
                </div>
                <div class="terminal-body">
                    <div class="terminal-line command">docker-compose ps</div>
                    <div class="terminal-line output">NAME              STATUS              PORTS</div>
                    <div class="terminal-line output">rabbitmq_db       Up (healthy)        5672/tcp, 0.0.0.0:15672->15672/tcp</div>
                    <div class="terminal-line output">mysql_master      Up (healthy)        0.0.0.0:3306->3306/tcp</div>
                    <div class="terminal-line output">mysql_slave1      Up                  0.0.0.0:3307->3306/tcp</div>
                    <div class="terminal-line output">mysql_slave2      Up                  0.0.0.0:3308->3306/tcp</div>
                    <div class="terminal-line output">mysql_slave3      Up                  0.0.0.0:3309->3306/tcp</div>
                </div>
            </div>

            <div class="collapsible">
                <div class="collapsible-header" onclick="toggleCollapsible(this)">
                    <span>🔍 Comandos Úteis de Verificação</span>
                    <span class="collapsible-icon">▼</span>
                </div>
                <div class="collapsible-content">
                    <div class="terminal">
                        <div class="terminal-body">
                            <div class="terminal-line command"># Ver logs do Master</div>
                            <div class="terminal-line command">docker logs mysql_master</div>
                            <br>
                            <div class="terminal-line command"># Ver logs de um Slave</div>
                            <div class="terminal-line command">docker logs mysql_slave1</div>
                            <br>
                            <div class="terminal-line command"># Parar todos os containers</div>
                            <div class="terminal-line command">docker-compose down</div>
                            <br>
                            <div class="terminal-line command"># Parar e remover volumes (reset completo)</div>
                            <div class="terminal-line command">docker-compose down -v</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklist">
                <h4>✅ Checklist de Verificação:</h4>
                <li>
                    <input type="checkbox" id="check3a" onchange="updateStep(3)">
                    <label for="check3a">Docker Desktop está rodando</label>
                </li>
                <li>
                    <input type="checkbox" id="check3b" onchange="updateStep(3)">
                    <label for="check3b">Comando docker-compose up -d executado sem erros</label>
                </li>
                <li>
                    <input type="checkbox" id="check3c" onchange="updateStep(3)">
                    <label for="check3c">Todos os 5 containers aparecem como "Up" no docker-compose ps</label>
                </li>
                <li>
                    <input type="checkbox" id="check3d" onchange="updateStep(3)">
                    <label for="check3d">mysql_master está com status "healthy"</label>
                </li>
            </div>
        </section>

        <!-- Seção 4: Configurar Replicação -->
        <section class="card" id="section4">
            <h2>🔄 Passo 4: Configurar Replicação</h2>
            
            <div class="info-box warning">
                <span class="info-icon">⏱️</span>
                <div>
                    <strong>Tempo de Espera:</strong> Aguarde 30 segundos após iniciar os containers para garantir que o MySQL Master esteja completamente pronto.
                </div>
            </div>

            <h3>Opção A: Usando o Script Automático (Linux/Mac)</h3>
            
            <div class="terminal">
                <div class="terminal-header">
                    <div class="terminal-dot red"></div>
                    <div class="terminal-dot yellow"></div>
                    <div class="terminal-dot green"></div>
                    <span class="terminal-title">Terminal - Executar script de configuração</span>
                </div>
                <div class="terminal-body">
                    <div class="terminal-line command">chmod +x setup_replication.sh</div>
                    <div class="terminal-line command">./setup_replication.sh</div>
                    <div class="terminal-line output">🚀 Iniciando configuração de replicação...</div>
                    <div class="terminal-line output">⏳ Aguardando MySQL Master iniciar (30 segundos)...</div>
                    <div class="terminal-line output">📋 Configurando Slave 1...</div>
                    <div class="terminal-line output">✅ Slave 1 configurado</div>
                    <div class="terminal-line output">📋 Configurando Slave 2...</div>
                    <div class="terminal-line output">✅ Slave 2 configurado</div>
                    <div class="terminal-line output">📋 Configurando Slave 3...</div>
                    <div class="terminal-line output">✅ Slave 3 configurado</div>
                    <div class="terminal-line success">🎉 Configuração concluída!</div>
                </div>
            </div>

            <h3>Opção B: Comandos Manuais (Windows ou Passo a Passo)</h3>
            
            <div class="collapsible active">
                <div class="collapsible-header" onclick="toggleCollapsible(this)">
                    <span>📋 Comandos para Copiar e Executar</span>
                    <span class="collapsible-icon">▼</span>
                </div>
                <div class="collapsible-content">
                    <p>Execute cada bloco no seu terminal, um por vez:</p>
                    
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">1. Configurar Slave 1</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code>docker exec mysql_slave1 mysql -uroot -prootpassword -e "
STOP SLAVE;
RESET SLAVE;
CHANGE MASTER TO
    MASTER_HOST='mysql_master',
    MASTER_USER='repl',
    MASTER_PASSWORD='replpassword',
    MASTER_AUTO_POSITION=1;
START SLAVE;
"</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">2. Configurar Slave 2</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code>docker exec mysql_slave2 mysql -uroot -prootpassword -e "
STOP SLAVE;
RESET SLAVE;
CHANGE MASTER TO
    MASTER_HOST='mysql_master',
    MASTER_USER='repl',
    MASTER_PASSWORD='replpassword',
    MASTER_AUTO_POSITION=1;
START SLAVE;
"</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">3. Configurar Slave 3</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code>docker exec mysql_slave3 mysql -uroot -prootpassword -e "
STOP SLAVE;
RESET SLAVE;
CHANGE MASTER TO
    MASTER_HOST='mysql_master',
    MASTER_USER='repl',
    MASTER_PASSWORD='replpassword',
    MASTER_AUTO_POSITION=1;
START SLAVE;
"</code></pre>
                    </div>
                </div>
            </div>

            <h3>Verificar se a Replicação Funcionou:</h3>
            
            <div class="terminal">
                <div class="terminal-header">
                    <div class="terminal-dot red"></div>
                    <div class="terminal-dot yellow"></div>
                    <div class="terminal-dot green"></div>
                    <span class="terminal-title">Terminal - Verificar status de todos os slaves</span>
                </div>
                <div class="terminal-body">
                    <div class="terminal-line command">docker exec mysql_slave1 mysql -uroot -prootpassword -e "SHOW SLAVE STATUS\G" | grep -E "Slave_IO_Running|Slave_SQL_Running|Seconds_Behind_Master"</div>
                    <div class="terminal-line output">Slave_IO_Running: Yes</div>
                    <div class="terminal-line output">Slave_SQL_Running: Yes</div>
                    <div class="terminal-line output">Seconds_Behind_Master: 0</div>
                    <div class="terminal-line success">✅ Replicação funcionando!</div>
                </div>
            </div>

            <div class="info-box success">
                <span class="info-icon">✅</span>
                <div>
                    <strong>Sucesso!</strong> Se <code>Slave_IO_Running</code> e <code>Slave_SQL_Running</code> estiverem como <code>Yes</code> e <code>Seconds_Behind_Master</code> for <code>0</code>, sua replicação está funcionando perfeitamente!
                </div>
            </div>

            <div class="checklist">
                <h4>✅ Checklist de Verificação:</h4>
                <li>
                    <input type="checkbox" id="check4a" onchange="updateStep(4)">
                    <label for="check4a">Script de configuração executado ou comandos manuais rodados</label>
                </li>
                <li>
                    <input type="checkbox" id="check4b" onchange="updateStep(4)">
                    <label for="check4a">Slave_IO_Running = Yes em todos os slaves</label>
                </li>
                <li>
                    <input type="checkbox" id="check4c" onchange="updateStep(4)">
                    <label for="check4c">Slave_SQL_Running = Yes em todos os slaves</label>
                </li>
                <li>
                    <input type="checkbox" id="check4d" onchange="updateStep(4)">
                    <label for="check4d">Seconds_Behind_Master = 0 em todos os slaves</label>
                </li>
            </div>
        </section>

        <!-- Seção 5: Testar Sistema -->
        <section class="card" id="section5">
            <h2>🧪 Passo 5: Testar o Sistema</h2>
            
            <h3>Teste 1: Inserir Dados no Master</h3>
            
            <div class="terminal">
                <div class="terminal-header">
                    <div class="terminal-dot red"></div>
                    <div class="terminal-dot yellow"></div>
                    <div class="terminal-dot green"></div>
                    <span class="terminal-title">Terminal - Inserir dado no Master (porta 3306)</span>
                </div>
                <div class="terminal-body">
                    <div class="terminal-line command">docker exec mysql_master mysql -uappuser -papppassword appdb -e "INSERT INTO users (name, email) VALUES ('Teste Usuario', 'teste@email.com');"</div>
                    <div class="terminal-line success">✅ Insert executado no Master!</div>
                </div>
            </div>

            <h3>Teste 2: Verificar se Replicou nos Slaves</h3>
            
            <div class="terminal">
                <div class="terminal-header">
                    <div class="terminal-dot red"></div>
                    <div class="terminal-dot yellow"></div>
                    <div class="terminal-dot green"></div>
                    <span class="terminal-title">Terminal - Consultar dados em cada Slave</span>
                </div>
                <div class="terminal-body">
                    <div class="terminal-line command"># Slave 1 (porta 3307)</div>
                    <div class="terminal-line command">docker exec mysql_slave1 mysql -uappuser -papppassword appdb -e "SELECT * FROM users;"</div>
                    <div class="terminal-line output">+----+---------------+------------------+---------------------+</div>
                    <div class="terminal-line output">| id | name          | email            | created_at          |</div>
                    <div class="terminal-line output">+----+---------------+------------------+---------------------+</div>
                    <div class="terminal-line output">|  4 | Teste Usuario | teste@email.com  | 2024-01-15 10:30:00 |</div>
                    <div class="terminal-line output">+----+---------------+------------------+---------------------+</div>
                    <br>
                    <div class="terminal-line command"># Slave 2 (porta 3308)</div>
                    <div class="terminal-line command">docker exec mysql_slave2 mysql -uappuser -papppassword appdb -e "SELECT COUNT(*) FROM users;"</div>
                    <div class="terminal-line output">4 registros encontrados ✅</div>
                    <br>
                    <div class="terminal-line command"># Slave 3 (porta 3309)</div>
                    <div class="terminal-line command">docker exec mysql_slave3 mysql -uappuser -papppassword appdb -e "SELECT COUNT(*) FROM users;"</div>
                    <div class="terminal-line output">4 registros encontrados ✅</div>
                </div>
            </div>

            <h3>Teste 3: Acessar RabbitMQ Dashboard</h3>
            
            <div class="info-box info">
                <span class="info-icon">🌐</span>
                <div>
                    <strong>URL:</strong> <a href="http://localhost:15672" target="_blank" style="color: var(--primary);">http://localhost:15672</a><br>
                    <strong>Login:</strong> guest<br>
                    <strong>Senha:</strong> guest
                </div>
            </div>

            <div class="checklist">
                <h4>✅ Checklist de Verificação:</h4>
                <li>
                    <input type="checkbox" id="check5a" onchange="updateStep(5)">
                    <label for="check5a">Insert no Master funcionou sem erros</label>
                </li>
                <li>
                    <input type="checkbox" id="check5b" onchange="updateStep(5)">
                    <label for="check5b">Dados aparecem em todos os 3 slaves</label>
                </li>
                <li>
                    <input type="checkbox" id="check5c" onchange="updateStep(5)">
                    <label for="check5c">RabbitMQ Dashboard acessível em localhost:15672</label>
                </li>
                <li>
                    <input type="checkbox" id="check5d" onchange="updateStep(5)">
                    <label for="check5d">Todos os testes passaram com sucesso! 🎉</label>
                </li>
            </div>
        </section>

        <!-- Seção Extra: Resolução de Problemas -->
        <section class="card" id="troubleshooting">
            <h2>🔧 Resolução de Problemas Comuns</h2>
            
            <div class="collapsible">
                <div class="collapsible-header" onclick="toggleCollapsible(this)">
                    <span>❌ Erro: "Can't connect to MySQL server"</span>
                    <span class="collapsible-icon">▼</span>
                </div>
                <div class="collapsible-content">
                    <p><strong>Causa:</strong> Container ainda não inicializou completamente.</p>
                    <p><strong>Solução:</strong> Aguarde mais 30 segundos e verifique os logs:</p>
                    <div class="code-container">
                        <pre><code>docker logs mysql_master</code></pre>
                    </div>
                </div>
            </div>

            <div class="collapsible">
                <div class="collapsible-header" onclick="toggleCollapsible(this)">
                    <span>❌ Erro: "Slave_IO_Running: No"</span>
                    <span class="collapsible-icon">▼</span>
                </div>
                <div class="collapsible-content">
                    <p><strong>Causa:</strong> Credenciais de replicação incorretas ou Master não está acessível.</p>
                    <p><strong>Solução:</strong> Verifique o erro específico:</p>
                    <div class="code-container">
                        <pre><code>docker exec mysql_slave1 mysql -uroot -prootpassword -e "SHOW SLAVE STATUS\G" | grep Last_Error</code></pre>
                    </div>
                    <p>Depois reinicie a replicação:</p>
                    <div class="code-container">
                        <pre><code>docker exec mysql_slave1 mysql -uroot -prootpassword -e "STOP SLAVE; START SLAVE;"</code></pre>
                    </div>
                </div>
            </div>

            <div class="collapsible">
                <div class="collapsible-header" onclick="toggleCollapsible(this)">
                    <span>❌ Erro: "Port already in use"</span>
                    <span class="collapsible-icon">▼</span>
                </div>
                <div class="collapsible-content">
                    <p><strong>Causa:</strong> Outra aplicação está usando as portas 3306-3309.</p>
                    <p><strong>Solução:</strong> Pare outros serviços MySQL ou altere as portas no docker-compose.yml:</p>
                    <div class="code-container">
                        <pre><code>ports:
  - "13306:3306"  # Use portas diferentes</code></pre>
                    </div>
                </div>
            </div>

            <div class="collapsible">
                <div class="collapsible-header" onclick="toggleCollapsible(this)">
                    <span>🔄 Como Resetar Tudo e Começar do Zero</span>
                    <span class="collapsible-icon">▼</span>
                </div>
                <div class="collapsible-content">
                    <div class="terminal">
                        <div class="terminal-body">
                            <div class="terminal-line command"># Parar e remover todos os containers e volumes</div>
                            <div class="terminal-line command">docker-compose down -v</div>
                            <br>
                            <div class="terminal-line command"># Remover imagens (opcional, para download fresco)</div>
                            <div class="terminal-line command">docker rmi mysql:8.0 rabbitmq:3-management</div>
                            <br>
                            <div class="terminal-line command"># Iniciar novamente</div>
                            <div class="terminal-line command">docker-compose up -d</div>
                            <br>
                            <div class="terminal-line command"># Reconfigurar replicação</div>
                            <div class="terminal-line command">./setup_replication.sh</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer style="text-align: center; color: rgba(255,255,255,0.6); padding: 2rem;">
            <p>© 2024 Distributed Systems Course • Guia Passo a Passo</p>
            <p style="font-size: 0.8rem; margin-top: 0.5rem;">Dúvidas? Verifique os logs com <code>docker logs &lt;container_name&gt;</code></p>
        </footer>
    </div>

    <script>
        // Barra de Progresso
        window.onscroll = function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById("progressBar").style.width = scrolled + "%";
        };

        // Tabs
        function openTab(evt, tabName) {
            const tabContent = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContent.length; i++) {
                tabContent[i].classList.remove("active");
            }
            
            const tabLinks = document.getElementsByClassName("tab-btn");
            for (let i = 0; i < tabLinks.length; i++) {
                tabLinks[i].classList.remove("active");
            }
            
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        // Collapsible
        function toggleCollapsible(header) {
            header.parentElement.classList.toggle('active');
        }

        // Copy Code
        function copyCode(button) {
            const pre = button.parentElement.nextElementSibling;
            const code = pre.innerText;
            
            navigator.clipboard.writeText(code).then(() => {
                button.innerText = "Copiado!";
                button.classList.add('copied');
                
                setTimeout(() => {
                    button.innerText = "Copiar";
                    button.classList.remove('copied');
                }, 2000);
                
                showToast();
            });
        }

        // Toast
        function showToast() {
            const toast = document.getElementById('toast');
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Update Step Progress
        function updateStep(stepNum) {
            const checkboxes = document.querySelectorAll(`#section${stepNum} input[type="checkbox"]`);
            const allChecked = Array.from(checkboxes).every(cb => cb.checked);
            
            const stepElement = document.getElementById(`step${stepNum}`);
            if (allChecked) {
                stepElement.classList.add('completed');
                stepElement.classList.remove('active');
                
                // Activate next step
                const nextStep = document.getElementById(`step${stepNum + 1}`);
                if (nextStep) {
                    nextStep.classList.add('active');
                }
            } else {
                stepElement.classList.remove('completed');
                stepElement.classList.add('active');
            }
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula: Replicação de Banco de Dados com Filas e Docker</title>
    
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Paleta de Cores */
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
            
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1);
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
            overflow-x: hidden;
        }

        /* Barra de Progresso */
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

        /* Layout Grid */
        .layout-wrapper {
            display: grid;
            grid-template-columns: 280px 1fr;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
        }

        /* Sidebar Navigation */
        .sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem 1.5rem;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-menu {
            list-style: none;
            flex: 1;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: block;
            padding: 0.75rem 1rem;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            border-radius: var(--radius-element);
            transition: all 0.3s ease;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .nav-link:hover, .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateX(5px);
        }

        .nav-link.active {
            border-left: 3px solid var(--primary);
        }

        /* Main Content */
        .main-content {
            padding: 3rem 4rem;
            max-width: 100%;
        }

        header {
            margin-bottom: 3rem;
            animation: fadeInDown 0.8s ease;
        }

        h1 {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
        }

        /* Cards & Sections */
        section {
            margin-bottom: 4rem;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius-card);
            padding: 2rem;
            box-shadow: var(--shadow-xl);
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card h2 {
            font-size: 1.8rem;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card h3 {
            font-size: 1.3rem;
            color: var(--text-main);
            margin: 1.5rem 0 1rem;
        }

        p {
            margin-bottom: 1rem;
            color: var(--text-main);
        }

        ul {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        /* Info Boxes */
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

        .info-box.danger {
            background: rgba(239, 68, 68, 0.1);
            border-color: var(--danger);
        }

        .info-box.database {
            background: rgba(8, 145, 178, 0.1);
            border-color: var(--database);
        }

        .info-icon {
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        /* Code Blocks */
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

        pre {
            background: var(--code-bg);
            padding: 1.5rem;
            overflow-x: auto;
            margin: 0;
            border-left: 4px solid var(--primary);
            max-height: 500px;
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
        .cls { color: #e5c07b; }

        /* Tabs */
        .tabs-container {
            margin: 2rem 0;
        }

        .tabs-header {
            display: flex;
            gap: 0.5rem;
            border-bottom: 2px solid rgba(0,0,0,0.1);
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 0.75rem 1.5rem;
            background: transparent;
            border: none;
            cursor: pointer;
            font-weight: 600;
            color: var(--text-muted);
            border-bottom: 2px solid transparent;
            margin-bottom: -2px;
            transition: all 0.3s;
        }

        .tab-btn.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .tab-content.active {
            display: block;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
            background: white;
            border-radius: var(--radius-element);
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: var(--primary);
            color: white;
            font-weight: 600;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background: rgba(99, 102, 241, 0.05);
        }

        /* Badges */
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-primary { background: var(--primary); color: white; }
        .badge-success { background: var(--success); color: white; }
        .badge-warning { background: var(--warning); color: white; }
        .badge-danger { background: var(--danger); color: white; }
        .badge-database { background: var(--database); color: white; }

        /* Topology Visualizer */
        .topology-container {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            padding: 2rem;
            border-radius: var(--radius-card);
            margin: 2rem 0;
            position: relative;
            overflow: hidden;
        }

        .topology-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 2;
        }

        .db-node {
            background: rgba(255,255,255,0.05);
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: var(--radius-element);
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s;
            position: relative;
        }

        .db-node.master {
            border-color: var(--success);
            background: rgba(16, 185, 129, 0.1);
        }

        .db-node.slave {
            border-color: var(--info);
            background: rgba(59, 130, 246, 0.1);
        }

        .db-node.syncing {
            animation: pulse 1s infinite;
            border-color: var(--warning);
        }

        .db-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .db-label {
            font-weight: 600;
            color: white;
            margin-bottom: 0.25rem;
        }

        .db-status {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.6);
        }

        .replication-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, var(--success), var(--info));
            top: 50%;
            left: 20%;
            right: 20%;
            z-index: 1;
            opacity: 0.5;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Buttons */
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: var(--radius-element);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
        }

        .btn-secondary {
            background: rgba(255,255,255,0.1);
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Simulator Controls */
        .simulator-controls {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        /* Comparison Cards */
        .comparison-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin: 1.5rem 0;
        }

        .comparison-card {
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius-element);
            border: 2px solid transparent;
            transition: all 0.3s;
        }

        .comparison-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .comparison-card h4 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
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

        /* Footer */
        footer {
            background: rgba(0,0,0,0.3);
            padding: 2rem;
            text-align: center;
            color: rgba(255,255,255,0.6);
            margin-top: 4rem;
            border-top: 1px solid rgba(255,255,255,0.1);
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
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .layout-wrapper {
                grid-template-columns: 1fr;
            }

            .sidebar {
                display: none;
            }

            .main-content {
                padding: 2rem 1.5rem;
            }

            h1 {
                font-size: 2rem;
            }

            .card {
                padding: 1.5rem;
            }

            .simulator-controls {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .topology-grid {
                grid-template-columns: 1fr;
            }

            .replication-line {
                display: none;
            }
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        pre::-webkit-scrollbar {
            height: 6px;
        }

        /* Queue Animation */
        .queue-item {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            margin: 0.25rem 0;
            font-size: 0.8rem;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        /* Replication Log */
        .replication-log {
            background: var(--code-bg);
            border-radius: var(--radius-element);
            padding: 1rem;
            max-height: 300px;
            overflow-y: auto;
            font-family: 'Fira Code', monospace;
            font-size: 0.8rem;
            color: #e2e8f0;
        }

        .log-entry {
            padding: 0.25rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .log-entry.success { color: var(--success); }
        .log-entry.warning { color: var(--warning); }
        .log-entry.error { color: var(--danger); }
        .log-entry.info { color: var(--info); }
    </style>
</head>
<body>
    <!-- Barra de Progresso -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <span>✅</span>
        <span id="toastMessage">Código copiado!</span>
    </div>

    <div class="layout-wrapper">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="logo">
                <span>Distributed</span>Systems
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#intro" class="nav-link active">Introdução</a></li>
                <li class="nav-item"><a href="#replicacao" class="nav-link">Replicação Master-Slave</a></li>
                <li class="nav-item"><a href="#docker" class="nav-link">Setup com Docker</a></li>
                <li class="nav-item"><a href="#rabbitmq" class="nav-link">RabbitMQ + Banco</a></li>
                <li class="nav-item"><a href="#implementacao" class="nav-link">Implementação</a></li>
                <li class="nav-item"><a href="#simulador" class="nav-link">Simulador</a></li>
                <li class="nav-item"><a href="#desafio" class="nav-link">Desafio Prático</a></li>
                <li class="nav-item"><a href="#resumo" class="nav-link">Resumo Final</a></li>
            </ul>
            <div style="margin-top: auto; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1); font-size: 0.8rem; color: rgba(255,255,255,0.5);">
                Aula 05 • Database Replication
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Replicação de Banco de Dados com Filas e Docker</h1>
                <p class="subtitle">Arquitetura Master-Slave com 1 Master + 3 Slaves usando MySQL, RabbitMQ e Docker</p>
            </header>

            <!-- Seção 1: Introdução -->
            <section id="intro">
                <div class="card">
                    <h2>🚀 Introdução</h2>
                    <p>Nesta aula, vamos evoluir nosso sistema distribuído para incluir <strong>replicação de banco de dados</strong>. Você aprenderá a configurar um cluster MySQL com 1 Master e 3 Slaves, orquestrado via Docker e sincronizado através de filas RabbitMQ.</p>

                    <div class="info-box database">
                        <span class="info-icon">🗄️</span>
                        <div>
                            <strong>Cenário Real:</strong> Esta arquitetura é usada por grandes empresas como Facebook, Twitter e Uber para garantir alta disponibilidade e escalabilidade de leituras em seus bancos de dados.
                        </div>
                    </div>

                    <h3>O que você vai aprender:</h3>
                    <ul>
                        <li>Configurar replicação MySQL Master-Slave com Docker</li>
                        <li>Entender os tipos de replicação (Statement, Row, Mixed)</li>
                        <li>Usar RabbitMQ para queuear operações de escrita</li>
                        <li>Implementar leitura escalável em múltiplos slaves</li>
                        <li>Gerenciar consistência eventual vs. forte</li>
                        <li>Monitorar lag de replicação e health checks</li>
                    </ul>

                    <div class="info-box warning">
                        <span class="info-icon">💡</span>
                        <div>
                            <strong>XAMPP vs Docker:</strong> Para este projeto, <strong>recomendamos usar Docker</strong>. O XAMPP é ótimo para desenvolvimento local simples, mas Docker oferece isolamento, reprodutibilidade e facilidade para criar múltiplas instâncias de banco de dados.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 2: Replicação -->
            <section id="replicacao">
                <div class="card">
                    <h2>📚 Replicação Master-Slave</h2>
                    
                    <div class="topology-container">
                        <div class="replication-line"></div>
                        <div class="topology-grid">
                            <div class="db-node master" id="masterNode">
                                <div class="db-icon">👑</div>
                                <div class="db-label">MySQL Master</div>
                                <div class="db-status">Porta: 3306</div>
                                <div class="db-status">Escrita + Leitura</div>
                            </div>
                            <div class="db-node slave" id="slave1Node">
                                <div class="db-icon">📋</div>
                                <div class="db-label">Slave 1</div>
                                <div class="db-status">Porta: 3307</div>
                                <div class="db-status">Somente Leitura</div>
                            </div>
                            <div class="db-node slave" id="slave2Node">
                                <div class="db-icon">📋</div>
                                <div class="db-label">Slave 2</div>
                                <div class="db-status">Porta: 3308</div>
                                <div class="db-status">Somente Leitura</div>
                            </div>
                            <div class="db-node slave" id="slave3Node">
                                <div class="db-icon">📋</div>
                                <div class="db-label">Slave 3</div>
                                <div class="db-status">Porta: 3309</div>
                                <div class="db-status">Somente Leitura</div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs-container">
                        <div class="tabs-header">
                            <button class="tab-btn active" onclick="openTab(event, 'conceito')">Conceito</button>
                            <button class="tab-btn" onclick="openTab(event, 'tipos')">Tipos de Replicação</button>
                            <button class="tab-btn" onclick="openTab(event, 'vantagens')">Vantagens</button>
                        </div>

                        <div id="conceito" class="tab-content active">
                            <h3>Como Funciona a Replicação</h3>
                            <ol style="margin-left: 1.5rem;">
                                <li><strong>Master</strong> recebe todas as operações de escrita (INSERT, UPDATE, DELETE)</li>
                                <li>Master grava as mudanças no <strong>Binary Log (binlog)</strong></li>
                                <li><strong>Slaves</strong> se conectam ao Master e leem o binlog</li>
                                <li>Slaves aplicam as mudanças localmente (SQL Thread)</li>
                                <li>Leituras podem ser distribuídas entre todos os slaves</li>
                            </ol>

                            <div class="info-box info">
                                <span class="info-icon">🔄</span>
                                <div>
                                    <strong>Consistência Eventual:</strong> Existe um pequeno atraso (lag) entre a escrita no Master e a replicação nos Slaves. Para a maioria das aplicações, esse lag é de milissegundos.
                                </div>
                            </div>
                        </div>

                        <div id="tipos" class="tab-content">
                            <h3>Tipos de Replicação MySQL</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Descrição</th>
                                        <th>Uso Recomendado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>STATEMENT</strong></td>
                                        <td>Replica a query SQL completa</td>
                                        <td>Compatibilidade legada</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ROW</strong></td>
                                        <td>Replica as mudanças de linha</td>
                                        <td>✅ Produção (mais seguro)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>MIXED</strong></td>
                                        <td>Usa STATEMENT ou ROW automaticamente</td>
                                        <td>Padrão do MySQL 5.7+</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="vantagens" class="tab-content">
                            <h3>Vantagens da Arquitetura</h3>
                            <div class="comparison-grid">
                                <div class="comparison-card" style="border-color: var(--success);">
                                    <h4 style="color: var(--success);">⚡ Performance de Leitura</h4>
                                    <p style="font-size: 0.9rem;">Distribua leituras entre 3 slaves, triplicando a capacidade de queries SELECT.</p>
                                </div>
                                <div class="comparison-card" style="border-color: var(--info);">
                                    <h4 style="color: var(--info);">🛡️ Alta Disponibilidade</h4>
                                    <p style="font-size: 0.9rem;">Se um slave cair, os outros continuam servindo leituras sem impacto.</p>
                                </div>
                                <div class="comparison-card" style="border-color: var(--warning);">
                                    <h4 style="color: var(--warning);">📊 Backups sem Impacto</h4>
                                    <p style="font-size: 0.9rem;">Faça backups em um slave sem afetar a performance do Master.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 3: Docker Setup -->
            <section id="docker">
                <div class="card">
                    <h2>🐳 Setup com Docker</h2>
                    <p>Vamos criar toda a infraestrutura usando Docker Compose. Isso garante que todos os containers se comuniquem corretamente em uma rede isolada.</p>

                    <div class="info-box success">
                        <span class="info-icon">✅</span>
                        <div>
                            <strong>Por que Docker?</strong> Com Docker, você sobe 4 containers de banco de dados com um único comando. Sem conflitos de porta, sem instalação complexa, fácil de destruir e recriar.
                        </div>
                    </div>

                    <h3>docker-compose.yml Completo</h3>
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
      - ./scripts/init_slave.sql:/docker-entrypoint-initdb.d/init.sql
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
      - ./scripts/init_slave.sql:/docker-entrypoint-initdb.d/init.sql
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
      - ./scripts/init_slave.sql:/docker-entrypoint-initdb.d/init.sql
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

                    <div class="collapsible">
                        <div class="collapsible-header" onclick="toggleCollapsible(this)">
                            <span>📋 Scripts de Inicialização SQL</span>
                            <span class="collapsible-icon">▼</span>
                        </div>
                        <div class="collapsible-content">
                            <h4>init_master.sql</h4>
                            <div class="code-container">
                                <pre><code><span class="com">-- Criar usuário de replicação</span>
CREATE USER <span class="str">'repl'</span>@<span class="str">'%'</span> IDENTIFIED BY <span class="str">'replpassword'</span>;
GRANT REPLICATION SLAVE <span class="kw">ON</span> *.* <span class="kw">TO</span> <span class="str">'repl'</span>@<span class="str">'%'</span>;
FLUSH PRIVILEGES;

<span class="com">-- Criar tabela de exemplo</span>
USE appdb;
CREATE TABLE <span class="kw">IF NOT EXISTS</span> users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);</code></pre>
                            </div>

                            <h4>init_slave.sql</h4>
                            <div class="code-container">
                                <pre><code><span class="com">-- Configurar replicação (executado após container iniciar)</span>
<span class="com">-- Nota: Isso será configurado via script Python após startup</span>
CHANGE MASTER TO
    MASTER_HOST=<span class="str">'mysql_master'</span>,
    MASTER_USER=<span class="str">'repl'</span>,
    MASTER_PASSWORD=<span class="str">'replpassword'</span>,
    MASTER_AUTO_POSITION=1;

START SLAVE;</code></pre>
                            </div>
                        </div>
                    </div>

                    <h3>Comandos para Iniciar</h3>
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">Terminal - Iniciar Tudo</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="com"># Criar estrutura de diretórios</span>
mkdir -p scripts

<span class="com"># Iniciar todos os containers</span>
docker-compose up -d

<span class="com"># Verificar status</span>
docker-compose ps

<span class="com"># Ver logs do Master</span>
docker logs -f mysql_master</code></pre>
                    </div>
                </div>
            </section>

            <!-- Seção 4: RabbitMQ + Banco -->
            <section id="rabbitmq">
                <div class="card">
                    <h2>🔄 RabbitMQ + Banco de Dados</h2>
                    <p>Agora vamos integrar o RabbitMQ para queuear operações de escrita. Isso garante que nenhuma escrita seja perdida e permite processamento assíncrono.</p>

                    <div class="info-box database">
                        <span class="info-icon">🎯</span>
                        <div>
                            <strong>Padrão Write-Behind:</strong> As escritas vão primeiro para a fila, depois são persistidas no banco. Isso protege contra picos de tráfego e falhas temporárias do banco.
                        </div>
                    </div>

                    <h3>Arquitetura de Filas</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Fila</th>
                                <th>Tipo</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>db_writes</code></td>
                                <td>Durable</td>
                                <td>Operações de escrita (INSERT, UPDATE, DELETE)</td>
                            </tr>
                            <tr>
                                <td><code>db_reads</code></td>
                                <td>Round-Robin</td>
                                <td>Requests de leitura distribuídos entre slaves</td>
                            </tr>
                            <tr>
                                <td><code>db_dead_letter</code></td>
                                <td>DLQ</td>
                                <td>Operações que falharam após 3 retries</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Producer de Escritas (db_producer.py)</h3>
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">db_producer.py</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="kw">import</span> pika
<span class="kw">import</span> json
<span class="kw">import</span> uuid

<span class="kw">class</span> <span class="cls">DatabaseProducer</span>:
    <span class="kw">def</span> <span class="func">__init__</span>(self):
        self.connection = pika.BlockingConnection(
            pika.ConnectionParameters(host=<span class="str">'localhost'</span>)
        )
        self.channel = self.connection.channel()
        
        <span class="com"># Declarar fila de escritas</span>
        self.channel.queue_declare(
            queue=<span class="str">'db_writes'</span>, 
            durable=<span class="kw">True</span>,
            arguments={
                <span class="str">'x-dead-letter-exchange'</span>: <span class="str">''</span>,
                <span class="str">'x-dead-letter-routing-key'</span>: <span class="str">'db_dead_letter'</span>,
                <span class="str">'x-message-ttl'</span>: <span class="num">60000</span>
            }
        )
        
        <span class="com"># Declarar DLQ</span>
        self.channel.queue_declare(queue=<span class="str">'db_dead_letter'</span>, durable=<span class="kw">True</span>)

    <span class="kw">def</span> <span class="func">queue_write</span>(self, operation, table, data):
        <span class="str">"""
        Enfileira uma operação de escrita no banco.
        """</span>
        message = {
            <span class="str">'id'</span>: str(uuid.uuid4()),
            <span class="str">'operation'</span>: operation,  <span class="com"># INSERT, UPDATE, DELETE</span>
            <span class="str">'table'</span>: table,
            <span class="str">'data'</span>: data,
            <span class="str">'timestamp'</span>: time.time()
        }
        
        self.channel.basic_publish(
            exchange=<span class="str">''</span>,
            routing_key=<span class="str">'db_writes'</span>,
            body=json.dumps(message),
            properties=pika.BasicProperties(delivery_mode=<span class="num">2</span>)
        )
        
        print(<span class="str">f"✅ [{message['id']}] {operation} enfileirado para {table}"</span>)
        <span class="kw">return</span> message[<span class="str">'id'</span>]

    <span class="kw">def</span> <span class="func">close</span>(self):
        self.connection.close()

<span class="com"># Exemplo de uso</span>
<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    producer = DatabaseProducer()
    
    <span class="com"># Enfileirar INSERT</span>
    producer.queue_write(
        operation=<span class="str">'INSERT'</span>,
        table=<span class="str">'users'</span>,
        data={<span class="str">'name'</span>: <span class="str">'João'</span>, <span class="str">'email'</span>: <span class="str">'joao@email.com'</span>}
    )
    
    producer.close()</code></pre>
                    </div>

                    <h3>Consumer de Escritas (db_writer.py)</h3>
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">db_writer.py</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="kw">import</span> pika
<span class="kw">import</span> json
<span class="kw">import</span> mysql.connector
<span class="kw">import</span> time

<span class="kw">class</span> <span class="cls">DatabaseWriter</span>:
    <span class="kw">def</span> <span class="func">__init__</span>(self):
        self.connection = pika.BlockingConnection(
            pika.ConnectionParameters(host=<span class="str">'localhost'</span>)
        )
        self.channel = self.connection.channel()
        
        <span class="com"># Conexão com MySQL Master</span>
        self.db_connection = mysql.connector.connect(
            host=<span class="str">'localhost'</span>,
            port=<span class="num">3306</span>,
            user=<span class="str">'appuser'</span>,
            password=<span class="str">'apppassword'</span>,
            database=<span class="str">'appdb'</span>
        )
        self.cursor = self.db_connection.cursor()

    <span class="kw">def</span> <span class="func">process_message</span>(self, ch, method, properties, body):
        <span class="kw">try</span>:
            message = json.loads(body.decode(<span class="str">'utf-8'</span>))
            print(<span class="str">f"📝 Processando: {message['operation']} em {message['table']}"</span>)
            
            <span class="com"># Executar operação no Master</span>
            <span class="kw">if</span> message[<span class="str">'operation'</span>] == <span class="str">'INSERT'</span>:
                columns = <span class="str">', '</span>.join(message[<span class="str">'data'</span>].keys())
                placeholders = <span class="str">', '</span>.join([<span class="str">'%s'</span>] * len(message[<span class="str">'data'</span>]))
                values = tuple(message[<span class="str">'data'</span>].values())
                
                query = <span class="str">f"INSERT INTO {message['table']} ({columns}) VALUES ({placeholders})"</span>
                self.cursor.execute(query, values)
                self.db_connection.commit()
                
            <span class="kw">elif</span> message[<span class="str">'operation'</span>] == <span class="str">'UPDATE'</span>:
                <span class="com"># Lógica de UPDATE...</span>
                pass
                
            <span class="kw">elif</span> message[<span class="str">'operation'</span>] == <span class="str">'DELETE'</span>:
                <span class="com"># Lógica de DELETE...</span>
                pass
            
            <span class="com"># ACK após sucesso</span>
            ch.basic_ack(delivery_tag=method.delivery_tag)
            print(<span class="str">f"✅ {message['id']} processado com sucesso"</span>)
            
        <span class="kw">except</span> Exception <span class="kw">as</span> e:
            print(<span class="str">f"❌ Erro: {e}"</span>)
            <span class="com"># Nack com requeue para retry</span>
            ch.basic_nack(delivery_tag=method.delivery_tag, requeue=<span class="kw">True</span>)

    <span class="kw">def</span> <span class="func">start</span>(self):
        self.channel.basic_qos(prefetch_count=<span class="num">1</span>)
        self.channel.basic_consume(
            queue=<span class="str">'db_writes'</span>,
            on_message_callback=self.process_message
        )
        print(<span class="str">"🎯 Database Writer iniciado. Aguardando escritas..."</span>)
        self.channel.start_consuming()

<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    writer = DatabaseWriter()
    writer.start()</code></pre>
                    </div>
                </div>
            </section>

            <!-- Seção 5: Implementação -->
            <section id="implementacao">
                <div class="card">
                    <h2>💻 Implementação Completa</h2>
                    <p>Aqui está o código completo para gerenciar a replicação e o balanceamento de leituras entre os slaves.</p>

                    <h3>Database Router (db_router.py)</h3>
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">db_router.py - Router de Conexões</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="kw">import</span> mysql.connector
<span class="kw">import</span> random
<span class="kw">import</span> time

<span class="kw">class</span> <span class="cls">DatabaseRouter</span>:
    <span class="str">"""
    Gerencia conexões com Master e Slaves.
    Distribui leituras entre slaves usando Round-Robin.
    """</span>
    
    <span class="kw">def</span> <span class="func">__init__</span>(self):
        self.master_config = {
            <span class="str">'host'</span>: <span class="str">'localhost'</span>,
            <span class="str">'port'</span>: <span class="num">3306</span>,
            <span class="str">'user'</span>: <span class="str">'appuser'</span>,
            <span class="str">'password'</span>: <span class="str">'apppassword'</span>,
            <span class="str">'database'</span>: <span class="str">'appdb'</span>
        }
        
        self.slaves_config = [
            {<span class="str">'host'</span>: <span class="str">'localhost'</span>, <span class="str">'port'</span>: <span class="num">3307</span>},
            {<span class="str">'host'</span>: <span class="str">'localhost'</span>, <span class="str">'port'</span>: <span class="num">3308</span>},
            {<span class="str">'host'</span>: <span class="str">'localhost'</span>, <span class="str">'port'</span>: <span class="num">3309</span>}
        ]
        
        self.current_slave_index = <span class="num">0</span>
        self.master_connection = <span class="kw">None</span>

    <span class="kw">def</span> <span class="func">get_master_connection</span>(self):
        <span class="str">"""Retorna conexão com o Master (para escritas)."""</span>
        <span class="kw">if</span> self.master_connection <span class="kw">is None</span> <span class="kw">or not</span> self.master_connection.is_connected():
            self.master_connection = mysql.connector.connect(**self.master_config)
        <span class="kw">return</span> self.master_connection

    <span class="kw">def</span> <span class="func">get_slave_connection</span>(self):
        <span class="str">"""Retorna conexão com um Slave (para leituras) - Round Robin."""</span>
        slave_config = self.slaves_config[self.current_slave_index].copy()
        slave_config.update({
            <span class="str">'user'</span>: self.master_config[<span class="str">'user'</span>],
            <span class="str">'password'</span>: self.master_config[<span class="str">'password'</span>],
            <span class="str">'database'</span>: self.master_config[<span class="str">'database'</span>]
        })
        
        <span class="com"># Round Robin para próximo slave</span>
        self.current_slave_index = (self.current_slave_index + <span class="num">1</span>) % len(self.slaves_config)
        
        <span class="kw">return</span> mysql.connector.connect(**slave_config)

    <span class="kw">def</span> <span class="func">execute_write</span>(self, query, params=<span class="kw">None</span>):
        <span class="str">"""Executa escrita no Master."""</span>
        conn = self.get_master_connection()
        cursor = conn.cursor()
        cursor.execute(query, params <span class="kw">or</span> ())
        conn.commit()
        <span class="kw">return</span> cursor.lastrowid

    <span class="kw">def</span> <span class="func">execute_read</span>(self, query, params=<span class="kw">None</span>):
        <span class="str">"""Executa leitura em um Slave (balanceado)."""</span>
        conn = self.get_slave_connection()
        cursor = conn.cursor(dictionary=<span class="kw">True</span>)
        cursor.execute(query, params <span class="kw">or</span> ())
        result = cursor.fetchall()
        cursor.close()
        conn.close()
        <span class="kw">return</span> result

    <span class="kw">def</span> <span class="func">check_replication_lag</span>(self):
        <span class="str">"""Verifica o lag de replicação em todos os slaves."""</span>
        lags = {}
        <span class="kw">for</span> i, slave <span class="kw">in</span> enumerate(self.slaves_config):
            <span class="kw">try</span>:
                conn = mysql.connector.connect(
                    host=slave[<span class="str">'host'</span>],
                    port=slave[<span class="str">'port'</span>],
                    user=<span class="str">'root'</span>,
                    password=<span class="str">'rootpassword'</span>
                )
                cursor = conn.cursor()
                cursor.execute(<span class="str">"SHOW SLAVE STATUS"</span>)
                status = cursor.fetchone()
                <span class="kw">if</span> status:
                    lags[slave[<span class="str">'port'</span>]] = status[<span class="num">10</span>]  <span class="com"># Seconds_Behind_Master</span>
                conn.close()
            <span class="kw">except</span> Exception <span class="kw">as</span> e:
                lags[slave[<span class="str">'port'</span>]] = <span class="str">f"Erro: {e}"</span>
        <span class="kw">return</span> lags

    <span class="kw">def</span> <span class="func">close</span>(self):
        <span class="kw">if</span> self.master_connection:
            self.master_connection.close()

<span class="com"># Exemplo de uso</span>
<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    router = DatabaseRouter()
    
    <span class="com"># Escrita no Master</span>
    <span class="kw">print</span>(<span class="str">"📝 Inserindo usuário no Master..."</span>)
    user_id = router.execute_write(
        <span class="str">"INSERT INTO users (name, email) VALUES (%s, %s)"</span>,
        (<span class="str">'Maria'</span>, <span class="str">'maria@email.com'</span>)
    )
    <span class="kw">print</span>(<span class="str">f"✅ Usuário inserido com ID: {user_id}"</span>)
    
    <span class="com"># Leitura distribuída nos Slaves</span>
    <span class="kw">print</span>(<span class="str">"\n📖 Lendo usuários dos Slaves..."</span>)
    <span class="kw">for</span> i <span class="kw">in</span> range(<span class="num">3</span>):
        users = router.execute_read(<span class="str">"SELECT * FROM users"</span>)
        <span class="kw">print</span>(<span class="str">f"Slave {i+1}: {len(users)} usuários encontrados"</span>)
    
    <span class="com"># Verificar lag de replicação</span>
    <span class="kw">print</span>(<span class="str">"\n📊 Lag de Replicação:"</span>)
    lags = router.check_replication_lag()
    <span class="kw">for</span> port, lag <span class="kw">in</span> lags.items():
        <span class="kw">print</span>(<span class="str">f"  Porta {port}: {lag} segundos"</span>)
    
    router.close()</code></pre>
                    </div>

                    <div class="info-box warning">
                        <span class="info-icon">⚠️</span>
                        <div>
                            <strong>Configurar Replicação Manualmente:</strong> Após iniciar os containers, você precisa configurar a replicação. Execute estes comandos no container do Master para obter a posição do binlog, depois configure cada slave.
                        </div>
                    </div>

                    <div class="collapsible">
                        <div class="collapsible-header" onclick="toggleCollapsible(this)">
                            <span>📋 Script de Configuração de Replicação</span>
                            <span class="collapsible-icon">▼</span>
                        </div>
                        <div class="collapsible-content">
                            <div class="code-container">
                                <pre><code><span class="com">#!/bin/bash - setup_replication.sh</span>

<span class="com"># Obter posição do binlog do Master</span>
MASTER_STATUS=$(docker exec mysql_master mysql -uroot -prootpassword -e \
    "SHOW MASTER STATUS\G" | grep -E "File|Position")

<span class="kw">echo</span> "Status do Master:"
<span class="kw">echo</span> "$MASTER_STATUS"

<span class="com"># Configurar cada Slave</span>
<span class="kw">for</span> i <span class="kw">in</span> 1 2 3; <span class="kw">do</span>
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
<span class="kw">echo</span> "\n📊 Status da Replicação:"
<span class="kw">for</span> i <span class="kw">in</span> 1 2 3; <span class="kw">do</span>
    <span class="kw">echo</span> "=== Slave $i ==="
    docker exec mysql_slave$i mysql -uroot -prootpassword -e <span class="str">"SHOW SLAVE STATUS\G"</span> | \
        grep -E "Slave_IO_Running|Slave_SQL_Running|Seconds_Behind_Master"
<span class="kw">done</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 6: Simulador -->
            <section id="simulador">
                <div class="card simulator-card" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: white;">
                    <h2>🎮 Simulador de Replicação</h2>
                    <p>Simule operações de escrita no Master e observe a replicação nos Slaves em tempo real.</p>
                    
                    <div class="simulator-controls">
                        <button class="btn btn-primary" onclick="simulateWrite()">
                            <span>📝</span> Inserir Dados
                        </button>
                        <button class="btn btn-success" onclick="simulateRead()">
                            <span>📖</span> Ler dos Slaves
                        </button>
                        <button class="btn btn-secondary" onclick="checkReplicationLag()">
                            <span>📊</span> Verificar Lag
                        </button>
                        <button class="btn btn-secondary" onclick="clearLog()">
                            <span>🗑️</span> Limpar Log
                        </button>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">📋 Fila de Escritas</h4>
                            <div id="writeQueue" style="background: rgba(0,0,0,0.3); padding: 1rem; border-radius: 8px; min-height: 100px;">
                                <div style="color: rgba(255,255,255,0.5); text-align: center;">Fila vazia</div>
                            </div>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">📊 Status dos Slaves</h4>
                            <div id="slaveStatus" style="background: rgba(0,0,0,0.3); padding: 1rem; border-radius: 8px; min-height: 100px;">
                                <div class="db-node slave" style="margin-bottom: 0.5rem; padding: 0.5rem;">
                                    <strong>Slave 1 (3307)</strong>
                                    <div style="font-size: 0.8rem; color: var(--success);">● Online | Lag: 0s</div>
                                </div>
                                <div class="db-node slave" style="margin-bottom: 0.5rem; padding: 0.5rem;">
                                    <strong>Slave 2 (3308)</strong>
                                    <div style="font-size: 0.8rem; color: var(--success);">● Online | Lag: 0s</div>
                                </div>
                                <div class="db-node slave" style="padding: 0.5rem;">
                                    <strong>Slave 3 (3309)</strong>
                                    <div style="font-size: 0.8rem; color: var(--success);">● Online | Lag: 0s</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 style="margin-bottom: 0.5rem;">📜 Log de Operações</h4>
                    <div class="replication-log" id="replicationLog">
                        <div class="log-entry info">[SISTEMA] Simulador iniciado. Aguardando operações...</div>
                    </div>
                </div>
            </section>

            <!-- Seção 7: Desafio -->
            <section id="desafio">
                <div class="card">
                    <h2>🏆 Desafio Prático</h2>
                    <p>Coloque em prática o que aprendeu com estes desafios progressivos:</p>

                    <div class="comparison-grid">
                        <div style="background: rgba(99, 102, 241, 0.05); padding: 1.5rem; border-radius: var(--radius-element); border: 1px solid var(--primary);">
                            <h3 style="margin-top: 0; color: var(--primary);">Nível 1: Setup Básico</h3>
                            <p style="font-size: 0.9rem;">Suba todos os containers com docker-compose e configure a replicação manualmente. Verifique com SHOW SLAVE STATUS que todos estão sincronizados.</p>
                            <span class="badge badge-primary">Iniciante</span>
                            <span class="badge badge-warning" style="margin-top: 0.5rem;">~30 min</span>
                        </div>

                        <div style="background: rgba(245, 158, 11, 0.05); padding: 1.5rem; border-radius: var(--radius-element); border: 1px solid var(--warning);">
                            <h3 style="margin-top: 0; color: var(--warning);">Nível 2: Fila de Escritas</h3>
                            <p style="font-size: 0.9rem;">Implemente o producer e consumer para queuear escritas. Teste enviando 100 INSERTs e verifique se todos foram replicados.</p>
                            <span class="badge badge-warning">Intermediário</span>
                            <span class="badge badge-danger" style="margin-top: 0.5rem;">~60 min</span>
                        </div>

                        <div style="background: rgba(16, 185, 129, 0.05); padding: 1.5rem; border-radius: var(--radius-element); border: 1px solid var(--success);">
                            <h3 style="margin-top: 0; color: var(--success);">Nível 3: Failover Automático</h3>
                            <p style="font-size: 0.9rem;">Simule a queda do Master (docker stop mysql_master). Implemente lógica para promover um Slave a Master automaticamente.</p>
                            <span class="badge badge-success">Avançado</span>
                            <span class="badge badge-danger" style="margin-top: 0.5rem;">~90 min</span>
                        </div>
                    </div>

                    <div class="info-box info" style="margin-top: 1.5rem;">
                        <span class="info-icon">💡</span>
                        <div>
                            <p><strong>Dica:</strong> Para o Nível 3, pesquise sobre <code>MHA (MySQL Master High Availability)</code> e <code>Orchestrator</code> do GitHub. São ferramentas usadas em produção para failover automático.</P>
                            <p><strong>Passo a Passo detalhado:</strong><a href="Detalhes_Atividade3.php" target="_blank">Clique Aqui💡</a></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 8: Resumo -->
            <section id="resumo">
                <div class="card">
                    <h2>📝 Resumo Final</h2>
                    <p>Parabéns por completar esta aula! Vamos recapitular os pontos principais:</p>
                    
                    <div class="comparison-grid">
                        <div class="comparison-card" style="border-color: var(--success);">
                            <h4 style="color: var(--success);">✅ Replicação Master-Slave</h4>
                            <p style="font-size: 0.9rem;">1 Master para escritas + 3 Slaves para leituras distribuídas. Use binlog e GTID para replicação confiável.</p>
                        </div>
                        <div class="comparison-card" style="border-color: var(--info);">
                            <h4 style="color: var(--info);">✅ Docker Compose</h4>
                            <p style="font-size: 0.9rem;">Orquestre 5 containers (RabbitMQ + 4 MySQL) com um único comando. Redes isoladas e volumes persistentes.</p>
                        </div>
                        <div class="comparison-card" style="border-color: var(--warning);">
                            <h4 style="color: var(--warning);">✅ RabbitMQ + DB</h4>
                            <p style="font-size: 0.9rem;">Queueie escritas para proteger contra picos de tráfego e garantir entrega mesmo com falhas temporárias.</p>
                        </div>
                    </div>

                    <div class="collapsible" style="margin-top: 1.5rem;">
                        <div class="collapsible-header" onclick="toggleCollapsible(this)">
                            <span>📚 Glossário de Termos</span>
                            <span class="collapsible-icon">▼</span>
                        </div>
                        <div class="collapsible-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 600;">Binlog</td>
                                        <td>Binary Log - Registro de todas as mudanças no Master</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">GTID</td>
                                        <td>Global Transaction ID - Identificador único para cada transação</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Replication Lag</td>
                                        <td>Atraso entre escrita no Master e aplicação no Slave</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Read-Only</td>
                                        <td>Modo que previne escritas acidentais em Slaves</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Failover</td>
                                        <td>Processo de promover um Slave a Master em caso de falha</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Write-Behind</td>
                                        <td>Padrão onde escritas são queueadas antes de persistir</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="info-box database" style="margin-top: 2rem;">
                        <span class="info-icon">🔜</span>
                        <div>
                            <strong>Próxima Aula:</strong> Vamos explorar <strong>Desenvolvimento Paralelo</strong>.
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <p>© 2024 Distributed Systems Course • Desenvolvido para fins educacionais</p>
                <p style="font-size: 0.8rem; margin-top: 0.5rem; opacity: 0.7;">Use o conhecimento com responsabilidade.</p>
            </footer>
        </main>
    </div>

    <script>
        // --- Barra de Progresso ---
        window.onscroll = function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById("progressBar").style.width = scrolled + "%";
            updateActiveNav();
            revealSections();
        };

        // --- Navegação Ativa ---
        function updateActiveNav() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (scrollY >= sectionTop - 200) current = section.getAttribute('id');
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) link.classList.add('active');
            });
        }

        // --- Animação ao Scroll ---
        function revealSections() {
            document.querySelectorAll('section').forEach(section => {
                if (section.getBoundingClientRect().top < window.innerHeight - 100) {
                    section.classList.add('visible');
                }
            });
        }

        // --- Tabs ---
        function openTab(evt, tabName) {
            document.getElementsByClassName("tab-content").forEach(tc => tc.classList.remove("active"));
            document.getElementsByClassName("tab-btn").forEach(tb => tb.classList.remove("active"));
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        // --- Collapsible ---
        function toggleCollapsible(header) {
            header.parentElement.classList.toggle('active');
        }

        // --- Copy Code ---
        function copyCode(button) {
            const pre = button.parentElement.nextElementSibling;
            navigator.clipboard.writeText(pre.innerText).then(() => {
                showToast("✅ Código copiado!");
                button.innerText = "Copiado!";
                button.style.background = "var(--success)";
                setTimeout(() => {
                    button.innerText = "Copiar";
                    button.style.background = "";
                }, 2000);
            });
        }

        // --- Toast ---
        function showToast(message) {
            const toast = document.getElementById('toast');
            document.getElementById('toastMessage').innerText = message;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 3000);
        }

        // --- Simulador ---
        let recordCount = 5;
        let operationId = 1;

        function addLog(message, type = 'info') {
            const log = document.getElementById('replicationLog');
            const entry = document.createElement('div');
            entry.className = `log-entry ${type}`;
            const time = new Date().toLocaleTimeString();
            entry.innerText = `[${time}] ${message}`;
            log.appendChild(entry);
            log.scrollTop = log.scrollHeight;
        }

        function simulateWrite() {
            const queue = document.getElementById('writeQueue');
            if (queue.querySelector('div').innerText === 'Fila vazia') queue.innerHTML = '';
            
            const id = operationId++;
            const item = document.createElement('div');
            item.className = 'queue-item';
            item.innerText = `#${id} INSERT users (pending)`;
            queue.appendChild(item);
            
            addLog(`📝 Operação #${id} enfileirada: INSERT users`, 'info');
            
            setTimeout(() => {
                item.innerText = `#${id} INSERT users (processing)`;
                item.style.background = 'linear-gradient(135deg, #f59e0b, #d97706)';
                addLog(`⚙️ Processando operação #${id} no Master...`, 'warning');
                
                setTimeout(() => {
                    item.innerText = `#${id} INSERT users (replicated)`;
                    item.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                    recordCount++;
                    addLog(`✅ Operação #${id} replicada para 3 slaves`, 'success');
                    updateSlaveStatus();
                }, 1500);
            }, 1000);
        }

        function simulateRead() {
            addLog(`📖 Lendo ${recordCount} registros dos Slaves (Round-Robin)`, 'info');
            for (let i = 1; i <= 3; i++) {
                setTimeout(() => {
                    addLog(`  → Slave ${i} retornou ${recordCount} registros`, 'success');
                }, i * 300);
            }
        }

        function checkReplicationLag() {
            addLog('📊 Verificando lag de replicação...', 'info');
            const lags = [0, 0, 0]; // Simulado
            setTimeout(() => {
                lags.forEach((lag, i) => {
                    const status = lag === 0 ? 'success' : 'warning';
                    addLog(`  → Slave ${i+1} (330${6+i}): ${lag}s behind master`, status);
                });
            }, 500);
        }

        function updateSlaveStatus() {
            const statusDiv = document.getElementById('slaveStatus');
            statusDiv.innerHTML = '';
            for (let i = 1; i <= 3; i++) {
                const slave = document.createElement('div');
                slave.className = 'db-node slave';
                slave.style.marginBottom = '0.5rem';
                slave.style.padding = '0.5rem';
                slave.innerHTML = `
                    <strong>Slave ${i} (330${6+i})</strong>
                    <div style="font-size: 0.8rem; color: var(--success);">● Online | Lag: 0s | Records: ${recordCount}</div>
                `;
                statusDiv.appendChild(slave);
            }
        }

        function clearLog() {
            document.getElementById('replicationLog').innerHTML = 
                '<div class="log-entry info">[SISTEMA] Log limpo. Aguardando operações...</div>';
            addLog('Log limpo pelo usuário', 'info');
        }

        // --- Smooth Scroll ---
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // --- Init ---
        revealSections();
    </script>
</body>
</html>


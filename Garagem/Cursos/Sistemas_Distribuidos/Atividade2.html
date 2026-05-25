<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula: Arquitetura Assíncrona com Filas de Mensagens</title>
    
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

        /* Imagem Ilustrativa */
        .hero-image {
            width: 100%;
            max-width: 800px;
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-xl);
            margin: 2rem auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .hero-image:hover {
            transform: scale(1.02);
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
            font-family: 'Fira Code', monospace;
            font-size: 0.85rem;
            line-height: 1.7;
            color: rgb(7 151 254);
        }

        /* Syntax Highlighting Simples */
        .kw { color: #c678dd; } /* Keyword */
        .str { color: #98c379; } /* String */
        .num { color: #d19a66; } /* Number */
        .com { color: #5c6370; font-style: italic; } /* Comment */
        .func { color: #61afef; } /* Function */
        .cls { color: #e5c07b; } /* Class */
        .decorator { color: #e06c75; } /* Decorator */

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

        /* Tabelas */
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

        /* Interatividade: Simulador de Fila */
        .simulator-card {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .simulator-controls {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

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

        .btn-secondary {
            background: rgba(255,255,255,0.1);
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.2);
        }

        .btn-success {
            background: var(--success);
            color: white;
        }

        .btn-success:hover {
            background: #059669;
        }

        .queue-visual {
            display: flex;
            gap: 0.5rem;
            min-height: 80px;
            padding: 1rem;
            background: rgba(0,0,0,0.3);
            border-radius: var(--radius-element);
            align-items: center;
            overflow-x: auto;
            margin-bottom: 1.5rem;
        }

        .message-packet {
            min-width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 600;
            animation: popIn 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        .workers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
        }

        .worker-node {
            background: rgba(255,255,255,0.05);
            padding: 1rem;
            border-radius: var(--radius-element);
            text-align: center;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s;
        }

        .worker-node.processing {
            border-color: var(--success);
            background: rgba(16, 185, 129, 0.1);
            transform: scale(1.05);
        }

        .worker-status {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.6);
            margin-top: 0.5rem;
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

        .comparison-card.rabbitmq {
            border-color: var(--success);
        }

        .comparison-card.kafka {
            border-color: var(--warning);
        }

        .comparison-card h4 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .comparison-card ul {
            list-style: none;
            margin-left: 0;
        }

        .comparison-card li {
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .comparison-card li:last-child {
            border-bottom: none;
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

        /* Animations */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes popIn {
            from { transform: scale(0); }
            to { transform: scale(1); }
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

            pre {
                max-height: 300px;
            }

            .tabs-header {
                overflow-x: auto;
            }
        }

        /* Scrollbar customizada */
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

        /* Code block specific scrollbar */
        pre::-webkit-scrollbar {
            height: 6px;
        }

        /* Toast Notification */
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

        /* Collapsible sections */
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
                <li class="nav-item"><a href="#conceitos" class="nav-link">Conceitos Fundamentais</a></li>
                <li class="nav-item"><a href="#arquitetura" class="nav-link">Arquitetura do Sistema</a></li>
                <li class="nav-item"><a href="#comparativo" class="nav-link">RabbitMQ vs Kafka</a></li>
                <li class="nav-item"><a href="#implementacao" class="nav-link">Implementação Prática</a></li>
                <li class="nav-item"><a href="#consumer-completo" class="nav-link">Consumer Completo</a></li>
                <li class="nav-item"><a href="#simulador" class="nav-link">Simulador Interativo</a></li>
                <li class="nav-item"><a href="#desafio" class="nav-link">Desafio Prático</a></li>
                <li class="nav-item"><a href="#resumo" class="nav-link">Resumo Final</a></li>
            </ul>
            <div style="margin-top: auto; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1); font-size: 0.8rem; color: rgba(255,255,255,0.5);">
                Aula 04 • Message Queues
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Arquitetura Assíncrona com Filas de Mensagens</h1>
                <p class="subtitle">Do acoplamento temporal ao desacoplamento total com RabbitMQ e Kafka</p>
            </header>

            <!-- Seção 1: Introdução -->
            <section id="intro">
                <div class="card">
                    <h2>🚀 Introdução</h2>
                    <p>Bem-vindo à próxima evolução do nosso sistema distribuído. Até agora, utilizamos <strong>Sockets TCP</strong> para comunicação síncrona, onde o Worker e o Master precisavam estar online simultaneamente. Hoje, introduziremos o conceito de <strong>Message Broker</strong>.</p>
                    
                    <img src="https://image.qwenlm.ai/public_source/ce4836a2-df88-43c8-9109-f85b46c96859/1910def09-8878-4569-853d-2398053f4364.png" alt="Ilustração isométrica de sistema de filas distribuído com broker central e nós conectados" class="hero-image">

                    <div class="info-box info">
                        <span class="info-icon">💡</span>
                        <div>
                            <strong>Objetivo da Aula:</strong> Compreender como as filas de mensagens resolvem problemas de acoplamento temporal, garantem entrega confiável e permitem escalabilidade horizontal automática.
                        </div>
                    </div>

                    <h3>O que você vai aprender:</h3>
                    <ul>
                        <li>Diferenças entre comunicação síncrona e assíncrona</li>
                        <li>Padrões de arquitetura Publisher/Subscriber e Point-to-Point</li>
                        <li>Comparativo técnico entre RabbitMQ e Apache Kafka</li>
                        <li>Implementação prática de Producer e Consumer em Python</li>
                        <li>Conceitos de ACK, Persistência e QoS (Quality of Service)</li>
                        <li>Tratamento de erros e boas práticas de produção</li>
                    </ul>
                </div>
            </section>

            <!-- Seção 2: Conceitos -->
            <section id="conceitos">
                <div class="card">
                    <h2>📚 Conceitos Fundamentais</h2>
                    
                    <div class="tabs-container">
                        <div class="tabs-header">
                            <button class="tab-btn active" onclick="openTab(event, 'sync')">Comunicação Síncrona</button>
                            <button class="tab-btn" onclick="openTab(event, 'async')">Comunicação Assíncrona</button>
                            <button class="tab-btn" onclick="openTab(event, 'acks')">ACKs e Persistência</button>
                        </div>

                        <div id="sync" class="tab-content active">
                            <h3>O Problema do Acoplamento Temporal</h3>
                            <p>Na comunicação via TCP/HTTP tradicional, existe uma dependência direta de tempo e disponibilidade:</p>
                            <ul>
                                <li><strong>Acoplamento Temporal:</strong> Produtor e Consumidor devem estar ativos no mesmo instante.</li>
                                <li><strong>Fragilidade:</strong> Se o consumidor cair, o produtor recebe erro imediato ou trava aguardando timeout.</li>
                                <li><strong>Picos de Carga:</strong> Um aumento súbito de requisições pode derrubar o servidor se ele não tiver capacidade instantânea.</li>
                            </ul>
                            <div class="info-box warning">
                                <span class="info-icon">⚠️</span>
                                <div>Em sistemas síncronos, a latência é a soma de todos os tempos de processamento da cadeia. Se um serviço lento estiver no meio, todo o sistema fica lento.</div>
                            </div>
                        </div>

                        <div id="async" class="tab-content">
                            <h3>A Solução: Message Broker</h3>
                            <p>O Message Broker atua como um intermediário inteligente que desacopla os serviços:</p>
                            <ul>
                                <li><strong>Desacoplamento Temporal:</strong> O Producer envia a mensagem e segue sua vida. O Consumer processa quando estiver disponível (segundos ou horas depois).</li>
                                <li><strong>Buffering:</strong> A fila acumula mensagens durante picos de tráfego, protegendo os consumidores.</li>
                                <li><strong>Entrega Confiável:</strong> Mensagens só são removidas após confirmação explícita (ACK) de processamento.</li>
                            </ul>
                            <div class="info-box success">
                                <span class="info-icon">✅</span>
                                <div>Com filas, a disponibilidade do sistema aumenta drasticamente. Serviços podem ser reiniciados, atualizados ou falhar sem perder dados críticos.</div>
                            </div>
                        </div>

                        <div id="acks" class="tab-content">
                            <h3>ACKs e Persistência de Mensagens</h3>
                            <p>Dois conceitos cruciais para entrega confiável:</p>
                            
                            <div class="comparison-grid">
                                <div class="comparison-card rabbitmq">
                                    <h4 style="color: var(--success);">📬 ACK (Acknowledgement)</h4>
                                    <ul>
                                        <li>✅ Confirmação explícita de processamento</li>
                                        <li>✅ Mensagem só é removida após ACK</li>
                                        <li>✅ Se consumer falhar, mensagem volta para fila</li>
                                        <li>✅ Previne perda de dados em falhas</li>
                                    </ul>
                                </div>
                                <div class="comparison-card kafka">
                                    <h4 style="color: var(--warning);">💾 Persistência</h4>
                                    <ul>
                                        <li>✅ Mensagens salvas em disco</li>
                                        <li>✅ Sobrevivem a restarts do broker</li>
                                        <li>✅ delivery_mode=2 no RabbitMQ</li>
                                        <li>✅ Durable queues = True</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="info-box info">
                                <span class="info-icon">🔧</span>
                                <div>
                                    <strong>Configuração Recomendada:</strong> Sempre use <b>auto_ack=False</b> e <code>durable=True</code> em produção. Isso garante que nenhuma mensagem seja perdida mesmo em caso de falhas do consumer ou do broker.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 3: Arquitetura -->
            <section id="arquitetura">
                <div class="card">
                    <h2>🏗️ Arquitetura do Novo Sistema</h2>
                    <p>Vamos substituir a conexão direta TCP por uma fila chamada <code>task_queue</code>. O fluxo de dados muda radicalmente:</p>

                    <div class="comparison-grid">
                        <div class="comparison-card" style="border-color: var(--primary);">
                            <h4 style="color: var(--primary);">1️⃣ Worker (Producer)</h4>
                            <ul>
                                <li>Conecta no RabbitMQ</li>
                                <li>Publica mensagem JSON na fila</li>
                                <li>Termina imediatamente após envio</li>
                                <li>Não espera resposta (fire-and-forget)</li>
                            </ul>
                        </div>
                        <div class="comparison-card" style="border-color: var(--secondary);">
                            <h4 style="color: var(--secondary);">2️⃣ RabbitMQ (Broker)</h4>
                            <ul>
                                <li>Recebe e persiste em disco</li>
                                <li>Mantém mensagens na fila</li>
                                <li>Distribui via Round Robin</li>
                                <li>Gerencia ACKs dos consumers</li>
                            </ul>
                        </div>
                        <div class="comparison-card" style="border-color: var(--success);">
                            <h4 style="color: var(--success);">3️⃣ Master (Consumer)</h4>
                            <ul>
                                <li>Fica em loop infinito</li>
                                <li>Recebe mensagens via push</li>
                                <li>Processa e envia ACK</li>
                                <li>Só recebe nova msg após ACK</li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-box info">
                        <span class="info-icon">🔄</span>
                        <div><strong>Padrão Work Queue:</strong> Este modelo é ideal para tarefas pesadas que não precisam ser executadas instantaneamente, como processamento de vídeo, envio de emails ou, no nosso caso, análise de grandes volumes de texto.</div>
                    </div>
                </div>
            </section>

            <!-- Seção 4: Comparativo -->
            <section id="comparativo">
                <div class="card">
                    <h2>⚖️ RabbitMQ vs Kafka</h2>
                    <p>Existem diversos brokers no mercado. Os dois mais populares são RabbitMQ e Apache Kafka. Entender quando usar cada um é crucial.</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th>RabbitMQ</th>
                                <th>Apache Kafka</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Modelo</strong></td>
                                <td>Fila Inteligente (Smart Broker)</td>
                                <td>Log de Commit Distribuído</td>
                            </tr>
                            <tr>
                                <td><strong>Entrega</strong></td>
                                <td>Push (Empurra para o consumer)</td>
                                <td>Pull (Consumer busca quando quer)</td>
                            </tr>
                            <tr>
                                <td><strong>Latência</strong></td>
                                <td>Muito Baixa (&lt; 1ms)</td>
                                <td>Baixa (depende do batch)</td>
                            </tr>
                            <tr>
                                <td><strong>Throughput</strong></td>
                                <td>Alto (dezenas de milhares/s)</td>
                                <td>Extremo (milhões/s)</td>
                            </tr>
                            <tr>
                                <td><strong>Persistência</strong></td>
                                <td>Opcional (RAM por padrão)</td>
                                <td>Persistente em disco por padrão</td>
                            </tr>
                            <tr>
                                <td><strong>Caso de Uso Ideal</strong></td>
                                <td>RPC, Tarefas discretas, Work Queues</td>
                                <td>Streaming de dados, Logs, Event Sourcing</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="info-box success">
                        <span class="info-icon">🎯</span>
                        <div><strong>Nossa Escolha:</strong> Para este projeto de contagem de palavras (tarefas discretas e independentes), o <strong>RabbitMQ</strong> é a escolha arquitetural mais adequada devido à sua simplicidade e modelo de filas inteligente.</div>
                    </div>
                </div>
            </section>

            <!-- Seção 5: Implementação -->
            <section id="implementacao">
                <div class="card">
                    <h2>💻 Implementação Prática</h2>
                    <p>Para rodar os exemplos, você precisará do RabbitMQ. A forma mais fácil é via Docker:</p>
                    
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">Terminal - Subir RabbitMQ</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="kw">docker run</span> -d --hostname rabbit-mq --name some-rabbit \
  -p 5672:5672 -p 15672:15672 \
  rabbitmq:3-management</code></pre>
                    </div>

                    <p>Instale a biblioteca Pika para Python:</p>
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">Terminal - Instalar Dependência</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code>pip install pika</code></pre>
                    </div>

                    <h3>1. O Producer (worker_producer.py)</h3>
                    <p>O Worker envia a tarefa e esquece (<em>fire-and-forget</em>).</p>
                    
                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">Python - Producer</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="kw">import</span> pika
<span class="kw">import</span> json
<span class="kw">import</span> uuid

<span class="com"># Configurações</span>
RABBIT_HOST = <span class="str">'localhost'</span>
QUEUE_NAME = <span class="str">'task_queue'</span>

<span class="com"># Conexão com o Broker</span>
connection = pika.BlockingConnection(
    pika.ConnectionParameters(host=RABBIT_HOST)
)
channel = connection.channel()

<span class="com"># Declarar fila durável (sobrevive a restarts)</span>
channel.queue_declare(queue=QUEUE_NAME, durable=<span class="kw">True</span>)

<span class="com"># Criar payload da mensagem</span>
task_id = str(uuid.uuid4())
message = {
    <span class="str">"id"</span>: task_id,
    <span class="str">"texto"</span>: <span class="str">"Olá mundo"</span>
}

<span class="com"># Publicar com persistência (delivery_mode=2)</span>
channel.basic_publish(
    exchange=<span class="str">''</span>,
    routing_key=QUEUE_NAME,
    body=json.dumps(message),
    properties=pika.BasicProperties(delivery_mode=<span class="num">2</span>)
)

print(<span class="str">f"✅ Tarefa {task_id} enviada!"</span>)
connection.close()</code></pre>
                    </div>

                    <div class="info-box warning">
                        <span class="info-icon">⚠️</span>
                        <div>
                            <strong>Importante:</strong> O código acima é uma versão simplificada. Para produção, você deve adicionar tratamento de erros, reconexão automática e credenciais de autenticação. Veja a versão completa na próxima seção.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 6: Consumer Completo -->
            <section id="consumer-completo">
                <div class="card">
                    <h2>🔧 Consumer Completo (Produção)</h2>
                    <p>Esta é a versão <strong>completa e pronta para produção</strong> do <code>master_consumer.py</code>, com tratamento adequado de erros, reconexão e boas práticas.</p>

                    <div class="info-box success">
                        <span class="info-icon">✅</span>
                        <div>
                            <strong>Versão Melhorada:</strong> Inclui try/except específico, basic_nack para rejeição, heartbeat, blocked_connection_timeout, e limpeza garantida de recursos no finally.
                        </div>
                    </div>

                    <div class="code-container">
                        <div class="code-header">
                            <span class="code-title">master_consumer.py - Versão Completa</span>
                            <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                        </div>
                        <pre><code><span class="kw">import</span> pika
<span class="kw">import</span> json
<span class="kw">import</span> time
<span class="kw">import</span> sys

<span class="com"># Configurações do RabbitMQ</span>
RABBIT_HOST = <span class="str">'localhost'</span>
RABBIT_USER = <span class="str">'guest'</span>
RABBIT_PASS = <span class="str">'guest'</span>
QUEUE_NAME = <span class="str">'task_queue'</span>

<span class="kw">def</span> <span class="func">processar_texto</span>(texto):
    <span class="str">"""
    Lógica de negócio: conta linhas, palavras e bytes.
    """</span>
    <span class="kw">if not</span> texto:
        <span class="kw">return</span> <span class="str">"Texto vazio."</span>
    
    linhas = texto.count(<span class="str">'\n'</span>)
    <span class="kw">if</span> texto <span class="kw">and not</span> texto.endswith(<span class="str">'\n'</span>):
        linhas += <span class="num">1</span>
    palavras = len(texto.split())
    bytes_count = len(texto.encode(<span class="str">'utf-8'</span>))
    
    <span class="kw">return</span> {
        <span class="str">"linhas"</span>: linhas,
        <span class="str">"palavras"</span>: palavras,
        <span class="str">"bytes"</span>: bytes_count
    }

<span class="kw">def</span> <span class="func">callback</span>(ch, method, properties, body):
    <span class="str">"""
    Função chamada automaticamente quando uma mensagem chega.
    """</span>
    task_id = <span class="kw">None</span>
    <span class="kw">try</span>:
        <span class="com"># Parse do JSON</span>
        data = json.loads(body.decode(<span class="str">'utf-8'</span>))
        task_id = data.get(<span class="str">'id'</span>, <span class="str">'desconhecida'</span>)
        texto = data.get(<span class="str">'texto'</span>, <span class="str">''</span>)
        
        print(<span class="str">f"✅ [{task_id}] Tarefa recebida. Processando..."</span>)
        
        <span class="com"># Simula tempo de processamento (remova em produção)</span>
        time.sleep(<span class="num">1</span>)
        
        <span class="com"># Executa a lógica de negócio</span>
        resultado = processar_texto(texto)
        
        print(<span class="str">f"✅ [{task_id}] Tarefa concluída!"</span>)
        print(<span class="str">f"   📊 Linhas: {resultado['linhas']}, Palavras: {resultado['palavras']}, Bytes: {resultado['bytes']}"</span>)
        
        <span class="com"># ACK: Confirma processamento bem-sucedido (remove da fila)</span>
        ch.basic_ack(delivery_tag=method.delivery_tag)
        
    <span class="kw">except</span> json.JSONDecodeError <span class="kw">as</span> e:
        print(<span class="str">f"❌ [{task_id}] Erro ao decodificar JSON: {e}"</span>)
        <span class="com"># Rejeita sem requeue - mensagem problemática vai para DLQ</span>
        ch.basic_nack(delivery_tag=method.delivery_tag, requeue=<span class="kw">False</span>)
        
    <span class="kw">except</span> Exception <span class="kw">as</span> e:
        print(<span class="str">f"❌ [{task_id}] Erro inesperado: {e}"</span>)
        <span class="com"># Rejeita E requeue - tenta processar novamente depois</span>
        ch.basic_nack(delivery_tag=method.delivery_tag, requeue=<span class="kw">True</span>)

<span class="kw">def</span> <span class="func">main</span>():
    connection = <span class="kw">None</span>
    <span class="kw">try</span>:
        <span class="com"># Credenciais de autenticação</span>
        credentials = pika.PlainCredentials(RABBIT_USER, RABBIT_PASS)
        
        <span class="com"># Estabelece conexão com o broker</span>
        print(<span class="str">f"🔌 Conectando ao RabbitMQ em {RABBIT_HOST}..."</span>)
        connection = pika.BlockingConnection(
            pika.ConnectionParameters(
                host=RABBIT_HOST,
                credentials=credentials,
                heartbeat=<span class="num">600</span>,  <span class="com"># Mantém conexão viva</span>
                blocked_connection_timeout=<span class="num">300</span>
            )
        )
        channel = connection.channel()
        
        <span class="com"># Declara fila durável (sobrevive a restarts do RabbitMQ)</span>
        channel.queue_declare(queue=QUEUE_NAME, durable=<span class="kw">True</span>)
        print(<span class="str">f"✅ Fila '{QUEUE_NAME}' verificada/criada"</span>)
        
        <span class="com"># Fair Dispatch: Envia apenas 1 mensagem por vez para cada worker</span>
        <span class="com"># Isso previne que um worker lento fique sobrecarregado</span>
        channel.basic_qos(prefetch_count=<span class="num">1</span>)
        print(<span class="str">"⚖️ Fair Dispatch ativado (prefetch_count=1)"</span>)
        
        <span class="com"># Inscreve o consumer na fila</span>
        channel.basic_consume(
            queue=QUEUE_NAME,
            on_message_callback=callback,
            auto_ack=<span class="kw">False</span>  <span class="com"># IMPORTANTE: ACK manual!</span>
        )
        
        print(<span class="str">f"\n🎯 Master Consumer iniciado!"</span>)
        print(<span class="str">f"📥 Aguardando mensagens na fila '{QUEUE_NAME}'..."</span>)
        print(<span class="str">"💡 Pressione CTRL+C para sair\n"</span>)
        
        <span class="com"># Loop infinito de consumo</span>
        channel.start_consuming()
        
    <span class="kw">except</span> pika.exceptions.AMQPConnectionError <span class="kw">as</span> e:
        print(<span class="str">f"❌ Erro de conexão com RabbitMQ: {e}"</span>)
        print(<span class="str">"💡 Verifique se o RabbitMQ está rodando (docker ps)"</span>)
        sys.exit(<span class="num">1</span>)
        
    <span class="kw">except</span> KeyboardInterrupt:
        print(<span class="str">"\n⏹️  Interrompido pelo usuário"</span>)
        
    <span class="kw">finally</span>:
        <span class="com"># Limpeza garantida de recursos</span>
        <span class="kw">if</span> connection <span class="kw">and</span> connection.is_open:
            print(<span class="str">"🔌 Fechando conexão com RabbitMQ..."</span>)
            connection.close()
            print(<span class="str">"✅ Conexão fechada"</span>)

<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    main()</code></pre>
                    </div>

                    <div class="collapsible">
                        <div class="collapsible-header" onclick="toggleCollapsible(this)">
                            <span>📋 O que foi Implementado nesta Versão</span>
                            <span class="collapsible-icon">▼</span>
                        </div>
                        <div class="collapsible-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Recurso</th>
                                        <th>Descrição</th>
                                        <th>Benefício</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>auto_ack=False</code></td>
                                        <td>ACK manual obrigatório</td>
                                        <td>Previne perda de mensagens</td>
                                    </tr>
                                    <tr>
                                        <td><code>basic_nack</code></td>
                                        <td>Rejeição com opção de requeue</td>
                                        <td>Tratamento inteligente de erros</td>
                                    </tr>
                                    <tr>
                                        <td><code>heartbeat=600</code></td>
                                        <td>Keep-alive da conexão</td>
                                        <td>Previne timeout de conexão ociosa</td>
                                    </tr>
                                    <tr>
                                        <td><code>blocked_connection_timeout</code></td>
                                        <td>Timeout para conexões bloqueadas</td>
                                        <td>Previne travamento do consumer</td>
                                    </tr>
                                    <tr>
                                        <td><code>try/except/finally</code></td>
                                        <td>Tratamento estruturado de erros</td>
                                        <td>Limpeza garantida de recursos</td>
                                    </tr>
                                    <tr>
                                        <td><code>prefetch_count=1</code></td>
                                        <td>Fair Dispatch</td>
                                        <td>Balanceamento justo entre workers</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="info-box info">
                        <span class="info-icon">🐳</span>
                        <div>
                            <strong>Acesse o Dashboard:</strong> Após subir o container, acesse http://localhost:15672 com login <b>guest</b> e senha <b>guest</b>. Lá você poderá monitorar filas, consumers e throughput em tempo real.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 7: Simulador -->
            <section id="simulador">
                <div class="card simulator-card">
                    <h2>🎮 Simulador de Fila Interativo</h2>
                    <p>Visualize como o RabbitMQ distribui tarefas entre os consumidores usando o padrão <strong>Fair Dispatch</strong>.</p>
                    
                    <div class="simulator-controls">
                        <button class="btn btn-primary" onclick="addMessage()">
                            <span>➕</span> Adicionar Tarefa
                        </button>
                        <button class="btn btn-success" onclick="addMultipleMessages()">
                            <span>📦</span> +10 Tarefas
                        </button>
                        <button class="btn btn-secondary" onclick="toggleProcessing()">
                            <span>⏯️</span> <span id="btnText">Pausar Processamento</span>
                        </button>
                        <button class="btn btn-secondary" onclick="resetSimulator()">
                            <span>🔄</span> Resetar
                        </button>
                    </div>

                    <div style="margin-bottom: 1rem; font-size: 0.9rem; color: rgba(255,255,255,0.7);">
                        Fila de Mensagens (Task Queue): <span id="queueCount" style="color: var(--secondary); font-weight: bold;">0</span> mensagens aguardando
                    </div>

                    <div class="queue-visual" id="queueVisual">
                        <div style="color: rgba(255,255,255,0.3); width: 100%; text-align: center;" id="emptyQueueMsg">
                            Fila vazia. Adicione tarefas!
                        </div>
                    </div>

                    <div style="margin-bottom: 1rem; font-size: 0.9rem; color: rgba(255,255,255,0.7);">
                        Workers Ativos (Consumers) - Fair Dispatch Ativado
                    </div>

                    <div class="workers-grid">
                        <div class="worker-node" id="worker1">
                            <div style="font-weight: bold;">Master 1</div>
                            <div class="worker-status" id="status1">Aguardando...</div>
                        </div>
                        <div class="worker-node" id="worker2">
                            <div style="font-weight: bold;">Master 2</div>
                            <div class="worker-status" id="status2">Aguardando...</div>
                        </div>
                        <div class="worker-node" id="worker3">
                            <div style="font-weight: bold;">Master 3</div>
                            <div class="worker-status" id="status3">Aguardando...</div>
                        </div>
                    </div>

                    <div class="info-box info" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.3); color: rgba(255,255,255,0.8); margin-top: 1.5rem;">
                        <span class="info-icon">ℹ️</span>
                        <div>
                            <strong>Como funciona:</strong> Clique em "Adicionar Tarefa" para enviar mensagens à fila. Os workers pegarão as tarefas automaticamente. Note que se um worker estiver "Processando", ele não receberá nova tarefa até terminar (graças ao <code>prefetch_count=1</code>).
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 8: Desafio -->
            <section id="desafio">
                <div class="card">
                    <h2>🏆 Desafio Prático</h2>
                    <p>Agora é sua vez de colocar a mão na massa. Implemente as seguintes melhorias no código fornecido:</p>

                    <div class="comparison-grid">
                        <div style="background: rgba(99, 102, 241, 0.05); padding: 1.5rem; border-radius: var(--radius-element); border: 1px solid var(--primary);">
                            <h3 style="margin-top: 0; color: var(--primary);">Nível 1: RPC sobre Filas</h3>
                            <p style="font-size: 0.9rem;">Atualmente o Worker envia e esquece. Modifique o código para que o Worker crie uma fila de resposta exclusiva, envie o nome dessa fila no payload e aguarde a resposta do Master antes de fechar.</p>
                            <span class="badge badge-primary">Intermediário</span>
                            <span class="badge badge-warning" style="margin-top: 0.5rem;">~30 min</span>
                        </div>

                        <div style="background: rgba(245, 158, 11, 0.05); padding: 1.5rem; border-radius: var(--radius-element); border: 1px solid var(--warning);">
                            <h3 style="margin-top: 0; color: var(--warning);">Nível 2: Dead Letter Queue</h3>
                            <p style="font-size: 0.9rem;">Simule falhas aleatórias no Consumer. Configure o RabbitMQ para que mensagens que falharem 3 vezes sejam movidas para uma fila especial de "Mortos" (DLQ) em vez de reprocessadas infinitamente.</p>
                            <span class="badge badge-warning">Avançado</span>
                            <span class="badge badge-danger" style="margin-top: 0.5rem;">~60 min</span>
                        </div>

                        <div style="background: rgba(16, 185, 129, 0.05); padding: 1.5rem; border-radius: var(--radius-element); border: 1px solid var(--success);">
                            <h3 style="margin-top: 0; color: var(--success);">Nível 3: Multiple Consumers</h3>
                            <p style="font-size: 0.9rem;">Rode 5 instâncias do consumer simultaneamente. Envie 100 tarefas e observe o balanceamento. Meça o tempo total de processamento e compare com uma única instância.</p>
                            <span class="badge badge-success">Prático</span>
                            <span class="badge badge-primary" style="margin-top: 0.5rem;">~20 min</span>
                        </div>
                    </div>

                    <div class="info-box warning" style="margin-top: 1.5rem;">
                        <span class="info-icon">💡</span>
                        <div>
                            <strong>Dica:</strong> Para o Nível 2, pesquise sobre <code>x-dead-letter-exchange</code> e <code>x-message-ttl</code> nas configurações de fila do RabbitMQ. Isso permite criar políticas automáticas de retry com backoff exponencial.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção 9: Resumo -->
            <section id="resumo">
                <div class="card">
                    <h2>📝 Resumo Final</h2>
                    <p>Parabéns por completar esta aula! Vamos recapitular os pontos principais:</p>
                    
                    <div class="comparison-grid">
                        <div class="comparison-card" style="border-color: var(--success);">
                            <h4 style="color: var(--success);">✅ Desacoplamento</h4>
                            <p style="font-size: 0.9rem;">Filas permitem que produtores e consumidores operem em tempos diferentes, aumentando a resiliência do sistema.</p>
                        </div>
                        <div class="comparison-card" style="border-color: var(--success);">
                            <h4 style="color: var(--success);">✅ Confiabilidade</h4>
                            <p style="font-size: 0.9rem;">Com persistência e ACKs, garantimos que nenhuma tarefa seja perdida, mesmo em caso de falhas.</p>
                        </div>
                        <div class="comparison-card" style="border-color: var(--success);">
                            <h4 style="color: var(--success);">✅ Escalabilidade</h4>
                            <p style="font-size: 0.9rem;">Podemos adicionar quantos Consumers quisermos para aumentar a velocidade de processamento sem mudar o código do Producer.</p>
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
                                        <td style="font-weight: 600;">Producer</td>
                                        <td>Aplicação que envia mensagens para uma fila</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Consumer</td>
                                        <td>Aplicação que recebe e processa mensagens da fila</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Broker</td>
                                        <td>Servidor que gerencia as filas (ex: RabbitMQ)</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">ACK</td>
                                        <td>Confirmação de que uma mensagem foi processada</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Queue</td>
                                        <td>Estrutura FIFO que armazena mensagens</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">Exchange</td>
                                        <td>Componente que roteia mensagens para filas</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 600;">DLQ</td>
                                        <td>Dead Letter Queue - fila para mensagens com erro</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="info-box info" style="margin-top: 2rem;">
                        <span class="info-icon">🔜</span>
                        <div>
                            <p><strong>Próxima Aula:</strong> vamos evoluir <strong> nosso sistema distribuído para incluir</strong>. <strong>replicação de banco de dados</strong>. Você aprenderá a configurar um cluster MySQL com 1 Master e 3 Slaves, orquestrado via Docker e sincronizado através de filas RabbitMQ.</p>
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
                if (scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        }

        // --- Animação ao Scroll ---
        function revealSections() {
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                if (sectionTop < window.innerHeight - 100) {
                    section.classList.add('visible');
                }
            });
        }

        // --- Tabs System ---
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

        // --- Collapsible Sections ---
        function toggleCollapsible(header) {
            const collapsible = header.parentElement;
            collapsible.classList.toggle('active');
        }

        // --- Copy Code ---
        function copyCode(button) {
            const pre = button.parentElement.nextElementSibling;
            const code = pre.innerText;
            
            navigator.clipboard.writeText(code).then(() => {
                showToast("✅ Código copiado para a área de transferência!");
                
                const originalText = button.innerText;
                button.innerText = "Copiado!";
                button.style.background = "var(--success)";
                button.style.borderColor = "var(--success)";
                
                setTimeout(() => {
                    button.innerText = originalText;
                    button.style.background = "";
                    button.style.borderColor = "";
                }, 2000);
            }).catch(err => {
                showToast("❌ Erro ao copiar");
            });
        }

        // --- Toast Notification ---
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            toastMessage.innerText = message;
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // --- Simulador de Fila ---
        let messageQueue = [];
        let isProcessing = true;
        let messageIdCounter = 1;
        const workers = [
            { id: 1, busy: false, element: document.getElementById('worker1'), status: document.getElementById('status1') },
            { id: 2, busy: false, element: document.getElementById('worker2'), status: document.getElementById('status2') },
            { id: 3, busy: false, element: document.getElementById('worker3'), status: document.getElementById('status3') }
        ];

        function addMessage() {
            const id = messageIdCounter++;
            messageQueue.push(id);
            renderQueue();
            processQueue();
        }

        function addMultipleMessages() {
            for (let i = 0; i < 10; i++) {
                const id = messageIdCounter++;
                messageQueue.push(id);
            }
            renderQueue();
            processQueue();
        }

        function renderQueue() {
            const queueVisual = document.getElementById('queueVisual');
            const emptyMsg = document.getElementById('emptyQueueMsg');
            const countSpan = document.getElementById('queueCount');
            
            countSpan.innerText = messageQueue.length;
            
            if (messageQueue.length === 0) {
                queueVisual.innerHTML = '';
                queueVisual.appendChild(emptyMsg);
                emptyMsg.style.display = 'block';
            } else {
                if (emptyMsg) emptyMsg.style.display = 'none';
                queueVisual.innerHTML = '';
                messageQueue.forEach(msgId => {
                    const packet = document.createElement('div');
                    packet.className = 'message-packet';
                    packet.innerText = `#${msgId}`;
                    queueVisual.appendChild(packet);
                });
            }
        }

        function toggleProcessing() {
            isProcessing = !isProcessing;
            const btnText = document.getElementById('btnText');
            btnText.innerText = isProcessing ? "Pausar Processamento" : "Retomar Processamento";
            if (isProcessing) processQueue();
        }

        function resetSimulator() {
            messageQueue = [];
            workers.forEach(w => {
                w.busy = false;
                w.element.classList.remove('processing');
                w.status.innerText = "Aguardando...";
                w.status.style.color = "rgba(255,255,255,0.6)";
            });
            messageIdCounter = 1;
            renderQueue();
        }

        function processQueue() {
            if (!isProcessing) return;

            workers.forEach(worker => {
                if (!worker.busy && messageQueue.length > 0) {
                    const msgId = messageQueue.shift();
                    renderQueue();
                    
                    worker.busy = true;
                    worker.element.classList.add('processing');
                    worker.status.innerText = `Processando #${msgId}...`;
                    worker.status.style.color = "var(--success)";
                    
                    const processingTime = Math.random() * 2000 + 1000;
                    
                    setTimeout(() => {
                        worker.busy = false;
                        worker.element.classList.remove('processing');
                        worker.status.innerText = "Aguardando...";
                        worker.status.style.color = "rgba(255,255,255,0.6)";
                        
                        if (messageQueue.length > 0 && isProcessing) {
                            processQueue();
                        }
                    }, processingTime);
                }
            });
        }

        // Smooth Scroll para links internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Inicializa animações
        revealSections();
    </script>
</body>
</html>


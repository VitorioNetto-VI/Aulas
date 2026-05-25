<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git & GitHub para Startups | Curso Interativo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;
            --info: #3b82f6;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark-bg: #1e1e2e;
            --card-bg: #ffffff;
            --text-dark: #1f2937;
            --text-light: #f9fafb;
            --border-light: rgba(255,255,255,0.3);
            --border-dark: rgba(0,0,0,0.3);
            --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 30%, #f093fb 70%, #f5576c 100%);
            background-attachment: fixed;
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.85) 0%, rgba(118, 75, 162, 0.85) 30%, rgba(240, 147, 251, 0.85) 70%, rgba(245, 87, 108, 0.85) 100%);
            z-index: -2;
        }

        /* Barra de Progresso */
        .progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255,255,255,0.2);
            z-index: 1000;
        }

        .progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--success), var(--info));
            transition: width 0.1s ease;
            box-shadow: 0 0 10px rgba(16, 185, 129, 0.5);
        }

        /* Menu Lateral */
        .sidebar {
            position: fixed;
            left: 0;
            top: 4px;
            height: calc(100vh - 4px);
            width: 280px;
            background: var(--card-bg);
            padding: 2rem 1.5rem;
            overflow-y: auto;
            z-index: 999;
            box-shadow: var(--shadow);
            border-right: 1px solid var(--border-dark);
            transition: var(--transition);
        }

        .sidebar-header {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid var(--primary);
        }

        .sidebar-header h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
            margin-bottom: 0.5rem;
        }

        .sidebar-header p {
            font-size: 0.875rem;
            color: var(--text-dark);
            opacity: 0.8;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--text-dark);
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: var(--transition);
            border: 1px solid transparent;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.05);
        }

        .nav-link:hover,
        .nav-link.active {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text-light);
            border-color: rgba(0,0,0,0.2);
            transform: translateX(4px);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .nav-link .icon {
            margin-right: 0.75rem;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }

        .nav-link.active .icon {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* Conteúdo Principal */
        .main-content {
            margin-left: 280px;
            padding: 2rem;
            min-height: 100vh;
        }

        /* Header */
        header {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-dark);
            animation: slideDown 0.6s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
            text-shadow: 2px 2px 0px rgba(0,0,0,0.1);
            background: linear-gradient(135deg, var(--primary-dark), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        header .subtitle {
            font-size: 1.25rem;
            color: var(--text-dark);
            opacity: 0.9;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.05);
        }

        .meta-info {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text-light);
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            border: 1px solid rgba(0,0,0,0.2);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
        }

        .badge i {
            margin-right: 0.5rem;
        }

        /* Cards de Conteúdo */
        .content-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-dark);
            opacity: 0;
            transform: translateY(30px);
            transition: var(--transition);
        }

        .content-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .content-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-4px);
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 3px solid var(--primary);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        element.style{
            margin: 0.75rem 0;
            background: rgb(0 0 0);
            border-left-color: #d90000;
        }

        .section-title .number {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text-light);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            border: 2px solid rgba(0,0,0,0.2);
        }

        .content-card p {
            margin-bottom: 1rem;
            color: var(--text-dark);
            font-size: 1.05rem;
        }

        .content-card ul {
            margin: 1rem 0 1rem 2rem;
            color: var(--text-dark);
        }

        .content-card li {
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
        }

        /* Info Boxes */
        .info-box {
            padding: 1.25rem 1.5rem;
            border-radius: 12px;
            margin: 1.5rem 0;
            border-left: 4px solid;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .info-box.success {
            background: rgba(16, 185, 129, 0.1);
            border-color: var(--success);
            color: var(--text-dark);
        }

        .info-box.info {
            background: rgba(59, 130, 246, 0.1);
            border-color: var(--info);
            color: var(--text-dark);
        }

        .info-box.warning {
            background: rgba(245, 158, 11, 0.1);
            border-color: var(--warning);
            color: var(--text-dark);
        }

        .info-box.danger {
            background: rgba(239, 68, 68, 0.1);
            border-color: var(--danger);
            color: var(--text-dark);
        }

        .info-box .icon {
            font-size: 1.5rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .info-box.success .icon { color: var(--success); }
        .info-box.info .icon { color: var(--info); }
        .info-box.warning .icon { color: var(--warning); }
        .info-box.danger .icon { color: var(--danger); }

        /* Blocos de Código */
        .code-block {
            background: var(--dark-bg);
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            position: relative;
            border: 1px solid var(--border-light);
            border-left: 4px solid var(--primary);
            overflow-x: auto;
        }

        .code-block pre {
            margin: 0;
            font-family: 'Fira Code', monospace;
            font-size: 0.95rem;
            line-height: 1.5;
            color: #004cff;
            white-space: pre-wrap;
            word-break: break-all;
        }

        .code-block code {
            font-family: 'Fira Code', monospace;
        }

        .code-block .copy-btn {
            position: absolute;
            top: 0.75rem;
            right: 0.75rem;
            background: rgba(255,255,255,0.1);
            border: 1px solid var(--border-light);
            color: var(--text-light);
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.8rem;
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Inter', sans-serif;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.3);
        }

        .code-block .copy-btn:hover {
            background: var(--primary);
            border-color: var(--primary);
            transform: scale(1.05);
        }

        .code-block .copy-btn.copied {
            background: var(--success);
            border-color: var(--success);
        }

        /* Syntax Highlighting */
        .code-block .comment { color: #6a737d; font-style: italic; }
        .code-block .keyword { color: #f97583; font-weight: 600; }
        .code-block .string { color: #9ecbff; }
        .code-block .function { color: #b392f0; }
        .code-block .variable { color: #79b8ff; }
        .code-block .command { color: #85e89d; font-weight: 600; }
        .code-block .flag { color: #ffab70; }
        .code-block .output { color: #c8e1ff; opacity: 0.9; }

        /* Tabs */
        .tabs-container {
            margin: 1.5rem 0;
        }

        .tabs-header {
            display: flex;
            gap: 0.5rem;
            border-bottom: 2px solid var(--border-dark);
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 0.75rem 1.5rem;
            background: transparent;
            border: none;
            border-bottom: 3px solid transparent;
            color: var(--text-dark);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border-radius: 8px 8px 0 0;
            font-size: 1rem;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.05);
        }

        .tab-btn:hover {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-dark);
        }

        .tab-btn.active {
            border-bottom-color: var(--primary);
            color: var(--primary-dark);
            background: rgba(99, 102, 241, 0.15);
        }

        .tab-content {
            display: none;
            padding: 1.5rem;
            background: rgba(255,255,255,0.7);
            border-radius: 0 0 12px 12px;
            border: 1px solid var(--border-dark);
            border-top: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Tabelas */
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-dark);
        }

        .comparison-table th {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text-light);
            padding: 1rem 1.25rem;
            text-align: left;
            font-weight: 700;
            font-size: 1.05rem;
            border: 1px solid rgba(0,0,0,0.2);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
        }

        .comparison-table td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--border-dark);
            color: var(--text-dark);
            font-size: 1rem;
        }

        .comparison-table tr:last-child td {
            border-bottom: none;
        }

        .comparison-table tr:hover {
            background: rgba(99, 102, 241, 0.05);
        }

        /* Imagens */
        .illustration {
            max-width: 800px;
            margin: 2rem auto;
            display: block;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: 3px solid var(--card-bg);
            background: linear-gradient(135deg, rgba(255,255,255,0.9), rgba(255,255,255,0.7));
            padding: 1rem;
        }

        .image-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--info));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-weight: 600;
            font-size: 1.2rem;
            text-align: center;
            padding: 1rem;
            border: 2px solid rgba(0,0,0,0.2);
            text-shadow: 2px 2px 0px rgba(0,0,0,0.2);
        }

        /* Desafio Prático */
        .challenge-box {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15), rgba(59, 130, 246, 0.15));
            border: 2px dashed var(--success);
            border-radius: 16px;
            padding: 2rem;
            margin: 2rem 0;
        }

        .challenge-box h4 {
            color: var(--text-dark);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.3rem;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.05);
        }

        .challenge-box ol {
            margin-left: 1.5rem;
            color: var(--text-dark);
        }

        .challenge-box li {
            margin-bottom: 0.75rem;
            font-size: 1.05rem;
        }

        /* Dicas Expansíveis */
        .expandable-tip {
            border: 1px solid var(--border-dark);
            border-radius: 12px;
            margin: 1rem 0;
            overflow: hidden;
        }

        .expandable-tip summary {
            padding: 1rem 1.5rem;
            background: rgba(99, 102, 241, 0.1);
            cursor: pointer;
            font-weight: 600;
            color: var(--text-dark);
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .expandable-tip summary:hover {
            background: rgba(99, 102, 241, 0.2);
        }

        .expandable-tip summary::after {
            content: '▼';
            transition: transform 0.3s ease;
        }

        .expandable-tip[open] summary::after {
            transform: rotate(180deg);
        }

        .expandable-tip .content {
            padding: 1.5rem;
            background: var(--card-bg);
            color: var(--text-dark);
            border-top: 1px solid var(--border-dark);
        }

        /* Footer */
        footer {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2rem;
            margin-top: 3rem;
            text-align: center;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-dark);
        }

        footer p {
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
        }

        footer .next-steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .step-card {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text-light);
            padding: 1rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            border: 1px solid rgba(0,0,0,0.2);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
            min-width: 200px;
        }

        /* Botões Interativos */
        .interactive-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text-light);
            border: none;
            padding: 0.875rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.05rem;
            cursor: pointer;
            transition: var(--transition);
            margin: 1rem 0;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.4);
            border: 1px solid rgba(0,0,0,0.2);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
        }

        .interactive-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.6);
        }

        .interactive-btn:active {
            transform: translateY(0);
        }

        /* Simulador Interativo */
        .simulator {
            background: var(--dark-bg);
            border-radius: 16px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border: 1px solid var(--border-light);
        }

        .simulator-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--border-light);
        }

        .simulator-title {
            color: var(--text-light);
            font-weight: 600;
            font-size: 1.1rem;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.2);
        }

        .simulator-controls {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .sim-btn {
            background: var(--primary);
            color: var(--text-light);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.2);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
        }

        .sim-btn:hover {
            background: var(--primary-dark);
            transform: scale(1.05);
        }

        .sim-output {
            background: rgba(0,0,0,0.3);
            border-radius: 8px;
            padding: 1rem;
            font-family: 'Fira Code', monospace;
            color: #85e89d;
            font-size: 0.9rem;
            min-height: 100px;
            white-space: pre-wrap;
            border: 1px solid var(--border-light);
        }

        /* Responsividade */
        @media (max-width: 1024px) {
            .sidebar {
                width: 240px;
                padding: 1.5rem 1rem;
            }
            .main-content {
                margin-left: 240px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 280px;
            }
            .sidebar.open {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .mobile-toggle {
                display: block;
                position: fixed;
                top: 1rem;
                left: 1rem;
                z-index: 1001;
                background: var(--card-bg);
                border: 1px solid var(--border-dark);
                border-radius: 12px;
                padding: 0.75rem;
                cursor: pointer;
                box-shadow: var(--shadow);
            }
            header {
                padding: 1.5rem;
            }
            header h1 {
                font-size: 1.75rem;
            }
            .content-card {
                padding: 1.5rem;
            }
            .section-title {
                font-size: 1.5rem;
            }
            .tabs-header {
                flex-direction: column;
            }
            .tab-btn {
                width: 100%;
                text-align: left;
            }
            .meta-info {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .main-content {
                padding: 1rem;
            }
            .content-card {
                padding: 1.25rem;
            }
            .code-block {
                padding: 1rem;
                font-size: 0.85rem;
            }
            .comparison-table {
                font-size: 0.9rem;
            }
            .comparison-table th,
            .comparison-table td {
                padding: 0.75rem;
            }
        }

        /* Utilitários de Texto */
        .text-light-border {
            color: var(--text-light);
            text-shadow: 1px 1px 0px rgba(0,0,0,0.8), -1px -1px 0px rgba(0,0,0,0.8), 1px -1px 0px rgba(0,0,0,0.8), -1px 1px 0px rgba(0,0,0,0.8);
        }

        .text-dark-border {
            color: var(--text-dark);
            text-shadow: 1px 1px 0px rgba(255,255,255,0.8), -1px -1px 0px rgba(255,255,255,0.8), 1px -1px 0px rgba(255,255,255,0.8), -1px 1px 0px rgba(255,255,255,0.8);
        }

        .no-transparency {
            background: var(--card-bg) !important;
        }

        /* Animações de Scroll */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            animation: fadeInUp 0.5s ease forwards;
        }
    </style>
</head>
<body>
    <!-- Barra de Progresso -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Menu Lateral -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3 class="text-dark-border">🚀 Git</h3>
            <p class="text-dark-border">Curso 7h • Nível: Básico-Intermediário</p>
        </div>
        <ul class="nav-menu">
            <a href="#section-intro" class="nav-link active"><li class="nav-item"><span class="icon">🎯</span> Introdução</li></a>
            <a href="#section-setup" class="nav-link"><li class="nav-item"><span class="icon">⚙️</span> Configuração Inicial</li></a>
            <a href="#section-repo" class="nav-link"><li class="nav-item"><span class="icon">📁</span> Repositório Local</li></a>
            <a href="#section-commits" class="nav-link"><li class="nav-item"><span class="icon">✅</span> Commits & Histórico</li></a>
            <a href="#section-remote" class="nav-link"><li class="nav-item"><span class="icon">🌐</span> Repositório Remoto</li></a>
            <a href="#section-workflow" class="nav-link"><li class="nav-item"><span class="icon">🔄</span> Workflow em Equipe</li></a>
            <a href="#section-challenge" class="nav-link"><li class="nav-item"><span class="icon">🏆</span> Desafio Prático</li></a>
            <a href="#section-advanced" class="nav-link"><li class="nav-item"><span class="icon">🔍</span> Aprofundamento</li></a>
            <a href="#section-summary" class="nav-link"><li class="nav-item"><span class="icon">📝</span> Resumo Final</li></a>
        </ul>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <!-- Header -->
        <header id="intro">
            <h1>Git & GitHub</h1>
            <p class="subtitle">Domine o versionamento de código e colabore como uma equipe
            </p>
            
            <div class="meta-info">
                <span class="badge"><i>⏱️</i> Duração: 7 horas</span>
                <span class="badge"><i>📊</i> Nível: Básico → Intermediário</span>
   
              <hr />
                <img src="https://image.qwenlm.ai/public_source/a2d598e2-1477-417c-8e0f-550b310f00a0/133abb0db-c9d9-4ba6-a924-432bcd2dc406.png" alt="Ilustração de equipe colaborando em Git workflow com diagramas de branches e commits" class="illustration" loading="lazy">
             
         
        </header>

        <!-- Seção 1: Introdução -->
        <section class="content-card" id="section-intro">
            <h2 class="section-title"><span class="number">1</span> Introdução: Por que Git para sua Startup?</h2>
            <p><strong>Objetivos de Aprendizado:</strong></p>
            <ul>
                <li>✅ Compreender o valor do versionamento para equipes multidisciplinares</li>
                <li>✅ Diferenciar Git (ferramenta) de GitHub (plataforma de colaboração)</li>
                <li>✅ Identificar casos de uso de Git além do desenvolvimento de software</li>
            </ul>

            <div class="info-box info">
                <span class="icon">💡</span>
                <div>
                    <strong>Para todas as áreas:</strong> Git não é só para programadores! 
                    <br>• <strong>RH:</strong> Versionar políticas e processos internos
                    <br>• <strong>Logística:</strong> Rastrear mudanças em rotas e procedimentos
                    <br>• <strong>Empreendedorismo:</strong> Iterar pitches e planos de negócio
                    <br>• <strong>Sistemas:</strong> Gerenciar código e documentação técnica
                </div>
            </div>

            <p>O Git é um sistema de controle de versão distribuído que permite rastrear alterações em arquivos, coordenar trabalho em equipe e manter um histórico completo de mudanças. Para startups, isso significa: <strong>menos erros, mais colaboração e capacidade de experimentar com segurança</strong>.</p>

            <div class="tabs-container">
                <div class="tabs-header">
                    <button class="tab-btn active" data-tab="git">Git</button>
                    <button class="tab-btn" data-tab="github">GitHub</button>
                    <button class="tab-btn" data-tab="benefits">Benefícios</button>
                </div>
                <div class="tab-content active" id="git">
                    <p><strong>Git:</strong> Ferramenta de linha de comando instalada localmente que gerencia versões de arquivos. Funciona offline e é extremamente rápida para operações locais.</p>
                    <ul>
                        <li>Armazena snapshots do seu projeto</li>
                        <li>Permite criar branches para experimentação</li>
                        <li>Facilita a reversão de mudanças indesejadas</li>
                    </ul>
                </div>
                <div class="tab-content" id="github">
                    <p><strong>GitHub:</strong> Plataforma web que hospeda repositórios Git e adiciona ferramentas de colaboração social.</p>
                    <ul>
                        <li>Repositórios públicos e privados</li>
                        <li>Pull Requests para revisão de código</li>
                        <li>Issues para gerenciamento de tarefas</li>
                        <li>Actions para automação de workflows</li>
                    </ul>
                </div>
                <div class="tab-content" id="benefits">
                    <p><strong>Benefícios para Startups:</strong></p>
                    <ul>
                        <li>🔄 Iteração rápida sem medo de "quebrar" o projeto</li>
                        <li>👥 Colaboração assíncrona entre membros distribuídos</li>
                        <li>📚 Histórico completo para onboarding de novos membros</li>
                        <li>🛡️ Backup distribuído: cada clone é um backup completo</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Seção 2: Configuração Inicial -->
        <section class="content-card" id="section-setup">
            <h2 class="section-title"><span class="number">2</span> Configuração Inicial do Git</h2>
            <p>Antes de começar, configure sua identidade no Git. Essas configurações são globais e aplicadas a todos os seus repositórios.</p>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># 1° Comando: Definir nome de usuário</span>
<span class="command">git</span> <span class="keyword">config</span> <span class="flag">--global</span> user.name <span class="string">"seu_nome_usuario"</span>

<span class="comment"># 2° Comando: Definir e-mail associado</span>
<span class="command">git</span> <span class="keyword">config</span> <span class="flag">--global</span> user.email <span class="string">"exemplo@gmail.com"</span>

<span class="comment"># 3° Comando: Verificar configurações</span>
<span class="command">git</span> <span class="keyword">config</span> <span class="flag">--list</span>

<span class="output"># Saída esperada:
# user.name=seu_nome_usuario
# user.email=exemplo@gmail.com</span></code></pre>
            </div>

            <div class="info-box warning">
                <span class="icon">⚠️</span>
                <div>
                    <strong>Importante:</strong> Use o mesmo e-mail cadastrado no GitHub/GitLab para que seus commits sejam vinculados corretamente ao seu perfil.
                </div>
            </div>

            <!-- Simulador Interativo -->
            <div class="simulator">
                <div class="simulator-header">
                    <span class="simulator-title">🧪 Simulador: Configuração Git</span>
                    <div class="simulator-controls">
                        <button class="sim-btn" onclick="runSim('config')">Executar Config</button>
                        <button class="sim-btn" onclick="runSim('list')">Verificar</button>
                        <button class="sim-btn" onclick="clearSim()">Limpar</button>
                    </div>
                </div>
                <div class="sim-output" id="simOutput">// Clique em "Executar Config" para simular a configuração do Git...</div>
            </div>

            <details class="expandable-tip">
                <summary>💡 Dica: Configuração por Projeto</summary>
                <div class="content">
                    <p>Para configurar usuário/e-mail apenas em um projeto específico (sem afetar outros), omita a flag <code>--global</code>:</p>
                    <div class="code-block" style="margin:1rem 0;">
                        <pre><code><span class="command">cd</span> meu-projeto-startup
<span class="command">git</span> <span class="keyword">config</span> user.name <span class="string">"Nome do Projeto"</span>
<span class="command">git</span> <span class="keyword">config</span> user.email <span class="string">"projeto@startup.com"</span></code></pre>
                    </div>
                </div>
            </details>
        </section>

        <!-- Seção 3: Repositório Local -->
        <section class="content-card" id="section-repo">
            <h2 class="section-title"><span class="number">3</span> Criando seu Primeiro Repositório</h2>
            <p>Um repositório Git é como uma "pasta inteligente" que rastreia todas as alterações nos arquivos. Vamos criar um para nosso projeto de startup fictício: <strong>"EcoLogística"</strong>.</p>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># Criar pasta do projeto</span>
<span class="command">mkdir</span> aula-git-ecologistica

<span class="comment"># Entrar na pasta (Windows)</span>
<span class="command">cd</span> .\aula-git-ecologistica\

<span class="comment"># Para Linux/macOS: cd aula-git-ecologistica</span>

<span class="comment"># Inicializar repositório Git vazio</span>
<span class="command">git</span> <span class="keyword">init</span>

<span class="output"># Saída: Initialized empty Git repository in [...]/.git/</span></code></pre>
            </div>

            <p>Agora, crie manualmente um arquivo <code>README.md</code> dentro da pasta com uma breve descrição do projeto EcoLogística.</p>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># Verificar status do repositório</span>
<span class="command">git</span> <span class="keyword">status</span>

<span class="output"># On branch main
# No commits yet
# Untracked files:
#   README.md</span></code></pre>
            </div>

            <div class="info-box success">
                <span class="icon">✅</span>
                <div>
                    <strong>Arquivo "untracked":</strong> O Git detectou o README.md mas ainda não está monitorando suas alterações. 
                    Precisamos adicioná-lo à <em>staging area</em> (área de preparação).
                </div>
            </div>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Comando</th>
                        <th>Função</th>
                        <th>Quando Usar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>git status</code></td>
                        <td>Mostra estado atual do repositório</td>
                        <td>Sempre que quiser saber o que mudou</td>
                    </tr>
                    <tr>
                        <td><code>git add &lt;arquivo&gt;</code></td>
                        <td>Adiciona arquivo à staging area</td>
                        <td>Antes de fazer commit das alterações</td>
                    </tr>
                    <tr>
                        <td><code>git add .</code></td>
                        <td>Adiciona TODOS os arquivos modificados</td>
                        <td>Quando quer commitar tudo de uma vez</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Seção 4: Commits e Histórico -->
        <section class="content-card" id="section-commits">
            <h2 class="section-title"><span class="number">4</span> Commits: Salvando sua História</h2>
            <p>Um <strong>commit</strong> é como um "save point" no seu projeto. Ele registra um conjunto de alterações com uma mensagem descritiva.</p>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># Adicionar README.md à staging area</span>
<span class="command">git</span> <span class="keyword">add</span> README.md

<span class="comment"># Criar commit com mensagem descritiva</span>
<span class="command">git</span> <span class="keyword">commit</span> <span class="flag">-m</span> <span class="string">"Criei o arquivo Readme.md com descrição do projeto"</span>

<span class="output"># [main (root-commit) abc123] Criei o arquivo Readme.md
# 1 file changed, 5 insertions(+)</span></code></pre>
            </div>

            <div class="info-box info">
                <span class="icon">📝</span>
                <div>
                    <strong>Boas práticas para mensagens de commit:</strong>
                    <br>• Use o modo imperativo: "Adicione", "Corrija", "Atualize"
                    <br>• Seja específico: evite "atualizações" ou "ajustes"
                    <br>• Mantenha a primeira linha com até 50 caracteres
                </div>
            </div>

            <p><strong>Editando e criando novos commits:</strong> Após editar o README.md, repita o processo:</p>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># Verificar alterações</span>
<span class="command">git</span> <span class="keyword">status</span>
<span class="output"># modified: README.md</span>

<span class="comment"># Preparar e commitar nova versão</span>
<span class="command">git</span> <span class="keyword">add</span> README.md
<span class="command">git</span> <span class="keyword">commit</span> <span class="flag">-m</span> <span class="string">"Adicionei seção de objetivos do projeto EcoLogística"</span></code></pre>
            </div>

            <!-- Visualização do Histórico -->
            <h3 style="margin: 1.5rem 0 1rem; color: var(--text-dark);">🔍 Explorando o Histórico</h3>
            
            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># Ver histórico completo de commits</span>
<span class="command">git</span> <span class="keyword">log</span>

<span class="output"># commit a1b2c3d4e5f6...
# Author: Seu Nome &lt;email@example.com&gt;
# Date:   Seg Mai 8 10:30:00 2026 -0300
#
#     Adicionei seção de objetivos do projeto EcoLogística
#
# commit 0eb52b5bdb9ccf37e2ac5f93042b4376d1f5524a
# Author: Seu Nome &lt;email@example.com&gt;
# Date:   Seg Mai 8 10:15:00 2026 -0300
#
#     Criei o arquivo Readme.md com descrição do projeto</span>

<span class="comment"># Ver detalhes de um commit específico</span>
<span class="command">git</span> <span class="keyword">show</span> 0eb52b5bdb9ccf37e2ac5f93042b4376d1f5524a</code></pre>
            </div>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># Comparar diferenças entre commits</span>
<span class="command">git</span> <span class="keyword">diff</span> 0eb52b5bdb9ccf37e2ac5f93042b4376d1f5524a HEAD

<span class="output"># Mostra linhas adicionadas (+) e removidas (-)
# entre o primeiro commit e a versão atual</span></code></pre>
            </div>

            <div class="info-box danger">
                <span class="icon">⚠️</span>
                <div>
                    <strong>Cuidado com git reset --hard:</strong> Este comando desfaz alterações permanentemente!
                    <br>Use apenas se tiver certeza absoluta e preferencialmente após backup.
                    <div class="code-block" style="margin:0.75rem 0; background:rgba(239,68,68,0.1); border-left-color:var(--danger);">
                        <pre><code><span class="command">git</span> <span class="keyword">reset</span> <span class="flag">--hard</span> 0eb52b5bdb9ccf37e2ac5f93042b4376d1f5524a</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 5: Repositório Remoto -->
        <section class="content-card" id="section-remote">
            <h2 class="section-title"><span class="number">5</span> Conectando ao GitHub: Colaboração em Nuvem</h2>
            <p>Para colaborar com sua equipe de startup, conecte seu repositório local ao GitHub. Primeiro, crie uma conta gratuita em <a href="https://github.com" target="_blank" style="color:var(--primary); font-weight:600;">github.com</a></p>

            <div class="info-box success">
                <span class="icon">🔐</span>
                <div>
                    <strong>Segurança:</strong> Ative a autenticação de dois fatores (2FA) na sua conta GitHub para proteção extra.
                </div>
            </div>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># 1. Criar novo repositório no GitHub (via interface web)
# 2. Copiar a URL do repositório criado
# 3. Conectar repositório local ao remoto</span>

<span class="command">git</span> <span class="keyword">remote</span> <span class="keyword">add</span> origin https://github.com/seu-usuario/aula-git-ecologistica.git

<span class="comment"># Renomear branch principal para 'main' (padrão moderno)</span>
<span class="command">git</span> <span class="keyword">branch</span> <span class="flag">-M</span> main

<span class="comment"># Enviar commits locais para o GitHub</span>
<span class="command">git</span> <span class="keyword">push</span> <span class="flag">-u</span> origin main

<span class="output"># Contando objetos: 5, done.
# Writing objects: 100% (5/5), done.
# To https://github.com/seu-usuario/aula-git-ecologistica.git
#  * [new branch]      main -> main
# branch 'main' set up to track 'origin/main'.</span></code></pre>
            </div>

            <div class="tabs-container">
                <div class="tabs-header">
                    <button class="tab-btn active" data-tab="clone">Clonar</button>
                    <button class="tab-btn" data-tab="fork">Fork</button>
                    <button class="tab-btn" data-tab="pull">Pull Request</button>
                </div>
                <div class="tab-content active" id="clone">
                    <p><strong>Clonar:</strong> Criar uma cópia local de um repositório remoto existente.</p>
                    <div class="code-block">
                        <pre><code><span class="command">git</span> <span class="keyword">clone</span> https://github.com/startup-exemplo/ecologistica.git</code></pre>
                    </div>
                </div>
                <div class="tab-content" id="fork">
                    <p><strong>Fork:</strong> Criar sua própria cópia de um repositório público para experimentar mudanças sem afetar o original.</p>
                    <ul>
                        <li>Útil para contribuir com projetos open source</li>
                        <li>Permite testar ideias antes de sugerir mudanças</li>
                        <li>Após alterações, use Pull Request para propor mudanças ao original</li>
                    </ul>
                </div>
                <div class="tab-content" id="pull">
                    <p><strong>Pull Request:</strong> Propor mudanças para serem revisadas e mescladas ao repositório principal.</p>
                    <ol>
                        <li>Crie um branch com sua alteração: <code>git checkout -b feature/nova-rota</code></li>
                        <li>Faça commits locais com suas mudanças</li>
                        <li>Envie para o remoto: <code>git push origin feature/nova-rota</code></li>
                        <li>No GitHub, clique em "New Pull Request" para revisão da equipe</li>
                    </ol>
                </div>
            </div>

            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Operação</th>
                        <th>Comando</th>
                        <th>Fluxo de Trabalho</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Enviar alterações</strong></td>
                        <td><code>git push</code></td>
                        <td>Local → Remoto (após commits)</td>
                    </tr>
                    <tr>
                        <td><strong>Buscar atualizações</strong></td>
                        <td><code>git pull</code></td>
                        <td>Remoto → Local (antes de trabalhar)</td>
                    </tr>
                    <tr>
                        <td><strong>Ver conexões remotas</strong></td>
                        <td><code>git remote -v</code></td>
                        <td>Lista URLs de fetch e push</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Seção 6: Workflow em Equipe -->
        <section class="content-card" id="section-workflow">
            <h2 class="section-title"><span class="number">6</span> Workflow para Equipes de Startup</h2>
            <p>Para startups com equipes multidisciplinares, um workflow simples e eficiente é essencial. Recomendamos o <strong>GitHub Flow</strong> para times ágeis [[8]][[18]].</p>

            <div class="image-placeholder" style="height:200px; background:linear-gradient(135deg, #10b981, #3b82f6);">
                🔄 Fluxo Simplificado: main ← feature branches ← Pull Requests ← Code Review
            </div>

            <h3 style="margin:1.5rem 0 1rem; color:var(--text-dark);">📋 Passos do GitHub Flow:</h3>
            <ol style="margin-left:1.5rem; color:var(--text-dark);">
                <li><strong>Crie um branch</strong> para cada nova funcionalidade ou correção</li>
                <li><strong>Faça commits</strong> frequentes com mensagens claras</li>
                <li><strong>Abra um Pull Request</strong> quando estiver pronto para revisão</li>
                <li><strong>Discuta e revise</strong> as mudanças com a equipe</li>
                <li><strong>Faça deploy</strong> após aprovação e merge</li>
            </ol>

            <div class="code-block">
                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                <pre><code><span class="comment"># Workflow típico para nova feature</span>

<span class="comment"># 1. Atualizar branch principal</span>
<span class="command">git</span> <span class="keyword">checkout</span> main
<span class="command">git</span> <span class="keyword">pull</span> origin main

<span class="comment"># 2. Criar branch para nova funcionalidade</span>
<span class="command">git</span> <span class="keyword">checkout</span> <span class="flag">-b</span> feature/calculo-rota-otimizada

<span class="comment"># 3. Trabalhar e commitar alterações</span>
<span class="command">git</span> <span class="keyword">add</span> .
<span class="command">git</span> <span class="keyword">commit</span> <span class="flag">-m</span> <span class="string">"Adiciona algoritmo de otimização de rotas"</span>

<span class="comment"># 4. Enviar branch para o GitHub</span>
<span class="command">git</span> <span class="keyword">push</span> origin feature/calculo-rota-otimizada

<span class="comment"># 5. Abrir Pull Request via interface web do GitHub</span></code></pre>
            </div>

            <div class="info-box warning">
                <span class="icon">🤝</span>
                <div>
                    <strong>Para equipes não-técnicas:</strong> 
                    <br>• Use branches para separar trabalho de diferentes áreas (ex: <code>feature/rh-onboarding</code>, <code>feature/logistica-rotas</code>)
                    <br>• Documente decisões em issues do GitHub antes de codificar
                    <br>• Revise Pull Requests mesmo sem ser desenvolvedor: foco em clareza e impacto no negócio
                </div>
            </div>

            <details class="expandable-tip">
                <summary>🔍 Aprofundamento: Git Flow vs GitHub Flow</summary>
                <div class="content">
                    <p><strong>Git Flow:</strong> Mais complexo, com branches <code>develop</code>, <code>release</code>, <code>hotfix</code>. Ideal para produtos com ciclos de release longos.</p>
                    <p><strong>GitHub Flow:</strong> Simples e ágil, ideal para startups que fazem deploy contínuo.</p>
                    <p><strong>Recomendação para este curso:</strong> Comece com GitHub Flow. À medida que a startup cresça, avalie se precisa de mais estrutura.</p>
                </div>
            </details>
        </section>

        <!-- Seção 7: Desafio Prático -->
        <section class="content-card" id="section-challenge">
            <h2 class="section-title"><span class="number">7</span> 🏆 Desafio Prático: Startup em 60 Minutos</h2>
            
            <div class="challenge-box">
                <h4><i>🎯</i> Missão: Criar o MVP Digital da "EcoLogística"</h4>
                <p><strong>Cenário:</strong> Sua equipe multidisciplinar precisa versionar os primeiros artefatos da startup:</p>
                <ol>
                    <li><strong>RH:</strong> Crie <code>politicas-remotas.md</code> com diretrizes de trabalho híbrido</li>
                    <li><strong>Logística:</strong> Adicione <code>rotas-iniciais.json</code> com 3 rotas de entrega</li>
                    <li><strong>Empreendedorismo:</strong> Atualize <code>README.md</code> com proposta de valor</li>
                    <li><strong>Sistemas:</strong> Crie <code>app.js</code> com estrutura básica do backend</li>
                </ol>
                <p><strong>Entregáveis:</strong> Repositório no GitHub com pelo menos 4 commits, cada um com mensagem descritiva e de uma área diferente.</p>
            </div>

            <h3 style="margin:1.5rem 0 1rem; color:var(--text-dark);">✅ Critérios de Sucesso:</h3>
            <ul style="margin-left:1.5rem; color:var(--text-dark);">
                <li>✅ Todos os membros configuraram nome e e-mail no Git</li>
                <li>✅ Cada arquivo foi commitado separadamente com mensagem clara</li>
                <li>✅ O repositório foi enviado para o GitHub com branch <code>main</code></li>
                <li>✅ Pelo menos um Pull Request foi criado para revisão em equipe</li>
            </ul>

            <div class="info-box success" style="margin-top:1.5rem;">
                <span class="icon">💡</span>
                <div>
                    <strong>Dica de Facilitador:</strong> Use este desafio para demonstrar como Git permite que áreas diferentes trabalhem em paralelo sem conflitos. Após a atividade, discuta: "Como isso se aplica ao seu dia a dia profissional?"
                </div>
            </div>
        </section>

        <!-- Seção 8: Aprofundamento -->
        <section class="content-card" id="section-advanced">
            <h2 class="section-title"><span class="number">8</span> 🔍 Tópicos Avançados para Crescer</h2>
            <p>Após dominar o básico, explore estes conceitos para elevar o nível da sua startup:</p>

            <div class="tabs-container">
                <div class="tabs-header">
                    <button class="tab-btn active" data-tab="branches">Branches Estratégicos</button>
                    <button class="tab-btn" data-tab="merge">Merge vs Rebase</button>
                    <button class="tab-btn" data-tab="automation">Automação com Actions</button>
                </div>
                <div class="tab-content active" id="branches">
                    <p><strong>Estratégias de Branching para Startups:</strong></p>
                    <ul>
                        <li><code>main</code>: Sempre estável, pronto para deploy</li>
                        <li><code>develop</code>: Integração de features em desenvolvimento (opcional)</li>
                        <li><code>feature/*</code>: Novas funcionalidades por área ou membro</li>
                        <li><code>hotfix/*</code>: Correções urgentes em produção</li>
                    </ul>
                    <div class="code-block">
                        <pre><code><span class="comment"># Criar branch para nova feature de RH</span>
<span class="command">git</span> <span class="keyword">checkout</span> <span class="flag">-b</span> feature/rh-processo-seletivo

<span class="comment"># Após concluir, mesclar com main via Pull Request</span>
<span class="comment"># (Nunca faça merge direto em main em equipe!)</span></code></pre>
                    </div>
                </div>
                <div class="tab-content" id="merge">
                    <p><strong>Merge vs Rebase: Quando usar cada um?</strong></p>
                    <table class="comparison-table" style="margin:1rem 0;">
                        <tr>
                            <th><strong>Merge</strong></th>
                            <th><strong>Rebase</strong></th>
                        </tr>
                        <tr>
                            <td>Preserva histórico completo de branches</td>
                            <td>Cria histórico linear e limpo</td>
                        </tr>
                        <tr>
                            <td>Ideal para Pull Requests em equipe</td>
                            <td>Ideal para limpar commits locais antes de push</td>
                        </tr>
                        <tr>
                            <td><code>git merge feature/nova</code></td>
                            <td><code>git rebase main</code> (no branch feature)</td>
                        </tr>
                    </table>
                    <div class="info-box warning">
                        <span class="icon">⚠️</span>
                        <div>
                            <strong>Nunca faça rebase</strong> em branches compartilhados com outros membros da equipe. Isso reescreve o histórico e pode causar conflitos graves.
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="automation">
                    <p><strong>GitHub Actions: Automação para Startups</strong></p>
                    <p>Automatize testes, deploy e notificações com workflows YAML:</p>
                    <div class="code-block">
                        <pre><code><span class="comment"># .github/workflows/test.yml - Exemplo simples</span>
<span class="keyword">name</span>: <span class="string">Testes Automáticos</span>
<span class="keyword">on</span>: [push, pull_request]

<span class="keyword">jobs</span>:
  <span class="function">test</span>:
    <span class="keyword">runs-on</span>: ubuntu-latest
    <span class="keyword">steps</span>:
      - <span class="keyword">uses</span>: actions/checkout@v3
      - <span class="keyword">name</span>: Rodar testes
        <span class="keyword">run</span>: npm test</code></pre>
                    </div>
                    <p><strong>Casos de uso para áreas não-técnicas:</strong></p>
                    <ul>
                        <li>📧 Notificar Slack quando um Pull Request for aprovado</li>
                        <li>📊 Gerar relatório semanal de atividades do repositório</li>
                        <li>🔄 Atualizar documentação automaticamente ao fazer merge</li>
                    </ul>
                </div>
            </div>

            <details class="expandable-tip">
                <summary>📚 Recursos para Continuar Aprendendo</summary>
                <div class="content">
                    <ul>
                        <li><a href="https://docs.github.com/pt" target="_blank" style="color:var(--primary);">Documentação Oficial do GitHub (PT-BR)</a></li>
                        <li><a href="https://git-scm.com/book/pt-br/v2" target="_blank" style="color:var(--primary);">Pro Git Book - Gratuito</a></li>
                        <li><a href="https://github.com/sampaiodias/git-boas-praticas" target="_blank" style="color:var(--primary);">Guia de Boas Práticas em PT-BR</a> </li>
                        <li>Pratique com <a href="https://learngitbranching.js.org/?locale=pt_BR" target="_blank" style="color:var(--primary);">Learn Git Branching (interativo)</a></li>
                    </ul>
                </div>
            </details>
        </section>

        <!-- Seção 9: Resumo Final -->
        <section class="content-card" id="section-summary">
            <h2 class="section-title"><span class="number">9</span> 📝 Resumo Final e Próximos Passos</h2>
            
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Comando/Ação</th>
                        <th>Objetivo Principal</th>
                        <th>Frequência de Uso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>git config</code></td>
                        <td>Configurar identidade do usuário</td>
                        <td>Uma vez por máquina</td>
                    </tr>
                    <tr>
                        <td><code>git init</code> / <code>git clone</code></td>
                        <td>Criar ou baixar repositório</td>
                        <td>Início de cada projeto</td>
                    </tr>
                    <tr>
                        <td><code>git add</code> + <code>git commit</code></td>
                        <td>Salvar alterações no histórico</td>
                        <td>Várias vezes por dia</td>
                    </tr>
                    <tr>
                        <td><code>git status</code> / <code>git log</code></td>
                        <td>Entender estado e histórico</td>
                        <td>Sempre que necessário</td>
                    </tr>
                    <tr>
                        <td><code>git push</code> / <code>git pull</code></td>
                        <td>Sincronizar com repositório remoto</td>
                        <td>Antes/depois de trabalhar</td>
                    </tr>
                    <tr>
                        <td><code>git checkout -b</code></td>
                        <td>Criar branch para nova feature</td>
                        <td>Por tarefa/feature</td>
                    </tr>
                </tbody>
            </table>

            <h3 style="margin:1.5rem 0 1rem; color:var(--text-dark);">🎯 Checklist de Competências Adquiridas:</h3>
            <ul style="margin-left:1.5rem; color:var(--text-dark);">
                <li>✅ Configurar Git com nome e e-mail corretos</li>
                <li>✅ Criar e gerenciar repositórios locais</li>
                <li>✅ Fazer commits com mensagens descritivas e úteis</li>
                <li>✅ Explorar histórico com <code>git log</code> e <code>git show</code></li>
                <li>✅ Conectar repositório local ao GitHub e sincronizar alterações</li>
                <li>✅ Trabalhar em equipe usando branches e Pull Requests</li>
                <li>✅ Aplicar Git em contextos além do código (documentação, processos, planos)</li>
            </ul>

            <div class="challenge-box" style="background:linear-gradient(135deg, rgba(99,102,241,0.15), rgba(139,92,246,0.15)); border-color:var(--primary);">
                <h4><i>🚀</i> Seu Próximo Nível: 30 Dias de Prática</h4>
                <ol>
                    <li><strong>Semana 1:</strong> Use Git para versionar seus documentos pessoais (currículo, projetos)</li>
                    <li><strong>Semana 2:</strong> Crie um repositório para um projeto com colegas</li>
                    <li><strong>Semana 3:</strong> Explore Issues e Projects do GitHub para gerenciar tarefas</li>
                    <li><strong>Semana 4:</strong> Proponha uma melhoria em um projeto open source via Pull Request</li>
                </ol>
            </div>

        </section>

        <!-- Footer -->
        <footer>
            <p class="text-dark-border"><strong>Git & GitHub para Startups Multidisciplinares</strong></p>
            <p class="text-dark-border">Curso 100% digital • 7 horas • Nível: Básico → Intermediário</p>
               
            <div class="next-steps">
                <div class="step-card">🔄 Pratique diariamente</div>
                <div class="step-card">🤝 Colabore em equipe</div>
                <div class="step-card">📚 Explore a documentação</div>
            </div>
            
            <p style="margin-top:2rem; font-size:0.9rem; opacity:0.8; color:var(--text-dark);">
                © 2026 • Conteúdo educacional • Licença: Creative Commons BY-SA 4.0
            </p>
        </footer>
    </main>

    <!-- JavaScript Interativo -->
    <script>
        // ===== Barra de Progresso =====
        window.addEventListener('scroll', () => {
            const scrollTop = document.documentElement.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollTop / scrollHeight) * 100;
            document.getElementById('progressBar').style.width = scrolled + '%';
        });

        // ===== Navegação Suave =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    // Atualizar menu ativo
                    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });

        // ===== Tabs Interativas =====
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.dataset.tab;
                const container = button.closest('.tabs-container');
                
                // Atualizar botões
                container.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Atualizar conteúdos
                container.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                    if (content.id === tabId) {
                        content.classList.add('active');
                    }
                });
            });
        });

        // ===== Copy Code Blocks =====
        function copyCode(btn) {
            const codeBlock = btn.closest('.code-block');
            const code = codeBlock.querySelector('code').innerText;
            
            navigator.clipboard.writeText(code).then(() => {
                const originalText = btn.textContent;
                btn.textContent = '✅ Copiado!';
                btn.classList.add('copied');
                
                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.classList.remove('copied');
                }, 2000);
            }).catch(err => {
                console.error('Erro ao copiar:', err);
                btn.textContent = '❌ Erro';
                setTimeout(() => btn.textContent = '📋 Copiar', 1500);
            });
        }

        // ===== Simulador Git =====
        function runSim(action) {
            const output = document.getElementById('simOutput');
            
            if (action === 'config') {
                output.textContent = `> git config --global user.name "StartupEco"
> git config --global user.email "contato@ecologistica.dev"
✅ Configurações salvas com sucesso!`;
            } else if (action === 'list') {
                output.textContent = `> git config --list
user.name=StartupEco
user.email=contato@ecologistica.dev
core.editor=nano
✅ Configurações verificadas!`;
            }
        }

        function clearSim() {
            document.getElementById('simOutput').textContent = '// Clique em "Executar Config" para simular a configuração do Git...';
        }

        // ===== Animações ao Scroll =====
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.content-card').forEach(card => {
            observer.observe(card);
        });

        // ===== Menu Mobile Toggle =====
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
        }

        // Adicionar botão mobile se necessário
        if (window.innerWidth <= 768) {
            const toggleBtn = document.createElement('button');
            toggleBtn.className = 'mobile-toggle';
            toggleBtn.innerHTML = '☰';
            toggleBtn.onclick = toggleSidebar;
            document.body.insertBefore(toggleBtn, document.body.firstChild);
            
            // Fechar sidebar ao clicar em link no mobile
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        document.getElementById('sidebar').classList.remove('open');
                    }
                });
            });
        }

        // ===== Inicialização =====
        document.addEventListener('DOMContentLoaded', () => {
            // Mostrar primeiro card imediatamente
            document.querySelector('.content-card').classList.add('visible');
            
            // Atualizar progresso inicial
            const scrollTop = document.documentElement.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollTop / scrollHeight) * 100;
            document.getElementById('progressBar').style.width = scrolled + '%';
        });

        // ===== Responsividade Dinâmica =====
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                document.getElementById('sidebar').classList.remove('open');
            }
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas Distribuídos - Load Balancer</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* ============================================
           CSS VARIABLES - PALETA DE CORES
           ============================================ */
        :root {
            --primary-dark: #0f172a;
            --primary-medium: #1e3a5f;
            --primary-light: #3b82f6;
            --secondary-orange: #f97316;
            --secondary-orange-light: #fb923c;
            --secondary-orange-dark: #ea580c;
            --success: #10b981;
            --success-light: #34d399;
            --warning: #f59e0b;
            --warning-light: #fbbf24;
            --info: #3b82f6;
            --info-light: #60a5fa;
            --code-bg: #1e1e2e;
            --code-text: #cdd6f4;
            --code-comment: #6c7086;
            --code-keyword: #cba6f7;
            --code-string: #a6e3a1;
            --code-function: #89b4fa;
            --code-number: #fab387;
            --white: #ffffff;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-700: #334155;
            --gray-800: #1e293b;
            --gray-900: #0f172a;
            --spacing-xs: 0.25rem;
            --spacing-sm: 0.5rem;
            --spacing-md: 1rem;
            --spacing-lg: 1.5rem;
            --spacing-xl: 2rem;
            --spacing-2xl: 3rem;
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
            --transition-fast: 150ms ease;
            --transition-normal: 300ms ease;
            --transition-slow: 500ms ease;
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-medium) 50%, var(--primary-light) 100%);
            min-height: 100vh;
            color: var(--gray-100);
            line-height: 1.6;
        }
        
        .progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gray-800);
            z-index: 1000;
        }
        
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--secondary-orange), var(--secondary-orange-light));
            width: 0%;
            transition: width var(--transition-normal);
        }
        
        .layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            min-height: 100vh;
        }
        
        .sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            padding: var(--spacing-xl);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            overflow-y: auto;
            z-index: 100;
        }
        
        .sidebar-logo {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            margin-bottom: var(--spacing-2xl);
            padding-bottom: var(--spacing-lg);
            border-bottom: 1px solid var(--gray-700);
        }
        
        .sidebar-logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--secondary-orange), var(--secondary-orange-light));
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--white);
        }
        
        .sidebar-logo-text {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--white);
        }
        
        .nav-menu {
            list-style: none;
        }
        
        .nav-item {
            margin-bottom: var(--spacing-xs);
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            padding: var(--spacing-sm) var(--spacing-md);
            color: var(--gray-300);
            text-decoration: none;
            border-radius: var(--radius-sm);
            transition: all var(--transition-fast);
            font-size: 0.9rem;
        }
        
        .nav-link:hover,
        .nav-link.active {
            background: rgba(249, 115, 22, 0.15);
            color: var(--secondary-orange);
        }
        
        .nav-link.active {
            border-left: 3px solid var(--secondary-orange);
        }
        
        .nav-icon {
            width: 18px;
            text-align: center;
        }
        
        .main-content {
            padding: var(--spacing-2xl);
            max-width: 1400px;
        }
        
        .header {
            margin-bottom: var(--spacing-2xl);
            animation: fadeInDown 0.6s ease;
        }
        
        .header-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-xs);
            background: rgba(249, 115, 22, 0.2);
            color: var(--secondary-orange-light);
            padding: var(--spacing-xs) var(--spacing-md);
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: var(--spacing-md);
        }
        
        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: var(--spacing-sm);
            line-height: 1.2;
        }
        
        .header-subtitle {
            font-size: 1.2rem;
            color: var(--gray-300);
            max-width: 700px;
        }
        
        .header-meta {
            display: flex;
            gap: var(--spacing-lg);
            margin-top: var(--spacing-lg);
            flex-wrap: wrap;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: var(--spacing-xs);
            font-size: 0.9rem;
            color: var(--gray-300);
        }
        
        .card {
            background: linear-gradient(145deg, rgba(249, 115, 22, 0.1), rgba(234, 88, 12, 0.05));
            border: 1px solid rgba(249, 115, 22, 0.2);
            border-radius: var(--radius-lg);
            padding: var(--spacing-xl);
            margin-bottom: var(--spacing-xl);
            box-shadow: var(--shadow-lg);
            transition: all var(--transition-normal);
            animation: fadeInUp 0.6s ease;
            opacity: 0;
        }
        
        .card.visible {
            opacity: 1;
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
            border-color: rgba(249, 115, 22, 0.4);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            margin-bottom: var(--spacing-lg);
        }
        
        .card-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--secondary-orange), var(--secondary-orange-dark));
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--white);
        }
        
        .card-content {
            color: var(--gray-200);
        }
        
        .code-block {
            background: var(--code-bg);
            border-radius: var(--radius-md);
            overflow: hidden;
            margin: var(--spacing-lg) 0;
            border-left: 4px solid var(--secondary-orange);
            position: relative;
        }
        
        .code-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--spacing-sm) var(--spacing-md);
            background: rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .code-filename {
            font-family: 'Fira Code', monospace;
            font-size: 0.85rem;
            color: var(--gray-300);
        }
        
        .code-copy-btn {
            display: flex;
            align-items: center;
            gap: var(--spacing-xs);
            background: transparent;
            border: 1px solid var(--gray-700);
            color: var(--gray-300);
            padding: var(--spacing-xs) var(--spacing-sm);
            border-radius: var(--radius-sm);
            cursor: pointer;
            font-size: 0.8rem;
            transition: all var(--transition-fast);
        }
        
        .code-copy-btn:hover {
            background: var(--secondary-orange);
            border-color: var(--secondary-orange);
            color: var(--white);
        }
        
        .code-copy-btn.copied {
            background: var(--success);
            border-color: var(--success);
        }
        
        .code-content {
            padding: var(--spacing-lg);
            overflow-x: auto;
            font-family: 'Fira Code', monospace;
            font-size: 0.85rem;
            line-height: 1.7;
            color: var(--code-text);
            max-height: 500px;
            overflow-y: auto;
        }
        
        .code-content pre {
            margin: 0;
        }
        
        .code-content code {
            font-family: 'Fira Code', monospace;
        }
        
        .kw { color: var(--code-keyword); }
        .str { color: var(--code-string); }
        .fn { color: var(--code-function); }
        .num { color: var(--code-number); }
        .com { color: var(--code-comment); }
        
        .info-box {
            padding: var(--spacing-lg);
            border-radius: var(--radius-md);
            margin: var(--spacing-lg) 0;
            display: flex;
            gap: var(--spacing-md);
            align-items: flex-start;
        }
        
        .info-box.success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-left: 4px solid var(--success);
        }
        
        .info-box.warning {
            background: rgba(245, 158, 11, 0.1);
            border: 1px solid rgba(245, 158, 11, 0.3);
            border-left: 4px solid var(--warning);
        }
        
        .info-box.info {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-left: 4px solid var(--info);
        }
        
        .info-box-icon {
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        
        .info-box-title {
            font-weight: 600;
            margin-bottom: var(--spacing-xs);
            color: var(--white);
        }
        
        .info-box-content {
            color: var(--gray-300);
            font-size: 0.95rem;
        }
        
        .tabs-container {
            margin: var(--spacing-xl) 0;
        }
        
        .tabs-header {
            display: flex;
            gap: var(--spacing-sm);
            border-bottom: 2px solid var(--gray-700);
            margin-bottom: var(--spacing-lg);
        }
        
        .tab-btn {
            padding: var(--spacing-sm) var(--spacing-lg);
            background: transparent;
            border: none;
            color: var(--gray-300);
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            position: relative;
            transition: all var(--transition-fast);
        }
        
        .tab-btn:hover {
            color: var(--white);
        }
        
        .tab-btn.active {
            color: var(--secondary-orange);
        }
        
        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--secondary-orange);
        }
        
        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .table-container {
            overflow-x: auto;
            margin: var(--spacing-lg) 0;
            border-radius: var(--radius-md);
            border: 1px solid var(--gray-700);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(0, 0, 0, 0.2);
        }
        
        th, td {
            padding: var(--spacing-md);
            text-align: left;
            border-bottom: 1px solid var(--gray-700);
        }
        
        th {
            background: rgba(249, 115, 22, 0.1);
            color: var(--secondary-orange-light);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }
        
        td {
            color: var(--gray-200);
            font-size: 0.95rem;
        }
        
        .simulator {
            background: linear-gradient(145deg, rgba(30, 30, 46, 0.8), rgba(15, 23, 42, 0.9));
            border-radius: var(--radius-lg);
            padding: var(--spacing-xl);
            margin: var(--spacing-xl) 0;
            border: 1px solid var(--gray-700);
        }
        
        .simulator-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--spacing-lg);
            flex-wrap: wrap;
            gap: var(--spacing-md);
        }
        
        .simulator-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--white);
        }
        
        .simulator-controls {
            display: flex;
            gap: var(--spacing-md);
            flex-wrap: wrap;
        }
        
        .sim-btn {
            padding: var(--spacing-sm) var(--spacing-lg);
            background: var(--secondary-orange);
            border: none;
            border-radius: var(--radius-sm);
            color: var(--white);
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-fast);
        }
        
        .sim-btn:hover {
            background: var(--secondary-orange-light);
            transform: translateY(-2px);
        }
        
        .sim-btn:disabled {
            background: var(--gray-700);
            cursor: not-allowed;
            transform: none;
        }
        
        .sim-visualizer {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--spacing-lg);
            margin-top: var(--spacing-lg);
        }
        
        .sim-node {
            background: rgba(0, 0, 0, 0.3);
            border-radius: var(--radius-md);
            padding: var(--spacing-lg);
            text-align: center;
            border: 2px solid var(--gray-700);
            transition: all var(--transition-normal);
        }
        
        .sim-node.active {
            border-color: var(--success);
            background: rgba(16, 185, 129, 0.1);
        }
        
        .sim-node.processing {
            border-color: var(--warning);
            animation: pulse 1s infinite;
        }
        
        .sim-node-icon {
            font-size: 2.5rem;
            margin-bottom: var(--spacing-sm);
        }
        
        .sim-node-label {
            font-weight: 600;
            color: var(--white);
            margin-bottom: var(--spacing-xs);
        }
        
        .sim-node-status {
            font-size: 0.85rem;
            color: var(--gray-300);
        }
        
        .sim-log {
            background: var(--code-bg);
            border-radius: var(--radius-md);
            padding: var(--spacing-lg);
            margin-top: var(--spacing-lg);
            max-height: 200px;
            overflow-y: auto;
            font-family: 'Fira Code', monospace;
            font-size: 0.85rem;
        }
        
        .sim-log-entry {
            padding: var(--spacing-xs) 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray-300);
        }
        
        .sim-log-entry:last-child {
            border-bottom: none;
        }
        
        .sim-log-entry.success { color: var(--success-light); }
        .sim-log-entry.warning { color: var(--warning-light); }
        .sim-log-entry.info { color: var(--info-light); }
        
        .image-container {
            text-align: center;
            margin: var(--spacing-2xl) 0;
        }
        
        .image-container img {
            max-width: 800px;
            width: 100%;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .image-caption {
            margin-top: var(--spacing-md);
            color: var(--gray-300);
            font-size: 0.9rem;
            font-style: italic;
        }
        
        .footer {
            background: rgba(0, 0, 0, 0.3);
            border-top: 1px solid var(--gray-700);
            padding: var(--spacing-2xl);
            margin-top: var(--spacing-2xl);
        }
        
        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-xl);
        }
        
        .footer-section h4 {
            color: var(--white);
            margin-bottom: var(--spacing-md);
            font-size: 1rem;
        }
        
        .footer-section p,
        .footer-section li {
            color: var(--gray-300);
            font-size: 0.9rem;
            line-height: 1.8;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section a {
            color: var(--secondary-orange-light);
            text-decoration: none;
            transition: color var(--transition-fast);
        }
        
        .footer-section a:hover {
            color: var(--secondary-orange);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: var(--spacing-xl);
            margin-top: var(--spacing-xl);
            border-top: 1px solid var(--gray-700);
            color: var(--gray-300);
            font-size: 0.85rem;
        }
        
        .badge {
            display: inline-block;
            padding: var(--spacing-xs) var(--spacing-sm);
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-primary {
            background: rgba(59, 130, 246, 0.2);
            color: var(--info-light);
        }
        
        .badge-success {
            background: rgba(16, 185, 129, 0.2);
            color: var(--success-light);
        }
        
        .badge-warning {
            background: rgba(245, 158, 11, 0.2);
            color: var(--warning-light);
        }
        
        .badge-orange {
            background: rgba(249, 115, 22, 0.2);
            color: var(--secondary-orange-light);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.4);
            }
            50% {
                box-shadow: 0 0 0 10px rgba(245, 158, 11, 0);
            }
        }
        
        @media (max-width: 1024px) {
            .layout {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                position: fixed;
                left: -300px;
                width: 280px;
                transition: left var(--transition-normal);
            }
            
            .sidebar.open {
                left: 0;
            }
            
            .main-content {
                padding: var(--spacing-lg);
            }
            
            .menu-toggle {
                display: flex;
            }
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8rem;
            }
            
            .header-subtitle {
                font-size: 1rem;
            }
            
            .header-meta {
                gap: var(--spacing-md);
            }
            
            .sim-visualizer {
                grid-template-columns: 1fr;
            }
            
            .tabs-header {
                overflow-x: auto;
                white-space: nowrap;
            }
            
            .card {
                padding: var(--spacing-lg);
            }
            
            .code-content {
                padding: var(--spacing-md);
                font-size: 0.75rem;
            }
        }
        
        .menu-toggle {
            display: none;
            position: fixed;
            top: var(--spacing-lg);
            right: var(--spacing-lg);
            z-index: 200;
            background: var(--secondary-orange);
            border: none;
            width: 44px;
            height: 44px;
            border-radius: var(--radius-sm);
            cursor: pointer;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--white);
        }
        
        .hint {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: var(--radius-md);
            margin: var(--spacing-lg) 0;
            overflow: hidden;
        }
        
        .hint-header {
            padding: var(--spacing-md) var(--spacing-lg);
            background: rgba(59, 130, 246, 0.15);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
            color: var(--info-light);
        }
        
        .hint-header:hover {
            background: rgba(59, 130, 246, 0.2);
        }
        
        .hint-content {
            padding: var(--spacing-lg);
            color: var(--gray-300);
            display: none;
        }
        
        .hint.open .hint-content {
            display: block;
        }
        
        .hint-icon {
            transition: transform var(--transition-fast);
        }
        
        .hint.open .hint-icon {
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>
    
    <button class="menu-toggle" id="menuToggle">☰</button>
    
    <div class="layout">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <div class="sidebar-logo-icon">LB</div>
                <span class="sidebar-logo-text">LoadBalancer</span>
            </div>
            
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#intro" class="nav-link active">
                            <span class="nav-icon">📖</span> Introdução
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#arquitetura" class="nav-link">
                            <span class="nav-icon">🏗️</span> Arquitetura
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#componentes" class="nav-link">
                            <span class="nav-icon">🔧</span> Componentes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#fluxo" class="nav-link">
                            <span class="nav-icon">🔄</span> Fluxo de Dados
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#codigo" class="nav-link">
                            <span class="nav-icon">💻</span> Código Completo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#simulador" class="nav-link">
                            <span class="nav-icon">🎮</span> Simulador
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#desafio" class="nav-link">
                            <span class="nav-icon">🎯</span> Desafio Prático
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#aprofundamento" class="nav-link">
                            <span class="nav-icon">📚</span> Aprofundamento
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#resumo" class="nav-link">
                            <span class="nav-icon">📝</span> Resumo Final
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <main class="main-content">
            <header class="header" id="intro">
                <div class="header-badge">
                    <span>🎓</span> Aula Interativa
                </div>
                <h1>Sistemas Distribuídos - Load Balancer</h1>
                <p class="header-subtitle">
                    Aprenda como construir um sistema distribuído escalável usando o padrão Master-Worker 
                    com balanceamento de carga dinâmico em Python.
                </p>
                <div class="header-meta">
                    <div class="meta-item">
                        <span>⏱️</span> 120 minutos
                    </div>
                    <div class="meta-item">
                        <span>📊</span> Nível: Básico/Intermediário
                    </div>
                    <div class="meta-item">
                        <span>🐍</span> Python 3.x
                    </div>
                    <div class="meta-item">
                        <span>🔌</span> Sockets TCP
                    </div>
                </div>
            </header>
            
            <div class="image-container">
                <img src="https://cdn.qwenlm.ai/output/8e16c199-12ed-402a-b532-8bb0410d80ab/image_gen/c683e9bf-ec15-457c-9b9e-c80474a39743/1773266809.png?key=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZXNvdXJjZV91c2VyX2lkIjoiOGUxNmMxOTktMTJlZC00MDJhLWI1MzItOGJiMDQxMGQ4MGFiIiwicmVzb3VyY2VfaWQiOiIxNzczMjY2ODA5IiwicmVzb3VyY2VfY2hhdF9pZCI6IjA1MzliMmYwLWEyNzUtNGY1MS04NWJjLTk1NmZkYjQwNGYxNCJ9.zvoN10cZpCqAehusMjfWD5PCAAgwoMq8VxPa6-QLijY&x-oss-process=image/resize,m_mfit,w_450,h_450" alt="Diagrama de arquitetura de sistema distribuído mostrando Load Balancer central conectado a múltiplos Master Nodes e Worker Clients com fluxo numerado de 1 a 5" />
                <p class="image-caption">
                    Figura 1: Arquitetura do sistema distribuído com Load Balancer como ponto central de roteamento (5 passos)
                </p>
            </div>
            
            <section class="card visible" id="arquitetura">
                <div class="card-header">
                    <div class="card-icon">🎯</div>
                    <h2 class="card-title">Objetivos de Aprendizado</h2>
                </div>
                <div class="card-content">
                    <p>Ao final desta aula, você será capaz de:</p>
                    <ul style="margin-top: var(--spacing-md); margin-left: var(--spacing-xl); color: var(--gray-200);">
                        <li>✅ Compreender os fundamentos de sistemas distribuídos</li>
                        <li>✅ Implementar comunicação via Sockets TCP em Python</li>
                        <li>✅ Criar um Load Balancer com algoritmo Round-Robin</li>
                        <li>✅ Gerenciar concorrência com threading</li>
                        <li>✅ Implementar resiliência e failover automático</li>
                        <li>✅ Entender semântica de bibliotecas Python para rede</li>
                    </ul>
                </div>
            </section>
            
            <section class="card" id="componentes">
                <div class="card-header">
                    <div class="card-icon">🏗️</div>
                    <h2 class="card-title">Componentes do Sistema</h2>
                </div>
                <div class="card-content">
                    <p>Nosso sistema distribuído é composto por três componentes principais:</p>
                    
                    <div class="tabs-container">
                        <div class="tabs-header">
                            <button class="tab-btn active" data-tab="tab-lb">Load Balancer</button>
                            <button class="tab-btn" data-tab="tab-master">Master</button>
                            <button class="tab-btn" data-tab="tab-worker">Worker</button>
                        </div>
                        
                        <div class="tab-content active" id="tab-lb">
                            <div class="info-box info">
                                <span class="info-box-icon">ℹ️</span>
                                <div>
                                    <div class="info-box-title">Load Balancer (Orquestrador)</div>
                                    <div class="info-box-content">
                                        <p>Atua como ponto central de registro e roteamento. Não processa dados, apenas gerencia a topologia da rede disponível usando o algoritmo Round-Robin para distribuição equilibrada.</p>
                                    </div>
                                </div>
                            </div>
                            <ul style="margin-left: var(--spacing-xl); color: var(--gray-200);">
                                <li>📍 Porta: 5000</li>
                                <li>🔄 Algoritmo: Round-Robin</li>
                                <li>🔒 Thread-safe com Lock</li>
                                <li>📋 Mantém lista de Masters ativos</li>
                            </ul>
                        </div>
                        
                        <div class="tab-content" id="tab-master">
                            <div class="info-box success">
                                <span class="info-box-icon">✅</span>
                                <div>
                                    <div class="info-box-title">Master (Nó de Processamento)</div>
                                    <div class="info-box-content">
                                        <p>Nós de trabalho que registram sua disponibilidade no LB e executam as tarefas recebidas dos Workers. Podem ser escalados horizontalmente.</p>
                                    </div>
                                </div>
                            </div>
                            <ul style="margin-left: var(--spacing-xl); color: var(--gray-200);">
                                <li>📍 Porta: Dinâmica (argumento)</li>
                                <li>⚡ Processamento paralelo com threads</li>
                                <li>📝 Registro automático no LB</li>
                                <li>🔄 Atendimento múltiplo de Workers</li>
                            </ul>
                        </div>
                        
                        <div class="tab-content" id="tab-worker">
                            <div class="info-box warning">
                                <span class="info-box-icon">⚠️</span>
                                <div>
                                    <div class="info-box-title">Worker (Cliente)</div>
                                    <div class="info-box-content">
                                        <p>Interface de usuário que solicita um nó de processamento ao LB e envia a carga de trabalho diretamente ao Master escolhido. Implementa failover automático.</p>
                                    </div>
                                </div>
                            </div>
                            <ul style="margin-left: var(--spacing-xl); color: var(--gray-200);">
                                <li>📍 Conexão dinâmica via LB</li>
                                <li>🔄 Failover automático se Master cair</li>
                                <li>📤 Envio direto de tarefas</li>
                                <li>📥 Recebimento de resultados</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="card" id="fluxo">
                <div class="card-header">
                    <div class="card-icon">🔄</div>
                    <h2 class="card-title">Fluxo de Execução (5 Passos)</h2>
                </div>
                <div class="card-content">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Passo</th>
                                    <th>Ação</th>
                                    <th>Componentes</th>
                                    <th>Protocolo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge badge-orange">1️⃣</span></td>
                                    <td>Masters se registram dinamicamente</td>
                                    <td>Master → LoadBalancer</td>
                                    <td><code>MASTER|IP|PORT</code></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-orange">2️⃣</span></td>
                                    <td>Worker pede uma rota</td>
                                    <td>Worker → LoadBalancer</td>
                                    <td><code>WORKER</code></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-orange">3️⃣</span></td>
                                    <td>LoadBalancer responde qual Master usar</td>
                                    <td>LoadBalancer → Worker</td>
                                    <td><code>IP|PORT</code></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-orange">4️⃣</span></td>
                                    <td>Worker fala direto com o Master</td>
                                    <td>Worker ↔ Master</td>
                                    <td><code>Texto → Resultado</code></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-orange">5️⃣</span></td>
                                    <td>Se Master cair → Worker pede nova rota</td>
                                    <td>Worker → LoadBalancer</td>
                                    <td><code>Failover Automático</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <section class="card" id="codigo">
                <div class="card-header">
                    <div class="card-icon">💻</div>
                    <h2 class="card-title">Código Fonte Completo</h2>
                </div>
                <div class="card-content">
                    <p>Explore os três arquivos completos do projeto com comentários detalhados sobre semântica e arquitetura:</p>
                    
                    <div class="tabs-container">
                        <div class="tabs-header">
                            <button class="tab-btn active" data-tab="code-lb">load_balancer.py</button>
                            <button class="tab-btn" data-tab="code-master">master.py</button>
                            <button class="tab-btn" data-tab="code-worker">worker.py</button>
                        </div>
                        
                        <div class="tab-content active" id="code-lb">
                            <div class="info-box info">
                                <span class="info-box-icon">📄</span>
                                <div>
                                    <div class="info-box-title">load_balancer.py - Orquestrador Central</div>
                                    <div class="info-box-content">
                                        <p>Este arquivo implementa o Load Balancer que gerencia o registro de Masters e roteia Workers usando Round-Robin. Usa threading para atender múltiplas conexões simultâneas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="code-block">
                                <div class="code-header">
                                    <span class="code-filename">load_balancer.py</span>
                                    <button class="code-copy-btn" onclick="copyCode(this)">
                                        <span>📋</span> Copiar
                                    </button>
                                </div>
                                <div class="code-content">
                                    <pre><code><span class="kw">import</span> socket
<span class="kw">import</span> threading

<span class="com"># Configurações do servidor Load Balancer</span>
HOST = <span class="str">"0.0.0.0"</span>  <span class="com"># 0.0.0.0 = ouvir em todas as interfaces de rede</span>
PORT = <span class="num">5000</span>        <span class="com"># Porta fixa para o Load Balancer</span>

<span class="com"># Estado global do Load Balancer</span>
masters = []           <span class="com"># Lista de tuplas (ip, port) dos Masters registrados</span>
lock = threading.Lock() <span class="com"># Lock para thread-safe: previne Race Conditions</span>
rr_index = <span class="num">0</span>           <span class="com"># Índice para algoritmo Round-Robin</span>


<span class="kw">def</span> <span class="fn">register_master</span>(ip, port):
    <span class="com">"""Registra um Master na lista de disponíveis (thread-safe)"""</span>
    <span class="kw">with</span> lock:  <span class="com"># Garante exclusão mútua durante modificação da lista</span>
        masters.append((ip, port))
    <span class="fn">print</span>(f<span class="str">"MASTER registrado -> {ip}:{port}"</span>)


<span class="kw">def</span> <span class="fn">get_master</span>():
    <span class="com">"""Retorna o próximo Master usando Round-Robin (thread-safe)"""</span>
    <span class="kw">global</span> rr_index
    
    <span class="kw">with</span> lock:  <span class="com"># Protege leitura e atualização do índice</span>
        <span class="kw">if</span> <span class="fn">len</span>(masters) == <span class="num">0</span>:
            <span class="kw">return</span> <span class="kw">None</span>
        
        <span class="com"># Round-Robin: distribui carga uniformemente entre Masters</span>
        <span class="com"># O operador % garante ciclo infinito (0, 1, 2, 0, 1, 2...)</span>
        master = masters[rr_index % <span class="fn">len</span>(masters)]
        rr_index += <span class="num">1</span>
    
    <span class="kw">return</span> master


<span class="kw">def</span> <span class="fn">handle_client</span>(conn, addr):
    <span class="com">"""Handle de cada conexão de cliente (Master ou Worker)"""</span>
    <span class="kw">try</span>:
        msg = conn.recv(<span class="num">1024</span>).decode()
        parts = msg.split(<span class="str">"|"</span>)
        
        <span class="kw">if</span> parts[<span class="num">0</span>] == <span class="str">"MASTER"</span>:
            <span class="com"># Formato: MASTER|IP|PORTA</span>
            ip = parts[<span class="num">1</span>]
            port = <span class="fn">int</span>(parts[<span class="num">2</span>])
            register_master(ip, port)
            conn.send(b<span class="str">"OK"</span>)  <span class="com"># Confirma registro</span>
        
        <span class="kw">elif</span> parts[<span class="num">0</span>] == <span class="str">"WORKER"</span>:
            <span class="com"># Worker solicitando rota para um Master</span>
            master = get_master()
            
            <span class="kw">if</span> master <span class="kw">is</span> <span class="kw">None</span>:
                conn.send(b<span class="str">"NO_MASTER"</span>)
            <span class="kw">else</span>:
                ip, port = master
                <span class="fn">print</span>(f<span class="str">"Worker {addr} roteado para MASTER {ip}:{port}"</span>)
                conn.send(f<span class="str">"{ip}|{port}"</span>.encode())
    
    <span class="kw">except</span> Exception <span class="kw">as</span> e:
        <span class="fn">print</span>(f<span class="str">"Erro ao atender cliente {addr}: {e}"</span>)
    <span class="kw">finally</span>:
        conn.close()  <span class="com"># Sempre fecha a conexão</span>


<span class="kw">def</span> <span class="fn">start</span>():
    <span class="com">"""Inicia o servidor Load Balancer"""</span>
    server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    server.bind((HOST, PORT))
    server.listen()
    
    <span class="fn">print</span>(<span class="str">"LoadBalancer rodando porta"</span>, PORT)
    
    <span class="kw">while</span> <span class="kw">True</span>:
        conn, addr = server.accept()
        <span class="com"># Cada conexão é atendida em uma thread separada</span>
        threading.Thread(target=handle_client, args=(conn, addr)).start()


<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    start()</code></pre>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-content" id="code-master">
                            <div class="info-box success">
                                <span class="info-box-icon">📄</span>
                                <div>
                                    <div class="info-box-title">master.py - Nó de Processamento</div>
                                    <div class="info-box-content">
                                        <p>Este arquivo implementa os nós Master que processam as tarefas. Cada Master se registra automaticamente no Load Balancer ao iniciar e atende múltiplos Workers simultaneamente.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="code-block">
                                <div class="code-header">
                                    <span class="code-filename">master.py</span>
                                    <button class="code-copy-btn" onclick="copyCode(this)">
                                        <span>📋</span> Copiar
                                    </button>
                                </div>
                                <div class="code-content">
                                    <pre><code><span class="kw">import</span> socket
<span class="kw">import</span> threading
<span class="kw">import</span> sys

<span class="com"># Configurações de conexão com Load Balancer</span>
LB_HOST = <span class="str">"127.0.0.1"</span>
LB_PORT = <span class="num">5000</span>

<span class="com"># Configurações do servidor Master</span>
HOST = <span class="str">"0.0.0.0"</span>
PORT = <span class="fn">int</span>(sys.argv[<span class="num">1</span>])  <span class="com"># Porta dinâmica via argumento de linha de comando</span>


<span class="kw">def</span> <span class="fn">register_master</span>():
    <span class="com">"""Registra este Master no Load Balancer ao iniciar"""</span>
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    
    <span class="kw">try</span>:
        s.connect((LB_HOST, LB_PORT))
        <span class="com"># Formato do protocolo: MASTER|IP|PORTA</span>
        msg = f<span class="str">"MASTER|127.0.0.1|{PORT}"</span>
        s.send(msg.encode())
        <span class="fn">print</span>(<span class="str">"Registrado no LoadBalancer com sucesso"</span>)
    <span class="kw">except</span> Exception <span class="kw">as</span> e:
        <span class="fn">print</span>(f<span class="str">"Erro ao registrar no LoadBalancer: {e}"</span>)
    <span class="kw">finally</span>:
        s.close()


<span class="kw">def</span> <span class="fn">handle_worker</span>(conn, addr):
    <span class="com">"""Processa a tarefa recebida de um Worker"""</span>
    <span class="fn">print</span>(<span class="str">"Worker conectado:"</span>, addr)
    
    data = b<span class="str">""</span>
    
    <span class="kw">while</span> <span class="kw">True</span>:
        part = conn.recv(<span class="num">4096</span>)
        <span class="kw">if</span> <span class="kw">not</span> part:  <span class="com"># Detecta fim do stream (SHUT_WR do cliente)</span>
            <span class="kw">break</span>
        data += part
    
    text = data.decode()
    
    <span class="com"># Lógica de negócio: contagem de palavras</span>
    words = <span class="fn">len</span>(text.split())
    result = f<span class="str">"Palavras: {words}"</span>
    
    conn.send(result.encode())
    conn.close()
    <span class="fn">print</span>(f<span class="str">"Tarefa processada para {addr}: {result}"</span>)


<span class="kw">def</span> <span class="fn">start</span>():
    <span class="com">"""Inicia o servidor Master"""</span>
    <span class="com"># Passo 1: Registrar no Load Balancer</span>
    register_master()
    
    <span class="com"># Passo 2: Iniciar servidor para aceitar Workers</span>
    server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    server.bind((HOST, PORT))
    server.listen()
    
    <span class="fn">print</span>(<span class="str">"MASTER rodando porta"</span>, PORT)
    
    <span class="kw">while</span> <span class="kw">True</span>:
        conn, addr = server.accept()
        <span class="com"># Cada Worker é atendido em uma thread separada</span>
        threading.Thread(target=handle_worker, args=(conn, addr)).start()


<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    start()</code></pre>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-content" id="code-worker">
                            <div class="info-box warning">
                                <span class="info-box-icon">📄</span>
                                <div>
                                    <div class="info-box-title">worker.py - Cliente Solicitante</div>
                                    <div class="info-box-content">
                                        <p>Este arquivo implementa o Worker que solicita tarefas ao usuário, obtém uma rota do Load Balancer e envia a tarefa diretamente ao Master. Implementa failover automático.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="code-block">
                                <div class="code-header">
                                    <span class="code-filename">worker.py</span>
                                    <button class="code-copy-btn" onclick="copyCode(this)">
                                        <span>📋</span> Copiar
                                    </button>
                                </div>
                                <div class="code-content">
                                    <pre><code><span class="kw">import</span> socket

<span class="com"># Configurações do Load Balancer</span>
LB_HOST = <span class="str">"127.0.0.1"</span>
LB_PORT = <span class="num">5000</span>


<span class="kw">def</span> <span class="fn">get_master</span>():
    <span class="com">"""Solicita ao Load Balancer qual Master usar"""</span>
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    
    <span class="kw">try</span>:
        s.connect((LB_HOST, LB_PORT))
        s.send(b<span class="str">"WORKER"</span>)  <span class="com"># Identifica-se como Worker</span>
        data = s.recv(<span class="num">1024</span>).decode()
        
        <span class="kw">if</span> data == <span class="str">"NO_MASTER"</span>:
            <span class="kw">return</span> <span class="kw">None</span>
        
        ip, port = data.split(<span class="str">"|"</span>)
        <span class="kw">return</span> ip, <span class="fn">int</span>(port)
    
    <span class="kw">except</span> Exception <span class="kw">as</span> e:
        <span class="fn">print</span>(f<span class="str">"Erro ao conectar no LoadBalancer: {e}"</span>)
        <span class="kw">return</span> <span class="kw">None</span>
    <span class="kw">finally</span>:
        s.close()


<span class="kw">def</span> <span class="fn">send_task</span>(master, text):
    <span class="com">"""Envia a tarefa diretamente ao Master selecionado"""</span>
    <span class="kw">try</span>:
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        s.connect(master)  <span class="com"># Conexão direta ao Master (não passa pelo LB)</span>
        
        s.send(text.encode())
        s.shutdown(socket.SHUT_WR)  <span class="com"># Half-close: indica fim do envio</span>
        
        result = s.recv(<span class="num">4096</span>)
        <span class="fn">print</span>(<span class="str">"Resultado:"</span>, result.decode())
        
        s.close()
        <span class="kw">return</span> <span class="kw">True</span>
    
    <span class="kw">except</span> Exception <span class="kw">as</span> e:
        <span class="fn">print</span>(<span class="str">"Master falhou"</span>)
        <span class="kw">return</span> <span class="kw">False</span>  <span class="com"># Trigger failover</span>


<span class="kw">def</span> <span class="fn">start</span>():
    <span class="com">"""Loop principal do Worker"""</span>
    <span class="kw">while</span> <span class="kw">True</span>:
        text = <span class="fn">input</span>(<span class="str">"\nDigite o texto (ou 'sair'): "</span>)
        
        <span class="kw">if</span> text.lower() == <span class="str">"sair"</span>:
            <span class="fn">print</span>(<span class="str">"Worker finalizado"</span>)
            <span class="kw">break</span>
        
        <span class="com"># Passo 1: Obter rota do Load Balancer</span>
        master = get_master()
        
        <span class="kw">if</span> master <span class="kw">is</span> <span class="kw">None</span>:
            <span class="fn">print</span>(<span class="str">"Nenhum master disponível"</span>)
            <span class="kw">continue</span>
        
        <span class="fn">print</span>(<span class="str">"Worker conectado ao MASTER"</span>, master)
        
        <span class="com"># Passo 2: Enviar tarefa diretamente ao Master</span>
        success = send_task(master, text)
        
        <span class="com"># Passo 3: Failover se Master falhar</span>
        <span class="kw">if</span> <span class="kw">not</span> success:
            <span class="fn">print</span>(<span class="str">"Solicitando novo master ao LoadBalancer..."</span>)


<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    start()</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="card" id="simulador">
                <div class="card-header">
                    <div class="card-icon">🎮</div>
                    <h2 class="card-title">Simulador de Load Balancer</h2>
                </div>
                <div class="card-content">
                    <p>Interaja com o simulador para entender o fluxo de roteamento Round-Robin:</p>
                    
                    <div class="simulator">
                        <div class="simulator-header">
                            <span class="simulator-title">🖥️ Visualização em Tempo Real</span>
                            <div class="simulator-controls">
                                <button class="sim-btn" id="btnRegister" onclick="registerMaster()">➕ Registrar Master</button>
                                <button class="sim-btn" id="btnRequest" onclick="requestRoute()">📡 Solicitar Rota</button>
                                <button class="sim-btn" id="btnReset" onclick="resetSimulator()">🔄 Resetar</button>
                            </div>
                        </div>
                        
                        <div class="sim-visualizer">
                            <div class="sim-node" id="lb-node">
                                <div class="sim-node-icon">🔀</div>
                                <div class="sim-node-label">Load Balancer</div>
                                <div class="sim-node-status">Porta: 5000</div>
                            </div>
                            <div class="sim-node" id="master1">
                                <div class="sim-node-icon">🖥️</div>
                                <div class="sim-node-label">Master 1</div>
                                <div class="sim-node-status">Aguardando...</div>
                            </div>
                            <div class="sim-node" id="master2">
                                <div class="sim-node-icon">🖥️</div>
                                <div class="sim-node-label">Master 2</div>
                                <div class="sim-node-status">Aguardando...</div>
                            </div>
                        </div>
                        
                        <div class="sim-log" id="simLog">
                            <div class="sim-log-entry info">📌 Simulador inicializado. Clique em "Registrar Master" para começar.</div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="card" id="desafio">
                <div class="card-header">
                    <div class="card-icon">🎯</div>
                    <h2 class="card-title">Desafio Prático</h2>
                </div>
                <div class="card-content">
                    <div class="info-box warning">
                        <span class="info-box-icon">💡</span>
                        <div>
                            <div class="info-box-title">Atividade Avaliativa para Sala de Aula</div>
                            <div class="info-box-content">
                                <p>Implemente as melhorias sugeridas abaixo e teste em grupo!</p>
                            </div>
                        </div>
                    </div>
                    
                    <h3 style="color: var(--white); margin: var(--spacing-lg) 0;">📋 Entrega 31/03/2026</h3>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--spacing-lg);">
                        <div style="background: rgba(0,0,0,0.2); padding: var(--spacing-lg); border-radius: var(--radius-md); border-left: 4px solid var(--success);">
                            <h4 style="color: var(--success-light); margin-bottom: var(--spacing-sm);">✅ Nível Básico</h4>
                            <ul style="margin-left: var(--spacing-lg); color: var(--gray-200); font-size: 0.9rem;">
                                <li>Adicionar 3 Masters simultâneos</li>
                                <li>Testar failover derrubando um Master</li>
                                <li>Modificar a contagem de palavras para contagem de caracteres</li>
                            </ul>
                        </div>
                        
                        <div style="background: rgba(0,0,0,0.2); padding: var(--spacing-lg); border-radius: var(--radius-md); border-left: 4px solid var(--warning);">
                            <h4 style="color: var(--warning-light); margin-bottom: var(--spacing-sm);">⚡ Nível Intermediário</h4>
                            <ul style="margin-left: var(--spacing-lg); color: var(--gray-200); font-size: 0.9rem;">
                                <li>Implementar Health Check com heartbeat</li>
                                <li>Adicionar timeout nos sockets</li>
                                <li>Criar log de requisições em arquivo</li>
                            </ul>
                        </div>
                        
                        <div style="background: rgba(0,0,0,0.2); padding: var(--spacing-lg); border-radius: var(--radius-md); border-left: 4px solid var(--info);">
                            <h4 style="color: var(--info-light); margin-bottom: var(--spacing-sm);">🚀 Dicas importantes</h4>
                            <ul style="margin-left: var(--spacing-lg); color: var(--gray-200); font-size: 0.9rem;">
                                <li>Toda aula será apresentado um algoritmo que pode te ajudar</li>
                                <li>Pesquise sobre heartbeat e  sockets</li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <h3 style="color: var(--white); margin: var(--spacing-xl) 0 var(--spacing-lg);">📊 Critérios de Avaliação</h3>
                    
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Critério</th>
                                    <th>Pontos</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Código Funcional</td>
                                    <td><span class="badge badge-success">4 pts</span></td>
                                    <td>Sistema executa sem erros</td>
                                </tr>
                                <tr>
                                    <td>Resiliência</td>
                                    <td><span class="badge badge-success">3 pts</span></td>
                                    <td>Failover funciona corretamente</td>
                                </tr>
                                <tr>
                                    <td>Documentação</td>
                                    <td><span class="badge badge-success">2 pts</span></td>
                                    <td>Código comentado e claro</td>
                                </tr>
                                <tr>
                                    <td>Melhorias</td>
                                    <td><span class="badge badge-success">1 pts</span></td>
                                    <td>Implementação de features extras</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <section class="card" id="aprofundamento">
                <div class="card-header">
                    <div class="card-icon">📚</div>
                    <h2 class="card-title">Tópicos de Aprofundamento</h2>
                </div>
                <div class="card-content">
                    <p>Explore conceitos avançados para evoluir seu conhecimento em sistemas distribuídos:</p>
                    
                    <div class="hint" onclick="toggleHint(this)">
                        <div class="hint-header">
                            <span>🔐 Segurança em Sistemas Distribuídos</span>
                            <span class="hint-icon">▼</span>
                        </div>
                        <div class="hint-content">
                            <p>Em produção, sempre utilize SSL/TLS para criptografar comunicação. Implemente autenticação entre nós e valide certificados. Considere usar mTLS (mutual TLS) para autenticação mútua entre serviços.</p>
                        </div>
                    </div>
                    
                    <div class="hint" onclick="toggleHint(this)">
                        <div class="hint-header">
                            <span>⚖️ Algoritmos de Load Balancing</span>
                            <span class="hint-icon">▼</span>
                        </div>
                        <div class="hint-content">
                            <p>Além do Round-Robin, existem: Least Connections (menor número de conexões ativas), Weighted Round-Robin (pesos diferentes por servidor), IP Hash (mesmo cliente sempre no mesmo servidor), e algoritmos baseados em latência.</p>
                        </div>
                    </div>
                    
                    <div class="hint" onclick="toggleHint(this)">
                        <div class="hint-header">
                            <span>🏥 Health Checks e Service Discovery</span>
                            <span class="hint-icon">▼</span>
                        </div>
                        <div class="hint-content">
                            <p>Implemente heartbeats periódicos para detectar nós mortos proativamente. Use ferramentas como Consul, etcd, ou ZooKeeper para service discovery em produção. Remova nós não responsivos automaticamente da lista de roteamento.</p>
                        </div>
                    </div>
                    
                    <div class="hint" onclick="toggleHint(this)">
                        <div class="hint-header">
                            <span>📈 Escalabilidade Horizontal vs Vertical</span>
                            <span class="hint-icon">▼</span>
                        </div>
                        <div class="hint-content">
                            <p>Horizontal: adicionar mais nós (como fizemos com Masters). Vertical: aumentar recursos de um nó (CPU, RAM). Sistemas distribuídos favorecem escalabilidade horizontal para resiliência e custo. Considere auto-scaling baseado em métricas.</p>
                        </div>
                    </div>
                    
                    <div class="hint" onclick="toggleHint(this)">
                        <div class="hint-header">
                            <span>🔄 Padrões de Resiliência</span>
                            <span class="hint-icon">▼</span>
                        </div>
                        <div class="hint-content">
                            <p>Implemente Circuit Breaker (interrompe chamadas após falhas consecutivas), Retry com backoff exponencial, Bulkhead (isola recursos por serviço), e Timeout em todas as chamadas de rede. Bibliotecas como Polly (.NET) ou resilience4j (Java) implementam esses padrões.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="card" id="resumo">
                <div class="card-header">
                    <div class="card-icon">📝</div>
                    <h2 class="card-title">Resumo Final</h2>
                </div>
                <div class="card-content">
                    <h3 style="color: var(--white); margin-bottom: var(--spacing-lg);">🎯 O Que Aprendemos</h3>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--spacing-lg);">
                        <div style="text-align: center; padding: var(--spacing-lg); background: rgba(0,0,0,0.2); border-radius: var(--radius-md);">
                            <div style="font-size: 2.5rem; margin-bottom: var(--spacing-sm);">🏗️</div>
                            <h4 style="color: var(--secondary-orange-light);">Arquitetura</h4>
                            <p style="color: var(--gray-300); font-size: 0.9rem;">Master-Worker com Load Balancer central</p>
                        </div>
                        <div style="text-align: center; padding: var(--spacing-lg); background: rgba(0,0,0,0.2); border-radius: var(--radius-md);">
                            <div style="font-size: 2.5rem; margin-bottom: var(--spacing-sm);">🔌</div>
                            <h4 style="color: var(--secondary-orange-light);">Comunicação</h4>
                            <p style="color: var(--gray-300); font-size: 0.9rem;">Sockets TCP com threading para concorrência</p>
                        </div>
                        <div style="text-align: center; padding: var(--spacing-lg); background: rgba(0,0,0,0.2); border-radius: var(--radius-md);">
                            <div style="font-size: 2.5rem; margin-bottom: var(--spacing-sm);">🔄</div>
                            <h4 style="color: var(--secondary-orange-light);">Balanceamento</h4>
                            <p style="color: var(--gray-300); font-size: 0.9rem;">Algoritmo Round-Robin com thread-safe</p>
                        </div>
                        <div style="text-align: center; padding: var(--spacing-lg); background: rgba(0,0,0,0.2); border-radius: var(--radius-md);">
                            <div style="font-size: 2.5rem; margin-bottom: var(--spacing-sm);">🛡️</div>
                            <h4 style="color: var(--secondary-orange-light);">Resiliência</h4>
                            <p style="color: var(--gray-300); font-size: 0.9rem;">Failover automático quando Master falha</p>
                        </div>
                    </div>
                    
                    <div class="info-box success" style="margin-top: var(--spacing-xl);">
                        <span class="info-box-icon">🎉</span>
                        <div>
                            <div class="info-box-title">Parabéns! Você completou esta aula!</div>
                            <div class="info-box-content">
                                <p>Agora você tem os fundamentos para construir sistemas distribuídos escaláveis. Pratique os desafios propostos e explore os tópicos de aprofundamento.</p>
                            </div>
                        </div>
                    </div>
                    
                    <h3 style="color: var(--white); margin: var(--spacing-xl) 0 var(--spacing-lg);">📖 Próxima Aula</h3>
                    <div style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(59, 130, 246, 0.05)); padding: var(--spacing-lg); border-radius: var(--radius-md); border: 1px solid rgba(59, 130, 246, 0.3);">
                        <h4 style="color: var(--info-light); margin-bottom: var(--spacing-sm);">🔜 Sistemas Distribuídos - Message Queues</h4>
                        <p style="color: var(--gray-300);">Na próxima aula, aprenderemos sobre filas de mensagens (RabbitMQ, Kafka) para comunicação assíncrona entre serviços, garantindo entrega confiável e desacoplamento temporal entre produtores e consumidores.</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>📚 Sobre Esta Aula</h4>
                <p>Aula interativa sobre Sistemas Distribuídos focada em Load Balancing com Python. Desenvolvida para fins educacionais com exemplos práticos e simulador interativo.</p>
            </div>
            <div class="footer-section">
                <h4>🔗 Recursos Adicionais</h4>
                <ul>
                    <li><a href="#">Documentação Python Sockets</a></li>
                    <li><a href="#">Guia de Threading em Python</a></li>
                    <li><a href="#">Padrões de Sistemas Distribuídos</a></li>
                    <li><a href="#">Repositório do Projeto</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>⚙️ Tecnologias Usadas</h4>
                <ul>
                    <li>Python 3.x</li>
                    <li>Sockets TCP</li>
                    <li>Threading</li>
                    <li>HTML5 / CSS3 / Vanilla JS</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Aula de Sistemas Distribuídos - Load Balancer. Desenvolvido para fins educacionais.</p>
        </div>
    </footer>
    
    <script>
        window.addEventListener('scroll', () => {
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight - windowHeight;
            const scrolled = window.scrollY;
            const progress = (scrolled / documentHeight) * 100;
            document.getElementById('progressBar').style.width = progress + '%';
            updateActiveNav();
        });
        
        function updateActiveNav() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.offsetHeight;
                
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + section.id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });
        
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                btn.parentElement.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                btn.parentElement.nextElementSibling.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                btn.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        function copyCode(btn) {
            const codeBlock = btn.closest('.code-block');
            const code = codeBlock.querySelector('code').innerText;
            
            navigator.clipboard.writeText(code).then(() => {
                btn.classList.add('copied');
                btn.innerHTML = '<span>✅</span> Copiado!';
                
                setTimeout(() => {
                    btn.classList.remove('copied');
                    btn.innerHTML = '<span>📋</span> Copiar';
                }, 2000);
            });
        }
        
        function toggleHint(hint) {
            hint.classList.toggle('open');
        }
        
        document.getElementById('menuToggle').addEventListener('click', () => {
            document.getElementById('sidebar').classList.toggle('open');
        });
        
        let mastersRegistered = 0;
        let requestCount = 0;
        let master1Active = false;
        let master2Active = false;
        
        function addLog(message, type = 'info') {
            const log = document.getElementById('simLog');
            const entry = document.createElement('div');
            entry.className = `sim-log-entry ${type}`;
            entry.textContent = `[${new Date().toLocaleTimeString()}] ${message}`;
            log.appendChild(entry);
            log.scrollTop = log.scrollHeight;
        }
        
        function registerMaster() {
            if (mastersRegistered >= 2) {
                addLog('⚠️ Máximo de 2 Masters já registrados!', 'warning');
                return;
            }
            
            mastersRegistered++;
            const masterNode = document.getElementById(`master${mastersRegistered}`);
            masterNode.classList.add('active');
            masterNode.querySelector('.sim-node-status').textContent = 'Online - Porta: ' + (6000 + mastersRegistered);
            
            if (mastersRegistered === 1) master1Active = true;
            if (mastersRegistered === 2) master2Active = true;
            
            addLog(`✅ Master ${mastersRegistered} registrado no Load Balancer!`, 'success');
        }
        
        function requestRoute() {
            if (mastersRegistered === 0) {
                addLog('❌ Nenhum Master registrado! Registre um Master primeiro.', 'warning');
                return;
            }
            
            requestCount++;
            const selectedMaster = (requestCount % mastersRegistered) + 1;
            
            const lbNode = document.getElementById('lb-node');
            lbNode.classList.add('processing');
            
            addLog(`📡 Worker solicitando rota...`, 'info');
            
            setTimeout(() => {
                lbNode.classList.remove('processing');
                
                document.querySelectorAll('.sim-node[id^="master"]').forEach(m => m.classList.remove('processing'));
                const selectedNode = document.getElementById(`master${selectedMaster}`);
                selectedNode.classList.add('processing');
                
                addLog(`🎯 Rota direcionada para Master ${selectedMaster} (Round-Robin)`, 'success');
                
                setTimeout(() => {
                    selectedNode.classList.remove('processing');
                    addLog(`✅ Tarefa processada com sucesso!`, 'success');
                }, 1000);
            }, 500);
        }
        
        function resetSimulator() {
            mastersRegistered = 0;
            requestCount = 0;
            
            document.getElementById('lb-node').classList.remove('processing');
            document.querySelectorAll('.sim-node[id^="master"]').forEach(m => {
                m.classList.remove('active', 'processing');
                m.querySelector('.sim-node-status').textContent = 'Aguardando...';
            });
            
            document.getElementById('simLog').innerHTML = '<div class="sim-log-entry info">📌 Simulador resetado. Clique em "Registrar Master" para começar.</div>';
            
            addLog('🔄 Simulador resetado!', 'info');
        }
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    document.getElementById('sidebar').classList.remove('open');
                }
            });
        });
        
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.card.visible').classList.add('visible');
            addLog('🚀 Simulador inicializado!', 'success');
        });
    </script>
</body>
</html>
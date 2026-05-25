<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 1: A Matriz de Stacy e o Cenário Crítico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter/400.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter/600.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter/700.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/fira-code/400.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/fira-code/600.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #a5b4fc;
            --info: #3b82f6;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #1e1b4b;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-light: #64748b;
            --text-on-dark: #e2e8f0;
            --code-bg: #1e1e2e;
            --radius-card: 16px;
            --radius-sm: 8px;
            --shadow-card: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-hover: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --font-main: 'Inter', sans-serif;
            --font-code: 'Fira Code', monospace;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font-main);
            background: linear-gradient(135deg, var(--bg-gradient-start), var(--bg-gradient-end));
            color: var(--text-main);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Progress Bar */
        #progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--info));
            width: 0%;
            z-index: 1000;
            transition: width 0.1s;
        }

        /* Layout */
        .layout {
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 2rem;
            height: calc(100vh - 4rem);
            overflow-y: auto;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border-radius: var(--radius-card);
            padding: 1.5rem;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar::-webkit-scrollbar { width: 6px; }
        .sidebar::-webkit-scrollbar-track { background: transparent; }
        .sidebar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 3px; }
        .sidebar h3 { color: var(--text-on-dark); margin-bottom: 1rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; }
        .nav-link {
            display: block;
            padding: 0.6rem 0.8rem;
            color: var(--text-light);
            text-decoration: none;
            border-radius: var(--radius-sm);
            transition: all 0.2s;
            font-size: 0.95rem;
            border: 1px solid transparent;
        }
        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,0.1);
            color: #fff;
            border-color: rgba(255,255,255,0.2);
        }
        .nav-link::before { content: ''; width: 6px; height: 6px; background: var(--primary); border-radius: 50%; display: inline-block; margin-right: 8px; opacity: 0; transition: opacity 0.2s; }
        .nav-link.active::before { opacity: 1; }

        /* Main Content */
        .main-content {
            background: rgba(255,255,255,0.98);
            border-radius: var(--radius-card);
            padding: 2.5rem;
            box-shadow: var(--shadow-card);
            border: 1px solid rgba(255,255,255,0.5);
        }

        /* Header */
        .header { margin-bottom: 2.5rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 1.5rem; }
        .badge { display: inline-block; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; margin-right: 0.5rem; border: 1px solid; }
        .badge-primary { background: #e0e7ff; color: var(--primary-dark); border-color: #c7d2fe; }
        .badge-success { background: #d1fae5; color: #065f46; border-color: #a7f3d0; }
        .badge-warning { background: #fef3c7; color: #92400e; border-color: #fde68a; }
        .title { font-size: 2.5rem; font-weight: 800; color: var(--text-main); margin: 0.75rem 0; background: linear-gradient(to right, var(--primary-dark), var(--info)); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .subtitle { color: var(--text-light); font-size: 1.25rem; font-weight: 500; }

        /* Sections */
        section { margin-bottom: 4rem; opacity: 0; transform: translateY(30px); transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
        section.visible { opacity: 1; transform: translateY(0); }
        h2 { font-size: 1.75rem; color: var(--primary-dark); margin-bottom: 1.25rem; border-left: 5px solid var(--primary); padding-left: 1rem; position: relative; }
        h2::after { content: ''; position: absolute; bottom: -5px; left: 1rem; width: 50px; height: 3px; background: var(--primary-light); border-radius: 2px; }
        h3 { font-size: 1.35rem; margin-bottom: 0.875rem; color: var(--text-main); display: flex; align-items: center; gap: 0.5rem; }
        p { margin-bottom: 1.125rem; color: var(--text-main); font-size: 1.05rem; line-height: 1.75; }
        ul, ol { padding-left: 1.5rem; margin-bottom: 1.25rem; }
        li { margin-bottom: 0.5rem; line-height: 1.65; }

        /* Cards & Grid */
        .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.75rem; margin: 1.75rem 0; }
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin: 2rem 0; }
        .card { background: var(--card-bg); border-radius: var(--radius-card); padding: 1.75rem; box-shadow: var(--shadow-card); transition: transform 0.3s, box-shadow 0.3s; border: 1px solid #e2e8f0; position: relative; overflow: hidden; }
        .card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: var(--primary-light); opacity: 0; transition: opacity 0.3s; }
        .card:hover { transform: translateY(-6px); box-shadow: var(--shadow-hover); border-color: var(--primary-light); }
        .card:hover::before { opacity: 1; }
        .card-icon { width: 52px; height: 52px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem; background: #f8fafc; }
        .icon-x { color: var(--primary); }
        .icon-y { color: var(--info); }
        .icon-z { color: var(--success); }
        .icon-c { color: var(--warning); }

        /* Info Boxes */
        .info-box { padding: 1.25rem 1.5rem; border-radius: var(--radius-sm); margin: 2rem 0; border-left: 5px solid; display: flex; gap: 1rem; align-items: flex-start; transition: all 0.3s; }
        .info-box:hover { transform: translateX(4px); }
        .info-box.success { background: #ecfdf5; border-color: var(--success); color: #064e3b; }
        .info-box.warning { background: #fffbeb; border-color: var(--warning); color: #92400e; }
        .info-box.info { background: #eff6ff; border-color: var(--info); color: #1e3a8a; }
        .info-box.danger { background: #fef2f2; border-color: var(--danger); color: #991b1b; }
        .info-box strong { display: block; margin-bottom: 0.375rem; font-size: 1.05rem; }
        .info-box-icon { font-size: 1.5rem; flex-shrink: 0; margin-top: 2px; }

        /* Tabs */
        .tabs { margin: 2.5rem 0; border: 1px solid #e2e8f0; border-radius: var(--radius-card); overflow: hidden; background: #fff; }
        .tab-headers { display: flex; gap: 0; border-bottom: 1px solid #e2e8f0; background: #f8fafc; overflow-x: auto; }
        .tab-btn { padding: 1rem 1.75rem; background: none; border: none; cursor: pointer; font-family: var(--font-main); font-weight: 600; color: var(--text-light); border-bottom: 3px solid transparent; transition: all 0.2s; white-space: nowrap; flex: 1; min-width: 120px; }
        .tab-btn:hover { background: #f1f5f9; color: var(--primary); }
        .tab-btn.active { color: var(--primary-dark); border-bottom-color: var(--primary); background: #fff; }
        .tab-content { display: none; animation: fadeIn 0.4s ease-out; padding: 2rem; }
        .tab-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        /* Code Blocks */
        .code-block { background: var(--code-bg); border-radius: var(--radius-sm); margin: 2rem 0; overflow: hidden; position: relative; border: 1px solid #313244; box-shadow: var(--shadow-card); }
        .code-header { display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 1.25rem; background: rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.1); }
        .code-lang { color: #a6accd; font-size: 0.85rem; font-family: var(--font-code); font-weight: 600; display: flex; align-items: center; gap: 0.5rem; }
        .code-lang::before { content: ''; width: 10px; height: 10px; border-radius: 50%; background: var(--success); display: inline-block; box-shadow: 0 0 5px var(--success); }
        .copy-btn { background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: #a6accd; padding: 0.375rem 0.875rem; border-radius: 4px; cursor: pointer; font-size: 0.8rem; transition: all 0.2s; font-family: var(--font-main); font-weight: 500; position: relative; }
        .copy-btn:hover { background: rgba(255,255,255,0.2); color: #fff; border-color: rgba(255,255,255,0.4); }
        .copy-btn::after { content: 'Clique para copiar'; position: absolute; top: -32px; right: 0; background: #333; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 0.7rem; opacity: 0; pointer-events: none; transition: opacity 0.2s; white-space: nowrap; z-index: 10; }
        .copy-btn:hover::after { opacity: 1; }
        .code-body { padding: 1.25rem; overflow-x: auto; background: #1e1e2e; }
        .code-body pre { margin: 0; font-family: var(--font-code); font-size: 0.9rem; line-height: 1.6; color: #c3d0e5; tab-size: 4; }
        .code-body .kw { color: #c792ea; }
        .code-body .fn { color: #82aaff; }
        .code-body .str { color: #c3e88d; }
        .code-body .com { color: #676e95; font-style: italic; }
        .code-body .num { color: #f78c6c; }
        .code-body .op { color: #89ddff; }
        .code-body .cls { color: #ffcb6b; }

        /* Table */
        .table-wrap { overflow-x: auto; margin: 2rem 0; border-radius: var(--radius-sm); border: 1px solid #e2e8f0; box-shadow: var(--shadow-card); }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 1rem 1.25rem; text-align: left; border-bottom: 1px solid #e2e8f0; }
        th { background: #f8fafc; font-weight: 700; color: var(--text-main); text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e2e8f0; }
        tr:last-child td { border-bottom: none; }
        tr:hover { background: #f8fafc; }
        td:first-child { font-weight: 600; color: var(--primary-dark); }

        /* Simulator */
        .simulator { background: #f1f5f9; border-radius: var(--radius-card); padding: 2rem; margin: 2.5rem 0; border: 2px dashed #cbd5e1; position: relative; }
        .simulator::before { content: 'SIMULADOR INTERATIVO'; position: absolute; top: -14px; left: 2rem; background: #f1f5f9; padding: 0 0.75rem; color: #64748b; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; }
        .matrix-container { display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 1rem; height: 450px; position: relative; margin-top: 1rem; background: #fff; padding: 1.5rem; border-radius: var(--radius-sm); box-shadow: var(--shadow-card); border: 1px solid #e2e8f0; }
        .quadrant { background: #fafafa; border-radius: var(--radius-sm); border: 2px dashed #e2e8f0; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.5rem; font-weight: 700; color: #cbd5e1; position: relative; transition: all 0.3s; padding: 0.5rem; }
        .quadrant.highlight { border-color: var(--primary); background: #eff6ff; color: var(--primary-dark); transform: scale(1.01); box-shadow: inset 0 0 10px rgba(99, 102, 241, 0.1); }
        .quadrant span { z-index: 1; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; }
        .axis-label { position: absolute; font-size: 0.8rem; font-weight: 700; color: #94a3b8; }
        .axis-x { bottom: -25px; left: 50%; transform: translateX(-50%); }
        .axis-y { left: -35px; top: 50%; transform: translateY(-50%) rotate(-90deg); }
        .scenario-card { padding: 0.6rem 1.25rem; background: var(--primary); color: #fff; border-radius: 8px; cursor: grab; user-select: none; display: flex; align-items: center; gap: 0.5rem; font-size: 0.9rem; font-weight: 500; box-shadow: var(--shadow-card); transition: all 0.2s; border: 1px solid rgba(255,255,255,0.2); z-index: 2; }
        .scenario-card:active { cursor: grabbing; transform: scale(0.98); box-shadow: var(--shadow-hover); }
        .scenario-card .icon { font-size: 1.1rem; }
        .scenario-list { display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center; margin-bottom: 2rem; padding: 1.5rem; background: #fff; border-radius: var(--radius-sm); min-height: 80px; border: 1px solid #e2e8f0; }
        .scenario-card.correct { background: var(--success); border-color: #059669; }
        .scenario-card.wrong { background: var(--danger); border-color: #b91c1c; }
        .sim-controls { text-align: center; margin-top: 1.5rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
        .sim-btn { padding: 0.875rem 2.5rem; border: none; border-radius: var(--radius-sm); cursor: pointer; font-weight: 700; font-size: 1rem; transition: all 0.2s; font-family: var(--font-main); text-transform: uppercase; letter-spacing: 0.5px; }
        .btn-primary { background: var(--primary); color: #fff; box-shadow: 0 4px 6px rgba(99, 102, 241, 0.3); }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-2px); box-shadow: 0 6px 8px rgba(99, 102, 241, 0.4); }
        .btn-secondary { background: #64748b; color: #fff; }
        .btn-secondary:hover { background: #475569; transform: translateY(-2px); }
        .sim-feedback { text-align: center; margin-top: 1.5rem; font-weight: 700; padding: 1rem 1.5rem; border-radius: var(--radius-sm); display: none; font-size: 1.1rem; animation: fadeIn 0.5s; }

        /* Hints */
        .hint { margin: 1.5rem 0; border: 1px solid #e2e8f0; border-radius: var(--radius-sm); overflow: hidden; background: #fff; box-shadow: var(--shadow-card); }
        .hint-header { padding: 1rem 1.25rem; background: #f8fafc; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; color: var(--text-main); transition: background 0.2s; }
        .hint-header:hover { background: #f1f5f9; }
        .hint-body { padding: 0 1.25rem; max-height: 0; overflow: hidden; transition: max-height 0.4s ease-out, padding 0.4s; background: #fff; color: var(--text-light); }
        .hint.open .hint-body { max-height: 800px; padding: 1.25rem; }
        .hint-icon { transition: transform 0.3s; color: var(--primary); }
        .hint.open .hint-icon { transform: rotate(180deg); }

        /* Image */
        .illustration { width: 100%; max-width: 850px; border-radius: var(--radius-card); box-shadow: var(--shadow-hover); margin: 2.5rem auto; display: block; border: 1px solid #e2e8f0; }

        /* Checklist */
        .checklist { list-style: none; padding: 0; }
        .checklist li { position: relative; padding-left: 2rem; margin-bottom: 1rem; cursor: pointer; user-select: none; color: var(--text-main); }
        .checklist li::before { content: '⬜'; position: absolute; left: 0; top: 2px; transition: all 0.2s; }
        .checklist li.checked { text-decoration: line-through; color: var(--text-light); }
        .checklist li.checked::before { content: '✅'; }

        /* Footer */
        .footer { text-align: center; padding: 2.5rem 2rem; color: var(--text-on-dark); font-size: 0.95rem; border-top: 1px solid rgba(255,255,255,0.1); margin-top: 3rem; background: rgba(15, 23, 42, 0.5); border-radius: var(--radius-card); }
        .footer a { color: var(--primary-light); text-decoration: none; font-weight: 600; }
        .footer a:hover { text-decoration: underline; }

        /* Responsive */
        @media (max-width: 968px) {
            .layout { grid-template-columns: 1fr; padding: 1rem; gap: 1.5rem; }
            .sidebar { position: relative; top: 0; height: auto; order: 2; margin-top: 2rem; }
            .main-content { order: 1; padding: 1.5rem; }
            .matrix-container { height: 350px; }
            .axis-y { left: -10px; font-size: 0.7rem; }
        }
        @media (max-width: 640px) {
            .title { font-size: 2rem; }
            .grid-2, .grid-3 { grid-template-columns: 1fr; }
            .tab-headers { flex-direction: column; }
            .tab-btn { border-bottom: none; border-left: 3px solid transparent; text-align: left; }
            .tab-btn.active { border-bottom: none; border-left-color: var(--primary); }
            .matrix-container { grid-template-columns: 1fr; grid-template-rows: repeat(4, 1fr); height: auto; gap: 0.5rem; }
            .axis-label { display: none; }
            .sim-controls { flex-direction: column; }
        }
    </style>
</head>
<body>
    <div id="progress-bar"></div>
    <div class="layout">
        <aside class="sidebar">
            <h3>📚 Navegação</h3>
            <nav id="sidebar-nav">
                <a href="#intro" class="nav-link">1. Introdução</a>
                <a href="#contexto" class="nav-link">2. Contexto e Origem</a>
                <a href="#eixos" class="nav-link">3. Eixos da Matriz</a>
                <a href="#zonas" class="nav-link">4. As 4 Zonas</a>
                <a href="#metodologias" class="nav-link">5. Mapeamento de Métodos</a>
                <a href="#exemplos" class="nav-link">6. Exemplos Detalhados</a>
                <a href="#simulador" class="nav-link">7. Simulador Avançado</a>
                <a href="#workshop" class="nav-link">8. Workshop Prático</a>
                <a href="#checklist" class="nav-link">9. Checklist de Decisão</a>
                <a href="#resumo" class="nav-link">10. Resumo Final</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header" id="intro">
                <span class="badge badge-primary">Módulo 1</span>
                <span class="badge badge-success">Gestão de Projetos</span>
                <h1 class="title">Onde estamos pisando?</h1>
                <p class="subtitle">A Matriz de Stacy e o Cenário Crítico</p>
                <div class="grid-2" style="margin-top:2rem;">
                    <div class="info-box info">
                        <div class="info-box-icon">🎯</div>
                        <div><strong>Objetivos de Aprendizado</strong>Compreender a Matriz de Stacy, identificar zonas de complexidade, mapear metodologias adequadas e aplicar métodos de gestão contextualizados ao projeto.</div>
                    </div>
                    <div class="info-box warning">
                        <div class="info-box-icon">⏱️</div>
                        <div><strong>Duração: 120 Minutos</strong>Nível: Básico/Intermediário | Pré-requisitos: Noções básicas de gestão de projetos e desenvolvimento de software.</div>
                    </div>
                </div>
            </header>

            <section id="contexto">
                <h2>1. Contexto e Origem</h2>
                <p><strong>Nem todo projeto é igual.</strong> Um projeto de Logística para entrega em 24h, com rotas fixas e SLAs rígidos, é fundamentalmente diferente do desenvolvimento de um novo App de IA Generativa, onde o mercado ainda está sendo descoberto.</p>
                <p>A <strong>Matriz de Stacy</strong> (também associada a modelos de complexidade de projetos como o de Ralph D. Stacey) nos oferece uma lente poderosa para olhar para o nosso trabalho antes de definir processos. Ela nos ajuda a responder:</p>
                <ul class="checklist" id="context-checklist">
                    <li>Quanto sabemos sobre a tecnologia que vamos usar?</li>
                    <li>Quão claro está o que o cliente realmente precisa?</li>
                    <li>Qual o risco de mudar o escopo no meio do caminho?</li>
                    <li>Estamos lidando com problemas complicados ou caóticos?</li>
                </ul>
                <p>Ignorar esse mapeamento é como navegar sem bússola. Muitas organizações falham ao aplicar metodologias "de livro" sem considerar a natureza intrínseca do projeto. Este módulo visa evitar esse erro clássico.</p>
            </section>

            <section id="eixos">
                <h2>2. Entendendo os Eixos da Matriz</h2>
                <div class="grid-2">
                    <div class="card">
                        <div class="card-icon icon-x">🛠️</div>
                        <h3>Eixo X: Tecnologia</h3>
                        <p>Representa o nível de familiaridade e maturidade da equipe com as ferramentas, linguagens e arquiteturas necessárias.</p>
                        <ul style="padding-left:1.25rem; margin-top:0.75rem;">
                            <li><strong>Conhecido:</strong> Stack madura, documentação rica, expertise interna comprovada. Ex: CRUD em Java/Spring.</li>
                            <li><strong>Incerto:</strong> Novas bibliotecas, PoCs, integrações com sistemas legados obscuros, tecnologia emergente. Ex: Implementação de LLMs locais.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-icon icon-y">📋</div>
                        <h3>Eixo Y: Requisitos</h3>
                        <p>Representa a clareza, estabilidade e definibilidade das necessidades do negócio ou do usuário final.</p>
                        <ul style="padding-left:1.25rem; margin-top:0.75rem;">
                            <li><strong>Claros:</strong> Escopo detalhado, regras de negócio estáveis, contratos fixos, compliance regulatório. Ex: Sistema de Folha de Pagamento.</li>
                            <li><strong>Ambíguos:</strong> MVP a ser validado, mercado volátil, necessidade de feedback contínuo, "Descobriremos no caminho". Ex: Novo Produto SaaS B2C.</li>
                        </ul>
                    </div>
                </div>

                <div class="hint">
                    <div class="hint-header">
                        <span>💡 Pergunta Chave para Diagnóstico</span>
                        <span class="hint-icon">▼</span>
                    </div>
                    <div class="hint-body">
                        <p>Antes de iniciar, pergunte à equipe técnica: "Se o cliente mudar um requisito crítico na semana 10, nosso custo de mudança é baixo ou proibitivo?" Se for baixo, você tende ao eixo Y baixo. Se for proibitivo, você está no eixo Y alto. Combine com a pergunta sobre tecnologia: "Temos alguém que já fez isso antes?" Se sim, eixo X alto.</p>
                    </div>
                </div>
            </section>

            <section id="zonas">
                <h2>3. As 4 Zonas da Matriz</h2>
                <p>A interseção dos eixos cria quatro quadrantes distintos, cada um demandando uma postura de gestão diferente:</p>
                <div class="grid-2">
                    <div class="card">
                        <h3><span style="color:var(--success);">●</span> Zona Simples</h3>
                        <p><em>(Requisitos Claros + Tecnologia Conhecida)</em></p>
                        <p>Projetos repetitivos, com baixo risco. O foco é eficiência e velocidade. Processos devem ser leves e automatizados.</p>
                        <p style="font-size:0.9rem; color:var(--text-light);"><strong>Ex:</strong> Site institucional, atualização de versão de biblioteca, relatórios padrão.</p>
                    </div>
                    <div class="card">
                        <h3><span style="color:var(--warning);">●</span> Zona Complicada</h3>
                        <p><em>(Requisitos Claros + Tecnologia Incerta)</em></p>
                        <p>Projetos que exigem expertise e análise. Sabemos o que queremos, mas não sabemos exatamente como fazer sem estudo. Requer especialistas e planejamento técnico.</p>
                        <p style="font-size:0.9rem; color:var(--text-light);"><strong>Ex:</strong> Migração de banco de dados legado, Integração com API governamental complexa.</p>
                    </div>
                    <div class="card">
                        <h3><span style="color:var(--info);">●</span> Zona Complexa</h3>
                        <p><em>(Requisitos Ambíguos + Tecnologia Conhecida)</em></p>
                        <p>O cenário é imprevisível. A tecnologia é dominada, mas o produto precisa ser validado. Requer iteração rápida, feedback de usuários e adaptação constante.</p>
                        <p style="font-size:0.9rem; color:var(--text-light);"><strong>Ex:</strong> Novo feature de engajamento, app de mercado competitivo.</p>
                    </div>
                    <div class="card">
                        <h3><span style="color:var(--danger);">●</span> Zona Caótica</h3>
                        <p><em>(Requisitos Ambíguos + Tecnologia Incerta)</em></p>
                        <p>Alto risco e incerteza total. É aqui que Startups inovadoras vivem. Processos rígidos falham. A única saída é ação rápida, aprendizado contínuo e pivô.</p>
                        <p style="font-size:0.9rem; color:var(--text-light);"><strong>Ex:</strong> App de IA para nicho inexistente, solução para problema de mercado não validado.</p>
                    </div>
                </div>

                <img src="https://image.qwenlm.ai/public_source/4efae8df-fa2e-4caa-a99b-7d99a425d830/1d20b85e5-bcf0-4eec-8adf-8b9edb54d56c.png" alt="Diagrama da Matriz de Stacy mostrando os quatro quadrantes: Simples, Complicado, Complexo e Caos, com os eixos Tecnologia e Requisitos." class="illustration">
            </section>

            <section id="metodologias">
                <h2>4. Mapeamento de Metodologias</h2>
                <p>Como escolher o método certo? A tabela abaixo relaciona as zonas da Matriz com abordagens de gestão recomendadas e anti-padrões a serem evitados:</p>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Zona</th>
                                <th>Método Ideal</th>
                                <th>Foco Principal</th>
                                <th>⚠️ Anti-padrão a Evitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Simples</td>
                                <td>Kanban, Lean, Automação</td>
                                <td>Eficiência, Throughput</td>
                                <td>Burocracia excessiva, reuniões longas</td>
                            </tr>
                            <tr>
                                <td>Complicada</td>
                                <td>Waterfall, PRINCE2, V-Model</td>
                                <td>Planejamento, Análise, Risco</td>
                                <td>Improviso, falta de documentação técnica</td>
                            </tr>
                            <tr>
                                <td>Complexa</td>
                                <td>Scrum, Agile, Lean Startup</td>
                                <td>Iteração, Feedback, Valor</td>
                                <td>Escopo fixo rígido, ignorar métricas de uso</td>
                            </tr>
                            <tr>
                                <td>Caótica</td>
                                <td>Extreme Programming (XP), Action First</td>
                                <td>Sobrevivência, Pivô, Aprendizado</td>
                                <td>Tentar planejar 6 meses à frente, perfeccionismo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="exemplos">
                <h2>5. Exemplos Práticos por Contexto</h2>
                <p>Abaixo, exploramos cenários reais para solidificar o entendimento. Navegue pelas abas para ver como a matriz se aplica em diferentes indústrias:</p>
                <div class="tabs">
                    <div class="tab-headers">
                        <button class="tab-btn active" data-tab="startup">🚀 Startups Tech</button>
                        <button class="tab-btn" data-tab="enterprise">🏢 Enterprise/Bancos</button>
                        <button class="tab-btn" data-tab="gov">🏛️ Setor Público</button>
                        <button class="tab-btn" data-tab="agency">🎨 Agências Digitais</button>
                    </div>
                    <div class="tab-content active" id="tab-startup">
                        <h3>Cenário: Startup de IA Generativa (Seed Stage)</h3>
                        <p><strong>Posição na Matriz:</strong> Caos / Complexo</p>
                        <p><strong>Justificativa:</strong> Requisitos mudam semanalmente com base em testes A/B. Tecnologia envolve modelos não-testados em produção com latência crítica.</p>
                        <p><strong>Estratégia:</strong> Sprints de 1 semana, deploy contínuo, métricas de engajamento reais, pivô rápido se necessário.</p>
                    </div>
                    <div class="tab-content" id="tab-enterprise">
                        <h3>Cenário: Core Bancário Legacy (Mainframe)</h3>
                        <p><strong>Posição na Matriz:</strong> Complicado</p>
                        <p><strong>Justificativa:</strong> Requisitos regulatórios fixos e auditáveis. Tecnologia antiga, mas bem conhecida por especialistas. O risco de falha é catastrófico.</p>
                        <p><strong>Estratégia:</strong> Waterfall com fases de teste rigorosas, gestão de risco pesada, documentação extensa para compliance.</p>
                    </div>
                    <div class="tab-content" id="tab-gov">
                        <h3>Cenário: Portal de Serviços ao Cidadão</h3>
                        <p><strong>Posição na Matriz:</strong> Complexo</p>
                        <p><strong>Justificativa:</strong> Tecnologia web padrão, mas requisitos mudam com leis novas e pressão política. Necessidade de validar usabilidade com população diversa.</p>
                        <p><strong>Estratégia:</strong> Híbrido. Backend estruturado, Frontend ágil com testes de usabilidade frequentes.</p>
                    </div>
                    <div class="tab-content" id="tab-agency">
                        <h3>Cenário: Landing Page para Campanha de Marketing</h3>
                        <p><strong>Posição na Matriz:</strong> Simples</p>
                        <p><strong>Justificativa:</strong> Requisitos claros (copy, design, formulário). Tecnologia conhecida (CMS, HTML/CSS). Prazo curto e entrega única.</p>
                        <p><strong>Estratégia:</strong> Kanban simples, checklist de deploy, automação de testes básicos.</p>
                    </div>
                </div>
            </section>

            <section id="simulador">
                <h2>6. Simulador Avançado</h2>
                <p>Teste seu conhecimento! Arraste os cenários para o quadrante correto. O sistema avaliará sua decisão com base nos critérios da Matriz de Stacy.</p>
                
                <div class="simulator">
                    <div class="scenario-list" id="scenario-pool">
                        <div class="scenario-card" data-zone="caos"><span class="icon">🧪</span> App MVP com IA Nova</div>
                        <div class="scenario-card" data-zone="simples"><span class="icon">🌐</span> Site Institucional</div>
                        <div class="scenario-card" data-zone="complicado"><span class="icon">🔄</span> Migração ERP Legacy</div>
                        <div class="scenario-card" data-zone="complexo"><span class="icon">📱</span> Novo Feature Social</div>
                        <div class="scenario-card" data-zone="simples"><span class="icon">🛡️</span> Manutenção Corretiva</div>
                        <div class="scenario-card" data-zone="complicado"><span class="icon">🏛️</span> Integração API Gov</div>
                        <div class="scenario-card" data-zone="caos"><span class="icon">📉</span> Pivot de Mercado Urgente</div>
                        <div class="scenario-card" data-zone="complexo"><span class="icon">🛒</span> E-commerce Personalizado</div>
                    </div>

                    <div class="matrix-container" id="matrix-grid">
                        <div class="quadrant" data-quadrant="complicado">
                            <span>📐 Complicado</span>
                            <span class="axis-label axis-y">Requisitos Claros</span>
                        </div>
                        <div class="quadrant" data-quadrant="simples">
                            <span>✅ Simples</span>
                        </div>
                        <div class="quadrant" data-quadrant="caos">
                            <span>🔥 Caos / Complexo</span>
                        </div>
                        <div class="quadrant" data-quadrant="complexo">
                            <span>🌀 Complexo</span>
                            <span class="axis-label axis-x">Tecnologia Conhecida →</span>
                        </div>
                    </div>
                    
                    <div class="sim-feedback" id="sim-feedback"></div>
                    <div class="sim-controls">
                        <button id="check-btn" class="sim-btn btn-primary">Validar Posicionamento</button>
                        <button id="reset-btn" class="sim-btn btn-secondary">Reiniciar Simulação</button>
                    </div>
                </div>
            </section>

            <section id="workshop">
                <h2>7. Workshop Prático: Mapeamento do Seu Projeto</h2>
                <p>Este exercício leva cerca de <strong>30 minutos</strong> e deve ser feito individualmente ou em dupla. Siga o roteiro:</p>
                <div class="card" style="border-left:4px solid var(--warning);">
                    <h3>📝 Roteiro da Atividade</h3>
                    <ol style="margin-top:1rem;">
                        <li><strong>Escolha:</strong> Selecione um projeto atual ou recente da sua vida profissional.</li>
                        <li><strong>Avalie a Tecnologia (0-10):</strong> 0 = Nunca vi, 10 = Sou expert. Média da equipe.</li>
                        <li><strong>Avalie Requisitos (0-10):</strong> 0 = Ideia vaga, 10 = Contrato assinado com escopo fechado.</li>
                        <li><strong>Posicione:</strong> Marque na matriz mentalmente ou em papel.</li>
                        <li><strong>Decida:</strong> Qual método você usaria? Waterfall? Scrum? Kanban? Híbrido? Justifique.</li>
                        <li><strong>Compare:</strong> O método usado na realidade foi o ideal? O que faltou?</li>
                    </ol>
                    <div class="info-box success">
                        <div class="info-box-icon">✅</div>
                        <div><strong>Critério de Sucesso</strong>Você consegue justificar a escolha do método com base nas coordenadas da matriz, demonstrando consciência situacional.</div>
                    </div>
                </div>
            </section>

            <section id="checklist">
                <h2>8. Checklist de Decisão Rápida</h2>
                <p>Use este checklist antes de definir o framework do seu projeto:</p>
                <div class="grid-2">
                    <div class="card">
                        <h3>Para Projetos Ágeis</h3>
                        <ul class="checklist" id="agile-checklist">
                            <li>Requisitos tendem a mudar?</li>
                            <li>Cliente está disponível para feedback?</li>
                            <li>Equipe é cross-funcional e auto-gerida?</li>
                            <li>Podemos entregar valor em pedaços pequenos?</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>Para Projetos Tradicionais</h3>
                        <ul class="checklist" id="trad-checklist">
                            <li>Escopo é fixo e contratual?</li>
                            <li>Conformidade regulatória é crítica?</li>
                            <li>Tecnologia é madura e estável?</li>
                            <li>Cliente não participa no dia a dia?</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="aprofundamento">
                <h2>9. Aprofundamento Técnico: Roteador de Projetos</h2>
                <p>Em ambientes de DevOps modernos, podemos implementar uma "Engine de Decisão" simples para sugerir pipelines baseados na matriz. Veja um exemplo de implementação:</p>
                
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">Python</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                    </div>
                    <div class="code-body">
<pre><code><span class="com"># Configuração dinâmica de pipeline baseada na Matriz de Stacy</span>
<span class="kw">class</span> <span class="cls">ProjectRouter</span>:
    <span class="str">"""Classifica projetos e sugere estratégias de gestão."""</span>

    <span class="kw">def</span> <span class="fn">__init__</span>(self, tech_certainty: <span class="cls">float</span>, req_stability: <span class="cls">float</span>):
        <span class="com"># Normaliza entradas para 0.0 a 1.0</span>
        self.tech = <span class="fn">max</span>(<span class="num">0.0</span>, <span class="fn">min</span>(tech_certainty, <span class="num">1.0</span>))
        self.req  = <span class="fn">max</span>(<span class="num">0.0</span>, <span class="fn">min</span>(req_stability, <span class="num">1.0</span>))

    <span class="kw">def</span> <span class="fn">get_strategy</span>(self) -> <span class="cls">str</span>:
        <span class="com"># Limiares para classificação</span>
        <span class="kw">if</span> self.tech > <span class="num">0.7</span> <span class="kw">and</span> self.req > <span class="num">0.7</span>:
            <span class="kw">return</span> <span class="str">"Waterfall/Traditional"</span>
        <span class="kw">elif</span> self.tech < <span class="num">0.4</span> <span class="kw">and</span> self.req < <span class="num">0.4</span>:
            <span class="kw">return</span> <span class="str">"Agile/Lean Startup"</span>
        <span class="kw">elif</span> self.req > <span class="num">0.7</span>:
            <span class="kw">return</span> <span class="str">"Engineering-Heavy"</span>
        <span class="kw">else</span>:
            <span class="kw">return</span> <span class="str">"Hybrid/Adaptive"</span>

    <span class="kw">def</span> <span class="fn">configure_pipeline</span>(self) -> <span class="cls">dict</span>:
        strategy = self.get_strategy()
        config = {<span class="str">"strategy"</span>: strategy}
        
        <span class="com"># Lógica de provisionamento de ambiente</span>
        <span class="kw">if</span> <span class="str">"Agile"</span> <span class="kw">in</span> strategy:
            config[<span class="str">"ci"</span>] = <span class="str">"Trunk-based + Feature Flags"</span>
            config[<span class="str">"review"</span>] = <span class="str">"Peer Review Rápido"</span>
        <span class="kw">elif</span> <span class="str">"Traditional"</span> <span class="kw">in</span> strategy:
            config[<span class="str">"ci"</span>] = <span class="str">"Gate-based + Staging Longo"</span>
            config[<span class="str">"review"</span>] = <span class="str">"Formal Audit"</span>
            
        <span class="kw">print</span>(<span class="str">f"Pipeline configurado para: {strategy}"</span>)
        <span class="kw">return</span> config

<span class="com"># Exemplo de uso</span>
router = <span class="cls">ProjectRouter</span>(tech_certainty=<span class="num">0.3</span>, req_stability=<span class="num">0.2</span>)
result = router.configure_pipeline()</code></pre>
                    </div>
                </div>
            </section>

            <section id="resumo">
                <h2>10. Resumo Final e Próximos Passos</h2>
                <div class="grid-2">
                    <div class="card">
                        <h3>📝 Recapitulação do Módulo</h3>
                        <ul style="padding-left:1.2rem;">
                            <li>A Matriz de Stacy cruza <strong>Tecnologia</strong> vs <strong>Requisitos</strong>.</li>
                            <li>Projetos não são iguais: contexto define processo.</li>
                            <li>Zona de Caos exige agilidade extrema; Zona Simples exige eficiência.</li>
                            <li>Evite aplicar "receitas de bolo" sem mapear o terreno.</li>
                            <li>O mapeamento deve ser feito no kick-off e revisado periodicamente.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>🚀 Próximos Passos</h3>
                        <ul style="padding-left:1.2rem;">
                            <li>Revise o Desafio Prático e compartilhe com a equipe.</li>
                            <li><strong>Módulo 2:</strong> Métricas de Saúde para cada Quadrante.</li>
                            <li><strong>Módulo 3:</strong> Transição de Zonas (Como sair do Caos?).</li>
                            <li>Leia "Cynefin Framework" para aprofundar teoria de complexidade.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <p>© 2024 Curso Interativo de Gestão de Projetos Avançada | Criado com  para aprendizado contínuo.</p>
                <p style="margin-top:0.5rem; font-size:0.8rem; opacity:0.8;">Design System: Inter / Fira Code | Vanilla JS / CSS3 | 120 min Duração</p>
            </footer>
        </main>
    </div>

    <script>
        // Progress Bar
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('progress-bar').style.width = scrolled + '%';
            
            // Active Nav Link
            const sections = document.querySelectorAll('section, header');
            const navLinks = document.querySelectorAll('.nav-link');
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Scroll Animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.05 });

        document.querySelectorAll('section').forEach(sec => observer.observe(sec));

        // Tabs
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.dataset.tab;
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                btn.classList.add('active');
                document.getElementById('tab-' + tabId).classList.add('active');
            });
        });

        // Copy Code
        function copyCode(btn) {
            const code = btn.closest('.code-block').querySelector('pre').innerText;
            navigator.clipboard.writeText(code).then(() => {
                const originalText = btn.innerText;
                btn.innerText = 'Copiado!';
                btn.style.background = 'var(--success)';
                btn.style.color = '#fff';
                btn.style.borderColor = 'var(--success)';
                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.style.background = '';
                    btn.style.color = '';
                    btn.style.borderColor = '';
                }, 2000);
            });
        }

        // Hints
        document.querySelectorAll('.hint-header').forEach(header => {
            header.addEventListener('click', () => {
                header.parentElement.classList.toggle('open');
            });
        });

        // Checklists
        document.querySelectorAll('.checklist li').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('checked');
            });
        });

        // Simulator Logic
        const pool = document.getElementById('scenario-pool');
        const matrix = document.getElementById('matrix-grid');
        let draggedItem = null;

        pool.addEventListener('dragstart', (e) => {
            draggedItem = e.target.closest('.scenario-card');
            if(draggedItem) {
                e.dataTransfer.setData('text/plain', draggedItem.dataset.zone);
                setTimeout(() => draggedItem.style.opacity = '0.5', 0);
            }
        });

        pool.addEventListener('dragend', (e) => {
            if(draggedItem) draggedItem.style.opacity = '1';
            draggedItem = null;
        });

        matrix.addEventListener('dragover', (e) => {
            e.preventDefault();
            const quadrant = e.target.closest('.quadrant');
            if (quadrant) {
                matrix.querySelectorAll('.quadrant').forEach(q => q.classList.remove('highlight'));
                quadrant.classList.add('highlight');
            }
        });

        matrix.addEventListener('dragleave', (e) => {
            const quadrant = e.target.closest('.quadrant');
            if (quadrant) quadrant.classList.remove('highlight');
        });

        matrix.addEventListener('drop', (e) => {
            e.preventDefault();
            const quadrant = e.target.closest('.quadrant');
            if (quadrant && draggedItem) {
                quadrant.classList.remove('highlight');
                quadrant.appendChild(draggedItem);
                draggedItem.style.opacity = '1';
                draggedItem.style.cursor = 'pointer';
            }
        });

        // Fallback for touch/mobile (click to move)
        document.querySelectorAll('.scenario-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (this.parentElement.id === 'scenario-pool') {
                    // Move to first quadrant for demo
                    const q = document.querySelector('.quadrant[data-quadrant="caos"]');
                    if(q) q.appendChild(this);
                } else {
                    pool.appendChild(this);
                }
            });
        });

        document.getElementById('check-btn').addEventListener('click', () => {
            let correct = 0;
            let total = document.querySelectorAll('.scenario-card').length;
            
            document.querySelectorAll('.scenario-card').forEach(card => {
                const zone = card.dataset.zone;
                const quadrant = card.parentElement;
                const quadrantZone = quadrant.dataset.quadrant;
                
                card.classList.remove('correct', 'wrong');
                
                // Mapping logic:
                // Caos matches Caos/Complexo
                // Simples matches Simples
                // Complicado matches Complicado
                // Complexo matches Complexo
                if (quadrantZone && zone === quadrantZone) {
                    correct++;
                    card.classList.add('correct');
                } else if (quadrantZone) {
                    card.classList.add('wrong');
                }
            });

            const feedback = document.getElementById('sim-feedback');
            feedback.style.display = 'block';
            if (correct === total) {
                feedback.style.background = '#d1fae5';
                feedback.style.color = '#065f46';
                feedback.innerHTML = `🎉 Excelente! ${correct}/${total} projetos posicionados corretamente! Você domina a Matriz de Stacy.`;
            } else {
                feedback.style.background = '#fee2e2';
                feedback.style.color = '#991b1b';
                feedback.innerHTML = `⚠️ ${correct}/${total} corretos. Verifique os itens em vermelho e tente novamente. Lembre-se: Tecnologia vs Requisitos.`;
            }
        });

        document.getElementById('reset-btn').addEventListener('click', () => {
            document.querySelectorAll('.scenario-card').forEach(card => {
                pool.appendChild(card);
                card.classList.remove('correct', 'wrong');
                card.style.opacity = '1';
            });
            document.getElementById('sim-feedback').style.display = 'none';
        });
    </script>
</body>
</html>


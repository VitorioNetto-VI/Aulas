<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 2: Do Cascata ao Scrum - O Peso da Escolha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter/400.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter/600.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter/700.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter/800.css">
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
            --purple-dark: #1e1b4b;
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
            --border-dark: 1px solid rgba(255,255,255,0.2);
            --border-light: 1px solid #e2e8f0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font-main);
            background: linear-gradient(135deg, var(--bg-gradient-start), var(--bg-gradient-end));
            color: var(--text-main);
            line-height: 1.7;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.4); }

        /* Progress Bar */
        #progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--info));
            width: 0%;
            z-index: 1000;
            transition: width 0.1s linear;
        }

        /* Layout */
        .layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2.5rem;
            max-width: 1400px;
            margin: 0 auto;
            padding: 2.5rem;
        }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 2.5rem;
            height: calc(100vh - 5rem);
            overflow-y: auto;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border-radius: var(--radius-card);
            padding: 2rem;
            border: var(--border-dark);
        }
        .sidebar h3 { color: var(--text-on-dark); margin-bottom: 1.5rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1.5px; opacity: 0.8; }
        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #94a3b8;
            text-decoration: none;
            border-radius: var(--radius-sm);
            transition: all 0.2s;
            font-size: 0.95rem;
            margin-bottom: 0.25rem;
        }
        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,0.1);
            color: #fff;
            transform: translateX(4px);
        }
        .nav-link::before { content: ''; width: 6px; height: 6px; background: var(--primary); border-radius: 50%; display: inline-block; margin-right: 10px; opacity: 0; transition: opacity 0.2s; }
        .nav-link.active::before { opacity: 1; box-shadow: 0 0 5px var(--primary); }

        /* Main Content */
        .main-content {
            background: var(--card-bg);
            border-radius: var(--radius-card);
            padding: 3rem;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            border: var(--border-light);
        }

        /* Header */
        .header { margin-bottom: 3rem; padding-bottom: 2rem; border-bottom: 2px solid #f1f5f9; position: relative; }
        .badge { display: inline-flex; align-items: center; padding: 0.25rem 0.85rem; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; margin-right: 0.75rem; border: 1px solid; background: #f8fafc; }
        .badge-primary { color: var(--primary-dark); border-color: #c7d2fe; background: #e0e7ff; }
        .badge-success { color: #065f46; border-color: #a7f3d0; background: #d1fae5; }
        .badge-warning { color: #92400e; border-color: #fde68a; background: #fef3c7; }
        .title { font-size: 2.75rem; font-weight: 800; color: var(--text-main); margin: 1rem 0 0.5rem 0; letter-spacing: -0.02em; background: linear-gradient(to right, var(--primary-dark), var(--info)); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .subtitle { color: var(--text-light); font-size: 1.35rem; font-weight: 400; max-width: 800px; }

        /* Sections */
        section { margin-bottom: 5rem; opacity: 0; transform: translateY(30px); transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
        section.visible { opacity: 1; transform: translateY(0); }
        h2 { font-size: 2rem; color: var(--primary-dark); margin-bottom: 1.5rem; padding-left: 1.25rem; border-left: 5px solid var(--primary); position: relative; }
        h2::after { content: ''; position: absolute; bottom: -8px; left: 1.25rem; width: 60px; height: 3px; background: var(--primary-light); border-radius: 2px; }
        h3 { font-size: 1.5rem; margin-bottom: 1rem; color: var(--text-main); display: flex; align-items: center; gap: 0.75rem; }
        p { margin-bottom: 1.25rem; color: var(--text-main); font-size: 1.05rem; line-height: 1.8; }
        ul, ol { padding-left: 1.75rem; margin-bottom: 1.5rem; }
        li { margin-bottom: 0.75rem; line-height: 1.7; }
        strong { color: var(--text-main); font-weight: 700; }

        /* Cards & Grid */
        .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; margin: 2.5rem 0; }
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin: 2.5rem 0; }
        .card { background: var(--card-bg); border-radius: var(--radius-card); padding: 2rem; box-shadow: var(--shadow-card); transition: transform 0.3s, box-shadow 0.3s; border: 1px solid #e2e8f0; position: relative; overflow: hidden; }
        .card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: var(--primary-light); opacity: 0; transition: opacity 0.3s; }
        .card:hover { transform: translateY(-6px); box-shadow: var(--shadow-hover); border-color: var(--primary-light); }
        .card:hover::before { opacity: 1; }
        .card-icon { width: 56px; height: 56px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 1.5rem; background: #f8fafc; border: 1px solid #e2e8f0; }
        .icon-x { color: var(--primary); }
        .icon-y { color: var(--info); }
        .icon-z { color: var(--success); }
        .icon-c { color: var(--warning); }

        /* Info Boxes */
        .info-box { padding: 1.5rem; border-radius: var(--radius-sm); margin: 2.5rem 0; border-left: 5px solid; display: flex; gap: 1.25rem; align-items: flex-start; transition: all 0.3s; background: #fff; }
        .info-box:hover { transform: translateX(5px); }
        .info-box.success { background: #f0fdf4; border-color: var(--success); color: #064e3b; border: 1px solid #bbf7d0; }
        .info-box.warning { background: #fffbeb; border-color: var(--warning); color: #92400e; border: 1px solid #fde68a; }
        .info-box.info { background: #eff6ff; border-color: var(--info); color: #1e3a8a; border: 1px solid #bfdbfe; }
        .info-box.danger { background: #fef2f2; border-color: var(--danger); color: #991b1b; border: 1px solid #fecaca; }
        .info-box strong { display: block; margin-bottom: 0.375rem; font-size: 1.1rem; color: inherit; }
        .info-box-icon { font-size: 1.75rem; flex-shrink: 0; margin-top: 2px; }

        /* Tabs */
        .tabs { margin: 3rem 0; border: 1px solid #e2e8f0; border-radius: var(--radius-card); overflow: hidden; background: #fff; box-shadow: var(--shadow-card); }
        .tab-headers { display: flex; gap: 0; border-bottom: 1px solid #e2e8f0; background: #f8fafc; overflow-x: auto; }
        .tab-btn { padding: 1.125rem 2rem; background: none; border: none; cursor: pointer; font-family: var(--font-main); font-weight: 600; color: #64748b; border-bottom: 3px solid transparent; transition: all 0.2s; white-space: nowrap; }
        .tab-btn:hover { background: #f1f5f9; color: var(--primary); }
        .tab-btn.active { color: var(--primary-dark); border-bottom-color: var(--primary); background: #fff; }
        .tab-content { display: none; animation: fadeIn 0.4s ease-out; padding: 2.5rem; }
        .tab-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        /* Code Blocks */
        .code-block { background: var(--code-bg); border-radius: var(--radius-sm); margin: 2.5rem 0; overflow: hidden; position: relative; border: 1px solid #313244; box-shadow: var(--shadow-card); }
        .code-header { display: flex; justify-content: space-between; align-items: center; padding: 0.875rem 1.5rem; background: rgba(255,255,255,0.05); border-bottom: 1px solid #313244; }
        .code-lang { color: #a6accd; font-size: 0.85rem; font-family: var(--font-code); font-weight: 600; display: flex; align-items: center; gap: 0.75rem; }
        .code-lang::before { content: ''; width: 12px; height: 12px; border-radius: 50%; background: var(--success); display: inline-block; box-shadow: 0 0 8px var(--success); }
        .copy-btn { background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: #a6accd; padding: 0.375rem 0.875rem; border-radius: 4px; cursor: pointer; font-size: 0.8rem; transition: all 0.2s; font-family: var(--font-main); font-weight: 500; position: relative; }
        .copy-btn:hover { background: rgba(255,255,255,0.2); color: #fff; border-color: rgba(255,255,255,0.4); }
        .copy-btn::after { content: 'Clique para copiar'; position: absolute; top: -32px; right: 0; background: #333; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 0.7rem; opacity: 0; pointer-events: none; transition: opacity 0.2s; white-space: nowrap; z-index: 10; }
        .copy-btn:hover::after { opacity: 1; }
        .code-body { padding: 1.5rem; overflow-x: auto; background: #1e1e2e; }
        .code-body pre { margin: 0; font-family: var(--font-code); font-size: 0.9rem; line-height: 1.65; color: #c3d0e5; tab-size: 4; }
        .code-body .kw { color: #c792ea; }
        .code-body .fn { color: #82aaff; }
        .code-body .str { color: #c3e88d; }
        .code-body .com { color: #676e95; font-style: italic; }
        .code-body .num { color: #f78c6c; }
        .code-body .op { color: #89ddff; }
        .code-body .cls { color: #ffcb6b; }
        .code-body .var { color: #e0e0e0; }

        /* Table */
        .table-wrap { overflow-x: auto; margin: 2.5rem 0; border-radius: var(--radius-sm); border: 1px solid #e2e8f0; box-shadow: var(--shadow-card); }
        table { width: 100%; border-collapse: collapse; background: #fff; min-width: 700px; }
        th, td { padding: 1.25rem; text-align: left; border-bottom: 1px solid #e2e8f0; vertical-align: top; }
        th { background: #f8fafc; font-weight: 700; color: var(--text-main); text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.75px; border-bottom: 2px solid #e2e8f0; }
        tr:last-child td { border-bottom: none; }
        tr:hover { background: #f8fafc; }
        td:first-child { font-weight: 600; color: var(--primary-dark); width: 20%; }

        /* Simulator */
        .simulator { background: #f1f5f9; border-radius: var(--radius-card); padding: 2.5rem; margin: 3rem 0; border: 2px dashed #cbd5e1; position: relative; }
        .simulator::before { content: 'SIMULADOR DE DECISÃO'; position: absolute; top: -16px; left: 2.5rem; background: #f1f5f9; padding: 0.5rem 1rem; color: #64748b; font-weight: 800; font-size: 0.85rem; letter-spacing: 1px; border: 1px solid #cbd5e1; border-radius: 4px; }
        .scenario-list { display: flex; flex-wrap: wrap; gap: 0.875rem; justify-content: center; margin-bottom: 2.5rem; padding: 1.5rem; background: #fff; border-radius: var(--radius-sm); min-height: 80px; border: 1px solid #e2e8f0; }
        .scenario-card { padding: 0.75rem 1.5rem; background: var(--primary); color: #fff; border-radius: 8px; cursor: grab; user-select: none; display: flex; align-items: center; gap: 0.5rem; font-size: 0.9rem; font-weight: 500; box-shadow: var(--shadow-card); transition: all 0.2s; border: 1px solid rgba(255,255,255,0.2); z-index: 2; }
        .scenario-card:active { cursor: grabbing; transform: scale(0.98); box-shadow: var(--shadow-hover); }
        .scenario-card .icon { font-size: 1.25rem; }
        .scenario-card.correct { background: var(--success); border-color: #059669; }
        .scenario-card.wrong { background: var(--danger); border-color: #b91c1c; }
        
        .drop-zone-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem; margin-top: 2rem; }
        .drop-zone { background: #fff; border: 2px dashed #cbd5e1; border-radius: var(--radius-sm); min-height: 150px; padding: 1rem; transition: all 0.2s; display: flex; flex-direction: column; }
        .drop-zone h4 { text-align: center; margin-bottom: 1rem; color: #94a3b8; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; }
        .drop-zone.highlight { border-color: var(--primary); background: #f8fafc; transform: scale(1.02); }
        
        .sim-feedback { text-align: center; margin-top: 2rem; font-weight: 700; padding: 1rem 1.5rem; border-radius: var(--radius-sm); display: none; font-size: 1.1rem; animation: fadeIn 0.5s; border: 1px solid; }
        .sim-controls { text-align: center; margin-top: 2rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
        .sim-btn { padding: 0.875rem 2.5rem; border: none; border-radius: var(--radius-sm); cursor: pointer; font-weight: 700; font-size: 1rem; transition: all 0.2s; font-family: var(--font-main); text-transform: uppercase; letter-spacing: 0.5px; }
        .btn-primary { background: var(--primary); color: #fff; box-shadow: 0 4px 6px rgba(99, 102, 241, 0.3); }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-2px); box-shadow: 0 6px 8px rgba(99, 102, 241, 0.4); }
        .btn-secondary { background: #64748b; color: #fff; }
        .btn-secondary:hover { background: #475569; transform: translateY(-2px); }

        /* Hints */
        .hint { margin: 2rem 0; border: 1px solid #e2e8f0; border-radius: var(--radius-sm); overflow: hidden; background: #fff; box-shadow: var(--shadow-card); }
        .hint-header { padding: 1rem 1.25rem; background: #f8fafc; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; color: var(--text-main); transition: background 0.2s; }
        .hint-header:hover { background: #f1f5f9; }
        .hint-body { padding: 0 1.25rem; max-height: 0; overflow: hidden; transition: max-height 0.4s ease-out, padding 0.4s; background: #fff; color: #475569; }
        .hint.open .hint-body { max-height: 800px; padding: 1.5rem 1.25rem; }
        .hint-icon { transition: transform 0.3s; color: var(--primary); }
        .hint.open .hint-icon { transform: rotate(180deg); }

        /* Checklist */
        .checklist { list-style: none; padding: 0; }
        .checklist li { position: relative; padding-left: 2rem; margin-bottom: 1rem; cursor: pointer; user-select: none; color: var(--text-main); }
        .checklist li::before { content: '⬜'; position: absolute; left: 0; top: 2px; transition: all 0.2s; }
        .checklist li.checked { text-decoration: line-through; color: #94a3b8; }
        .checklist li.checked::before { content: '✅'; }

        /* Image */
        .illustration { width: 100%; max-width: 900px; border-radius: var(--radius-card); box-shadow: var(--shadow-hover); margin: 2.5rem auto; display: block; border: 1px solid #e2e8f0; }

        /* Footer */
        .footer { text-align: center; padding: 2.5rem 2rem; color: var(--text-on-dark); font-size: 0.95rem; border-top: 1px solid rgba(255,255,255,0.1); margin-top: 4rem; background: rgba(15, 23, 42, 0.5); border-radius: var(--radius-card); border: 1px solid rgba(255,255,255,0.1); }
        .footer a { color: var(--primary-light); text-decoration: none; font-weight: 600; }
        .footer a:hover { text-decoration: underline; }

        /* Responsive */
        @media (max-width: 968px) {
            .layout { grid-template-columns: 1fr; padding: 1.25rem; gap: 1.5rem; }
            .sidebar { position: relative; top: 0; height: auto; order: 2; margin-top: 2rem; }
            .main-content { order: 1; padding: 2rem 1.5rem; }
        }
        @media (max-width: 640px) {
            .title { font-size: 2.1rem; }
            .grid-2, .grid-3, .drop-zone-container { grid-template-columns: 1fr; }
            .tab-headers { flex-direction: column; }
            .tab-btn { border-bottom: none; border-left: 3px solid transparent; text-align: left; padding: 1rem; }
            .tab-btn.active { border-bottom: none; border-left-color: var(--primary); }
            .sim-controls { flex-direction: column; }
            .sim-btn { width: 100%; }
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
                <a href="#cascata" class="nav-link">2. Modelo Cascata</a>
                <a href="#v-model" class="nav-link">3. Modelo V</a>
                <a href="#agile" class="nav-link">4. Ágil: Scrum & XP</a>
                <a href="#pmbok" class="nav-link">5. PMBOK e Frameworks</a>
                <a href="#comparativo" class="nav-link">6. Comparativo Detalhado</a>
                <a href="#simulador" class="nav-link">7. Simulador Interativo</a>
                <a href="#workshop" class="nav-link">8. Workshop Prático</a>
                <a href="#resumo" class="nav-link">9. Resumo Final</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header" id="intro">
                <span class="badge badge-primary">Módulo 2</span>
                <span class="badge badge-success">Gestão de Projetos</span>
                <h1 class="title">Do Cascata ao Scrum: O Peso da Escolha</h1>
                <p class="subtitle">Explorando metodologias, frameworks e o processo de decisão para o sucesso do projeto.</p>
                <div class="grid-2" style="margin-top:2rem;">
                    <div class="info-box info">
                        <div class="info-box-icon">🎯</div>
                        <div><strong>Objetivos de Aprendizado</strong>Domar os principais modelos de gestão (Cascata, V, Ágil, PMBOK). Compreender as nuances de cada abordagem. Saber aplicar o framework correto ao cenário do projeto.</div>
                    </div>
                    <div class="info-box warning">
                        <div class="info-box-icon">⏱️</div>
                        <div><strong>Duração: 240 Minutos</strong>Nível: Intermediário | Pré-requisitos: Módulo 1 (Matriz de Stacy). Carga horária intensiva com foco em análise profunda.</div>
                    </div>
                </div>
            </header>

            <section id="cascata">
                <h2>1. Modelo Cascata (Tradicional)</h2>
                <p>O <strong>Modelo Cascata</strong> é o ancestral das metodologias de projeto. Sua premissa é simples: o planejamento é feito de forma linear e sequencial. Uma fase só começa quando a anterior termina. Pense na construção de um prédio ou na engenharia civil: você não começa o telhado antes da fundação.</p>
                <p>Este modelo é excelente para projetos onde o <strong>erro é fatal</strong> e o <strong>escopo não muda</strong>. A documentação é pesada e o foco é a previsibilidade.</p>
                <div class="grid-3">
                    <div class="card">
                        <h3>🏔️ Vantagens</h3>
                        <ul style="padding-left:1.2rem;">
                            <li>Documentação completa desde o início.</li>
                            <li>Fácil de gerenciar prazos e orçamentos.</li>
                            <li>Ideal para contratos fixos e compliance.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>⚠️ Desvantagens</h3>
                        <ul style="padding-left:1.2rem;">
                            <li>Inflexível a mudanças tardias.</li>
                            <li>Feedback do cliente só vem no final.</li>
                            <li>Risco de construir algo obsoleto.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>📌 Fases Típicas</h3>
                        <ul style="padding-left:1.2rem; list-style: none;">
                            <li style="margin-bottom:0.25rem;">1. 📝 Requisitos</li>
                            <li style="margin-bottom:0.25rem;">2. 🏗️ Design</li>
                            <li style="margin-bottom:0.25rem;">3. 💻 Implementação</li>
                            <li style="margin-bottom:0.25rem;">4. 🧪 Verificação</li>
                            <li style="margin-bottom:0.25rem;">5. 🚀 Manutenção</li>
                        </ul>
                    </div>
                </div>
                <div class="info-box danger">
                    <div class="info-box-icon">🚫</div>
                    <div><strong>Atenção:</strong> Não use Cascata em projetos de software onde o mercado muda a cada mês. Você vai construir o produto perfeito... para um problema que já não existe.</div>
                </div>
            </section>

            <section id="v-model">
                <h2>2. Modelo V: Validação e Verificação</h2>
                <p>O <strong>Modelo V</strong> é uma evolução do Cascata. Ele mantém a linearidade, mas enfatiza que <strong>cada etapa de desenvolvimento deve ter uma etapa de teste correspondente</strong>. Visualmente, ele se parece com a letra "V": à esquerda, o design desce em detalhes; à direita, os testes sobem integrando componentes.</p>
                <ul style="padding-left:1.5rem; margin-bottom:1.5rem;">
                    <li><strong>Requisitos de Negócio</strong> ↔ Testes de Aceitação do Usuário.</li>
                    <li><strong>Arquitetura do Sistema</strong> ↔ Testes de Sistema.</li>
                    <li><strong>Design de Componentes</strong> ↔ Testes de Integração.</li>
                    <li><strong>Codificação</strong> ↔ Testes Unitários.</li>
                </ul>
                <div class="hint">
                    <div class="hint-header">
                        <span>💡 Quando usar o Modelo V?</span>
                        <span class="hint-icon">▼</span>
                    </div>
                    <div class="hint-body">
                        <p>Use em sistemas onde a segurança e a confiabilidade são críticas: softwares médicos, controle de aeronaves, sistemas bancários core, indústria automotiva e aeroespacial. O custo de um bug é muito maior que o custo de prevenção.</p>
                    </div>
                </div>
            </section>

            <section id="agile">
                <h2>3. Ágil: Scrum & Extreme Programming (XP)</h2>
                <p>Quando a incerteza reina, o <strong>Agile</strong> entra em cena. Em vez de um plano gigante, dividimos o trabalho em ciclos curtos (Sprints) de 1 a 4 semanas. O foco é <strong>entregar valor rápido</strong>, obter feedback e corrigir a rota.</p>
                
                <div class="tabs">
                    <div class="tab-headers">
                        <button class="tab-btn active" data-tab="scrum">📦 Scrum</button>
                        <button class="tab-btn" data-tab="xp">💻 Extreme Programming (XP)</button>
                        <button class="tab-btn" data-tab="lean">⚡ Lean/Flow</button>
                    </div>
                    <div class="tab-content active" id="tab-scrum">
                        <h3>Scrum: Framework de Gestão</h3>
                        <p>Focado em gestão e processo. Define papéis claros (PO, Scrum Master, Dev Team) e eventos (Sprint, Daily, Review, Retro). É ideal para equipes que precisam de ritmo e organização.</p>
                        <p><strong>Artefatos:</strong> Product Backlog, Sprint Backlog, Incremento.</p>
                    </div>
                    <div class="tab-content" id="tab-xp">
                        <h3>XP: Engenharia de Software</h3>
                        <p>Focado na qualidade do código e práticas técnicas. O XP sugere: <strong>Pair Programming</strong> (dois devs, uma máquina), <strong>TDD</strong> (escrever testes antes do código), <strong>Integração Contínua</strong> e <strong>Refatoração</strong>.</p>
                        <p>É ótimo para projetos onde a qualidade técnica e a adaptabilidade a mudanças de código são vitais.</p>
                    </div>
                    <div class="tab-content" id="tab-lean">
                        <h3>Lean/Flow: Eliminação de Desperdício</h3>
                        <p>Originário da Toyota, foca em fluxo contínuo. Usa métricas como <strong>Lead Time</strong> e <strong>WIP</strong> (Work In Progress). O Kanban é a ferramenta visual mais comum aqui.</p>
                        <p>Ideal para times de suporte, DevOps e manutenção, onde não há "Sprints", mas um fluxo constante de demandas.</p>
                    </div>
                </div>
            </section>

            <section id="pmbok">
                <h2>4. PMBOK: O Guia, não o Método</h2>
                <p>É crucial entender: o <strong>PMBOK (Project Management Body of Knowledge)</strong> do PMI <strong>NÃO é uma metodologia</strong>. Ele é um guia de boas práticas e processos que podem ser aplicados a qualquer projeto.</p>
                <p>O PMBOK organiza o conhecimento em 12 princípios e 8 domínios de desempenho. Ele nos ensina a gerenciar riscos, custos, cronogramas e stakeholders, independentemente de você usar Scrum ou Cascata.</p>
                <div class="grid-2">
                    <div class="card">
                        <h3>📚 Áreas de Conhecimento</h3>
                        <ul style="padding-left:1.2rem;">
                            <li>Integração, Escopo, Cronograma.</li>
                            <li>Custos, Qualidade, Recursos.</li>
                            <li>Comunicação, Riscos, Aquisições.</li>
                            <li>Partes Interessadas (Stakeholders).</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>🛠️ Tailoring (Personalização)</h3>
                        <p>O conceito mais importante do PMBOK moderno é o <strong>Tailoring</strong>. O gerente de projetos deve selecionar, adaptar e combinar processos para criar a abordagem ideal para o contexto, em vez de seguir um padrão rígido.</p>
                    </div>
                </div>
            </section>

            <section id="comparativo">
                <h2>5. Comparativo Detalhado de Abordagens</h2>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th>Modelo Cascata</th>
                                <th>Modelo V</th>
                                <th>Scrum / Ágil</th>
                                <th>PMBOK (Guia)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Foco Principal</td>
                                <td>Cumprir o Plano</td>
                                <td>Qualidade / Testes</td>
                                <td>Valor / Adaptação</td>
                                <td>Padronização / Boas Práticas</td>
                            </tr>
                            <tr>
                                <td>Mudanças</td>
                                <td>Custosas, evitadas</td>
                                <td>Muito custosas</td>
                                <td>Bem-vindas (Backlog)</td>
                                <td>Gerenciadas formalmente</td>
                            </tr>
                            <tr>
                                <td>Entrega</td>
                                <td>Única (Big Bang)</td>
                                <td>Única (após testes)</td>
                                <td>Incremental / Iterativa</td>
                                <td>Depende da abordagem</td>
                            </tr>
                            <tr>
                                <td>Ideal Para</td>
                                <td>Engenharia Civil</td>
                                <td>Software Crítico (Saúde/Aero)</td>
                                <td>Startups, Apps, Web</td>
                                <td>Qualquer projeto complexo</td>
                            </tr>
                            <tr>
                                <td>Documentação</td>
                                <td>Extensa e prévia</td>
                                <td>Extensa (Rastreabilidade)</td>
                                <td>Funcional / "Just enough"</td>
                                <td>Formal e abrangente</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="simulador">
                <h2>6. Simulador Interativo: Escolha o Método</h2>
                <p>Leia os cenários abaixo e arraste (ou clique) para o método de gestão mais adequado. Avalie seu senso crítico!</p>
                
                <div class="simulator">
                    <div class="scenario-list" id="scenario-pool">
                        <div class="scenario-card" data-method="cascata"><span class="icon">🏗️</span> Construção de Usina</div>
                        <div class="scenario-card" data-method="v-model"><span class="icon">🏥</span> Software de Pacemaker</div>
                        <div class="scenario-card" data-method="scrum"><span class="icon">🚀</span> MVP para Startup</div>
                        <div class="scenario-card" data-method="pmbok"><span class="icon">🏛️</span> Projeto Governamental</div>
                        <div class="scenario-card" data-method="scrum"><span class="icon">🎮</span> Jogo Mobile Online</div>
                        <div class="scenario-card" data-method="cascata"><span class="icon">📄</span> Migração de Contrato Fixo</div>
                        <div class="scenario-card" data-method="v-model"><span class="icon">🚗</span> Freio Autônomo Carro</div>
                        <div class="scenario-card" data-method="scrum"><span class="icon">📱</span> App Social Viral</div>
                    </div>

                    <div class="drop-zone-container">
                        <div class="drop-zone" data-zone="cascata">
                            <h4>🏗️ Cascata</h4>
                        </div>
                        <div class="drop-zone" data-zone="v-model">
                            <h4>🏥 Modelo V</h4>
                        </div>
                        <div class="drop-zone" data-zone="scrum">
                            <h4>🚀 Scrum / Ágil</h4>
                        </div>
                        <div class="drop-zone" data-zone="pmbok">
                            <h4>📋 PMBOK / Gestão</h4>
                        </div>
                    </div>
                    
                    <div class="sim-feedback" id="sim-feedback"></div>
                    <div class="sim-controls">
                        <button id="check-btn" class="sim-btn btn-primary">Validar Escolhas</button>
                        <button id="reset-btn" class="sim-btn btn-secondary">Reiniciar</button>
                    </div>
                </div>
            </section>

            <section id="workshop">
                <h2>7. Workshop Prático: O Plano de Gestão</h2>
                <p>Este exercício leva cerca de <strong>60 minutos</strong>. Em grupos, simule a criação de um plano de gestão para um cenário híbrido:</p>
                <div class="card" style="border-left:4px solid var(--warning);">
                    <h3>📝 Cenário Híbrido: Banco Digital</h3>
                    <p>Um banco precisa lançar um novo App (Frontend) e atualizar o Core (Backend). O App muda a cada mês baseado em feedback. O Core não pode falhar.</p>
                    <ol style="margin-top:1rem;">
                        <li><strong>Defina a Abordagem para o App:</strong> Scrum ou Kanban? Por quê? Defina a Sprint.</li>
                        <li><strong>Defina a Abordagem para o Core:</strong> V-Model ou Cascata? Quais os testes críticos?</li>
                        <li><strong>Integração:</strong> Como essas duas "velocidades" se conversam? (Dica: API Contracts).</li>
                        <li><strong>Governança:</strong> Onde entra o PMBOK para garantir que o projeto não saia do orçamento?</li>
                    </ol>
                    <div class="info-box success">
                        <div class="info-box-icon">✅</div>
                        <div><strong>Entrega Esperada:</strong> Um diagrama simples mostrando o fluxo de trabalho e a justificativa da escolha metodológica para cada parte.</div>
                    </div>
                </div>
            </section>

            <section id="aprofundamento">
                <h2>8. Aprofundamento: Configurador Híbrido (DevOps)</h2>
                <p>Em times modernos, podemos codificar as regras do jogo. Veja um exemplo de como um sistema poderia rotear tickets baseado na natureza da tarefa:</p>
                
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">Python</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                    </div>
                    <div class="code-body">
<pre><code><span class="com"># Roteador de Tarefas Híbrido</span>
<span class="kw">class</span> <span class="cls">TaskRouter</span>:
    <span class="str">"""Define o processo de trabalho baseado no tipo de demanda."""</span>

    <span class="kw">def</span> <span class="fn">route_ticket</span>(self, ticket_type: <span class="cls">str</span>, risk_level: <span class="cls">str</span>):
        <span class="com"># Lógica de roteamento</span>
        <span class="kw">if</span> ticket_type == <span class="str">"FEATURE"</span>:
            <span class="kw">return</span> self.<span class="fn">_agile_process</span>()
        <span class="kw">elif</span> ticket_type == <span class="str">"BUG_CRITICO"</span>:
            <span class="kw">return</span> self.<span class="fn">_emergency_fix</span>()
        <span class="kw">elif</span> ticket_type == <span class="str">"AUDITORIA"</span>:
            <span class="kw">return</span> self.<span class="fn">_waterfall_process</span>()
        
        <span class="kw">if</span> risk_level == <span class="str">"HIGH"</span>:
            <span class="kw">return</span> self.<span class="fn">_v_model_validation</span>()
            
    <span class="kw">def</span> <span class="fn">_agile_process</span>(self):
        <span class="com"># Fluxo Scrum: Backlog -> Sprint -> Review</span>
        <span class="kw">return</span> {<span class="str">"method"</span>: <span class="str">"Scrum"</span>, <span class="str">"artifact"</span>: <span class="str">"User Story"</span>}

    <span class="kw">def</span> <span class="fn">_waterfall_process</span>(self):
        <span class="com"># Fluxo Tradicional: Requisitos -> Aprovação -> Exec</span>
        <span class="kw">return</span> {<span class="str">"method"</span>: <span class="str">"Waterfall"</span>, <span class="str">"artifact"</span>: <span class="str">"Change Request"</span>}</code></pre>
                    </div>
                </div>
            </section>

            <section id="resumo">
                <h2>9. Resumo Final</h2>
                <div class="grid-2">
                    <div class="card">
                        <h3>📝 Recapitulação</h3>
                        <ul style="padding-left:1.2rem;">
                            <li><strong>Cascata:</strong> Linear, documentação, previsibilidade. Use quando o escopo for fixo.</li>
                            <li><strong>Modelo V:</strong> Foco em testes paralelos. Essencial para sistemas críticos.</li>
                            <li><strong>Scrum/XP:</strong> Iterativo, feedback rápido. Use na incerteza e inovação.</li>
                            <li><strong>PMBOK:</strong> Guia de boas práticas e processos, não uma metodologia em si.</li>
                            <li><strong>Decisão:</strong> Não existe "melhor" método, existe o "mais adequado" ao contexto.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>📋 Checklist do Gestor</h3>
                        <ul class="checklist" id="manager-checklist">
                            <li>O erro neste projeto é fatal? (Sim → V/Cascata)</li>
                            <li>O cliente sabe exatamente o que quer? (Não → Ágil)</li>
                            <li>Preciso de entregas parciais? (Sim → Ágil)</li>
                            <li>Existe conformidade regulatória? (Sim → PMBOK/Cascata)</li>
                            <li>A equipe tem autonomia? (Sim → Scrum/XP)</li>
                        </ul>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <p>© 2024 Curso Interativo de Gestão de Projetos Avançada | Criado para aprendizado contínuo.</p>
                <p style="margin-top:0.5rem; font-size:0.8rem; opacity:0.8;">Design System: Inter / Fira Code | Vanilla JS / CSS3 | 240 min Duração</p>
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
        const zones = document.querySelectorAll('.drop-zone');
        let draggedItem = null;

        pool.addEventListener('dragstart', (e) => {
            draggedItem = e.target.closest('.scenario-card');
            if(draggedItem) {
                e.dataTransfer.setData('text/plain', draggedItem.dataset.method);
                setTimeout(() => draggedItem.style.opacity = '0.5', 0);
            }
        });

        pool.addEventListener('dragend', (e) => {
            if(draggedItem) draggedItem.style.opacity = '1';
            draggedItem = null;
        });

        zones.forEach(zone => {
            zone.addEventListener('dragover', (e) => {
                e.preventDefault();
                zone.classList.add('highlight');
            });
            zone.addEventListener('dragleave', (e) => {
                zone.classList.remove('highlight');
            });
            zone.addEventListener('drop', (e) => {
                e.preventDefault();
                zone.classList.remove('highlight');
                if (draggedItem) {
                    zone.appendChild(draggedItem);
                    draggedItem.style.opacity = '1';
                    draggedItem.style.cursor = 'pointer';
                }
            });
        });

        // Fallback for touch/mobile (click to move)
        document.querySelectorAll('.scenario-card').forEach(card => {
            card.addEventListener('click', function(e) {
                // If in pool, move to first zone. If in zone, move to pool.
                if (this.parentElement.id === 'scenario-pool') {
                    const q = document.querySelector('.drop-zone[data-zone="scrum"]');
                    q.appendChild(this);
                } else {
                    pool.appendChild(this);
                }
            });
        });

        document.getElementById('check-btn').addEventListener('click', () => {
            let correct = 0;
            let total = document.querySelectorAll('.scenario-card').length;
            let inPool = 0;
            
            document.querySelectorAll('.scenario-card').forEach(card => {
                const method = card.dataset.method;
                const zone = card.parentElement;
                const zoneType = zone.dataset.zone;
                
                card.classList.remove('correct', 'wrong');
                
                if (zone.id === 'scenario-pool') {
                    inPool++;
                } else {
                    if (zoneType && method === zoneType) {
                        correct++;
                        card.classList.add('correct');
                    } else {
                        card.classList.add('wrong');
                    }
                }
            });

            const feedback = document.getElementById('sim-feedback');
            feedback.style.display = 'block';
            
            if (inPool > 0) {
                feedback.style.background = '#fffbeb';
                feedback.style.color = '#92400e';
                feedback.style.borderColor = '#fde68a';
                feedback.innerHTML = `⚠️ ${inPool} cenários ainda não foram posicionados. Complete a tarefa!`;
            } else if (correct === total) {
                feedback.style.background = '#d1fae5';
                feedback.style.color = '#065f46';
                feedback.style.borderColor = '#a7f3d0';
                feedback.innerHTML = `🎉 Excelente! ${correct}/${total} escolhas perfeitas! Você domina os frameworks.`;
            } else {
                feedback.style.background = '#fee2e2';
                feedback.style.color = '#991b1b';
                feedback.style.borderColor = '#fecaca';
                feedback.innerHTML = `⚠️ ${correct}/${total} corretos. Verifique os itens em vermelho e tente novamente.`;
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


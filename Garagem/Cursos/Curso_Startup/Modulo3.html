<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 3: O Custo Invisível - Dívida Técnica e ARID</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter@5.0.18/400.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter@5.0.18/600.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter@5.0.18/700.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/inter@5.0.18/800.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/fira-code@5.0.18/400.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/fira-code@5.0.18/600.css">
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

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.4); }

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

        .layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2.5rem;
            max-width: 1400px;
            margin: 0 auto;
            padding: 2.5rem;
        }

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
        .sidebar::-webkit-scrollbar { width: 6px; }
        .sidebar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.15); }
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
            border: 1px solid transparent;
        }
        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,0.1);
            color: #fff;
            border-color: rgba(255,255,255,0.15);
            transform: translateX(4px);
        }
        .nav-link::before { content: ''; width: 6px; height: 6px; background: var(--primary); border-radius: 50%; display: inline-block; margin-right: 10px; opacity: 0; transition: opacity 0.2s; }
        .nav-link.active::before { opacity: 1; box-shadow: 0 0 5px var(--primary); }

        .main-content {
            background: var(--card-bg);
            border-radius: var(--radius-card);
            padding: 3rem;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            border: var(--border-light);
        }

        .header { margin-bottom: 3rem; padding-bottom: 2rem; border-bottom: 2px solid #f1f5f9; }
        .badge { display: inline-flex; align-items: center; padding: 0.25rem 0.85rem; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; margin-right: 0.75rem; border: 1px solid; background: #f8fafc; }
        .badge-primary { color: var(--primary-dark); border-color: #c7d2fe; background: #e0e7ff; }
        .badge-success { color: #065f46; border-color: #a7f3d0; background: #d1fae5; }
        .badge-warning { color: #92400e; border-color: #fde68a; background: #fef3c7; }
        .title { font-size: 2.75rem; font-weight: 800; color: var(--text-main); margin: 1rem 0 0.5rem 0; letter-spacing: -0.02em; background: linear-gradient(to right, var(--primary-dark), var(--info)); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .subtitle { color: var(--text-light); font-size: 1.35rem; font-weight: 400; max-width: 850px; }

        section { margin-bottom: 5rem; opacity: 0; transform: translateY(30px); transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
        section.visible { opacity: 1; transform: translateY(0); }
        h2 { font-size: 2rem; color: var(--primary-dark); margin-bottom: 1.5rem; padding-left: 1.25rem; border-left: 5px solid var(--primary); position: relative; }
        h2::after { content: ''; position: absolute; bottom: -8px; left: 1.25rem; width: 60px; height: 3px; background: var(--primary-light); border-radius: 2px; }
        h3 { font-size: 1.5rem; margin-bottom: 1rem; color: var(--text-main); display: flex; align-items: center; gap: 0.75rem; }
        p { margin-bottom: 1.25rem; color: var(--text-main); font-size: 1.05rem; line-height: 1.8; }
        ul, ol { padding-left: 1.75rem; margin-bottom: 1.5rem; }
        li { margin-bottom: 0.75rem; line-height: 1.7; }
        strong { color: var(--text-main); font-weight: 700; }

        .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; margin: 2.5rem 0; }
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin: 2.5rem 0; }
        .card { background: var(--card-bg); border-radius: var(--radius-card); padding: 2rem; box-shadow: var(--shadow-card); transition: transform 0.3s, box-shadow 0.3s; border: var(--border-light); position: relative; overflow: hidden; }
        .card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: var(--primary-light); opacity: 0; transition: opacity 0.3s; }
        .card:hover { transform: translateY(-6px); box-shadow: var(--shadow-hover); border-color: var(--primary-light); }
        .card:hover::before { opacity: 1; }
        .card-icon { width: 56px; height: 56px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 1.5rem; background: #f8fafc; border: 1px solid #e2e8f0; }

        .info-box { padding: 1.5rem; border-radius: var(--radius-sm); margin: 2.5rem 0; border-left: 5px solid; display: flex; gap: 1.25rem; align-items: flex-start; transition: all 0.3s; background: #fff; border: 1px solid; }
        .info-box:hover { transform: translateX(5px); }
        .info-box.success { background: #f0fdf4; border-color: var(--success); color: #064e3b; }
        .info-box.warning { background: #fffbeb; border-color: var(--warning); color: #92400e; }
        .info-box.info { background: #eff6ff; border-color: var(--info); color: #1e3a8a; }
        .info-box.danger { background: #fef2f2; border-color: var(--danger); color: #991b1b; }
        .info-box strong { display: block; margin-bottom: 0.375rem; font-size: 1.1rem; color: inherit; }
        .info-box-icon { font-size: 1.75rem; flex-shrink: 0; margin-top: 2px; }

        .tabs { margin: 3rem 0; border: var(--border-light); border-radius: var(--radius-card); overflow: hidden; background: #fff; box-shadow: var(--shadow-card); }
        .tab-headers { display: flex; gap: 0; border-bottom: 1px solid #e2e8f0; background: #f8fafc; overflow-x: auto; }
        .tab-btn { padding: 1.125rem 2rem; background: none; border: none; cursor: pointer; font-family: var(--font-main); font-weight: 600; color: #64748b; border-bottom: 3px solid transparent; transition: all 0.2s; white-space: nowrap; }
        .tab-btn:hover { background: #f1f5f9; color: var(--primary); }
        .tab-btn.active { color: var(--primary-dark); border-bottom-color: var(--primary); background: #fff; }
        .tab-content { display: none; animation: fadeIn 0.4s ease-out; padding: 2.5rem; }
        .tab-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

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

        .table-wrap { overflow-x: auto; margin: 2.5rem 0; border-radius: var(--radius-sm); border: var(--border-light); box-shadow: var(--shadow-card); }
        table { width: 100%; border-collapse: collapse; background: #fff; min-width: 700px; }
        th, td { padding: 1.25rem; text-align: left; border-bottom: 1px solid #e2e8f0; vertical-align: top; }
        th { background: #f8fafc; font-weight: 700; color: var(--text-main); text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.75px; border-bottom: 2px solid #e2e8f0; }
        tr:last-child td { border-bottom: none; }
        tr:hover { background: #f8fafc; }
        td:first-child { font-weight: 600; color: var(--primary-dark); width: 25%; }

        .simulator { background: #f1f5f9; border-radius: var(--radius-card); padding: 2.5rem; margin: 3rem 0; border: 2px dashed #cbd5e1; position: relative; }
        .simulator::before { content: 'SIMULADOR DE DÍVIDA TÉCNICA'; position: absolute; top: -16px; left: 2.5rem; background: #f1f5f9; padding: 0.5rem 1rem; color: #64748b; font-weight: 800; font-size: 0.85rem; letter-spacing: 1px; border: 1px solid #cbd5e1; border-radius: 4px; }
        
        .sim-controls { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0; }
        .control-group label { display: block; font-weight: 700; margin-bottom: 0.5rem; color: var(--text-main); }
        .range-slider { width: 100%; height: 8px; border-radius: 4px; background: #e2e8f0; outline: none; -webkit-appearance: none; cursor: pointer; }
        .range-slider::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); cursor: pointer; border: 2px solid #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.2); transition: background 0.2s; }
        .range-slider::-webkit-slider-thumb:hover { background: var(--primary-dark); transform: scale(1.1); }

        .metrics-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 2rem; background: #fff; padding: 2rem; border-radius: var(--radius-sm); box-shadow: var(--shadow-card); border: var(--border-light); }
        .metric-card { text-align: center; padding: 1rem; border-radius: var(--radius-sm); background: #f8fafc; border: 1px solid #e2e8f0; transition: all 0.3s; }
        .metric-value { font-size: 2rem; font-weight: 800; margin-bottom: 0.25rem; font-family: var(--font-code); }
        .metric-label { font-size: 0.9rem; color: var(--text-light); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
        .status-bar { height: 12px; background: #e2e8f0; border-radius: 6px; overflow: hidden; margin-top: 1rem; }
        .status-fill { height: 100%; width: 0%; transition: width 0.4s ease, background 0.4s ease; border-radius: 6px; }

        .hint { margin: 2rem 0; border: var(--border-light); border-radius: var(--radius-sm); overflow: hidden; background: #fff; box-shadow: var(--shadow-card); }
        .hint-header { padding: 1rem 1.25rem; background: #f8fafc; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; color: var(--text-main); transition: background 0.2s; border-bottom: 1px solid transparent; }
        .hint-header:hover { background: #f1f5f9; border-bottom-color: #e2e8f0; }
        .hint-body { padding: 0 1.25rem; max-height: 0; overflow: hidden; transition: max-height 0.4s ease-out, padding 0.4s; background: #fff; color: #475569; }
        .hint.open .hint-body { max-height: 800px; padding: 1.5rem 1.25rem; }
        .hint-icon { transition: transform 0.3s; color: var(--primary); }
        .hint.open .hint-icon { transform: rotate(180deg); }

        .illustration { width: 100%; max-width: 900px; height: auto; border-radius: var(--radius-card); box-shadow: var(--shadow-hover); margin: 2.5rem auto; display: block; border: var(--border-light); background: #fff; }

        .footer { text-align: center; padding: 2.5rem 2rem; color: var(--text-on-dark); font-size: 0.95rem; border-top: 1px solid rgba(255,255,255,0.1); margin-top: 4rem; background: rgba(15, 23, 42, 0.5); border-radius: var(--radius-card); border: var(--border-dark); }
        .footer a { color: var(--primary-light); text-decoration: none; font-weight: 600; }
        .footer a:hover { text-decoration: underline; }

        .checklist { list-style: none; padding: 0; }
        .checklist li { position: relative; padding-left: 2rem; margin-bottom: 1rem; cursor: pointer; user-select: none; color: var(--text-main); transition: color 0.2s; }
        .checklist li::before { content: '⬜'; position: absolute; left: 0; top: 2px; transition: all 0.2s; }
        .checklist li.checked { text-decoration: line-through; color: #94a3b8; }
        .checklist li.checked::before { content: '✅'; }

        @media (max-width: 968px) {
            .layout { grid-template-columns: 1fr; padding: 1.25rem; gap: 1.5rem; }
            .sidebar { position: relative; top: 0; height: auto; order: 2; margin-top: 2rem; padding: 1.5rem; }
            .main-content { order: 1; padding: 2rem 1.5rem; }
            .metrics-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 640px) {
            .title { font-size: 2.1rem; }
            .grid-2, .grid-3 { grid-template-columns: 1fr; }
            .tab-headers { flex-direction: column; }
            .tab-btn { border-bottom: none; border-left: 3px solid transparent; text-align: left; padding: 1rem; }
            .tab-btn.active { border-bottom: none; border-left-color: var(--primary); }
            .simulator { padding: 1.5rem; }
            .simulator::before { left: 1rem; }
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
                <a href="#conceito" class="nav-link">2. O Conceito de Dívida Técnica</a>
                <a href="#arid" class="nav-link">3. A Lógica do ARID</a>
                <a href="#monitoramento" class="nav-link">4. Monitoramento e Métricas</a>
                <a href="#simulador" class="nav-link">5. Simulador Interativo</a>
                <a href="#workshop" class="nav-link">6. Workshop Prático</a>
                <a href="#resumo" class="nav-link">7. Resumo Final</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header" id="intro">
                <span class="badge badge-primary">Módulo 3</span>
                <span class="badge badge-success">Gestão & Qualidade</span>
                <h1 class="title">O Custo Invisível</h1>
                <p class="subtitle">Dívida Técnica e a Lógica do ARID</p>
                <div class="grid-2" style="margin-top:2rem;">
                    <div class="info-box info">
                        <div class="info-box-icon">🎯</div>
                        <div><strong>Objetivos de Aprendizado</strong>Compreender o conceito e as causas da Dívida Técnica. Entender como a pressa gera "juros" em forma de retrabalho. Dominar o framework ARID como termômetro de saúde do projeto.</div>
                    </div>
                    <div class="info-box warning">
                        <div class="info-box-icon">⏱️</div>
                        <div><strong>Duração: 120 Minutos</strong>Nível: Intermediário | Pré-requisitos: Módulos 1 e 2 (Contexto e Metodologias). Foco em tomada de decisão consciente.</div>
                    </div>
                </div>
            </header>

            <section id="conceito">
                <h2>1. O Conceito de Dívida Técnica</h2>
                <p>Você já ouviu o termo <em>"faz de qualquer jeito para entregar logo, depois a gente arruma"</em>? Na tecnologia e nos negócios, essa mentalidade gera a <strong>Dívida Técnica</strong>.</p>
                <p>A metáfora foi cunhada por Ward Cunningham em 1992. Assim como uma dívida financeira, ela permite obter um benefício imediato (velocidade de entrega), mas cobra <strong>juros</strong> ao longo do tempo. Esses juros se manifestam como: código difícil de manter, bugs recorrentes, tempo excessivo de onboarding e medo de fazer deploy.</p>
                <div class="grid-2">
                    <div class="card">
                        <div class="card-icon">💰</div>
                        <h3>Dívida Intencional</h3>
                        <p>Decisão consciente da equipe e gestão para priorizar o "time-to-market". Sabemos que está imperfeito, mas o valor de negócio justifica. <strong>Requer plano de quitação.</strong></p>
                    </div>
                    <div class="card">
                        <div class="card-icon">🌪️</div>
                        <h3>Dívida Não-Intencional</h3>
                        <p>Surge de falta de experiência, más práticas, documentação inexistente ou pressão sem alinhamento. É a mais perigosa, pois ninguém sabe que está lá até o sistema "quebrar".</p>
                    </div>
                </div>
                <div class="info-box danger">
                    <div class="info-box-icon">🚨</div>
                    <div><strong>O Problema Central:</strong> A pressa hoje gera juros (retrabalho) amanhã. Se a dívida técnica ultrapassa a capacidade da equipe de pagá-la, o projeto entra em colapso (paralisia por refatoração).</div>
                </div>
            </section>

            <section id="arid">
                <h2>2. A Lógica do ARID</h2>
                <p>Como evitar que a dívida saia do controle? Com monitoramento constante. É aqui que entra o <strong>ARID (Accountability, Risk, Issues, Decisions)</strong>.</p>
                <p>Antes da nossa live, entenda que o ARID não é apenas um documento. É o <strong>termômetro financeiro e técnico</strong> do projeto. Ele nos diz se a "dívida" está saindo do controle ou se o projeto ainda é sustentável.</p>
                <div class="tabs">
                    <div class="tab-headers">
                        <button class="tab-btn active" data-tab="accountability">👤 Accountability</button>
                        <button class="tab-btn" data-tab="risk">⚠️ Risk</button>
                        <button class="tab-btn" data-tab="issues">🐛 Issues</button>
                        <button class="tab-btn" data-tab="decisions">📝 Decisions</button>
                    </div>
                    <div class="tab-content active" id="tab-accountability">
                        <h3>Quem responde pelo quê?</h3>
                        <p>Define claramente o <strong>dono</strong> de cada peça técnica ou processo. Quando um problema surge, não há "bola de neve" de culpa. O Accountability garante que cada dívida técnica tenha um responsável por sua quitação ou mitigação.</p>
                    </div>
                    <div class="tab-content" id="tab-risk">
                        <h3>Qual o impacto de não pagar?</h3>
                        <p>Classifica os riscos associados à manutenção do código legado ou à espera por refatoração. Exemplo: "Se não atualizarmos a biblioteca X até Q3, teremos uma falha de segurança crítica".</p>
                    </div>
                    <div class="tab-content" id="tab-issues">
                        <h3>Problemas ativos e bloqueios</h3>
                        <p>Listagem de bugs conhecidos, falhas de performance ou limitações arquiteturais que estão ativamente gerando "juros". Monitorar Issues evita que o retrabalho seja tratado como "surpresa" no meio do sprint.</p>
                    </div>
                    <div class="tab-content" id="tab-decisions">
                        <h3>Registro de escolhas estratégicas</h3>
                        <p>Documenta <em>por que</em> uma dívida foi contraída e <em>quando</em> ela será quitada. Transforma o "depois a gente arruma" em uma promessa formal com data, responsável e critérios de aceitação.</p>
                    </div>
                </div>
            </section>

            <section id="monitoramento">
                <h2>3. Monitoramento e Métricas de Sustentabilidade</h2>
                <p>Um projeto sustentável mantém a relação entre velocidade e qualidade equilibrada. Ferramentas de análise estática (SonarQube, CodeClimate) e métricas de fluxo (Lead Time, Cycle Time) alimentam o ARID.</p>
                <div class="illustration">
                    <svg viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#10b981;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#ef4444;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <path d="M 50 250 Q 200 100 400 150 T 750 50" fill="none" stroke="url(#grad1)" stroke-width="6" stroke-linecap="round"/>
                        <circle cx="50" cy="250" r="8" fill="#10b981" />
                        <circle cx="750" cy="50" r="8" fill="#ef4444" />
                        <text x="30" y="240" font-family="Inter, sans-serif" font-size="14" fill="#64748b" font-weight="600">Velocidade</text>
                        <text x="30" y="260" font-family="Inter, sans-serif" font-size="14" fill="#64748b" font-weight="600">Início</text>
                        <text x="720" y="30" font-family="Inter, sans-serif" font-size="14" fill="#ef4444" font-weight="600">Paralisia</text>
                        <text x="400" y="130" font-family="Inter, sans-serif" font-size="16" fill="#4f46e5" font-weight="700">Zona de Risco Crítico</text>
                        <line x1="50" y1="250" x2="50" y2="40" stroke="#e2e8f0" stroke-width="2" stroke-dasharray="4"/>
                        <text x="10" y="250" font-family="Inter, sans-serif" font-size="12" fill="#94a3b8">Alta</text>
                        <text x="10" y="40" font-family="Inter, sans-serif" font-size="12" fill="#94a3b8">Baixa</text>
                        <text x="760" y="250" font-family="Inter, sans-serif" font-size="12" fill="#94a3b8">Tempo →</text>
                    </svg>
                </div>
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-lang">python</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copiar</button>
                    </div>
                    <div class="code-body">
<pre><code><span class="kw">class</span> <span class="cls">TechDebtCalculator</span>:
    <span class="str">"""Calcula juros e risco de sustentabilidade técnica."""</span>

    <span class="kw">def</span> <span class="fn">__init__</span>(self, complexity, code_coverage):
        self.complexity = complexity      <span class="com"># Média de complexidade ciclomática</span>
        self.coverage = code_coverage     <span class="com"># % de testes automatizados</span>
        self.base_interest = <span class="num">0.15</span>         <span class="com"># Juro base anual</span>

    <span class="kw">def</span> <span class="fn">calculate_interest</span>(self, months_outstanding):
        <span class="com"># Juros compostos baseados em falta de testes e alta complexidade</span>
        risk_multiplier = <span class="num">1.0</span> <span class="op">+</span> ((<span class="num">100</span> <span class="op">-</span> self.coverage) <span class="op">/</span> <span class="num">50</span>) <span class="op">*</span> (self.complexity <span class="op">/</span> <span class="num">10</span>)
        
        <span class="com"># Fórmula de juros simples para estimativa de retrabalho</span>
        debt_growth = months_outstanding <span class="op">*</span> self.base_interest <span class="op">*</span> risk_multiplier
        <span class="kw">return</span> <span class="fn">round</span>(debt_growth <span class="op">*</span> <span class="num">100</span>, <span class="num">1</span>)

<span class="com"># Exemplo de uso</span>
calculator = <span class="cls">TechDebtCalculator</span>(complexity=<span class="num">18</span>, code_coverage=<span class="num">40</span>)
interest_rate = calculator.calculate_interest(months_outstanding=<span class="num">6</span>)
<span class="fn">print</span>(<span class="str">f"Taxa de 'juros' de retrabalho: {interest_rate}%"</span>)</code></pre>
                    </div>
                </div>
            </section>

            <section id="simulador">
                <h2>4. Simulador Interativo de Sustentabilidade</h2>
                <p>Ajuste os controles abaixo para ver como a velocidade e a qualidade afetam a Dívida Técnica e a sustentabilidade do projeto ao longo do tempo. O objetivo é manter o "Termômetro ARID" na zona verde.</p>
                
                <div class="simulator">
                    <div class="sim-controls">
                        <div class="control-group">
                            <label for="speed-slider">🚀 Pressa por Velocidade de Entrega</label>
                            <input type="range" id="speed-slider" class="range-slider" min="0" max="100" value="30">
                            <span id="speed-val" style="float:right; font-family:var(--font-code); font-weight:700; color:var(--primary);">30%</span>
                        </div>
                        <div class="control-group">
                            <label for="quality-slider">🛡️ Rigor de Boas Práticas & Testes</label>
                            <input type="range" id="quality-slider" class="range-slider" min="0" max="100" value="80">
                            <span id="quality-val" style="float:right; font-family:var(--font-code); font-weight:700; color:var(--success);">80%</span>
                        </div>
                    </div>

                    <div class="metrics-grid">
                        <div class="metric-card">
                            <div class="metric-value" id="debt-val">15%</div>
                            <div class="metric-label">Dívida Principal</div>
                            <div class="status-bar"><div class="status-fill" id="debt-bar" style="width: 15%; background: var(--success);"></div></div>
                        </div>
                        <div class="metric-card">
                            <div class="metric-value" id="interest-val">2.5%</div>
                            <div class="metric-label">Juros (Retrabalho/Mês)</div>
                            <div class="status-bar"><div class="status-fill" id="interest-bar" style="width: 25%; background: var(--warning);"></div></div>
                        </div>
                        <div class="metric-card">
                            <div class="metric-value" id="arid-val">SUSTENTÁVEL</div>
                            <div class="metric-label">Índice ARID</div>
                            <div class="status-bar"><div class="status-fill" id="arid-bar" style="width: 85%; background: var(--success);"></div></div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="workshop">
                <h2>5. Workshop Prático: Mapeamento ARID Real</h2>
                <div class="card" style="border-left:4px solid var(--warning);">
                    <h3>📝 Atividade: O Inventário da Dívida</h3>
                    <p>Este exercício leva cerca de <strong>40 minutos</strong>. Em duplas, aplique o framework ARID a um projeto real ou histórico da organização:</p>
                    <ol style="margin-top:1rem;">
                        <li><strong>Accountability:</strong> Liste 3 módulos do sistema e defina quem é o "dono técnico" oficial.</li>
                        <li><strong>Risk:</strong> Para cada dono, identifique 1 risco de segurança, performance ou manutenibilidade.</li>
                        <li><strong>Issues:</strong> Liste os 2 bugs mais recorrentes que consomem tempo do time (são os "juros").</li>
                        <li><strong>Decisions:</strong> Crie um plano de quitação. Qual decisão técnica será tomada na próxima sprint? (Ex: Refatorar, Abstrair, Aceitar).</li>
                    </ol>
                    <div class="info-box success">
                        <div class="info-box-icon">✅</div>
                        <div><strong>Entrega Esperada:</strong> Uma tabela simples (ARID Log) contendo: Componente, Responsável, Risco Identificado, Issue Ativa e Decisão Tomada.</div>
                    </div>
                </div>
            </section>

            <section id="aprofundamento">
                <h2>6. Aprofundamento: ARID como Cultura, não Burocracia</h2>
                <p>O maior erro ao implementar o ARID é transformá-lo em mais uma planilha burocrática que ninguém atualiza. Para funcionar, ele deve ser leve, visível e integrado ao fluxo diário.</p>
                <div class="hint">
                    <div class="hint-header">
                        <span>💡 Dica: Integração com Ferramentas Ágeis</span>
                        <span class="hint-icon">▼</span>
                    </div>
                    <div class="hint-body">
                        <p>Use tags no Jira/Linear/GitHub: <code>type:tech-debt</code>, <code>severity:high</code>. Vincule essas tasks diretamente ao Product Backlog. Em todo Sprint Planning, reserve uma porcentagem fixa (ex: 20%) da capacidade para "pagar juros" (refatoração/ARID). Isso transforma a dívida técnica de um fantasma invisível em um item de backlog gerenciável.</p>
                    </div>
                </div>
                <p>Quando o ARID se torna parte da <em>Definition of Ready</em> e da <em>Definition of Done</em>, a cultura da equipe muda: parar para limpar a base não é mais "perda de tempo", é investimento em velocidade futura.</p>
            </section>

            <section id="resumo">
                <h2>7. Resumo Final</h2>
                <div class="grid-2">
                    <div class="card">
                        <h3>📝 Recapitulação</h3>
                        <ul style="padding-left:1.2rem;">
                            <li>Dívida Técnica é uma metáfora financeira: pressa hoje gera juros (retrabalho) amanhã.</li>
                            <li>Pode ser intencional (estratégica) ou acidental (negligência).</li>
                            <li>O <strong>ARID</strong> (Accountability, Risk, Issues, Decisions) é o termômetro que evita o colapso.</li>
                            <li>Monitoramento constante e metas de quitação são essenciais para a sustentabilidade.</li>
                            <li>Equipes maduras reservam capacidade do sprint especificamente para reduzir a dívida.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>📋 Checklist do Gestor ARID</h3>
                        <ul class="checklist" id="arid-checklist">
                            <li>A dívida é consciente ou fruto de descuido?</li>
                            <li>Existe um responsável (Accountability) claro para cada módulo?</li>
                            <li>Os riscos de não refatorar estão documentados?</li>
                            <li>As Issues de "juros" estão visíveis no backlog?</li>
                            <li>A decisão de pagar ou adiar a dívida foi registrada?</li>
                        </ul>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <p>© 2024 Curso Interativo de Gestão de Projetos Avançada | Criado para aprendizado contínuo.</p>
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
        const speedSlider = document.getElementById('speed-slider');
        const qualitySlider = document.getElementById('quality-slider');
        const speedVal = document.getElementById('speed-val');
        const qualityVal = document.getElementById('quality-val');
        const debtVal = document.getElementById('debt-val');
        const interestVal = document.getElementById('interest-val');
        const aridVal = document.getElementById('arid-val');
        const debtBar = document.getElementById('debt-bar');
        const interestBar = document.getElementById('interest-bar');
        const aridBar = document.getElementById('arid-bar');

        function updateSimulator() {
            const speed = parseInt(speedSlider.value);
            const quality = parseInt(qualitySlider.value);
            
            speedVal.textContent = `${speed}%`;
            qualityVal.textContent = `${quality}%`;

            // Logic: High speed & low quality = high debt & high interest
            const debtBase = Math.max(5, speed + (100 - quality) * 0.8);
            const debt = Math.min(100, Math.round(debtBase));
            
            // Interest grows exponentially when debt is high
            const interest = Math.min(50, Math.round((debt / 100) * 40 + (speed * 0.2)));
            
            // ARID Sustainability (Inverse of risk)
            let sustainability = 100 - (debt * 0.6) - (interest * 1.2);
            sustainability = Math.max(0, Math.min(100, Math.round(sustainability)));

            // Update UI
            debtVal.textContent = `${debt}%`;
            debtBar.style.width = `${debt}%`;
            debtBar.style.background = debt > 70 ? 'var(--danger)' : debt > 40 ? 'var(--warning)' : 'var(--success)';

            interestVal.textContent = `${interest}%`;
            interestBar.style.width = `${interest * 2}%`; // scale for visual
            interestBar.style.background = interest > 30 ? 'var(--danger)' : interest > 15 ? 'var(--warning)' : 'var(--info)';

            aridVal.textContent = sustainability > 70 ? 'SUSTENTÁVEL' : sustainability > 40 ? 'ATENÇÃO' : 'CRÍTICO';
            aridBar.style.width = `${sustainability}%`;
            aridBar.style.background = sustainability > 70 ? 'var(--success)' : sustainability > 40 ? 'var(--warning)' : 'var(--danger)';

            // Color updates for labels
            aridVal.style.color = sustainability > 70 ? 'var(--success)' : sustainability > 40 ? 'var(--warning)' : 'var(--danger)';
        }

        speedSlider.addEventListener('input', updateSimulator);
        qualitySlider.addEventListener('input', updateSimulator);
        
        // Initial call
        updateSimulator();
    </script>
</body>
</html>


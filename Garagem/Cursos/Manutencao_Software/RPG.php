<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caverna do Dragão - Quiz RPG Interativo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-gradient: radial-gradient(ellipse at top, #1e1b4b 0%, #0f172a 100%);
            --primary: #6366f1;
            --secondary: #3b82f6;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --card-bg: rgba(30, 41, 59, 0.95);
            --text-light: #f8fafc;
            --text-dark: #1e293b;
            --radius-lg: 16px;
            --radius-md: 10px;
            --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.4), 0 8px 10px -6px rgba(0, 0, 0, 0.3);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient);
            color: var(--text-light);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Progress Bar */
        #progress-container {
            position: fixed; top: 0; left: 0; width: 100%; height: 6px;
            background: rgba(255,255,255,0.1); z-index: 1000;
        }
        #progress-bar {
            height: 100%; width: 0%;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.4s ease;
        }

        .container {
            max-width: 850px; margin: 0 auto; padding: 60px 20px 40px;
            min-height: 100vh; display: flex; flex-direction: column;
        }

        /* Screens */
        .screen { display: none; width: 100%; animation: fadeIn 0.5s ease; }
        .screen.active { display: flex; flex-direction: column; align-items: center; }

        /* Cards */
        .card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            width: 100%;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }
        .card:hover { transform: translateY(-2px); box-shadow: 0 15px 35px -5px rgba(0, 0, 0, 0.5); }

        h1 { font-size: 2.2rem; margin-bottom: 0.5rem; background: linear-gradient(135deg, #818cf8, #38bdf8); -webkit-background-clip: text; background-clip: text; color: transparent; }
        h2 { font-size: 1.6rem; margin-bottom: 1rem; color: var(--text-light); }
        
        input[type="text"] {
            width: 100%; max-width: 300px; padding: 12px; border-radius: var(--radius-md);
            border: 1px solid #334155; background: #0f172a; color: white; font-size: 1rem;
            margin: 1rem 0; outline: none; transition: var(--transition);
        }
        input[type="text"]:focus { border-color: var(--primary); box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3); }

        .btn {
            padding: 14px 28px; border: none; border-radius: var(--radius-md); cursor: pointer;
            font-weight: 600; font-size: 1.1rem; transition: var(--transition); font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white; box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
            position: relative; overflow: hidden;
        }
        .btn:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(99, 102, 241, 0.6); }
        .btn-success { background: linear-gradient(135deg, var(--success), #059669); color: white; }
        .btn-warning { background: linear-gradient(135deg, var(--warning), #d97706); color: #1e293b; }
        .btn-danger { background: linear-gradient(135deg, var(--danger), #b91c1c); color: white; }
        .btn-continue {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
            color: white; box-shadow: 0 4px 15px rgba(139, 92, 246, 0.5);
            margin-top: 1.5rem; min-width: 200px;
        }
        .btn-continue:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(139, 92, 246, 0.7); }

        /* Adventure Text RPG */
        .story-box {
            background: rgba(15, 23, 42, 0.7);
            padding: 1.5rem;
            border-radius: var(--radius-md);
            margin: 1.5rem 0;
            text-align: left;
            line-height: 1.7;
            font-size: 1.05rem;
            border-left: 4px solid #8b5cf6;
        }
        .story-text { color: #cbd5e1; margin-bottom: 1rem; }
        .story-narration { color: #94a3b8; font-style: italic; font-size: 0.95rem; }

        .rpg-options {
            display: flex; flex-direction: column; gap: 0.8rem; margin: 1.5rem 0;
        }
        .rpg-option {
            background: rgba(30, 41, 59, 0.8);
            padding: 1rem 1.2rem;
            border-radius: var(--radius-md);
            border: 2px solid transparent;
            cursor: pointer;
            transition: var(--transition);
            text-align: left;
            font-size: 1rem;
            color: var(--text-light);
            position: relative;
        }
        .rpg-option:hover:not(:disabled) {
            border-color: var(--primary);
            background: rgba(99, 102, 241, 0.1);
            transform: translateX(5px);
        }
        .rpg-option.selected {
            border-color: var(--success);
            background: rgba(16, 185, 129, 0.2);
        }
        .rpg-option.wrong {
            border-color: var(--danger);
            background: rgba(239, 68, 68, 0.2);
        }

        .hp-bar {
            width: 100%; height: 20px; background: #334155; border-radius: 10px; margin: 1rem 0; overflow: hidden;
        }
        .hp-fill {
            height: 100%; background: linear-gradient(90deg, var(--success), #34d399); transition: width 0.5s ease; border-radius: 10px;
        }

        .game-stats {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1rem; margin: 1rem 0; width: 100%;
        }
        .stat-box {
            background: rgba(30, 41, 59, 0.7); padding: 1rem; border-radius: var(--radius-md); text-align: center;
        }
        .stat-value { font-size: 1.5rem; font-weight: 700; color: var(--primary); }
        .stat-label { font-size: 0.8rem; color: #94a3b8; }

        /* MCQ Options */
        .option-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; width: 100%; margin: 1.5rem 0; }
        .option {
            background: rgba(30, 41, 59, 0.8);
            padding: 1rem; border-radius: var(--radius-md);
            border: 2px solid transparent;
            cursor: pointer; transition: var(--transition);
            text-align: left; color: var(--text-light);
        }
        .option:hover:not(:disabled) { border-color: var(--secondary); background: rgba(59, 130, 246, 0.1); }
        .option.correct { border-color: var(--success); background: rgba(16, 185, 129, 0.2); }
        .option.wrong { border-color: var(--danger); background: rgba(239, 68, 68, 0.2); }
        .option:disabled { cursor: default; }

        /* Animations */
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .hidden { display: none !important; }

        @media (max-width: 768px) {
            .option-grid { grid-template-columns: 1fr; }
            .container { padding: 40px 15px; }
            h1 { font-size: 1.8rem; }
            h2 { font-size: 1.4rem; }
        }
    </style>
</head>
<body>

<div id="progress-container"><div id="progress-bar"></div></div>

<div class="container">
    <!-- Tela 1: Início -->
    <div id="screen-start" class="screen active">
        <div class="card">
            <h1>🐉 Caverna do Dragão</h1>
            <p style="color: #94a3b8; margin-bottom: 1rem;">Uma aventura interativa de Governança de Software</p>
            <input id="player-name" type="text" placeholder="Digite seu nome, aventureiro..." maxlength="20">
            <br>
            <button class="btn" onclick="startGame()">ENTRAR NA CAVERNA</button>
        </div>
    </div>

    <!-- Tela 2: Quiz MCQ -->
    <div id="screen-mcq" class="screen">
        <div class="card">
            <h2 id="mcq-q-title">Pergunta</h2>
            <p id="mcq-q-text" style="text-align: left; margin: 1rem 0; line-height: 1.6;"></p>
            <div id="mcq-options" class="option-grid"></div>
            <div id="mcq-feedback" style="margin: 1rem 0; font-weight: 500;"></div>
        </div>
    </div>

    <!-- Tela 3: Adventure Text RPG -->
    <div id="screen-adventure" class="screen">
        <div class="card">
            <h2>🗡️ Modo Aventura</h2>
            <div class="hp-bar"><div id="hp-fill" class="hp-fill" style="width: 100%;"></div></div>
            <div class="game-stats">
                <div class="stat-box"><div class="stat-value" id="adv-score">0</div><div class="stat-label">Pontos</div></div>
                <div class="stat-box"><div class="stat-value" id="adv-hp">100</div><div class="stat-label">HP</div></div>
                <div class="stat-box"><div class="stat-value" id="adv-q">1/5</div><div class="stat-label">Desafio</div></div>
            </div>
            <div class="story-box">
                <div id="story-narration" class="story-narration"></div>
                <div id="story-text" class="story-text"></div>
            </div>
            <div id="adventure-options" class="rpg-options"></div>
            <div id="adv-feedback" style="margin: 1rem 0; font-weight: 500;"></div>
            <button id="btn-continue" class="btn btn-continue hidden" onclick="continueAdventure()">CONTINUAR AVENTURA ⚔️</button>
        </div>
    </div>

    <!-- Tela 4: Resultado -->
    <div id="screen-result" class="screen">
        <div class="card">
            <h1>🏆 Aventura Concluída</h1>
            <div class="game-stats" style="margin: 2rem 0;">
                <div class="stat-box"><div class="stat-value" id="res-mcq">0</div><div class="stat-label">MCQ</div></div>
                <div class="stat-box"><div class="stat-value" id="res-adv">0</div><div class="stat-label">Aventura</div></div>
                <div class="stat-box"><div class="stat-value" id="res-total">0</div><div class="stat-label">Total</div></div>
                <div class="stat-box"><div class="stat-value" id="res-pct">0%</div><div class="stat-label">Aproveitamento</div></div>
            </div>
            <p id="end-message" style="margin-bottom: 1rem;"></p>
            <button class="btn" onclick="location.reload()">JOGAR NOVAMENTE</button>
        </div>
    </div>
</div>

<script>
// DADOS DO QUIZ
const mcqData = [
    { q: "O que acontece se negligenciarmos a conexão entre requisitos e sustentação?", opts: ["Satisfação do usuário", "Erro de Splashdown", "Redução de dívida técnica", "Simplificação de testes"], c: 1 },
    { q: "Na Matriz de Stacey, como é classificado o domínio com abordagens inovadoras?", opts: ["Domínio Simples", "Domínio Estável", "Domínio Complexo", "Domínio Linear"], c: 2 },
    { q: "Qual é a vantagem de abordagens adaptativas em ambientes voláteis?", opts: ["Controle financeiro", "Iterações curtas e feedback constante", "Redução de equipe", "Eliminação de documentação"], c: 1 },
    { q: "Qual métrica NÃO deve ser usada exclusivamente para evitar surpresas?", opts: ["Frequência de feedback", "Dívida técnica", "Tecnologias 'Unproven'", "LOC (Linhas de Código)"], c: 3 },
    { q: "O 'Gatilho Arquitetural para Modernização' ocorre quando:", opts: ["Equipe lotada", "Custo + Dívida > Valor de Negócio", "Cliente pede nuvem", "Documentação cheia"], c: 1 }
];

// DADOS DO ADVENTURE TEXT RPG (5 perguntas com história)
const adventureData = [
    {
        narration: "📜 Você entra na Caverna do Dragão. Uma névoa densa cobre o chão de pedra. À sua frente, três caminhos se abrem...",
        story: "O Mestre dos Magos aparece em uma névoa azul: 'Aventureiro, para derrotar o Dragão da Dívida Técnica, você deve provar sua sabedoria. O primeiro desafio é sobre os fundamentos da governança...'",
        question: "Qual é o princípio fundamental que evita o 'Erro de Splashdown'?",
        opts: [
            { text: "Planejar sustentação desde a fase de Requisitos", correct: true, text_success: "O Mestre sorri: 'Exato! Planejar desde o início evita desastres no Go-Live.'", text_fail: "O chão treme... 'Não! Sem planejamento nos requisitos, as falhas surgem tarde demais!'" },
            { text: "Focar apenas em testes de aceitação", correct: false, text_success: "O Mestre sorri: 'Exato! Planejar desde o início evita desastres no Go-Live.'", text_fail: "O chão treme... 'Não! Sem planejamento nos requisitos, as falhas surgem tarde demais!'" },
            { text: "Usar apenas metodologias ágeis", correct: false, text_success: "O Mestre sorri: 'Exato! Planejar desde o início evita desastres no Go-Live.'", text_fail: "O chão treme... 'Não! Sem planejamento nos requisitos, as falhas surgem tarde demais!'" },
            { text: "Documentar tudo no final do projeto", correct: false, text_success: "O Mestre sorri: 'Exato! Planejar desde o início evita desastres no Go-Live.'", text_fail: "O chão treme... 'Não! Sem planejamento nos requisitos, as falhas surgem tarde demais!'" }
        ]
    },
    {
        narration: "🔥 Você avança pelo corredor de tochas. O ar fica mais quente. Uma porta antiga com runas antigas bloqueia sua passagem...",
        story: "As runas brilham em roxo: 'Para passar, decifre o enigma da Matriz de Stacey. Em domínios complexos, qual é o caminho do herói?'",
        question: "No Domínio Complexo da Matriz de Stacey, qual abordagem é recomendada?",
        opts: [
            { text: "Seguir processos rígidos e comprovados", correct: false, text_success: "A porta se abre com um estrondo! 'Correto! No complexo, adaptamos com feedback iterativo.'", text_fail: "Runas vermelhas brilham! 'Errado! No complexo, rigidez é a derrota. Precisamos de iteração e feedback!'" },
            { text: "Usar iteração e feedback para reduzir incertezas", correct: true, text_success: "A porta se abre com um estrondo! 'Correto! No complexo, adaptamos com feedback iterativo.'", text_fail: "Runas vermelhas brilham! 'Errado! No complexo, rigidez é a derrota. Precisamos de iteração e feedback!'" },
            { text: "Ignorar incertezas e seguir em frente", correct: false, text_success: "A porta se abre com um estrondo! 'Correto! No complexo, adaptamos com feedback iterativo.'", text_fail: "Runas vermelhas brilham! 'Errado! No complexo, rigidez é a derrota. Precisamos de iteração e feedback!'" },
            { text: "Delegar decisões à equipe de gestão", correct: false, text_success: "A porta se abre com um estrondo! 'Correto! No complexo, adaptamos com feedback iterativo.'", text_fail: "Runas vermelhas brilham! 'Errado! No complexo, rigidez é a derrota. Precisamos de iteração e feedback!'" }
        ]
    },
    {
        narration: "⚔️ Uma armadilha se fecha! Você desvia por pouco e entra em uma sala com um antigo grimório aberto...",
        story: "O grimório revela: 'Para vencer o Dragão, você deve medir seu poder. Mas cuidado com as métricas enganosas...'",
        question: "Qual métrica o consultor recomenda para avaliar valor de negócio em contratos?",
        opts: [
            { text: "LOC (Linhas de Código)", correct: false, text_success: "O grimório brilha dourado! 'Exato! Function Points medem valor real, não linhas.'", text_fail: "Páginas queimam! 'LOC é enganosa! Depende da linguagem. Function Points medem valor real.'" },
            { text: "Function Points (FP)", correct: true, text_success: "O grimório brilha dourado! 'Exato! Function Points medem valor real, não linhas.'", text_fail: "Páginas queimam! 'LOC é enganosa! Depende da linguagem. Function Points medem valor real.'" },
            { text: "COCOMO Básico", correct: false, text_success: "O grimório brilha dourado! 'Exato! Function Points medem valor real, não linhas.'", text_fail: "Páginas queimam! 'LOC é enganosa! Depende da linguagem. Function Points medem valor real.'" },
            { text: "Número de commits por sprint", correct: false, text_success: "O grimório brilha dourado! 'Exato! Function Points medem valor real, não linhas.'", text_fail: "Páginas queimam! 'LOC é enganosa! Depende da linguagem. Function Points medem valor real.'" }
        ]
    },
    {
        narration: "🐉 O calor aumenta. Você chega a uma câmara imensa. O Dragão da Dívida Técnica dorme sobre uma montanha de bugs...",
        story: "O Dragão abre um olho: 'Para me derrotar, responda: quando devo ser enfrentado com Reengenharia em vez de manutenção?'",
        question: "Quando a Reengenharia se torna imperativa em vez da manutenção incremental?",
        opts: [
            { text: "Quando a equipe atinge capacidade máxima", correct: false, text_success: "O dragão ruge! 'Correto! Quando custo e dívida superam o valor, a reengenharia é necessária!'", text_fail: "Fogo! 'Errado! Reengenharia é quando o custo e a dívida técnica superam o valor de negócio!'" },
            { text: "Quando o cliente solicita migração para nuvem", correct: false, text_success: "O dragão ruge! 'Correto! Quando custo e dívida superam o valor, a reengenharia é necessária!'", text_fail: "Fogo! 'Errado! Reengenharia é quando o custo e a dívida técnica superam o valor de negócio!'" },
            { text: "Quando custo + dívida técnica > valor de negócio", correct: true, text_success: "O dragão ruge! 'Correto! Quando custo e dívida superam o valor, a reengenharia é necessária!'", text_fail: "Fogo! 'Errado! Reengenharia é quando o custo e a dívida técnica superam o valor de negócio!'" },
            { text: "Quando a documentação fica desatualizada", correct: false, text_success: "O dragão ruge! 'Correto! Quando custo e dívida superam o valor, a reengenharia é necessária!'", text_fail: "Fogo! 'Errado! Reengenharia é quando o custo e a dívida técnica superam o valor de negócio!'" }
        ]
    },
    {
        narration: "💎 O dragão é derrotado! Um brilho azul ilumina a câmara. O Mestre dos Magos aparece com o prêmio final...",
        story: "O último desafio! 'O PMBOK 8 traz um pilar central. Qual é o novo pilar que garante o futuro do projeto?'",
        question: "Qual é o pilar central introduzido pelo PMBOK 8ª Edição?",
        opts: [
            { text: "Entrega Rápida de Valor", correct: false, text_success: "Luz divina! 'Correto! Sustentabilidade Econômica, Social e Ambiental é o pilar central!'", text_fail: "Trevas! 'Não! Sustentabilidade (Econômica, Social, Ambiental) é o pilar central do PMBOK 8!'" },
            { text: "Redução de Custos Operacionais", correct: false, text_success: "Luz divina! 'Correto! Sustentabilidade Econômica, Social e Ambiental é o pilar central!'", text_fail: "Trevas! 'Não! Sustentabilidade (Econômica, Social, Ambiental) é o pilar central do PMBOK 8!'" },
            { text: "Sustentabilidade (Econômica, Social, Ambiental)", correct: true, text_success: "Luz divina! 'Correto! Sustentabilidade Econômica, Social e Ambiental é o pilar central!'", text_fail: "Trevas! 'Não! Sustentabilidade (Econômica, Social, Ambiental) é o pilar central do PMBOK 8!'" },
            { text: "Automação Completa de Processos", correct: false, text_success: "Luz divina! 'Correto! Sustentabilidade Econômica, Social e Ambiental é o pilar central!'", text_fail: "Trevas! 'Não! Sustentabilidade (Econômica, Social, Ambiental) é o pilar central do PMBOK 8!'" }
        ]
    }
];

// ESTADO DO JOGO
let state = {
    screen: 'start', name: '', mcqIdx: 0, mcqScore: 0,
    advIdx: 0, advScore: 0, advHP: 100, answered: false
};

function showScreen(id) {
    document.querySelectorAll('.screen').forEach(s => s.classList.remove('active'));
    document.getElementById('screen-' + id).classList.add('active');
    updateProgress();
}

function startGame() {
    const name = document.getElementById('player-name').value.trim();
    if (!name) return alert("Digite seu nome, aventureiro!");
    state.name = name;
    showScreen('mcq');
    loadMCQ();
}

// MCQ GAME
function loadMCQ() {
    state.answered = false;
    const q = mcqData[state.mcqIdx];
    document.getElementById('mcq-q-title').innerText = `Pergunta ${state.mcqIdx + 1} de ${mcqData.length}`;
    document.getElementById('mcq-q-text').innerText = q.q;
    document.getElementById('mcq-feedback').innerText = '';
    
    const container = document.getElementById('mcq-options');
    container.innerHTML = '';
    const letters = ['A', 'B', 'C', 'D'];
    q.opts.forEach((opt, i) => {
        const div = document.createElement('button');
        div.className = 'option';
        div.innerHTML = `<strong style="color: var(--primary); margin-right: 8px;">${letters[i]}.</strong> ${opt}`;
        div.onclick = () => checkMCQ(i, div);
        container.appendChild(div);
    });
}

function checkMCQ(idx, btn) {
    if (state.answered) return;
    state.answered = true;
    const q = mcqData[state.mcqIdx];
    const btns = document.querySelectorAll('.option');
    btns.forEach(b => b.disabled = true);
    
    if (idx === q.c) {
        state.mcqScore++;
        btn.classList.add('correct');
        document.getElementById('mcq-feedback').style.color = 'var(--success)';
        document.getElementById('mcq-feedback').innerText = '✅ Correto!';
    } else {
        btn.classList.add('wrong');
        btns[q.c].classList.add('correct');
        document.getElementById('mcq-feedback').style.color = 'var(--danger)';
        document.getElementById('mcq-feedback').innerText = '❌ Incorreto!';
    }
    
    setTimeout(() => {
        if (state.mcqIdx < mcqData.length - 1) {
            state.mcqIdx++;
            loadMCQ();
        } else {
            // Iniciar Adventure Text após MCQ
            showScreen('adventure');
            loadAdventure();
        }
    }, 1500);
}

// ADVENTURE TEXT GAME
function loadAdventure() {
    state.answered = false;
    const adv = adventureData[state.advIdx];
    document.getElementById('adv-q').innerText = `${state.advIdx + 1}/5`;
    document.getElementById('adv-score').innerText = state.advScore;
    document.getElementById('adv-hp').innerText = state.advHP;
    document.getElementById('hp-fill').style.width = state.advHP + '%';
    document.getElementById('story-narration').innerText = adv.narration;
    document.getElementById('story-text').innerText = adv.story + '\n\n❓ ' + adv.question;
    document.getElementById('adv-feedback').innerText = '';
    document.getElementById('btn-continue').classList.add('hidden');
    
    const container = document.getElementById('adventure-options');
    container.innerHTML = '';
    const letters = ['A', 'B', 'C', 'D'];
    adv.opts.forEach((opt, i) => {
        const btn = document.createElement('button');
        btn.className = 'rpg-option';
        btn.innerHTML = `<strong style="color: var(--primary); margin-right: 8px;">${letters[i]}.</strong> ${opt.text}`;
        btn.onclick = () => checkAdventure(i, btn, opt);
        container.appendChild(btn);
    });
}

function checkAdventure(idx, btn, opt) {
    if (state.answered) return;
    state.answered = true;
    const btns = document.querySelectorAll('.rpg-option');
    btns.forEach(b => b.disabled = true);
    
    if (opt.correct) {
        btn.classList.add('selected');
        state.advScore += 20;
        document.getElementById('adv-feedback').style.color = 'var(--success)';
        document.getElementById('adv-feedback').innerText = opt.text_success;
        document.getElementById('adv-score').innerText = state.advScore;
    } else {
        btn.classList.add('wrong');
        state.advHP = Math.max(0, state.advHP - 25);
        document.getElementById('hp-fill').style.width = state.advHP + '%';
        document.getElementById('adv-hp').innerText = state.advHP;
        document.getElementById('adv-feedback').style.color = 'var(--danger)';
        document.getElementById('adv-feedback').innerText = opt.text_fail;
        
        if (state.advHP <= 0) {
            setTimeout(() => {
                showScreen('result');
                showResult();
            }, 2000);
            return;
        }
    }
    
    // Mostrar botão continuar
    document.getElementById('btn-continue').classList.remove('hidden');
}

function continueAdventure() {
    state.advIdx++;
    if (state.advIdx < adventureData.length) {
        loadAdventure();
    } else {
        showScreen('result');
        showResult();
    }
}

// RESULTADO
function showResult() {
    const total = state.mcqScore + state.advScore;
    const maxTotal = mcqData.length + (adventureData.length * 20);
    const pct = Math.round((total / maxTotal) * 100);
    
    document.getElementById('res-mcq').innerText = state.mcqScore;
    document.getElementById('res-adv').innerText = state.advScore;
    document.getElementById('res-total').innerText = total;
    document.getElementById('res-pct').innerText = pct + '%';
    
    const msg = document.getElementById('end-message');
    if (pct >= 80) {
        msg.innerHTML = `🎉 <strong>Parabéns, ${state.name}!</strong> Você é um verdadeiro Mestre da Governança!`;
        msg.style.color = 'var(--success)';
    } else if (pct >= 50) {
        msg.innerHTML = `⚔️ <strong>Bom trabalho, ${state.name}!</strong> Você sobreviveu à caverna, mas pode melhorar.`;
        msg.style.color = 'var(--warning)';
    } else {
        msg.innerHTML = `📜 <strong>${state.name}, a caverna te derrotou...</strong> Estude mais e tente novamente!`;
        msg.style.color = 'var(--danger)';
    }
}

function updateProgress() {
    let pct = 0;
    if (state.screen === 'mcq') pct = (state.mcqIdx / mcqData.length) * 50;
    else if (state.screen === 'adventure') pct = 50 + (state.advIdx / adventureData.length) * 50;
    else if (state.screen === 'result') pct = 100;
    document.getElementById('progress-bar').style.width = pct + '%';
}
</script>

</body>
</html>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🎓 Quiz & Estudo: Análise de Sistemas</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Fira+Code:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* 🌟 DESIGN SYSTEM 2025 */
    :root {
      --bg-gradient: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #312e81 100%);
      --glass: rgba(255, 255, 255, 0.08);
      --glass-border: rgba(255, 255, 255, 0.15);
      --text-main: #f8fafc;
      --text-muted: #94a3b8;
      --accent: #6366f1;
      --accent-glow: #818cf8;
      --success: #10b981;
      --error: #ef4444;
      --card-bg: #1e293b;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    
    body {
      font-family: 'Inter', sans-serif;
      background: var(--bg-gradient);
      color: var(--text-main);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* 🧱 LAYOUT */
    header {
      padding: 2rem 1rem;
      text-align: center;
      background: rgba(0,0,0,0.2);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--glass-border);
      position: relative;
      z-index: 10;
    }
    header h1 { font-weight: 800; font-size: clamp(1.5rem, 4vw, 2.2rem); background: linear-gradient(to right, #818cf8, #c084fc); -webkit-background-clip: text; color: transparent; }
    header p { color: var(--text-muted); font-size: 1rem; margin-top: 0.5rem; }

    main { max-width: 1000px; margin: 2rem auto; padding: 0 1rem; position: relative; }

    /* 🎛️ TABS NAVIGATION */
    .tabs {
      display: flex; gap: 1rem; justify-content: center; margin-bottom: 2rem;
      background: var(--glass); padding: 0.5rem; border-radius: 16px; border: 1px solid var(--glass-border);
      width: fit-content; margin-left: auto; margin-right: auto;
    }
    .tab-btn {
      background: transparent; border: none; color: var(--text-muted); padding: 0.8rem 1.5rem;
      border-radius: 12px; cursor: pointer; font-weight: 600; transition: 0.3s;
      font-size: 0.95rem;
    }
    .tab-btn.active { background: var(--accent); color: white; box-shadow: 0 0 15px rgba(99, 102, 241, 0.4); }

    /* 🎮 QUIZ STYLES */
    .quiz-card {
      background: var(--card-bg); border-radius: 20px; padding: 2rem;
      box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 1px solid var(--glass-border);
      animation: slideUp 0.4s ease;
    }
    .q-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
    .q-badge { background: rgba(99, 102, 241, 0.2); color: var(--accent-glow); padding: 0.4rem 0.8rem; border-radius: 99px; font-size: 0.8rem; font-weight: 700; }
    .q-text { font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.6; }
    
    .options-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
    @media (max-width: 600px) { .options-grid { grid-template-columns: 1fr; } }
    
    .opt-btn {
      background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);
      color: var(--text-main); padding: 1rem 1.2rem; border-radius: 12px; cursor: pointer;
      text-align: left; transition: 0.2s; position: relative; overflow: hidden;
    }
    .opt-btn:hover:not(:disabled) { background: rgba(255,255,255,0.15); border-color: var(--accent-glow); }
    .opt-btn.correct { background: rgba(16, 185, 129, 0.2); border-color: var(--success); color: #34d399; }
    .opt-btn.wrong { background: rgba(239, 68, 68, 0.2); border-color: var(--error); color: #f87171; }

    .feedback-box { margin-top: 1.5rem; padding: 1rem; border-radius: 10px; display: none; background: rgba(0,0,0,0.2); border-left: 4px solid var(--accent); }
    .feedback-box.show { display: block; animation: fadeIn 0.3s; }

    /* 📝 DISCURSIVE CARDS STYLES */
    .discursivas-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;
    }
    .d-card {
      background: var(--glass); border: 1px solid var(--glass-border);
      border-radius: 20px; overflow: hidden; backdrop-filter: blur(10px);
      transition: transform 0.3s; position: relative;
    }
    .d-card:hover { transform: translateY(-5px); border-color: rgba(255,255,255,0.3); }
    
    .d-header {
      background: linear-gradient(to right, rgba(99, 102, 241, 0.2), transparent);
      padding: 1.5rem; border-bottom: 1px solid var(--glass-border);
    }
    .d-num { font-size: 2rem; font-weight: 800; color: rgba(255,255,255,0.1); position: absolute; top: 10px; right: 20px; }
    .d-context { font-size: 0.85rem; color: var(--accent-glow); text-transform: uppercase; letter-spacing: 1px; font-weight: 700; margin-bottom: 0.5rem; }
    .d-title { font-size: 1.1rem; font-weight: 600; }
    
    .d-body { padding: 1.5rem; }
    .d-situation { font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.5rem; line-height: 1.5; }
    
    .reveal-btn {
      background: var(--accent); color: white; border: none; width: 100%; padding: 0.8rem;
      border-radius: 10px; cursor: pointer; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 0.5rem;
      transition: 0.2s;
    }
    .reveal-btn:hover { background: #4f46e5; }
    
    .d-answer {
      max-height: 0; overflow: hidden; transition: max-height 0.5s ease; background: rgba(0,0,0,0.2);
      border-radius: 0 0 20px 20px;
    }
    .d-card.open .d-answer { max-height: 500px; }
    .d-answer-content { padding: 1.5rem; font-size: 0.9rem; line-height: 1.6; color: #e2e8f0; border-top: 1px solid var(--glass-border); }
    .highlight { color: var(--success); font-weight: 600; }

    /* 🔘 CONTROLS */
    .controls { display: flex; justify-content: center; gap: 1rem; margin-top: 2rem; }
    .btn-main {
      background: linear-gradient(90deg, var(--accent), #8b5cf6); color: white; border: none; padding: 1rem 2rem;
      border-radius: 99px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 5px 15px rgba(99,102,241,0.4); transition: 0.3s;
    }
    .btn-main:hover { transform: scale(1.05); box-shadow: 0 8px 25px rgba(99,102,241,0.6); }

    .hidden { display: none !important; }

    /* 🌈 ANIMAÇÕES */
    @keyframes slideUp { from { transform: translateY(20px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

    /* 🏆 PRIZE LADDER */
    .prize-bar {
      background: rgba(0,0,0,0.3); padding: 0.8rem; border-radius: 10px; margin-top: 1.5rem;
      text-align: center; font-family: 'Fira Code', monospace; font-weight: 600;
      border: 1px solid var(--glass-border);
    }
    .money-val { color: var(--success); font-size: 1.2rem; }
  </style>
</head>
<body>

<header>
  <h1>🎓 Quiz & Estudo: Análise de Sistemas</h1>
  <p>UML • User Stories • Documento de Visão • MVP</p>
</header>

<main>
  <!-- TABS -->
  <div class="tabs">
    <button class="tab-btn active" onclick="switchTab('quiz')">🎮 Quiz do Milhão (1-16)</button>
    <button class="tab-btn" onclick="switchTab('discursivas')">📝 Questões Discursivas (17-20)</button>
  </div>

  <!-- QUIZ SECTION -->
  <section id="quiz-tab">
    <!-- START SCREEN -->
    <div id="start-screen" class="quiz-card" style="text-align: center; padding: 3rem 1rem;">
      <div style="font-size: 4rem; margin-bottom: 1rem;">🏆</div>
      <h2 style="font-size: 2rem; margin-bottom: 1rem;">Bem-vindo ao Desafio!</h2>
      <p style="color: var(--text-muted); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
        16 perguntas progressivas sobre Análise de Projeto de Sistemas. 
        Responda corretamente e suba a escada de prêmios! 
        Não esqueça de conferir as questões discursivas na outra aba.
      </p>
      <button class="btn-main" onclick="startGame()">🚀 Iniciar Quiz</button>
    </div>

    <!-- GAME SCREEN -->
    <div id="game-screen" class="quiz-card hidden">
      <div class="q-header">
        <span class="q-badge" id="q-count">Questão 1/16</span>
        <span style="color: var(--text-muted); font-size: 0.9rem;" id="timer">⏱️ Sem limite</span>
      </div>
      <h2 class="q-text" id="q-text">Carregando...</h2>
      <div class="options-grid" id="opts"></div>
      
      <div id="feedback" class="feedback-box"></div>

      <div class="prize-bar">
        Prêmio Atual: <span class="money-val" id="prize-display">R$ 0</span>
      </div>

      <div class="controls hidden" id="next-btn-area">
        <button class="btn-main" onclick="nextQ()">Próxima ➔</button>
      </div>
    </div>

    <!-- RESULT SCREEN -->
    <div id="result-screen" class="quiz-card hidden" style="text-align: center;">
      <div id="result-emoji" style="font-size: 4rem; margin-bottom: 1rem;">🎉</div>
      <h2 id="result-title" style="font-size: 2rem; margin-bottom: 0.5rem;">Fim de Jogo!</h2>
      <p id="result-msg" style="color: var(--text-muted); margin-bottom: 2rem;">Você foi muito bem.</p>
      <div class="prize-bar" style="margin-bottom: 2rem; padding: 1.5rem;">
        <div style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 0.5rem;">SEU PRÊMIO FINAL</div>
        <span class="money-val" id="final-score" style="font-size: 2rem;">R$ 0</span>
      </div>
      <button class="btn-main" onclick="location.reload()">🔄 Jogar Novamente</button>
    </div>
  </section>

  <!-- DISCURSIVES SECTION -->
  <section id="discursivas-tab" class="hidden">
    <div style="text-align: center; margin-bottom: 2rem;">
      <h2 style="font-size: 1.8rem; margin-bottom: 0.5rem;">📚 Questões Discursivas & Estudo</h2>
      <p style="color: var(--text-muted);">Analise os cenários e estude as sugestões de resposta. Clique nos botões para revelar.</p>
    </div>

    <div class="discursivas-grid">
      
      <!-- CARD 17 -->
      <article class="d-card">
        <div class="d-header">
          <span class="d-num">17</span>
          <div class="d-context">Documento de Visão</div>
          <div class="d-title">Sistema de Gestão Acadêmica</div>
        </div>
        <div class="d-body">
          <p class="d-situation">
            <strong>Situação:</strong> Gestão fragmentada de dados afeta professores e alunos. O gestor pede uma <em>Declaração do Problema</em>.
            <br><br>
            <strong>Desafio:</strong> Elabore a declaração focando em: (a) alinhamento de stakeholders, (b) elementos essenciais, e (c) redução de riscos.
          </p>
          <button class="reveal-btn" onclick="toggleCard(this)">💡 Ver Sugestão de Resposta</button>
        </div>
        <div class="d-answer">
          <div class="d-answer-content">
            <p>Uma declaração eficaz seria:</p>
            <p><em>"O problema da gestão fragmentada (matrículas, notas) afeta gestores e alunos, gerando retrabalho e inconsistência. Uma solução bem-sucedida incluiria centralização e automação."</em></p>
            <hr style="border-color: rgba(255,255,255,0.1); margin: 1rem 0;">
            <ul style="list-style: none;">
              <li class="highlight">✔ Elementos:</li>
              <li style="color: var(--text-muted); font-size: 0.85rem;">Problema claro, stakeholders afetados, impacto negativo e benefícios esperados.</li>
              <li class="highlight">✔ Redução de Riscos:</li>
              <li style="color: var(--text-muted); font-size: 0.85rem;">Evita <strong>scope creep</strong> (aumento descontrolado de escopo) e alinha expectativas, servindo como bússola para o projeto.</li>
            </ul>
          </div>
        </div>
      </article>

      <!-- CARD 18 -->
      <article class="d-card">
        <div class="d-header">
          <span class="d-num">18</span>
          <div class="d-context">User Stories (Agile)</div>
          <div class="d-title">Checkout E-commerce</div>
        </div>
        <div class="d-body">
          <p class="d-situation">
            <strong>Situação:</strong> Story proposta: "Como usuário, quero realizar o checkout."
            <br><br>
            <strong>Desafio:</strong> Critique a proposta. Identifique falhas na estrutura padrão, reescreva corretamente e explique a importância do benefício.
          </p>
          <button class="reveal-btn" onclick="toggleCard(this)">💡 Ver Sugestão de Resposta</button>
        </div>
        <div class="d-answer">
          <div class="d-answer-content">
            <p><strong>Crítica:</strong> O papel "usuário" é genérico e falta o benefício ("para quê?").</p>
            <p><em>"Como <strong>cliente cadastrado</strong>, quero finalizar minha compra com cartão ou boleto, <strong>para receber a confirmação imediata do pedido</strong>."</em></p>
            <hr style="border-color: rgba(255,255,255,0.1); margin: 1rem 0;">
            <ul style="list-style: none;">
              <li class="highlight">✔ Por que o benefício importa?</li>
              <li style="color: var(--text-muted); font-size: 0.85rem;">Ele foca no <strong>valor de negócio</strong>, não na implementação técnica. Permite que o dev encontre a melhor solução técnica para aquele objetivo específico.</li>
            </ul>
          </div>
        </div>
      </article>

      <!-- CARD 19 -->
      <article class="d-card">
        <div class="d-header">
          <span class="d-num">19</span>
          <div class="d-context">Diagramas UML</div>
          <div class="d-title">Health Wearable (Relógio)</div>
        </div>
        <div class="d-body">
          <p class="d-situation">
            <strong>Situação:</strong> Desenvolvimento de sistema monitoramento de saúde.
            <br><br>
            <strong>Desafio:</strong> Proponha um diagrama <strong>estrutural</strong> e um <strong>comportamental</strong> adequados, justificando a escolha.
          </p>
          <button class="reveal-btn" onclick="toggleCard(this)">💡 Ver Sugestão de Resposta</button>
        </div>
        <div class="d-answer">
          <div class="d-answer-content">
            <ul style="list-style: none; margin-bottom: 1rem;">
              <li class="highlight">1. Estrutural: Diagrama de Classes</li>
              <li style="color: var(--text-muted); font-size: 0.85rem;">Essencial para modelar as entidades estáticas: Paciente, Dispositivo, Leitura, Alerta e seus atributos.</li>
              <li class="highlight">2. Comportamental: Diagrama de Sequência</li>
              <li style="color: var(--text-muted); font-size: 0.85rem;">Ideal para mostrar a ordem temporal das mensagens: Dispositivo envia dado -> Servidor processa -> Dispara alerta se crítico.</li>
            </ul>
            <p><em>Combinação: Garante consistência dos dados (Classe) e valida a lógica de fluxo em tempo real (Sequência).</em></p>
          </div>
        </div>
      </article>

      <!-- CARD 20 -->
      <article class="d-card">
        <div class="d-header">
          <span class="d-num">20</span>
          <div class="d-context">Priorização (Doc. Visão)</div>
          <div class="d-title">App Mobilidade Urbana</div>
        </div>
        <div class="d-body">
          <p class="d-situation">
            <strong>Situação:</strong> Coordenador precisa priorizar features usando atributos: Benefício, Esforço e Risco.
            <br><br>
            <strong>Desafio:</strong> Crie um critério de priorização e uma matriz de decisão simples.
          </p>
          <button class="reveal-btn" onclick="toggleCard(this)">💡 Ver Sugestão de Resposta</button>
        </div>
        <div class="d-answer">
          <div class="d-answer-content">
            <p><strong>Matriz de Decisão:</strong> Calcular Índice = (Benefício × Risco Inverso) / Esforço.</p>
            <p><em>Prioridade Máxima = Alto Benefício + Baixo Esforço + Baixo Risco.</em></p>
            <hr style="border-color: rgba(255,255,255,0.1); margin: 1rem 0;">
            <ul style="list-style: none;">
              <li class="highlight">✔ Atributo "Lançamento de Destino":</li>
              <li style="color: var(--text-muted); font-size: 0.85rem;">Funcionalidades essenciais para o <strong>MVP (v1.0)</strong> recebem prioridade automática se tiverem "Lançamento" definido como v1.0. Melhorias (v2.0) ficam no backlog futuro.</li>
            </ul>
          </div>
        </div>
      </article>

    </div>
  </section>

</main>

<script>
  // 📦 BANCO DE DADOS (Múltipla Escolha)
  const quizData = [
    { q: "Qual diagrama UML mostra componentes físicos (servidores, hardware)?", o: ["Classe", "Implantação", "Pacote", "Objeto"], c: 1, t: "Implantação foca no hardware." },
    { q: "Na User Story: 'Como cliente, quero filtrar por preço...', o que é o BENEFÍT?", o: ["Filtrar", "Cliente", "Encontrar itens no orçamento", "Preço"], c: 2, t: "Benefício é o 'para quê'." },
    { q: "Dois objetivos do Documento de Visão:", o: ["Substituir reuniões", "Definir escopo e reduzir riscos", "Detalhar algoritmos", "Garantir lucro"], c: 1, t: "Visão alinha o 'quê', não o 'como'." },
    { q: "Diagrama para 'instantâneo' do sistema (instâncias em tempo real):", o: ["Classe", "Objeto", "Sequência", "Estado"], c: 1, t: "Objeto é a instância da Classe." },
    { q: "User Stories devem ser:", o: ["Detalhadas tecnicamente", "Curtas e focadas em valor", "Longas descrições", "Feitas só por devs"], c: 1, t: "Foco no valor do usuário, não em código." },
    { q: "Sequência da Declaração de Posicionamento:", o: ["Cliente -> Necessidade -> Produto...", "Problema -> Solução...", "Oportunidade -> Preço...", "Funcionalidade -> Teste..."], c: 0, t: "Modelo padrão de posicionamento de produto." },
    { q: "Diagrama que mostra interação ATOR vs SISTEMA (Objetivos):", o: ["Sequência", "Comunicação", "Caso de Uso", "Estado"], c: 2, t: "Caso de Uso mostra o que o ator quer." },
    { q: "Atributos como (Benefício, Risco, Esforço) servem para:", o: ["Análise de viabilidade", "Gerenciamento e Priorização", "Definir arquitetura", "Eliminar testes"], c: 1, t: "Ajudam o PO a decidir o que fazer primeiro." },
    { q: "Para modelar a ORDEM TEMPORAL de mensagens, use:", o: ["Classe", "Pacote", "Sequência", "Componente"], c: 2, t: "Sequência = Tempo vertical." },
    { q: "Exemplos de Restrições no Doc. Visão:", o: ["Métricas de sucesso", "Design, externas, regulatórias", "Critérios de aceitação", "Modelos de domínio"], c: 1, t: "Restrições são limites (leis, design, hardware)." },
    { q: "O Diagrama de Estado representa:", o: ["Componentes físicos", "Grupos lógicos", "Mudanças de estado por eventos", "Sequência de mensagens"], c: 2, t: "Ex: Pedido (Pendente -> Pago -> Enviado)." },
    { q: "Benefício da story: 'Gerar relatórios para MONITORAR o uso':", o: ["Gráficos", "Tomada de decisões", "Algoritmos", "E-mail"], c: 1, t: "O valor é a inteligência (decisão)." },
    { q: "Resumo de Funcionalidades (Exemplo correto):", o: ["Usará Java 17", "Base de conhecimento auxilia equipe", "BD replicado", "Usaremos Scrum"], c: 1, t: "Foca no benefício ao usuário final." },
    { q: "Diagrama de Componente detalha:", o: ["Módulos/Bibliotecas (software)", "Hardware (servidores)", "Grupos lógicos", "Instâncias"], c: 0, t: "Componente = Blocos de código/libs." },
    { q: "Relação User Stories x Ágil:", o: ["Substituem documentação", "São fixas", "Unidades de trabalho focadas em valor", "Só devs escrevem"], c: 2, t: "Moeda de troca em métodos ágeis." }
  ];

  // 🎮 LÓGICA DO JOGO
  let currentQ = 0;
  let score = 0;
  const prizes = [100, 500, 1000, 2500, 5000, 10000, 20000, 50000, 100000, 200000, 400000, 500000, 700000, 900000, 1000000];
  let locked = false;

  function switchTab(tabName) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tabs button')[tabName === 'quiz' ? 0 : 1].classList.add('active');
    
    if(tabName === 'quiz') {
      document.getElementById('quiz-tab').classList.remove('hidden');
      document.getElementById('discursivas-tab').classList.add('hidden');
    } else {
      document.getElementById('quiz-tab').classList.add('hidden');
      document.getElementById('discursivas-tab').classList.remove('hidden');
    }
  }

  function startGame() {
    document.getElementById('start-screen').classList.add('hidden');
    document.getElementById('game-screen').classList.remove('hidden');
    loadQuestion();
  }

  function loadQuestion() {
    const data = quizData[currentQ];
    locked = false;
    document.getElementById('q-count').innerText = `Questão ${currentQ + 1}/16`;
    document.getElementById('q-text').innerText = data.q;
    document.getElementById('feedback').classList.remove('show');
    document.getElementById('next-btn-area').classList.add('hidden');
    document.getElementById('prize-display').innerText = currentQ > 0 ? `R$ ${prizes[currentQ-1].toLocaleString('pt-BR')}` : "R$ 0";

    const optsDiv = document.getElementById('opts');
    optsDiv.innerHTML = '';

    data.o.forEach((opt, idx) => {
      const btn = document.createElement('button');
      btn.className = 'opt-btn';
      btn.innerText = opt;
      btn.onclick = () => checkAnswer(idx, btn);
      optsDiv.appendChild(btn);
    });
  }

  function checkAnswer(idx, btn) {
    if(locked) return;
    locked = true;
    const data = quizData[currentQ];
    const opts = document.querySelectorAll('.opt-btn');
    const fb = document.getElementById('feedback');

    if(idx === data.c) {
      btn.classList.add('correct');
      score++;
      fb.innerHTML = `✅ <strong>Correto!</strong><br><span style="color:#94a3b8; font-size:0.9rem">${data.t}</span>`;
      fb.style.borderLeftColor = 'var(--success)';
    } else {
      btn.classList.add('wrong');
      opts[data.c].classList.add('correct');
      fb.innerHTML = `❌ <strong>Incorreto.</strong> A resposta certa é: ${data.o[data.c]}`;
      fb.style.borderLeftColor = 'var(--error)';
    }
    
    fb.classList.add('show');
    document.getElementById('next-btn-area').classList.remove('hidden');
  }

  function nextQ() {
    currentQ++;
    if(currentQ < quizData.length) {
      loadQuestion();
    } else {
      showResult();
    }
  }

  function showResult() {
    document.getElementById('game-screen').classList.add('hidden');
    document.getElementById('result-screen').classList.remove('hidden');
    
    const finalPrize = prizes[Math.min(score - 1, 14)] || 0;
    document.getElementById('final-score').innerText = `R$ ${finalPrize.toLocaleString('pt-BR')}`;
    
    const title = document.getElementById('result-title');
    const msg = document.getElementById('result-msg');
    const emoji = document.getElementById('result-emoji');

    if(score >= 12) {
      title.innerText = "🏆 MESTRE DOS SISTEMAS!";
      msg.innerText = "Impressionante! Você domina UML e Visão de Produto.";
      emoji.innerText = "🥇";
    } else if (score >= 7) {
      title.innerText = "👍 Bom Trabalho!";
      msg.innerText = "Você tem uma base sólida, mas revise os detalhes.";
      emoji.innerText = "🥈";
    } else {
      title.innerText = "📚 Hora de Estudar!";
      msg.innerText = "Não desanime. Revise o material e tente novamente.";
      emoji.innerText = "🥉";
    }
  }

  // 💡 DISCURSIVE CARDS LOGIC
  function toggleCard(btn) {
    const card = btn.closest('.d-card');
    card.classList.toggle('open');
    btn.innerText = card.classList.contains('open') ? '🔼 Ocultar Resposta' : '💡 Ver Sugestão de Resposta';
  }
</script>
</body>
</html>


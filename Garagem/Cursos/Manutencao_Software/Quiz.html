<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Tech: Governança e Manutenção de Software</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-gradient: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #312e81 100%);
            --primary-blue: #3b82f6;
            --primary-purple: #8b5cf6;
            --accent-orange: #f97316;
            --text-light: #ffffff;
            --text-dark: #1e293b;
            --card-bg: rgba(255, 255, 255, 0.95);
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --radius-lg: 16px;
            --radius-md: 8px;
            --font-main: 'Inter', sans-serif;
            --font-code: 'Fira Code', monospace;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-main);
            background: var(--bg-gradient);
            color: var(--text-light);
            min-height: 100vh;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Progress Bar */
        #progress-bar-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            z-index: 1000;
        }

        #progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-orange));
            width: 0%;
            transition: width 0.4s ease;
        }

        /* Layout & Containers */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .screen {
            display: none;
            width: 100%;
            animation: fadeIn 0.5s ease;
        }

        .screen.active {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Welcome Screen */
        .welcome-card {
            background: var(--card-bg);
            color: var(--text-dark);
            padding: 40px;
            border-radius: var(--radius-lg);
            box-shadow: var(--card-shadow);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .logo-img {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
            filter: drop-shadow(0 0 10px var(--primary-purple));
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            background: linear-gradient(to right, var(--primary-blue), var(--primary-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 800;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .rules-list {
            text-align: left;
            margin: 20px 0;
            background: #f1f5f9;
            padding: 15px;
            border-radius: var(--radius-md);
            font-size: 0.95rem;
        }

        .rules-list li {
            margin-bottom: 8px;
            list-style: none;
            padding-left: 20px;
            position: relative;
        }

        .rules-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: bold;
        }

        .lifeline-icons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 15px;
        }

        .lifeline-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 0.8rem;
            color: var(--text-dark);
        }

        .lifeline-icon span {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        /* Buttons */
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: var(--font-main);
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary-blue), var(--primary-purple));
            color: white;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.6);
        }

        .btn-secondary {
            background: var(--card-bg);
            color: var(--text-dark);
            border: 2px solid var(--primary-purple);
        }

        .btn-secondary:hover {
            background: var(--primary-purple);
            color: white;
        }

        /* Game Screen */
        .game-header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.8);
        }

        .game-stats {
            display: flex;
            gap: 20px;
            font-family: var(--font-code);
        }

        .lifeline-bar {
            display: flex;
            gap: 10px;
        }

        .lifeline-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 8px 12px;
            border-radius: var(--radius-md);
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.2s;
            position: relative;
        }

        .lifeline-btn:hover:not(:disabled) {
            background: rgba(255, 255, 255, 0.2);
        }

        .lifeline-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .lifeline-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--accent-orange);
            color: white;
            font-size: 0.7rem;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .question-card {
            background: var(--card-bg);
            color: var(--text-dark);
            padding: 30px;
            border-radius: var(--radius-lg);
            box-shadow: var(--card-shadow);
            width: 100%;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        .question-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-blue), var(--accent-orange));
        }

        .question-number {
            font-size: 0.9rem;
            color: var(--primary-purple);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .question-text {
            font-size: 1.1rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .options-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .option-btn {
            background: #f8fafc;
            border: 2px solid #e2e8f0;
            padding: 15px;
            border-radius: var(--radius-md);
            text-align: left;
            cursor: pointer;
            transition: all 0.2s;
            font-family: var(--font-main);
            font-size: 1rem;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .option-btn:hover:not(:disabled) {
            border-color: var(--primary-blue);
            background: #eff6ff;
            transform: translateY(-2px);
        }

        .option-btn.correct {
            background: #dcfce7;
            border-color: var(--success);
            color: #166534;
        }

        .option-btn.wrong {
            background: #fee2e2;
            border-color: var(--danger);
            color: #991b1b;
        }

        .option-btn.eliminated {
            opacity: 0.2;
            pointer-events: none;
            background: #cbd5e1;
        }

        .option-letter {
            font-weight: bold;
            color: var(--primary-purple);
            min-width: 25px;
        }

        .feedback-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 2000;
        }

        .feedback-content {
            background: white;
            padding: 30px;
            border-radius: var(--radius-lg);
            text-align: center;
            max-width: 400px;
            animation: popIn 0.3s ease;
        }

        .feedback-icon {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        /* End Screen */
        .result-card {
            background: var(--card-bg);
            color: var(--text-dark);
            padding: 40px;
            border-radius: var(--radius-lg);
            text-align: center;
            max-width: 700px;
            width: 100%;
            box-shadow: var(--card-shadow);
        }

        .score-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: conic-gradient(var(--primary-purple) 0%, #e2e8f0 0%);
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            position: relative;
        }

        .score-inner {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .score-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary-purple);
        }

        .essay-container {
            margin-top: 30px;
            text-align: left;
        }

        .essay-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .essay-card {
            perspective: 1000px;
            height: 250px;
            cursor: pointer;
        }

        .essay-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .essay-card.flipped .essay-card-inner {
            transform: rotateY(180deg);
        }

        .essay-front, .essay-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: var(--radius-md);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .essay-front {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-purple));
            color: white;
        }

        .essay-back {
            background: white;
            color: var(--text-dark);
            transform: rotateY(180deg);
            text-align: left;
            font-size: 0.85rem;
            overflow-y: auto;
        }

        .hint-tooltip {
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #1e293b;
            color: white;
            padding: 10px;
            border-radius: var(--radius-md);
            width: 90%;
            max-width: 300px;
            font-size: 0.9rem;
            margin-bottom: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            display: none;
            z-index: 100;
        }

        .hint-tooltip.visible {
            display: block;
            animation: fadeIn 0.3s;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes popIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .options-grid {
                grid-template-columns: 1fr;
            }
            .game-header {
                flex-direction: column;
                gap: 10px;
            }
            .welcome-card, .result-card {
                padding: 20px;
            }
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div id="progress-bar-container">
        <div id="progress-bar"></div>
    </div>

    <div class="container">
        <!-- Welcome Screen -->
        <div id="welcome-screen" class="screen active">
            <div class="welcome-card">
                <img src="https://image.qwenlm.ai/public_source/f5adfee7-575c-4e7f-b7cd-ab0a591f0c9b/15b110f3a-339d-4dd3-8a56-545607b1b950.png" alt="Logo" class="logo-img">
                <h1>Governança & Manutenção de Software</h1>
                <p style="color: #64748b; margin-bottom: 20px;">Teste seus conhecimentos no estilo Show do Milhão!</p>
                
                <div class="rules-list">
                    <h3 style="margin-bottom: 10px; color: var(--primary-purple);">📜 Regras do Jogo</h3>
                    <li>16 Questões de Múltipla Escolha.</li>
                    <li><strong>2 Pular:</strong> Pula a questão sem responder.</li>
                    <li><strong>2 Eliminar 2:</strong> Remove duas opções erradas.</li>
                    <li>Acerte <strong>80% ou mais</strong> para desbloquear os cards de estudo avançado!</li>
                </div>

                <div class="lifeline-icons">
                    <div class="lifeline-icon"><span>⏭️</span>2 Pular</div>
                    <div class="lifeline-icon"><span>❌</span>2 Eliminar</div>
                </div>

                <button class="btn btn-primary" onclick="game.start()" style="margin-top: 25px; width: 100%;">INICIAR JOGO</button>
            </div>
        </div>

        <!-- Game Screen -->
        <div id="game-screen" class="screen">
            <div class="game-header">
                <div class="game-stats">
                    <span>Questão: <strong id="q-counter">1/16</strong></span>
                    <span>Acertos: <strong id="score-display">0</strong></span>
                </div>
                <div class="lifeline-bar">
                    <button class="lifeline-btn" id="btn-skip" onclick="game.useSkip()">
                        ⏭️ Pular <span class="lifeline-count" id="count-skip">2</span>
                    </button>
                    <button class="lifeline-btn" id="btn-eliminate" onclick="game.useEliminate()">
                        ❌ Eliminar <span class="lifeline-count" id="count-eliminate">2</span>
                    </button>
                </div>
            </div>

            <div class="question-card">
                <div id="hint-display" class="hint-tooltip"></div>
                <div class="question-number" id="q-number">Questão 1 de 16</div>
                <div class="question-text" id="q-text">Carregando...</div>
                <div class="options-grid" id="options-container">
                    <!-- Options injected by JS -->
                </div>
            </div>
        </div>

        <!-- Feedback Overlay -->
        <div id="feedback-overlay" class="feedback-overlay">
            <div class="feedback-content">
                <div class="feedback-icon" id="fb-icon">✅</div>
                <h2 id="fb-title">Correto!</h2>
                <p id="fb-text" style="color: #64748b; margin-bottom: 20px;">Resposta exata.</p>
                <button class="btn btn-primary" onclick="game.nextQuestion()">Próxima</button>
            </div>
        </div>

        <!-- End Screen -->
        <div id="end-screen" class="screen">
            <div class="result-card">
                <h1 id="end-title">Fim de Jogo!</h1>
                <div class="score-circle" id="score-circle">
                    <div class="score-inner">
                        <div class="score-value" id="final-score">0%</div>
                        <div style="font-size: 0.8rem; color: #64748b;">Aproveitamento</div>
                    </div>
                </div>
                <p id="end-message" style="margin-bottom: 20px; font-size: 1.1rem;"></p>
                
                <div id="essay-section" class="essay-container" style="display: none;">
                    <h3 style="color: var(--primary-purple); margin-bottom: 10px;"> Cards de Aprofundamento</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 15px;">Clique nos cards para ver as respostas sugeridas.</p>
                    <div class="essay-grid" id="essay-grid">
                        <!-- Essay cards injected by JS -->
                    </div>
                    <a href="RPG.php"><button>Coletar Prêmio - Jogar RPG</button></a>
                </div>

                <button class="btn btn-secondary" onclick="location.reload()" style="margin-top: 30px; width: 100%;">JOGAR NOVAMENTE</button>
            </div>
        </div>
    </div>

    <script>
        const questions = [
            { id: 1, text: "Considere o excerto sobre o ciclo de vida de desenvolvimento de software. Considerando o texto e os princípios de governança em manutenção de software, assinale a alternativa que identifica corretamente a consequência de negligenciar a conexão entre planejamento de sustentação e fase de requisitos.", options: ["Aumento da satisfação do usuário final devido à flexibilidade nas entregas.", "Ocorrência do 'Erro de Splashdown': falhas críticas de integração que emergem tardiamente, elevando custos e instabilidade no Go-Live.", "Redução automática da dívida técnica por meio de iterações ágeis não planejadas.", "Simplificação dos testes de aceitação, uma vez que requisitos tardios são mais fáceis de validar."], correct: 1, hint: "Foque no termo 'Erro de Splashdown' e falhas de integração tardias." },
            { id: 2, text: "A Matriz de Stacey é apresentada como ferramenta essencial para diagnosticar situações de projeto. Sobre seus eixos e domínios, analise as afirmativas:\nI. O eixo vertical mede a clareza dos Requisitos; o horizontal, a Certeza da Abordagem.\nII. No Domínio Simples, recomendam-se abordagens não comprovadas ou inovadoras.\nIII. Em cenários complexos, a evolução deve ser adaptativa e iterativa.", options: ["I, apenas.", "I e III, apenas.", "II e III, apenas.", "I, II e III."], correct: 1, hint: "O Domínio Simples usa abordagens comprovadas, não inovadoras." },
            { id: 3, text: "Observe a tabela comparativa entre Modelo Cascata e Ágil/XP. Com base na comparação e nos princípios de adaptabilidade do PMBOK 7, assinale a alternativa que melhor justifica a adoção de abordagens adaptativas em ambientes voláteis.", options: ["O modelo cascata permite maior controle financeiro por meio de documentação abrangente.", "A rigidez do cascata reduz a necessidade de feedback contínuo, otimizando recursos humanos.", "Em contextos de incerteza, a abordagem adaptativa dilui riscos e custos por meio de iterações curtas e feedback constante.", "O XP elimina a necessidade de documentação, tornando-o superior ao cascata em qualquer cenário."], correct: 2, hint: "Ambientes voláteis exigem ciclos curtos e feedback constante para diluir riscos." },
            { id: 4, text: "A estimativa de custos em manutenção é descrita como decisão de alta sensibilidade estratégica. Considerando o checklist de fatores determinantes para gestores, assinale a alternativa que apresenta um fator que NÃO deve ser monitorado para evitar surpresas orçamentárias.", options: ["Frequência do ciclo de feedback (1-2 semanas no XP versus 2-4 no Scrum).", "Acúmulo de dívida técnica e soluções temporárias que elevam custos futuros.", "Complexidade da abordagem e uso de tecnologias 'Unproven' na Matriz de Stacey.", "Número absoluto de linhas de código (LOC) como métrica exclusiva de produtividade."], correct: 3, hint: "LOC é dependente de linguagem e não deve ser métrica exclusiva." },
            { id: 5, text: "O conceito de 'Gatilho Arquitetural para Modernização' é definido no material como o ponto em que:", options: ["A equipe de desenvolvimento atinge sua capacidade máxima de entregas por sprint.", "O custo de manutenção incremental e o acúmulo de Dívida Técnica superam o valor de negócio gerado pelos novos incrementos.", "O cliente solicita formalmente a substituição do sistema legado por uma solução em nuvem.", "A documentação técnica do sistema atinge um volume considerado insustentável para manutenção."], correct: 1, hint: "É o ponto de ruptura onde o custo supera o valor de negócio." },
            { id: 6, text: "Sobre a reengenharia de sistemas legados, o Extreme Programming (XP) é apresentado como diferencial técnico em relação ao Scrum porque:", options: ["O XP prescreve práticas de engenharia rigorosas, como Refactoring, TDD, Simple Design e Pair Programming, essenciais para evitar a replicação de vícios do legado.", "O Scrum não permite a realização de retrospectivas, limitando a melhoria contínua em projetos de modernização.", "O XP elimina a necessidade de testes automatizados, acelerando a entrega de valor em reengenharia.", "O Scrum exige documentação abrangente e inicial, incompatível com projetos ágeis de grande escala."], correct: 0, hint: "XP foca em práticas de engenharia como TDD e Refactoring." },
            { id: 7, text: "Para modernizações complexas, como sistemas ERP, o material recomenda a abordagem híbrida Water-Scrum-Fall. Assinale a alternativa que descreve corretamente a aplicação dessa estratégia.", options: ["Todo o ciclo do projeto, do planejamento à entrega, segue rigorosamente o modelo cascata.", "O planejamento de alto nível, orçamento e conformidade seguem o rigor do Waterfall, enquanto a construção utiliza a agilidade do Scrum/XP.", "A equipe adota exclusivamente práticas do XP, abandonando estruturas de governança corporativa.", "O Scrum é utilizado apenas para gestão de requisitos, enquanto o Waterfall é aplicado exclusivamente na fase de testes finais."], correct: 1, hint: "Water-Scrum-Fall: Governança no início/fim, Agilidade na construção." },
            { id: 8, text: "A evolução do Guia PMBOK da 7ª para a 8ª edição (2025/2026) consolida uma visão equilibrada. Sobre o PMBOK 8, assinale a alternativa correta.", options: ["Elimina os princípios de entrega de valor para retornar exclusivamente às áreas de conhecimento tradicionais.", "Introduz a Sustentabilidade como pilar central, desdobrado em dimensões Econômica, Social e Ambiental.", "Substitui a necessidade de tailoring por um modelo único aplicável a todos os tipos de projeto.", "Remove a integração com inteligência artificial para preservar o foco em métodos manuais de gestão."], correct: 1, hint: "Sustentabilidade (Econômica, Social, Ambiental) é o novo pilar central." },
            { id: 9, text: "Considere as diretrizes estratégicas para o executivo de TI sobre Tailoring (Alfaiataria). Assinale a alternativa que representa uma aplicação adequada do princípio.", options: ["Utilizar exclusivamente Scrum em todos os projetos da organização para padronizar processos.", "Aplicar portões de qualidade rígidos em projetos de conformidade regulatória e fluxos ágeis em iniciativas de inovação com alta incerteza.", "Eliminar todas as fases de planejamento em projetos críticos para acelerar a entrega de valor.", "Adotar o modelo cascata em projetos com requisitos voláteis para garantir controle documental."], correct: 1, hint: "Adapte o rigor: Rígido para conformidade, Ágil para inovação." },
            { id: 10, text: "O método ARID (Active Reviews for Intermediate Design) é apresentado como ferramenta para validar a viabilidade de uma arquitetura. Sobre suas etapas, assinale a alternativa que descreve corretamente a fase de 'Implementação Ativa'.", options: ["Os revisores analisam passivamente a documentação arquitetural e emitem pareceres por escrito.", "O arquiteto apresenta a lógica do design sem interação com a equipe de desenvolvimento.", "Os revisores colaboram para escrever código que utilize os serviços do design, testando na prática se a arquitetura é adequada.", "A equipe de gestão aprova o design com base em métricas de linhas de código (LOC) e cronogramas prévios."], correct: 2, hint: "Implementação Ativa envolve escrever código de teste para validar o design." },
            { id: 11, text: "Sobre métricas de software para decisão entre manter ou refazer um sistema, analise as recomendações do consultor. Assinale a alternativa que indica a métrica mais adequada para avaliar o valor entregue ao usuário em contratos de desenvolvimento.", options: ["LOC (Lines of Code)", "COCOMO (Básico)", "Function Points (FP)", "Feature Points"], correct: 2, hint: "Function Points focam no valor entregue ao usuário e independem da tecnologia." },
            { id: 12, text: "Conforme destacado por Cruz no material, estimativas de software são frequentemente subestimadas não por falta de técnica, mas por fatores psicológicos e culturais. Assinale a alternativa que identifica corretamente esse fator.", options: ["O excesso de documentação técnica retarda a coleta de dados, tornando as estimativas obsoletas.", "O medo da punição em culturas organizacionais que não valorizam o realismo vicia os dados coletados, comprometendo a precisão das estimativas.", "A utilização de múltiplas métricas simultaneamente gera conflito de informações e confusão na tomada de decisão.", "A falta de ferramentas automatizadas impede a aplicação de modelos algorítmicos como COCOMO."], correct: 1, hint: "Medo da punição em culturas não realistas vicia os dados." },
            { id: 13, text: "Sobre os frameworks Scrum e Extreme Programming (XP), o material estabelece uma distinção fundamental de foco. Assinale a alternativa que descreve corretamente essa diferença.", options: ["Scrum foca em excelência de engenharia com práticas como TDD e Pair Programming; XP foca em gestão de fluxo.", "Ambos possuem foco idêntico em gestão e engenharia, diferenciando-se apenas na duração dos ciclos de entrega.", "Scrum foca em gestão e fluxo, priorizando auto-organização e proteção do escopo; XP foca em excelência de engenharia, prescrevendo práticas técnicas rigorosas.", "XP elimina a necessidade de planejamento prévio, enquanto Scrum exige documentação abrangente antes de cada sprint."], correct: 2, hint: "Scrum = Gestão/Fluxo. XP = Engenharia/Técnica." },
            { id: 14, text: "O guia de Tailoring para Planos de Ação apresenta quatro etapas sistemáticas para adaptação metodológica. Assinale a alternativa que indica a sequência correta dessas etapas.", options: ["Adaptar para o Projeto; Selecionar a Abordagem Inicial; Implementar Melhoria Contínua; Adaptar para a Organização.", "Selecionar a Abordagem Inicial; Adaptar para a Organização; Adaptar para o Projeto; Implementar Melhoria Contínua.", "Implementar Melhoria Contínua; Adaptar para a Organização; Selecionar a Abordagem Inicial; Adaptar para o Projeto.", "Adaptar para a Organização; Selecionar a Abordagem Inicial; Adaptar para o Projeto; Implementar Melhoria Contínua."], correct: 1, hint: "Sequência: Selecionar -> Organização -> Projeto -> Melhoria Contínua." },
            { id: 15, text: "O modelo de Boehm estabelece cinco atividades fundamentais para que um plano de ação dobre as chances de sucesso do projeto. Assinale a alternativa que apresenta corretamente uma dessas atividades.", options: ["Eliminação de todas as fases de teste para acelerar a entrega de valor ao cliente.", "Estabelecimento de Objetivos: definição clara do que a ação visa alcançar em termos de negócio e técnica.", "Substituição de métricas algorítmicas por estimativas baseadas exclusivamente em analogia histórica.", "Centralização de todas as decisões técnicas em um único arquiteto para evitar conflitos de equipe."], correct: 1, hint: "Uma das atividades é o Estabelecimento de Objetivos claros." },
            { id: 16, text: "Sobre a estrutura de custos na evolução de software, o material destaca que a Mão-de-Obra Direta (MOD) é o componente dominante do orçamento. Com base nesse insight estratégico, assinale a alternativa que apresenta a implicação correta para a gestão de projetos de software.", options: ["A evolução de software é essencialmente um desafio logístico, exigindo foco em infraestrutura.", "O turnover da equipe representa um risco financeiro direto ao SDLC, pois a MOD dominante torna a retenção de talentos crítica para a continuidade do valor.", "Licenças de software e matéria-prima representam a maior parcela dos custos, justificando investimentos em automação de aquisições.", "A redução de custos indiretos de fabricação (CIF) é a estratégia mais eficaz para aumentar a margem de lucro."], correct: 1, hint: "MOD dominante significa que a perda de talentos (turnover) é um risco financeiro direto." }
        ];

        const essayQuestions = [
            {
                id: 17,
                title: "Parecer Técnico: Manutenção vs. Reengenharia",
                question: "Uma empresa de serviços financeiros opera com um sistema legado crítico. Elabore um parecer técnico que: (a) apresente critérios objetivos baseados no 'Gatilho Arquitetural'; (b) justifique a seleção de práticas do XP; e (c) proponha uma métrica para avaliar o ROI.",
                answer: "O 'Gatilho Arquitetural' indica reengenharia quando o custo de manutenção + dívida técnica > valor de negócio. Práticas XP (Refactoring, TDD, Simple Design, Pair Programming) são essenciais para eliminar 'código espaguete' e garantir qualidade técnica sem alterar comportamento externo. Para ROI, use Function Points (FP), pois medem valor entregue ao usuário com independência tecnológica, ideais para contratos e análise de retorno."
            },
            {
                id: 18,
                title: "Metodologia Híbrida para IA Médica",
                question: "Uma startup desenvolve um app de IA para diagnóstico médico com alta incerteza regulatória e tecnológica. Discuta: (a) classificação na Matriz de Stacey; (b) aplicação do Tailoring; e (c) estrutura híbrida de governança.",
                answer: "Classifica-se no Domínio Complexo (requisitos voláteis, tecnologia inovadora). Waterfall é inadequado; a abordagem deve ser adaptativa. Tailoring sugere portões rígidos para conformidade regulatória e fluxos ágeis para desenvolvimento. A governança híbrida integra: sprints de pesquisa, ciclos Scrum/XP para iteração técnica, phase-gates para validação regulatória e retrospectivas de compliance."
            },
            {
                id: 19,
                title: "Estimativa de Custos em Sistema Legado de Saúde",
                question: "Uma organização pública precisa estimar a manutenção de um sistema de gestão de saúde com 15 anos de operação e equipe rotativa. Elabore uma proposta que: (a) mitigue o viés psicológico; (b) justifique a seleção de métricas; e (c) descreva a validação por técnicas independentes.",
                answer: "Mitigue o viés criando segurança psicológica (estimativas realistas são valorizadas, sem punição) e envolvendo múltiplos especialistas. Use COCOMO Básico para previsão de esforço inicial e Function Points para valor de negócio, combinando previsibilidade e foco em valor. Valide com estimativa por analogia histórica e revisão por pares externos para aumentar a confiabilidade."
            },
            {
                id: 20,
                title: "Plano de Ação para Reengenharia Distribuída",
                question: "Uma equipe global planeja a reengenharia de um e-commerce com requisitos LGPD. Elabore um plano que: (a) justifique a abordagem inicial; (b) descreva a adaptação organizacional; e (c) proponha mecanismos de melhoria contínua.",
                answer: "Abordagem Híbrida (Water-Scrum-Fall): incerteza técnica exige agilidade, LGPD exige rigor preditivo. Adaptação: phase-gates formais para conformidade, cerimônias assíncronas para fusos horários, ferramentas de CI/CD. Melhoria Contínua: retrospectivas técnicas quinzenais (XP), retrospectivas de governança mensais, action items no backlog da sprint seguinte e métricas de acompanhamento (velocidade, defeitos)."
            }
        ];

        const game = {
            currentQ: 0,
            score: 0,
            skips: 2,
            eliminates: 2,
            answered: false,
            eliminatedOptions: [],

            start() {
                document.getElementById('welcome-screen').classList.remove('active');
                document.getElementById('game-screen').classList.add('active');
                this.loadQuestion();
            },

            loadQuestion() {
                this.answered = false;
                this.eliminatedOptions = [];
                const q = questions[this.currentQ];
                
                document.getElementById('q-counter').innerText = `${this.currentQ + 1}/16`;
                document.getElementById('q-number').innerText = `Questão ${this.currentQ + 1} de 16`;
                document.getElementById('q-text').innerText = q.text;
                document.getElementById('hint-display').classList.remove('visible');
                
                const container = document.getElementById('options-container');
                container.innerHTML = '';
                
                const letters = ['A', 'B', 'C', 'D'];
                q.options.forEach((opt, idx) => {
                    const btn = document.createElement('button');
                    btn.className = 'option-btn';
                    btn.innerHTML = `<span class="option-letter">${letters[idx]}.</span> ${opt}`;
                    btn.onclick = () => this.checkAnswer(idx, btn);
                    container.appendChild(btn);
                });

                this.updateProgress();
            },

            checkAnswer(idx, btn) {
                if (this.answered) return;
                this.answered = true;

                const q = questions[this.currentQ];
                const isCorrect = idx === q.correct;
                
                if (isCorrect) {
                    this.score++;
                    btn.classList.add('correct');
                    this.showFeedback(true);
                } else {
                    btn.classList.add('wrong');
                    const correctBtn = document.querySelectorAll('.option-btn')[q.correct];
                    correctBtn.classList.add('correct');
                    this.showFeedback(false);
                }
                
                document.getElementById('score-display').innerText = this.score;
            },

            showFeedback(isCorrect) {
                const overlay = document.getElementById('feedback-overlay');
                const icon = document.getElementById('fb-icon');
                const title = document.getElementById('fb-title');
                const text = document.getElementById('fb-text');

                if (isCorrect) {
                    icon.innerText = '✅';
                    title.innerText = 'Correto!';
                    title.style.color = 'var(--success)';
                    text.innerText = 'Excelente! Você domina o assunto.';
                } else {
                    icon.innerText = '❌';
                    title.innerText = 'Incorreto';
                    title.style.color = 'var(--danger)';
                    text.innerText = 'Não desanime! Revise o conteúdo.';
                }
                
                overlay.style.display = 'flex';
            },

            nextQuestion() {
                document.getElementById('feedback-overlay').style.display = 'none';
                this.currentQ++;
                
                if (this.currentQ < questions.length) {
                    this.loadQuestion();
                } else {
                    this.endGame();
                }
            },

            useSkip() {
                if (this.skips > 0 && !this.answered) {
                    this.skips--;
                    document.getElementById('count-skip').innerText = this.skips;
                    if (this.skips === 0) document.getElementById('btn-skip').disabled = true;
                    this.nextQuestion();
                }
            },

            useEliminate() {
                if (this.eliminates > 0 && !this.answered) {
                    this.eliminates--;
                    document.getElementById('count-eliminate').innerText = this.eliminates;
                    if (this.eliminates === 0) document.getElementById('btn-eliminate').disabled = true;

                    const q = questions[this.currentQ];
                    const wrongIndices = q.options.map((_, i) => i).filter(i => i !== q.correct);
                    // Shuffle and pick 2
                    wrongIndices.sort(() => Math.random() - 0.5);
                    const toEliminate = wrongIndices.slice(0, 2);
                    
                    const btns = document.querySelectorAll('.option-btn');
                    toEliminate.forEach(idx => {
                        btns[idx].classList.add('eliminated');
                    });
                }
            },

            updateProgress() {
                const pct = ((this.currentQ) / questions.length) * 100;
                document.getElementById('progress-bar').style.width = `${pct}%`;
            },

            endGame() {
                document.getElementById('game-screen').classList.remove('active');
                document.getElementById('end-screen').classList.add('active');
                document.getElementById('progress-bar').style.width = '100%';

                const percentage = Math.round((this.score / questions.length) * 100);
                document.getElementById('final-score').innerText = `${percentage}%`;
                
                const circle = document.getElementById('score-circle');
                circle.style.background = `conic-gradient(var(--primary-purple) ${percentage}%, #e2e8f0 ${percentage}%)`;

                const msg = document.getElementById('end-message');
                const essaySec = document.getElementById('essay-section');

                if (percentage >= 80) {
                    msg.innerText = "🎉 Parabéns! Você é um especialista em Governança de Software!";
                    msg.style.color = "var(--success)";
                    essaySec.style.display = 'block';
                    this.renderEssayCards();
                } else {
                    msg.innerText = "📚 Bom esforço! Revise os conceitos e tente novamente para desbloquear o conteúdo avançado.";
                    msg.style.color = "var(--warning)";
                    essaySec.style.display = 'none';
                }
            },

            renderEssayCards() {

                const grid = document.getElementById('essay-grid');
                grid.innerHTML = '';
                essayQuestions.forEach(eq => {
                    const card = document.createElement('div');
                    card.className = 'essay-card';
                    card.onclick = function() { this.classList.toggle('flipped'); };
                    card.innerHTML = `
                        <div class="essay-card-inner">
                            <div class="essay-front">
                                <h3 style="font-size: 1.2rem;">Questão ${eq.id}</h3>
                                <p style="margin-top: 10px; font-size: 0.9rem;">${eq.title}</p>
				<p style="margin-top: 10px; font-size: 0.9rem;">${eq.question}</p>
                                <p style="margin-top: 15px; font-size: 0.8rem; opacity: 0.8;">Clique para ver a resposta</p>
                            </div>
                            <div class="essay-back">
                                <h4 style="color: var(--primary-purple); margin-bottom: 10px;">Resposta Sugerida:</h4>
                                <p>${eq.answer}</p>
                            </div>
                        </div>
                    `;
                    grid.appendChild(card);
                });
            }
        };
    </script>
</body>
</html>


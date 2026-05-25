<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Interativo: Fundamentos do Paralelismo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --info: #0ea5e9;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --text-dark: #1f2937;
            --text-light: #f3f4f6;
            --bg-gradient: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #1e3a8a 100%);
            --card-bg: rgba(255, 255, 255, 0.95);
            --sidebar-width: 280px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient);
            color: #6319f4;
            min-height: 100vh;
            line-height: 1.6;
        }

        /* Progress Bar */
        #progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.1);
            z-index: 1001;
        }

        #progress-bar {
            height: 100%;
            background: var(--success);
            width: 0%;
            transition: width 0.2s;
        }

        /* Header */
        header {
            text-align: center;
            padding: 4rem 1rem 2rem;
            color: var(--text-light);
            position: relative;
            z-index: 10;
        }

        header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        header p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Layout */
        .container {
            display: grid;
            grid-template-columns: var(--sidebar-width) 1fr;
            max-width: 1400px;
            margin: 0 auto;
            gap: 2rem;
            padding: 2rem;
        }

        /* Sidebar */
        aside {
            position: sticky;
            top: 2rem;
            height: fit-content;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-link {
            display: block;
            color: var(--text-light);
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            opacity: 0.7;
        }

        .nav-link:hover, .nav-link.active {
            background: var(--primary);
            opacity: 1;
            transform: translateX(5px);
        }

        /* Main Content */
        main {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .card h2 {
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card h3 {
            color: var(--text-dark);
            margin: 1.5rem 0 0.75rem;
        }

        /* Info Boxes */
        .info-box {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid;
            font-size: 0.95rem;
        }

        .info-box.success {
            background: #d1fae5;
            border-color: var(--success);
            color: #065f46;
        }

        .info-box.warning {
            background: #fef3c7;
            border-color: var(--warning);
            color: #92400e;
        }

        .info-box.info {
            background: #e0f2fe;
            border-color: var(--info);
            color: #075985;
        }

        /* Tabs */
        .tabs {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #e5e7eb;
        }

        .tab-btn {
            padding: 0.75rem 1.5rem;
            border: none;
            background: none;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            color: #6b7280;
            transition: all 0.3s;
        }

        .tab-btn.active {
            color: var(--primary);
            border-bottom: 2px solid var(--primary);
            margin-bottom: -2px;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s;
        }

        .tab-content.active {
            display: block;
        }

        /* Code Blocks */
        .code-wrapper {
            position: relative;
            background: #1e1e2e;
            border-radius: 12px;
            overflow: hidden;
            margin: 1rem 0;
            border-left: 4px solid var(--primary);
        }

        .code-header {
            background: #181825;
            padding: 0.5rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #cdd6f4;
            font-size: 0.8rem;
        }

        .copy-btn {
            background: #313244;
            border: 1px solid #45475a;
            color: #cdd6f4;
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
            transition: all 0.2s;
        }

        .copy-btn:hover {
            background: var(--primary);
            border-color: var(--primary);
        }

        pre {
            padding: 1rem;
            overflow-x: auto;
            font-family: 'Fira Code', monospace;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Syntax Highlighting */
        .kw { color: #cba6f7; font-weight: bold; } /* Keyword */
        .str { color: #a6e3a1; } /* String */
        .num { color: #fab387; } /* Number */
        .com { color: #6c7086; font-style: italic; } /* Comment */
        .fn { color: #89b4fa; } /* Function */
        .cls { color: #f9e2af; } /* Class */

        /* Simulator */
        .simulator-panel {
            background: #f8fafc;
            border-radius: 12px;
            padding: 1.5rem;
            border: 1px solid #e2e8f0;
        }

        .sim-controls {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .input-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #475569;
        }

        .input-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-family: 'Inter', sans-serif;
        }

        .sim-results {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .result-card {
            flex: 1;
            min-width: 200px;
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            text-align: center;
        }

        .result-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
        }

        .result-label {
            font-size: 0.875rem;
            color: #64748b;
        }

        .bar-chart {
            margin-top: 1rem;
            height: 20px;
            background: #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
        }

        .bar-fill {
            height: 100%;
            background: var(--success);
            transition: width 0.5s;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            color: var(--text-light);
            opacity: 0.8;
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 2rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                padding: 1rem;
            }

            aside {
                position: relative;
                top: 0;
                display: flex;
                overflow-x: auto;
                gap: 0.5rem;
                padding: 1rem;
            }

            .nav-link {
                white-space: nowrap;
                margin-bottom: 0;
            }

            header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <!-- Progress Bar -->
    <div id="progress-container">
        <div id="progress-bar"></div>
    </div>

    <!-- Header -->
    <header>
        <h1>Fundamentos do Paralelismo</h1>
        <p>Aprenda a transformar processos lentos e sequenciais em aplicações rápidas e eficientes.</p>
    </header>

    <div class="container">
        <!-- Sidebar -->
        <aside>
            <a href="#intro" class="nav-link active">🎯 Introdução</a>
            <a href="#types" class="nav-link">🧩 Tipos de Paralelismo</a>
            <a href="#hardware" class="nav-link">💻 Hardware vs Software</a>
            <a href="#case1" class="nav-link">📸 Estudo de Caso: Imagens</a>
            <a href="#case2" class="nav-link">️ Estudo de Caso: Órgão Público</a>
            <a href="#simulator" class="nav-link">🎮 Simulador</a>
            <a href="#code" class="nav-link">📝 Exemplo de Código</a>
            <a href="#summary" class="nav-link">📌 Resumo</a>
        </aside>

        <!-- Main Content -->
        <main>
            <!-- Introduction -->
            <section id="intro" class="card reveal">
                <h2>🎯 Introdução</h2>
                <p>Imagine uma fila única em um supermercado onde apenas um caixa está aberto. Agora imagine 10 caixas abertos. A diferença na velocidade de atendimento é o conceito central do <strong>Paralelismo</strong>.</p>
                
                <div class="info-box info">
                    <strong>Objetivo:</strong> Entender como dividir tarefas para aproveitar todo o potencial dos processadores modernos, passando de execução sequencial (lenta) para execução paralela (rápida).
                </div>

                <div class="info-box warning">
                    <strong>Pré-requisito:</strong> Conhecimento intermediário em programação. As técnicas de paralelismo e sintaxe Python serão explicadas do zero (nível iniciante).
                </div>
            </section>

            <!-- Types of Parallelism -->
            <section id="types" class="card reveal">
                <h2>🧩 Tipos de Paralelismo</h2>
                <div class="tabs">
                    <button class="tab-btn active" onclick="openTab(event, 'data-parallel')">Paralelismo de Dados</button>
                    <button class="tab-btn" onclick="openTab(event, 'task-parallel')">Paralelismo de Tarefas</button>
                </div>

                <div id="data-parallel" class="tab-content active">
                    <h3>Paralelismo de Dados</h3>
                    <p>Ocorre quando a <strong>mesma operação</strong> é aplicada a <strong>diversos dados</strong> simultaneamente.</p>
                    <div class="info-box success">
                        <strong>Exemplo:</strong> Aplicar um filtro de brilho em 1.000 fotos ao mesmo tempo. Cada núcleo do processador pega uma foto e aplica o mesmo filtro.
                    </div>
                </div>

                <div id="task-parallel" class="tab-content">
                    <h3>Paralelismo de Tarefas</h3>
                    <p>Ocorre quando <strong>diferentes operações</strong> (tarefas distintas) são executadas ao mesmo tempo.</p>
                    <div class="info-box success">
                        <strong>Exemplo:</strong> Enquanto uma thread baixa um arquivo da internet, outra thread compacta um arquivo no disco e uma terceira atualiza a interface do usuário.
                    </div>
                </div>
            </section>

            <!-- Hardware vs Software -->
            <section id="hardware" class="card reveal">
                <h2>💻 Hardware vs Software</h2>
                
                <h3>🔧 Camada de Hardware</h3>
                <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
                    <li><strong>Multicore:</strong> Processadores com vários núcleos (cérebros) físicos.</li>
                    <li><strong>GPU:</strong> Unidades gráficas com milhares de núcleos pequenos, ideais para processamento massivo de dados.</li>
                </ul>

                <h3>🧵 Camada de Software</h3>
                <ul style="margin-left: 1.5rem;">
                    <li><strong>Threads:</strong> Pequenas unidades de execução dentro de um mesmo programa.</li>
                    <li><strong>Processos Concorrentes:</strong> Vários programas rodando "ao mesmo tempo".</li>
                </ul>
            </section>

            <!-- Case Study 1 -->
            <section id="case1" class="card reveal">
                <h2>📸 Estudo de Caso: Processador de Imagens</h2>
                <p>Uma empresa processa imagens sequencialmente. Cada imagem leva <strong>5 segundos</strong>.</p>
                
                <div class="info-box warning">
                    <strong>Problema:</strong> Com 100 imagens, o tempo total é de 500 segundos (mais de 8 minutos), mesmo tendo um processador com 8 núcleos ociosos.
                </div>

                <h3>🚀 Solução</h3>
                <p>Implementar <strong>Paralelismo de Tarefas</strong> (dividir imagens entre threads) e <strong>Paralelismo de Dados</strong> (dividir blocos da imagem).</p>
                
                <div class="info-box success">
                    <strong>Cálculo da Melhoria:</strong><br>
                    Sem paralelismo: 100 × 5s = 500s<br>
                    Com paralelismo (8 threads): 100 ÷ 8 = 12.5 grupos × 5s ≈ 62.5s<br>
                    <strong>Resultado:</strong> Redução de ~87.5% no tempo!
                </div>
            </section>

            <!-- Case Study 2 -->
            <section id="case2" class="card reveal">
                <h2>🏛️ Estudo de Caso: Órgão Público</h2>
                <p>Um órgão recebe 300 documentos por segundo (512MB cada). O servidor tem 64 núcleos, mas processa 1 por vez.</p>
                
                <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
                    <li>❌ Filas crescentes e atrasos nas entregas.</li>
                    <li>❌ Servidor robusto subutilizado.</li>
                </ul>

                <h3>🚀 Solução</h3>
                <p>Distribuir os 300 documentos recebidos a cada segundo entre os 64 núcleos disponíveis simultaneamente.</p>
            </section>

            <!-- Interactive Simulator -->
            <section id="simulator" class="card reveal">
                <h2> Simulador de Paralelismo</h2>
                <p>Ajuste os parâmetros para ver como o número de threads afeta o tempo de processamento.</p>
                
                <div class="simulator-panel">
                    <div class="sim-controls">
                        <div class="input-group">
                            <label>Total de Tarefas</label>
                            <input type="number" id="sim-tasks" value="100" min="10" max="1000">
                        </div>
                        <div class="input-group">
                            <label>Tempo por Tarefa (s)</label>
                            <input type="number" id="sim-time" value="5" min="1" max="60">
                        </div>
                        <div class="input-group">
                            <label>Número de Threads (Núcleos)</label>
                            <input type="range" id="sim-threads" min="1" max="64" value="1" oninput="document.getElementById('thread-val').innerText = this.value">
                            <span id="thread-val" style="font-weight: bold; color: var(--primary);">1</span>
                        </div>
                    </div>
                    <button onclick="runSimulation()" style="background: var(--primary); color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: bold; width: 100%;">Calcular Melhoria</button>
                    
                    <div class="sim-results" style="margin-top: 1.5rem;">
                        <div class="result-card">
                            <div class="result-label">Tempo Sequencial</div>
                            <div class="result-value" id="res-seq">0s</div>
                        </div>
                        <div class="result-card">
                            <div class="result-label">Tempo Paralelo</div>
                            <div class="result-value" id="res-par">0s</div>
                        </div>
                        <div class="result-card">
                            <div class="result-label">Ganho de Velocidade</div>
                            <div class="result-value" id="res-gain">0x</div>
                        </div>
                    </div>
                    
                    <div style="margin-top: 1rem;">
                        <small>Comparativo Visual de Tempo (Menor é Melhor)</small>
                        <div style="display: flex; gap: 1rem; align-items: center; margin-top: 0.5rem;">
                            <span style="width: 100px; font-size: 0.8rem;">Sequencial</span>
                            <div class="bar-chart" style="flex: 1;">
                                <div class="bar-fill" id="bar-seq" style="width: 100%; background: var(--danger);"></div>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: center; margin-top: 0.5rem;">
                            <span style="width: 100px; font-size: 0.8rem;">Paralelo</span>
                            <div class="bar-chart" style="flex: 1;">
                                <div class="bar-fill" id="bar-par" style="width: 50%; background: var(--success);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Code Examples -->
            <section id="code" class="card reveal">
                <h2>📝 Exemplo de Código em Python</h2>
                <p>Utilizando a biblioteca <code>concurrent.futures</code> para paralelismo simples.</p>

                <div class="code-wrapper">
                    <div class="code-header">
                        <span>main.py</span>
                        <button class="copy-btn" onclick="copyCode(this)">Copiar Código</button>
                    </div>
                    <pre><code id="code-example"><span class="kw">import</span> time
<span class="kw">from</span> concurrent.futures <span class="kw">import</span> ThreadPoolExecutor

<span class="com"># Função que simula um processamento pesado (ex: processar imagem)</span>
<span class="kw">def</span> <span class="fn">processar_item</span>(item):
    <span class="fn">print</span>(<span class="str">f"Iniciando processamento do item {item}..."</span>)
    time.sleep(2)  <span class="com"># Simula 2 segundos de trabalho</span>
    <span class="kw">return</span> <span class="str">f"Item {item} finalizado"</span>

<span class="kw">if</span> __name__ == <span class="str">"__main__"</span>:
    lista_de_itens = [<span class="num">1</span>, <span class="num">2</span>, <span class="num">3</span>, <span class="num">4</span>, <span class="num">5</span>]

    <span class="com"># --- Modo Sequencial (Lento) ---</span>
    inicio = time.time()
    <span class="kw">for</span> item <span class="kw">in</span> lista_de_itens:
        processar_item(item)
    <span class="fn">print</span>(<span class="str">f"Tempo Sequencial: {time.time() - inicio:.2f}s"</span>)

    <span class="com"># --- Modo Paralelo (Rápido) ---</span>
    inicio = time.time()
    <span class="com"># Cria um pool de 4 threads (workers)</span>
    <span class="kw">with</span> ThreadPoolExecutor(max_workers=<span class="num">4</span>) <span class="kw">as</span> executor:
        executor.map(processar_item, lista_de_itens)
    
    <span class="fn">print</span>(<span class="str">f"Tempo Paralelo: {time.time() - inicio:.2f}s"</span>)</code></pre>
                </div>
            </section>

            <!-- Summary -->
            <section id="summary" class="card reveal">
                <h2>📌 Resumo Final</h2>
                <ul style="margin-left: 1.5rem;">
                    <li>✅ <strong>Paralelismo</strong> divide o trabalho para ganhar velocidade.</li>
                    <li>✅ <strong>Dados vs Tarefas:</strong> Mesma operação em dados diferentes vs Operações diferentes simultâneas.</li>
                    <li>✅ <strong>Hardware:</strong> Multicores e GPUs são os motores do paralelismo.</li>
                    <li>✅ <strong>Software:</strong> Threads e Processos organizam a execução.</li>
                    <li>✅ <strong>Python:</strong> Bibliotecas como <code>concurrent.futures</code> facilitam a implementação.</li>
                </ul>
                <div class="info-box info" style="margin-top: 1rem;">
                    <strong>Próximos Passos:</strong> Tente rodar o código Python acima e altere o número de <code>max_workers</code> para ver a mudança no tempo de execução!
                </div>
            </section>
        </main>
    </div>

    <footer>
        <p>© 2024 Curso de Paralelismo. Todos os direitos reservados.</p>
    </footer>

    <script>
        // Scroll Progress
        window.onscroll = function() {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrolled = (winScroll / height) * 100;
            document.getElementById("progress-bar").style.width = scrolled + "%";
            
            // Highlight Active Link
            let sections = document.querySelectorAll('section');
            let navLinks = document.querySelectorAll('.nav-link');
            
            sections.forEach(section => {
                let top = window.scrollY;
                let offset = section.offsetTop - 150;
                let height = section.offsetHeight;
                let id = section.getAttribute('id');
                
                if (top >= offset && top < offset + height) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if(link.getAttribute('href').includes(id)) {
                            link.classList.add('active');
                        }
                    });
                }
            });

            // Reveal Animations
            document.querySelectorAll('.reveal').forEach(el => {
                const elementTop = el.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                if (elementTop < windowHeight - 100) {
                    el.classList.add('active');
                }
            });
        };

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Tabs Logic
        function openTab(evt, tabName) {
            let i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            tablinks = document.getElementsByClassName("tab-btn");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        // Simulator Logic
        function runSimulation() {
            const tasks = parseInt(document.getElementById('sim-tasks').value);
            const timePerTask = parseFloat(document.getElementById('sim-time').value);
            const threads = parseInt(document.getElementById('sim-threads').value);

            // Sequential calculation
            const totalSequential = tasks * timePerTask;

            // Parallel calculation (idealized)
            // Time = (Tasks / Threads) * TimePerTask
            // We assume perfect distribution
            const batches = Math.ceil(tasks / threads);
            const totalParallel = batches * timePerTask;

            // Gain
            const gain = totalSequential / totalParallel;

            // Update UI
            document.getElementById('res-seq').innerText = totalSequential + 's';
            document.getElementById('res-par').innerText = totalParallel.toFixed(1) + 's';
            document.getElementById('res-gain').innerText = gain.toFixed(1) + 'x';

            // Update Bars
            const maxVal = totalSequential;
            const seqPercent = 100;
            const parPercent = (totalParallel / maxVal) * 100;

            document.getElementById('bar-seq').style.width = seqPercent + '%';
            document.getElementById('bar-par').style.width = parPercent + '%';
        }

        // Copy Code Logic
        function copyCode(btn) {
            const code = document.getElementById('code-example').innerText;
            navigator.clipboard.writeText(code).then(() => {
                const originalText = btn.innerText;
                btn.innerText = "Copiado!";
                btn.style.background = "var(--success)";
                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.style.background = "";
                }, 2000);
            });
        }

        // Initial run for reveal
        window.dispatchEvent(new Event('scroll'));
        runSimulation(); // Initialize simulator
    </script>
</body>
</html>


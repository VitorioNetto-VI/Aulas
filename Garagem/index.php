<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro Blog RPG</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Press Start 2P for headings, VT323 for body text -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --neon-pink: #ff00ff;
            --neon-blue: #00ffff;
            --neon-green: #00ff00;
            --bg-dark: #1a1a2e;
            --win-gray: #c0c0c0;
            --win-blue: #000080;
        }

        body {
            font-family: 'VT323', monospace;
            background-color: var(--bg-dark);
            /* Using the generated image as background */
            background-image: url('https://image.qwenlm.ai/public_source/55a2910b-bff9-437c-926b-8f4500a118be/18ef5eedd-e254-4fb9-8eb0-0e9d7cbb8afb.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        h1, h2, h3, .pixel-font {
            font-family: 'Press Start 2P', cursive;
            text-transform: uppercase;
            line-height: 1.5;
        }

        /* Retro Window Container */
        .retro-window {
            background-color: var(--win-gray);
            border: 3px solid white;
            border-right-color: #404040;
            border-bottom-color: #404040;
            box-shadow: 4px 4px 0px rgba(0,0,0,0.5);
            color: black;
        }

        .retro-title-bar {
            background: linear-gradient(90deg, var(--win-blue), #1084d0);
            color: white;
            padding: 4px 8px;
            font-family: 'Press Start 2P', cursive;
            font-size: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Retro Button */
        .retro-btn {
            background-color: var(--win-gray);
            border: 2px solid white;
            border-right-color: #404040;
            border-bottom-color: #404040;
            box-shadow: 1px 1px 0px black;
            font-family: 'Press Start 2P', cursive;
            font-size: 8px;
            cursor: pointer;
            active: translate(1px, 1px);
        }
        .retro-btn:active {
            border: 2px solid #404040;
            border-right-color: white;
            border-bottom-color: white;
            transform: translate(1px, 1px);
        }

        /* Search Input */
        .retro-input {
            background: white;
            border: 2px solid #404040;
            border-right-color: white;
            border-bottom-color: white;
            font-family: 'VT323', monospace;
            font-size: 1.2rem;
            outline: none;
            color: black;
        }
        
        /* Search Suggestions Dropdown */
        #search-suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 2px solid black;
            z-index: 50;
            max-height: 200px;
            overflow-y: auto;
            display: none;
        }
        .suggestion-item {
            padding: 5px 10px;
            cursor: pointer;
            color: black;
            font-size: 1.1rem;
        }
        .suggestion-item:hover {
            background-color: var(--neon-blue);
            color: black;
        }

        /* Blog Card Specifics */
        .blog-card {
            background: black;
            border: 4px solid var(--neon-blue);
            box-shadow: 4px 4px 0px var(--neon-pink);
            transition: transform 0.1s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .blog-card:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px var(--neon-pink);
            z-index: 10;
        }

        .card-image-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            overflow: hidden;
            border-bottom: 4px solid var(--neon-blue);
        }

        .card-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: filter 0.3s;
        }
        
        .blog-card:hover .card-image {
            filter: brightness(0.6);
        }

        /* ADJUSTED TITLE SIZE */
        .card-title-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            text-align: center;
            z-index: 10;
            color: white;
            text-shadow: 2px 2px 0px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            /* Changed from 1.2rem to 0.8rem (approx h5/h6 size for this font) */
            font-size: 0.8rem; 
            line-height: 1.4;
            pointer-events: none;
            max-height: 80%;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
        }

        .card-content {
            padding: 10px;
            background: #222;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-desc {
            color: #ddd;
            font-size: 1.2rem;
            line-height: 1.3;
            margin-bottom: 10px;
            /* Limit description lines too */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .read-more-btn {
            margin-top: auto;
            background: var(--neon-pink);
            color: white;
            border: 2px solid white;
            font-family: 'Press Start 2P', cursive;
            font-size: 8px;
            padding: 8px;
            text-align: center;
            text-decoration: none;
            display: block;
            box-shadow: 2px 2px 0px black;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }
        ::-webkit-scrollbar-track {
            background: #2a2a2a; 
            border-left: 2px solid white;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--neon-blue); 
            border: 2px solid white;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--neon-pink); 
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .grid-cols-6 { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 640px) {
            .grid-cols-6 { grid-template-columns: repeat(1, 1fr); }
            .retro-title-bar { font-size: 8px; }
        } 
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <!-- Header -->
    <header class="sticky top-0 z-50 mb-8">
        <div class="retro-window mx-4 mt-4 md:mx-12">
            <div class="retro-title-bar">
                <span>RPG BLOG SYSTEM v1.0</span>
                <div class="flex space-x-1">
                    <div class="w-3 h-3 bg-gray-400 border border-white"></div>
                    <div class="w-3 h-3 bg-gray-400 border border-white"></div>
                    <div class="w-3 h-3 bg-red-500 border border-white"></div>
                </div>
            </div>
            <div class="p-4 flex flex-col md:flex-row justify-between items-center gap-4 bg-[#c0c0c0]">
                <div class="flex items-center gap-4">
                    <h1 class="text-xl md:text-2xl text-blue-900 font-bold pixel-font">GARAGE UNICORN</h1>
                </div>

                <!-- Search Bar -->
                <div class="relative w-full md:w-1/3">
                    <div class="flex">
                        <input type="text" id="search-input" placeholder="Filtrar por título..." class="retro-input w-full px-2 py-1">
                        <button class="retro-btn px-4 py-1 ml-2 bg-green-600 text-white">BUSCAR</button>
                    </div>
                    <div id="search-suggestions" class="shadow-xl"></div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 mb-12">
        
        <!-- Blog Section -->
        <section id="blog" class="fade-in-section">
            
            <div class="retro-window p-1">
                <div class="bg-blue-900 text-white p-2 mb-4 flex justify-between items-center pixel-font text-xs md:text-sm">
                    <span>DIRECTORY: /BLOG/POSTS</span>
                    <span id="post-count">LOADING...</span>
                </div>

                <!-- Grid Layout: 6 Columns -->
                <div id="blog-posts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4 p-2">
                    
                    <?php 
                    // PHP Logic Integrated
                    $posts = [];
                    // Removed LIMIT 8 to allow pagination to work with the full grid
                    if (file_exists('backend/config.php')) {
                        require 'backend/config.php';
                        try {
                            $posts = $pdo->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
                        } catch (Exception $e) {
                            // Silently fail if db not connected
                        }
                    }
                    ?>

                    <?php if (!empty($posts) && count($posts) > 0): ?>
                        <?php foreach($posts as $p): ?>
                            <a href="blog/<?= htmlspecialchars($p['slug']) ?>" 
                               class="blog-card fade-in-section blog-post-item block" 
                               data-title="<?= htmlspecialchars(strtolower($p['title'])) ?>">
                                
                                <div class="card-image-container">
                                    <?php if (!empty($p['thumb'])): ?>
                                        <img src="uploads/<?= htmlspecialchars($p['thumb']) ?>" 
                                             alt="<?= htmlspecialchars($p['title']) ?>" 
                                             class="card-image">
                                    <?php else: ?>
                                        <!-- Fallback image if no thumb -->
                                        <img src="https://placehold.co/400x300/1a1a2e/00ffff?text=NO+IMAGE" 
                                             alt="No Image" class="card-image">
                                    <?php endif; ?>
                                    
                                    <!-- Title Overlay (Smaller Size) -->
                                    <h3 class="card-title-overlay pixel-font">
                                        <?= htmlspecialchars($p['title']) ?>
                                    </h3>
                                </div>

                                <div class="card-content">
                                    <p class="card-desc"><?= htmlspecialchars($p['summary']) ?></p>
                                    <span class="read-more-btn hover:bg-pink-600">LER ARQUIVO ></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-span-full text-center py-20 pixel-font text-red-500">
                            <p>NENHUM DADO ENCONTRADO NO BANCO</p>
                        </div>
                    <?php endif; ?>

                </div>
                
                <!-- Empty State (JS Controlled) -->
                <div id="no-results" class="hidden text-center py-20 pixel-font text-red-500">
                    <p>NENHUM RESULTADO PARA A BUSCA</p>
                    <p class="text-sm mt-2 font-mono">Tente outro termo.</p>
                </div>

                <!-- Pagination -->
                <?php if (count($posts) > 24): ?>
                    <div id="pagination-controls" class="flex justify-center items-center gap-2 mt-8 pb-4 flex-wrap">
                        <!-- Generated by JS -->
                    </div>
                <?php endif; ?>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-black border-t-4 border-white p-6 text-center mt-auto">
        <p class="pixel-font text-xs text-green-500 mb-2">SYSTEM STATUS: ONLINE</p>
        <p class="font-mono text-sm text-gray-400">&copy; 2026 GARAGE UNICORN. ALL RIGHTS RESERVED.</p>
        <p class="font-mono text-xs text-gray-600 mt-2">DESIGNED BY VITÓRIO NETTO</p>
    </footer>

    <!-- JavaScript Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const postsContainer = document.getElementById('blog-posts');
            const paginationContainer = document.getElementById('pagination-controls');
            const searchInput = document.getElementById('search-input');
            const suggestionsBox = document.getElementById('search-suggestions');
            const noResultsMsg = document.getElementById('no-results');
            const postCountLabel = document.getElementById('post-count');
            
            // Get all post items generated by PHP
            const allPosts = Array.from(document.querySelectorAll('.blog-post-item'));
            
            let currentPage = 1;
            const postsPerPage = 24; // 4 rows * 6 cols
            let filteredPosts = [...allPosts];

            // Update Count Label
            function updateCount() {
                if(postCountLabel) {
                    postCountLabel.innerText = `TOTAL: ${filteredPosts.length} REGISTROS`;
                }
            }

            // Render Function (Controls Visibility)
            function renderPosts(page) {
                // Hide all first
                allPosts.forEach(post => post.style.display = 'none');
                
                const startIndex = (page - 1) * postsPerPage;
                const endIndex = startIndex + postsPerPage;
                
                let visibleCount = 0;

                filteredPosts.forEach((post, index) => {
                    if (index >= startIndex && index < endIndex) {
                        post.style.display = 'block';
                        visibleCount++;
                    }
                });

                if (visibleCount === 0) {
                    noResultsMsg.classList.remove('hidden');
                    if(paginationContainer) paginationContainer.classList.add('hidden');
                } else {
                    noResultsMsg.classList.add('hidden');
                    if(paginationContainer) paginationContainer.classList.remove('hidden');
                }

                updateCount();
                setupPagination();
            }

            // Pagination Logic
            function setupPagination() {
                if (!paginationContainer) return;
                paginationContainer.innerHTML = '';
                const pageCount = Math.ceil(filteredPosts.length / postsPerPage);

                if (pageCount <= 1) return;

                const createBtn = (text, pageNum, isDisabled = false) => {
                    const btn = document.createElement('button');
                    btn.innerText = text;
                    btn.className = `retro-btn px-3 py-2 ${isDisabled ? 'opacity-50 cursor-not-allowed' : 'hover:bg-blue-200'}`;
                    if (isDisabled) btn.disabled = true;
                    btn.onclick = () => {
                        currentPage = pageNum;
                        renderPosts(currentPage);
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    };
                    return btn;
                };

                // Prev
                paginationContainer.appendChild(createBtn('<', currentPage - 1, currentPage === 1));
                
                // Numbers
                for (let i = 1; i <= pageCount; i++) {
                    const btn = createBtn(i, i);
                    if (i === currentPage) {
                        btn.classList.add('bg-blue-800', 'text-white', 'border-black');
                        btn.style.borderColor = 'black';
                        btn.style.borderRightColor = 'white';
                        btn.style.borderBottomColor = 'white';
                    }
                    paginationContainer.appendChild(btn);
                }

                // Next
                paginationContainer.appendChild(createBtn('>', currentPage + 1, currentPage === pageCount));
            }

            // Search Logic with Suggestions
            searchInput.addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                suggestionsBox.innerHTML = '';
                
                if (term.length === 0) {
                    suggestionsBox.style.display = 'none';
                    filteredPosts = [...allPosts];
                    currentPage = 1;
                    renderPosts(currentPage);
                    return;
                }

                // Filter posts based on data-title attribute
                filteredPosts = allPosts.filter(post => {
                    const title = post.getAttribute('data-title');
                    return title.includes(term);
                });

                // Show suggestions (limit to 5)
                const suggestions = filteredPosts.slice(0, 5);

                if (suggestions.length > 0) {
                    suggestionsBox.style.display = 'block';
                    suggestions.forEach(post => {
                        const div = document.createElement('div');
                        div.className = 'suggestion-item';
                        const title = post.getAttribute('data-title');
                        // Highlight matching part roughly
                        const regex = new RegExp(`(${term})`, 'gi');
                        // We need the actual text content for display, data-title is lowercased
                        const displayTitle = post.querySelector('.card-title-overlay').innerText;
                        const highlightedTitle = displayTitle.replace(regex, '<b>$1</b>');
                        
                        div.innerHTML = highlightedTitle;
                        
                        div.onclick = () => {
                            searchInput.value = displayTitle;
                            suggestionsBox.style.display = 'none';
                            // Filter strictly to this one post
                            filteredPosts = [post];
                            currentPage = 1;
                            renderPosts(currentPage);
                        };
                        suggestionsBox.appendChild(div);
                    });
                } else {
                    suggestionsBox.style.display = 'none';
                }

                currentPage = 1;
                renderPosts(currentPage);
            });

            // Hide suggestions when clicking outside
            document.addEventListener('click', (e) => {
                if (!searchInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
                    suggestionsBox.style.display = 'none';
                }
            });

            // Initial Render
            updateCount();
            renderPosts(currentPage);
        });
    </script>
</body>
</html>


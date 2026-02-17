<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Course – BEST Courses 2026</title>
    <link rel="icon" type="image/x-icon" href="https://bestcj.ro/wp-content/uploads/2014/11/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Override navbar fixed positioning for quiz page only */
        .main-nav {
            position: relative !important;
            transform: none !important;
        }
        
        /* Remove body padding since navbar is not fixed */
        body {
            padding-top: 0 !important;
        }
        
        .quiz-font { font-family: 'Playfair Display', serif; }
        .progress-fill { transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
        .question-slide { animation: slideInRight 0.4s ease-out; }
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .option-btn {
            transition: all 0.2s ease;
            border: 2px solid #CCD5AE;
            background: linear-gradient(135deg, #FEFAE0 0%, #FAEDCD 100%);
        }
        .option-btn:hover {
            border-color: #BB9457;
            background: linear-gradient(135deg, #FFE6A7 0%, #FAEDCD 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(67, 40, 24, 0.12);
        }
        .option-btn.selected {
            border-color: #6F1D1B;
            background: linear-gradient(135deg, #D4A373 0%, #BB9457 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(111, 29, 27, 0.25);
        }
        /* Animation for newly selected option only */
        .option-btn.just-selected {
            animation: selectPulse 0.5s ease-out;
        }
        @keyframes selectPulse {
            0% { transform: scale(1) translateY(0); }
            40% { transform: scale(1.02) translateY(-4px); }
            100% { transform: scale(1) translateY(-2px); }
        }
        .option-btn.selected .option-letter { background: rgba(255,255,255,0.2); color: #FEFAE0; }
        .option-btn.selected .option-text { color: #FEFAE0; }
        .option-letter {
            background: rgba(187, 148, 87, 0.2);
            color: #6F1D1B;
            font-weight: 700;
            width: 2rem; height: 2rem;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
            transition: all 0.2s ease;
        }
        .result-reveal { animation: resultReveal 0.7s cubic-bezier(0.34, 1.56, 0.64, 1); }
        @keyframes resultReveal {
            from { opacity: 0; transform: scale(0.85) translateY(20px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
        .result-course-card {
            border: 2px solid #CCD5AE;
            background: linear-gradient(135deg, #FEFAE0 0%, #FAEDCD 100%);
            border-radius: 0.75rem;
            transition: all 0.2s ease;
        }
        .result-course-card:hover {
            border-color: #BB9457;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 40, 24, 0.12);
        }
    </style>
</head>
<body class="bg-[#E9EDC9] min-h-screen flex flex-col font-sans text-[#432818]">

    @include('partials.nav')

    <main class="flex-grow w-full py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <div class="mb-8">
                <a href="{{ route('home') }}" class="inline-flex items-center text-[#6F1D1B] hover:text-[#99582A] font-semibold transition">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Courses
                </a>
            </div>

            <div class="text-center mb-10" id="quizHeader">
                <h1 class="quiz-font text-4xl md:text-5xl font-bold text-[#432818] mb-3">Find Your Perfect Course</h1>
                <p class="text-[#99582A] text-lg">Answer 3 questions and we'll match you with your course category.</p>
            </div>

            <div id="quizContainer">
                <div class="mb-8" id="progressSection">
                    <div class="flex justify-between text-sm text-[#99582A] font-semibold mb-2">
                        <span id="progressLabel">Question 1 of 3</span>
                        <span id="progressPercent">0%</span>
                    </div>
                    <div class="w-full h-3 bg-[#FAEDCD] rounded-full overflow-hidden border border-[#CCD5AE]">
                        <div id="progressBar" class="progress-fill h-full bg-gradient-to-r from-[#BB9457] to-[#6F1D1B] rounded-full" style="width: 0%"></div>
                    </div>
                </div>

                <div id="questionCard" class="bg-[#FEFAE0] rounded-2xl border-2 border-[#CCD5AE] shadow-lg p-6 md:p-8 mb-6">
                    <div id="questionContent"></div>
                </div>

                <div class="flex justify-between items-center" id="navSection">
                    <button id="prevBtn" onclick="prevQuestion()" class="hidden px-6 py-3 rounded-xl border-2 border-[#BB9457] text-[#432818] font-semibold hover:bg-[#FAEDCD] transition">
                        ← Previous
                    </button>
                    <div class="flex-1"></div>
                    <button id="nextBtn" onclick="nextQuestion()" class="hidden px-8 py-3 rounded-xl bg-[#6F1D1B] text-[#FEFAE0] font-semibold hover:bg-[#99582A] transition shadow-md">
                        Next →
                    </button>
                    <button id="submitBtn" onclick="submitQuiz()" class="hidden px-8 py-3 rounded-xl bg-[#6F1D1B] text-[#FEFAE0] font-semibold hover:bg-[#99582A] transition shadow-md">
                        See My Matches
                    </button>
                </div>
            </div>

            <div id="resultsContainer" class="hidden"></div>
        </div>
    </main>

    @include('partials.footer')

    <script>
        const questions = [
            { id: 1, text: "What is your primary area of technical interest?", options: [
                { letter: 'A', text: 'Emerging technologies like AI, Finance, or Cybersecurity (IoT).' },
                { letter: 'B', text: 'Industrial design, Rapid Prototyping, or Space Engineering.' },
                { letter: 'C', text: 'Software Design, practical inventions, or Applied Generative AI.' },
                { letter: 'D', text: 'Data Science, AI-powered education, or space exploration.' },
                { letter: 'E', text: 'Autonomous vehicles, Supply Chain, or Sustainable Energy.' },
                { letter: 'F', text: 'Genetics/Biotechnology, advanced LLMs, or Smart Households (IoT).' },
                { letter: 'G', text: 'Digital marketing and consumer psychology.' },
            ]},
            { id: 2, text: "What kind of atmosphere or \"vibe\" do you seek in a course?", options: [
                { letter: 'A', text: 'Cold & Fresh: A pragmatic and clear environment.' },
                { letter: 'B', text: 'Classic & Elegant: Focus on design, form, and traditional structure.' },
                { letter: 'C', text: 'Steady & Local: Long-term projects, software-implemented or local focus.' },
                { letter: 'D', text: 'Strong & Balanced: A mix of complex data and educational applications.' },
                { letter: 'E', text: 'Bold & Intense: High-stakes challenges (Space, autonomous transport, energy).' },
                { letter: 'F', text: 'Smooth & Modern: Cutting-edge technologies (Genome, Generative AI).' },
                { letter: 'G', text: 'Deep & Authentic: Exploring the depths of marketing and sales.' },
            ]},
            { id: 3, text: "Which destination attracts you the most?", options: [
                { letter: 'A', text: 'Northern Europe or Financial Hubs.' },
                { letter: 'B', text: 'The Cultural Heart of Europe.' },
                { letter: 'C', text: 'Eastern Europe.' },
                { letter: 'D', text: 'The Iberian Peninsula.' },
                { letter: 'E', text: 'The Historical South.' },
                { letter: 'F', text: 'Central Europe & the Balkans.' },
                { letter: 'G', text: 'The Gates of the Orient.' },
            ]}
        ];

        const coffeeCategories = {
            A: { name: 'ICE COFFEE', subtitle: 'Cold & Fresh', description: 'You thrive in pragmatic, high-performance environments. Cutting-edge tech and no-nonsense learning are your thing.', headerBg: 'linear-gradient(135deg, #FAEDCD 0%, #FFE6A7 100%)', headerText: '#432818', headerSub: '#6F1D1B', courses: [
                { slug: 'license-to-skill', title: 'License to Skill: Engineering in the Age of AI', location: 'Aalborg, Denmark', dates: '26 Jul – 03 Aug 2026' },
                { slug: 'think-cfo', title: 'Think Like a CFO, Act Like a Leader', location: 'Tallinn, Estonia', dates: '28 Jun – 08 Jul 2026' },
                { slug: 'racing-hackers', title: 'Racing Against Hackers: Advanced Cybersecurity for IoT', location: 'Wroclaw, Poland', dates: '14 Jul – 22 Jul 2026' },
                { slug: 'double-trouble', title: 'Double Trouble: When Physical Systems Go Digital', location: 'Leuven, Belgium', dates: '07 Jul – 16 Jul 2026' },
            ]},
            B: { name: 'CAFÉ AU LAIT', subtitle: 'Classic & Elegant', description: 'You appreciate craftsmanship, form, and timeless principles. You love working with your hands and your mind.', headerBg: 'linear-gradient(135deg, #FAEDCD 0%, #D4A373 100%)', headerText: '#432818', headerSub: '#6F1D1B', courses: [
                { slug: 'surf-ecological-wave', title: 'Surf on an Ecological Wave: Designing the Next Gen Surf Board', location: 'Arts et Métiers, France', dates: '14 Jun – 21 Jun 2026' },
                { slug: 'machine-design', title: 'Giving Shape to the Unknown: Machine Design & Rapid Prototyping', location: 'Louvain-la-Neuve, Belgium', dates: '03 Jul – 11 Jul 2026' },
                { slug: 'gru-guide', title: "Gru's Guide for Minion Space Engineering", location: 'Vienna, Austria', dates: '11 Jul – 19 Jul 2026' },
                { slug: 'hash-blockchain', title: 'Hash Me If You Can: Blockchain Most Wanted', location: 'Prague, Czech Republic', dates: '14 Aug – 23 Aug 2026' },
            ]},
            C: { name: 'CAFFE LATTE', subtitle: 'Steady & Local', description: 'You value depth, consistency, and practical application. You enjoy bringing ideas to life through software and invention.', headerBg: 'linear-gradient(135deg, #FEFAE0 0%, #CCD5AE 100%)', headerText: '#432818', headerSub: '#6F1D1B', courses: [
                { slug: 'once-upon-model', title: 'Once Upon a Model: Bring Your Design Concepts to Life in Software', location: 'Bucharest, Romania', dates: '12 Jul – 21 Jul 2026' },
                { slug: 'where-is-perry', title: 'Where is Perry? Bring Your Own Summer Invention to Life!', location: 'Cluj-Napoca, Romania', dates: '27 Jul – 03 Aug 2026' },
                { slug: 'agentic-ai', title: 'When Code Makes Decisions: A Gentle Introduction to Agentic AI', location: 'Chisinau, Moldova', dates: '21 Jul – 28 Jul 2026' },
                { slug: 'empowered-diversity', title: 'Empowered Diversity: International Mobility & Inclusive Campus', location: 'Iasi, Romania', dates: '11 Aug – 19 Aug 2026' },
            ]},
            D: { name: 'CORTADO', subtitle: 'Strong & Balanced', description: 'You seek the perfect balance of technical depth and real-world impact. Data, AI, and exploration excite you.', headerBg: 'linear-gradient(135deg, #FAEDCD 0%, #D4A373 100%)', headerText: '#432818', headerSub: '#6F1D1B', courses: [
                { slug: 'avatar-way-ai', title: 'Avatar: The Way of AI', location: 'Madrid, Spain', dates: '18 Jul – 27 Jul 2026' },
                { slug: 'copilot-speaking', title: 'This is your Copilot Speaking: AI-Powered Future of Education', location: 'Porto, Portugal', dates: '19 Jul – 28 Jul 2026' },
                { slug: 'data-science', title: 'Data Science: Turning Stranger Data the Rightside Up', location: 'Aveiro, Portugal', dates: '22 Jul – 29 Jul 2026' },
                { slug: 'space-safety', title: 'Space Safety: Your Guide to the Final Frontier', location: 'Coimbra, Portugal', dates: '15 Jul – 24 Jul 2026' },
            ]},
            E: { name: 'DOUBLE ESPRESSO', subtitle: 'Bold & Intense', description: "You live for big challenges. High stakes, fast pace, bold ideas — you want to push the limits of what's possible.", headerBg: 'linear-gradient(135deg, #6F1D1B 0%, #432818 100%)', headerText: '#FEFAE0', headerSub: 'rgba(254,250,224,0.8)', courses: [
                { slug: 'fly-to-moon', title: 'Fly Me To The Moon: Engineering The BEST Space Supply Chain', location: 'Rome Tor Vergata, Italy', dates: '26 Jul – 01 Aug 2026' },
                { slug: 'tron-autonomous', title: 'TRON: The Rise of Autonomous Vehicles', location: 'Messina, Italy', dates: '26 Jul – 02 Aug 2026' },
                { slug: 'journal-4', title: 'Journal 4: Clean Energy, New Technologies & Sustainable Buildings', location: 'Patras, Greece', dates: '05 Jul – 13 Jul 2026' },
                { slug: 'alchemy-startup', title: 'The Alchemy of Startup Creation: Turn Your Idea into Gold!', location: 'Belgrade, Serbia', dates: '08 Aug – 15 Aug 2026' },
                { slug: 'digital-experiences', title: 'Designing Digital Experiences: Why Some Apps Feel Amazing', location: 'Skopje, North Macedonia', dates: '05 Jul – 13 Jul 2026' },
            ]},
            F: { name: 'FLAT WHITE', subtitle: 'Smooth & Modern', description: "You're drawn to frontier science and next-generation technology. Sleek, cutting-edge, always forward-thinking.", headerBg: 'linear-gradient(135deg, #FEFAE0 0%, #E9EDC9 100%)', headerText: '#432818', headerSub: '#6F1D1B', courses: [
                { slug: 'cold-cases-genome', title: 'Solving Cold Cases in the Genome: Gene and Cell Therapies', location: 'Ljubljana, Slovenia', dates: '24 Aug – 31 Aug 2026' },
                { slug: 'pax-informatica', title: 'Pax Informatica: Advanced Usage of Generative AI and LLMs', location: 'Maribor, Slovenia', dates: '27 Jun – 04 Jul 2026' },
                { slug: 'attention-economy', title: 'Attention Economy: How Brands Win Minds', location: 'Mostar, Bosnia and Herzegovina', dates: '26 Jul – 01 Aug 2026' },
                { slug: 'lord-of-things', title: 'Lord of the Things: Create Your Own Smart Household with IoT!', location: 'Kosice, Slovakia', dates: '05 Jul – 12 Jul 2026' },
            ]},
            G: { name: 'TURKISH COFFEE', subtitle: 'Deep & Authentic', description: 'You understand people, brands, and the power of storytelling. Rich, intense, and full of cultural depth.', headerBg: 'linear-gradient(135deg, #432818 0%, #99582A 100%)', headerText: '#FEFAE0', headerSub: 'rgba(254,250,224,0.8)', courses: [
                { slug: 'wolf-digital-street', title: 'The Wolf of Digital Street: Sell Me This Product!', location: 'Istanbul, Türkiye', dates: '17 Jun – 24 Jun 2026' },
                { slug: 'paradise-marketing', title: 'Paradise on Marketing: Where Brands Catch Waves', location: 'Istanbul Yildiz, Türkiye', dates: '04 Jul – 12 Jul 2026' },
            ]}
        };

        let currentQuestion = 0;
        const answers = [];

        function updateNavButtons() {
            const hasAnswer = !!answers[currentQuestion];
            const isLast = currentQuestion === questions.length - 1;

            document.getElementById('prevBtn').classList.toggle('hidden', currentQuestion === 0);
            document.getElementById('nextBtn').classList.toggle('hidden', isLast || !hasAnswer);
            document.getElementById('submitBtn').classList.toggle('hidden', !isLast || !hasAnswer);
        }

        function renderQuestion() {
            const q = questions[currentQuestion];
            const progress = Math.round((currentQuestion / questions.length) * 100);
            document.getElementById('progressLabel').textContent = `Question ${currentQuestion + 1} of ${questions.length}`;
            document.getElementById('progressPercent').textContent = `${progress}%`;
            document.getElementById('progressBar').style.width = `${progress}%`;

            const selected = answers[currentQuestion];
            document.getElementById('questionContent').innerHTML = `
            <div class="question-slide">
                <h2 class="quiz-font text-2xl md:text-3xl font-bold text-[#432818] mb-6 leading-snug">${q.text}</h2>
                <div class="space-y-3">
                    ${q.options.map(opt => `
                        <button class="option-btn w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 ${selected === opt.letter ? 'selected' : ''}"
                                data-letter="${opt.letter}"
                                onclick="selectOption('${opt.letter}', this)">
                            <span class="option-letter">${opt.letter}</span>
                            <span class="option-text text-[#432818] text-sm md:text-base leading-snug">${opt.text}</span>
                        </button>
                    `).join('')}
                </div>
            </div>`;

            updateNavButtons();
        }

        function selectOption(letter, buttonElement) {
            // Deselect the previously selected button in the DOM (no re-render)
            const previouslySelected = document.querySelector('.option-btn.selected');
            if (previouslySelected) {
                previouslySelected.classList.remove('selected');
            }

            // Select the clicked button
            buttonElement.classList.add('selected');
            buttonElement.classList.add('just-selected');

            // Remove the pulse animation class after it finishes
            setTimeout(() => {
                buttonElement.classList.remove('just-selected');
            }, 500);

            // Save the answer
            answers[currentQuestion] = letter;

            // Only update the nav buttons, not the whole question
            updateNavButtons();
        }

        function scrollToProgress() {
            const progressSection = document.getElementById('progressSection');
            if (progressSection) {
                const yOffset = -20;
                const y = progressSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
                window.scrollTo({top: y, behavior: 'smooth'});
            }
        }

        function nextQuestion() {
            if (!answers[currentQuestion]) return;
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                renderQuestion();
                scrollToProgress();
            }
        }

        function prevQuestion() {
            if (currentQuestion > 0) {
                currentQuestion--;
                renderQuestion();
                scrollToProgress();
            }
        }

        function submitQuiz() {
            const counts = {};
            answers.forEach(a => { counts[a] = (counts[a] || 0) + 1; });
            const winner = Object.entries(counts).sort((a,b) => b[1]-a[1])[0][0];
            const cat = coffeeCategories[winner];
            const courseCards = cat.courses.map(c => `
            <a href="/course/${c.slug}" class="result-course-card block p-4">
                <h4 class="font-semibold text-[#432818] text-sm leading-snug mb-1">${c.title}</h4>
                <p class="text-xs text-[#99582A] flex items-center gap-1 flex-wrap">
                    <svg class="w-3 h-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    ${c.location} <span class="mx-1">·</span> ${c.dates}
                </p>
            </a>
        `).join('');
            document.getElementById('resultsContainer').innerHTML = `
            <div class="result-reveal">
                <div class="rounded-2xl p-8 md:p-10 mb-8 text-center shadow-xl" style="background: ${cat.headerBg};">
                    <p class="text-sm font-semibold uppercase tracking-widest mb-2" style="color:${cat.headerSub};">Your coffee match is</p>
                    <h2 class="quiz-font text-4xl md:text-5xl font-bold mb-2" style="color:${cat.headerText};">${cat.name}</h2>
                    <p class="text-lg font-semibold mb-4" style="color:${cat.headerSub};">${cat.subtitle}</p>
                    <p class="max-w-md mx-auto leading-relaxed" style="color:${cat.headerSub};">${cat.description}</p>
                </div>
                <div class="bg-[#FEFAE0] rounded-2xl border-2 border-[#CCD5AE] shadow-lg p-6 md:p-8 mb-6">
                    <h3 class="quiz-font text-2xl font-bold text-[#432818] mb-1">Your Matched Courses</h3>
                    <p class="text-[#99582A] text-sm mb-5">Click any course to see full details and apply.</p>
                    <div class="space-y-3">${courseCards}</div>
                </div>
                <div class="text-center flex flex-wrap gap-3 justify-center">
                    <button onclick="retakeQuiz()" class="px-8 py-3 rounded-xl border-2 border-[#BB9457] text-[#432818] font-semibold hover:bg-[#FAEDCD] transition">Retake Quiz</button>
                    <a href="{{ route('home') }}" class="px-8 py-3 rounded-xl bg-[#6F1D1B] text-[#FEFAE0] font-semibold hover:bg-[#99582A] transition shadow-md">Browse All Courses</a>
                </div>
            </div>`;
            document.getElementById('quizContainer').classList.add('hidden');
            document.getElementById('quizHeader').classList.add('hidden');
            document.getElementById('resultsContainer').classList.remove('hidden');
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function retakeQuiz() {
            answers.length = 0;
            currentQuestion = 0;
            document.getElementById('quizContainer').classList.remove('hidden');
            document.getElementById('quizHeader').classList.remove('hidden');
            document.getElementById('resultsContainer').classList.add('hidden');
            renderQuestion();
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        renderQuestion();
    </script>
</body>
</html>
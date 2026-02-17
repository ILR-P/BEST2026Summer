<!-- Main Navigation -->
<nav class="main-nav bg-[#d4a373] shadow-md w-full border-b-4 border-[#BB9457]">
    <div class="max-w-[1920px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20 md:h-24">

            <!-- Logo Section - Two Separate Buttons -->
            <div class="flex items-center gap-3 md:gap-6">
                <!-- BEST Logo Button -->
                <a href="https://bestcj.ro/" target="_blank" rel="noopener noreferrer"
                    class="logo-link-best group flex-shrink-0 transition">
                    <div class="logo-container">
                        <img src="/images/logoBEST.png" alt="BEST Logo"
                            class="logo-default h-14 md:h-[clamp(56px,7vw,80px)] w-auto object-contain">
                        <img src="/images/logoBEST_red.png" alt="BEST Logo Red"
                            class="logo-hover h-14 md:h-[clamp(56px,7vw,80px)] w-auto object-contain">
                    </div>
                </a>

                <!-- Courses Logo Button -->
                <a href="https://www.best.eu.org/courses/welcome.jsp" target="_blank" rel="noopener noreferrer"
                    class="logo-link-courses group flex-shrink-0 transition pr-4">
                    <div class="logo-container">
                        <img src="/images/logoCourses.png" alt="Courses Logo"
                            class="logo-default h-7 md:h-[clamp(28px,3.5vw,40px)] w-auto object-contain">
                        <img src="/images/logoCourses_red.png" alt="Courses Logo Red"
                            class="logo-hover h-7 md:h-[clamp(28px,3.5vw,40px)] w-auto object-contain">
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center space-x-4 lg:space-x-6 md:ml-4 lg:ml-10">
                @php
                    $isCourseOrQuiz = request()->is('course/*') || request()->is('quiz');
                @endphp

                @if ($isCourseOrQuiz)
                    <!-- Show on Course Detail Page or Quiz Page -->
                    <a href="{{ route('home') }}"
                        class="nav-link text-[#432818] hover:text-[#6F1D1B] font-bold transition whitespace-nowrap">
                        Home
                    </a>
                @else
                    <!-- Show on Index Page -->
                    <a href="#top" onclick="event.preventDefault(); window.scrollTo({top: 0, behavior: 'smooth'});"
                        class="nav-link text-[#432818] hover:text-[#6F1D1B] font-bold transition whitespace-nowrap">
                        Home
                    </a>
                @endif

                <a href="https://www.best.eu.org/courses/frequentlyAskedQuestions.jsp" target="_blank"
                    rel="noopener noreferrer"
                    class="nav-link text-[#432818] hover:text-[#6F1D1B] font-bold transition whitespace-nowrap">
                    FAQ
                </a>

                <a href="https://www.best.eu.org/courses/howToWriteAMotivationLetter.jsp" target="_blank"
                    rel="noopener noreferrer"
                    class="nav-link text-[#432818] hover:text-[#6F1D1B] font-bold transition whitespace-nowrap">
                    <span class="min-[990px]:hidden">Motivational Letter</span>
                    <span class="hidden min-[990px]:inline">How to write a motivational letter</span>
                </a>

                @if (!$isCourseOrQuiz)
                    <!-- Only show Quiz and Testimonials on Index Page -->
                    <a href="#quiz-promo"
                        class="nav-link text-[#432818] hover:text-[#6F1D1B] font-bold transition whitespace-nowrap">
                        Quiz
                    </a>
                    <a href="#testimonials"
                        class="nav-link text-[#432818] hover:text-[#6F1D1B] font-bold transition whitespace-nowrap">
                        Testimonials
                    </a>
                @endif
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex md:hidden">
                <button onclick="toggleMenu()" type="button"
                    class="menu-toggle-btn inline-flex items-center justify-center p-2 rounded-md text-[#432818] hover:bg-[#D4A373] focus:outline-none"
                    aria-label="Toggle menu" aria-expanded="false">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="mobile-menu md:hidden bg-[#FAEDCD] border-t border-[#BB9457] shadow-lg">
        <div class="px-4 pt-2 pb-4 flex flex-col text-center">
            @if ($isCourseOrQuiz)
                <!-- Show on Course Detail Page or Quiz Page -->
                <a href="{{ route('home') }}" onclick="toggleMenu()"
                    class="mobile-menu-item block px-3 py-2 rounded-md font-bold text-[#432818] hover:text-[#6F1D1B]">
                    Home
                </a>
            @else
                <!-- Show on Index Page -->
                <a href="#top"
                    onclick="event.preventDefault(); window.scrollTo({top: 0, behavior: 'smooth'}); toggleMenu();"
                    class="mobile-menu-item block px-3 py-2 rounded-md font-bold text-[#432818] hover:text-[#6F1D1B]">
                    Home
                </a>
            @endif

            <a href="https://www.best.eu.org/courses/frequentlyAskedQuestions.jsp" target="_blank"
                rel="noopener noreferrer"
                class="mobile-menu-item block px-3 py-2 rounded-md font-bold text-[#432818] hover:text-[#6F1D1B]">
                FAQ
            </a>
            <a href="https://www.best.eu.org/courses/howToWriteAMotivationLetter.jsp" target="_blank"
                rel="noopener noreferrer"
                class="mobile-menu-item block px-3 py-2 rounded-md font-bold text-[#432818] hover:text-[#6F1D1B]">
                How to write a motivational letter
            </a>

            @if (!$isCourseOrQuiz)
                <!-- Only show Quiz and Testimonials on Index Page -->
                <a href="#quiz-promo" onclick="toggleMenu()"
                    class="mobile-menu-item block px-3 py-2 rounded-md font-bold text-[#432818] hover:text-[#6F1D1B]">
                    Quiz
                </a>
                <a href="#testimonials" onclick="toggleMenu()"
                    class="mobile-menu-item block px-3 py-2 rounded-md font-bold text-[#432818] hover:text-[#6F1D1B]">
                    Testimonials
                </a>
            @endif
        </div>
    </div>
</nav>

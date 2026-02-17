<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEST Courses In Summer 2026</title>
    <link rel="icon" type="image/x-icon" href="https://bestcj.ro/wp-content/uploads/2014/11/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#E9EDC9] min-h-screen flex flex-col font-sans text-[#432818]">

    @include('partials.nav')

    <!-- Main Content -->
    <main class="flex-grow w-full py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-[1920px] mx-auto">

            <!-- Page Header -->
            <div class="text-center mb-8">
                <h1 class="page-title font-extrabold text-[#432818] mb-4">
                    Summer Courses 2026
                </h1>
                <p class="page-subtitle text-[#99582A] font-medium">
                    Choose your adventure and explore amazing opportunities across Europe
                </p>
            </div>

            <!-- Search Section -->
            <div class="search-section mb-12">
                <div class="max-w-2xl mx-auto">
                    <div class="search-wrapper-dropdown">
                        <div class="search-icon">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" id="countrySearch" placeholder="Search by country or city..."
                            class="search-input" autocomplete="off">
                        <button type="button" id="clearSearch" class="clear-search-btn hidden"
                            aria-label="Clear search">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown Results -->
                        <div id="searchDropdown" class="search-dropdown hidden">
                            <div id="dropdownResults"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Cards Grid - 5 Scrolling Rows -->
            <div class="course-grid" id="courseGrid">

                @php
                    // Convert to array with slugs
                    $allCourses = [];
                    foreach ($courses as $slug => $course) {
                        $allCourses[] = array_merge($course, ['slug' => $slug]);
                    }

                    // Distribute 26 courses across 5 rows as evenly as possible
                    $totalCourses = count($allCourses);
                    $numRows = 5;
                    $basePerRow = floor($totalCourses / $numRows);
                    $remainder = $totalCourses % $numRows;

                    $rows = [];
                    $currentIndex = 0;

                    for ($i = 0; $i < $numRows; $i++) {
                        $coursesInThisRow = $basePerRow + ($i < $remainder ? 1 : 0);
                        $rows[] = array_slice($allCourses, $currentIndex, $coursesInThisRow);
                        $currentIndex += $coursesInThisRow;
                    }
                @endphp

                @foreach ($rows as $rowIndex => $rowCourses)
                    <div class="course-row-container">
                        <div class="course-row {{ $rowIndex % 2 == 0 ? 'course-row-left' : 'course-row-right' }}">

                            @php
                                // Duplicate courses 3 times for seamless infinite scroll
                                $duplicatedCourses = array_merge($rowCourses, $rowCourses, $rowCourses);
                            @endphp

                            @foreach ($duplicatedCourses as $dupIndex => $course)
                                <div class="course-card-wrapper" data-location="{{ strtolower($course['location']) }}"
                                    data-course-slug="{{ $course['slug'] }}"
                                    data-is-original="{{ $dupIndex < count($rowCourses) ? 'true' : 'false' }}">
                                    <a href="{{ route('course.show', ['slug' => $course['slug']]) }}"
                                        class="course-card">
                                        <div class="course-card-content">
                                            <h3 class="course-title">{{ $course['title'] }}</h3>
                                            <div class="course-meta">
                                                <div class="course-location">
                                                    <svg class="icon" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    <span>{{ $course['location'] }}</span>
                                                </div>
                                                <div class="course-dates">
                                                    <svg class="icon" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                    <span>{{ $course['dates'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-card-arrow">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Quiz Promo Section -->
            <section id="quiz-promo" class="quiz-promo-section my-16">
                <div class="quiz-promo-card">
                    <div class="quiz-promo-content">
                        <h2 class="quiz-promo-title">Can't decide where to go?</h2>
                        <p class="quiz-promo-subtitle">
                            Take our 3-question quiz and we'll match you with your perfect course category.
                        </p>
                        <a href="{{ route('quiz') }}" class="quiz-promo-btn">
                            Take the Quiz
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            
            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials-section py-16">
                <div class="max-w-7xl mx-auto">

                    <!-- Section Title -->
                    <div class="text-center mb-12">
                        <h2 class="page-title font-extrabold text-[#432818] mb-4">Testimonials</h2>
                        <p class="page-subtitle text-[#99582A] font-medium">Hear from students who experienced BEST
                            courses</p>
                    </div>

                    <!-- Testimonials Grid -->
                    <div class="testimonials-grid">

                        <!-- Testimonial Card 1 -->
                        <div class="testimonial-card">
                            <div class="testimonial-image-wrapper">
                                <img src="/images/student1.jpg" alt="Anda Bodea" class="testimonial-image"
                                    style="transform: scale(1.0); object-position: center 10%;">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    "Pe mine, participarea la un curs BEST m-a ajutat să ies din zona de confort foarte
                                    mult, mi-am făcut o mulțime de prieteni noi peste tot în Europa și mi-am exersat
                                    engleza. Aș recomanda 100% experiența, mai ales dacă ești pasionat de travelling și
                                    îți place să experimentezi culturi noi."
                                </p>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Anda Bodea</h4>
                                    <p class="testimonial-course">Skopje, Macedonia de Nord</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 2 -->
                        <div class="testimonial-card">
                            <div class="testimonial-image-wrapper">
                                <img src="/images/student2.jpg" alt="Raul Petruț" class="testimonial-image"
                                    style="transform: scale(1.0); object-position: center center;">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    "Cursul din Torino a fost primul meu curs și o experiență grozavă. Am cunoscut o
                                    mulțime de oameni cu care încă vorbesc. Am stat mai mult de o săptămână și am
                                    explorat orașul pentru un preț foarte mic. De-abia aștept următoarea dată când merg
                                    la un curs!"
                                </p>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Raul Petruț</h4>
                                    <p class="testimonial-course">Torino, Italia</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 3 -->
                        <div class="testimonial-card">
                            <div class="testimonial-image-wrapper">
                                <img src="/images/student3.jpg" alt="Patricia Fătu" class="testimonial-image"
                                    style="transform: scale(1.0); object-position: center 40%;">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    "Nu cunoșteam pe nimeni, nu au fost alți participanți din România și a fost prima
                                    dată când am călătorit singură. În ciuda acestor lucruri, m-am simțit ca acasă încă
                                    din prima zi! Mi-am făcut mulți prieteni, am vizitat mai multe orașe și am rămas cu
                                    amintiri la care mă gândesc cu drag."
                                </p>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Patricia Fătu</h4>
                                    <p class="testimonial-course">Valladolid, Spania</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 4 -->
                        <div class="testimonial-card">
                            <div class="testimonial-image-wrapper">
                                <img src="/images/student4.jpg" alt="Riana Horvath" class="testimonial-image"
                                    style="transform: scale(1.0); object-position: center 20%;">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    "A fost highlight-ul verii mele!! Combinația perfectă între fun și util. E imposibil
                                    să nu-ți faci prieteni când ești înconjurat de oameni atât de faini. Pur și simplu
                                    trăiești momentul, te bucuri de tot și ajungi să faci o grămadă de lucruri pe care,
                                    în mod normal, nu le-ai fi făcut."
                                </p>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Riana Horvath</h4>
                                    <p class="testimonial-course">Istanbul, Türkiye</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 5 -->
                        <div class="testimonial-card">
                            <div class="testimonial-image-wrapper">
                                <img src="/images/student5.jpg" alt="Bianca Lungu" class="testimonial-image"
                                    style="transform: scale(1.0); object-position: center center;">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    "Toată experiența cursului se simte exact ca o pauză din orice rutină obișnuită. Nu
                                    se pot descrie în cuvinte toate lucrurile noi pe care le experimentezi, cunoștințele
                                    pe care le câștigi și interacțiunea cu oamenii. Aș recomanda oricui să își
                                    pregătească curajul și entuziasmul de a aplica la cursuri."
                                </p>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Bianca Lungu</h4>
                                    <p class="testimonial-course">Vienna, Austria</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 6 -->
                        <div class="testimonial-card">
                            <div class="testimonial-image-wrapper">
                                <img src="/images/student6.jpg" alt="Raul Modi" class="testimonial-image"
                                    style="transform: scale(1.0); object-position: center 60%;">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    "Pentru mine, să particip la un curs BEST a fost o experiență mai plăcută decât mă
                                    așteptam. În fiecare zi simțeam că mă distrez tot mai bine și nicio secundă nu a
                                    fost lipsită de activitate. Consider că e o experiență pe care toată lumea trebuie
                                    să o încerce măcar o dată, pentru că poți descoperi o nouă latură a ta."
                                </p>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Raul Modi</h4>
                                    <p class="testimonial-course">Skopje, Macedonia de Nord</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>

    @include('partials.footer')

</body>

</html>

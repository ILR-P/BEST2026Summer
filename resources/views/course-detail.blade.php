<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEST Courses In Summer 2026</title>
    <link rel="icon" type="image/x-icon" href="https://bestcj.ro/wp-content/uploads/2014/11/favicon.ico?">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#E9EDC9] min-h-screen flex flex-col font-sans text-[#432818]">

    @include('partials.nav')

    <!-- Main Content - Course Details -->
    <main class="flex-grow w-full py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">

            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center text-[#6F1D1B] hover:text-[#99582A] font-bold transition">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Courses
                </a>
            </div>

            <!-- Course Header -->
            <div
                class="course-detail-header bg-[#FEFAE0] rounded-2xl shadow-xl border-2 border-[#CCD5AE] p-6 md:p-10 mb-8">
                <h1 class="course-detail-title font-extrabold text-[#432818] mb-4">{{ $courseData['title'] }}</h1>

                <div class="flex flex-wrap gap-4 md:gap-6 mb-6">
                    <div class="flex items-center gap-2 text-[#99582A]">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium">{{ $courseData['location'] }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-[#99582A]">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium">{{ $courseData['dates'] }}</span>
                    </div>
                </div>
            </div>

            <!-- 2x2 Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Left Column: 2 boxes stacked (shows SECOND on mobile) -->
                <div class="flex flex-col gap-8 order-2 lg:order-1">
                    <!-- Course Image -->
                    <div class="bg-[#FEFAE0] rounded-2xl shadow-xl border-2 border-[#CCD5AE] p-6">
                        <div class="aspect-video w-full overflow-hidden rounded-lg">
                            <img src="{{ $courseData['image'] ?? '/images/courses/placeholder.jpg' }}"
                                alt="{{ $courseData['title'] }}" class="w-full h-full object-cover"
                                style="object-position: center;">
                        </div>
                    </div>

                    <!-- What You'll Learn -->
                    <div class="bg-[#FEFAE0] rounded-2xl shadow-xl border-2 border-[#CCD5AE] p-6">
                        <h2 class="text-2xl font-bold text-[#432818] mb-4">What You'll Learn</h2>
                        <ul class="space-y-3">
                            @foreach ($courseData['learnings'] as $learning)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#6F1D1B] flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-[#99582A]">{{ $learning }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Right Column: 1 tall box (shows FIRST on mobile) -->
                <div
                    class="bg-[#FEFAE0] rounded-2xl shadow-xl border-2 border-[#CCD5AE] p-6 md:p-8 flex flex-col order-1 lg:order-2">
                    <h2 class="text-2xl font-bold text-[#432818] mb-4">About this Course</h2>
                    <p class="text-[#99582A] leading-relaxed mb-8">{{ $courseData['description'] }}</p>

                    <h2 class="text-2xl font-bold text-[#432818] mb-4">Course Details</h2>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex flex-col">
                            <span class="font-bold text-[#BB9457]">Duration:</span>
                            <span class="text-[#99582A]">{{ $courseData['duration'] }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-[#BB9457]">Level:</span>
                            <span class="text-[#99582A]">{{ $courseData['level'] }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-[#BB9457]">Language:</span>
                            <span class="text-[#99582A]">{{ $courseData['language'] }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-[#BB9457]">Price:</span>
                            <span class="text-[#99582A] font-bold text-lg">{{ $courseData['price'] ?? 'TBA' }}</span>
                        </div>
                    </div>

                    <!-- Apply Button (pushed to bottom with flex-grow spacer) -->
                    <div class="mt-auto">
                        <a href="{{ $courseData['apply_url'] ?? 'https://www.best.eu.org/courses/welcome.jsp' }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center w-full px-8 py-4 bg-[#6F1D1B] text-[#FEFAE0] font-bold rounded-lg hover:bg-[#99582A] transition shadow-lg hover:shadow-xl">
                            Apply Now
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    @include('partials.footer')

</body>

</html>

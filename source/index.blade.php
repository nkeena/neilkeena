@extends('_layouts.master')

@section('body')
<div class="relative overflow-hidden bg-white">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
        <div class="relative h-full max-w-screen-xl mx-auto">
            <svg class="absolute transform right-full -translate-y-3/4 translate-x-1/4 lg:translate-x-1/2" width="404"
                height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute transform left-full translate-y-3/4 -translate-x-1/4 md:translate-y-1/4 lg:-translate-x-1/2"
                width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="relative pt-6 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
        <main class="max-w-screen-xl px-4 mx-auto sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-12">
            <div class="text-center">
                <div class="flex items-center justify-center p-1 mx-auto rounded-full w-36 h-36">
                    <img class="w-full h-full rounded-full" src="assets/images/neil_keena_headshot.jpg" alt="">
                </div>

                <p class="mt-5 space-x-4 text-3xl font-bold text-gray-900">
                    <span>👋</span><span>I'm Neil Keena</span>
                </p>

                <h2
                    class="mt-3 text-4xl font-extrabold leading-10 tracking-tight text-transparent text-teal-600 sm:text-5xl sm:leading-none md:text-6xl">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-900">Fullstack</span>
                    <br class="xl:hidden">
                    <span class="text-gray-900">Web Developer</span>
                </h2>
                <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    I'm passionate about solving problems, building new things and helping others achieve their goals.
                    Since 2007, I've been writing software as a freelancer and for a number of small startups and large
                    organizations.
                </p>
            </div>
        </main>
    </div>
</div>
<div class="overflow-hidden bg-gradient-to-r from-gray-100 via-gray-50 to-gray-100">
    <div class="relative max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <svg class="absolute top-0 transform -translate-x-1/2 left-full -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4"
            width="404" height="784" fill="none" viewBox="0 0 404 784">
            <defs>
                <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20"
                    patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
        </svg>

        <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="lg:col-span-1">
                <span class="text-3xl">👨🏻‍💻</span>
                <h1 class="text-base font-semibold leading-6 tracking-wide text-teal-600 uppercase">Technical</h1>
                <h3 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Skills
                </h3>
            </div>
            <div class="mt-10 sm:grid sm:grid-cols-2 sm:gap-x-8 sm:gap-y-10 lg:col-span-2 lg:mt-0">
                <div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-blue-400 to-blue-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Front-end</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            Vue.js, Inertia.js, Livewire, JavaScript, TailwindCSS, Bootstrap, CSS, HTML.
                        </p>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-teal-400 to-teal-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Back-end</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            Laravel, Codeignitor, PHP.
                        </p>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-teal-500 to-teal-700">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Database</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            MySQL, PosgreSQL, Redis, Memcached.
                        </p>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-gray-600 to-gray-900">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Server</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            Laravel Forge + Envoyer, Ploi, AWS, Digital Ocean, Google Cloud.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overflow-hidden bg-gradient-to-r from-gray-100 via-gray-50 to-gray-100">
    <div class="relative max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <svg class="absolute top-0 transform -translate-x-1/2 left-full -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4"
            width="404" height="784" fill="none" viewBox="0 0 404 784">
            <defs>
                <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20"
                    patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
        </svg>
        <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="lg:col-span-1">
                <span class="text-3xl">💼</span>
                <h1 class="text-base font-semibold leading-6 tracking-wide text-teal-600 uppercase">Professional</h1>
                <h3 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Skills
                </h3>
            </div>
            <div class="mt-10 sm:grid sm:grid-cols-2 sm:gap-x-8 sm:gap-y-10 lg:col-span-2 lg:mt-0">
                <div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-pink-400 to-pink-600">
                        <!-- Heroicon name: globe-alt -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Design</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            UI/UX, Figma, Sketch, Adobe XD, Photoshop.
                        </p>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-orange-400 to-orange-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Development</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            Git, Agile, SCRUM, MVP, OOP, TDD, DDD, database design, CI, Zero-downtime deployment.
                        </p>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-purple-500 to-purple-700">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Communication</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            Public speaking, copywriting, teaching, customer support.
                        </p>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-md shadow bg-gradient-to-br from-indigo-600 to-indigo-900">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h4 class="text-lg font-medium leading-6 text-gray-900">Leadership</h4>
                        <p class="mt-2 text-base leading-6 text-gray-500">
                            Senior developer, product manager.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="relative overflow-hidden bg-white">
    <svg class="absolute top-0 right-0 hidden transform translate-y-0 translate-x-1/4 lg:block" width="404" height="784"
        fill="none" viewBox="0 0 404 784">
        <defs>
            <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
        </defs>
        <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
    </svg>
    <svg class="absolute bottom-0 left-0 hidden transform -translate-x-1/4 lg:block" width="404" height="784"
        fill="none" viewBox="0 0 404 784">
        <defs>
            <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
        </defs>
        <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
    </svg>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <span class="text-3xl">🛠️</span>
            <h1 class="text-base font-semibold leading-6 tracking-wide text-teal-600 uppercase">Work</h1>
            <p
                class="mt-1 text-4xl font-extrabold leading-10 text-gray-900 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                Projects</p>
            <p class="max-w-xl mx-auto mt-5 text-xl leading-7 text-gray-500">These are some of the bigger web
                applications I've built and maintained over the years. I personally did all the design and development
                for each of these projects.</p>
        </div>`
    </div>
    <div class="relative max-w-screen-xl px-4 pb-16 mx-auto sm:px-6 lg:px-8">
        <div
            class="overflow-hidden rounded-lg shadow-xl bg-gradient-to-r from-blue-700 to-blue-900 lg:grid lg:grid-cols-2 lg:gap-4">
            <div class="px-6 pt-10 pb-12 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                <div class="lg:self-center">
                    <h2 class="text-3xl font-extrabold leading-9 text-white sm:text-4xl sm:leading-10">
                        <span class="block">Missions.Me</span>
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-blue-200">Missions.Me is a CRM that also features crowdfunding
                        with customizable fundraising pages, volunteer registration and management, event management,
                        and document management.</p>
                    <h4 class="mt-4 text-sm font-bold leading-3 text-blue-200">Tech Stack</h4>
                    <p class="mt-2 text-sm leading-3 text-blue-200">
                        Laravel, Vue.js, Bootstrap, MySQL, Redis
                    </p>
                </div>
            </div>
            <div class="relative -mt-6 pb-3/5 md:pb-1/2">
                <img class="absolute inset-0 object-cover object-left-top w-full h-full transform translate-x-6 translate-y-6 rounded-md sm:translate-x-16 lg:translate-y-20"
                    src="assets/images/missionsme.png" alt="App screenshot">
            </div>
        </div>
    </div>
    <div class="relative max-w-screen-xl px-4 pb-16 mx-auto sm:px-6 lg:px-8">
        <div
            class="overflow-hidden rounded-lg shadow-xl bg-gradient-to-r from-teal-700 to-teal-900 lg:grid lg:grid-cols-2 lg:gap-4">
            <div class="px-6 pt-10 pb-12 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                <div class="lg:self-center">
                    <h2 class="text-3xl font-extrabold leading-9 text-white sm:text-4xl sm:leading-10">
                        <span class="block">Angel House</span>
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-teal-200">Angel House is a donor management and crowdfunding
                        platform for building orphanages in India.</p>
                    <h4 class="mt-4 text-sm font-bold leading-3 text-teal-200">Tech Stack</h4>
                    <p class="mt-2 text-sm leading-3 text-teal-200">
                        Laravel, Vue.js, TailwindCSS, MySQL, Redis
                    </p>
                </div>
            </div>
            <div class="relative -mt-6 pb-3/5 md:pb-1/2">
                <img class="absolute inset-0 object-cover object-left-top w-full h-full transform translate-x-6 translate-y-6 rounded-md sm:translate-x-16 lg:translate-y-20"
                    src="assets/images/angelhouse.png" alt="App screenshot">
            </div>
        </div>
    </div>
    <div class="relative max-w-screen-xl px-4 pb-24 mx-auto sm:px-6 lg:px-8">
        <div
            class="overflow-hidden rounded-lg shadow-xl bg-gradient-to-r from-gray-800 to-gray-900 lg:grid lg:grid-cols-2 lg:gap-4">
            <div class="px-6 pt-10 pb-12 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                <div class="lg:self-center">
                    <h2 class="text-3xl font-extrabold leading-9 text-white sm:text-4xl sm:leading-10">
                        <span class="block">Independent Learning Academy</span>
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-gray-200">ILA is a student information system (SIS) used by
                        ILA staff, teachers, and parents. It has a shopping cart like registration system to accept
                        payment for class fees. It also integrates with a third-party learning management system (LMS).
                    </p>
                    <h4 class="mt-4 text-sm font-bold leading-3 text-gray-200">Tech Stack</h4>
                    <p class="mt-2 text-sm leading-3 text-gray-200">
                        Laravel, Livewire, TailwindCSS, MySQL, Redis
                    </p>
                </div>
            </div>
            <div class="relative -mt-6 pb-3/5 md:pb-1/2">
                <img class="absolute inset-0 object-cover object-left-top w-full h-full transform translate-x-6 translate-y-6 rounded-md sm:translate-x-16 lg:translate-y-20"
                    src="assets/images/ila.png" alt="App screenshot">
            </div>
        </div>
    </div>
</div>
<div class="bg-gradient-to-r from-gray-100 via-gray-50 to-gray-100">
    <div class="max-w-2xl px-4 py-16 mx-auto text-center sm:py-20 sm:px-6 lg:px-8">
        <span class="text-3xl">🤝</span>
        <div class="text-base font-semibold leading-6 tracking-wide text-teal-600 uppercase">Got a Project?</div>
        <h2 class="text-3xl font-extrabold leading-9 text-gray-900 sm:text-4xl sm:leading-10">
            <span class="block">Let's work together!</span>
        </h2>
        <a href="mailto:nkeena1@gmail.com"
            class="inline-flex items-center justify-center w-full px-5 py-3 mt-8 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent border-gray-900 rounded-md shadow bg-gradient-to-b from-gray-800 to-gray-900 hover:from-teal-600 hover:to-teal-700 hover:border-teal-700 sm:w-auto">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
            Contact me
        </a>
    </div>
</div>
<footer class="bg-white">
    <div
        class="max-w-screen-xl px-4 pt-6 pb-12 mx-auto bg-white bg-opacity-25 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <a href="https://twitter.com/neilkeena" target="_blank" rel="noopener"
                class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>
            <a href="https://github.com/nkeena/" target="_blank" rel="noopener"
                class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
            <p class="text-base leading-6 text-center text-gray-400">
                &copy; {{ date('Y') }} Neil Keena. All rights reserved.
            </p>
        </div>
    </div>
</footer>
@endsection

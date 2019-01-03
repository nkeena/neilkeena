@extends('_layouts.master')

@section('body')

<section class="bg-code">

    <div class="text-white bg-gradient-indigo">
        
        <div class="container mx-auto py-24 px-5 tracking-wide">
            
            <div class="flex items-center">
                
                <div class="md:w-2/3 w-full md:text-left text-center flex flex-col md:items-start items-center">

                    <div class="border-4 border-indigo-20 text-indigo-20 rounded-full text-5xl inline-block p-5 w-24 h-24 font-black flex justify-center items-center mb-4">N</div>

                    <h1 class="md:text-5xl text-3xl font-bold mb-6 leading-tight">Hello, I'm <span class="text-yellow-50">Neil Keena</span>. <br />I'm a full-stack web developer.</h1>
                    
                    <p class="md:text-3xl text-2xl mb-6 text-indigo-10">Interested in working together? Let's talk.</p>
                    
                    <p class="mb-6 text-indigo-10 max-w-md">I've had the opportunity to build applications for <span class="text-yellow-50 font-bold">business</span>, <span class="text-yellow-50 font-bold">non-profit</span>, <span class="text-yellow-50 font-bold">government</span>, and <span class="text-yellow-50 font-bold">education</span>; giving me <span class="text-yellow-50 font-bold">10+</span> years of professional experience.</p>
                    
                    {{-- <a href="#" class="rounded inline-block py-4 px-8 text-indigo-10 border-2 border-indigo-10 font-bold uppercase no-underline tracking-wide mr-4 hover:bg-white hover:border-white hover:text-indigo-100">View Sample Work</a> --}}

                    <a href="https://calendly.com/neilkeena" target="_blank" class="rounded inline-block py-4 px-8 bg-yellow-30 text-yellow-80 font-bold uppercase no-underline tracking-wide border-2 border-yellow-30 hover:bg-yellow-20 hover:border-yellow-20">Schedule a Meeting</a>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-12 px-5 bg-grey-20">
    
    <div class="container mx-auto">
        
        <div class="text-center">
            
            <h2 class="text-4xl font-black mb-4 text-grey-100 text-center">How I can Help</h2>
            
            <svg width="100" height="5" class="mb-12">
              <rect width="100" height="5" style="fill:hsl(227, 50%, 59%)" />
            </svg>

        </div>
        
        <div class="flex flex-wrap -mx-4">

            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-code heroicon heroicon-lg">
                    <path class="heroicon-code-interface heroicon-component-fill" d="M0 18h100v59.997c0 2.21-1.8 4.003-3.997 4.003H3.997C1.79 82 0 80.205 0 77.997V18z"></path>
                    <path class="heroicon-code-side heroicon-component-fill" d="M1 17h7v64H4.01C2.346 81 1 79.663 1 78V17z"></path>
                    <path class="heroicon-code-menu-bar heroicon-component-accent heroicon-component-fill" d="M0 5.996C0 3.79 1.8 2 3.997 2h92.006C98.21 2 100 3.79 100 5.996V18H0V5.996z"></path>
                    <circle class="heroicon-code-circle heroicon-component-accent heroicon-component-fill" cx="82" cy="81" r="18"></circle>
                    <path class="heroicon-code-symbol heroicon-component-fill" d="M76.707 80.293L76 81l.707.707 3.586 3.586L81 86l-.707.707-1.586 1.586L78 89l-.707-.707-6.586-6.586L70 81l.707-.707 6.586-6.586L78 73l.707.707 1.586 1.586L81 76l-.707.707-3.586 3.586zm7-3.586L83 76l.707-.707 1.586-1.586L86 73l.707.707 6.586 6.586L94 81l-.707.707-6.586 6.586L86 89l-.707-.707-1.586-1.586L83 86l.707-.707 3.586-3.586L88 81l-.707-.707-3.586-3.586z"></path>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M3.997 2h92.006C98.21 2 100 3.783 100 5.995v72.01c0 .328-.04.647-.115.952.076.67.115 1.352.115 2.043 0 9.94-8.06 18-18 18-9.606 0-17.454-7.524-17.973-17H3.997C1.79 82 0 80.217 0 78.005V5.995C0 3.788 1.8 2 3.997 2zM82 63c6.966 0 13.007 3.957 16 9.746V18H9v62h55.027c.52-9.476 8.367-17 17.973-17zm16-51V5.995C98 4.89 97.108 4 96.003 4H3.997C2.9 4 2 4.897 2 5.995V12h16l6-6h18l6 6h50zM2 14v2h96v-2H47.172l-6-6H24.828l-6 6H2zm0 4v60.005C2 79.11 2.892 80 3.997 80H7V18H2zm80 79c8.837 0 16-7.163 16-16s-7.163-16-16-16-16 7.163-16 16 7.163 16 16 16zM11 20h4v1h-4v-1zm14 0v1h-8v-1h8zm2 0h6v1h-6v-1zm20 0v1H35v-1h12zm-26 3v1H11v-1h10zm8 0v1h-6v-1h6zm10 0v1h-8v-1h8zm14 1H41v-1h12v1zm2-1h6v1h-6v-1zm-34 4h-8v-1h8v1zm2-1h6v1h-6v-1zm18 0v1H31v-1h10zm2 0h6v1h-6v-1zm16 1h-8v-1h8v1zm-40 2v1h-4v-1h4zm10 1h-8v-1h8v1zm2-1h10v1H31v-1zm24 1H43v-1h12v1zm10-1v1h-8v-1h8zm10 0v1h-8v-1h8zM25 56v1h-8v-1h8zm-4 4h-4v-1h4v1zm10-1v1h-8v-1h8zm12 0v1H33v-1h10zm2 0h10v1H45v-1zm-18-3h10v1H27v-1zm20 0v1h-8v-1h8zm8 0v1h-6v-1h6zm2 0h10v1H57v-1zm18 0v1h-6v-1h6zm2 0h10v1H77v-1zm19 0v1h-7v-1h7zM21 32v1h-6v-1h6zm12 0v1H23v-1h10zm-16 3h7v1h-7v-1zm5 18v1h-7v-1h7zm-7 9h9v1h-9v-1zm5 3v1h-5v-1h5zm-3 3h7v1h-7v-1zm16 0v1h-7v-1h7zm12 0v1H35v-1h10zm8 0v1h-6v-1h6zm-32 3v1h-6v-1h6zm-8 3h6v1h-6v-1zm4 3v1h-6v-1h6zm10 1h-8v-1h8v1zm10-1v1h-8v-1h8zm-9-11h-6v-1h6v1zm2-1h8v1h-8v-1zm0-27v1H19v-1h11zm2 0h8v1h-8v-1zm-7 3v1h-8v-1h8zm-10 3h6v1h-6v-1zm8 6v1h-8v-1h8zm6 0v1h-4v-1h4zm0-6v1h-6v-1h6zm-12 3h10v1H17v-1zm18 0v1h-6v-1h6zm2 0h4v1h-4v-1zm8-15v1H35v-1h10zM6 10c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm7-2c0 1.105-.895 2-2 2s-2-.895-2-2 .895-2 2-2 2 .895 2 2zm3 2c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zM4 20h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm-1 3h1v1H4v-1zm1 3v1H4v-1h1zm63 4c0-7.732 6.268-14 14-14v1c-7.18 0-13 5.82-13 13 0 1.652.308 3.232.87 4.686l-.908.425C68.342 84.53 68 82.805 68 81zm8.707-.707L76 81l.707.707 3.586 3.586L81 86l-.707.707-1.586 1.586L78 89l-.707-.707-6.586-6.586L70 81l.707-.707 6.586-6.586L78 73l.707.707 1.586 1.586L81 76l-.707.707-3.586 3.586zM79.587 86l-4.294-4.293-.707-.707.707-.707L79.586 76 78 74.414 71.414 81 78 87.586 79.586 86zm4.12-9.293L83 76l.707-.707 1.586-1.586L86 73l.707.707 6.586 6.586L94 81l-.707.707-6.586 6.586L86 89l-.707-.707-1.586-1.586L83 86l.707-.707 3.586-3.586L88 81l-.707-.707-3.586-3.586zm5 5L84.414 86 86 87.586 92.586 81 86 74.414 84.414 76l4.293 4.293.707.707-.707.707z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Code</h3>
                
                <p class="text-grey-80">I'm an expert in PHP, JavaScript, HTML, and CSS. My favorite frameworks include <a href="https://laravel.com" target="_blank" class="text-link">Laravel</a>, <a href="https://vuejs.org" target="_blank" class="text-link">Vue.js</a>, and <a href="https://tailwindcss.com" target="_blank" class="text-link">Tailwind CSS</a>.</p>

            </div>

            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-api heroicon heroicons-lg">
                    <polygon class="heroicon-api-block-sides heroicon-component-fill" points="50 0 25 13 25 43.52 1 56 1 87 26 100 50 87.52 74 100 99 87 99 86 99 57 99 56 75 43.52 75 13"></polygon>
                    <polygon class="heroicon-api-block-top-bottom-right heroicon-component-accent heroicon-component-fill" points="74 45.254 94.665 56 74 66.746 53.335 56"></polygon>
                    <polygon class="heroicon-api-block-top-bottom-left heroicon-component-accent heroicon-component-fill" points="46.665 56 26 45.254 5.335 56 26 66.746"></polygon>
                    <polygon class="heroicon-api-block-top-top heroicon-component-accent heroicon-component-fill" points="70.665 13 50 2.254 29.335 13 50 23.746"></polygon>
                    <path class="heroicon-shadows" d="M97 57.21V85.8L75 97.23V68.48l21.83-11.35.17.08zM49 85.8L27 97.23V68.48l21.83-11.35.17.08V85.8zm24-42.27L51 54.96V25.48l21.83-11.35.17.08v29.31z"></path>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M50 0l25 13v30.52L99 56v31l-25 13-24-12.48L26 100 1 87V56l24-12.48V13L50 0zm47 57.21l-.17-.08L75 68.48v28.75l22-11.44V57.2zm-45.83-.08l-.17.08V85.8l22 11.44V68.48L51.17 57.13zM74 45.25L53.34 56 74 66.75 94.66 56 74 45.25zM49 85.8V57.2l-.17-.08L27 68.48v28.75l22-11.44zM25 97.23V68.48L3.17 57.13 3 57.2V85.8l22 11.44zm48-53.71v-29.3l-.17-.1L51 25.49v29.48l22-11.44zM49 25.48L27.17 14.13l-.17.08v29.31l22 11.44V25.48zM46.66 56L26 45.25 5.34 56 26 66.75 46.66 56zm24-43L50 2.25 29.34 13 50 23.75 70.66 13zm-5.58 41.76L64 54.2 74 49l5 2.6-1.08.56L74 50.13l-8.92 4.63zM26 50.13l-8.92 4.63L16 54.2 26 49l5 2.6-1.08.56L26 50.13zm15.08-38.37L40 11.2 50 6l5 2.6-1.08.56L50 7.13l-8.92 4.63z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">APIs</h3>

                <p class="text-grey-80">Whether it's a web backend to a mobile app or connecting with third-party services; I have years of experience building and working with APIs.</p>

            </div>

            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-swatch heroicon heroicons-lg">
                    <path class="heroicon-swatch-background heroicon-component-fill" d="M4 0a4 4 0 0 0-4 4v85a4 4 0 0 0 4 4h3v3a4 4 0 0 0 4 4h85a4 4 0 0 0 4-4V74a4 4 0 0 0-4-4H70.98l21.67-12.51a4 4 0 0 0 1.46-5.46l-11-19.06a4 4 0 0 0-5.46-1.46l-21.67 12.5L68.5 22.36a4 4 0 0 0-1.46-5.46l-19.06-11a4 4 0 0 0-5.46 1.46L30 29.02V4a4 4 0 0 0-4-4H4z"></path>
                    <polygon class="heroicon-swatch-color-1-1 heroicon-component-accent heroicon-component-fill" points="2 19 2 7 28 7 28 19"></polygon>
                    <polygon class="heroicon-swatch-color-1-2 heroicon-component-accent heroicon-component-fill" points="2 25 2 37 28 37 28 25"></polygon>
                    <polygon class="heroicon-swatch-color-1-3 heroicon-component-accent heroicon-component-fill" points="2 55 2 43 28 43 28 55"></polygon>
                    <polygon class="heroicon-swatch-color-1-4 heroicon-component-accent heroicon-component-fill" points="2 61 2 73 28 73 28 61"></polygon>
                    <polygon class="heroicon-swatch-color-2-1 heroicon-component-accent heroicon-component-fill" points="42.742 10.95 36.742 21.342 59.258 34.342 65.258 23.95"></polygon>
                    <polygon class="heroicon-swatch-color-2-2 heroicon-component-accent heroicon-component-fill" points="30 33.019 30 38.235 50.258 49.931 56.258 39.538 33.742 26.538"></polygon>
                    <polygon class="heroicon-swatch-color-2-3 heroicon-component-accent heroicon-component-fill" points="30 45.163 30 59.019 41.258 65.519 47.258 55.127"></polygon>
                    <polygon class="heroicon-swatch-color-2-4 heroicon-component-accent heroicon-component-fill" points="30 65.947 30 79.804 32.258 81.108 38.258 70.715"></polygon>
                    <polygon class="heroicon-swatch-color-3-1 heroicon-component-accent heroicon-component-fill" points="76.05 34.742 89.05 57.258 78.658 63.258 65.658 40.742"></polygon>
                    <polygon class="heroicon-swatch-color-3-2 heroicon-component-accent heroicon-component-fill" points="51.373 52 53.981 47.483 60.462 43.742 73.462 66.258 63.069 72.258"></polygon>
                    <polygon class="heroicon-swatch-color-3-3 heroicon-component-accent heroicon-component-fill" points="40.981 70 47.909 58 57.873 75.258 47.481 81.258"></polygon>
                    <polygon class="heroicon-swatch-color-3-4 heroicon-component-accent heroicon-component-fill" points="30.588 88 37.517 76 42.285 84.258 31.892 90.258"></polygon>
                    <polygon class="heroicon-swatch-color-4-1 heroicon-component-accent heroicon-component-fill" points="93 98 93 72 81 72 81 98"></polygon>
                    <polygon class="heroicon-swatch-color-4-2 heroicon-component-accent heroicon-component-fill" points="63 74.608 63 98 75 98 75 72 67.517 72"></polygon>
                    <polygon class="heroicon-swatch-color-4-3 heroicon-component-accent heroicon-component-fill" points="45 85 45 98 57 98 57 78.072"></polygon>
                    <polygon class="heroicon-swatch-color-4-4 heroicon-component-accent heroicon-component-fill" points="27 95.392 27 98 39 98 39 88.464"></polygon>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M4 0h22a4 4 0 0 1 4 4v25.02L42.51 7.35a4 4 0 0 1 5.46-1.46l19.06 11a4 4 0 0 1 1.46 5.46l-12.5 21.67L77.64 31.5a4 4 0 0 1 5.46 1.46l11 19.06a4 4 0 0 1-1.46 5.46L70.98 70H96a4 4 0 0 1 4 4v22a4 4 0 0 1-4 4H11a4 4 0 0 1-4-4v-3H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4zm26 33.02v5.21l20.26 11.7 6-10.4-22.52-13L30 33.03zm0 6.37v1.15l5.4 3.12-.5.87L30 41.7V44l17.76 10.26 2-3.46L30 39.39zm0 5.77v13.86l11.26 6.5 6-10.4L30 45.17zm0 15.01v4.62l8.76 5.06 2-3.46L30 60.17zm0 5.78V79.8l2.26 1.3 6-10.38L30 65.95zm0 15v4.07l1.76-3.05L30 80.96zM30 89a4 4 0 0 1-1.98 3.46l-.04.06 3.05-1.76L30 89l-.01.02V89zm-4.6 4h-8.54l4.67 2.7a2 2 0 0 0 2.73-.74L25.39 93zm-12.54 0h-.17l2.61 4.53a2 2 0 0 0 2.74.73L20 97.12 12.86 93zm-2.48 0H9v3c0 1.1.9 2 2 2h2.27l-2.89-5zM26 2H4a2 2 0 0 0-2 2v2h26V4a2 2 0 0 0-2-2zM2 19h26V7H2v12zm0 1v4h26v-4H2zm0 5v12h26V25H2zm26 13H2v4h26v-4zM2 55h26V43H2v12zm0 1v4h26v-4H2zm0 5v12h26V61H2zm26 13H2v15c0 1.1.9 2 2 2h22a2 2 0 0 0 2-2V74zm23.37-22l11.7 20.26 10.4-6-13-22.52-6.49 3.74-2.6 4.52zm-1.15 2l3.12 5.4-.87.5-2.83-4.9-1.15 2 10.25 17.76 3.46-2L50.8 53l-.58 1zm-9.24 16l6.5 11.26 10.4-6L47.9 58l-6.93 12zm2.17 13.76l3.46-2L40.41 71l-2.32 4 5.06 8.76zM30.6 88l1.3 2.26 10.4-6L37.51 76l-6.93 12zm-8.1 10H26v-2.03h-.02a4 4 0 0 1-3.44 2l-.06.03zM46.96 7.62a2 2 0 0 0-2.73.73l-1 1.73 22.52 13 1-1.73a2 2 0 0 0-.73-2.73l-19.06-11zm-4.23 3.33l-6 10.4 22.52 13 6-10.4-22.52-13zm16.02 24.26l-22.52-13-2 3.46 22.52 13 2-3.46zM27 95.39V98h12v-9.54L27 95.4zm13-7.5V98h4V85.58l-4 2.3zM45 85v13h12V78.07L45 85zm13-7.5V98h4V75.19l-1 .57V82h-1v-5.66l-2 1.15zm5-2.9V98h12V72h-7.48L63 74.6zm18.38-40.63a2 2 0 0 0-2.73-.73l-1.73 1 13 22.52 1.73-1a2 2 0 0 0 .73-2.73l-11-19.06zm-5.33.77l-10.4 6 13 22.52 10.4-6-13-22.52zm-11.26 6.5l-3.46 2 13 22.52 3.46-2-13-22.52zM98 74a2 2 0 0 0-2-2h-2v26h2a2 2 0 0 0 2-2V74zm-5 24V72H81v26h12zM76 72v26h4V72h-4zM3 21h9v1H3v-1zm9 18v1H3v-1h9zm0 18v1H3v-1h9zm0 18v1H3v-1h9zm3 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm2-3a2 2 0 1 0-4 0 2 2 0 0 0 4 0zm27.4-56.93l-.5.87-7.8-4.5.5-.87 7.8 4.5zM68.93 50.4l-.87.5-4.5-7.8.87-.5 4.5 7.8zM79 82h-1v-9h1v9z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Design</h3>

                <p class="text-grey-80">Everything from UI design, responsive layouts, UX, color and font selections; designing web applications is what I do best.</p>

            </div>

            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-database heroicon heroicons-lg">
                    <path class="heroicon-database-exterior heroicon-component-fill" d="M10 20v12a11.22 11.22 0 0 0 1.83 6A11.2 11.2 0 0 0 10 44v12c0 2.09.64 4.1 1.83 6A11.2 11.2 0 0 0 10 68v12c0 11.05 17.9 20 40 20s40-8.95 40-20V68c0-2.09-.64-4.1-1.83-6A11.2 11.2 0 0 0 90 56V44c0-2.09-.64-4.1-1.83-6A11.2 11.2 0 0 0 90 32V20C90 8.95 72.1 0 50 0S10 8.95 10 20z"></path>
                    <path class="heroicon-database-interior heroicon-component-accent heroicon-component-fill-" fill-rule="nonzero" d="M16 66.54C23.06 72.22 35.65 76 50 76c14.35 0 26.94-3.78 34-9.46V68c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46zm0-24C23.06 48.22 35.65 52 50 52c14.35 0 26.94-3.78 34-9.46V44c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46z"></path>
                    <path class="heroicon-shadows" fill-rule="nonzero" d="M83.96 44.57c.03-.19.04-.38.04-.57v-1.46C76.94 48.22 64.35 52 50 52c-14.35 0-26.94-3.78-34-9.46V44c0 .19.01.38.04.57C23.1 50.23 35.67 54 50 54c14.33 0 26.9-3.77 33.96-9.43zm0 24c.03-.19.04-.38.04-.57v-1.46C76.94 72.22 64.35 76 50 76c-14.35 0-26.94-3.78-34-9.46V68c0 .19.01.38.04.57C23.1 74.23 35.67 78 50 78c14.33 0 26.9-3.77 33.96-9.43z"></path>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M10 20C10 8.95 27.9 0 50 0s40 8.95 40 20v12c0 2.09-.64 4.1-1.83 6A11.2 11.2 0 0 1 90 44v12c0 2.09-.64 4.1-1.83 6A11.2 11.2 0 0 1 90 68v12c0 11.05-17.9 20-40 20s-40-8.95-40-20V68c0-2.09.64-4.1 1.83-6A11.2 11.2 0 0 1 10 56V44c0-2.09.64-4.1 1.83-6l.04.06A11.22 11.22 0 0 1 10 32V20zm2 0c0 9.64 17.03 18 38 18s38-8.36 38-18c0-4.36-3.58-8.84-10.61-12.35l-.74-.37C69.79 4.05 60.38 2 50 2 39.62 2 30.21 4.05 23.35 7.28l-.74.37C15.58 11.16 12 15.65 12 20zm0 4.24V32c0 4.36 3.58 8.84 10.61 12.35C29.62 47.88 39.17 50.01 50 50c10.83.01 20.38-2.12 27.39-5.65C84.42 40.84 88 36.35 88 32v-7.76C84.01 32.58 68.56 39 50 39s-34.01-6.42-38-14.76zm74.95 15.43c-.83 1-1.82 1.96-2.95 2.87V44c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46a20.81 20.81 0 0 1-2.88-2.78A8.96 8.96 0 0 0 12 44c0 4.55 3.88 9.05 10.84 12.47C29.78 59.88 39.3 62 50 62c10.7 0 20.22-2.12 27.16-5.53C84.12 53.05 88 48.56 88 44c0-1.41-.38-2.84-1.12-4.24l.07-.09zM17 43.31V44c0 1.28.72 2.74 2.33 4.27 1.62 1.56 3.94 3 6.93 4.3C32.29 55.22 40.59 57.02 50 57c9.41 0 17.71-1.79 23.74-4.42 3-1.3 5.31-2.75 6.93-4.3 1.6-1.54 2.33-3 2.33-4.28v-.7l.03-.02C75.83 48.55 63.73 52 50 52c-13.7 0-25.8-3.44-33-8.7zM12 68c0 4.56 3.88 9.05 10.84 12.47C29.78 83.88 39.3 86 50 86c10.7 0 20.22-2.12 27.16-5.53C84.12 77.05 88 72.56 88 68c0-1.41-.38-2.84-1.12-4.24-.82.97-1.78 1.9-2.88 2.78V68c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46a20.7 20.7 0 0 1-2.88-2.78A8.96 8.96 0 0 0 12 68zm5 0c0 1.28.72 2.74 2.33 4.27 1.62 1.56 3.94 3 6.93 4.3C32.29 79.22 40.59 81.02 50 81c9.41 0 17.71-1.79 23.74-4.42 3-1.3 5.31-2.75 6.93-4.3 1.6-1.54 2.33-3 2.33-4.28v-.7C75.8 72.57 63.7 76 50 76c-13.71 0-25.82-3.45-33.02-8.71l.02.02V68zm-5-19.76V56c0 4.36 3.58 8.84 10.61 12.35C29.62 71.88 39.17 74.01 50 74c10.83.01 20.38-2.12 27.39-5.65C84.42 64.84 88 60.35 88 56v-7.76C84.01 56.58 68.56 63 50 63s-34.01-6.42-38-14.76zm0 24V80c0 4.36 3.58 8.84 10.61 12.35C29.62 95.88 39.17 98.01 50 98c10.83.01 20.38-2.12 27.39-5.65C84.42 88.84 88 84.35 88 80v-7.76C84.01 80.58 68.56 87 50 87s-34.01-6.42-38-14.76zM16 20h1c0 6.29 15.4 13 33 13s33-6.71 33-13h1c0 6.65-14.96 14-34 14s-34-7.35-34-14z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Database</h3>

                <p class="text-grey-80">I work primarily with relational databases in <a href="https://www.mysql.com/" target="_blank" class="text-link">MySQL</a>. I also have experience working with Redis servers, <a href="https://memcached.org/" target="_blank" class="text-link">Memcached</a> and file based caching.</p>

            </div>

             <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-documentation heroicon heroicons-lg">
                    <polygon class="heroicon-documentation-book-cover heroicon-component-accent heroicon-component-fill" points="7 82 7 32 1 32 1 88 99 88 99 32 93 32 93 82 7 82"></polygon>
                    <polygon class="heroicon-documentation-book-pages heroicon-component-fill" points="38 24 7 24 7 82 93 82 93 24 62 24 62 33 50 39 38 33"></polygon>
                    <polygon class="heroicon-documentation-block-sides heroicon-component-fill" points="38 17 50 11 62 17 62 33 50 39 38 33"></polygon>
                    <polygon class="heroicon-documentation-block-top heroicon-component-accent heroicon-component-fill" points="50 20.764 42.472 17 50 13.236 57.528 17"></polygon>
                    <path class="heroicon-shadows" d="M51.08 80h-2.16A6 6 0 0 0 43 75H8v5H6v5H0v3h99v-3h-5v-5h-2v-5H57a6 6 0 0 0-5.92 5zM51 36.26V22.5l8.76-4.38.24.12v13.52l-9 4.5z"></path>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M40.24 15.88L50 11l9.76 4.88L62 17v6h32v8h6v58H56l-.3.3c-.38.38-1.16.7-1.7.7h-8c-.55 0-1.32-.32-1.7-.7L44 89H0V31h6v-8h32v-6l2.24-1.12zM49 36.26V22.5l-8.76-4.38-.24.12v13.52l9 4.5zm2 0l9-4.5V18.24l-.24-.12L51 22.5v13.76zm-1-15.5L57.53 17 50 13.24 42.47 17 50 20.76zM49 38.5L38 33H14v-1h24v-7H8v48h35a7.98 7.98 0 0 1 6 2.71V38.5zM62 25v7h24v1H62l-11 5.5v37.2a7.98 7.98 0 0 1 6-2.7h35V25H62zM6 33H2v52h42v-2H6V33zm37 42H8v2h32v1H8v1h35v1H8v1h41a6 6 0 0 0-6-6zm51 1v7H56v2h42V33h-4v43zm-37-1a6 6 0 0 0-6 6h41v-1H70v-1h22v-2H60v-1h32v-1H57zm-12 8v2.59c.2.2.71.41 1 .41h8c.28 0 .8-.21 1-.41V83H45zm-1 3H2v1h42v-1zm1 1.17l.7.71.3.12h8c.02 0 .28-.1.3-.12l.7-.7v-.42c-.33.15-.7.24-1 .24h-8c-.3 0-.67-.1-1-.24v.41zM98 87v-1H56v1h42zM38 35v1H14v-1h24zm-24 3h25v1H14v-1zm12 3v1H14v-1h12zm-10 3h22v1H16v-1zm24 3v1H14v-1h26zm-2 3v1H14v-1h24zm-4 3v1H14v-1h20zm-18 3h24v1H16v-1zm23 3v1H14v-1h25zm-25 3h26v1H14v-1zm26 3v1H14v-1h26zm20-30h24v1H60v-1zm25 3v1H60v-1h25zm-25 3h12v1H60v-1zm24 3v1H62v-1h22zm-24 3h26v1H60v-1zm24 4H60v-1h24v1zm-24 2h20v1H60v-1zm26 3v1H62v-1h24zm-26 3h25v1H60v-1zm26 3v1H60v-1h26zm-26 3h26v1H60v-1z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Documentation</h3>

                <p class="text-grey-80">Besides writing well documented code, I've also written online documentation for both developers and users - complete with screencasts.</p>

            </div>

            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-server heroicon heroicons-lg">
                    <path class="heroicon-server-housing heroicon-component-fill" d="M14 94v-2h-1.01A3 3 0 0 1 10 89V3a3 3 0 0 1 2.99-3h74.02A3 3 0 0 1 90 3v86a3 3 0 0 1-2.99 3H86v2h4v6H10v-6h4z"></path>
                    <path class="heroicon-server-boxes heroicon-component-accent heroicon-component-fill" d="M15 4h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm0 20h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V25a1 1 0 0 1 1-1zm0 20h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V45a1 1 0 0 1 1-1zm0 20h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V65a1 1 0 0 1 1-1z"></path>
                    <path class="heroicon-server-controls heroicon-component-fill" d="M50 17a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM20 9h19v8H19V9h1zm39-2h3v12h-3V7zm5 0h2v12h-3V7h1zm3 0h3v12h-3V7zm5 0h2v12h-3V7h1zm3 0h3v12h-3V7zm6 5h2v3h-3v-3h1zm-1 4h3v3h-3v-3zM50 37a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm-30-8h19v8H19v-8h1zm39-2h3v12h-3V27zm5 0h2v12h-3V27h1zm3 0h3v12h-3V27zm5 0h2v12h-3V27h1zm3 0h3v12h-3V27zm6 5h2v3h-3v-3h1zm-1 4h3v3h-3v-3zM50 57a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm-30-8h19v8H19v-8h1zm39-2h3v12h-3V47zm5 0h2v12h-3V47h1zm3 0h3v12h-3V47zm5 0h2v12h-3V47h1zm3 0h3v12h-3V47zm6 5h2v3h-3v-3h1zm-1 4h3v3h-3v-3zM50 77a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm-30-8h19v8H19v-8h1zm39-2h3v12h-3V67zm5 0h2v12h-3V67h1zm3 0h3v12h-3V67zm5 0h2v12h-3V67h1zm3 0h3v12h-3V67zm6 5h2v3h-3v-3h1zm-1 4h3v3h-3v-3z"></path>
                    <rect class="heroicon-shadows" width="70" height="4" x="15" y="91"></rect>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M86 92v2h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H12a2 2 0 0 1-2-2v-2c0-1.1.9-2 2-2h2v-2h-1a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3h74a3 3 0 0 1 3 3v86a3 3 0 0 1-3 3h-1zm1-90H13a1 1 0 0 0-1 1v86a1 1 0 0 0 1 1h74a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM15 4h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm70 1H15v16h70V5zm-1 89v-2H16v2h68zm4 4v-2H12v2h76zM50 17a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm3-4a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM20 9h19v8H19V9h1zm18 1H20v6h18v-6zm21-3h3v12h-3V7zm1 1v10h1V8h-1zm4-1h2v12h-3V7h1zm1 1h-1v10h1V8zm2-1h3v12h-3V7zm1 1v10h1V8h-1zm4-1h2v12h-3V7h1zm1 1h-1v10h1V8zm2-1h3v12h-3V7zm1 1v10h1V8h-1zm5 4h2v3h-3v-3h1zm1 1h-1v1h1v-1zm-2 3h3v3h-3v-3zm1 1v1h1v-1h-1zm-66 7h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V25a1 1 0 0 1 1-1zm0 1v16h70V25H15zm35 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm3-4a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-33-4h19v8H19v-8h1zm18 1H20v6h18v-6zm21-3h3v12h-3V27zm1 1v10h1V28h-1zm4-1h2v12h-3V27h1zm1 1h-1v10h1V28zm2-1h3v12h-3V27zm1 1v10h1V28h-1zm4-1h2v12h-3V27h1zm1 1h-1v10h1V28zm2-1h3v12h-3V27zm1 1v10h1V28h-1zm5 4h2v3h-3v-3h1zm1 1h-1v1h1v-1zm-2 3h3v3h-3v-3zm1 1v1h1v-1h-1zm-66 7h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V45a1 1 0 0 1 1-1zm0 1v16h70V45H15zm35 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm3-4a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-33-4h19v8H19v-8h1zm18 1H20v6h18v-6zm21-3h3v12h-3V47zm1 1v10h1V48h-1zm4-1h2v12h-3V47h1zm1 1h-1v10h1V48zm2-1h3v12h-3V47zm1 1v10h1V48h-1zm4-1h2v12h-3V47h1zm1 1h-1v10h1V48zm2-1h3v12h-3V47zm1 1v10h1V48h-1zm5 4h2v3h-3v-3h1zm1 1h-1v1h1v-1zm-2 3h3v3h-3v-3zm1 1v1h1v-1h-1zm-66 7h70a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H15a1 1 0 0 1-1-1V65a1 1 0 0 1 1-1zm0 1v16h70V65H15zm35 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm3-4a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-33-4h19v8H19v-8h1zm18 1H20v6h18v-6zm21-3h3v12h-3V67zm1 1v10h1V68h-1zm4-1h2v12h-3V67h1zm1 1h-1v10h1V68zm2-1h3v12h-3V67zm1 1v10h1V68h-1zm4-1h2v12h-3V67h1zm1 1h-1v10h1V68zm2-1h3v12h-3V67zm1 1v10h1V68h-1zm5 4h2v3h-3v-3h1zm1 1h-1v1h1v-1zm-2 3h3v3h-3v-3zm1 1v1h1v-1h-1z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Servers</h3>

                <p class="text-grey-80">I'm proficient with managing hosting servers using Laravel's <a href="https://forge.laravel.com/" target="_blank" class="text-link">Forge</a> and can provide zero-down time deployment with <a href="https://envoyer.io" target="_blank" class="text-link">Envoyer</a>.</p>

            </div>
            
            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-cloud heroicon heroicons-lg">
                    <path class="heroicon-cloud-background heroicon-component-fill" d="M83 82H22a22 22 0 0 1-3.14-43.78 27.01 27.01 0 0 1 49.99-5.89 15 15 0 0 1 18.08 16.13A17 17 0 0 1 83 82z"></path>
                    <path class="heroicon-shadows" d="M.2 57A22 22 0 0 0 22 82h61a17 17 0 0 0 16.74-20A17 17 0 0 1 83 76H22A22 22 0 0 1 .2 57z"></path>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M83 82H22a22 22 0 0 1-3.14-43.78 27.01 27.01 0 0 1 49.99-5.89 15 15 0 0 1 18.08 16.13A17 17 0 0 1 83 82zm0-2a15 15 0 0 0 3.47-29.6l-1.7-.4.17-1.74a13 13 0 0 0-15.67-13.98l-1.48.32-.7-1.33a25 25 0 0 0-46.3 5.45l-.33 1.3-1.32.18A20 20 0 0 0 22 80h61z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Cloud</h3>

                <p class="text-grey-80">I've worked with <a href="https://www.digitalocean.com/" target="_blank" class="text-link">Digital Ocean</a>, <a href="https://aws.amazon.com/" target="_blank" class="text-link">AWS</a>, and a number of CDNs. I can monitor servers and track errors using services like <a href="https://www.bugsnag.com/" target="_blank" class="text-link">BugSnag</a>, <a href="https://sentry.io/" target="_blank" class="text-link">Sentry</a>, and <a href="https://blackfire.io/" target="_blank" class="text-link">Blackfire</a>.</p>

            </div>

            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-load-balancer heroicon heroicons-lg">
                    <rect class="heroicon-load-balancer-box-bottom heroicon-component-accent heroicon-component-fill" width="28" height="28" x="36" y="72"></rect>
                    <path class="heroicon-load-balancer-boxes-top heroicon-component-accent heroicon-component-fill" fill-rule="nonzero" d="M0 0h28v28H0V0zm36 0h28v28H36V0zm64 0H72v28h28V0z"></path>
                    <path class="heroicon-load-balancer-cords heroicon-component-fill" fill-rule="nonzero" d="M10 27a4 4 0 1 1 8 0v13a4 4 0 0 0 4 4h14c4.17 0 7.85 2.13 10 5.36V27a4 4 0 1 1 8 0v22.36A11.99 11.99 0 0 1 64 44h14a4 4 0 0 0 4-4V27a4 4 0 1 1 8 0v13a12 12 0 0 1-12 12H64a4 4 0 0 0-4 4v16H40V56a4 4 0 0 0-4-4H22a12 12 0 0 1-12-12V27z"></path>
                    <path class="heroicon-shadows" d="M18 27h9v-8H1v8h9a4 4 0 1 1 8 0zm36 0h9v-8H37v8h9a4 4 0 1 1 8 0zm36 0a4 4 0 1 0-8 0h-9v-8h26v8h-9zM37 93h26v6H37v-6z"></path>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M10 28H0V0h28v28H18v12a4 4 0 0 0 4 4h14c4.17 0 7.85 2.13 10 5.36V28H36V0h28v28H54v21.36A11.99 11.99 0 0 1 64 44h14a4 4 0 0 0 4-4V28H72V0h28v28H90v12a12 12 0 0 1-12 12H64a4 4 0 0 0-4 4v16h4v28H36V72h4V56a4 4 0 0 0-4-4H22a12 12 0 0 1-12-12V28zM26 2H2v17h24V2zm-1 18H2v6h8.13a4 4 0 0 1 7.74 0H26v-6h-1zm13 74v4h24v-4H38zm24-1V74H38v19h24zm-4-37a6 6 0 0 1 6-6h14a10 10 0 0 0 10-10V27a2 2 0 1 0-4 0v13a6 6 0 0 1-6 6H64a10 10 0 0 0-10 10v16h4V56zm-6 0V27a2 2 0 1 0-4 0v45h4V56zm-6 0a10 10 0 0 0-10-10H22a6 6 0 0 1-6-6V27a2 2 0 1 0-4 0v13a10 10 0 0 0 10 10h14a6 6 0 0 1 6 6v16h4V56zm43.87-30H98v-6H74v6h8.13a4 4 0 0 1 7.74 0zm-36 0H62v-6H38v6h8.13a4 4 0 0 1 7.74 0zM97 19h1V2H74v17h23zm-59 0h24V2H38v17z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Networks</h3>

                <p class="text-grey-80">I can configure load balancers, DNS, MX records, and <a href="https://letsencrypt.org/" target="_blank" class="text-link">SSL certificates</a>. I've implemented both vertical and horizonal scaling solutions to increase performance.</p>

            </div>
            
            <div class="lg:w-1/3 md:w-1/2 w-full px-4 mb-12 md:text-left text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 100 100" class="heroicon-cog heroicon heroicons-lg">
                    <path class="heroicon-cog-front-outer heroicon-component-fill" d="M39.17 26.08l.13-1.6.54-6.48h4.32l.54 6.49.13 1.6 1.59.21a31 31 0 0 1 3.61.72l1.53.4.74-1.4 3.05-5.8 3.98 1.68-2.03 6.14-.5 1.53 1.4.82c1.08.64 2.08 1.31 3.09 2.07l1.27.97 1.23-1.03 4.97-4.21 3.05 3.05-4.2 4.97-1.04 1.23.97 1.27c.75 1 1.41 1.98 2.04 3.06l.8 1.36 1.52-.47 6.26-1.94 1.62 4L74 47.65l-1.44.72.4 1.57c.32 1.2.55 2.39.73 3.65l.22 1.59 1.6.13 6.48.54v4.32l-6.49.54-1.6.13-.21 1.59a31 31 0 0 1-.72 3.61l-.4 1.53 1.4.74 5.8 3.05-1.68 3.98-6.14-2.03-1.53-.5-.82 1.4a31.2 31.2 0 0 1-2.07 3.09l-.97 1.27 1.03 1.23 4.21 4.97-3.05 3.05-4.97-4.2-1.23-1.04-1.27.97a31.2 31.2 0 0 1-3.06 2.04l-1.36.8.47 1.52 1.94 6.26-4 1.62L52.35 90l-.72-1.44-1.57.4c-1.2.32-2.39.55-3.65.73l-1.59.22-.13 1.6-.54 6.48h-4.32l-.54-6.49-.13-1.6-1.59-.21a31 31 0 0 1-3.61-.72l-1.53-.4-.74 1.4-3.05 5.8-3.98-1.68 2.03-6.14.5-1.53-1.4-.82a31.2 31.2 0 0 1-3.09-2.07l-1.27-.97-1.23 1.03-4.97 4.21-3.05-3.05 4.2-4.97 1.04-1.23-.97-1.27c-.76-1-1.43-2-2.07-3.1l-.82-1.39-1.53.5-6.14 2.03-1.69-3.98 5.8-3.05 1.4-.74-.4-1.53a31 31 0 0 1-.7-3.61l-.23-1.59-1.6-.13L2 60.16v-4.32l6.49-.54 1.6-.13.21-1.59a31 31 0 0 1 .72-3.61l.4-1.53-1.4-.74-5.8-3.05 1.68-3.98 6.14 2.03 1.53.5.82-1.4a31.2 31.2 0 0 1 2.07-3.09l.97-1.27-1.03-1.23-4.21-4.97 3.05-3.05 4.97 4.2 1.23 1.04 1.27-.97c1-.75 1.98-1.41 3.06-2.05l1.36-.8-.47-1.51-1.94-6.26 4-1.62L31.65 26l.72 1.44 1.57-.4c1.2-.32 2.39-.55 3.65-.73l1.59-.22zM42 72a14 14 0 1 0 0-28 14 14 0 0 0 0 28z"></path>
                    <path class="heroicon-cog-front-inner heroicon-component-fill" d="M42 72a14 14 0 1 1 0-28 14 14 0 0 1 0 28zm0-5a9 9 0 1 0 0-18 9 9 0 0 0 0 18z"></path>
                    <path class="heroicon-cog-back-outer heroicon-component-accent heroicon-component-fill" d="M76.87 9.03l-1.53-.38c-.7-.17-1.38-.3-2.11-.41L71.66 8l-.13-1.58L71.16 2h-2.32l-.37 4.42L68.34 8l-1.57.24c-.73.1-1.4.24-2.11.41l-1.53.38-.73-1.39-2.08-3.95-2.13.9 1.37 4.2.5 1.51-1.37.82c-.63.38-1.2.77-1.8 1.2l-1.27.95-1.21-1.02-3.39-2.87-1.64 1.64 2.87 3.39 1.02 1.21-.94 1.27c-.44.6-.83 1.17-1.2 1.8l-.83 1.37-1.52-.5-2.55-.84.25 3.07 1.16.61 1.4.73-.39 1.52c.64.13 1.26.27 1.88.43l3.9-7.43 7.2 3.06a12.5 12.5 0 0 1 17.7 17.6l3 7.37-7.42 3.74c.16.64.31 1.28.44 1.93l1.55-.4.72 1.43.58 1.14 3.04.25-.8-2.6-.47-1.49 1.34-.8c.64-.39 1.2-.77 1.8-1.2l1.27-.95 1.21 1.02 3.39 2.87 1.64-1.64-2.87-3.39-1.02-1.21.94-1.27c.44-.6.83-1.17 1.2-1.8l.83-1.37 1.52.5 4.18 1.37.9-2.13-3.94-2.08-1.4-.73.39-1.52c.17-.71.3-1.39.41-2.12l.24-1.57 1.58-.13 4.42-.37v-2.32l-4.42-.37-1.58-.13-.24-1.57c-.1-.74-.24-1.41-.42-2.12l-.38-1.55 1.42-.72 3.94-1.99-.87-2.15-4.27 1.33-1.5.46-.8-1.34a21.2 21.2 0 0 0-1.2-1.8l-.95-1.27 1.02-1.21 2.87-3.39-1.64-1.64-3.39 2.87-1.21 1.02-1.27-.94c-.6-.44-1.17-.83-1.8-1.2l-1.37-.83.5-1.52L81.8 4.6l-2.13-.9-2.08 3.94-.73 1.4z"></path>
                    <path class="heroicon-cog-back-inner heroicon-component-accent heroicon-component-fill" d="M59.2 28.67l2-6.08A11.5 11.5 0 1 1 77.29 38.9l-5.97 1.85c-.57-.96-1.18-1.89-1.84-2.78l.02.01.51.02a8 8 0 1 0-7.98-7.49l.13.1c-.95-.7-1.93-1.35-2.95-1.94z"></path>
                    <path class="heroicon-shadows" d="M55.86 56a16 16 0 0 0-27.72 0 14 14 0 0 1 27.72 0zm4.16-29.82l1.19-3.6a11.5 11.5 0 0 1 20.06 5.1 13.98 13.98 0 0 0-21.25-1.5z"></path>
                    <path class="heroicon-outline" fill-rule="nonzero" d="M49.4 17.66c.41-.67.85-1.33 1.32-1.96l-4.05-4.8 4.24-4.23 4.8 4.05c.62-.47 1.28-.9 1.95-1.31l-1.95-5.93 5.52-2.35 2.94 5.58c.76-.19 1.53-.34 2.3-.45L67 0h6l.52 6.26c.78.11 1.55.26 2.3.45l2.95-5.58 5.52 2.35-1.95 5.93c.67.4 1.33.84 1.96 1.31l4.8-4.05 4.23 4.24-4.05 4.8c.46.62.9 1.27 1.3 1.95l6.03-1.87 2.25 5.56-5.58 2.81c.2.76.35 1.53.46 2.32L100 27v6l-6.26.52c-.11.78-.26 1.55-.45 2.3l5.58 2.95-2.35 5.52-5.93-1.95c-.4.67-.84 1.33-1.31 1.96l4.05 4.8-4.24 4.23-4.8-4.05c-.62.46-1.27.9-1.95 1.3l1.05 3.37.61.05v1.92l.21.7-.21.08V62l-8.32.7c-.18 1.3-.44 2.58-.76 3.83l7.43 3.9-3.13 7.37-7.89-2.6a34.05 34.05 0 0 1-2.2 3.3l5.4 6.37-5.66 5.66-6.38-5.4a34.03 34.03 0 0 1-3.24 2.18l2.48 8.01-7.41 3-3.74-7.41c-1.27.33-2.57.59-3.89.77L46 100h-8l-.7-8.32c-1.3-.18-2.58-.44-3.83-.76l-3.9 7.43-7.37-3.13 2.6-7.89a34.05 34.05 0 0 1-3.3-2.2l-6.37 5.4-5.66-5.66 5.4-6.38a34.05 34.05 0 0 1-2.2-3.29l-7.89 2.6-3.13-7.36 7.43-3.91a33.83 33.83 0 0 1-.76-3.84L0 62v-8l8.32-.7c.18-1.3.44-2.58.76-3.83l-7.43-3.9 3.13-7.37 7.89 2.6c.67-1.14 1.4-2.24 2.2-3.3l-5.4-6.37 5.66-5.66 6.38 5.4a34.03 34.03 0 0 1 3.24-2.18l-2.48-8.01 7.41-3 3.74 7.41c1.27-.33 2.57-.59 3.89-.77L38 16h5.35l.13-.29.88.29H46l.05.56 3.36 1.1zm-10.23 8.42l-1.59.22c-1.26.18-2.44.41-3.65.73l-1.57.4-.72-1.44-2.91-5.77-4 1.62 1.93 6.26.47 1.51-1.36.8a31.2 31.2 0 0 0-3.06 2.05l-1.27.97-1.23-1.03-4.97-4.21-3.05 3.05 4.2 4.97 1.04 1.23-.97 1.27c-.76 1-1.43 2-2.07 3.1l-.82 1.39-1.53-.5-6.14-2.03-1.69 3.98 5.8 3.05 1.4.74-.4 1.53a31 31 0 0 0-.7 3.61l-.23 1.59-1.6.13-6.48.54v4.32l6.49.54 1.6.13.21 1.59a31 31 0 0 0 .72 3.61l.4 1.53-1.4.74-5.8 3.05 1.68 3.98 6.14-2.03 1.53-.5.82 1.4a31.2 31.2 0 0 0 2.07 3.09l.97 1.27-1.03 1.23-4.21 4.97 3.05 3.05 4.97-4.2 1.23-1.04 1.27.97c1 .76 2 1.43 3.1 2.07l1.39.82-.5 1.53-2.03 6.14 3.98 1.69 3.05-5.8.74-1.4 1.53.4a31 31 0 0 0 3.61.7l1.59.23.13 1.6.54 6.48h4.32l.54-6.49.13-1.6 1.59-.21c1.26-.18 2.44-.41 3.65-.73l1.57-.4.72 1.44 2.91 5.77 4-1.62-1.93-6.26-.47-1.51 1.36-.8a31.2 31.2 0 0 0 3.06-2.05l1.27-.97 1.23 1.03 4.97 4.21 3.05-3.05-4.2-4.97-1.04-1.23.97-1.27c.76-1 1.43-2 2.07-3.1l.82-1.39 1.53.5 6.14 2.03 1.69-3.98-5.8-3.05-1.4-.74.4-1.53a31 31 0 0 0 .7-3.61l.23-1.59 1.6-.13 6.48-.54v-4.32l-6.49-.54-1.6-.13-.21-1.59c-.18-1.26-.41-2.44-.73-3.65l-.4-1.57 1.44-.72 5.77-2.91-1.62-4-6.26 1.93-1.51.47-.8-1.36a31.2 31.2 0 0 0-2.05-3.06l-.97-1.27 1.03-1.23 4.21-4.97-3.05-3.05-4.97 4.2-1.23 1.04-1.27-.97c-1-.76-2-1.43-3.1-2.07l-1.39-.82.5-1.53 2.03-6.14-3.98-1.69-3.05 5.8-.74 1.4-1.53-.4a31 31 0 0 0-3.61-.7l-1.59-.23-.13-1.6-.54-6.48h-4.32l-.54 6.49-.13 1.6zM42 43.5a14.5 14.5 0 1 1 0 29 14.5 14.5 0 0 1 0-29zM28.5 58a13.5 13.5 0 1 0 27 0 13.5 13.5 0 0 0-27 0zM52 58a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zM76.87 9.03l-1.53-.38c-.7-.17-1.38-.3-2.11-.41L71.66 8l-.13-1.58L71.16 2h-2.32l-.37 4.42L68.34 8l-1.57.24c-.73.1-1.4.24-2.11.41l-1.53.38-.73-1.39-2.08-3.95-2.13.9 1.37 4.2.5 1.51-1.37.82c-.63.38-1.2.77-1.8 1.2l-1.27.95-1.21-1.02-3.39-2.87-1.64 1.64 2.87 3.39 1.02 1.21-.94 1.27c-.44.6-.83 1.17-1.2 1.8l-.83 1.37-1.52-.5-2.55-.84.25 3.07 1.16.61 1.4.73-.39 1.52c.64.13 1.26.27 1.88.43l3.9-7.43 7.2 3.06a12.5 12.5 0 0 1 17.7 17.6l3 7.37-7.42 3.74c.16.64.31 1.28.44 1.93l1.55-.4.72 1.43.58 1.14 3.04.25-.8-2.6-.47-1.49 1.34-.8c.64-.39 1.2-.77 1.8-1.2l1.27-.95 1.21 1.02 3.39 2.87 1.64-1.64-2.87-3.39-1.02-1.21.94-1.27c.44-.6.83-1.17 1.2-1.8l.83-1.37 1.52.5 4.18 1.37.9-2.13-3.94-2.08-1.4-.73.39-1.52c.17-.71.3-1.39.41-2.12l.24-1.57 1.58-.13 4.42-.37v-2.32l-4.42-.37-1.58-.13-.24-1.57c-.1-.74-.24-1.41-.42-2.12l-.38-1.55 1.42-.72 3.94-1.99-.87-2.15-4.27 1.33-1.5.46-.8-1.34a21.2 21.2 0 0 0-1.2-1.8l-.95-1.27 1.02-1.21 2.87-3.39-1.64-1.64-3.39 2.87-1.21 1.02-1.27-.94c-.6-.44-1.17-.83-1.8-1.2l-1.37-.83.5-1.52L81.8 4.6l-2.13-.9-2.08 3.94-.73 1.4zM46.69 24.27l.02-.1-.03-.02v.12zm12.51 4.4c1.02.6 2 1.24 2.95 1.94l-.13-.1a8 8 0 1 1 7.47 7.47l-.02-.01c.66.9 1.27 1.82 1.84 2.78l5.97-1.85A11.5 11.5 0 1 0 61.2 22.59l-2 6.08zM76 30a6 6 0 0 0-11.99-.42l4.86-4.1 5.66 5.65-4.11 4.86A6 6 0 0 0 76 30zm-.14 23.32l-.02-.04-.1.03.12.01z"></path>
                </svg>

                <h3 class="font-black mb-2 text-2xl text-indigo-80">Automation</h3>

                <p class="text-grey-80">Utilizing queued jobs with <a href="https://redis.io/" target="_blank" class="text-link">Redis</a>, Beanstalkd, or Amazon's <a href="https://aws.amazon.com/sqs/" target="_blank" class="text-link">SQS</a>, I can automate and schedule background tasks or send transactional emails.</p>

            </div>

        </div>

    </div>
</section>

<section class="bg-white bg-pie-factory py-12 px-5">
    <div class="container mx-auto flex flex-wrap">
        <div class="md:w-1/2 w-full text-center">
            <img src="/assets/images/neil-keena.jpg" 
                 class="rounded-full border-4 border-indigo-80 p-1 mb-4 max-w-xs"
            >
        </div>
        <div class="md:w-1/2 w-full text-grey-50">
            <h3 class="text-indigo-80 mb-4 text-3xl font-black">About Me</h3>
            <p class="mb-4">I built my first website at 16 years old using nothing more than a simple text editor. Since then, I've been building web applications of all shapes and sizes. I built and currently manage applications for two non-profit charities <a href="https://missions.me" target="_blank" class="text-link">missions.me</a> and <a href="https://angelhouse.me" target="_blank" class="text-link">angelhouse.me</a>. I've been the Senior Web Developer on staff at Missions.Me since 2014. I reside with my wife, Cathleen, in Orange County, California.</p>

            <p class="mb-4">When I'm not writting code, I enjoy hiking, biking, traveling abroad, reading, good coffee, and Star Wars.</p>

            <p>
                <a href="https://github.com/nkeena" target="_blank"><svg aria-hidden="true" data-prefix="fab" data-icon="github" class="h-8 w-8 mr-4 fill-current text-indigo-50 hover:text-indigo-80" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg></a>

                <a href="https://twitter.com/neilkeena" target="_blank"><svg aria-hidden="true" data-prefix="fab" data-icon="twitter" class="h-8 w-8 fill-current text-indigo-50 hover:text-indigo-80" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
            </p>
        </div>
    </div>
</section>

<footer class="bg-grey-100 p-5 text-white text-center text-xs">
    &copy; {{ date('Y') }} Neil Keena. All Rights Reserved. Built with &hearts; by Neil using <a href="https://jigsaw.tighten.co/" target="_blank" class="text-white">Jigsaw</a> and proudly hosted on <a href="https://www.netlify.com/" target="_blank" class="text-white">Netlify</a>.
</footer>

@endsection

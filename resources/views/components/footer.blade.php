<footer class="bg-gradient-to-r from-red-400 via-pink-400 to-violet-300">
    <div class="container mx-auto flex items-center justify-between px-4 py-4">
        <div class="flex items-center">

            <a aria-label="return to homepage" class="flex-none w-12 md:w-15" href="{{ route('home') }}" >
                <x-jet-application-mark></x-jet-application-mark>
                {{--                    <a href="/"><img src="" alt=""></a>--}}
            </a>
            <p class="flex md:ml-8 ml-4 font-bold">
                {{--                <li class="hover:text-blue-900"><a href="">--}}
                &copy;2021 Lotje Kinable
                {{--                    </a></li>--}}
            </p>
        </div>

        <div class="flex items-center">
            <div class="ml-4 md:ml-6 flex space-x-4  md:space-x-8 md:mr-8">
                <a aria-label="click to go to twitter" class="w-6 md:w-12" href="https://twitter.com/lotje_kinable" target="_blank">
                    <svg class="fill-current text-blue-500 hover:text-white"
                         viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M459.37 151.71c.32 4.54.32 9.09.32 13.64 0 138.72-105.59 298.558-298.558 298.558 -59.452 0-114.68-17.22-161.137-47.11 8.447.97 16.56 1.29 25.34 1.29 49.05 0 94.21-16.57 130.27-44.84 -46.14-.98-84.792-31.19-98.112-72.78 6.49.97 12.99 1.62 19.81 1.62 9.42 0 18.84-1.3 27.61-3.58 -48.09-9.75-84.143-51.98-84.143-102.99v-1.3C34.73 202 50.98 206.88 68.2 207.52 39.93 188.67 21.42 156.51 21.42 120.13c0-19.5 5.19-37.36 14.29-52.96 51.65 63.67 129.3 105.25 216.365 109.8 -1.63-7.8-2.6-15.92-2.6-24.04 0-57.828 46.78-104.94 104.934-104.94 30.21 0 57.5 12.67 76.67 33.137 23.71-4.55 46.45-13.32 66.59-25.34 -7.8 24.366-24.37 44.833-46.14 57.827 21.11-2.28 41.584-8.122 60.42-16.25 -14.3 20.79-32.161 39.3-52.63 54.253Z"/></svg>
                </a>
                <a aria-label="click to go to GitHub"  class="w-6 md:w-12" href="https://github.com/lotje-kinable" target="_blank">
                    <svg class="fill-current text-black hover:text-white"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                        <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                    </svg>
                </a>
                <a aria-label="click to go to LinkedIn"  class="w-6 md:w-12" href="https://www.linkedin.com/in/lotjekinable/" target="_blank">
                    <svg class="fill-current text-black hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</footer>

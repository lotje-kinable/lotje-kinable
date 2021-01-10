@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 py-6">
        <div class="grid text-sm md:text-lg md:grid-cols-4 place-items-center md:gap-1 gap-1 grid-cols-2 rounded-xl bg-pink-100 p-4 md:p-6 mb-6 md:mb-12">
            <div class="hover:text-pink-500"><a href="https://laravel.com" target="_blank"><span class="text-pink-500">#</span>laravel</a></div>
            <div class=""><span class="text-purple-500">#</span>developer</div>
            <div class=""><span class="text-blue-500">#</span>bachelor</div>
            <div class="hover:underline hover:text-blue-400">
                <a href="mailto:lkinable@gmail.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
            {{--            <div class="">🏳‍🌈--}}
            {{--                <span class="p-0 text-red-500">r</span>--}}
            {{--                <span class="text-orange-500">a</span>--}}
            {{--                <span class="text-yellow-200">i</span>--}}
            {{--                <span class="text-green-500">n</span>--}}
            {{--                <span class="text-blue-500">b</span>--}}
            {{--                <span class="text-indigo-500">o</span>--}}
            {{--                <span class="text-purple-500">w</span>--}}
            {{--            </div>--}}

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">

            <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">
                {{--                <h2 class="uppercase text-purple-600">--}}
                {{--                    About me--}}
                {{--                </h2>         --}}
                <div class="w-20 md:w-48 fill-current">
                    <img src="{{ asset('/images/Lotje.png') }}" alt="Avatar">
                </div>
            </div>

            <div class="mt-1 col-span-2">
                <p>Hi, </p>
                <p>
                    My name is Lotje Kinable. I'm {{ $diff = Carbon\Carbon::parse('1993-02-03')->diffInYears(Carbon\Carbon::now()) }}
                    years old and I live in Bruges, Belgium.
                </p>
                <p>I'm a junior developer and I have a passion for Laravel.</p>
                <p>Some of my hobbies are playing the piano, taking pictures and reading.</p>
                <p>I'm also a proud dog mom, which is why I'd love to work from home. </p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 rounded-xl bg-pink-100 p-4 md:p-6 mb-4 md:mb-12">
            <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">
                <h2 class="uppercase text-purple-600">
                    Interests
                </h2>
            </div>
            <div class="mt-1 col-span-2">
                <p>
                    I'm mostly interested in Laravel. We had a few classes about Content Management Systems like WordPress and our
                    teacher briefly mentioned Laravel. We could use Laravel for our demo portfolio and I did. It was really basic website,
                    with very little functionality but I really liked working with the framework.
                </p>
                <p> When the time came to do my second internship (the first one was in React and I didn't work out) I specifically searched for a Laravel internship.
                    I ended up in Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js. When I started there in
                    september 2019, LiveWire came out in alpha version and I ended up writing my thesis about Laravel and LiveWire.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">
            <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">
                <h2 class="uppercase text-purple-600">
                    Achievements
                </h2>

                {{--                <div class="mt-0 w-60 fill-current">--}}
                {{--                    <img class="" src="{{ asset('/img/plogger-icon.png') }}" alt="Avatar">--}}
                {{--                </div>--}}
            </div>
            <div class="mt-1 col-span-2">
                <p>
                    My team of 4 students and a coach "Team 4" won a prize in the City Hacks 2018 (Bruges) competition. We created a prototype app called
                    <a href="/img/plogger.pdf" target="_blank" class="text-blue-600">Plogger</a>.
                    The goal is to clean up your city, while jogging or walking your dog, find bins easily using
                    our app, and share your achievements with your friends on Social Media.
                </p>
                {{--                <p>The term 'plogging' just came over from Sweden I think and there was a dataset with bins across the city</p>--}}
                <p>
                    It was quite funny because the judges couldn't decide on the best teams in 3 categories so they created an extra category
                    for our application and then there were 4 winners.
                </p>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 rounded-xl bg-pink-100 p-4 md:p-6 mb-4 md:mb-12">
            <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">
                <h2 class="uppercase text-purple-600">
                    Articles
                </h2>
            </div>
            <div class="mt-1 col-span-2">
                {{--                <ul>--}}
                {{--                    <li class="text-pink-500 list-disc">--}}
                {{--                        <a class="text-purple-500" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet. MEDIUM</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="text-pink-500 list-disc">--}}
                {{--                        <a class="text-purple-500" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains (purchased domain name required). MEDIUM</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
                <p>
                    Checkout my <a class="text-purple-500" href="https://lotje-kinable.medium.com/">Medium account</a>:

                </p>
                <div class="grid grid-cols-12">
                    <div class="col-start-2 col-end-12">
                        <li class="text-pink-500 list-disc">
                            <a class="text-purple-500" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet.</a>
                        </li>
                    </div>
                    <div class="col-start-2 col-end-12">
                        <li class="text-pink-500 list-disc">
                            <a class="text-purple-500" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains.</a>
                        </li>
                    </div>
                    {{--                    <div class="col-start-1 col-end-3">2</div>--}}
                    {{--                    <div class="col-end-7 col-span-2">3</div>--}}
                    {{--                    <div class="col-start-1 col-end-7">4</div>--}}
                </div>
                {{--                <p class="pl-2">--}}
                {{--                                    <ul>--}}
                {{--                                        <li class="text-pink-500 list-disc">--}}
                {{--                                            <a class="text-purple-500" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet. MEDIUM</a>--}}
                {{--                                        </li>--}}
                {{--                                        <li class="text-pink-500 list-disc">--}}
                {{--                                            <a class="text-purple-500" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains (purchased domain name required). MEDIUM</a>--}}
                {{--                                        </li>--}}
                {{--                                    </ul>--}}
                {{--                </p>--}}


            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">
            <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">
                <h2 class="uppercase text-purple-600">
                    Education
                </h2>
            </div>
            <div class="mt-1  col-span-2">
                <p>In 2020, I graduated as Software engineer. I went to <a class="text-pink-500" href="https://www.howest.be/en">Howest</a>, Bruges. </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 rounded-xl bg-pink-100 p-4 md:p-6 mb-4 md:mb-12">
            <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">
                <h2 class="uppercase text-purple-600">
                    Contact
                </h2>
            </div>


            <div class="mt-1 col-span-2">
                {{--                <div class="flex">--}}
                {{--                    <div class="w-1/3">--}}
                {{--                        Email:--}}
                {{--                    </div>--}}
                {{--                    <div class="w-2/3 hover:underline hover:text-red-400">--}}
                {{--                        <a href="mailto:lkinable@gmail.com">lkinable@gmail.com</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-start-1">Email:</div>
                    <div class="col-start-3 underline text-pink-400">
                        <a class="hover:underline hover:text-blue-400" href="mailto:lkinable@gmail.com">lkinable@gmail.com</a>
                    </div>
                </div>
            </div>


        </div>

@endsection

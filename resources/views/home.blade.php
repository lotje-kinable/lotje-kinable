@extends('layouts.main')

@section('content')

    <div class="container px-4 py-6 mx-auto text-lg leading-9">

        <div class="grid grid-cols-2 gap-1 p-4 mb-6 text-sm bg-pink-100 md:text-lg md:grid-cols-4 place-items-center md:gap-1 rounded-xl md:p-6 md:mb-12">
            <div class="hover:text-pink-700"><a href="https://laravel.com" target="_blank"><span class="text-pink-700">#</span>laravel</a></div>
            <div class=""><span class="text-purple-700">#</span>developer</div>
            <div class=""><span class="text-blue-700">#</span>bachelor_degree</div>
            <div class="hover:underline hover:text-blue-700">
                <a href="mailto:lkinable@hotmail.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
            {{--            <div class="">🏳‍🌈--}}
            {{--                <span class="p-0 text-red-500">r</span>--}}
            {{--                <span class="text-orange-500">a</span>--}}
            {{--                <span class="text-yellow-200">i</span>--}}
            {{--                <span class="text-green-500">n</span>--}}
            {{--                <span class="text-blue-700">b</span>--}}
            {{--                <span class="text-indigo-500">o</span>--}}
            {{--                <span class="text-purple-700">w</span>--}}
            {{--            </div>--}}

        </div>

        <div class="grid grid-cols-1 p-4 mb-4 bg-blue-100 md:grid-cols-3 rounded-xl md:p-6 md:mb-12">

            <div class="m-auto mt-1 mb-2 md:ml-0 md:mb-0">
                {{--                <h2 class="text-purple-700 uppercase">--}}
                {{--                    About me--}}
                {{--                </h2>         --}}
                <div class="w-20 fill-current md:w-48">
                    <img src="{{ asset('/images/lotje_2.png') }}" alt="Avatar">
                </div>
            </div>

            <div class="col-span-2 mt-1">
                <p>Hi, </p>
                <p>
                    My name is Lotje Kinable. I'm {{ $diff = Carbon\Carbon::parse('1993-02-03')->diffInYears(Carbon\Carbon::now()) }}
                    years old and I live in Bruges, Belgium.
                </p>
                <p class="mt-2">I'm a junior freelance developer with a passion for <a class="text-blue-700" target="_blank" href="https://laravel.com/docs/8.x">Laravel</a>. I started my own company in March, 2021. </p>
                <p class="mt-2">As a happy dog mom, working from home is great! </p>
            </div>

        </div>

        <x-section-card title="Interests" class="bg-pink-100">
            <ul class="col-span-2 mt-1">
{{--                <p>--}}
{{--                    I'm mostly interested in Laravel. We had a few classes about Content Management Systems like WordPress and our--}}
{{--                    teacher briefly mentioned Laravel. We could use Laravel for our demo portfolio and I did. It was really basic website,--}}
{{--                    with very little functionality but I really liked working with the framework.--}}
{{--                </p>--}}
                <li class="list-disc list-inside">Laravel</li>
                <li class="list-disc list-inside">Music: playing the piano, guitar</li>
                <li class="list-disc list-inside">Photography</li>
                <li class="list-disc list-inside">Reading: books, blogs, ...</li>
                <li class="list-disc list-inside">Helping others</li>
                {{--                <p> When the time came to do my second internship (the first one was in React and I didn't work out) I specifically searched for a Laravel internship.--}}
                {{--                    I ended up in Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js. When I started there in--}}
                {{--                    september 2019, LiveWire came out in alpha version and I ended up writing my thesis about Laravel and LiveWire.--}}
                {{--                </p>--}}
{{--                <p>--}}
{{--                    In September 2019, I started my intership at Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js.--}}
{{--                    At that moment <a target="_blank" href="https://github.com/livewire/livewire" class="text-blue-700">LiveWire</a> by--}}
{{--                    <a target="_blank" href="https://github.com/calebporzio" class="text-blue-700">Caleb Porzio</a>--}}
{{--                    came out in alpha version and I ended up writing my thesis about Laravel and LiveWire.--}}
{{--                </p>--}}
            </ul>
        </x-section-card>

        <x-section-card title="Achievements" class="bg-blue-100">
            <div class="col-span-2 mt-1">
{{--                <p>--}}
{{--                    Me and my team won first prize in our category the City Hacks 2018 (Bruges) competition. We created a prototype app called--}}
{{--                    <a href="/img/plogger.pdf" target="_blank" class="text-blue-700">Plogger</a>.--}}
{{--                    The goal is to clean up your city, while jogging or walking your dog, find bins easily using--}}
{{--                    our app, and share your achievements with your friends on Social Media.--}}
{{--                </p>--}}
{{--                --}}{{--                <p>The term 'plogging' just came over from Sweden I think and there was a dataset with bins across the city</p>--}}
{{--                <p>--}}
{{--                    It was quite funny because the judges couldn't decide on the best teams in 3 categories so they created an extra category--}}
{{--                    for our team.--}}
{{--                </p>--}}

                <p>
                    In 2018, my team and I won the first prize (in our category) in the City Hacks 2018 (Bruges) competition. We were given 24 hours to create a (prototype) app regarding
                    pollution in the city. We were given data about the bins located in Bruges so we came up with
                    <a href="{{ asset('/images/PLOGGER.pdf') }}" target="_blank" class="text-blue-700">Plogger</a>.
                    The goal: clean up your city while jogging or walking, and share a pic next to a bin with all the rubbish you collected on your social media.
                </p>

            </div>
        </x-section-card>

        <x-section-card title="Posts" class="bg-pink-100">
            <div class="col-span-2 mt-1">
                {{--                <ul>--}}
                {{--                    <li class="text-pink-700 list-disc">--}}
                {{--                        <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet. MEDIUM</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="text-pink-700 list-disc">--}}
                {{--                        <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains (purchased domain name required). MEDIUM</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
                {{--                <p>--}}
                {{--                    Checkout my <a class="text-purple-700" href="https://lotje-kinable.medium.com/">Medium account</a>:--}}

                {{--                </p>--}}

                <p>I like to share things, so I created a <a class="text-purple-700" target="_blank" href="https://lotje-kinable.medium.com/">Medium account</a>.  </p>

                {{--                <div class="grid grid-cols-12">--}}
                {{--                    <div class="col-start-2 col-end-12">--}}
                {{--                        <li class="text-pink-700 list-disc">--}}
                {{--                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet.</a>--}}
                {{--                        </li>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-start-2 col-end-12">--}}
                {{--                        <li class="text-pink-700 list-disc">--}}
                {{--                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains.</a>--}}
                {{--                        </li>--}}
                {{--                    </div>--}}
                {{--                    --}}{{--                    <div class="col-start-1 col-end-3">2</div>--}}
                {{--                    --}}{{--                    <div class="col-span-2 col-end-7">3</div>--}}
                {{--                    --}}{{--                    <div class="col-start-1 col-end-7">4</div>--}}
                {{--                </div>--}}
                {{--                <p class="pl-2">--}}
                {{--                                    <ul>--}}
                {{--                                        <li class="text-pink-700 list-disc">--}}
                {{--                                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet. MEDIUM</a>--}}
                {{--                                        </li>--}}
                {{--                                        <li class="text-pink-700 list-disc">--}}
                {{--                                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains (purchased domain name required). MEDIUM</a>--}}
                {{--                                        </li>--}}
                {{--                                    </ul>--}}
                {{--                </p>--}}


            </div>
        </x-section-card>

        <x-section-card title="Education" class="bg-blue-100">
{{--            <div class="col-span-2 mt-1">--}}
            <ul class="col-span-2 mt-1">
                <li class="list-disc list-inside">
                    In September 2019, I started my internship at Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js.
                    At that moment <a target="_blank" href="https://github.com/livewire/livewire" class="text-blue-700">LiveWire</a> by
                    <a target="_blank" href="https://github.com/calebporzio" class="text-blue-700">Caleb Porzio</a>
                    came out in alpha and I ended up writing my thesis about Laravel and LiveWire.
                </li>
                <li class="mt-2 list-disc list-inside">In 2020, I graduated as a Software engineer (<a class="text-pink-700" href="https://www.howest.be/en">Howest</a>, Bruges). </li>
{{--            </div>--}}
            </ul>
        </x-section-card>

        <x-section-card title="Contact" class="bg-pink-100">
            <div class="col-span-2 mt-1">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-start-1">Email:</div>
                    <div class="col-start-3 text-pink-700 underline">
                        <a class="hover:underline hover:text-blue-700" href="mailto:lkinable@hotmail.com">lkinable@hotmail.com</a>
                    </div>
                </div>
            </div>
        </x-section-card>

        <x-section-card title="Company Details" class="bg-blue-100">
            <div class="w-1/2 col-span-2 mt-1">
                <div class="grid grid-cols-2">
                    <div class="">
                        Company name:
                    </div>
                    <div class="">Lotje Kinable</div>
                    <div class="">
                        VAT:
                    </div>
                    <div class="">BE 0764.411.072</div>
                </div>
                </div>
            </div>
        </x-section-card>

        <x-section-card title="Note" class="bg-pink-100">
            <div class="col-span-2 mt-1">
                <p>
                    I'll continue to update my website ;-)
                </p>
            </div>
        </x-section-card>
    </div>

@endsection

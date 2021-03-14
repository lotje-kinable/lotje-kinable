

@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 py-6 text-lg leading-9">

        <div class="grid text-sm md:text-lg md:grid-cols-4 place-items-center md:gap-1 gap-1 grid-cols-2 rounded-xl bg-pink-100 p-4 md:p-6 mb-6 md:mb-12">
            <div class="hover:text-pink-700"><a href="https://laravel.com" target="_blank"><span class="text-pink-700">#</span>laravel</a></div>
            <div class=""><span class="text-purple-700">#</span>developer</div>
            <div class=""><span class="text-blue-700">#</span>bachelor_degree</div>
            <div class="hover:underline hover:text-blue-700">
                <a href="mailto:lkinable@hotmail.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
        </div>
        <div class="flex justify-center rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">
{{--            <h2 class="text-6xl text-pink-700 font-black tracking-widest m-12">--}}
{{--                <span class="text-center align-middle">--}}
{{--                    Posts--}}
{{--                    coming--}}
{{--                    soon!--}}
{{--                </span>--}}
{{--            </h2>--}}
{{--            <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>--}}

        </div>


        {{--        <div class="grid grid-cols-1 md:grid-cols-3 rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">--}}

        {{--            <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">--}}
        {{--                --}}{{--                <h2 class="uppercase text-purple-700">--}}
        {{--                --}}{{--                    About me--}}
        {{--                --}}{{--                </h2>         --}}
        {{--                <div class="w-20 md:w-48 fill-current">--}}
        {{--                    <img src="{{ asset('/images/lotje_2.png') }}" alt="Avatar">--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--            <div class="mt-1 col-span-2">--}}
        {{--                <p>Hi, </p>--}}
        {{--                <p>--}}
        {{--                    My name is Lotje Kinable. I'm {{ $diff = Carbon\Carbon::parse('1993-02-03')->diffInYears(Carbon\Carbon::now()) }}--}}
        {{--                    years old and I live in Bruges, Belgium.--}}
        {{--                </p>--}}
        {{--                <p class="mt-2">I'm a junior developer with a passion for Laravel.</p>--}}
        {{--                --}}{{--                <p class="mt-2">Some of my hobbies are playing the piano, taking pictures and reading.</p>--}}
        {{--                <p class="mt-2">I'm a proud dog mom, which is why I'd love to work from home. </p>--}}
        {{--            </div>--}}

        {{--        </div>--}}

        {{--        <x-section-card title="Interests" class="bg-pink-100">--}}
        {{--            <ul class="mt-1 col-span-2">--}}
        {{--                --}}{{--                <p>--}}
        {{--                --}}{{--                    I'm mostly interested in Laravel. We had a few classes about Content Management Systems like WordPress and our--}}
        {{--                --}}{{--                    teacher briefly mentioned Laravel. We could use Laravel for our demo portfolio and I did. It was really basic website,--}}
        {{--                --}}{{--                    with very little functionality but I really liked working with the framework.--}}
        {{--                --}}{{--                </p>--}}
        {{--                <li class="list-inside list-disc">Laravel</li>--}}
        {{--                <li class="list-inside list-disc">Music: playing the piano, guitar</li>--}}
        {{--                <li class="list-inside list-disc">Photography</li>--}}
        {{--                <li class="list-inside list-disc">Reading: books, blogs, ...</li>--}}
        {{--                <li class="list-inside list-disc">Helping others</li>--}}
        {{--                --}}{{--                <p> When the time came to do my second internship (the first one was in React and I didn't work out) I specifically searched for a Laravel internship.--}}
        {{--                --}}{{--                    I ended up in Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js. When I started there in--}}
        {{--                --}}{{--                    september 2019, LiveWire came out in alpha version and I ended up writing my thesis about Laravel and LiveWire.--}}
        {{--                --}}{{--                </p>--}}
        {{--                --}}{{--                <p>--}}
        {{--                --}}{{--                    In September 2019, I started my intership at Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js.--}}
        {{--                --}}{{--                    At that moment <a target="_blank" href="https://github.com/livewire/livewire" class="text-blue-700">LiveWire</a> by--}}
        {{--                --}}{{--                    <a target="_blank" href="https://github.com/calebporzio" class="text-blue-700">Caleb Porzio</a>--}}
        {{--                --}}{{--                    came out in alpha version and I ended up writing my thesis about Laravel and LiveWire.--}}
        {{--                --}}{{--                </p>--}}
        {{--            </ul>--}}
        {{--        </x-section-card>--}}

        {{--        <x-section-card title="Achievements" class="bg-blue-100">--}}
        {{--            <div class="mt-1 col-span-2">--}}
        {{--                --}}{{--                <p>--}}
        {{--                --}}{{--                    Me and my team won first prize in our category the City Hacks 2018 (Bruges) competition. We created a prototype app called--}}
        {{--                --}}{{--                    <a href="/img/plogger.pdf" target="_blank" class="text-blue-700">Plogger</a>.--}}
        {{--                --}}{{--                    The goal is to clean up your city, while jogging or walking your dog, find bins easily using--}}
        {{--                --}}{{--                    our app, and share your achievements with your friends on Social Media.--}}
        {{--                --}}{{--                </p>--}}
        {{--                --}}{{--                --}}{{----}}{{--                <p>The term 'plogging' just came over from Sweden I think and there was a dataset with bins across the city</p>--}}
        {{--                --}}{{--                <p>--}}
        {{--                --}}{{--                    It was quite funny because the judges couldn't decide on the best teams in 3 categories so they created an extra category--}}
        {{--                --}}{{--                    for our team.--}}
        {{--                --}}{{--                </p>--}}

        {{--                <p>--}}
        {{--                    In 2018 we won the first prize (in our category) in the City Hacks 2018 (Bruges) competition. We were given 24 hours to create a (prototype) app regarding--}}
        {{--                    pollution in the city. We were given data about the bins located in Bruges so we came up with--}}
        {{--                    <a href="{{ asset('/images/PLOGGER.pdf') }}" target="_blank" class="text-blue-700">Plogger</a>.--}}
        {{--                    The goal: clean up your city while jogging or walking, and share a pic next to a bin with all the rubbish you colleted on Social Media.--}}
        {{--                </p>--}}

        {{--            </div>--}}
        {{--        </x-section-card>--}}

        {{--        <x-section-card title="Posts" class="bg-pink-100">--}}
        {{--            <div class="mt-1 col-span-2">--}}
        {{--                --}}{{--                <ul>--}}
        {{--                --}}{{--                    <li class="text-pink-700 list-disc">--}}
        {{--                --}}{{--                        <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet. MEDIUM</a>--}}
        {{--                --}}{{--                    </li>--}}
        {{--                --}}{{--                    <li class="text-pink-700 list-disc">--}}
        {{--                --}}{{--                        <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains (purchased domain name required). MEDIUM</a>--}}
        {{--                --}}{{--                    </li>--}}
        {{--                --}}{{--                </ul>--}}
        {{--                --}}{{--                <p>--}}
        {{--                --}}{{--                    Checkout my <a class="text-purple-700" href="https://lotje-kinable.medium.com/">Medium account</a>:--}}

        {{--                --}}{{--                </p>--}}

        {{--                <p>I like to share things, so I created a <a class="text-purple-700" target="_blank" href="https://lotje-kinable.medium.com/">Medium account</a>.  </p>--}}

        {{--                --}}{{--                <div class="grid grid-cols-12">--}}
        {{--                --}}{{--                    <div class="col-start-2 col-end-12">--}}
        {{--                --}}{{--                        <li class="text-pink-700 list-disc">--}}
        {{--                --}}{{--                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet.</a>--}}
        {{--                --}}{{--                        </li>--}}
        {{--                --}}{{--                    </div>--}}
        {{--                --}}{{--                    <div class="col-start-2 col-end-12">--}}
        {{--                --}}{{--                        <li class="text-pink-700 list-disc">--}}
        {{--                --}}{{--                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains.</a>--}}
        {{--                --}}{{--                        </li>--}}
        {{--                --}}{{--                    </div>--}}
        {{--                --}}{{--                    --}}{{----}}{{--                    <div class="col-start-1 col-end-3">2</div>--}}
        {{--                --}}{{--                    --}}{{----}}{{--                    <div class="col-end-7 col-span-2">3</div>--}}
        {{--                --}}{{--                    --}}{{----}}{{--                    <div class="col-start-1 col-end-7">4</div>--}}
        {{--                --}}{{--                </div>--}}
        {{--                --}}{{--                <p class="pl-2">--}}
        {{--                --}}{{--                                    <ul>--}}
        {{--                --}}{{--                                        <li class="text-pink-700 list-disc">--}}
        {{--                --}}{{--                                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Deploy a Laravel App on a Laravel Forge Server using a Digital Ocean Droplet. MEDIUM</a>--}}
        {{--                --}}{{--                                        </li>--}}
        {{--                --}}{{--                                        <li class="text-pink-700 list-disc">--}}
        {{--                --}}{{--                                            <a class="text-purple-700" href="https://lotje-kinable.medium.com/deploy-a-laravel-app-on-a-laravel-forge-server-using-a-digital-ocean-droplet-and-a-domain-name-898f53c55527">Hosting 2 (or more) Laravel apps on one single Laravel Forge Server, using only one DigitalOcean Droplet and with the use of subdomains (purchased domain name required). MEDIUM</a>--}}
        {{--                --}}{{--                                        </li>--}}
        {{--                --}}{{--                                    </ul>--}}
        {{--                --}}{{--                </p>--}}


        {{--            </div>--}}
        {{--        </x-section-card>--}}

        {{--        <x-section-card title="Education" class="bg-blue-100">--}}
        {{--            --}}{{--            <div class="mt-1 col-span-2">--}}
        {{--            <ul class="mt-1 col-span-2">--}}
        {{--                <li class="list-inside list-disc">--}}
        {{--                    In September 2019, I started my internship at Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js.--}}
        {{--                    At that moment <a target="_blank" href="https://github.com/livewire/livewire" class="text-blue-700">LiveWire</a> by--}}
        {{--                    <a target="_blank" href="https://github.com/calebporzio" class="text-blue-700">Caleb Porzio</a>--}}
        {{--                    came out in alpha and I ended up writing my thesis about Laravel and LiveWire.--}}
        {{--                </li>--}}
        {{--                <li class="list-inside list-disc mt-2">In 2020, I graduated as a Software engineer (<a class="text-pink-700" href="https://www.howest.be/en">Howest</a>, Bruges). </li>--}}
        {{--                --}}{{--            </div>--}}
        {{--            </ul>--}}
        {{--        </x-section-card>--}}

        {{--        <x-section-card title="Contact" class="bg-pink-100">--}}
        {{--            <div class="mt-1 col-span-2">--}}
        {{--                <div class="grid grid-cols-12 gap-4">--}}
        {{--                    <div class="col-start-1">Email:</div>--}}
        {{--                    <div class="col-start-3 underline text-pink-700">--}}
        {{--                        <a class="hover:underline hover:text-blue-700" href="mailto:lkinable@hotmail.com">lkinable@hotmail.com</a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </x-section-card>--}}

{{--        <x-section-card title="Note" class="bg-pink-100">--}}
{{--            <div class="mt-1 col-span-2">--}}
{{--                <p class="whitespace-pre-line">--}}
{{--                    I'll continue to update my website ;-)--}}
{{--                    Come back soon!--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </x-section-card>--}}
    </div>

@endsection

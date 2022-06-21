@extends('layouts.main')

@section('content')

    <div class="container px-4 py-6 mx-auto text-lg leading-9">

        <div class="grid grid-cols-2 gap-1 p-4 mb-6 text-sm bg-pink-100 md:text-lg md:grid-cols-4 place-items-center md:gap-1 rounded-xl md:p-6 md:mb-12">
            <div class="hover:text-pink-700"><a href="https://laravel.com" target="_blank"><span class="text-pink-700">#</span>laravel</a></div>
            <div class=""><span class="text-violet-700">#</span>developer</div>
            <div class=""><span class="text-blue-700">#</span>bachelor_degree</div>
            <div class="hover:underline hover:text-blue-700">
                <a href="mailto:lotje@lotjekinable.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
            {{--            <div class="">🏳‍🌈--}}
            {{--                <span class="p-0 text-red-500">r</span>--}}
            {{--                <span class="text-orange-500">a</span>--}}
            {{--                <span class="text-amber-200">i</span>--}}
            {{--                <span class="text-emerald-500">n</span>--}}
            {{--                <span class="text-blue-700">b</span>--}}
            {{--                <span class="text-indigo-500">o</span>--}}
            {{--                <span class="text-violet-700">w</span>--}}
            {{--            </div>--}}

        </div>

        <div class="grid grid-cols-1 p-4 mb-4 bg-blue-100 md:grid-cols-3 rounded-xl md:p-6 md:mb-12">

            <div class="m-auto mt-1 mb-2 md:ml-0 md:mb-0">
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
                <li class="list-disc list-inside">Laravel</li>
                <li class="list-disc list-inside">Music: playing the piano, guitar</li>
                <li class="list-disc list-inside">Photography</li>
                <li class="list-disc list-inside">Reading: books, blogs, ...</li>
                <li class="list-disc list-inside">Helping others</li>
            </ul>
        </x-section-card>

        <x-section-card title="Achievements" class="bg-blue-100">
            <div class="col-span-2 mt-1">
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
                <p>I like to share things, so I created a <a class="text-violet-700" target="_blank" href="https://lotje-kinable.medium.com/">Medium account</a>.  </p>
            </div>
        </x-section-card>

        <x-section-card title="Education" class="bg-blue-100">
            <ul class="col-span-2 mt-1">
                <li class="list-disc list-inside">
                    In September 2019, I started my internship at Libaro, a small company in Bruges. There I learned to work with Laravel and Vue.js.
                    At that moment <a target="_blank" href="https://github.com/livewire/livewire" class="text-blue-700">LiveWire</a> by
                    <a target="_blank" href="https://github.com/calebporzio" class="text-blue-700">Caleb Porzio</a>
                    came out in alpha and I ended up writing my thesis about Laravel and LiveWire.
                </li>
                <li class="mt-2 list-disc list-inside">In 2020, I graduated as a Software engineer (<a class="text-pink-700" href="https://www.howest.be/en">Howest</a>, Bruges). </li>
            </ul>
        </x-section-card>

        <x-section-card title="Contact" class="bg-pink-100">
            <div class="col-span-2 mt-1">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-start-1">Email:</div>
                    <div class="col-start-3 text-pink-700 underline">
                        <a class="hover:underline hover:text-blue-700" href="mailto:lotjee@lotjekinable.com">lotje@lotjekinable.com</a>
                    </div>
                </div>
            </div>
        </x-section-card>

        <x-section-card title="Company Details" class="bg-blue-100">
            <div class="w-1/2 col-span-2 mt-1">
                <div class="grid grid-cols-2">
                    <div class="">Company name: </div>
                    <div class="">Lotje Kinable</div>
                    <div class="">VAT: </div>
                    <div class="">BE 0764.411.072</div>
                </div>
            </div>
        </x-section-card>

        <x-section-card title="Note" class="bg-pink-100">
            <div class="mt-1 ">
                <p>
                    I'll continue to update my website ;-)
                </p>
            </div>
        </x-section-card>
</div>

@endsection

@extends('layouts.main')

@section('content')

    <div class="container px-4 py-6 mx-auto text-lg leading-9">

        <div class="grid grid-cols-2 gap-1 p-4 mb-6 text-sm bg-pink-100 md:text-lg md:grid-cols-4 place-items-center md:gap-1 rounded-xl md:p-6 md:mb-12">
            <div class="hover:text-pink-700"><a href="https://laravel.com" target="_blank"><span class="text-pink-700">#</span>laravel</a></div>
            <div class=""><span class="text-violet-700">#</span>developer</div>
            <div class=""><span class="text-blue-700">#</span>bachelor_degree</div>
            <div class="hover:underline hover:text-blue-700">
                <a href="mailto:lkinable@hotmail.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
        </div>

        <x-section-card title="Fruit en Fotokriebels" class="bg-blue-100">
            <div class="col-span-2 mt-1">
                <p>
                    A small, adaptable website for Rita. Rita loves making jam with fresh fruit! Visit her website: <a href="https://fruitenfotokriebels.be" target="_blank" class="text-blue-700">https://fruitenfotokriebels.be</a>
                </p>
            </div>
        </x-section-card>

        <x-section-card title="NCCS - Nick Casier Computer Solutions" class="bg-pink-100">
            <div class="col-span-2 mt-1">
                <p>
                    Visit the website: <a href="https://nccs.be" target="_blank" class="text-blue-700">https://nccs.be</a>
                </p>
            </div>
        </x-section-card>

        <x-section-card title="Taxi Dewaele" class="bg-blue-100">
            <div class="col-span-2 mt-1">
                <p>
                    My first big project: a company app for Taxi Dewaele.
                </p>
                <ul class="col-span-2 mt-1 ml-3">
                    <li class="list-disc list-inside"><a class="text-blue-700" target="_blank" href="https://laravel.com/docs/8.x">Laravel 8.x</a></li>
                    <li class="list-disc list-inside"><a class="text-blue-700" target="_blank" href="https://vuejs.org/">Vue 2.x</a></li>
                    <li class="list-disc list-inside"><a class="text-blue-700" target="_blank" href="https://laravel-livewire.com/docs/2.x/quickstart">Livewire 2.x</a></li>
                    <li class="list-disc list-inside"><a class="text-blue-700" target="_blank" href="https://alpinejs.dev/">Alpine 3.x</a></li>
                    <li class="list-disc list-inside"><a class="text-blue-700" target="_blank" href="https://tailwindcss.com/docs">Tailwindcss 2.x</a></li>
                </ul>
                <p>
                    If you ever need a taxi visit their website: <a href="https://taxi-dewaele.be" target="_blank" class="text-blue-700">https://taxi-dewaele.be</a>
                </p>
            </div>
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

        <x-section-card title="Note" class="bg-blue-100">
            <div class="col-span-2 mt-1">
                <p>
                    I'll continue to update my website ;-)
                </p>
            </div>
        </x-section-card>
    </div>

@endsection

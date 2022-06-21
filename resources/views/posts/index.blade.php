@extends('layouts.main')

@section('content')
    @ray('all posts lol')
    <div class="container mx-auto px-4 py-6 text-lg leading-9">

        <div class="grid text-sm md:text-lg md:grid-cols-4 place-items-center md:gap-1 gap-1 grid-cols-2 rounded-xl bg-pink-100 p-4 md:p-6 mb-6 md:mb-12">
            <div class="hover:text-pink-700"><a href="https://laravel.com" target="_blank"><span class="text-pink-700">#</span>laravel</a></div>
            <div class=""><span class="text-violet-700">#</span>developer</div>
            <div class=""><span class="text-blue-700">#</span>bachelor_degree</div>
            <div class="hover:underline hover:text-blue-700">
                <a href="mailto:lkinable@hotmail.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
        </div>
        <div class="flex justify-center rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">
            <h2 class="text-6xl text-pink-700 font-black tracking-widest m-12">
                <span class="text-center align-middle">
                    Posts
                    coming
                    soon!
                </span>
            </h2>
        </div>

        <x-section-card title="Note" class="bg-pink-100">
            <div class="mt-1 col-span-2">
                <p>
                    I'll continue to update my website ;-)
                    Come back soon !
                </p>
            </div>
        </x-section-card>
    </div>

@endsection

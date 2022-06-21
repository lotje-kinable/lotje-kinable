@extends('layouts.main')
@push('styles')

@endpush
@section('content')
    @ray('create post')

    <div class="container mx-auto px-4 py-6 text-lg leading-9">

        <div class="grid text-sm md:text-lg md:grid-cols-4 place-items-center md:gap-1 gap-1 grid-cols-2 rounded-xl bg-pink-100 p-4 md:p-6 mb-6 md:mb-12">
            <div class="hover:text-pink-700"><a href="https://laravel.com" target="_blank"><span class="text-pink-700">#</span>laravel</a></div>
            <div class=""><span class="text-violet-700">#</span>developer</div>
            <div class=""><span class="text-blue-700">#</span>bachelor_degree</div>
            <div class="hover:underline hover:text-blue-700">
                <a href="mailto:lkinable@hotmail.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
        </div>
        <div  id="app" class="flex justify-center rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">

        </div>
    </div>

@endsection
@push('scripts')


@endpush

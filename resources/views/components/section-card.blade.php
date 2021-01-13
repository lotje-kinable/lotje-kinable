<div {{ $attributes->merge(['class' => 'grid grid-cols-1 md:grid-cols-3 rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12']) }}>
{{--    <div class="hover:text-pink-500"><a href="https://laravel.com" target="_blank"><span class="text-pink-500">#</span>laravel</a></div>--}}
{{--    <div class=""><span class="text-purple-500">#</span>developer</div>--}}
{{--    <div class=""><span class="text-blue-500">#</span>bachelor</div>--}}
{{--    <div class="hover:underline hover:text-blue-400">--}}
{{--        <a href="mailto:lkinable@gmail.com"><span class="text-red-500">#</span>hire_me!</a>--}}
{{--    </div>--}}
{{--    --}}{{--            <div class="">🏳‍🌈--}}
{{--    --}}{{--                <span class="p-0 text-red-500">r</span>--}}
{{--    --}}{{--                <span class="text-orange-500">a</span>--}}
{{--    --}}{{--                <span class="text-yellow-200">i</span>--}}
{{--    --}}{{--                <span class="text-green-500">n</span>--}}
{{--    --}}{{--                <span class="text-blue-500">b</span>--}}
{{--    --}}{{--                <span class="text-indigo-500">o</span>--}}
{{--    --}}{{--                <span class="text-purple-500">w</span>--}}
{{--    --}}{{--            </div>--}}
{{--    <slot name="title">--}}
        <div class="mt-1 m-auto md:ml-0 mb-2 md:mb-0">
            <h2 class="uppercase text-purple-600">
                {{ $title ?? '' }}
            </h2>
        </div>
{{--    </slot>--}}


    {{ $slot }}
</div>

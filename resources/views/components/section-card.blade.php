@props([
    'title' => '',
])

<div {{ $attributes->merge(['class' => 'grid grid-cols-1 md:grid-cols-3 rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12']) }}>
    <div class="m-auto mt-1 mb-2 md:ml-0 md:mb-0">
        <h2 class="text-violet-600 uppercase">
            {{ $title }}
        </h2>
    </div>
    {{ $slot }}
</div>

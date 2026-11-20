@props(['id', 'title'])

<section id="{{ $id }}" class="mx-auto max-w-6xl scroll-mt-16 px-4 py-14">
    <h2 class="mb-8 text-2xl font-bold tracking-tight sm:text-3xl">{{ $title }}</h2>
    {{ $slot }}
</section>

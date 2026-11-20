<x-layout :title="'Abi ' . $year">
    <section class="bg-gradient-to-br from-indigo-700 to-fuchsia-600 px-4 py-24 text-center text-white">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest opacity-80">Abitur {{ $year }} &middot; {{ $school }}</p>
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-6xl">{{ $motto['title'] }}</h1>
        <p class="mx-auto mt-4 max-w-xl text-lg opacity-90">{{ $motto['subtitle'] }}</p>
    </section>

    <x-section id="info" title="Jahrgangsinformationen">
        <dl class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($info as $item)
                <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
                    <dt class="text-sm text-slate-500">{{ $item['label'] }}</dt>
                    <dd class="mt-1 text-lg font-semibold">{{ $item['value'] }}</dd>
                </div>
            @endforeach
        </dl>
    </x-section>

    <x-section id="zitate" title="Lehrerzitate">
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($quotes as $quote)
                <figure class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <blockquote class="italic">„{{ $quote['text'] }}“</blockquote>
                    <figcaption class="mt-3 text-sm font-medium text-indigo-700">— {{ $quote['author'] }}</figcaption>
                </figure>
            @endforeach
        </div>
    </x-section>

    <x-section id="funfacts" title="Funfacts">
        <div class="grid gap-4 sm:grid-cols-3">
            @foreach ($funfacts as $fact)
                <div class="rounded-xl bg-indigo-50 p-6 text-center">
                    <div class="text-4xl font-extrabold text-indigo-700">{{ $fact['value'] }}</div>
                    <div class="mt-1 text-sm text-slate-600">{{ $fact['label'] }}</div>
                </div>
            @endforeach
        </div>
    </x-section>

    <x-section id="merch" title="Abi-Merchandise">
        <div class="grid gap-4 sm:grid-cols-3">
            @foreach ($merchandise as $item)
                <article class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
                    <div class="flex h-40 items-center justify-center bg-slate-100 text-sm text-slate-400">Bild folgt</div>
                    <div class="p-5">
                        <h3 class="font-semibold">{{ $item['name'] }}</h3>
                        <p class="mt-1 text-sm text-slate-500">{{ $item['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </x-section>
</x-layout>

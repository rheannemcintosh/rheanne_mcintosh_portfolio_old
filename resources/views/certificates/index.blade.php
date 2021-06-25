<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Certificates') }}
        </h2>
    </x-slot>

    @foreach ($certificates as $certificate)
        <h1>{{ $certificate->name }}</h1>
        <p>{{ $certificate->description }}</p>
        <p>{{ $certificate->date }}</p>
    @endforeach

</x-app-layout>

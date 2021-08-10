<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Work Experiences') }}
        </h2>
    </x-slot>
    <div class="container mx-auto p-4">
        <div class="p-4 lg:px-24">
            <div class="bg-rmgrey shadow rounded-md p-8">

                <div class="mt-4">
                    <h1 class="pt-2 pl-2 bg-rmBlue-light text-white font-bebas text-6xl">Experience</h1>
                    <p><!--Insert a brief overview of the page --></p>
                    @foreach ($employers as $employer)
                        <div class="mt-4">
                            <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">{{ $employer->employer_name }}</h1>
                            @foreach ($employer->experiences as $experience)
                                <h2 class="font-bebas font-medium text-rmTeal text-3xl">{{ $experience->role }}</h2>
                                <h3 class="font-bebas text-xl italic">
                                    {{ $experience->start_date->format('F Y') }} -
                                    @if ($experience->end_date == null)
                                        Present
                                    @else
                                        {{ $experience->end_date->format('F Y') }}
                                    @endif
                                </h3>
                                <!-- Employment Type -->
                                <!-- Location -->
                                <!-- Country -->
                                <div class="px-5 py-2">
                                    <ul class="px-5 list-disc list-outside">
                                        @foreach ($experience->details as $detail)
                                            <li>{{ $detail->detail }}</li>
                                            @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

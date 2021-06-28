<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CV') }}
        </h2>
    </x-slot>

    <div class="py-12">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Rheanne McIntosh
                            </h3>
                        </div>
                        <div class="border-t border-gray-200">
                            <p>----- Insert Summary -----</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Experience
                            </h3>
                        </div>
                        <div class="border-t border-gray-200">
                            <p>----- Insert Experience -----</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Education
                            </h3>
                        </div>
                        <div class="border-t border-gray-200">
                            @foreach ($degrees as $degree)
                                <h4>{{ $degree->university_name }} | {{ $degree->degree_type }} {{$degree->degree_name }}</h4>
                                <h5>{{ $degree->degree_classification }}</h5>
                                <h6>{{ $degree->start_date->format('Y') }} - {{ $degree->end_date->format('Y') }}</h6>
                            @endforeach
                            <p>----- Insert Education -----</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Certificates
                            </h3>
                        </div>
                        <div class="border-t border-gray-200">
                            <p>----- Insert Certificates -----</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

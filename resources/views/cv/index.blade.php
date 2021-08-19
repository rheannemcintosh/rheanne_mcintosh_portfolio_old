<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="p-4 lg:px-24">
            <div class="bg-rmgrey shadow rounded-md p-8">
                <div class="bg-yellow-400">
                <h1>Hi, I'm Rheanne</h1>
                <p>
                    Summary About Rheanne: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                </div>
                <!-- Start of Experience Section -->
                <div class="mt-4">
                    <h1 class="pt-2 pl-2 bg-rmBlue-light text-white font-bebas text-6xl">Experience</h1>
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
                                            @if ($detail->cv_flag == true)
                                                <li>{{ $detail->detail }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <!-- End of Experience Section -->

                <!-- Start of Education Section -->
                <div class="mt-4">
                    <h1 class="pt-2 pl-2 bg-rmBlue-light text-white font-bebas text-6xl">Education</h1>
                    @foreach ($degrees as $degree)
                        <div class="mt-4">
                            <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">{{ $degree->degree_type }} {{ $degree->degree_name }}</h1>
                            <h2 class="font-bebas font-medium text-rmTeal text-3xl">{{ $degree->university_name }} ({{ $degree->degree_classification }})</h2>
                            <h3 class="font-bebas text-xl italic">
                                {{ $degree->start_date->format('Y') }} -
                                @if ($degree->end_date == null)
                                    Present
                                @else
                                    {{ $degree->end_date->format('Y') }}
                                @endif
                            </h3>
                            <div class="px-5 py-2">
                                <ul class="px-5 list-disc list-outside">
                                    @foreach ($degree->modules as $module)
                                        @if ($module->cv_flag == true)
                                            <li><span class="font-bold">({{ $module->grade }})</span> {{ $module->name }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End of Education Section -->

                <!-- Start of Personal Development Section -->
                <div class="mt-4">
                    <h1 class="pt-2 pl-2 bg-rmBlue-light text-white font-bebas text-6xl">Personal Development</h1>
                    <div class="mt-4">
                        <h1 class="font-bebas font-medium text-rmBlue-light text-5xl"><a href="https://teamtreehouse.com/">Team Treehouse</a></h1>
                        <h3 class="font-bebas text-xl italic">
                            2013 - Present
                        </h3>
                        <div class="px-5 py-2">
                            <ul class="px-5 list-disc list-outside">
                                <li><!-- Example List --></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">Zero to Mastery</h1>
                        <h3 class="font-bebas text-xl italic">
                            2021 - Present
                        </h3>
                        <div class="px-5 py-2">
                            <ul class="px-5 list-disc list-outside">
                                <li><!-- Example List --></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">UDEMY</h1>
                        <h3 class="font-bebas text-xl italic">
                            2020 - Present
                        </h3>
                        <div class="px-5 py-2">
                            <ul class="px-5 list-disc list-outside">
                                <li><!-- Example List --></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Personal Development Section -->

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
            </div>
        </div>
    </div>
</x-app-layout>

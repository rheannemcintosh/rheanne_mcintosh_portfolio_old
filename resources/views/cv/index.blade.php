<x-app-layout>
    <div class="container mx-auto sm:p-4">
        <div class="sm:p-4 lg:px-24">
            <div class="bg-rmWhite shadow sm:rounded-r-lg">
                <div class="grid sm:grid-cols-3 grid-cols-1">
                    <div class="bg-rmBlue col-span-1 sm:rounded-l-lg p-8">
                        <div class="p-4">
                            <img class="" src="{{url('/images/rm_circle.png')}}" alt="Image"/>
                        </div>
                        <div class="pb-3">
                            <h1 class="font-bebas text-4xl text-rmTeal-light">Summary</h1>
                            <p class="text-white pb-3">
                                Ambitious and self-motivated Software Developer specialising in PHP, Laravel and MySQL.
                                Currently working as a Software Engineer in Product Discovery for Visualsoft Ltd.
                            </p>
                            <p class="text-white pb-3">
                                A resourceful and well-organised individual who is always eager to learn. My interests are
                                in UX Design and Gamification. I am currently trying to expand my skillset by improving on my Python
                                as well as self teaching React.JS and Vue.
                            </p>
                        </div>
                        <div>
                            <h1 class="font-bebas text-4xl text-rmTeal-light">Skills</h1>
                            @foreach ($skill_types as $skill_type)
                                <p class="font-bebas text-rmYellow text-3xl pt-4">{{ $skill_type->type }}</p>
                                @foreach ($skill_type->skills as $skill)
                                    <p class="font-bebas text-white text-2xl">{{ $skill->name }}</p>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="col-span-2 p-8">

                        <!-- Start of Experience Section -->
                        <div class="mt-4">
                            <h1 class="pt-2 pl-2 bg-rmBlue text-white font-bebas text-6xl">Experience</h1>
                            @foreach ($employers as $employer)
                                <div class="mt-4">
                                    <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">{{ $employer->employer_name }}</h1>
                                    @foreach ($employer->experiences as $experience)
                                        <h2 class="font-bebas font-medium text-rmTeal text-3xl">{{ $experience->role }}</h2>
                                        <h3 class="font-bebas text-rmBlue-dark text-xl italic">
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
                            <h1 class="pt-2 pl-2 bg-rmBlue text-white font-bebas text-6xl">Education</h1>
                            @foreach ($degrees as $degree)
                                <div class="mt-4">
                                    <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">{{ $degree->degree_type }} {{ $degree->degree_name }}</h1>
                                    <h2 class="font-bebas font-medium text-rmTeal text-3xl">{{ $degree->university_name }} ({{ $degree->degree_classification }})</h2>
                                    <h3 class="font-bebas text-rmBlue-dark text-xl italic">
                                        {{ $degree->start_date->format('Y') }} -
                                        @if ($degree->end_date == null)
                                            Present
                                        @else
                                            {{ $degree->end_date->format('Y') }}
                                        @endif
                                    </h3>
                                    <div class="px-5 py-2">
                                        <ul class="px-5 list-disc list-outside">
                                            <li>First class honours degree in Computing (Graphics and Animation).</li>
                                            <li>Award for Academic Excellence in Stage 4 (2018).</li>
                                            <li>ConocoPhillips Award for Academic Excellence in Stage 2 (2016).</li>
                                            <li>Dissertation in “The Effects of Following the User Experience Design Process
                                                in the Development of a Mobile Application”.</li>
                                            {{--
                                            @foreach ($degree->modules as $module)
                                                @if ($module->cv_flag == true)
                                                    <li><span class="font-bold">({{ $module->grade }})</span> {{ $module->name }}</li>
                                                @endif
                                            @endforeach
                                            --}}
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- End of Education Section -->

                        <!-- Start of Personal Development Section -->
                        <div class="mt-4">
                            <h1 class="pt-2 pl-2 bg-rmBlue text-white font-bebas text-6xl">Personal Development</h1>
                            <div class="mt-4">
                                <h1 class="font-bebas font-medium text-rmBlue-light text-5xl"><a href="https://teamtreehouse.com/">Team Treehouse</a></h1>
                                <h3 class="font-bebas text-rmBlue-dark text-xl italic">
                                    2013 - Present
                                </h3>
                                <div class="px-5 py-2">
                                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-10">
                                        @foreach ($treehouseTracks->chunk(2) as $chunk)
                                                @foreach ($chunk as $track)
                                                <li>{{ $track->track }} <span class="font-bold text-rmTeal italic text-sm">({{ $track->length_hours }} hours)</span></li>
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">Zero to Mastery</h1>
                                <h3 class="font-bebas text-rmBlue-dark text-xl italic">
                                    2021 - Present
                                </h3>
                                <div class="px-5 py-2">
                                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-10">
                                        @foreach ($ztmCourses->chunk(2) as $chunk)
                                            @foreach ($chunk as $ztmCourse)
                                                <li>{{ $ztmCourse->course }} <span class="font-bold text-rmTeal italic text-sm">({{ $ztmCourse->length_hours }} hours)</span></li>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">CodeCademy</h1>
                                <h3 class="font-bebas text-rmBlue-dark text-xl italic">
                                    2021 - Present
                                </h3>
                                <div class="px-5 py-2">
                                    <ul class="px-5 list-disc list-outside">
                                        @foreach ($codecademy as $path)
                                            <li>{{ $path->name }} <span class="font-bold text-rmTeal italic text-sm">({{ $path->length_hours }} hours)</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Personal Development Section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Work Experiences') }}
        </h2>
    </x-slot>
    <div class="container mx-auto p-4 bg-red-500">
        <div class="p-4 lg:px-24 bg-green-700">
            <div class="bg-rmgrey shadow rounded-md p-8">
                <div class="bg-yellow-400">
                    <h1>Hi, I'm Rheanne</h1>
                    <p>
                        Summary About Rheanne: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="mt-4">
                    <h1 class="bg-rmBlue-light text-white font-bebas text-6xl">Experience</h1>
                    <!--
                    <div class="mt-4 bg-blue-50">
                        <h1>Visualsoft Ltd.</h1>
                        <h2>Developer (Product Discovery)</h2>
                        <h3>May 2021 - Present</h3>
                    </div>
                    -->
                    <div class="mt-4">
                        <h1 class="font-bebas font-medium text-rmBlue-light text-5xl">University of Aberdeen</h1>
                        <h2 class="font-bebas font-medium text-rmTeal text-3xl">Junior Software Developer</h2>
                        <h3 class="font-bebas text-xl italic">July 2019 - May 2021</h3>
                        <div class="px-5 py-2">
                            <ul class="px-5 list-disc list-outside">
                                <li>Develop new, efficient and well-tested applications using the Laravel framework, and integrate the applications with existing systems.</li>
                                <li>Manage the implementation of accessibility considerations by supervising a new employee and following Web Content Accessibility Guidelines.</li>
                                <li>Assist with the migration from PHP 5.6 to 7.4 for a number of applications.</li>
                                <li>Design, develop and implement new functionalities for current CodeIgniter applications.</li>
                                <li>Oversee an audit on the department’s documentation and wiki to ensure it is up-to-date, relevant and straightforward to understand for newly hired employees.</li>
                                <li>Provide daily support to a variety of users and participate in the training of a large number of users.</li>
                                <li>Modifiy and upgrade existing applications to correct coding errors; upgrade interfaces; and, improve overall performance.</li>
                                <li>Implement and test enhancement feature requests to improve product functionality and extend performance.</li>
                                <li>Use the CodeIgniter framework to build APIs for a variety of applications</li>
                                <li>Complete QA on an array of products, ensuring code conforms to PSR standards, and unit testing is implemented successfully.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($experiences as $experience)
        <div class="py-12">  
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                {{ $experience->employer_name }}
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                {{ $experience->role }}
                            </p>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Employment Type
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $experience->employment_type }}
                                </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Start Date
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $experience->start_date }}
                                </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    End Date
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $experience->end_date }}
                                </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Location
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $experience->location }}
                                </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Country
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $experience->country }}
                                </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Details
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <ul>
                                            @foreach ($experience->details as $detail)
                                                <li class="list-disc">{{ $detail->detail }}</li>
                                            @endforeach
                                        </ul>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>

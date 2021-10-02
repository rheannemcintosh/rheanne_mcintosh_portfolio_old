<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="p-4 lg:px-24">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <form action="{{ url('/contact') }}" method="POST">
                {{ csrf_field() }}
                <div class="bg-rmgrey shadow rounded-md p-8">
                    <h1 class="text-5xl mb-4">Contact Me!</h1>

                    <p class="mb-8"> Feel free to contact me below! Whether it be for freelance work, job opportunities, fellow nerds or if you just want a chat!</p>
                    <div class="">
                        <div id="name" class="grid mb-4 sm:grid-cols-2 grid-cols-1 gap-4">
                            <div id="firstname">
                                <label for="first_name" class="block">First Name</label>
                                <input type="text" name="first_name" class="focus:shadow-none text-sm w-full rounded-md shadow-md">
                            </div>
                            <div id="lastname">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="text-sm w-full rounded-md shadow-md">
                            </div>
                        </div>
                        <div id="email" class="mb-4">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="text-sm w-full rounded-md shadow-md">
                        </div>
                        <div id="subject" class="mb-4">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="text-sm w-full rounded-md shadow-md">
                        </div>
                        <div id="message" class="mb-4">
                            <label class="mb-1" for="message_content">Message</label>
                            <textarea name="message_content" rows="3" class="text-sm w-full text-sm rounded-md shadow-md"></textarea>
                        </div>
                        <div id="reason" class="block mb-4">
                            <span class="text-gray-700">Checkboxes</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2">Freelance Enquiry</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2">Job Opportunity</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2">Fellow Nerds</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2">Casual Chat</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Code to Update -->
                            <!--
                                <label class="mb-1" for="reason">Reason</label>
                                <fieldset class="bg-gray-600 grid mb-4 sm:grid-cols-4 grid-cols-1 gap-4">
                                    <input type="checkbox">
                                    <label>Checkbox 1</label>
                                    <input type="checkbox">
                                    <label>Checkbox 2</label>
                                    <input type="checkbox">
                                    <label>Checkbox 3</label>
                                </fieldset>
                            -->
                        </div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Contact Me!
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

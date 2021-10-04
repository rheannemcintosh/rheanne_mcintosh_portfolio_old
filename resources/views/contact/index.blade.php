<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="p-4 lg:px-24">
            <div class="bg-rmWhite shadow rounded-md p-8">
                <div class="mt-4">
                    <form action="{{ url('/contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="xl:px-20">
                            <h1 class="pt-2 pl-2 text-rmBlue font-bebas text-9xl">Contact Me!</h1>
                            <p class="mb-4"> Feel free to contact me below! Whether it be for freelance work,
                                job opportunities, fellow nerds or if you just want a chat!</p>
                            <div>
                                @if(Session::has('success'))
                                    <div class="p-4 mb-4 bg-green-200 border-2 border-green-600 rounded-md">
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                    @php
                                        Session::forget('success');
                                    @endphp
                                @endif
                                @if(Session::has('errors'))
                                    <div class="p-4 mb-4 bg-red-200 border-2 border-red-600 rounded-md">
                                        <p>Sorry! Please double check your form!</p>
                                    </div>
                                @endif


                                <div id="name" class="form-group grid mb-4 sm:grid-cols-2 grid-cols-1 gap-4">
                                    <div id="first_name">
                                        <label for="first_name" class="block text-lg text-rmBlue font-bebas">First
                                            Name *</label>
                                        <input type="text" name="first_name"
                                               class="@if ($errors->has('first_name')) ring-2 ring-red-600 border-transparent @endif form-control rounded-md shadow-md w-full focus:ring-2 focus:ring-rmTeal-light focus:shadow-none focus:border-transparent"
                                               placeholder="First Name" value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                            <div class="mt-2 text-red-600">{{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>
                                    <div id="last_name">
                                        <label for="last_name" class="block text-lg text-rmBlue font-bebas">Last
                                            Name *</label>
                                        <input type="text" name="last_name"
                                               class="@if ($errors->has('first_name')) ring-2 ring-red-600 border-transparent @endif form-control rounded-md shadow-md w-full focus:ring-2 focus:ring-rmTeal-light focus:shadow-none focus:border-transparent"
                                               placeholder="Last Name" value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                            <div class="mt-2 text-red-600">{{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div id="email" class="mb-4">
                                    <label for="email"
                                           class="block text-lg text-rmBlue font-bebas">Email *</label>
                                    <input type="text" name="email"
                                           class="@if ($errors->has('first_name')) ring-2 ring-red-600 border-transparent @endif form-control rounded-md shadow-md w-full focus:ring-2 focus:ring-rmTeal-light focus:shadow-none focus:border-transparent"
                                           placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <div class="mt-2 text-red-600">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div id="subject" class="mb-4">
                                    <label for="subject"
                                           class="block text-lg text-rmBlue font-bebas">Subject *</label>
                                    <input type="text" name="subject"
                                           class="@if ($errors->has('first_name')) ring-2 ring-red-600 border-transparent @endif form-control rounded-md shadow-md w-full focus:ring-2 focus:ring-rmTeal-light focus:shadow-none focus:border-transparent"
                                           placeholder="Subject" value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <div class="mt-2 text-red-600">{{ $errors->first('subject') }}</div>
                                    @endif
                                </div>
                                <div id="message" class="mb-4">
                                    <label for="message_content"
                                           class="mb-1  text-lg text-rmBlue block font-bebas">Message *</label>
                                    <textarea name="message_content" rows="3"
                                              class="@if ($errors->has('first_name')) ring-2 ring-red-600 border-transparent @endif form-control rounded-md shadow-md w-full focus:ring-2 focus:ring-rmTeal-light focus:shadow-none focus:border-transparent"
                                              placeholder="Message"
                                              value="{{ old('message_content') }}"></textarea>
                                    @if ($errors->has('message_content'))
                                        <div class="mt-2 text-red-600">{{ $errors->first('message_content') }}</div>
                                    @endif
                                </div>
                                <div id="reason" class="block mb-4">
                                    <label class="mb-1 text-lg text-rmBlue block font-bebas">Reason For
                                        Contacting <span class="italic">(Feel Free to Leave this Blank!)</span></label>
                                    <div class="grid mb-4 lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-x-4 mt-2">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input name=ctype[] type="checkbox" class="text-rmTeal-light form-checkbox focus:ring-transparent focus:outline-none" value="freelance">
                                                <span class="ml-2">Freelance Enquiry</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input name=ctype[] type="checkbox" class="text-rmTeal-light form-checkbox focus:ring-transparent focus:outline-none" value="job">
                                                <span class="ml-2">Job Opportunity</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input name=ctype[] type="checkbox" class="text-rmTeal-light form-checkbox focus:ring-transparent focus:outline-none" value="nerd">
                                                <span class="ml-2">Fellow Nerds</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input name=ctype[] type="checkbox" class="text-rmTeal-light form-checkbox focus:ring-transparent focus:outline-none" value="chat">
                                                <span class="ml-2">Casual Chat</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="bg-rmTeal-light hover:bg-rmTeal-dark text-white text-2xl font-bebas py-2 px-4 rounded">
                                    Contact Me!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

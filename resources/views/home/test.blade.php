<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Head -->
    @include('includes.head')

    <!-- Body -->
    <body class="bg-rmMuted bg-cover font-sans antialiased">

        <!-- Nav -->
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>

            <div class="logo">
                <!-- This logo image will be updated in the future -->
                <img class="logo" src="{{url('/images/logo.png')}}" alt="Image"/>
            </div>

            <div class="menu">
                <ul>
                    <li class="rm-font-nav rm-c-dark-blue text-white"><a href="{{ url('/') }}">Home</a></li>
                    <li class="rm-font-nav rm-c-light-teal text-white"><a href="{{ url('/cv') }}">About</a></li>
                    <li class="rm-font-nav rm-c-yellow text-white"><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li class="rm-font-nav rm-c-dark-teal text-white"><a href="{{ url('/contact') }}">Contact</a></li>
                    <li class="rm-font-nav rm-c-yellow text-white"><a href="{{ url('/blog') }}">Blog</a></li>
                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="page-wrap min-h-screen pt-20">
            <main>
                <div class="container mx-auto p-4">
                    <div class="p-4 lg:px-24">
                        <div class="p-8">
                            <h1 class="text-rmWhite text-center text-10xl font-bebas">Hi, I'm Rheanne!</h1>
                            <div class="py-10 my-4">
                                <h2 class="italic text-white"><!-- Space to enter sub-heading-->></h2>
                            </div>
                            <div class="grid mb-4 sm:grid-cols-4 grid-cols-1 gap-10">
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="text-3xl font-bebas text-center text-white">About</h3>
                                </div>
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="text-3xl font-bebas text-center text-rmWhite">Portfolio</h3>
                                </div>
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="text-3xl font-bebas text-center text-rmWhite">Contact</h3>
                                </div>
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="text-3xl font-bebas text-center text-rmWhite">Blog</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Footer -->
        @include('includes.footer')

    </body>
</html>














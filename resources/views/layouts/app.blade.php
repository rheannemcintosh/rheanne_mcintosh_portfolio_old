<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Head -->
    @include('includes.head')

    <!-- Body -->
    <body class="font-sans antialiased">

    @include('includes.nav')

        <div class="page-wrap min-h-screen">



            <!-- Page Content -->
            <main>

                <div class="container w-full min-h-full px-4">
                <!-- Navigation -->


                </div>

                <!--Container-->
                <div class="container w-full md:max-w-3xl mx-auto pt-20">

                    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

                        <!--Title-->
                        <div class="font-sans">
                            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Welcome to Minimal Blog</h1>
                            <p class="text-sm md:text-base font-normal text-gray-600">Published 19 February 2019</p>
                        </div>


                        <!--/ Post Content-->

                    </div>


                    <!--/Next & Prev Links-->

                </div>
                <!--/container-->

                {{ $slot }}
            </main>

        </div>

        <!-- Footer -->
        @include('includes.footer')

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Head -->
    @include('includes.head')

    <!-- Body -->
    <body class="bg-rmGrey font-sans antialiased">

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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Head -->
    @include('includes.head')

    <!-- Body -->
    <body class="font-sans antialiased">

        <!-- Navigation -->
        @include('includes.nav')

        <div class="page-wrap min-h-screen">

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>

        <!-- Footer -->
        @include('includes.footer')

    </body>
</html>

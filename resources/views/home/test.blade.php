<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Head -->
    @include('includes.head')

    <!-- Body -->
    <body
            class="bg-rmMuted bg-cover font-sans antialiased"
            x-data="{navOpen: false, scrolledFromTop: false}"
            x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
            @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
            :class="{
            'overflow-hidden': navOpen,
            'overflow-scroll': !navOpen
        }"
    >

    @include('includes.nav-home')

        <!-- Page Content -->
        <div class="page-wrap min-h-screen pt-20">
            <main>
                <div class="container mx-auto p-4">
                    <div class="p-4 lg:px-24">
                        <div class="p-8">
                            <h1 class="
                                text-center
                                text-rmWhite
                                2xl:text-12xl xl:text-10xl lg:text-9xl md:text-8xl text-7xl font-bebas">Hi, I'm Rheanne!</h1>
                            <div class="md:py-8 py-4 md:my-4 my-2"></div>
                            <div class="grid mb-4 xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-10">
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="md:text-3xl text-2xl font-bebas text-center text-white">About</h3>
                                </div>
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="md:text-3xl text-2xl font-bebas text-center text-rmWhite">Portfolio</h3>
                                </div>
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="md:text-3xl text-2xl font-bebas text-center text-rmWhite">Contact</h3>
                                </div>
                                <div class="py-4 border-4 border-rmWhite hover:bg-rmBlue-light">
                                    <h3 class="md:text-3xl text-2xl font-bebas text-center text-rmWhite">Blog</h3>
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














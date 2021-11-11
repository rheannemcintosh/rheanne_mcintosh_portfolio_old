<header
    class="
        fixed
        w-full
        flex
        justify-between
        items-center
        px-4
        md:px-12
        transition-all
        duration-200
        z-50
        h-24
     "
    :class="{'h-24': !scrolledFromTop, 'h-14 bg-rmGrey shadow-lg': scrolledFromTop}"
>
    <a href="#">
        <img
            src="{{url('/images/rm_patterned_logo.png')}}"
            alt="RM Logo"
            class="h-12 transform origin-left transition duration-200"
            :class="{'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop}"
        />
    </a>
    <nav>
        <button class="md:hidden" @click="navOpen = !navOpen">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8 text-rmBlue-dark"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <ul
            class="
              fixed
              left-0
              right-0
              min-h-screen
              px-4
              pt-8
              space-y-4
              text-rmBlue-dark
              text-xl
              bg-rmGrey
              md:bg-transparent
              font-bebas
              transform
              transition
              duration-300
              translate-x-full
              md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0
           "

            :class="{'translate-x-full': !navOpen, 'translate-x-0': navOpen, 'mt-2.5': !scrolledFromTop, 'mt-2': scrolledFromTop}"

        >
            <li class=""><a class="px-4 py-1 rounded-2xl hover:bg-rmTeal-dark hover:text-rmWhite" href="{{ url('/') }}" @click="navOpen = false">Home</a></li>
            <li class=""><a class="px-4 py-1 rounded-2xl hover:bg-rmYellow hover:text-rmWhite rounded-2xl" href="{{ url('/cv') }}" @click="navOpen = false">About</a></li>
            <li class=""><a class="px-4 py-1 rounded-2xl hover:bg-rmTeal hover:text-rmWhite rounded-2xl" href="{{ url('/portfolio') }}" @click="navOpen = false">Portfolio</a></li>
            <li class=""><a class="px-4 py-1 rounded-2xl hover:bg-rmBlue hover:text-rmWhite rounded-2xl" href="{{ url('/contact') }}" @click="navOpen = false">Contact</a></li>
            <li class=""><a class="px-4 py-1 rounded-2xl hover:bg-rmTeal-light hover:text-rmWhite rounded-2xl" href="{{ url('/blog') }}" @click="navOpen = false">Blog</a></li>
        </ul>
    </nav>
</header>

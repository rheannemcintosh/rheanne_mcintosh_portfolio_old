<nav>
    <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
    </div>

    <div class="logo">
        <!-- This logo image will be updated in the future -->
        <img class="logo" src="{{url('/images/rm_patterned_logo.png')}}" alt="Image"/>
    </div>

    <div class="menu">
        <ul>
            <li class="rm-font-nav text-rmBlue-dark"><a class="hover:bg-rmTeal-dark hover:text-rmWhite" href="{{ url('/') }}">Home</a></li>
            <li class="rm-font-nav text-rmBlue-dark"><a class="hover:bg-rmYellow hover:text-rmWhite" href="{{ url('/cv') }}">About</a></li>
            <li class="rm-font-nav text-rmBlue-dark"><a class="hover:bg-rmTeal hover:text-rmWhite" href="{{ url('/portfolio') }}">Portfolio</a></li>
            <li class="rm-font-nav text-rmBlue-dark"><a class="hover:bg-rmBlue hover:text-rmWhite" href="{{ url('/contact') }}">Contact</a></li>
            <li class="rm-font-nav text-rmBlue-dark"><a class="hover:bg-rmTeal-light hover:text-rmWhite" href="{{ url('/blog') }}">Blog</a></li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <!-- <img src="logo.png" alt="Logo" width="100"> -->
            <img src="{{ asset('images/logo2.png') }}" alt="Logo" width="150">

        </a>

        <!-- Custom Hamburger Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <div class="toggler-icon"></div>
            <div class="toggler-icon"></div>
            <div class="toggler-icon"></div>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>


                <!-- Dropdown 1 start-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('about')}}" id="navbarDropdown" role="button">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('about')}}">News</a></li>
                        <li><a class="dropdown-item" href="{{route('hubs')}}">Our Hubs</a></li>
                        <li><a class="dropdown-item" href="{{route('about')}}">Our Fleets</a></li>
                        <li><a class="dropdown-item" href="{{route('about')}}">Fleet History</a></li>
                    </ul>
                </li>
                <!-- Dropdown 1 end-->



                <!-- Dropdown 2 start-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('recruitment')}}" id="navbarDropdown" role="button">
                        Recruitment
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('joiningprocedure') }}">Joining Procedure</a></li>
                    </ul>
                </li>
                <!-- Dropdown 2 end-->




                <!-- Dropdown 2 start-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button">
                        Pilot Center
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Rooster</a></li>
                        <li><a class="dropdown-item" href="">Screenshot Gallery</a></li>
                    </ul>
                </li>
                <!-- Dropdown 2 end-->


                <li class="nav-item"><a class="nav-link" href="{{route('live-map')}}">Live Map</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('patners')}}">Patners</a></li>
                @auth
                    @can('isAdmin', App\Models\User::class)
                        <li><a href="{{ route('admin.dashboard') }}">Admin Center</a></li>
                    @endcan
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">Log out</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
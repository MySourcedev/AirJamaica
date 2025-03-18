
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
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
                            <li><a class="dropdown-item" href="{{route('recruitment')}}">Joining Procedure</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown 2 end-->




                    <!-- Dropdown 2 start-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('pilot-center')}}" id="navbarDropdown" role="button">
                            Pilot Center
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('pilot-center')}}">Rooster</a></li>
                            <li><a class="dropdown-item" href="{{route('pilot-center')}}">Screenshot Gallery</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown 2 end-->


                    <li class="nav-item"><a class="nav-link" href="{{route('live-map')}}">Live Map</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{route('patners')}}">Patners</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>

                </ul>
            </div>
        </div>
    </nav>
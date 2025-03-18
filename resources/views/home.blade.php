<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome- Air Jamaica Virtual</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet">



    <!-- Custom CSS -->
    <style>
        /* Full black background */
        body {
            background-color: black;
            color: white;
            padding-top: 60px;
            /* Add space at the top to prevent content from being hidden behind the navbar */
        }

        /* NAVBAR STYLING START */
        .navbar {
            background-color: black !important;
            position: fixed;
            /* Fixes the navbar at the top */
            top: 0;
            /* Aligns it at the top */
            left: 0;
            /* Aligns it to the left */
            right: 0;
            /* Ensures it spans the full width */
            z-index: 1000;
            /* Makes sure it's above other content */
            width: 100%;
            /* Make it span the full width */
        }

        /* Navbar links */
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 10px 15px;
            position: relative;
            transition: color 0.3s;
        }

        /* Smooth underline animation */
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: white;
            /* White underline */
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
            left: 0;
        }

        /* Dropdown Styling */
        .dropdown-menu {
            background-color: black !important;
            border: none;
        }

        /* Dropdown Links */
        .dropdown-menu .dropdown-item {
            color: white !important;
            transition: 0.3s;
        }

        /* Dropdown Hover Effect */
        .dropdown-menu .dropdown-item:hover {
            background-color: white !important;
            color: black !important;
        }

        /* Show dropdown on hover */
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        /* Custom Hamburger Menu */
        .navbar-toggler {
            border: none;
            background: none;
            cursor: pointer;
            padding: 10px;
            outline: none;
        }

        .toggler-icon {
            width: 30px;
            height: 3px;
            background-color: white;
            margin: 5px;
            transition: all 0.3s ease-in-out;
        }

        /* When menu is open, animate bars into an 'X' */
        .navbar-toggler.active .toggler-icon:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .navbar-toggler.active .toggler-icon:nth-child(2) {
            opacity: 0;
        }

        .navbar-toggler.active .toggler-icon:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Full black background for mobile menu */
        .navbar-collapse {
            background-color: black;
            padding: 20px;
        }
        /* NAVBAR STYLING START */


        /* Hero Section Styling */
        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        /* Background Slideshow */
        .slideshow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        /* Show First Slide */
        .slide:first-child {
            opacity: 1;
        }

        /* Dark Overlay */
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        /* Text Content */
        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* Button Styling */
        .btn-primary {
            background-color: #ff4500;
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #e63900;
        }

        /* LATEST ACTIVITY START */
        .bg-black {
            background-color: #000;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.1);
        }

        .list-group-item {
            border: none;
            padding: 10px 15px;
            transition: background-color 0.3s ease;
        }

        .hover-list-item:hover {
            background-color: #333;
            cursor: pointer;
        }

        .table-hover tbody tr:hover {
            background-color: #333;
            cursor: pointer;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: center;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table td strong {
            color: #007bff;
        }

        /* Latest news start */
        .latest-news {
            background-color: #000;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.1);
        }

        .card-title {
            color: #007bff;
            font-weight: bold;
        }

        .text-muted {
            color: #aaa !important;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 500;
        }

        /* Team memers start */
        .your-team {
            background-color: #000;
        }

        .flip-card {
            perspective: 1000px;
            height: 200px;
            /* Adjust height as needed */
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 15px;
        }

        .flip-card-front {
            background-color: #333;
            color: white;
        }

        .flip-card-back {
            background-color: #007bff;
            color: white;
            transform: rotateY(180deg);
        }

        .card-title {
            color: #007bff;
            font-weight: bold;
        }

        .text-muted {
            color: #aaa !important;
        }

        /* FOOTER START */
        .footer {
            background-color: #000;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #0056b3;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        .footer .list-inline-item {
            margin: 0 10px;
        }

        .footer .list-inline-item a {
            color: #fff;
            transition: color 0.3s ease;
        }

        .footer .list-inline-item a:hover {
            color: #007bff;
        }
        /* FOOTER END */
    </style>
</head>

<body>

    <!-- NAVBAR START -->
     <x-navbar></x-navbar>
    <!-- NAVBAR END -->




    <!-- HERO SECTION START -->
    <section class="hero-section">
        <div class="slideshow">
            <div class="slide" style="background-image: url('images/JME-Landing.jpg');"></div>
            <div class="slide" style="background-image: url('images/320 Arriving.jpg');"></div>
            <div class="slide" style="background-image: url('images/1495269835_n602ff2.jpg');"></div>
        </div>

        <div class="hero-content">
            <h1 class="display-4 fw-bold">Welcome to Air Jamaica Virtual</h1>
            <p class="lead">Experience the future of virtual aviation.</p>
            <a href="#" class="btn btn-primary btn-lg mt-3">Book a Flight</a>
            <a href="#" class="btn btn-secondary btn-lg mt-3">Book a Flight</a>
        </div>
    </section>
    <!-- HERO SECTION END -->


    <!-- ABOUT US SECTION START -->
    <section class="about-us py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <img src="{{ asset('images/320 Arriving.jpg') }}" alt="About Us" class="img-fluid rounded shadow">

                </div>


                <div class="col-md-6">
                    <h2 class="display-4 mb-4">About Us</h2>
                    <p class="lead">
                        <i class="fas fa-plane me-2"></i> Air Jamaica Virtual Airlines is a vibrant community of pilots who fly online on the VATSIM Network.
                    </p>
                    <p>
                        <i class="fas fa-map-marked-alt me-2"></i> Whether you're using ESX, Prepar3D, or X-Plane, we welcome you to join our virtual airline and experience the thrill of aviation.
                    </p>
                    <p>
                        As one of the leading virtual airlines in the region, we pride ourselves on providing a realistic and enjoyable flight simulation experience. Our dedicated staff is always here to assist you and make your journey with us unforgettable.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg mt-3"><i class="fas fa-user-plus me-2"></i>Join Now!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT US SECTION END -->


    <!-- LATEST ACTIVITY START -->
    <section class="latest-activity py-5 bg-black text-white">
        <div class="container">
            <h2 class="text-center display-4 mb-5">Latest Activity</h2>

            <!-- Airline Statistics -->
            <div class="row mb-4">
                <div class="col-md-6 mb-4">
                    <div class="card shadow hover-card bg-dark text-white">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Airline Statistics</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><strong>VA Central Rating:</strong> 1</li>
                                        <li><strong>Total Pilots:</strong> 11</li>
                                        <li><strong>Total Hours:</strong> 25,218.20</li>
                                        <li><strong>Total Flights:</strong> 6,360</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><strong>Schedules:</strong> 266</li>
                                        <li><strong>Aircraft In Fleet:</strong> 186</li>
                                        <li><strong>Pending Pilots:</strong> 0</li>
                                        <li><strong>Pilot Recruitment:</strong> <span class="text-success">Open</span></li>
                                        <li><strong>Staff Vacancies:</strong> <span class="text-danger">Closed</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our Newest Pilots -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow hover-card bg-dark text-white">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Our Newest Pilots</h3>
                            <ul class="list-group list-group-flush bg-dark">
                                <li class="list-group-item hover-list-item bg-dark text-white">AJM2723 - Ravi Marshall</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">AJM2710 - Marlon Wright</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">AJM1806 - Paul Archer</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">AJM1856 - Andrew Greaves</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">AJM1802 - Jermaine Johnson</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Crew Online and Recent PIREPs -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow hover-card bg-dark text-white">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Crew Online</h3>
                            <ul class="list-group list-group-flush bg-dark">
                                <li class="list-group-item hover-list-item bg-dark text-white">#8335 - AJM4376 - Marlon Wright</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8334 - AJM4376 - Marlon Wright</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8333 - AJM117 - Stefan Hamilton</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8332 - AJM182 - Craig Reid</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8331 - AJM1230 - Richard Cuneo</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow hover-card bg-dark text-white">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Recent PIREPs</h3>
                            <ul class="list-group list-group-flush bg-dark">
                                <li class="list-group-item hover-list-item bg-dark text-white">#8335 - AJM4376 - Marlon Wright</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8334 - AJM4376 - Marlon Wright</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8333 - AJM117 - Stefan Hamilton</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8332 - AJM182 - Craig Reid</li>
                                <li class="list-group-item hover-list-item bg-dark text-white">#8331 - AJM1230 - Richard Cuneo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Greased Landings Section -->
    <section class="greased-landings py-5 bg-black text-white">
        <div class="container">
            <h2 class="text-center display-4 mb-5">Greased Landings - 2025</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow bg-dark text-white">
                        <div class="card-body">
                            <table class="table table-hover text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Pilot</th>
                                        <th scope="col">Aircraft</th>
                                        <th scope="col">Departure</th>
                                        <th scope="col">Landing Score</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AJM2710 - Marlon Wright</td>
                                        <td>B75C</td>
                                        <td>KSLC</td>
                                        <td><strong>65</strong></td>
                                        <td>01/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>AJM2710 - Marlon Wright</td>
                                        <td>B75C</td>
                                        <td>KSDF</td>
                                        <td><strong>102</strong></td>
                                        <td>01/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>AJM1802 - Jermaine Johnson</td>
                                        <td>A321</td>
                                        <td>MKJS</td>
                                        <td><strong>173</strong></td>
                                        <td>01/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>AJM1827 - Stefan Hamilton</td>
                                        <td>A321</td>
                                        <td>TAPA</td>
                                        <td><strong>174</strong></td>
                                        <td>01/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>AJM1802 - Jermaine Johnson</td>
                                        <td>A321</td>
                                        <td>KBWI</td>
                                        <td><strong>200</strong></td>
                                        <td>01/01/2025</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- LATEST ACTIVITY END -->


    <!-- LATEST NEWS START -->
    <section class="latest-news py-5 bg-black text-white">
        <div class="container-fluid"> <!-- Use container-fluid for full width -->
            <h2 class="text-center display-4 mb-5">Latest News</h2>

            <!-- News Card -->
            <div class="row">
                <div class="col-12"> <!-- Full-width column -->
                    <div class="card shadow hover-card bg-dark text-white">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Bread and Butter!</h3>
                            <p class="text-muted">Posted by Jereme Renford on 07/24/2016</p>
                            <p class="lead">
                                Dear Pilots,
                            </p>
                            <p>
                                Do you have what it takes to land these massive machines like a feather?
                            </p>
                            <p>
                                An award has been created to recognize the skill of our pilots. Pilots who achieve at least one flight with a touchdown rate of <strong>30 feet-per-minute or lower</strong> will receive this award.
                            </p>
                            <p class="mb-0">
                                <strong>Butta Landings!</strong><br>
                                Jereme Renford<br>
                                FM1801<br>
                                Chief Operating Officer<br>
                                Air Jamaica Virtual Airlines & Cargo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LATEST NEWS START -->

    
    <!-- TEAM MEMBERS START -->
    <section class="your-team py-5 bg-black text-white">
        <div class="container">
            <h2 class="text-center display-4 mb-5">Your Team</h2>
            <p class="text-center lead mb-5">Meet the AJVAC Team</p>

            <!-- Team Members -->
            <div class="row">
                <!-- Clayton Clarke -->
                <div class="col-md-3 mb-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <h3 class="card-title">Clayton Clarke</h3>
                                    <p class="text-muted">CEO</p>
                                </div>
                            </div>
                            <div class="flip-card-back card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <p>Air Jamaica Virtual’s CEO and founder.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Craig Reid -->
                <div class="col-md-3 mb-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <h3 class="card-title">Craig Reid</h3>
                                    <p class="text-muted">VP</p>
                                </div>
                            </div>
                            <div class="flip-card-back card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <p>Vice President of Operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jereme Renford -->
                <div class="col-md-3 mb-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <h3 class="card-title">Jereme Renford</h3>
                                    <p class="text-muted">COO</p>
                                </div>
                            </div>
                            <div class="flip-card-back card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <p>Chief Operating Officer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Christopher Magnus -->
                <div class="col-md-3 mb-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <h3 class="card-title">Christopher Magnus</h3>
                                    <p class="text-muted">HRM</p>
                                </div>
                            </div>
                            <div class="flip-card-back card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <p>Human Resources Manager.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jordan Chin -->
                <div class="col-md-3 mb-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <h3 class="card-title">Jordan Chin</h3>
                                    <p class="text-muted">LM</p>
                                </div>
                            </div>
                            <div class="flip-card-back card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <p>Lead Manager.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Richard Cuneo -->
                <div class="col-md-3 mb-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <h3 class="card-title">Richard Cuneo</h3>
                                    <p class="text-muted">ADO</p>
                                </div>
                            </div>
                            <div class="flip-card-back card shadow bg-dark text-white text-center">
                                <div class="card-body">
                                    <p>Assistant Director of Operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM MEMBERS START -->


    <!-- FOOTER START -->
    <footer class="footer py-4 bg-black text-white">
        <div class="container">
            <div class="row align-items-center">
                <!-- Social Media Links -->
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <h5 class="mb-3">Follow Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://facebook.com" target="_blank" class="text-white text-decoration-none">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com" target="_blank" class="text-white text-decoration-none">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com" target="_blank" class="text-white text-decoration-none">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://linkedin.com" target="_blank" class="text-white text-decoration-none">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Email -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <p class="mb-0">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:hr_depk@airjamaicavirtualairlinesandcargo.org" class="text-white text-decoration-none">
                            hr_depk@airjamaicavirtualairlinesandcargo.org
                        </a>
                    </p>
                </div>

                <!-- Copyright -->
                <div class="col-md-4 text-center text-md-end">
                    <p class="mb-0">
                        Copyright © 2025 - Air Jamaica Virtual Powered by phpVMS
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Custom JavaScript for Hamburger Animation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggler = document.querySelector(".navbar-toggler");
            toggler.addEventListener("click", function() {
                this.classList.toggle("active");
            });
        });


        document.addEventListener("DOMContentLoaded", function() {
            let slides = document.querySelectorAll(".slide");
            let index = 0;

            setInterval(() => {
                slides[index].style.opacity = "0";
                index = (index + 1) % slides.length;
                slides[index].style.opacity = "1";
            }, 5000); // Change every 5 seconds
        });
    </script>

</body>

</html>
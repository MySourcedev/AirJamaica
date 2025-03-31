<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About- Air Jamaica Virtual</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        /* Full black background */
        body {
            background-color: black;
            color: white;
            padding-top: 60px;
            /* Add space at the top to prevent content from being hidden behind the navbar */
        }

        /* Navbar */
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

        /* HERO SECTION STYLING START */
        .about-us-hero {
            background-color: #000;
            padding: 100px 0;
        }

        .about-us-hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #007bff;
        }

        .about-us-hero p {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.1rem;
            color: #ddd;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 30px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-outline-light {
            border: 2px solid #fff;
            color: #fff;
            padding: 10px 30px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: #000;
        }

        .img-fluid {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);
        }

        /* HERO SECTION STYLING END */


        /* ABOUT US STYLING START */
        .about-us-section {
            background: url("{{ asset('images/JME-Landing.jpg') }}") no-repeat center center/cover;
            position: relative;
            padding: 100px 0;
        }

        .about-us-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Dark overlay for better text readability */
        }

        .about-us-section .container {
            position: relative;
            z-index: 1;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 20px;
        }

        .breadcrumb-item a {
            color: #007bff;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #fff;
        }

        .about-us-section h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #fff;
        }

        .about-us-section p {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.1rem;
            color: #ddd;
        }

        .btn-glow {
            background-color: #007bff;
            border: none;
            padding: 10px 30px;
            font-size: 1.1rem;
            color: white;
            border-radius: 50px;
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.7);
            transition: all 0.3s ease;
        }

        .btn-glow:hover {
            background-color: #0056b3;
            box-shadow: 0 0 30px rgba(0, 123, 255, 1);
            transform: translateY(-5px);
        }

        /* ABOUT US STYLING END */

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

    <x-navbar></x-navbar>

    <!-- Hero Section for About Us Page start -->
    <section class="about-us-hero py-5 bg-black text-white">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Content -->
                <div class="col-md-6">
                    <h1 class="display-4 mb-4">About Air Jamaica Virtual Airlines</h1>
                    <p class="lead mb-4">
                        Welcome to Air Jamaica Virtual Airlines, where passion meets precision in the world of virtual aviation. Since our inception, we’ve been dedicated to providing an immersive and realistic flight simulation experience for aviation enthusiasts worldwide.
                    </p>
                    <a href="#mission" class="btn btn-primary btn-lg">Our Mission</a>
                    <a href="#history" class="btn btn-outline-light btn-lg ms-3">Our History</a>
                </div>

                <!-- Right Column: Image -->
                <div class="col-md-6">
                    <img src="{{ asset('images/320 Arriving.jpg') }}" alt="About Us" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section for About Us Page end -->


    <!-- About Us Section start -->
    <section class="about-us-section py-5">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                </ol>
            </nav>

            <!-- Content Overlay -->
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="display-4 mb-4 text-white">About Air Jamaica Virtual Airlines</h2>
                    <p class="lead mb-4 text-white">
                        Air Jamaica Virtual Airlines is a virtual airline community of pilots who fly online on the VATSIM Network. In order to join our virtual airline, you must have a copy of Flight Simulator (FS). This can be Microsoft’s Flight Simulator FS2002, FS2004, FSK, or Lockheed Martin’s Prepar3D.
                    </p>
                    <p class="mb-4 text-white">
                        Air Jamaica Virtual Airlines is one of the leading virtual airlines in this region of the world, and we invite you to join our virtual airline. Our staff are always willing to assist you in making your virtual airline and flight simulation experience as enjoyable as possible.
                    </p>
                    <a href="#" class="btn btn-glow btn-lg">Join Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section end -->


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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patners-Air Jamaica Virtual</title>

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

    /* NAVBAR STYLING START */
    .navbar {
        background-color: black;
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
        color: white;
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
        background-color: black;
        border: none;
    }

    /* Dropdown Links */
    .dropdown-menu .dropdown-item {
        color: white;
        transition: 0.3s;
    }

    /* Dropdown Hover Effect */
    .dropdown-menu .dropdown-item:hover {
        background-color: white;
        color: black;
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

    /* PATNERS PAGE START */

    .partners-page {
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

    .card-text {
        font-family: 'Open Sans', sans-serif;
        font-size: 1rem;
        color: #ddd;
    }

    .btn-outline-light {
        border: 2px solid #fff;
        color: #fff;
        padding: 8px 20px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background-color: #fff;
        color: #000;
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

    <!-- Navbar start -->
    <x-navbar></x-navbar>
    <!-- Navbar end -->


    <!-- PATNERS PAGE START -->
    <section class="partners-page py-5 bg-black text-white">
        <div class="container">
            <h2 class="text-center display-4 mb-5">Our Partners</h2>

            <!-- Partners Grid -->
            <div class="row">
                <!-- Partner 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/justhost.png') }}" alt="Partner 1" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Justhost</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/vatsim-logo.jpg') }}" alt="Partner 2" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Vitsim</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/fs.png') }}" alt="Partner 3" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Flight Sim Lab</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/fsl.png') }}" alt="Partner 4" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 4</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/aerosoft.png') }}" alt="Partner 5" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 5</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/pmdg.png') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 7 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/prepar3d.png') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 8 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/fsdt.jpg') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 9 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/rex.png') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 10 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/hifi.png') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 11 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/aivlasoft.png') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 12 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/fs2crew.png') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Partner 13 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg bg-dark text-white hover-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/pmdg.png') }}" alt="Partner 6" class="img-fluid mb-3" style="max-height: 100px;">
                            <h3 class="card-title mb-3">Partner Name 6</h3>
                            <p class="card-text">
                                Partner description goes here. This could be a brief overview of the partnership.
                            </p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- PATNERS PAGE END -->


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
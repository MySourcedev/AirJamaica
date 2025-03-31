<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bids -Air Jamaica Virtual</title>

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


        /* PPPPPPPPPPP */
        .aviation-bids-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Airline-style breadcrumbs */
        .airline-breadcrumbs {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .crumb {
            color: #495057;
            font-weight: 500;
        }

        .crumb.active {
            color: #1a73e8;
            font-weight: 600;
        }

        .crumb-divider {
            margin: 0 8px;
            color: #adb5bd;
        }

        /* Aviation-themed title */
        .aviation-title {
            color: #2c3e50;
            font-size: 28px;
            margin: 10px 0 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .aviation-title i {
            color: #1a73e8;
        }

        /* Aircraft panel-style tabs */
        .aviation-tabs {
            display: flex;
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 20px;
        }

        .tab {
            padding: 12px 20px;
            cursor: pointer;
            color: #6c757d;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 3px solid transparent;
        }

        .tab.active {
            color: #1a73e8;
            border-bottom-color: #1a73e8;
            background-color: #f1f8fe;
        }

        .tab i {
            font-size: 16px;
        }

        /* Flight alert styling */
        .flight-alert {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 4px;
            margin-bottom: 25px;
        }

        .flight-alert.warning {
            background-color: #fff3cd;
            color: #856404;
            border-left: 4px solid #ffc107;
        }

        .alert-icon {
            margin-right: 12px;
            font-size: 18px;
        }

        .alert-content {
            font-weight: 500;
        }

        /* Aviation empty state */
        .aviation-empty-state {
            text-align: center;
            padding: 40px 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
        }

        .empty-icon {
            font-size: 48px;
            color: #dee2e6;
            margin-bottom: 15px;
        }

        .empty-title {
            font-size: 20px;
            color: #495057;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .empty-subtitle {
            color: #6c757d;
            font-size: 15px;
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

    <div class="aviation-bids-container">
        <!-- Header with Airline Styling -->
        <div class="bids-header">
            <div class="airline-breadcrumbs">
                <span class="crumb">Home</span>
                <span class="crumb-divider">></span>
                <span class="crumb">Pilot Center</span>
                <span class="crumb-divider">></span>
                <span class="crumb active">Schedule Bids</span>
            </div>

            <h1 class="aviation-title">
                <i class="fas fa-calendar-alt"></i> Schedule Bids
            </h1>
        </div>

        <!-- Navigation Tabs with Aircraft Panel Styling -->
        <div class="aviation-tabs">
            <div class="tab active">
                <i class="fas fa-list"></i> View Bids
            </div>
            <div class="tab">
                <i class="fas fa-search"></i> Search Schedules
            </div>
        </div>

        <!-- Warning Message as Flight Alert -->
        <div class="flight-alert warning">
            <div class="alert-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="alert-content">
                Bids will only be held in the system for 48 hours
            </div>
        </div>

        <!-- Empty State with Aviation Theme -->
        <div class="aviation-empty-state">
            <div class="empty-icon">
                <i class="fas fa-plane"></i>
            </div>
            <div class="empty-title">NO ACTIVE BIDS</div>
            <div class="empty-subtitle">You haven't placed any bids yet</div>
        </div>
    </div>

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
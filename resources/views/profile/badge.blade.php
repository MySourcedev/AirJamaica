<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile -Air Jamaica Virtual</title>

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

        /* ppppppppppppppp */
        /* Base Styles */
        .aviation-badge-container {
            max-width: 640px;
            margin: 2rem auto;
            font-family: 'Bahnschrift', 'Arial Narrow', sans-serif;
            color: #333;
        }

        /* Breadcrumbs */
        .aviation-breadcrumbs {
            padding: 0.5rem 0;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            color: #5D6D7E;
        }

        .aviation-breadcrumb-item {
            text-transform: uppercase;
            font-weight: 600;
        }

        .aviation-breadcrumb-item.active {
            color: #1A5276;
        }

        .aviation-breadcrumb-divider {
            margin: 0 0.5rem;
            color: #AAB7B8;
        }

        /* Badge Card */
        .aviation-badge-card {
            background: linear-gradient(to bottom, #F9F9F9 0%, #EAEDED 100%);
            border-radius: 8px;
            border: 1px solid #D6DBDF;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        .badge-header {
            background: linear-gradient(to right, #1E3A8A 0%, #1A5276 100%);
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .airline-logo img {
            height: 40px;
        }

        .badge-title {
            font-size: 0.7rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            opacity: 0.8;
        }

        .badge-number {
            font-size: 0.8rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* Badge Content */
        .badge-content {
            display: flex;
            padding: 1.5rem;
            background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
        }

        .pilot-photo {
            flex: 0 0 160px;
            margin-right: 1.5rem;
            position: relative;
        }

        .photo-frame {
            width: 150px;
            height: 180px;
            border: 3px solid #1E3A8A;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .photo-frame img {
            max-width: 100%;
            max-height: 100%;
        }

        .security-strip {
            background: #E74C3C;
            color: white;
            padding: 0.3rem;
            text-align: center;
            font-size: 0.6rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 0.5rem;
        }

        .pilot-info {
            flex: 1;
        }

        .pilot-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A5276;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .pilot-rank,
        .pilot-base {
            font-size: 0.9rem;
            color: #5D6D7E;
            margin-bottom: 0.3rem;
            text-transform: uppercase;
        }

        .pilot-stats {
            display: flex;
            margin-top: 1.5rem;
            gap: 1rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            background: white;
            padding: 0.8rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        .stat-icon {
            font-size: 1.5rem;
            margin-right: 0.8rem;
            color: #1E3A8A;
        }

        .stat-value {
            font-size: 1.2rem;
            font-weight: bold;
            color: #1A5276;
        }

        .stat-label {
            font-size: 0.7rem;
            color: #7F8C8D;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Signature Area */
        .signature-area {
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px dashed #BDC3C7;
        }

        .signature-title {
            font-size: 0.7rem;
            color: #7F8C8D;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .signature-image img {
            height: 40px;
            max-width: 200px;
        }

        .signature-barcode {
            margin-top: 0.5rem;
            font-family: monospace;
            letter-spacing: 2px;
            color: #5D6D7E;
        }

        /* Badge Footer */
        .badge-footer {
            background: #EAECEE;
            padding: 0.8rem 1.5rem;
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #5D6D7E;
        }

        .validity {
            font-weight: bold;
        }

        .watermark {
            opacity: 0.7;
        }

        /* Share Section */
        .share-section {
            margin-top: 2rem;
            background: white;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .share-title {
            font-size: 1rem;
            color: #1A5276;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            text-align: center;
        }

        .share-options {
            display: flex;
            gap: 1rem;
        }

        .share-option {
            flex: 1;
        }

        .share-option label {
            display: block;
            font-size: 0.8rem;
            color: #5D6D7E;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
        }

        .code-container {
            background: #F8F9F9;
            border: 1px solid #EAEDED;
            padding: 0.8rem;
            border-radius: 3px;
            font-family: monospace;
            font-size: 0.8rem;
            word-break: break-all;
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


    <div class="aviation-badge-container">
        <!-- Navigation Header -->
        <div class="aviation-breadcrumbs">
            <span class="aviation-breadcrumb-item">Home</span>
            <span class="aviation-breadcrumb-divider">›</span>
            <span class="aviation-breadcrumb-item">Pilot Center</span>
            <span class="aviation-breadcrumb-divider">›</span>
            <span class="aviation-breadcrumb-item active">Flight Crew Badge</span>
        </div>

        <!-- Main Badge Card -->
        <div class="aviation-badge-card">
            <!-- Badge Header -->
            <div class="badge-header">
                <div class="airline-logo">
                    <img src="https://via.placeholder.com/80x40/1E3A8A/FFFFFF?text=AJVA" alt="Air Jamaica Virtual">
                </div>
                <div class="badge-title">OFFICIAL FLIGHT CREW IDENTIFICATION</div>
                <div class="badge-number">ID: AM1167</div>
            </div>

            <!-- Badge Content -->
            <div class="badge-content">
                <!-- Pilot Photo -->
                <div class="pilot-photo">
                    <div class="photo-frame">
                        <img src="https://via.placeholder.com/150/1E3A8A/FFFFFF?text=CC" alt="Pilot Photo">
                    </div>
                    <div class="security-strip">
                        <span class="strip-text">SECURITY CLEARANCE VERIFIED</span>
                    </div>
                </div>

                <!-- Pilot Info -->
                <div class="pilot-info">
                    <div class="pilot-name">CAPT. CLAYTON CLARKE</div>
                    <div class="pilot-rank">SENIOR LONG RANGE CAPTAIN</div>
                    <div class="pilot-base">MONTE GO BAY STATION (MKS)</div>

                    <div class="pilot-stats">
                        <div class="stat-item">
                            <div class="stat-icon">✈️</div>
                            <div class="stat-content">
                                <div class="stat-value">3,590.61</div>
                                <div class="stat-label">TOTAL HOURS</div>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">💰</div>
                            <div class="stat-content">
                                <div class="stat-value">$317,552</div>
                                <div class="stat-label">CAREER EARNINGS</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Signature Area -->
                <div class="signature-area">
                    <div class="signature-title">AUTHORIZED SIGNATURE</div>
                    <div class="signature-image">
                        <img src="https://airjamalcavirtualairlinesandcargo.org/lib/signatures/AJM1167.png" alt="Pilot Signature">
                    </div>
                    <div class="signature-barcode">
                        <span class="barcode">✧✧✧ AJVA-1167-CC ✧✧✧</span>
                    </div>
                </div>
            </div>

            <!-- Badge Footer -->
            <div class="badge-footer">
                <div class="validity">VALID THRU: 12/2025</div>
                <div class="watermark">AIR JAMAICA VIRTUAL</div>
            </div>
        </div>

        <!-- Share Section -->
        <div class="share-section">
            <h3 class="share-title">SHARE YOUR BADGE</h3>
            <div class="share-options">
                <div class="share-option">
                    <label>Direct Link</label>
                    <div class="code-container">
                        <code>&lt;img src="https://airjamalcavirtualairlinesandcargo.org/lib/signatures/AJM1167.png" /&gt;</code>
                    </div>
                </div>
                <div class="share-option">
                    <label>BBCode</label>
                    <div class="code-container">
                        <code>[img]https://airjamalcavirtualairlinesandcargo.org/lib/signatures/AJM1167.png[/img]</code>
                    </div>
                </div>
            </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration -Air Jamaica Virtual</title>
</head>

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

    

    .registration-container {
        background-color: #1a1a1a;
        padding: 2rem;
        border-radius: 10px;
        margin-top: 5rem;
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);
    }

    .form-control {
        background-color: #333;
        color: #fff;
        border: 1px solid #555;
    }

    .form-control:focus {
        background-color: #444;
        color: #fff;
        border-color: #777;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #ff6600;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #e65c00;
    }

    .requirements {
        background-color: #222;
        padding: 1rem;
        border-radius: 5px;
        margin-top: 1rem;
    }

    .requirements ul {
        list-style-type: none;
        padding-left: 0;
    }

    .requirements ul li {
        margin-bottom: 0.5rem;
    }

    .support-link {
        color: #ff6600;
        text-decoration: none;
    }

    .support-link:hover {
        text-decoration: underline;
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

<body>

    <!-- Navbar start -->
    <x-navbar></x-navbar>
    <!-- Navbar end -->


    <!-- REGISTRATION START -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="registration-container">
                    <h2 class="text-center mb-4">Create Pilot Account</h2>
                    <p class="text-center">Welcome! Please remember to add your VATSIM ID when registering.</p>
                    <form>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail Address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Re-enter Password</label>
                            <input type="password" class="form-control" id="confirmPassword">
                        </div>
                        <div class="mb-3">
                            <label for="airline" class="form-label">Select Airline *</label>
                            <select class="form-select" id="airline" required>
                                <option value="AJM">AJM - Air Jamaica</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hub" class="form-label">Select Hub *</label>
                            <select class="form-select" id="hub" required>
                                <option value="MKJP">MKJP - Norman Manley International</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location *</label>
                            <select class="form-select" id="location" required>
                                <option value="Afghanistan">Afghanistan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="vatsimID" class="form-label">VATSIM ID *</label>
                            <input type="text" class="form-control" id="vatsimID" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">I agree to the <a href="#" class="support-link">terms and conditions</a> of Air Jamaica Virtual Airlines and Cargo.</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                    <div class="requirements mt-4">
                        <h5>Requirements:</h5>
                        <ul>
                            <li>Provide your real name (no nicknames or numbers).</li>
                            <li>Have a valid email account.</li>
                            <li>Possess a valid copy of MS Flight Simulator 9, X, or Prepar3D.</li>
                            <li>Have a valid VATSIM ID account.</li>
                            <li>Be willing to comply with all rules and regulations.</li>
                        </ul>
                    </div>
                    <p class="text-center mt-3">Already have an account? <a href="#" class="support-link">Sign In</a></p>
                    <p class="text-center mt-2">📞 Support: <a href="mailto:hr@airjamaicava.com" class="support-link">Human Resources</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- REGISTRATION END -->



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
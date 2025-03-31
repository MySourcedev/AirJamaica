<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- Air Jamaica Virtual</title>

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
        color: white !important;
        transition: 0.3s;
    }

    /* Dropdown Hover Effect */
    .dropdown-menu .dropdown-item:hover {
        background-color: white;
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

    /* LOGIN SECTION START */
    .login-page {
        background-color: #000;
    }

    .card {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(255, 255, 255, 0.1);
    }

    .form-control {
        background-color: #333;
        border: 1px solid #555;
        color: #fff;
    }

    .form-control:focus {
        background-color: #444;
        color: #fff;
        border-color: #007bff;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 30px;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-outline-light {
        border: 2px solid #fff;
        color: #fff;
        padding: 12px 30px;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background-color: #fff;
        color: #000;
    }

    .form-check-input {
        background-color: #333;
        border: 1px solid #555;
    }

    .form-check-input:checked {
        background-color: #007bff;
        border-color: #007bff;
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

    <!-- LOGIN SECTION START -->
    <section class="login-page py-5 bg-black text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Login Card -->
                    <div class="card shadow-lg bg-dark text-white">
                        <div class="card-body p-5">
                            <!-- Logo -->
                            <div class="text-center mb-4">
                                <img src="{{ asset('images/320 Arriving.jpg') }}" alt="Air Jamaica Virtual Airlines" class="img-fluid mb-3" style="max-height: 80px;">
                                <h2 class="h4">Crew Sign In</h2>
                            </div>
                            @if($errors->has('auth'))
    <div class="alert alert-danger mb-4">
        {{ $errors->first('auth') }}
    </div>
@endif

<!-- Login Form -->
<form method="post" action="{{ route('login') }}">
    @csrf
    <!-- Pilot ID/Email -->
    <div class="mb-4">
        <label for="pilotId" class="form-label">Pilot ID/E-mail Address</label>
        <input name="VATSIM_ID_Email" type="text" 
               class="form-control bg-dark text-white border-secondary @error('VATSIM_ID_Email') is-invalid @enderror" 
               id="pilotId" 
               placeholder="Enter your Pilot ID or E-mail"
               value="{{ old('VATSIM_ID_Email') }}">
        @error('VATSIM_ID_Email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" 
               class="form-control bg-dark text-white border-secondary @error('password') is-invalid @enderror" 
               id="password" 
               placeholder="Enter your password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="mb-4 form-check">
        <input name="remember" type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember Me</label>
    </div>

    <!-- Sign In Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg">SIGN IN</button>
    </div>
</form>

                            <!-- Forgot Password Link -->
                            <div class="text-center mt-4">
                                <a href="#forgot-password" class="text-white text-decoration-none" data-bs-toggle="collapse">Forgot Password?</a>
                            </div>
                        </div>
                    </div>

                    <!-- Forgot Password Card (Collapsible) -->
                    <div class="collapse mt-4" id="forgot-password">
                        <div class="card shadow-lg bg-dark text-white">
                            <div class="card-body p-5">
                                <h3 class="h4 text-center mb-4"><a href="{{ route('forgotpassword.index') }}">Forgot Password?</a></h3>
                                <p class="text-center mb-4">
                                    Forgot your password? Let us reset that for you or contact our Human Resource Manager for further assistance.
                                </p>
                                <form>
                                    <!-- Email Address -->
                                    <div class="mb-4">
                                        <label for="email" class="form-label">E-mail Address</label>
                                        <input type="email" class="form-control bg-dark text-white border-secondary" id="email" placeholder="Enter your E-mail Address">
                                    </div>

                                    <!-- Request New Password Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-outline-light btn-lg">REQUEST NEW PASSWORD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LOGIN SECTION END -->

    <hr>

    <x-footer></x-footer>
    <x-error></x-error>


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
    <x-error></x-error>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubs- Air Jamaica Virtual</title>

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

        /* PPPPPPPPP */
        :root {
            --bg-dark: #121212;
            --card-dark: #1e1e1e;
            --text-light: #f8f9fa;
            --text-muted: #adb5bd;
            --accent-green: #28a745;
            /* Air Jamaica green */
            --border-dark: #333;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-card {
            background-color: var(--card-dark);
            border-radius: 8px;
            border: 1px solid var(--border-dark);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        }

        .form-header {
            border-bottom: 1px solid var(--border-dark);
        }

        .form-control,
        .form-select {
            background-color: var(--bg-dark);
            border: 1px solid var(--border-dark);
            color: var(--text-light);
        }

        .form-control:focus,
        .form-select:focus {
            background-color: var(--bg-dark);
            color: var(--text-light);
            border-color: var(--accent-green);
            box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.25);
        }

        .btn-success {
            background-color: var(--accent-green);
            border: none;
            padding: 10px 24px;
            font-weight: 600;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
        }

        .breadcrumb-item a {
            color: var(--text-muted);
            text-decoration: none;
        }

        .foote {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* PPPP */
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


    <div class="container py-5">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pilot Center</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leave of Absence Request</li>
            </ol>
        </nav>

        <!-- Form Card -->
        <div class="form-card p-4 mb-4">
            <div class="form-header pb-3 mb-4">
                <h2><i class="fas fa-calendar-alt me-2"></i>Leave of Absence Request</h2>
                <p class="text-muted">Before submitting, please read our LoA policy in the <a href="#" class="text-decoration-none">Policy And Operations Manual</a>.</p>
            </div>

            <!-- Pilot Information Section -->
            <div class="mb-5">
                <h4 class="mb-4"><i class="fas fa-user-circle me-2"></i>Your Information</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" value="Clayton" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="Clarke" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="electricclay2000@yahoo.com" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pilot ID</label>
                        <input type="text" class="form-control" value="AJM1167" readonly>
                    </div>
                </div>
            </div>

            <!-- LoA Information Section -->
            <div class="mb-5">
                <h4 class="mb-4"><i class="fas fa-info-circle me-2"></i>LoA Information</h4>
                <div class="alert alert-dark mb-4">
                    <i class="fas fa-exclamation-circle me-2"></i>The LoA starts on submission date and ends on your selected date (maximum duration applies). After this period, standard inactivity policies will resume.
                </div>

                <form action="{{ route('store.leaveofabsence') }}" method="post">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Start Date</label>
            <input name="start_date" type="date" class="form-control" value="2025-03-29" readonly>
        </div>
        <div class="col-md-6">
            <label class="form-label">End Date</label>
            <input name="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" required>
            @error('end_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Reason for Leave</label>
            <textarea name="reason" class="form-control @error('reason') is-invalid @enderror" rows="3" placeholder="Please specify your reason..." required></textarea>
            @error('reason')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-success px-4 py-2">
            <i class="fas fa-paper-plane me-2"></i>SUBMIT REQUEST
        </button>
    </div>
</form>
            </div>

            <!-- Submit Button -->
        </div>

        <!-- Footer -->
        <div class="foote text-center py-3">
            © 2025 Air Jamaica Virtual Airlines and Cargo - All rights reserved
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
    </div>










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
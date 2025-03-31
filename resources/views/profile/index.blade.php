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

        /* PPP */
        :root {
            --bg-dark: #0a0a0a;
            --card-dark: #1a1a1a;
            --border-dark: #2e2e2e;
            --text-primary: #ffffff;
            --text-secondary: #cccccc;
            --accent-blue: #4dabf7;
            --accent-light: rgba(77, 171, 247, 0.1);
        }

        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Segoe UI', system-ui, sans-serif;
            line-height: 1.6;
        }

        .profile-card {
            background: var(--card-dark);
            border: 1px solid var(--border-dark);
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .stat-card {
            background: rgba(40, 40, 40, 0.8);
            border-left: 3px solid var(--accent-blue);
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            background: rgba(50, 50, 50, 0.9);
        }

        .nav-tabs {
            border-bottom: 1px solid var(--border-dark);
        }

        .nav-tabs .nav-link {
            color: var(--text-secondary);
            border: none;
            padding: 12px 20px;
            font-weight: 500;
        }

        .nav-tabs .nav-link.active {
            color: var(--accent-blue);
            background: transparent;
            border-bottom: 2px solid var(--accent-blue);
        }

        .btn-ghost {
            border: 1px solid var(--border-dark);
            color: var(--text-primary);
            transition: all 0.3s;
            padding: 8px 16px;
            border-radius: 8px;
        }

        .btn-ghost:hover {
            background: var(--accent-light);
            border-color: var(--accent-blue);
            color: var(--accent-blue);
        }

        .btn-primary {
            background-color: var(--accent-blue);
            border-color: var(--accent-blue);
            color: #111;
            font-weight: 600;
        }

        .award-badge {
            width: 42px;
            height: 42px;
            background: rgba(77, 171, 247, 0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
        }

        .breadcrumb-item a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb-item a:hover {
            color: var(--accent-blue);
        }

        .breadcrumb-item.active {
            color: var(--text-primary);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
        }

        .text-label {
            color: var(--text-secondary);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .text-value {
            color: var(--text-primary);
            font-weight: 600;
        }

        .btn-action-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .btn-action {
            flex: 1 1 200px;
        }

        /* Request links styling */
        .request-link {
            display: flex;
            align-items: center;
            padding: 12px 0;
            color: var(--text-primary);
            text-decoration: none;
            transition: all 0.2s;
            border-bottom: 1px solid var(--border-dark);
        }

        .request-link:last-child {
            border-bottom: none;
        }

        .request-link:hover {
            color: var(--accent-blue);
            padding-left: 5px;
        }

        .request-link .status {
            width: 18px;
            height: 18px;
            border: 2px solid var(--text-secondary);
            border-radius: 4px;
            margin-right: 15px;
            position: relative;
        }

        .request-link.completed .status {
            background-color: var(--accent-blue);
            border-color: var(--accent-blue);
        }

        .request-link.completed .status:after {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: white;
            position: absolute;
            font-size: 10px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Download links styling */
        .download-link {
            display: block;
            color: var(--text-primary);
            text-decoration: none;
            transition: all 0.3s;
            text-align: center;
            padding: 20px 10px;
            border-radius: 8px;
        }

        .download-link:hover {
            background: rgba(77, 171, 247, 0.1);
            transform: translateY(-3px);
        }

        .download-icon {
            font-size: 2rem;
            color: var(--accent-blue);
            margin-bottom: 10px;
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


    <div class="container py-4">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pilot-center') }}">AJVAC Pilot Center</a></li>
                <li class="breadcrumb-item active">{{ $user->f_name.' '.$user->l_name }}</li>
            </ol>
        </nav>

        <!-- Profile Header Section -->
        <div class="profile-card p-4 mb-4">
            <div class="d-flex align-items-center mb-4">
                <div class="position-relative me-4">
                    <img src="{{ asset('/storage/'.$user->Avatar) }}" class="rounded-circle border border-secondary" width="90" alt="Pilot Avatar">
                    <span class="position-absolute bottom-0 end-0 bg-success rounded-circle p-1 border border-2 border-dark"></span>
                </div>
                <div>
                    <h2 class="mb-1">{{ $user->f_name.' '.$user->l_name }}</h2>
                    <p class="text-accent-blue mb-0">
                        <i class="fas fa-star me-1"></i> Senior Long Range Captain
                        <span class="text-secondary ms-2">| AJM1167</span>
                    </p>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="row g-3">
                <div class="col-md-3 col-6">
                    <div class="stat-card p-3 rounded h-100">
                        <p class="text-label mb-1">FLIGHTS</p>
                        <h3 class="text-value mb-0">425</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card p-3 rounded h-100">
                        <p class="text-label mb-1">HOURS</p>
                        <h3 class="text-value mb-0">2,553.21</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card p-3 rounded h-100">
                        <p class="text-label mb-1">EARNINGS</p>
                        <h3 class="text-value mb-0">v$ 317,552</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card p-3 rounded h-100">
                        <p class="text-label mb-1">HUB</p>
                        <h3 class="text-value mb-0">MKJ5</h3>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="btn-action-group mt-4">
                <a href="#" class="btn btn-ghost btn-action">
                    <i class="fas fa-envelope me-2"></i>View Air Mail
                </a>
                <a href="{{ url('/edit/' . $user->id) }} " class="btn btn-ghost btn-action">
                    <i class="fas fa-user-edit me-2"></i>Edit Profile
                </a>
                <a href="{{ url('/changepassword') }}" class="btn btn-ghost btn-action">
                    <i class="fas fa-key me-2"></i>Change Password
                </a>
            </div>
        </div>

        <!-- PILOT REQUESTS SECTION (Now with links) -->
        <div class="profile-card p-4 mb-4">
            <h4 class="mb-3 text-accent-blue">
                <i class="fas fa-clipboard-list me-2"></i>Pilot Requests
            </h4>

            <a href="{{ route('create.leaveofabsence') }}" class="request-link">
                <span class="status"></span>
                Leave of Absence Request
            </a>

            <a href="{{ route('create.hubtransfer') }}" class="request-link completed">
                <span class="status"></span>
                Hub Transfer Request
            </a>
        </div>

        <!-- DOWNLOADS SECTION (Now with links) -->
        <div class="profile-card p-4 mb-4">
            <h4 class="mb-4 text-accent-blue">
                <i class="fas fa-download me-2"></i>Downloads
            </h4>

            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <a href="#" class="download-link">
                        <i class="fas fa-book download-icon"></i>
                        <h6>AJVAC Ops Manual</h6>
                    </a>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <a href="#" class="download-link">
                        <i class="fas fa-clipboard-check download-icon"></i>
                        <h6>Pirep Criteria</h6>
                    </a>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <a href="#" class="download-link">
                        <i class="fas fa-plane download-icon"></i>
                        <h6>SmartCARS V2</h6>
                    </a>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <a href="#" class="download-link">
                        <i class="fas fa-file-alt download-icon"></i>
                        <h6>smartCARS Manual</h6>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tab Navigation -->
        <ul class="nav nav-tabs mb-3" id="profileTabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#overview">
                    <i class="fas fa-user-circle me-2"></i>Overview
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#awards">
                    <i class="fas fa-trophy me-2"></i>Awards
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#actions">
                    <i class="fas fa-bolt me-2"></i>Actions
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Overview Tab -->
            <div class="tab-pane fade show active" id="overview">
                <div class="profile-card p-4 mb-4">
                    <h5 class="mb-4 text-accent-blue">
                        <i class="fas fa-info-circle me-2"></i>Pilot Details
                    </h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p class="text-label mb-1">PILOT ID</p>
                            <p class="text-value">{{ $user->VATSIM_ID }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <p class="text-label mb-1">LOCATION</p>
                            <p class="text-value">{{ $user->location }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <p class="text-label mb-1">DATE JOINED</p>
                            <p class="text-value">{{ $user->created_at->format('Y-m-d') }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <p class="text-label mb-1">LAST FLIGHT</p>
                            <p class="text-value">AJM1167 (KLBB)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Awards Tab -->
            <div class="tab-pane fade" id="awards">
                <div class="profile-card p-4">
                    <h5 class="mb-4 text-accent-blue">
                        <i class="fas fa-trophy me-2"></i>Achievements
                    </h5>
                    <div class="d-flex align-items-center mb-3">
                        <div class="award-badge me-3">
                            <i class="fas fa-medal text-accent-blue"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-value">500 Flight Hours</h6>
                            <small class="text-secondary">Achieved January 2023</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="award-badge me-3">
                            <i class="fas fa-medal text-accent-blue"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-value">1000 Flight Hours</h6>
                            <small class="text-secondary">Achieved August 2023</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions Tab -->
            <div class="tab-pane fade" id="actions">
                <div class="profile-card p-4">
                    <h5 class="mb-4 text-accent-blue">
                        <i class="fas fa-bolt me-2"></i>Quick Actions
                    </h5>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('pireps') }}" class="btn btn-ghost flex-grow-1">
                            <i class="fas fa-file-alt me-2"></i>View Pireps
                        </a>
                        <a href="{{ route('routemap') }}" class="btn btn-ghost flex-grow-1">
                            <i class="fas fa-map-marked-alt me-2"></i>Flight Map
                        </a>
                        <a href="{{ route('badge') }}" class="btn btn-ghost flex-grow-1">
                            <i class="fas fa-id-card me-2"></i>View Badge
                        </a>
                        <a href="{{ route('stats') }}" class="btn btn-ghost flex-grow-1">
                            <i class="fas fa-chart-bar me-2"></i>View Stats
                        </a>
                        <a href="{{ route('schedules') }}" class="btn btn-ghost flex-grow-1">
                            <i class="fas fa-calendar-alt me-2"></i>Schedules
                        </a>
                        <a href="{{ route('bids') }}" class="btn btn-ghost flex-grow-1">
                            <i class="fas fa-gavel me-2"></i>View Bids
                        </a>
                        <a href="{{  route('create.filepireps') }}" class="btn btn-primary flex-grow-1">
                            <i class="fas fa-upload me-2"></i>File Manual Pirep
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <x-footer></x-footer>
    <x-success></x-success>

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
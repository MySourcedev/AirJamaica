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

        /* PPPPPPPP */
        :root {
            --bg-dark: #0C121D;
            --card-dark: #1A2232;
            --border-dark: #2D3A4D;
            --text-primary: #F0F4FF;
            --text-secondary: #A3B3CC;
            --accent-blue: #3D8BFF;
            --accent-gold: #FFC107;
            --aviation-gradient: linear-gradient(135deg, #1E3B70 0%, #3D8BFF 100%);
            --success: #28a745;
            --danger: #dc3545;
        }

        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            background-image:
                radial-gradient(circle at 15% 50%, rgba(29, 78, 137, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 85% 30%, rgba(61, 139, 255, 0.1) 0%, transparent 25%);
        }

        .terms-container {
            max-width: 700px;
            margin: 3rem auto;
        }

        .terms-card {
            background: var(--card-dark);
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--border-dark);
        }

        .terms-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .terms-header::after {
            content: "";
            display: block;
            width: 100px;
            height: 3px;
            background: var(--aviation-gradient);
            margin: 1.5rem auto 0;
            border-radius: 3px;
        }

        .term-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1.5rem;
            border-left: 2px solid rgba(61, 139, 255, 0.3);
            transition: all 0.3s;
        }

        .term-item:hover {
            border-left-color: var(--accent-blue);
        }

        .term-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 24px;
            height: 24px;
            background: var(--accent-blue);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.8rem;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .btn-accept {
            background: var(--success);
            border: none;
            padding: 0.8rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 8px;
            transition: all 0.3s;
            min-width: 150px;
        }

        .btn-accept:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
        }

        .btn-decline {
            background: var(--danger);
            border: none;
            padding: 0.8rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 8px;
            transition: all 0.3s;
            min-width: 150px;
        }

        .btn-decline:hover {
            background: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
        }

        .confirmation-text {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .smartcars-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(61, 139, 255, 0.15);
            color: var(--accent-blue);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }

        .smartcars-badge::before {
            content: "✈";
            margin-right: 0.3rem;
        }

        @media (max-width: 768px) {
            .terms-container {
                padding: 0 1rem;
            }

            .terms-card {
                padding: 1.5rem;
            }

            .action-buttons {
                flex-direction: column;
                gap: 1rem;
            }
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



    <div class="terms-container">
        <div class="terms-card">
            <div class="terms-header">
                <h2><i class="fas fa-file-signature me-2"></i>Joining Procedure</h2>
                <p class="text-secondary">Thank you for your interest in joining Air Jamaica Virtual Airlines and Cargo</p>
            </div>

            <p class="mb-4">To complete your application, please review and accept our Terms of Service:</p>

            <div class="term-item">
                <div class="term-number">1</div>
                <p>Air Jamaica Virtual uses <strong>SmartCars <span class="smartcars-badge">Required</span></strong> to manage our operations. You will need to download and install this client.</p>
            </div>

            <div class="term-item">
                <div class="term-number">2</div>
                <p>As a member of our community, you must show respect to all pilots (both within our VA and other VAs) and all members of the virtual flight community.</p>
            </div>

            <div class="term-item">
                <div class="term-number">3</div>
                <p>Your first flight must be completed within <strong>7 days</strong> of your account activation.</p>
            </div>

            <div class="term-item">
                <div class="term-number">4</div>
                <p>You must complete at least <strong>two flights per month</strong> to remain on the active roster.</p>
            </div>

            <div class="confirmation-text">
                <p>By selecting "Accept" below, you agree to be bound by these Terms of Service.</p>
            </div>

            <div class="action-buttons">
                <button class="btn btn-accept">
                    <a href="{{ route('registration') }}">
                      <i class="fas fa-check-circle me-2"></i>Accept  
                    </a>
                </button>
                <button class="btn btn-decline">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-times-circle me-2"></i>No Thanks
                    </a>
                    
                </button>
            </div>

            <div class="confirmation-text mt-4">
                <p><i class="fas fa-envelope me-2"></i>After submission, monitor your email for account setup instructions. We look forward to flying with you!</p>
            </div>
        </div>
    </div>


    <!-- FOOTER START -->
     <x-footer></x-footer>
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

    <script>
        // Animate term items on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const terms = document.querySelectorAll('.term-item');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateX(0)';
                    }
                });
            }, {
                threshold: 0.1
            });

            terms.forEach(term => {
                term.style.opacity = 0;
                term.style.transform = 'translateX(-20px)';
                term.style.transition = 'opacity 0.4s ease, transform 0.4s ease, border-left-color 0.3s ease';
                observer.observe(term);
            });
        });
    </script>

</body>

</html>
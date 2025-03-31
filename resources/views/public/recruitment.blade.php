<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment -Air Jamaica Virtual</title>

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

        /* PPPPPPPPP */
        :root {
            --bg-dark: #0C121D;
            --card-dark: #1A2232;
            --border-dark: #2D3A4D;
            --text-primary: #F0F4FF;
            --text-secondary: #A3B3CC;
            --accent-blue: #3D8BFF;
            --accent-gold: #FFC107;
            --aviation-gradient: linear-gradient(135deg, #1E3B70 0%, #3D8BFF 100%);
            --warning: rgba(220, 53, 69, 0.2);
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
        
        .recruitment-container {
            max-width: 1000px;
            margin: 3rem auto;
            overflow: hidden;
        }
        
        .header-card {
            background: var(--aviation-gradient);
            border-radius: 16px;
            padding: 3rem 2rem;
            text-align: center;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(29, 78, 137, 0.5);
            position: relative;
            overflow: hidden;
        }
        
        .header-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover;
            opacity: 0.15;
            mix-blend-mode: overlay;
        }
        
        .requirement-card {
            background: var(--card-dark);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--accent-blue);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .requirement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        .policy-card {
            border-left: 4px solid #DC3545;
            background: rgba(26, 34, 50, 0.7);
        }
        
        .requirement-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
        }
        
        .requirement-item::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.6em;
            width: 12px;
            height: 12px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%233D8BFF'%3E%3Cpath d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z'/%3E%3C/svg%3E") no-repeat center;
        }
        
        .policy-item::before {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23DC3545'%3E%3Cpath d='M11 15h2v2h-2zm0-8h2v6h-2zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z'/%3E%3C/svg%3E") no-repeat center;
        }
        
        .note-box {
            background: var(--warning);
            border-radius: 8px;
            padding: 1.5rem;
            margin: 2rem 0;
            border-left: 4px solid #DC3545;
        }
        
        .vatsim-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(61, 139, 255, 0.15);
            color: var(--accent-blue);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }
        
        .vatsim-badge::before {
            content: "✓";
            margin-right: 0.3rem;
        }
        
        .apply-btn {
            background: var(--aviation-gradient);
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 50px;
            color: white;
            box-shadow: 0 4px 15px rgba(61, 139, 255, 0.4);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .apply-btn::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(255,255,255,0.1), rgba(255,255,255,0.1));
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .apply-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(61, 139, 255, 0.5);
        }
        
        .apply-btn:hover::after {
            opacity: 1;
        }
        
        h1, h2, h3 {
            font-weight: 700;
        }
        
        .subheading {
            color: rgba(240, 244, 255, 0.8);
            font-size: 1.2rem;
            margin-top: 1rem;
        }
        
        .section-icon {
            background: rgba(61, 139, 255, 0.1);
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--accent-blue);
        }
        
        .breadcrumb {
            --bs-breadcrumb-divider: "›";
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }
        
        .breadcrumb-item a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .breadcrumb-item a:hover {
            color: var(--accent-blue);
        }
        
        @media (max-width: 768px) {
            .header-card {
                padding: 2rem 1rem;
            }
            
            .requirement-card {
                padding: 1.5rem;
            }
        }
    </style>

</head>

<body>

    <!-- Navbar start -->
    <x-navbar></x-navbar>
    <!-- Navbar end -->



    <!-- Requirements Section -->
    <div class="requirement-card">
            <div class="d-flex align-items-center mb-4">
                <div class="section-icon">
                    <i class="fas fa-clipboard-check fa-lg"></i>
                </div>
                <h2 class="mb-0">Minimum Requirements</h2>
            </div>
            
            <p class="mb-4">To qualify for membership, pilots must meet these essential criteria:</p>
            
            <div class="requirement-item">Possess Flight Simulator 2004, FSX, FSX SE or Prepar3D</div>
            <div class="requirement-item">Registered with <strong>VATSIM <span class="vatsim-badge">Required</span></strong></div>
            <div class="requirement-item">Minimum age of 16 years</div>
            <div class="requirement-item">Ability to fly at least two flights every 30 days</div>
            <div class="requirement-item">Submission of real identity (no nicknames)</div>
            <div class="requirement-item">Commitment to professional conduct</div>
            <div class="requirement-item">Proficiency in written and spoken English</div>
        </div>

        <!-- Online Network Section -->
        <div class="requirement-card">
            <div class="d-flex align-items-center mb-4">
                <div class="section-icon">
                    <i class="fas fa-network-wired fa-lg"></i>
                </div>
                <h2 class="mb-0">Online Network</h2>
            </div>
            
            <div class="requirement-item">We operate using VA Financials on VATSIM network</div>
            <div class="requirement-item"><a href="https://www.vatsim.net" target="_blank" class="text-accent-blue">Register with VATSIM</a> if not already a member</div>
            <div class="requirement-item">Correct network ID must be provided in application</div>
            <div class="requirement-item">Applications with invalid IDs will be rejected</div>
        </div>

        <!-- Activity Policy -->
        <div class="requirement-card policy-card">
            <div class="d-flex align-items-center mb-4">
                <div class="section-icon" style="color: #DC3545; background: rgba(220, 53, 69, 0.1);">
                    <i class="fas fa-exclamation-triangle fa-lg"></i>
                </div>
                <h2 class="mb-0">Activity Policy</h2>
            </div>
            
            <div class="policy-item">30-day active flying policy (2 flights minimum)</div>
            <div class="policy-item">Inactive pilots may be removed without notice</div>
            <div class="policy-item">No leave of absence during first 90 days</div>
            <div class="policy-item">No exceptions to minimum activity requirements</div>
            <div class="policy-item">Inactive status burdens organizational resources</div>
            <div class="policy-item">Reapplications will review past participation</div>
        </div>

        <!-- New Pilots Note -->
        <div class="note-box">
            <div class="d-flex align-items-center mb-3">
                <i class="fas fa-info-circle fa-lg me-2" style="color: #DC3545;"></i>
                <h3 class="mb-0">Critical Notes for New Pilots</h3>
            </div>
            
            <div class="policy-item">First flight must be completed within 7 days of acceptance</div>
            <div class="policy-item">Immediately report system difficulties</div>
            <div class="policy-item">No contact = automatic database removal</div>
            <div class="policy-item">Follow up after 14 days if no response</div>
            <div class="policy-item">No leave permitted in first 90 days</div>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5 pt-3">
            <h2 class="mb-3">Ready for Takeoff?</h2>
            <p class="mb-4" style="max-width: 600px; margin: 0 auto; color: var(--text-secondary);">
                Join a global community of aviation enthusiasts committed to excellence and authentic virtual airline operations.
            </p>
            <a href="{{ route('joiningprocedure') }}" class="apply-btn">
                <i class="fas fa-paper-plane me-2"></i>Begin Application
            </a>
        </div>
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

    <script>
        // Animate cards on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.requirement-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });

            cards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>

</body>

</html>
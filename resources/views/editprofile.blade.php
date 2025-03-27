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


        /* PPP */
        :root {
            --bg-dark: #121212;
            --card-dark: #1e1e1e;
            --border-dark: #333;
            --text-primary: #f5f5f5;
            --text-secondary: #aaa;
            --accent: #3a86ff;
            --accent-light: rgba(58, 134, 255, 0.1);
            --admin-alert: rgba(220, 53, 69, 0.15);
        }
        
        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', system-ui, sans-serif;
        }
        
        .profile-container {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .profile-card {
            background: var(--card-dark);
            border: none;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }
        
        .section-title {
            font-weight: 600;
            color: var(--accent);
            border-bottom: 1px solid var(--border-dark);
            padding-bottom: 8px;
            margin-bottom: 20px;
        }
        
        .form-control, .form-select {
            background: rgba(40, 40, 40, 0.8);
            border: 1px solid var(--border-dark);
            color: var(--text-primary);
            padding: 12px;
            border-radius: 8px;
        }
        
        .form-control:focus, .form-select:focus {
            background: rgba(50, 50, 50, 0.9);
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-light);
        }
        
        .admin-note {
            background: var(--admin-alert);
            border-left: 3px solid #dc3545;
            padding: 10px 15px;
            border-radius: 6px;
            font-size: 0.85rem;
            margin-top: 8px;
        }
        
        .avatar-container {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
        }
        
        .avatar-preview {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--border-dark);
        }
        
        .avatar-upload-btn {
            position: absolute;
            bottom: -10px;
            right: -10px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--accent);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.3);
        }
        
        .file-input {
            display: none;
        }
        
        .save-btn {
            background: var(--accent);
            border: none;
            padding: 12px 24px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }
        
        .save-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(58, 134, 255, 0.3);
        }
        
        .readonly-field {
            background: rgba(60, 60, 60, 0.5) !important;
            color: var(--text-secondary) !important;
            cursor: not-allowed;
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


    <div class="container py-5">
        <div class="profile-container">
            <!-- Breadcrumb -->
            <nav class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Pilot Center</a></li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
            </nav>

            <!-- Profile Card -->
            <div class="profile-card p-4 p-md-5">
                <h2 class="mb-4 text-center">Edit Your Profile</h2>
                
                <!-- Avatar Section -->
                <div class="text-center mb-5">
                    <div class="avatar-container">
                        <img src="https://ui-avatars.com/api/?name=C+C&background=333&color=fff" 
                             class="avatar-preview" 
                             id="avatarPreview">
                        <button class="avatar-upload-btn" id="avatarUploadBtn">
                            <i class="fas fa-camera"></i>
                            <input type="file" id="avatarInput" class="file-input" accept="image/*">
                        </button>
                    </div>
                    <small class="text-muted">Image will be resized to 100x100px</small>
                </div>
                
                <form id="profileForm">
                    <!-- Personal Info Section -->
                    <h5 class="section-title"><i class="fas fa-user me-2"></i>Personal Information</h5>
                    
                    <div class="mb-4">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control readonly-field" value="Clayton Clarke" readonly>
                        <div class="admin-note">
                            <i class="fas fa-exclamation-circle me-2"></i>Contact admin for name changes
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label">Airline</label>
                        <input type="text" class="form-control readonly-field" value="AJM" readonly>
                        <div class="admin-note">
                            <i class="fas fa-exclamation-circle me-2"></i>Airline changes require admin approval
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" value="electricclay2000@yahoo.co">
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="location" class="form-label">Location</label>
                            <select class="form-select" id="location">
                                <option selected>United States</option>
                                <option>Canada</option>
                                <option>United Kingdom</option>
                                <option>Jamaica</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Professional Details -->
                    <h5 class="section-title mt-5"><i class="fas fa-id-card me-2"></i>Professional Details</h5>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="vatsimId" class="form-label">VATSIM ID</label>
                            <input type="text" class="form-control" id="vatsimId" value="902247">
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Signature Background</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="background.png" readonly>
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Save Button -->
                    <div class="d-grid mt-5">
                        <button type="submit" class="btn save-btn">
                            <i class="fas fa-save me-2"></i>Save Changes
                        </button>
                    </div>
                </form>
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
    <!-- FOOTER END





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
        document.addEventListener('DOMContentLoaded', function() {
            // Avatar upload functionality
            const avatarInput = document.getElementById('avatarInput');
            const avatarPreview = document.getElementById('avatarPreview');
            const uploadBtn = document.getElementById('avatarUploadBtn');
            
            uploadBtn.addEventListener('click', function() {
                avatarInput.click();
            });
            
            avatarInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        avatarPreview.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
            
            // Form submission
            document.getElementById('profileForm').addEventListener('submit', function(e) {
                e.preventDefault();
                // Add form submission logic here
                alert('Profile updated successfully!');
            });
        });
    </script>

</body>

</html>
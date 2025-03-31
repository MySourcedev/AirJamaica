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

    /* pppp */
    :root {
            --bg-dark: #0a0a0a;
            --card-dark: #1a1a1a;
            --border-dark: #2e2e2e;
            --text-primary: #ffffff;
            --text-secondary: #cccccc;
            --accent-blue: #4dabf7;
            --accent-light: rgba(77, 171, 247, 0.1);
            --danger: #dc3545;
        }
        
        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Segoe UI', system-ui, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .password-card {
            background: var(--card-dark);
            border: 1px solid var(--border-dark);
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.25);
            max-width: 500px;
            margin: 0 auto;
        }
        
        .form-control {
            background: rgba(30, 30, 30, 0.8);
            border: 1px solid var(--border-dark);
            color: var(--text-primary);
        }
        
        .form-control:focus {
            background: rgba(40, 40, 40, 0.9);
            border-color: var(--accent-blue);
            box-shadow: 0 0 0 0.25rem rgba(77, 171, 247, 0.25);
            color: var(--text-primary);
        }
        
        .password-strength {
            height: 4px;
            background: var(--border-dark);
            margin-top: 5px;
            border-radius: 2px;
            overflow: hidden;
        }
        
        .strength-bar {
            height: 100%;
            width: 0%;
            transition: width 0.3s;
        }
        
        .password-criteria {
            font-size: 0.85rem;
            color: var(--text-secondary);
        }
        
        .password-criteria.valid {
            color: #28a745;
        }
        
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-secondary);
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


    <div class="container py-5 flex-grow-1">
        <!-- Breadcrumb -->
        <nav class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="pilot-center.html">Pilot Center</a></li>
                <li class="breadcrumb-item active">Password Reset</li>
            </ol>
        </nav>

        <!-- Password Reset Card -->
        <div class="password-card p-4">
            <h2 class="mb-4 text-center">
                <i class="fas fa-key me-2"></i>Password Reset
            </h2>
            
            <form id="passwordResetForm" method="post" action="{{ route('changepassword') }}">
    @csrf
    <!-- New Password -->
    <div class="mb-4">
        <label for="newPassword" class="form-label">Enter your new password</label>
        <div class="position-relative">
            <input name="password" type="password" 
                   class="form-control py-2 @error('password') is-invalid @enderror" 
                   id="newPassword" required>
            <i class="fas fa-eye password-toggle" id="toggleNewPassword"></i>
        </div>
        @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="password-strength mt-2">
            <div class="strength-bar" id="passwordStrength"></div>
        </div>
        <div class="password-criteria mt-2">
            <div id="lengthCriteria">• At least 12 characters</div>
            <div id="uppercaseCriteria">• At least 1 uppercase letter</div>
            <div id="numberCriteria">• At least 1 number</div>
            <div id="specialCriteria">• At least 1 special character</div>
        </div>
    </div>
    
    <!-- Confirm New Password -->
    <div class="mb-4">
        <label for="confirmPassword" class="form-label">Enter your new password again</label>
        <div class="position-relative">
            <input name="confirm_password" type="password" 
                   class="form-control py-2 @error('confirm_password') is-invalid @enderror" 
                   id="confirmPassword" required>
            <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
        </div>
        @error('confirm_password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback" id="passwordMatchFeedback">
            Passwords do not match
        </div>
    </div>
    
    <!-- Current Password -->
    <div class="mb-4">
        <label for="currentPassword" class="form-label">Enter your old password</label>
        <div class="position-relative">
            <input name="old_password" type="password" 
                   class="form-control py-2 @error('old_password') is-invalid @enderror" 
                   id="currentPassword" required>
            <i class="fas fa-eye password-toggle" id="toggleCurrentPassword"></i>
        </div>
        @error('old_password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    
    <!-- Submit Button -->
    <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary py-2">
            <i class="fas fa-save me-2"></i>Save Password
        </button>
    </div>
</form>
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

    <!-- Password Validation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const togglePassword = (toggleId, inputId) => {
                const toggle = document.getElementById(toggleId);
                const input = document.getElementById(inputId);
                
                toggle.addEventListener('click', function() {
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            };
            
            togglePassword('toggleNewPassword', 'newPassword');
            togglePassword('toggleConfirmPassword', 'confirmPassword');
            togglePassword('toggleCurrentPassword', 'currentPassword');
            
            // Password strength checker
            const newPassword = document.getElementById('newPassword');
            const strengthBar = document.getElementById('passwordStrength');
            const criteria = {
                length: document.getElementById('lengthCriteria'),
                uppercase: document.getElementById('uppercaseCriteria'),
                number: document.getElementById('numberCriteria'),
                special: document.getElementById('specialCriteria')
            };
            
            newPassword.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                
                // Length check
                if (password.length >= 12) {
                    strength += 25;
                    criteria.length.classList.add('valid');
                } else {
                    criteria.length.classList.remove('valid');
                }
                
                // Uppercase check
                if (/[A-Z]/.test(password)) {
                    strength += 25;
                    criteria.uppercase.classList.add('valid');
                } else {
                    criteria.uppercase.classList.remove('valid');
                }
                
                // Number check
                if (/\d/.test(password)) {
                    strength += 25;
                    criteria.number.classList.add('valid');
                } else {
                    criteria.number.classList.remove('valid');
                }
                
                // Special char check
                if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
                    strength += 25;
                    criteria.special.classList.add('valid');
                } else {
                    criteria.special.classList.remove('valid');
                }
                
                strengthBar.style.width = strength + '%';
                
                // Color coding
                if (strength < 50) {
                    strengthBar.style.backgroundColor = 'var(--danger)';
                } else if (strength < 75) {
                    strengthBar.style.backgroundColor = '#ffc107';
                } else {
                    strengthBar.style.backgroundColor = '#28a745';
                }
            });
            
            // Password match validation
            const confirmPassword = document.getElementById('confirmPassword');
            const passwordMatchFeedback = document.getElementById('passwordMatchFeedback');
            
            confirmPassword.addEventListener('input', function() {
                if (this.value !== newPassword.value) {
                    this.classList.add('is-invalid');
                    passwordMatchFeedback.style.display = 'block';
                } else {
                    this.classList.remove('is-invalid');
                    passwordMatchFeedback.style.display = 'none';
                }
            });
            
            // Form submission
            // document.getElementById('passwordResetForm').addEventListener('submit', function(e) {
            //     e.preventDefault();
                
            //     // Validate passwords match
            //     if (newPassword.value !== confirmPassword.value) {
            //         confirmPassword.classList.add('is-invalid');
            //         passwordMatchFeedback.style.display = 'block';
            //         return;
            //     }
                
            //     // Validate password strength (at least 75%)
            //     const strength = parseInt(strengthBar.style.width);
            //     if (strength < 75) {
            //         alert('Please choose a stronger password');
            //         return;
            //     }
                
            //     // Here you would typically send the data to your server
            //     alert('Password changed successfully!');
            //     // window.location.href = 'profile.html';
            // });
        });
    </script>
    <x-error></x-error>
</body>

</html>
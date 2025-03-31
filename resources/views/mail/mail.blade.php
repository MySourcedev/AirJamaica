<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail -Air Jamaica Virtual</title>

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

        :root {
            --bg-dark: #0d1117;
            --card-dark: #161b22;
            --border-dark: #30363d;
            --text-primary: #e6edf3;
            --text-secondary: #848d97;
            --accent-blue: #58a6ff;
            --accent-light: rgba(56, 139, 253, 0.15);
            --unread-bg: rgba(56, 139, 253, 0.07);
        }
        
        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        
        .mail-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .mail-header {
            border-bottom: 1px solid var(--border-dark);
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        
        .mail-sidebar {
            border-right: 1px solid var(--border-dark);
            padding-right: 20px;
        }
        
        .mail-content {
            padding-left: 25px;
        }
        
        .nav-pills .nav-link {
            color: var(--text-secondary);
            border-radius: 6px;
            margin-bottom: 5px;
            padding: 8px 12px;
        }
        
        .nav-pills .nav-link.active {
            background: var(--accent-light);
            color: var(--accent-blue);
            font-weight: 500;
        }
        
        .nav-pills .nav-link:hover:not(.active) {
            background: rgba(110, 118, 129, 0.1);
        }
        
        .mail-folder {
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            margin-bottom: 3px;
        }
        
        .mail-folder:hover {
            background: rgba(110, 118, 129, 0.1);
        }
        
        .mail-folder.active {
            background: var(--accent-light);
            color: var(--accent-blue);
            font-weight: 500;
        }
        
        .mail-folder .badge {
            font-size: 0.7rem;
            padding: 3px 6px;
        }
        
        .mail-table {
            --bs-table-bg: transparent;
            --bs-table-color: var(--text-primary);
            --bs-table-border-color: var(--border-dark);
        }
        
        .mail-table tr {
            border-bottom: 1px solid var(--border-dark);
        }
        
        .mail-table tr.unread {
            background: var(--unread-bg);
            font-weight: 500;
        }
        
        .mail-table tr:hover {
            background: rgba(110, 118, 129, 0.1);
        }
        
        .mail-table th {
            border-bottom: 2px solid var(--border-dark);
            font-weight: 600;
            color: var(--text-secondary);
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
        }
        
        .mail-status {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
        }
        
        .status-unread {
            background: var(--accent-blue);
        }
        
        .status-read {
            background: transparent;
            border: 2px solid var(--text-secondary);
        }
        
        .empty-state {
            padding: 60px 0;
            text-align: center;
            color: var(--text-secondary);
        }
        
        .compose-btn {
            background: var(--accent-blue);
            border: none;
            padding: 8px 16px;
            font-weight: 500;
        }
        
        .compose-btn:hover {
            background: #388bfd;
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



    <div class="container py-4 mail-container">
        <!-- Header -->
        <div class="mail-header d-flex justify-content-between align-items-center">
            <h2><i class="fas fa-paper-plane me-2"></i>AIRMail <span class="badge bg-primary">3</span></h2>
            <button class="btn compose-btn">
                <i class="fas fa-plus me-2"></i>Compose New Message
            </button>
        </div>

        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 mail-sidebar">
                <ul class="nav nav-pills flex-column mb-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-inbox me-2"></i>Inbox
                            <span class="badge bg-primary float-end">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-paper-plane me-2"></i>Sent Messages
                        </a>
                    </li>
                </ul>

                <h6 class="text-uppercase text-secondary mb-3">Folders</h6>
                <div class="mb-4">
                    <div class="mail-folder active">
                        <i class="fas fa-folder me-2"></i>Inbox
                        <span class="badge bg-primary float-end">3</span>
                    </div>
                    <div class="mail-folder">
                        <i class="fas fa-folder me-2"></i>Important
                    </div>
                    <div class="mail-folder">
                        <i class="fas fa-folder me-2"></i>Archived
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-folder-plus me-1"></i>New Folder
                    </button>
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-folder-minus me-1"></i>Delete Folder
                    </button>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 mail-content">
                <h5 class="mb-4">Inbox for Clayton Clarke <span class="text-secondary">AJM1167</span></h5>
                
                <div class="table-responsive">
                    <table class="table mail-table">
                        <thead>
                            <tr>
                                <th width="40px"></th>
                                <th>From</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th width="80px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Unread Message -->
                            <tr class="unread">
                                <td><span class="mail-status status-unread"></span></td>
                                <td>AJVAC Operations</td>
                                <td>New Flight Schedule Available</td>
                                <td>Today, 09:24</td>
                                <td><button class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                            
                            <!-- Example Unread Message -->
                            <tr class="unread">
                                <td><span class="mail-status status-unread"></span></td>
                                <td>Training Department</td>
                                <td>Your Certification Renewal</td>
                                <td>Yesterday, 14:45</td>
                                <td><button class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                            
                            <!-- Example Unread Message -->
                            <tr class="unread">
                                <td><span class="mail-status status-unread"></span></td>
                                <td>Pilot Support</td>
                                <td>Your Recent Flight Report</td>
                                <td>Mar 12</td>
                                <td><button class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                            
                            <!-- Empty State (hidden when messages exist) -->
                            <!-- <tr>
                                <td colspan="5" class="empty-state">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <h4>You have no messages</h4>
                                    <p class="mb-0">When you receive messages, they'll appear here</p>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
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
        // Simple interaction for folder selection
        document.querySelectorAll('.mail-folder').forEach(folder => {
            folder.addEventListener('click', function() {
                document.querySelectorAll('.mail-folder').forEach(f => f.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>

</body>

</html>
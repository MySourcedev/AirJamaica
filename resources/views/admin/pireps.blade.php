<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pireps- Air Jamaica Virtual</title>

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


        :root {
      --bg-dark: #0d1117;
      --card-dark: #161b22;
      --text-light: #e6edf3;
      --text-muted: #7d8590;
      --accent-green: #3fb950;
      --accent-blue: #58a6ff;
      --border-dark: #30363d;
      --table-hover: rgba(63, 185, 80, 0.1);
      --header-gradient: linear-gradient(135deg, #1a2e3b 0%, #0d1117 100%);
    }
    
    body {
      background-color: var(--bg-dark);
      color: var(--text-light);
      font-family: 'Montserrat', sans-serif;
      line-height: 1.6;
    }
    
    .dashboard-container {
      max-width: 1600px;
      margin: 0 auto;
      padding: 2rem;
    }
    
    .dashboard-card {
      background-color: var(--card-dark);
      border-radius: 12px;
      border: 1px solid var(--border-dark);
      box-shadow: 0 8px 32px rgba(0,0,0,0.3);
      overflow: hidden;
    }
    
    .table-responsive {
      border-radius: 10px;
      overflow: hidden;
    }
    
    .table {
      color: var(--text-light);
      margin-bottom: 0;
      font-size: 0.95rem;
    }
    
    .table thead th {
      background: var(--header-gradient);
      border-bottom: none;
      font-weight: 600;
      position: sticky;
      top: 0;
      padding: 1rem;
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 0.5px;
      color: var(--accent-blue);
    }
    
    .table tbody tr {
      border-bottom: 1px solid var(--border-dark);
    }
    
    .table tbody tr:hover {
      background-color: var(--table-hover);
    }
    
    .table td {
      padding: 1rem;
      vertical-align: middle;
      border-top: 1px solid var(--border-dark);
    }
    
    .status-badge {
      display: inline-block;
      padding: 0.35rem 0.75rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.3px;
    }
    
    .status-approved {
      background-color: rgba(63, 185, 80, 0.15);
      color: var(--accent-green);
    }
    
    .status-pending {
      background-color: rgba(187, 128, 9, 0.15);
      color: #d29922;
    }
    
    .status-rejected {
      background-color: rgba(248, 81, 73, 0.15);
      color: #f85149;
    }
    
    .btn-action {
      padding: 0.5rem 0.75rem;
      font-size: 0.85rem;
      font-weight: 500;
      border-radius: 6px;
      transition: all 0.2s ease;
    }
    
    .btn-primary {
      background-color: var(--accent-blue);
      border-color: var(--accent-blue);
    }
    
    .btn-success {
      background-color: var(--accent-green);
      border-color: var(--accent-green);
    }
    
    .breadcrumb {
      background-color: transparent;
      padding: 0;
      font-size: 0.9rem;
    }
    
    .breadcrumb-item a {
      color: var(--accent-blue);
      text-decoration: none;
      transition: color 0.2s ease;
    }
    
    .breadcrumb-item a:hover {
      color: #79c0ff;
    }
    
    .pagination .page-link {
      background-color: var(--card-dark);
      border-color: var(--border-dark);
      color: var(--text-light);
      margin: 0 4px;
      border-radius: 6px !important;
      min-width: 40px;
      text-align: center;
      padding: 0.5rem 0.75rem;
    }
    
    .pagination .page-item.active .page-link {
      background-color: var(--accent-green);
      border-color: var(--accent-green);
    }
    
    .aircraft-info {
      display: flex;
      flex-direction: column;
    }
    
    .aircraft-model {
      font-weight: 500;
    }
    
    .aircraft-id {
      color: var(--text-muted);
      font-size: 0.8rem;
      margin-top: 2px;
      font-family: 'Roboto Mono', monospace;
    }
    
    .flight-duration {
      font-family: 'Roboto Mono', monospace;
      font-weight: 500;
      color: var(--accent-green);
    }
    
    .flight-date {
      font-family: 'Roboto Mono', monospace;
      color: var(--text-light);
    }
    
    .section-header {
      border-bottom: 1px solid var(--border-dark);
      padding-bottom: 1rem;
      margin-bottom: 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .section-title {
      font-size: 1.75rem;
      font-weight: 600;
      margin: 0;
      color: var(--text-light);
    }
    
    .action-buttons .btn {
      margin-left: 0.75rem;
    }
    
    .airport-code {
      font-family: 'Roboto Mono', monospace;
      font-weight: 500;
      color: var(--text-light);
    }
    
    @media (max-width: 992px) {
      .dashboard-container {
        padding: 1rem;
      }
      
      .table td, .table th {
        padding: 0.75rem;
      }
    }
    
    @media (max-width: 768px) {
      .section-header {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .action-buttons {
        margin-top: 1rem;
        width: 100%;
      }
      
      .action-buttons .btn {
        width: 100%;
        margin: 0.25rem 0;
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




    <div class="dashboard-container">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pilot Center</a></li>
        <li class="breadcrumb-item active" aria-current="page">Flight Logs</li>
      </ol>
    </nav>

    <div class="dashboard-card p-4">
      <div class="section-header">
        <h2 class="section-title"><i class="fas fa-clipboard-list me-2"></i>Flight Log History</h2>
        <div class="action-buttons d-flex">
          <button class="btn btn-success">
            <i class="fas fa-plus me-2"></i>New Report
          </button>
          <button class="btn btn-primary">
            <i class="fas fa-filter me-2"></i>Filters
          </button>
          <button class="btn btn-outline-light">
            <i class="fas fa-download me-2"></i>Export
          </button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Flight #</th>
              <th>Departure</th>
              <th>Arrival</th>
              <th>Aircraft</th>
              <th>Duration</th>
              <th>Date</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- All 64 Flight Records from pirep1.png to pirep4.png -->
            @foreach ($pireps as $pirep)
            <tr>
              <td>{{ $pirep->flight()->id }}</td>
              <td><span class="airport-code">{{ $pirep->flight->departureAirport() }}</span></td>
              <td><span class="airport-code">{{ $pirep->flight->arrivalAirport() }}</span></td>
              <td>
                <div class="aircraft-info">
                  <span class="aircraft-model">{{ $pirep->flight->aircraft->model }}</span>
                  <span class="aircraft-id">{{ $pirep->flight->aircraft->id }}</span>
                </div>
              </td>
              <td><span class="flight-duration">{{ $pirep->flight->dpt_time->diff($pirep->flight->arr_time)->format('%H:%I') }}</span></td>
              <td><span class="flight-date">{{ $pirep->flight->dpt_time->format('Y-m-d') }}</span></td>
              <td><span class="status-badge status-approved">Approved</span></td>
              <td>
                <button class="btn btn-action btn-outline-light me-2" title="Comments">
                  <i class="far fa-comment"></i>
                </button>
                <button class="btn btn-action btn-outline-light" title="Details">
                  <i class="fas fa-ellipsis-h"></i>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    {{ $pireps->links() }}
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
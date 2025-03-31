<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pireps -Air Jamaica Virtual</title>

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


        /* PPPPPPPPPP */
         /* Custom Aviation Styling */
         .aviation-container {
            max-width: 800px;
            margin: 2rem auto;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .aviation-header {
            background-color: #1a3e8c;
            color: white;
            padding: 1.5rem;
        }
        
        .aviation-alert {
            border-left: 4px solid #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
            margin: 2rem;
        }
        
        .aviation-form {
            padding: 0 2rem 2rem;
        }
        
        .form-label {
            font-weight: 600;
            color: #1a3e8c;
            margin-bottom: 0.5rem;
        }
        
        .btn-aviation {
            background-color: #1a3e8c;
            color: white;
            font-weight: 600;
            padding: 0.5rem 2rem;
            margin-top: 1.5rem;
        }
        
        .btn-aviation:hover {
            background-color: #0d2b66;
            color: white;
        }
        
        .form-control, .form-select {
            border: 1px solid #ced4da;
            padding: 0.5rem 1rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #1a3e8c;
            box-shadow: 0 0 0 0.25rem rgba(26, 62, 140, 0.25);
        }
    </style>
</head>



<body>

    <!-- Navbar start -->
    <x-navbar></x-navbar>
    <!-- Navbar end -->


    <div class="aviation-container">
        <!-- Header Section -->
        <div class="aviation-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-white-50">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white-50">Pilot Center</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">File a Report</li>
                </ol>
            </nav>
            <h1 class="h4 mb-0 mt-2"><i class="fas fa-file-alt me-2"></i>File PIREP</h1>
        </div>

        <!-- Alert Section -->
        <div class="aviation-alert alert d-flex align-items-center">
            <i class="fas fa-exclamation-triangle me-3 text-danger"></i>
            <div>
                Please note that ALL manual Pireps must have an accompanying VATSIM Report.
                Failure to produce such INFO will result in Pirep being REJECTED.
            </div>
        </div>

        <!-- PIREP Form -->
        <form class="aviation-form" method="post" action="{{ route('store.filepireps') }}">
    @csrf
    <!-- Pilot Information -->
    <div class="mb-4">
        <label class="form-label">Pilot:</label>
        <div class="form-control bg-light">{{ Auth::user()->f_name. ' ' . Auth::user()->l_name }}</div>
    </div>

    <!-- Flight Information -->
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="airline" class="form-label">Select Airline:</label>
            <select name="airline" class="form-select aviation-select @error('airline') is-invalid @enderror" id="airline">
                <option value="">Select an airline</option>
                @foreach ($airlines as $airline)
                <option value="{{ $airline }}">{{ $airline }}</option>
                @endforeach
            </select>
            @error('airline')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="flightNumber" class="form-label">Enter Flight Number eg. 035R:</label>
            <input name="flight_number" type="text" class="form-control @error('flight_number') is-invalid @enderror" id="flightNumber">
            @error('flight_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="departure" class="form-label">Select Departure Airport:</label>
            <select name="dpt_airport" class="form-select aviation-select @error('dpt_airport') is-invalid @enderror" id="departure">
                <option value="">Select departure airport</option>
                @foreach ($airports as $airport)
                <option value="{{ $airport->ICAO_code }}">{{ $airport }}</option>
                @endforeach
            </select>
            @error('dpt_airport')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="arrival" class="form-label">Select Arrival Airport:</label>
            <select name="arr_airport" class="form-select aviation-select @error('arr_airport') is-invalid @enderror" id="arrival">
                <option value="" selected>Select Arrival Airport</option>
                @foreach ($airports as $airport)
                <option value="{{ $airport->ICAO_code }}">{{ $airport }}</option>
                @endforeach
            </select>
            @error('arr_airport')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-4">
        <label for="aircraft" class="form-label">Select Aircraft:</label>
        <select name="aircraft" class="form-select aviation-select @error('aircraft') is-invalid @enderror" id="aircraft">
            <option value="" selected>Select an aircraft</option>
            @foreach ($aircrafts as $aircraft)
                <option value="{{ $aircraft->model }}">{{ $aircraft }}</option>
            @endforeach
        </select>
        @error('aircraft')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Flight Details -->
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="fuelUsed" class="form-label">Fuel Used (lbs):</label>
            <input name="fuel_lbs" type="text" class="form-control @error('fuel_lbs') is-invalid @enderror" id="fuelUsed">
            @error('fuel_lbs')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">This is the fuel used on this flight in lbs</div>
        </div>
        <div class="col-md-6">
            <label for="flightTime" class="form-label">Flight Time:</label>
            <input name="flight_time" type="text" class="form-control @error('flight_time') is-invalid @enderror" id="flightTime">
            @error('flight_time')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">Enter as hours - "5.30" is five hours and thirty minutes</div>
        </div>
    </div>

    <div class="mb-4">
        <label for="route" class="form-label">Route:</label>
        <textarea name="flight_route" class="form-control @error('flight_route') is-invalid @enderror" id="route" rows="2"></textarea>
        @error('flight_route')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="form-text">Enter the route flown, or default will be from the schedule</div>
    </div>

    <div class="mb-4">
        <label for="comments" class="form-label">Comment:</label>
        <textarea name="comment" class="form-control @error('comment') is-invalid @enderror" id="comments" rows="3"></textarea>
        @error('comment')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-aviation">
            <i class="fas fa-paper-plane me-2"></i>FILE FLIGHT REPORT
        </button>
    </div>
</form>
    </div>





    <!-- Footer start -->
    <!-- Footer end -->


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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .about-scroll {
            overflow-y: visible;
            max-height: none;
        }

        /* On screens smaller than 768px (Bootstrap's md breakpoint) */
        @media (max-width: 767.98px) {
            .about-scroll {
                overflow-y: auto;
                max-height: 80vh;
                /* Set based on what you want visible */
            }
        }

        /* Animation */
        @keyframes floatUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Fade-up classes */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Scrollbar Styles */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: white;
            border-radius: 10px;
        }

        .custom-scrollbar:hover::-webkit-scrollbar-thumb {
            background-color: #ccc;
        }

        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: white transparent;
        }

        /* Scrollable area */
        .scrollable-area {
            max-height: 80vh;
            overflow-y: auto;
        }

        @media (max-width: 768px) {
            .scrollable-area {
                max-height: 70vh;
            }
        }

        /* ===== Plus Icons Container ===== */
        .plus-icon-container {
            width: 300px;
            height: 300px;
            position: relative;
        }

        .icon {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 12px;
            height: 80px;
            width: 80px;
            object-fit: contain;
        }

        /* Center */
        .center-icon {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Top */
        .top-icon {
            top: 0;
            left: 50%;
            transform: translate(-50%, 0);
        }

        /* Bottom */
        .bottom-icon {
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 0);
        }

        /* Left */
        .left-icon {
            left: 0;
            top: 50%;
            transform: translate(0, -50%);
        }

        /* Right */
        .right-icon {
            right: 0;
            top: 50%;
            transform: translate(0, -50%);
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5);
            /* Light border */
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ===== Responsive Scaling ===== */
        @media (max-width: 992px) {
            .plus-icon-container {
                width: 220px;
                height: 220px;
            }

            .icon {
                height: 60px;
                width: 60px;
                padding: 0.75rem;
            }
        }

        @media (max-width: 576px) {
            .plus-icon-container {
                width: 180px;
                height: 180px;
            }

            .icon {
                height: 50px;
                width: 50px;
                padding: 0.5rem;
            }
        }


        @media (max-width: 576px) {
            .content-box {
                padding: 1rem !important;
                max-width: 90% !important;
                font-size: 0.9rem;
            }

            .content-box h1 {
                font-size: 1.25rem !important;
            }

            .content-box p {
                font-size: 0.85rem !important;
            }

            .custom-scrollbar {
                max-width: 100% !important;
            }
        }

        .scrollable-area::-webkit-scrollbar {
            height: 8px;
        }

        .scrollable-area::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
        }

        /* Fade transition duration shortened to 0.5s */
        .carousel-fade .carousel-item {
            transition: opacity 1s ease-in-out;
        }

        {{-- .pagination .page-item {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .pagination .page-item .dot {
            transition: background-color 0.3s ease;
        }

        .pagination .page-item:hover .dot {
            background-color: white !important;
            opacity: 0.7;
        } --}}
    </style>
</head>

<body class="m-0" style="font-family: Arial, sans-serif;">

    <nav class="navbar navbar-expand-lg fixed-top w-100"
        style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px); z-index: 1000; padding: 12px 24px;">
        <div class="container-fluid" style="max-width: 1250px; margin: 0 auto;">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
            </a>

            <!-- Hamburger button -->
            <!-- Hamburger button -->
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <div class="navbar-nav gap-3">
                    <a href="#" class="nav-link text-white fs-6">Home</a>
                    <a href="#" class="nav-link text-white fs-6">About</a>
                    <a href="#" class="nav-link text-white fs-6">Services</a>
                    <a href="#" class="nav-link text-white fs-6">Portfolio</a>
                    <a href="#" class="nav-link text-white fs-6">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

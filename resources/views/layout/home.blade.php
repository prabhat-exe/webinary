<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

        .section-text {
            color: white !important;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }


        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Two columns */
            gap: 24px;
            /* Space between cards */
            margin-top: 16px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.06);
            border-radius: 16px;
            padding: 28px 20px;
            text-align: center;
            color: #e2e8f0;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(15px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
            user-select: none;
        }

        .stat-card:hover,
        .stat-card:focus {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.45);
            color: #a78bfa;
        }

        .stat-icon {
            font-size: 48px;
            margin-bottom: 12px;
            color: #8b5cf6;
            display: inline-block;
        }

        .stat-number {
            font-weight: 700;
            font-size: 2.8rem;
            line-height: 1.1;
            margin-bottom: 6px;
            font-family: 'Poppins', sans-serif;
        }

        .stat-label {
            font-size: 1rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #cbd5e1;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
                /* Stack on smaller screens */
            }
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
            scrollbar-width: none;
            -ms-overflow-style: none;
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
            display: none;
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
        } --}} .popup-alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            min-width: 300px;
            max-width: 90%;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: fadeSlideDown 0.5s ease forwards;
            transition: opacity 0.5s ease;
            opacity: 1;
        }

        /* Animation for appearance */
        @keyframes fadeSlideDown {
            from {
                opacity: 0;
                transform: translateX(-50%) translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }




        /* Smartphone Preview */
        .smartphone-preview {
            position: relative;
            width: 220px;
            aspect-ratio: 9 / 18;
            border: 10px solid #888;
            border-top-width: 40px;
            border-bottom-width: 40px;
            border-radius: 30px;
            background: #fff ;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        .smartphone-preview::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 4px;
            background: #333;
            border-radius: 10px;
            z-index: 2;
        }

        .smartphone-preview .content {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .smartphone-preview iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Browser Preview */
        .browser-preview {
            width: 300px;
            height: 200px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
        }

        .browser-preview .browser-bar {
            height: 24px;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            padding: 0 10px;
            gap: 6px;
        }

        .browser-preview .dot {
            width: 10px;
            height: 10px;
            border-radius: 9999px;
            display: inline-block;
        }

        .browser-preview .red {
            background: #ff5f57;
        }

        .browser-preview .yellow {
            background: #ffbd2e;
        }

        .browser-preview .green {
            background: #28c840;
        }

        .browser-preview iframe {
            flex-grow: 1;
            width: 100%;
            border: none;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 m-0" style="font-family: Arial, sans-serif;">


    @include('layout.header')

   <main class="flex-grow-1">
    @yield('content')
</main>



    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
    @include('layout.footer')

</html>

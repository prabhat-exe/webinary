<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
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

        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom white line scrollbar */
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

        /* Optional: smooth scroll on hover */
        .custom-scrollbar:hover::-webkit-scrollbar-thumb {
            background-color: #ccc;
        }

        /* Firefox support */
        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: white transparent;
        }
    </style>


</head>

<body style="margin:0; font-family: Arial, sans-serif;">

    <nav
        style="display: flex; justify-content: space-between; align-items: center;
           background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(6px);
           -webkit-backdrop-filter: blur(6px); z-index: 1000; padding: 12px 24px;
           position: fixed; top: 0; left: 0; right: 0; max-width: 1250px;
           margin: 0 auto; ">

        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">

        <div style="display: flex; gap: 16px;">
            <a href="#" style="color: white; text-decoration: none; font-size: 16px;">Home</a>
            <a href="#" style="color: white; text-decoration: none; font-size: 16px;">About</a>
            <a href="#" style="color: white; text-decoration: none; font-size: 16px;">Services</a>
            <a href="#" style="color: white; text-decoration: none; font-size: 16px;">Portfolio</a>
            <a href="#" style="color: white; text-decoration: none; font-size: 16px;">Contact</a>
        </div>
    </nav>

    @yield('content')



    @yield('script')

</body>

</html>

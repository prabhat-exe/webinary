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
                    @foreach ($header as $option)
                        <a href="{{ $option->link ? url($option->link) : url('/') }}" class="nav-link text-white fs-6">
                            {{ strtoupper($option->option) }}
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </nav>
@extends('layout.home')
@section('title', 'Portfolio Page')

@section('content')
    {{-- @if (session('success'))
        <div class="popup-alert alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    <div class="portfolio-page">
        <!-- Hero Section -->
        <section class="hero-section position-relative m-0 p-0" style="min-height: 100vh; overflow: hidden;">
            <!-- Background Image -->
            <img src="{{ asset('images/portfolio.jfif') }}" class="position-absolute top-0 start-0 w-100 h-100"
                style="object-fit: cover; z-index: -1;" alt="Portfolio Background" />

            <!-- Foreground Content -->
            <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 text-white">
                <div class="bg-dark bg-opacity-50 rounded-4 w-75 mx-auto p-4">
                    <h1 class="fs-3 mb-3 mt-4 fade-up">Our Portfolio</h1>
                    <p class="fs-6 lh-lg fade-up" style="animation: floatUp 1s ease-out forwards">
                        Discover our latest projects and the innovative solutions we've delivered to our clients.
                    </p>
                </div>
            </div>
        </section>

       


         


       <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1);">
            <div class="mb-4 ">
                <div class="d-flex gap-4 align-items-center ml-5" style="margin-left:100px;">
                    <!-- Websites Link -->
                    <a href="{{ route('portfolio') }}" class="position-relative text-decoration-none">
                        <h4 class="text-light mb-1">Websites</h4>
                        @if (request()->routeIs('portfolio'))
                            <div style="height: 3px; width: 100%; background-color:rgb(252, 252, 252); border-radius: 2px;"></div>
                        @endif
                    </a>

                    <!-- Apps Link -->
                    <a href="{{ route('appsportfolio') }}" class="position-relative text-decoration-none">
                        <h4 class="text-light mb-1">Apps</h4>
                        @if (request()->routeIs('appsportfolio'))
                            <div style="height: 3px; width: 100%; background-color: rgb(252, 252, 252); border-radius: 2px;"></div>
                        @endif
                    </a>
                </div> 
            </div>


            <div class="container">
              

                @if (!empty($projects))

                    @foreach ($projects as $project)
                        <div class="mb-5 text-white text-center">
                            <h2 class="h3 fw-bold">{{ $project->title }}</h2>
                            <p class="text-white-50">{{ $project->description }}</p>
                            <a href="{{ $project->link }}" target="_blank" class="btn btn-light mt-2">
                                🔗 View Project
                            </a>
                        </div>

                        <div class="row align-items-center justify-content-center mb-5 g-4">


                            <!-- Browser Preview -->
                            <div class="col-12 col-lg-8">
                                <div class="border rounded shadow bg-light">
                                    <div class="d-flex align-items-center gap-2 px-3 py-1 bg-secondary-subtle">
                                        <span class="rounded-circle bg-danger" style="width: 12px; height: 12px;"></span>
                                        <span class="rounded-circle bg-warning" style="width: 12px; height: 12px;"></span>
                                        <span class="rounded-circle bg-success" style="width: 12px; height: 12px;"></span>
                                    </div>
                                    <div class="ratio ratio-16x9">
                                        <iframe src="{{ $project->link }}" frameborder="0" class="w-100 h-100"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                    @endforeach


                @endif




                @if (!empty($appsData))
                    @foreach ($appsData as $app)
                        <div class="mb-5">
                            <div class="row align-items-start justify-content-center g-4">

                                <!-- Phone Preview (Left Column) -->
                                <div class="col-12 col-md-4 d-flex justify-content-center">
                                    <div
                                        style="width: 200px; height: 400px; border: 12px solid #333; border-radius: 32px; padding: 8px; background: #000; position: relative; box-shadow: 0 4px 20px rgba(0,0,0,0.4);">
                                        <!-- Camera dot -->
                                        <div
                                            style="width: 6px; height: 6px; background: #555; border-radius: 50%; position: absolute; top: 8px; left: 50%; transform: translateX(-50%);">
                                        </div>

                                        <!-- Screen Area -->
                                        <div class="custom-scrollbar"
                                            style="height: 100%; overflow-y: auto; border-radius: 16px; background-color: #fff;">
                                            @foreach ($app['screenshots'] as $screenshot)
                                                <img src="{{ $screenshot }}" alt="Screenshot"
                                                    style="width: 100%; display: block; border-bottom: 1px solid #ddd;">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- App Info (Right Column) -->
                                <div class="col-12 col-md-6">
                                    <div
                                        class="bg-dark bg-opacity-50 border rounded-4 bg-white p-4 shadow-sm h-100 d-flex flex-column">
                                        <!-- Icon & Title -->
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="{{ $app['icon'] }}" alt="App Icon" class="rounded me-3"
                                                style="width: 64px; height: 64px;">
                                            <div>
                                                <h5 class="mb-0">{{ $app['title'] }}</h5>
                                                <small class="text-muted">{{ $app['developer'] }}</small>
                                            </div>
                                        </div>

                                        <!-- Rating and Installs -->
                                        <div class="d-flex justify-content-between text-muted mb-3">
                                            <div>
                                                ⭐ {{ $app['score'] }}/5<br>
                                                <small>{{ $app['ratings'] ?? 'N/A' }} ratings</small>
                                            </div>
                                            <div>
                                                📥 {{ $app['installs'] }}
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <p class="text-muted small flex-grow-1">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($app['description']), 300, '...') }}
                                        </p>

                                        <!-- Play Store Button -->
                                        <div class="text-center mt-auto">
                                            <a href="{{ $app['url'] }}" target="_blank"
                                                style="text-decoration: none; display: inline-block;">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                                    alt="Get it on Google Play"
                                                    style="height: 50px; width: auto; max-width: 100%;">
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif



            </div>
        </section>


    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const fadeElements = document.querySelectorAll(".fade-up");
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible");
                        } else {
                            entry.target.classList.remove("visible");
                        }
                    });
                }, {
                    threshold: 0.2,
                }
            );
            fadeElements.forEach((el) => observer.observe(el));
        });
    </script>
@endsection

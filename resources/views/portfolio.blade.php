@extends('layout.header')
@section('title', 'Portfolio Page')

@section('content')
    @if (session('success'))
        <div class="popup-alert alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="" style="height: 3500px;">
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

        {{-- <!-- Portfolio Section -->
        <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1);">
            <div class="container">
                <div class="mx-auto p-4" style="max-width: 960px;">
                    <div class="row">
                        @foreach ($projects as $project)
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="card h-100 border-0 text-white bg-dark bg-opacity-75 shadow-sm rounded-4 overflow-hidden project-card"
                                    style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                                    @if (!empty($project['image']))
                                        <div class="overflow-hidden">
                                            <img src="{{ asset($project['image']) }}" class="card-img-top"
                                                alt="{{ $project['title'] }}"
                                                style="object-fit: cover; height: 200px; transition: transform 0.3s ease;">
                                        </div>
                                    @endif

                                    <div class="card-body">
                                        <h5 class="card-title fw-semibold">{{ $project['title'] }}</h5>
                                        <p class="card-text small text-white-50">{{ $project['description'] }}</p>
                                    </div>

                                    <div class="card-footer bg-transparent border-0">
                                        <a href="{{ $project['link'] }}"
                                            class="btn btn-outline-light btn-sm rounded-pill" target="_blank">🔗 View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section> --}}



        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 p-6">
            @foreach ($projects as $project)
                <div class="rounded-xl overflow-hidden shadow-lg border bg-white p-4">
                    <h2 class="text-lg font-bold mb-2">{{ $project->title }}</h2>
                    <p class="text-sm mt-2">{{ $project->description }}</p>
                    <div class="smartphone">
                        <div class="content">
                            <iframe src="{{ $project->link }}" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}


        {{-- <section class="py-10" style="background: linear-gradient(135deg, #5a6782, #a28aa1);">
            <div class="container mx-auto space-y-16">
                @foreach ($projects as $index => $project)
                    <div
                        class="flex flex-col lg:flex-row {{ $index % 2 === 0 ? '' : 'lg:flex-row-reverse' }} items-center gap-8 px-6">

                        <!-- Previews Column -->
                        <div class="flex flex-col sm:flex-row items-center gap-6">
                            <!-- Smartphone Preview -->
                            <div class="smartphone-preview">
                                <div class="content">
                                    <iframe src="{{ $project->link }}" frameborder="0"></iframe>
                                </div>
                            </div>

                            <!-- Browser Preview -->
                            <div class="browser-preview">
                                <div class="browser-bar">
                                    <span class="dot red"></span>
                                    <span class="dot yellow"></span>
                                    <span class="dot green"></span>
                                </div>
                                <iframe src="{{ $project->link }}" frameborder="0"></iframe>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="text-white max-w-xl">
                            <h2 class="text-2xl font-bold mb-4">{{ $project->title }}</h2>
                            <p class="mb-4 text-white/80">{{ $project->description }}</p>
                            <a href="{{ $project->link }}" target="_blank"
                                class="inline-block mt-2 px-5 py-2 bg-white text-gray-800 font-semibold rounded-full hover:bg-gray-200 transition">
                                🔗 View Project
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section> --}}


        <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1);">
            <div class="container">
                @foreach ($projects as $project)
                    <div class="mb-5 text-white text-center">
                        <h2 class="h3 fw-bold">{{ $project->title }}</h2>
                        <p class="text-white-50">{{ $project->description }}</p>
                        <a href="{{ $project->link }}" target="_blank" class="btn btn-light mt-2">
                            🔗 View Project
                        </a>
                    </div>

                    <div class="row align-items-center justify-content-center mb-5 g-4">
                        <!-- Smartphone Preview -->
                        <div class="smartphone-preview">
                            <div class="content">
                                <iframe src="{{ $project->link }}" frameborder="0"></iframe>
                            </div>
                        </div>

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
                    <hr/>
                @endforeach
            </div>
        </section>



        <!-- Footer Section -->
        <footer class="py-5" style="background: linear-gradient(135deg, #5a6782,  #a28aa1);">
            <div class="container">
                <div class="text-center text-white">
                    <h5>Contact Us</h5>
                    <p>For inquiries, please reach out to us at <a href="mailto:contact@webinary.com"
                            class="text-light">contact@webinary.com</a></p>
                    <p>© {{ date('Y') }} Webinary. All rights reserved.</p>
                </div>
            </div>
        </footer>
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

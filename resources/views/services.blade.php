@extends('layout.home')
@section('title', 'Our Services')
@section('content')
<div class="portfolio-page">
        <!-- Hero Section -->
        <section class="hero-section position-relative m-0 p-0" style="min-height: 100vh; overflow: hidden">
            <img src="{{ asset('images/servicespage.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100"
                style="object-fit: cover; z-index: -1" alt="Background" />
            <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 text-white">
                <div class="bg-dark bg-opacity-50 rounded-4 w-75 mx-auto p-4 section-card fade-up">
                    <h1 class="section-title text-center">Our Services</h1>
                    <p class="section-text text-center">
                       {{$content}}
                    </p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1); min-height: 100vh">
            <div class="container">
                <div class="mx-auto p-4" style="max-width: 1080px">
                    <div class="text-center mb-5 text-white fade-up">
                        <h2 class="section-title">What We Offer</h2>
                        <p class="section-text">
                            From ideation to deployment, we provide scalable and innovative solutions tailored to your
                            needs.
                        </p>
                    </div>

                    <div class="row g-4 fade-up">
                        @php
                            $services = [
                                [
                                    'icon' => 'smartphone',
                                    'title' => 'Mobile App Development',
                                    'desc' => 'Custom iOS and Android app development to elevate your mobile presence.',
                                ],
                                [
                                    'icon' => 'language',
                                    'title' => 'Web App Development',
                                    'desc' => 'Scalable, responsive, and secure web apps for all industries.',
                                ],
                                [
                                    'icon' => 'cloud',
                                    'title' => 'Cloud Solutions',
                                    'desc' => 'Cloud architecture, migration, and maintenance for modern enterprises.',
                                ],
                                [
                                    'icon' => 'memory',
                                    'title' => 'AI & ML Development',
                                    'desc' =>
                                        'Integrate smart decision-making and automation through AI-powered systems.',
                                ],
                                [
                                    'icon' => 'currency_bitcoin',
                                    'title' => 'Blockchain Development',
                                    'desc' => 'Secure and decentralized blockchain applications and smart contracts.',
                                ],
                                [
                                    'icon' => 'developer_mode',
                                    'title' => 'DevOps & Automation',
                                    'desc' =>
                                        'CI/CD pipelines, infrastructure automation, and cloud-native operations.',
                                ],
                            ];
                        @endphp

                        @foreach ($services as $service)
                            <div class="col-md-6 col-lg-4">
                                <div
                                    class="p-4 bg-white text-dark rounded-4 shadow h-100 d-flex flex-column align-items-start">
                                    <span class="material-icons mb-3"
                                        style="font-size: 40px; color: #5a6782;">{{ $service['icon'] }}</span>
                                    <h5 class="fw-bold">{{ $service['title'] }}</h5>
                                    <p class="mb-0">{{ $service['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>



        <!-- Our Services Section -->
        <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1); min-height: 100vh;">
            <div class="container">
                <div class="mx-auto p-4 fade-up" style="max-width: 1140px;">
                    <div class="text-center text-white mb-5">
                        <h2 class="section-title">Our Services</h2>
                        <p class="section-text">Explore the wide range of cutting-edge digital services we offer to help
                            your business thrive.</p>
                    </div>

                    <div class="row g-4">

                    
                        @foreach ($serv as $service)
                            <div class="col-md-6 col-lg-4 fade-up">
                                <div class="card h-100 bg-dark bg-opacity-50 text-white rounded-4 shadow p-4">
                                    <h4 class="section-title mb-2">{{ $service->service_name }}</h4>
                                    <p class="section-text small mb-3">{{ $service->service_content }}</p>
                                    <ul class="list-unstyled section-text small ps-3">
                                        @foreach (explode(',', $service->service_list) as $item)
                                            <li>-- {{ trim($item) }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>




        <!-- CTA Section -->
        <section class="py-5 text-white" style="background: linear-gradient(135deg, #a28aa1, #5a6782); min-height: 300px">
            <div class="container text-center fade-up">
                <h2 class="mb-4">Ready to Transform Your Business?</h2>
                <p class="section-text mb-4">Let Webinary be your partner in digital innovation and growth.</p>
                <a href="" class="btn btn-outline-light rounded-pill">Get in Touch</a>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
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
                    threshold: 0.2
                }
            );
            fadeElements.forEach((el) => observer.observe(el));
        });
    </script>
@endsection

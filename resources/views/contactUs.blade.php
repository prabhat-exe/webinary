@extends('layout.home')
@section('title', 'Portfolio Page')

@section('content')
    @if (session('success'))
        <div class="popup-alert alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="portfolio-page">
        <section class="hero-section position-relative m-0 p-0" style="min-height: 75vh; overflow: hidden;">
            <!-- Background Image -->
            <img src="{{ asset('images/Rectangle 1266.png') }}" class="position-absolute top-0 start-0 w-100 h-100"
                style="object-fit: cover; z-index: -1;" alt="Portfolio Background" />

            <!-- Foreground Content -->
            <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 text-white">
                <div class="bg-dark bg-opacity-50 rounded-4 w-75 mx-auto p-4">
                    <h1 class="fs-3 mb-3 mt-4 fade-up">Contact Us</h1>
                    <p class="fs-6 lh-lg fade-up" style="animation: floatUp 1s ease-out forwards">
                        Discover our latest projects and the innovative solutions we've delivered to our clients.
                    </p>
                </div>
            </div>
        </section>




        <section class="py-5" style="background: linear-gradient(135deg, #a28aa1, #5a6782); height:100vh">
            <div class="container">
                <div class="mx-auto p-4 scrollable-area custom-scrollbar" style="max-width: 960px;">
                    <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-4">
                        <div class="col-12 mb-4">
                            <h1 class="fs-3 mb-3">Contacts</h1>
                        </div>

                        <!-- Contact Info Boxes -->
                        <div class="row g-4">
                            <!-- Email Box -->
                            <div class="col-md-4">
                                <div class="bg-white text-dark rounded-4 shadow-sm p-4 h-100 text-center">
                                    <h5 class="mb-2">📧 Email</h5>
                                    <p class="mb-0">yourname@example.com</p>
                                </div>
                            </div>

                            <!-- Phone Box -->
                            <div class="col-md-4">
                                <div class="bg-white text-dark rounded-4 shadow-sm p-4 h-100 text-center">
                                    <h5 class="mb-2">📞 Phone</h5>
                                    <p class="mb-0">+123 456 7890</p>
                                </div>
                            </div>

                            <!-- Address Box -->
                            <div class="col-md-4">
                                <div class="bg-white text-dark rounded-4 shadow-sm p-4 h-100 text-center">
                                    <h5 class="mb-2">📍 Address</h5>
                                    <p class="mb-0">123 Main St, City, Country</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" style="background: linear-gradient(135deg, #a28aa1, #5a6782); height:100vh">
            <div class="container">
                <h1 class="fs-3 mb-3 mt-4 text-light fade-up">Location</h1>
                <div class="map-responsive rounded-4 overflow-hidden shadow-sm" style="height: 400px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.654215104826!2d73.90859627519224!3d18.54452168255373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c10d13529369%3A0x79e0677dab270adf!2sWebinar%20Solutions%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1750155976719!5m2!1sen!2sin"
                        width="1500" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </section>



        <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1); height: 100vh;">
            <div class="container">
                <div class="mx-auto p-4 scrollable-area custom-scrollbar"
                    style="max-width: 960px; height: 100%; overflow-y: auto;">
                    <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-4">

                        <!-- Section Title -->
                        <div class="col-12 text-center mb-4">
                            <h2 class="fw-bold fade-up">Contact Us</h2>
                            <p class="fade-up text-light">We’d love to hear from you. Send us a message and we’ll get
                                back to you shortly.</p>
                        </div>

                        <!-- Contact Form -->
                        <div class="col-md-7">
                            <form action="{{ route('contact.submit') }}" method="POST" class="fade-up">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" name="name" id="name" class="form-control rounded-3"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control rounded-3"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Your Message</label>
                                    <textarea name="message" id="message" rows="5" class="form-control rounded-3" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-outline-light rounded-pill">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>
                </div>
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

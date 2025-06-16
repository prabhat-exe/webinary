    @extends('layout.header')
    @section('title', 'Home Page')



    @section('content')
        @if (session('success'))
            <div class="popup-alert alert alert-success alert-dismissible fade show" role="alert">
               {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="" style="height:3500px;">
            <!-- Hero Section -->
            <section class="hero-section position-relative m-0 p-0" style="min-height: 100vh; overflow: hidden;">
                <!-- Background Image -->
                <img src="{{ asset('images/bg1.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100"
                    style="object-fit: cover; z-index: -1; " alt="Background" />

                <!-- Foreground Content -->
                <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 text-white ">
                    <div class="bg-dark bg-opacity-50 rounded-4 w-75 w-md-75 mx-auto p-4 about-scroll">
                        <div class="row g-4 align-items-center">
                            <!-- Left Text -->
                            <div class="col-12 col-md-6 text-start d-flex flex-column justify-content-center ">
                                <h1 class="fs-3 mb-3 mt-4 fade-up">Welcome to WEBINARY</h1>

                                <p class="fs-6 lh-lg fade-up " style="animation: floatUp 1s ease-out forwards">

                                    We specialize in AI, Cloud Computing, Engineering Solutions, and Mobile Development.
                                    Explore how we bring innovation to your fingertips with expert solutions.

                                    We specialize in AI, Cloud Computing, Engineering Solutions, and Mobile Development.
                                    Explore how we bring innovation to your fingertips with expert solutions.
                                    We specialize in AI, Cloud Computing, Engineering Solutions, and Mobile Development.
                                    Explore how we bring innovation to your fingertips with expert solutions.
                                    We specialize in AI, Cloud Computing, Engineering Solutions, and Mobile Development.
                                    Explore how we bring innovation to your fingertips with expert solutions.
                                </p>
                            </div>

                            <!-- Right: Plus Icons -->
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                                <div
                                    class="plus-icon-container position-relative d-flex justify-content-center align-items-center">
                                    <!-- Center Icon -->
                                    <img src="{{ asset('svgs/ai_icon.svg') }}" alt="Center" class="icon center-icon" />
                                    <!-- Top Icon -->
                                    <img src="{{ asset('svgs/claud_icone.svg') }}" alt="Top" class="icon top-icon" />
                                    <!-- Bottom Icon -->
                                    <img src="{{ asset('svgs/enginner_icon.svg') }}" alt="Bottom"
                                        class="icon bottom-icon" />
                                    <!-- Left Icon -->
                                    <img src="{{ asset('svgs/mobile_icon.svg') }}" alt="Left" class="icon left-icon" />
                                    <!-- Right Icon -->
                                    <img src="{{ asset('svgs/ai_icon.svg') }}" alt="Right" class="icon right-icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- About Us Section -->
            <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1); height:100vh">
                <div class="container">
                    <div class="mx-auto p-4" style="max-width: 960px; ">
                        <div
                            class="row align-items-center bg-dark bg-opacity-50 text-white rounded-4  p-3  custom-scrollbar about-scroll">
                            <!-- Text Column -->
                            <div class="col-12 col-lg-7 text-start">
                                <h1 class="fade-up fs-4 mb-3">About Us</h1>
                                <p class="fade-up fs-6 lh-lg mb-0 scrollable-area"
                                    style="max-height:400px;min-height:200px;">
                                    <strong>WEBINARY</strong><br />
                                    At Webinary, we are passionate about shaping the future through technology. Our
                                    expertise
                                    spans
                                    across <strong>Artificial Intelligence</strong>, <strong>Cloud Computing</strong>,
                                    <strong>Engineering Solutions</strong>, and <strong>Mobile
                                        Development</strong>.<br /><br />
                                    We deliver cutting-edge solutions designed to transform businesses, empower innovation,
                                    and
                                    drive digital growth.
                                    Whether you're looking to harness the power of AI, build scalable cloud systems,
                                    engineer
                                    complex systems, or create powerful mobile experiences — we’ve got you covered.
                                    We deliver cutting-edge solutions designed to transform businesses, empower innovation,
                                    and
                                    drive digital growth.
                                    Whether you're looking to harness the power of AI, build scalable cloud systems,
                                    engineer
                                    complex systems, or create powerful mobile experiences — we’ve got you covered. We
                                    deliver
                                    cutting-edge solutions designed to transform businesses, empower innovation, and
                                    drive digital growth.
                                    Whether you're looking to harness the power of AI, build scalable cloud systems,
                                    engineer
                                    complex systems, or create powerful mobile experiences — we’ve got you covered. We
                                    deliver
                                    cutting-edge solutions designed to transform businesses, empower innovation, and
                                    drive digital growth.
                                    Whether you're looking to harness the power of AI, build scalable cloud systems,
                                    engineer
                                    complex systems, or create powerful mobile experiences — we’ve got you covered.
                                </p>
                            </div>

                            <!-- Image Column -->
                            <div class="fade-up col-12 col-lg-5 d-flex justify-content-center">
                                <img src="{{ asset('images/tech_team.jpg') }}" class="rounded-3 img-fluid"
                                    style="max-height: 260px;" alt="Tech Team" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-5" style="background: linear-gradient(135deg, #a28aa1, #5a6782); height:100vh">
                <div class="container ">
                    <div class="mx-auto p-4 scrollable-area custom-scrollbar " style="max-width: 960px;">
                        <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-3">
                            <!-- Services List Column (Left) -->
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0 d-flex justify-content-center">
                                <div class="custom-scrollbar overflow-auto p-2 border border-light-subtle rounded-3 bg-dark bg-opacity-50 w-100  "
                                    style="max-height: 300px;">
                                    <ul class="fade-up list-unstyled text-white mb-0">
                                        @foreach ($services as $name)
                                            <li class="py-2 border-bottom border-light-subtle">
                                                {{ $name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Text Content Column (Right) -->
                            <div class="col-12 col-lg-8 custom-scrollbar">
                                <h1 class="fade-up fs-3 mb-3">Services</h1>
                                <p class="fade-up fs-6 lh-lg">
                                    <strong>OUR SERVICES</strong><br />
                                    At Webinary, we offer a range of cutting-edge technology
                                    solutions tailored to meet modern business needs. Our core
                                    services include:
                                    <br /><br />
                                    Partner with Webinary to bring innovation, efficiency, and
                                    scalability to your digital journey.
                                    Partner with Webinary to bring innovation, efficiency, and
                                    scalability to your digital journey. Partner with Webinary to bring innovation,
                                    efficiency,
                                    and
                                    scalability to your digital journey. Partner with Webinary to bring innovation,
                                    efficiency,
                                    and
                                    scalability to your digital journey. Partner with Webinary to bring innovation,
                                    efficiency,
                                    and
                                    scalability to your digital journey. Partner with Webinary to bring innovation,
                                    efficiency,
                                    and
                                    scalability to your digital journey. Partner with Webinary to bring innovation,
                                    efficiency,
                                    and
                                    scalability to your digital journey. Partner with Webinary to bring innovation,
                                    efficiency,
                                    and
                                    scalability to your digital journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5" style="background: linear-gradient(135deg, #5a6782, #a28aa1); height:100vh">
                <div class="container">
                    <div class="mx-auto p-4 scrollable-area custom-scrollbar"
                        style="max-width: 960px; height: 100%; overflow-y: auto;">
                        <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-4">
                            <div class="col-12 text-center mb-4">
                                <h2 class="fw-bold">Our Portfolio</h2>
                                <p class="text-light">Here are some of the projects we've worked on recently.</p>
                            </div>

                            <!-- Portfolio Grid Items -->
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
            </section>





            <section class="py-5" style="background: linear-gradient(135deg, #a28aa1, #5a6782); height: 100vh;">
                <div class="container">
                    <div class="mx-auto p-4 custom-scrollbar" style="max-width: 960px; height: 100%; overflow-y: auto;">
                        <div class="bg-dark bg-opacity-50 text-white rounded-4 p-4">

                            <!-- Section Title -->
                            <div class="fade-up mb-4 text-center">
                                <h2 class="text-white fw-bold">Reviews</h2>
                            </div>

                            <!-- Bootstrap Carousel with Fade -->
                            <div id="reviewCarousel" class="carousel slide carousel-fade fade-up" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    @foreach ($reviews as $index => $review)
                                        <div class="carousel-item @if ($index == 0) active @endif">
                                            <div class="p-4 text-center">
                                                <div class="bg-secondary bg-opacity-25 px-4 py-3 mb-3 rounded-2 shadow-sm d-inline-block"
                                                    style="max-width: 600px; min-height: 230px;">
                                                    <h5 class="mb-1">{{ $review->client_name }}</h5>
                                                    <p class="mb-1 small text-white-50">
                                                        {{ $review->designation ?? 'Client' }}
                                                    </p>
                                                    <p class="mb-0 fst-italic">“{{ $review->comment }}”</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                                <!-- Carousel Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>

                                <!-- Carousel Indicators -->
                                <div class="carousel-indicators mt-3">
                                    @foreach ($reviews as $index => $review)
                                        <button type="button" data-bs-target="#reviewCarousel"
                                            data-bs-slide-to="{{ $index }}"
                                            class="@if ($index == 0) active @endif bg-white"
                                            aria-label="Slide {{ $index + 1 }}"></button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
                                        <input type="text" name="name" id="name"
                                            class="form-control rounded-3" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control rounded-3" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="message" class="form-label">Your Message</label>
                                        <textarea name="message" id="message" rows="5" class="form-control rounded-3" required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-outline-light rounded-pill">Send
                                        Message</button>
                                </form>
                            </div>

                            <!-- Contact Info -->
                            <div class="col-md-5 fade-up mt-4 mt-md-0">
                                <div
                                    class="p-3 bg-secondary bg-opacity-25 rounded-3 h-100 d-flex flex-column justify-content-center">
                                    <h5 class="mb-3">Get in Touch</h5>
                                    <p class="mb-2"><strong>📍 Address:</strong> 123 Webinary Lane, Tech City, TX 75000
                                    </p>
                                    <p class="mb-2"><strong>📧 Email:</strong> contact@webinary.com</p>
                                    <p class="mb-0"><strong>📞 Phone:</strong> +1 (234) 567-8900</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>





            {{-- <div class="position-relative text-center py-5" style="min-height: 100vh;">
                <!-- Background gradient layer -->
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background: linear-gradient(135deg, rgb(196, 105, 191), #1e3c72); z-index: 0;"></div>

                <!-- Content box -->
                <div class="position-relative d-flex flex-column flex-lg-row justify-content-between align-items-center mx-auto bg-dark bg-opacity-50 p-4 rounded-4 text-white gap-4 z-1 content-box"
                    style="max-width: 960px; width: 100%;">

                    <!-- Services list -->
                    <div class="d-flex justify-content-center align-items-center w-100 w-lg-auto">
                        <div class="custom-scrollbar overflow-auto p-2 border border-light-subtle rounded-3 bg-dark bg-opacity-50"
                            style="max-height: 300px; width: 100%; max-width: 300px;">
                            <ul class="list-unstyled text-white mb-0">
                                @foreach ($services as $name)
                                    <li class="py-2 border-bottom border-light-subtle">
                                        {{ $name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Text content -->
                    <div class="flex-fill text-start w-100">
                        <h1 class="fade-up fs-3 mb-3">Services</h1>
                        <p class="fade-up fs-6 lh-lg">
                            <strong>OUR SERVICES</strong><br />
                            At Webinary, we offer a range of cutting-edge technology
                            solutions tailored to meet modern business needs. Our core
                            services include:
                            <br /><br />
                            Partner with Webinary to bring innovation, efficiency, and
                            scalability to your digital journey.
                        </p>
                    </div>
                </div>
            </div> --}}


            {{-- <div class="position-relative text-center">
                <img src="{{ asset('images/workflow_management.jpg') }}" class="w-100" style="height: 595px; object-fit: cover"
                    alt="Workflow" />
                <div class="position-absolute top-0 start-0 m-3 d-flex flex-column gap-4 text-white z-1"
                    style="width: 10%; padding: 30px">
                    <h1 class="fade-up fs-3">Planning</h1>
                    <p class="fade-up fs-6 text-black mt-5 ms-5">Client Consultation</p>
                    <p class="fade-up fs-6 text-black ms-3">Solution Architecture</p>
                </div>
            </div> --}}
        </div>
        @endsection @section('script')
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

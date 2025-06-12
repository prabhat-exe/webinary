@extends('layout.header')
@section('title', 'Home Page')



@section('content')
    <div class="" style="height:2000px;">
        <!-- Hero Section -->
        <section class="hero-section position-relative m-0 p-0" style="min-height: 100vh; overflow: hidden;">
            <!-- Background Image -->
            <img src="{{ asset('images/bg1.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100"
                style="object-fit: cover; z-index: -1;" alt="Background" />

            <!-- Foreground Content -->
            <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 text-white ">
                <div class="bg-dark bg-opacity-50 rounded-4 w-75 w-md-75 mx-auto p-4 about-scroll">
                    <div class="row g-4 align-items-center">
                        <!-- Left Text -->
                        <div class="col-12 col-md-6 text-start d-flex flex-column justify-content-center ">
                            <h1 class="fs-3 mb-3 fade-up">Welcome to WEBINARY</h1>
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
                                <img src="{{ asset('svgs/enginner_icon.svg') }}" alt="Bottom" class="icon bottom-icon" />
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
        <section class="py-5" style="background: linear-gradient(135deg, #1e3c72, rgb(196, 105, 191)); height:100vh">
            <div class="container">
                <div class="mx-auto p-4" style="max-width: 960px; ">
                    <div
                        class="row align-items-center bg-dark bg-opacity-50 text-white rounded-4  p-3  custom-scrollbar about-scroll">
                        <!-- Text Column -->
                        <div class="col-12 col-lg-7 text-start">
                            <h1 class="fs-4 mb-3">About Us</h1>
                            <p class="fs-6 lh-lg mb-0 scrollable-area" style="max-height:400px">
                                <strong>WEBINARY</strong><br />
                                At Webinary, we are passionate about shaping the future through technology. Our expertise
                                spans
                                across <strong>Artificial Intelligence</strong>, <strong>Cloud Computing</strong>,
                                <strong>Engineering Solutions</strong>, and <strong>Mobile Development</strong>.<br /><br />
                                We deliver cutting-edge solutions designed to transform businesses, empower innovation, and
                                drive digital growth.
                                Whether you're looking to harness the power of AI, build scalable cloud systems, engineer
                                complex systems, or create powerful mobile experiences — we’ve got you covered.
                                We deliver cutting-edge solutions designed to transform businesses, empower innovation, and
                                drive digital growth.
                                Whether you're looking to harness the power of AI, build scalable cloud systems, engineer
                                complex systems, or create powerful mobile experiences — we’ve got you covered. We deliver
                                cutting-edge solutions designed to transform businesses, empower innovation, and
                                drive digital growth.
                                Whether you're looking to harness the power of AI, build scalable cloud systems, engineer
                                complex systems, or create powerful mobile experiences — we’ve got you covered. We deliver
                                cutting-edge solutions designed to transform businesses, empower innovation, and
                                drive digital growth.
                                Whether you're looking to harness the power of AI, build scalable cloud systems, engineer
                                complex systems, or create powerful mobile experiences — we’ve got you covered.
                            </p>
                        </div>

                        <!-- Image Column -->
                        <div class="col-12 col-lg-5 d-flex justify-content-center">
                            <img src="{{ asset('images/tech_team.jpg') }}" class="rounded-3 img-fluid"
                                style="max-height: 260px;" alt="Tech Team" />
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <div class="position-relative text-center" style="min-height: 100vh;  ">
            <!-- Background gradient layer -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: linear-gradient(135deg, rgb(196, 105, 191), #1e3c72); z-index: 0;"></div>

            <!-- Content box -->
            <div class="position-absolute top-50 start-50 translate-middle d-flex flex-column flex-lg-row justify-content-between align-items-center w-100 w-lg-75 bg-dark bg-opacity-50 p-4 rounded-4 text-white gap-4 z-1"
               style="max-width: 960px;">

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
        </div>


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

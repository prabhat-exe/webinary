@extends('layout.header') 
@section('title', 'About Us') 
@section('content') 
@if(session('success'))
<div
    class="popup-alert alert alert-success alert-dismissible fade show"
    role="alert"
>
    {{ session("success") }}
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
    ></button>
</div>
@endif

<div style="min-height: 2000px">
    <!-- Hero Section -->
    <section
        class="hero-section position-relative m-0 p-0"
        style="min-height: 100vh; overflow: hidden"
    >
        <img
            src="{{ asset('images/aboutbg.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover; z-index: -1"
            alt="Background"
        />

        <div
            class="position-absolute top-50 start-50 translate-middle w-100 px-3 text-white"
        >
            <div
                class="bg-dark bg-opacity-50 rounded-4 w-75 w-md-75 mx-auto p-4 about-scroll section-card fade-up"
            >
                <div class="row g-4 align-items-center">
                    <div
                        class="col-12 col-md-6 text-start d-flex flex-column justify-content-center"
                    >
                        <h1 class="section-title">About Us</h1>
                        <p
                            class="section-text"
                            style="animation: floatUp 1s ease-out forwards"
                        >
                            At <strong>Webinary</strong>, we are passionate
                            about shaping the future through technology. Our
                            expertise spans
                            <strong>Artificial Intelligence</strong>,
                            <strong>Cloud Computing</strong>,
                            <strong>Engineering Solutions</strong>, and
                            <strong>Mobile Development</strong>. We deliver
                            cutting-edge solutions designed to transform
                            businesses, empower innovation, and drive digital
                            growth.
                        </p>
                    </div>

                    <div
                        class="col-12 col-md-6 d-flex justify-content-center align-items-center"
                    >
                        <img
                            src="{{ asset('images/tech_team.jpg') }}"
                            class="rounded-3 img-fluid"
                            style="max-height: 260px"
                            alt="Tech Team"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Vision and Mission Section -->
    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #5a6782, #a28aa1);
            height: 100vh;
        "
    >
        <div class="container">
            <div class="mx-auto p-4" style="max-width: 960px">
                <div class="section-card fade-up">
                    <h2 class="section-title section-text mb-4">Our Vision</h2>
                    <p class="section-text mb-4">
                        We believe that integrating mobile technology and
                        digitizing processes for individuals and businesses can
                        significantly simplify their lives. At
                        <strong>Webinary</strong>, we're dedicated to empowering
                        our clients with user-friendly mobile solutions and
                        streamlined digital processes that enhance efficiency
                        and productivity.
                    </p>

                    <h2 class="section-title section-text mb-4">Our Mission</h2>
                    <p class="section-text mb-0">
                        Our unwavering focus lies in crafting enterprise
                        solutions and development principles that ensure user
                        engagement, optimize experiences, and drive conversions.
                        By prioritizing user-centric design and innovative
                        technology, we empower businesses to achieve their goals
                        and unlock new opportunities for growth and success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #a28aa1, #5a6782);
            height: 100vh;
        "
    >
        <div class="container">
            <div class="mx-auto p-4" style="max-width: 960px">
                <div class="section-card fade-up">
                    <h2 class="section-title section-text mb-4">Who We Are</h2>
                    <p class="section-text">
                        Webinary stands out as a premier, full-service software
                        development company, specializing in Blockchain,
                        Metaverse, IoT, Artificial Intelligence, OpenAI, BOTS,
                        Mobile App, Web App, Cloud, and DevOps Development. Our
                        commitment to timeliness, security, scale, and
                        performance ensures that our clients receive top-notch
                        solutions that meet and exceed their expectations.
                    </p>
                    <img
                        src="{{ asset('images/aboutbg.jpg') }}"
                        class="rounded-3 img-fluid"
                        style="max-height: 260px"
                        alt="Tech Team"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Happy Clients Section -->
    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #5a6782, #a28aa1);
            min-height: 700px;
        "
    >
        <div class="container">
            <div class="mx-auto p-4" style="max-width: 960px">
                <div class="text-center text-white fade-up">
                    <h2 class="section-title">Happy Clients</h2>
                    <p class="section-text">
                        We have emerged as a dynamic force in the realm of
                        enterprise solutions and mobile application development.
                    </p>
                </div>

                <div
                    class="stats-grid mt-5 fade-up"
                    tabindex="0"
                    aria-label="Happy clients statistics"
                >
                    @php $stats = [ ['icon' => 'people', 'number' => '100+',
                    'label' => 'Happy Clients'], ['icon' => 'folder', 'number'
                    => '100+', 'label' => 'Unique Projects'], ['icon' =>
                    'star_rate', 'number' => '10+', 'label' => 'Awards Won'],
                    ['icon' => 'public', 'number' => '90+', 'label' =>
                    'Countries Served'], ]; @endphp @foreach ($stats as $stat)
                    <article
                        class="stat-card"
                        role="region"
                        aria-labelledby="stat-{{ Str::slug($stat['label']) }}"
                    >
                        <span
                            class="material-icons section-text stat-icon"
                            style="font-size: 48px"
                            aria-hidden="true"
                        >
                            {{ $stat["icon"] }}
                        </span>

                        <p
                            class="stat-number section-text"
                            id="stat-{{ Str::slug($stat['label']) }}"
                        >
                            {{ $stat["number"] }}
                        </p>
                        <p class="stat-label section-text">
                            {{ $stat["label"] }}
                        </p>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section
        class="py-5"
        style="
            background: linear-gradient(135deg, #a28aa1, #5a6782);
            min-height: 100vh;
        "
    >
        <div class="container">
            <div
                class="mx-auto p-4 scrollable-area custom-scrollbar fade-up"
                style="max-width: 960px; height: 100%; overflow-y: auto"
            >
                <div class="row bg-dark bg-opacity-50 text-white rounded-4 p-4">
                    <div class="col-12 text-center mb-4">
                        <h2 class="section-title">Contact Us</h2>
                        <p class="section-text">
                            We’d love to hear from you. Send us a message and
                            we’ll get back to you shortly.
                        </p>
                    </div>

                    <div class="col-md-7">
                        <form
                            action="{{ route('contact.submit') }}"
                            method="POST"
                            class="fade-up"
                            aria-label="Contact form"
                        >
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Your Name</label
                                >
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control rounded-3"
                                    required
                                    aria-required="true"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Your Email</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control rounded-3"
                                    required
                                    aria-required="true"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label"
                                    >Your Message</label
                                >
                                <textarea
                                    name="message"
                                    id="message"
                                    rows="5"
                                    class="form-control rounded-3"
                                    required
                                    aria-required="true"
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-outline-light rounded-pill"
                            >
                                Send Message
                            </button>
                        </form>
                    </div>

                    <div
                        class="col-md-5 fade-up mt-4 mt-md-0 contact-info"
                        role="complementary"
                        aria-label="Contact information"
                    >
                        <div
                            class="p-3 bg-secondary bg-opacity-25 rounded-3 h-100 d-flex flex-column justify-content-center"
                        >
                            <h5 class="mb-3">Get in Touch</h5>
                            <p class="mb-2">
                                <strong>📍 Address:</strong> A-24, Fourth Floor,
                                401, A Block, Sector 63, Noida, Uttar Pradesh
                                201301, India
                            </p>
                            <p class="mb-2">
                                <strong>📧 Email:</strong> contact@Webinary.com
                            </p>
                            <p class="mb-0">
                                <strong>📞 Phone:</strong> 0120-4289186
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection @section('script')
<link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
/>
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
            },
            {
                threshold: 0.2,
            }
        );
        fadeElements.forEach((el) => observer.observe(el));
    });
</script>
@endsection

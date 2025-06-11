@extends('layout.header')

@section('title', 'Home Page')

@section('content')
    <div style="height: 3000px; ">


        <div style="position: relative; width: 100%; text-align: center;">
            <!-- Background Image -->
            <img src="{{ asset('images/bg1.jpg') }}" alt="Background"
                style="height: 595px; width: 100%; display: block; object-fit: cover;">

            <!-- Overlay Container (Split into left and right) -->
            <div
                style="
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            width: 80%;
                            background-color: rgba(0, 0, 0, 0.5);
                            padding: 40px;
                            border-radius: 20px;
                            color: white;
                            gap: 40px;
                        ">

                <!-- Left Side (Text) -->
                <div style="flex: 1; text-align: left;">
                    <h1  class="fade-up" style="font-size: 32px; margin-bottom: 20px;">Welcome to Our Tech World</h1>
                    <div>
                    <p 
                        style="
                                font-size: 18px;
                                line-height: 1.6;
                                opacity: 0;
                                transform: translateY(40px);
                                animation: floatUp 1s ease-out forwards;
                                
                            ">
                        WEBINARY <br />
                        We specialize in AI, Cloud Computing, Engineering Solutions, and Mobile Development.
                        Explore how we bring innovation to your fingertips with expert solutions.
                    </p>
                </div>
                </div>

                <!-- Right Side (Icons) -->
                <div
                    style="     display: grid;
                                grid-template-areas:
                                    '. top .'
                                    'left center right'
                                    '. bottom .';
                                gap: 20px;
                                align-items: center;
                                justify-items: center;
                                width: fit-content;
                                margin: auto;
                            ">

                    <img src="{{ asset('svgs/ai_icon.svg') }}" alt="AI Icon"
                        style="grid-area: top; height: 100px; background-color: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px;">

                    <img src="{{ asset('svgs/claud_icone.svg') }}" alt="Cloud Icon"
                        style="grid-area: left; height: 100px; background-color: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px;">

                    <img src="{{ asset('svgs/enginner_icon.svg') }}" alt="Engineer Icon"
                        style="grid-area: center; height: 100px; background-color: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px;">

                    <img src="{{ asset('svgs/mobile_icon.svg') }}" alt="Mobile Icon"
                        style="grid-area: right; height: 100px; background-color: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px;">

                    <img src="{{ asset('svgs/ai_icon.svg') }}" alt="AI Icon Again (bottom)"
                        style="grid-area: bottom; height: 100px; background-color: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px;">
                </div>

            </div>

        </div>




        <div style="position: relative; width: 100%; text-align: center; height: 595px;">

            <!-- Gradient Background -->
            <div
                style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1e3c72, #2a5298); /* You can change these colors */
            z-index: 0;
        ">
            </div>

            <!-- Overlay Container (Split into left and right) -->
            <div
                style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 20px;
            color: white;
            gap: 40px;
            z-index: 1;
        ">

                <!-- Left Side (Text) -->
                <div style="flex: 1; text-align: left;">
                    <h1 class="fade-up" style="font-size: 32px; margin-bottom: 20px;">About Us</h1>

                    <p class="fade-up" style="font-size: 18px; line-height: 1.6;">
                        <strong>WEBINARY</strong><br />
                        At Webinary, we are passionate about shaping the future through technology. Our expertise spans
                        across
                        <strong>Artificial Intelligence</strong>, <strong>Cloud Computing</strong>, <strong>Engineering
                            Solutions</strong>, and
                        <strong>Mobile Development</strong>.
                        <br /><br />
                        We deliver cutting-edge solutions designed to transform businesses, empower innovation, and drive
                        digital growth.
                        Whether you're looking to harness the power of AI, build scalable cloud systems, engineer complex
                        systems, or create powerful mobile experiences — we’ve got you covered.
                    </p>
                </div>

                <!-- Right Side (Image) -->
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('images/tech_team.jpg') }}" alt="Tech Team"
                        style="height: 300px; border-radius: 12px;">
                </div>
            </div>
        </div>


    </div>

@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const fadeElements = document.querySelectorAll('.fade-up');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, {
            threshold: 0.2 // 20% of element must be visible
        });

        fadeElements.forEach(el => observer.observe(el));
    });
</script>

@endsection
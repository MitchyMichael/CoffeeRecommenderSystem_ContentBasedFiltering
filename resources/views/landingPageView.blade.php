@extends('layout.layout')
@section('main_content')
    {{-- Top Section --}}
    <div class="header">

        {{-- Navigation Bar --}}
        <header class="navbar">
            <div class="container">
                <div class="title-list">
                    <h3 class="title">BrewMaster's</h3>
                </div>
                <nav class="nav-list">
                    <ul>
                        <li><a href="#howItWorks">How It Works</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="heroContainer">
                <div class="heroLeft">
                    <h1 class="heroTitle1">Find Your Ideal Coffee Match with</h1>
                    <h1 class="heroTitle1">BrewMaster's Recommendations</h1>

                    <h3 class="tagline">Personalized Coffee Selections Tailored Just for You</h3>

                    <br>
                    <a href="/dashboard" class="button">Discover Your Brew</a>
                </div>
                <div class="heroRight">
                    <dotlottie-player src="https://lottie.host/2e0df06b-7c5f-4a8a-9b7f-2325be1d0763/xpHiEh9MZp.json"
                        background="transparent" speed="1" loop
                        autoplay></dotlottie-player>
                </div>
            </div>
        </div>
    </div>

    {{-- How It Works Section --}}
    <div class="how_it_works">
        <div class="container">
            <h1 class="how_it_works_title" id="howItWorks">How This Site Works</h1><br>

            <div class="card-container">
                <div class="thiscard">
                    <div class="lottieContainer">
                        <dotlottie-player class="lottieFile"
                            src="https://lottie.host/952e1ede-d304-4951-9868-a0b022919de2/IAYA6E3UQg.json"
                            background="transparent" speed="1" loop autoplay></dotlottie-player>
                    </div>

                    <h2 class="cardTitle">
                        Input Preference
                    </h2>
                </div>
                <div class="thiscard">
                    <div class="lottieContainer">
                        <dotlottie-player src="https://lottie.host/fd244d26-9fe9-4ff1-818e-5e7d66fe2a00/em7fcWkxqE.json"
                            background="transparent" speed="1" loop autoplay></dotlottie-player>
                    </div>

                    <h2 class="cardTitle">Choose 1 of 3 Menu</h2>

                </div>
                <div class="thiscard">
                    <div class="lottieContainer">
                        <dotlottie-player src="https://lottie.host/cb637d51-815d-4999-9b0c-027affba445d/JHRgKmjfHZ.json"
                            background="transparent" speed="1" loop autoplay></dotlottie-player>
                    </div>

                    <h2 class="cardTitle">Enjoy Your Coffee!</h2>
                </div>
            </div>

            <div class="CTAButton">
                <a href="/dashboard" class="button2">Try It Now!</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="about">
            <div class="aboutLeft">
                <h1 class="aboutTitle" id="about">About This Site</h1><br>
                <p class="aboutText">At BrewMaster's, we're passionate about coffee and dedicated to enhancing your coffee
                    experience through
                    <strong>content-based filtering</strong>. By analyzing factors like flavor profiles, we personalize
                    recommendations to match
                    your unique tastes. Our platform offers <strong>personalized suggestions and interactive tools</strong>
                    to
                    elevate your
                    coffee journey. Let's explore the world of coffee together. Cheers!
                </p>
            </div>

            <div class="aboutRight">
                <dotlottie-player src="https://lottie.host/800f3610-0a1c-475d-881f-a26bffc9d5bb/1Tc7yqJEZz.json"
                    background="transparent" speed="1" loop autoplay></dotlottie-player>
            </div>

        </div>
    </div>
@endsection

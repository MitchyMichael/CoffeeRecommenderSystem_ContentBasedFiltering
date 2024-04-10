@extends('layout.layout')
@section('main_content')
    {{-- Top Section --}}
    <div class="header">

        {{-- Navigation Bar --}}
        <header class="navbar">
            <div class="title-list">

                <h3 class="title">BrewMaster's</h3>
            </div>
            <nav class="nav-list">
                <ul>
                    <li><a href="#howItWorks">How It Works</a></li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <div class="heroContainer">
                <h1 class="heroTitle1">Find Your Ideal Coffee Match with</h1>
                <h1 class="heroTitle1">BrewMaster's Recommendations</h1>

                <h3 class="tagline">Personalized Coffee Selections Tailored Just for You</h3>

                <br>
                <a href="/dashboard" class="button">Discover Your Brew</a>
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
{{--
    <div class="animatedLine">
        <dotlottie-player src="https://lottie.host/9062900f-b3dd-4d80-9a96-91481535a433/c37BZrW7EQ.json"
            background="transparent" speed="1" loop autoplay></dotlottie-player>
    </div> --}}

    {{-- <div class="CBFSection">
        <dotlottie-player src="https://lottie.host/094935cf-cc8c-41ad-ab03-a168c2c7fa09/7hMrHPeFuF.json"
            background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
    </div> --}}
@endsection

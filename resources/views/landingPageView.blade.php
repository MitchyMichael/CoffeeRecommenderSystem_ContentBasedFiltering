@extends('layout.layout')
@section('main_content')
    @php
        use App\Models\Cafe;
        use Illuminate\Support\Facades\Session;

        $hasCafeId = Session::has('cafeId');
        if ($hasCafeId) {
            $cafeId = Session::get('cafeId');
            $cafe = Cafe::find($cafeId);
            $cafeName = $cafe->cafeName;

            $webTitle = "BrewMaster's ft. $cafeName";
        } else {
            $webTitle = "BrewMaster's";
        }
    @endphp

    {{-- Top Section --}}
    <div class="header">
        {{-- Navigation Bar --}}
        <header class="navbar">
            <div class="container">
                <div class="title-list">
                    <h3 class="title"> {{ $webTitle }} </h3>
                </div>
                <nav class="nav-list">
                    <ul>
                        <li><a href="#howItWorks">Cara Kerja</a></li>
                        <li><a href="#about">Tentang</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="heroContainer">
                <div class="heroLeft">
                    <h1 class="heroTitle1">Temukan Kopi Idealmu dengan</h1>
                    <h1 class="heroTitle1"><i>BrewMaster's Recommendations</i></h1>

                    <h3 class="tagline">Pilihan Kopi yang Dipersonalisasi Khusus untukmu</h3>

                    <br>

                    @php
                        if ($hasCafeId) {
                            $display = 'display: inline-block';
                        } else {
                            $display = 'display: none';
                        }
                    @endphp
                    <a href="/dashboard" class="button" style="{{ $display }}">Coba Sekarang!</a>

                </div>
                <div class="heroRight">
                    <dotlottie-player src="https://lottie.host/2e0df06b-7c5f-4a8a-9b7f-2325be1d0763/xpHiEh9MZp.json"
                        background="transparent" speed="1" loop autoplay></dotlottie-player>
                </div>
            </div>
        </div>
    </div>

    {{-- How It Works Section --}}
    <div class="how_it_works">
        <div class="container">
            <h1 class="how_it_works_title" id="howItWorks">Cara Kerja Website</h1><br>

            <div class="card-container">
                <div class="thiscard">
                    <div class="lottieContainer">
                        <dotlottie-player class="lottieFile"
                            src="https://lottie.host/952e1ede-d304-4951-9868-a0b022919de2/IAYA6E3UQg.json"
                            background="transparent" speed="1" loop autoplay></dotlottie-player>
                    </div>

                    <h2 class="cardTitle">
                        Masukkan Preferensi
                    </h2>
                </div>
                <div class="thiscard">
                    <div class="lottieContainer">
                        <dotlottie-player src="https://lottie.host/fd244d26-9fe9-4ff1-818e-5e7d66fe2a00/em7fcWkxqE.json"
                            background="transparent" speed="1" loop autoplay></dotlottie-player>
                    </div>

                    <h2 class="cardTitle">Pilih 1 dari 3 Menu</h2>

                </div>
                <div class="thiscard">
                    <div class="lottieContainer">
                        <dotlottie-player src="https://lottie.host/cb637d51-815d-4999-9b0c-027affba445d/JHRgKmjfHZ.json"
                            background="transparent" speed="1" loop autoplay></dotlottie-player>
                    </div>

                    <h2 class="cardTitle">Selamat Menikmati!</h2>
                </div>
            </div>

            <div class="CTAButton">
                <a href="/dashboard" class="button2" style="{{ $display }}">Coba Sekarang!</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="about">
            <div class="aboutLeft">
                <h1 class="aboutTitle" id="about">Tentang Website Ini</h1><br>
                <p class="aboutText">Di <i>BrewMaster's</i>, kami sangat bersemangat tentang kopi dan berdedikasi untuk
                    meningkatkan pengalaman kopi Anda melalui <strong><i>Content-Based Filtering</i></strong>. Dengan
                    menganalisis faktor-faktor seperti profil rasa, kami <strong>mempersonalisasi rekomendasi</strong> agar
                    sesuai dengan selera unik Anda. Platform kami menawarkan saran yang dipersonalisasi dan alat interaktif
                    untuk mengangkat perjalanan kopi Anda. Mari kita jelajahi dunia kopi bersama!
                </p>
            </div>

            <div class="aboutRight">
                <dotlottie-player src="https://lottie.host/800f3610-0a1c-475d-881f-a26bffc9d5bb/1Tc7yqJEZz.json"
                    background="transparent" speed="1" loop autoplay></dotlottie-player>
            </div>
        </div>
    </div>
@endsection

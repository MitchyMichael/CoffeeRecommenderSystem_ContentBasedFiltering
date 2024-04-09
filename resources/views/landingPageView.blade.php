@extends('layout.layout')
@section('main_content')
    <header class="navbar">
        <div>
            <h3 class="title">BrewMaster's</h3>
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="#howItWorks">How It Works</a></li>
                <li><a href="#legend">Legend Story</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="header">
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

    <div class="how_it_works">
        <div class="container">
            <h1 class="how_it_works_title" id="howItWorks">How This Website Works</h1><br>

            <div class="card-container">
                <div class="thiscard">Card 1</div>
                <div class="thiscard">Card 2</div>
                <div class="thiscard">Card 3</div>
            </div>
        </div>




    </div>
@endsection

@extends('layout.layout')
@section('main_content')
    <div class="container">
        <div class="thisContainer">
            <div class="endMain">
                <h1>Terima Kasih!</h1>
                <p class="recSubTitle">
                    Beri tahu kasir kamu memesan menu ini!
                </p>

                <div class="endMenu">
                    <?php
                    use App\Models\Choise;
                    use App\Models\Coffee;

                    $thisCustomerId = $customerId;
                    $choise = Choise::findOrFail($thisCustomerId);
                    $coffeeId = $choise->coffee_id;

                    $coffee = Coffee::findOrFail($coffeeId);
                    ?>

                    <h2>{{ $coffee->coffeeName }}</h2>
                    <img src="{{ $coffee->coffeePhoto }}">
                    <p>{{ $coffee->coffeeDescription }}</p>
                    <p><strong>Rp {{ $coffee->coffeePrice }}</strong></p>

                    <br>
                    <a href="/" class="homeButton">Beranda</a>
                </div>
            </div>
        </div>
    </div>
@endsection

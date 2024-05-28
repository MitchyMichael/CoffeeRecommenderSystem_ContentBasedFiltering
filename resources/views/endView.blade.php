@extends('layout.layout')
@section('main_content')
    <div class="container">
        <div class="thisContainer">
            <div class="endMain">
                <h1>Thank You!</h1>
                <p class="recSubTitle">
                    Please tell the cashier you ordered this menu!
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
                    <a href="/" class="homeButton">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection

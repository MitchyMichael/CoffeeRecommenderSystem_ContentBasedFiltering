@extends('layout.layout')
@section('main_content')
    <div class="container">
        <div class="endMain">
            <h1>Thank You!</h1>
            <p class="recSubTitle">
                Please tell the cashier you ordered this menu!
            </p>

            <div class="endMenu">
                <?php
                use App\Models\Choise;
                $thisCustomerId = $customerId;

                $choise = Choise::findOrFail($thisCustomerId);
                $coffeeId = $choise->coffee_id;
                ?>
                
                <p>{{ $coffeeId }}</p>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code to redirect after 20 seconds
        setTimeout(function() {
            window.location.href = '/';
        }, 20000); // 20 seconds in milliseconds
    </script>
@endsection

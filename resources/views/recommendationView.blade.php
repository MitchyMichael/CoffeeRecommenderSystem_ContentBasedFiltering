@extends('layout.layout')

@section('main_content')
    <div class="container">
        <h1>Recommendation Choice Page</h1>
        <p>Customer ID: {{ $thisCustomerID }}</p>

        @foreach ($topRec as $recommendation)
            <?php $coffee = \App\Models\Coffee::find($recommendation); ?>
            @if ($coffee)
                {{ $recommendation }}
                <a href="#" class="coffee-link" data-coffee-id="{{ $coffee->id }}">{{ $coffee->coffeeName }}</a>
                <br>
            @endif
        @endforeach

        <br>

        <a href="/">Dashboard Page</a>
    </div>

    <form id="saveCoffeeForm" action="/save-coffee" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="coffee_id" id="coffeeIdInput">
        <input type="hidden" name="customer_id" id="customerIdInput" value="{{ $thisCustomerID }}">
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const coffeeLinks = document.querySelectorAll('.coffee-link');

            coffeeLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const coffeeId = this.getAttribute('data-coffee-id');
                    document.getElementById('coffeeIdInput').value = coffeeId;
                    document.getElementById('saveCoffeeForm').submit();
                });
            });
        });
    </script>
@endsection

@extends('layout.layout')

@section('main_content')
    <div class="container">
        <div class="mainContentRec">
            <h1>We recommend these coffee for you!</h1>
            <h2 class="recSubTitle">Please select one menu.</h2>
            <br>

            <div class="recContainer">
                @foreach ($topRec as $recommendation)
                    <?php $coffee = \App\Models\Coffee::find($recommendation); ?>
                    @if ($coffee)
                        <div class="coffeeRec">
                            <div class="container">
                                <a href="#" class="coffee-link" data-coffee-id="{{ $coffee->id }}">
                                    <div class="recMenu">
                                        <img src="{{ $coffee->coffeePhoto }}" class="recPhoto"> <br><br>
                                        <strong>{{ $coffee->coffeeName }} </strong>
                                        <br>
                                        {{ $coffee->coffeeDescription }}
                                        <br><br>
                                        Rp {{ $coffee->coffeePrice }}
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="item-description-popup" style="display: none;">
        <div class="description">

        </div>

        <div class="confirmButton">
            <h3>Confirm</h3>
            <h3>Cancel</h3>
        </div>
    </div>

    <form id="saveCoffeeForm" action="/save-coffee" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="coffee_id" id="coffeeIdInput">
        <input type="hidden" name="customer_id" id="customerIdInput" value="{{ $thisCustomerID }}">
    </form>

    {{-- <script src="/js/submitCoffeeChosen.js"></script> --}}
    <script src="/js/coffeePopUp.js"></script>
@endsection

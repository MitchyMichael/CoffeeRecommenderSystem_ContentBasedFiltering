@extends('layout.layout')
@section('main_content')
    {{-- 3 Main Recommendation --}}
    <div class="container">
        <div class="mainContentRec">
            <h1>We recommend these coffee for you!</h1>
            <h2 class="recSubTitle">Please select one menu.</h2>
            <br>

            @php
                $hasCafeId = Session::has('cafeId');
                if ($hasCafeId) {
                    $cafeId = Session::get('cafeId');
                }
            @endphp

            <div class="recContainer">
                <?php $coffeeCount = 0; ?>
                @foreach ($topRec as $recommendation)
                    <?php $coffee = \App\Models\Coffee::find($recommendation); ?>
                    @if ($coffee)
                        <?php $coffeeCount++; ?>
                        <div class="coffeeRec">
                            <div class="container">
                                <a href="#" class="coffee-link" data-coffee-id="{{ $coffee->id }}"
                                    coffee-sort-id="{{ $coffeeCount }}">
                                    @if ($coffeeCount == 1)
                                        <div class="recMenuFirst">
                                            <p class="topRecTitle">Top Recommendation</p>
                                            <img src="{{ $coffee->coffeePhoto }}" class="recPhoto">
                                            <br> <br>
                                            <div class="recPhotoDesc">
                                                <strong>{{ $coffee->coffeeName }} </strong>
                                                <br>
                                                {{ $coffee->coffeeDescription }}
                                                <br><br>
                                                Rp {{ $coffee->coffeePrice }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="recMenu">
                                            <img src="{{ $coffee->coffeePhoto }}" class="recPhoto"> <br><br>
                                            <div class="recPhotoDesc">
                                                <strong>{{ $coffee->coffeeName }} </strong>
                                                <br>
                                                {{ $coffee->coffeeDescription }}
                                                <br><br>
                                                Rp {{ $coffee->coffeePrice }}
                                            </div>
                                        </div>
                                    @endif
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="recContainerOthers">
                <div class="buttonOthers">
                    Select others
                </div>
            </div>
        </div>
    </div>

    {{-- Other Recommendation --}}
    <div class="container">
        <div class="mainContentRecOther" style="display: none">
            <h1>Other coffee for you!</h1>
            <h2 class="recSubTitle">Please select one menu.</h2>
            <br>

            <div class="otherRecContainer">
                <?php $coffeeCount = 0; ?>
                @foreach ($sortRec as $recommendation)
                    <?php $coffee = \App\Models\Coffee::find($recommendation); ?>
                    @if ($coffee)
                        <?php $coffeeCount++; ?>
                        <a href="#" class="coffee-link2" data-coffee-id="{{ $coffee->id }}"
                            coffee-sort-id="{{ $coffeeCount }}">
                            @if ($coffeeCount == 1)
                                <div class="otherRecMenuFirst">
                                    <img src="{{ $coffee->coffeePhoto }}" class="otherRecPhoto"> <br><br>
                                    <div class="otherRecPhotoDesc">
                                        <i>Top Recommendation</i><br>
                                        <strong>{{ $coffee->coffeeName }} </strong>
                                        <br>
                                        {{ $coffee->coffeeDescription }}
                                        <br><br>
                                        Rp {{ $coffee->coffeePrice }}
                                    </div>
                                </div>
                            @else
                                <div class="otherRecMenu">
                                    <img src="{{ $coffee->coffeePhoto }}" class="otherRecPhoto"> <br><br>
                                    <div class="otherRecPhotoDesc">
                                        <strong>{{ $coffee->coffeeName }} </strong>
                                        <br>
                                        {{ $coffee->coffeeDescription }}
                                        <br><br>
                                        Rp {{ $coffee->coffeePrice }}
                                    </div>
                                </div>
                            @endif
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="item-description-popup" style="display: none;">
        <div class="description"></div>
        <div class="confirmButton">
            <h3 class="cancelButton">Cancel</h3>
            <h3 class="confirmButton2">Confirm</h3>
        </div>
    </div>

    <form id="saveCoffeeForm" action="/save-coffee" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="coffee_id" id="coffeeIdInput">
        <input type="hidden" name="customer_id" id="customerIdInput" value="{{ $thisCustomerID }}">
        <input type="hidden" name="sort_id" id="sortId">
    </form>

    <script src="/js/otherRecommendation.js"></script>
    <script src="/js/submitCoffeeChosen.js"></script>
    <script src="/js/coffeePopUp.js"></script>
@endsection

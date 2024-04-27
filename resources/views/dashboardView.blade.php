@extends('layout.layout')

@section('main_content')
    <div class="container">
        <div class="inputForm">
            <h1>
                Tell us your coffee preference!
            </h1>
            <form action="{{ url('/preferences') }}" method="POST">
                @csrf

                <div class="preferenceForm">
                    {{-- Mood Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">How are you today?</legend>
                        <label for="mood1">
                            <input type="radio" id="mood1" name="preferenceMood" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/156c8a97-758f-4006-a14f-e88189c8cb9f/pRvyMkbq4Y.json"
                                        background="transparent" speed="1" loop autoplay class="inputChoise">
                                    </dotlottie-player>
                                    <p>Not Good</p>
                                </div>
                            </span>
                        </label>

                        <label for="mood3">
                            <input type="radio" id="mood3" name="preferenceMood" value="3">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/7f2c3da9-f531-4430-b3bf-3cb39d8e4268/WjCL0FLgaV.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Netral</p>
                                </div>
                            </span>
                        </label>

                        <label for="mood5">
                            <input type="radio" id="mood5" name="preferenceMood" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/91c766f6-85ef-4061-921e-c1e781c2d94f/2d1IMO75io.json"
                                        background="transparent" speed="1" loop autoplay
                                        class="inputChoise"></dotlottie-player>
                                    <p>Happy</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Activity Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">What will you do after this?</legend>
                        <label for="chilling">
                            <input type="radio" id="chilling" name="preferenceActivity" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/87839366-0ff1-4e00-94cf-902fc3df322a/XRYeBmKow5.json"
                                        background="transparent" speed="1" loop autoplay
                                        class="inputChoise"></dotlottie-player>
                                    <p>Chilling / Resting</p>
                                </div>
                            </span>
                        </label>
                        <label for="working">
                            <input type="radio" id="working" name="preferenceActivity" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/64f5027f-8ca3-483f-9492-a3e529538a1e/Kb3SQCSrh6.json"
                                        background="transparent" speed="1" loop autoplay
                                        class="inputChoise"></dotlottie-player>
                                    <p>Doing Something</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Temperature Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you prefer ice coffee or hot coffee?</legend>
                        <label for="cold">
                            <input type="radio" id="cold" name="preferenceCoffeeTemperature" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/d62d4b75-1a4c-45ec-84d0-220b69c453a1/rVVlyTVZAc.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Ice Coffee</p>
                                </div>
                            </span>
                        </label>
                        <label for="hot">
                            <input type="radio" id="hot" name="preferenceCoffeeTemperature" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/63975f44-f744-4030-8187-5c6e0c256be4/aoLBi1kSAA.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Hot Coffee</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Sweetness Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Desired sugar level</legend>
                        <label for="sweetness1">
                            <input type="radio" id="sweetness1" name="preferenceCoffeeSweetness" value="1">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/noSugar.svg">
                                    <p>No Sugar</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness2">
                            <input type="radio" id="sweetness2" name="preferenceCoffeeSweetness" value="2">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/lessSugar.svg">
                                    <p>Less Sugar</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness3">
                            <input type="radio" id="sweetness3" name="preferenceCoffeeSweetness" value="3">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/normalSugar.svg">
                                    <p>Normal Sugar</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness4">
                            <input type="radio" id="sweetness4" name="preferenceCoffeeSweetness" value="4">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/moreSugar.svg">
                                    <p>More Sugar</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness5">
                            <input type="radio" id="sweetness5" name="preferenceCoffeeSweetness" value="5">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/extraSugar.svg">
                                    <p>Extra Sugar</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Milkness Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you want it with milk?</legend>
                        <label for="no_milk">
                            <input type="radio" id="no_milk" name="preferenceCoffeeMilkness" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/a9fdeac8-08a4-4874-a293-90508ddbe07c/01P1wg7ES2.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>No Milk</p>
                                </div>
                            </span>
                        </label>
                        <label for="with_milk">
                            <input type="radio" id="with_milk" name="preferenceCoffeeMilkness" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/0880cf67-500e-4b5d-887d-6b560ff28ffb/soEv6NIgHp.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>With Milk</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Price Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Does price influence your choice?</legend>

                        <label for="yes">
                            <input type="radio" id="yes" name="preferenceCoffeePrice" value="1">
                            <span>
                                <div class="inSpanSugar">
                                    <p>Yes</p>
                                </div>
                            </span>
                        </label>

                        <label for="IDC">
                            <input type="radio" id="IDC" name="preferenceCoffeePrice" value="3">
                            <span>
                                <div class="inSpanSugar">
                                    <p>Netral</p>
                                </div>
                            </span>
                        </label>

                        <label for="no">
                            <input type="radio" id="no" name="preferenceCoffeePrice" value="5">
                            <span>
                                <div class="inSpanSugar">
                                    <p>No</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Acidity Level Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Desired acidity level</legend>
                        <label for="acidity1">
                            <input type="radio" id="acidity1" name="preferenceCoffeeAcidityLevel" value="1">
                            <span>
                                <div class="inSpanAcid">
                                    <p>Not acid</p>
                                </div>
                            </span>
                        </label>
                        <label for="acidity3">
                            <input type="radio" id="acidity3" name="preferenceCoffeeAcidityLevel" value="3">
                            <span>
                                <div class="inSpanAcid">
                                    <p>Netral</p>
                                </div>
                            </span>
                        </label>
                        <label for="acidity5">
                            <input type="radio" id="acidity5" name="preferenceCoffeeAcidityLevel" value="5">
                            <span>
                                <div class="inSpanAcid">
                                    <p>Acid</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Strength Level Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you prefer a strong coffee or not?</legend>
                        <label for="strength1">
                            <input type="radio" id="strength1" name="preferenceCoffeeStrengthLevel" value="1">
                            <span>
                                <div class="inSpanAcid">
                                    <p>Not strong</p>
                                </div>
                            </span>
                        </label>
                        <label for="strength3">
                            <input type="radio" id="strength3" name="preferenceCoffeeStrengthLevel" value="3">
                            <span>
                                <div class="inSpanAcid">
                                    <p>Netral</p>
                                </div>
                            </span>
                        </label>
                        <label for="strength5">
                            <input type="radio" id="strength5" name="preferenceCoffeeStrengthLevel" value="5">
                            <span>
                                <div class="inSpanAcid">
                                    <p>Strong</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>
                </div>

                {{-- Submit Button --}}
                <input class="formButton2" type="button" id="nextBtn" value="Next" style="display: none;">
                <input class="formButton2" type="submit" id="submitBtn" value="Submit Preferences"
                    style="display: none;">
            </form>

            <script src="/js/hideFieldset.js"></script>
        </div>
    </div>
@endsection

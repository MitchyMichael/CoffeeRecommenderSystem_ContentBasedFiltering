@extends('layout.layout')

@section('main_content')
    <div class="container">
        <div class="inputForm">
            <h1>
                Tell us your preference!
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
                                <dotlottie-player
                                    src="https://lottie.host/156c8a97-758f-4006-a14f-e88189c8cb9f/pRvyMkbq4Y.json"
                                    background="transparent" speed="1" loop autoplay class="inputChoise">
                                </dotlottie-player>
                            </span>
                        </label>

                        <label for="mood5">
                            <input type="radio" id="mood5" name="preferenceMood" value="5">
                            <span>
                                <dotlottie-player
                                    src="https://lottie.host/91c766f6-85ef-4061-921e-c1e781c2d94f/2d1IMO75io.json"
                                    background="transparent" speed="1" loop autoplay
                                    class="inputChoise"></dotlottie-player>
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
                                <dotlottie-player
                                    src="https://lottie.host/87839366-0ff1-4e00-94cf-902fc3df322a/XRYeBmKow5.json"
                                    background="transparent" speed="1" loop autoplay
                                    class="inputChoise"></dotlottie-player>
                            </span>
                        </label>
                        <label for="working">
                            <input type="radio" id="working" name="preferenceActivity" value="5">
                            <span>
                                <dotlottie-player
                                    src="https://lottie.host/64f5027f-8ca3-483f-9492-a3e529538a1e/Kb3SQCSrh6.json"
                                    background="transparent" speed="1" loop autoplay
                                    class="inputChoise"></dotlottie-player>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Temperature Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Ice coffee or hot coffee?</legend>
                        <label for="cold">
                            <input type="radio" id="cold" name="preferenceCoffeeTemperature" value="1">
                            <span>Cold</span>
                        </label>
                        <label for="hot">
                            <input type="radio" id="hot" name="preferenceCoffeeTemperature" value="5">
                            <span>Hot</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Sweetness Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Sweet or not sweet?</legend>
                        <label for="sweetness1">
                            <input type="radio" id="sweetness1" name="preferenceCoffeeSweetness" value="1">
                            <span>1 (Not sweet)</span>
                        </label>
                        <label for="sweetness2">
                            <input type="radio" id="sweetness2" name="preferenceCoffeeSweetness" value="2">
                            <span>2</span>
                        </label>
                        <label for="sweetness3">
                            <input type="radio" id="sweetness3" name="preferenceCoffeeSweetness" value="3">
                            <span>3</span>
                        </label>
                        <label for="sweetness4">
                            <input type="radio" id="sweetness4" name="preferenceCoffeeSweetness" value="4">
                            <span>4</span>
                        </label>
                        <label for="sweetness5">
                            <input type="radio" id="sweetness5" name="preferenceCoffeeSweetness" value="5">
                            <span>5 (Sweet)</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Milkness Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you want some milk?</legend>
                        <label for="no_milk">
                            <input type="radio" id="no_milk" name="preferenceCoffeeMilkness" value="1">
                            <span>No Milk</span>
                        </label>
                        <label for="with_milk">
                            <input type="radio" id="with_milk" name="preferenceCoffeeMilkness" value="5">
                            <span>With Milk</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Price Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you prefer the cheap one or the pricy one?</legend>
                        <label for="cheap">
                            <input type="radio" id="cheap" name="preferenceCoffeePrice" value="1">
                            <span>Cheap</span>
                        </label>
                        <label for="pricy">
                            <input type="radio" id="pricy" name="preferenceCoffeePrice" value="5">
                            <span>Pricy</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Drink Type Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you prefer pure coffee or variant coffee?</legend>
                        <label for="pure_coffee">
                            <input type="radio" id="pure_coffee" name="preferenceCoffeeDrinkType" value="1">
                            <span>Pure Coffee</span>
                        </label>
                        <label for="variant_coffee">
                            <input type="radio" id="variant_coffee" name="preferenceCoffeeDrinkType" value="5">
                            <span>Variant Coffee</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Acidity Level Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you prefer the more acid one or not?</legend>
                        <label for="acidity1">
                            <input type="radio" id="acidity1" name="preferenceCoffeeAcidityLevel" value="1">
                            <span>1 (Not acid)</span>
                        </label>
                        <label for="acidity2">
                            <input type="radio" id="acidity2" name="preferenceCoffeeAcidityLevel" value="2">
                            <span>2</span>
                        </label>
                        <label for="acidity3">
                            <input type="radio" id="acidity3" name="preferenceCoffeeAcidityLevel" value="3">
                            <span>3</span>
                        </label>
                        <label for="acidity4">
                            <input type="radio" id="acidity4" name="preferenceCoffeeAcidityLevel" value="4">
                            <span>4</span>
                        </label>
                        <label for="acidity5">
                            <input type="radio" id="acidity5" name="preferenceCoffeeAcidityLevel" value="5">
                            <span>5 (Acid)</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Strength Level Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you prefer a strong coffee or not?</legend>
                        <label for="strength1">
                            <input type="radio" id="strength1" name="preferenceCoffeeStrengthLevel" value="1">
                            <span>1 (Not strong)</span>
                        </label>
                        <label for="strength2">
                            <input type="radio" id="strength2" name="preferenceCoffeeStrengthLevel" value="2">
                            <span>2</span>
                        </label>
                        <label for="strength3">
                            <input type="radio" id="strength3" name="preferenceCoffeeStrengthLevel" value="3">
                            <span>3</span>
                        </label>
                        <label for="strength4">
                            <input type="radio" id="strength4" name="preferenceCoffeeStrengthLevel" value="4">
                            <span>4</span>
                        </label>
                        <label for="strength5">
                            <input type="radio" id="strength5" name="preferenceCoffeeStrengthLevel" value="5">
                            <span>5 (Strong)</span>
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

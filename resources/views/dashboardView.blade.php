@extends('layout.layout')

@section('main_content')
    <div class="container">
        <div class="inputForm">
            <h1>
                Tell us about your preference!
            </h1>
            <form action="{{ url('/preferences') }}" method="POST">
                @csrf

                <div class="preferenceForm">
                    {{-- Mood Preference --}}
                    <fieldset class="slide-group">
                        <legend>Mood Preference:</legend>
                        <label for="mood1">
                            <input type="radio" id="mood1" name="preferenceMood" value="1">
                            <span>1 (Sad)</span>
                        </label>
                        <label for="mood2">
                            <input type="radio" id="mood2" name="preferenceMood" value="2">
                            <span>2</span>
                        </label>
                        <label for="mood3">
                            <input type="radio" id="mood3" name="preferenceMood" value="3">
                            <span>3</span>
                        </label>
                        <label for="mood4">
                            <input type="radio" id="mood4" name="preferenceMood" value="4">
                            <span>4</span>
                        </label>
                        <label for="mood5">
                            <input type="radio" id="mood5" name="preferenceMood" value="5">
                            <span>5 (Happy)</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Activity Preference --}}
                    <fieldset class="slide-group">
                        <legend>Activity Preference:</legend>
                        <label for="chilling">
                            <input type="radio" id="chilling" name="preferenceActivity" value="1">
                            <span>Chilling</span>
                        </label>
                        <label for="working">
                            <input type="radio" id="working" name="preferenceActivity" value="5">
                            <span>Working</span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Temperature Preference --}}
                    <fieldset class="slide-group">
                        <legend>Coffee Temperature Preference:</legend>
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
                        <legend>Coffee Sweetness Preference:</legend>
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
                        <legend>Coffee Milkness Preference:</legend>
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
                        <legend>Coffee Price Preference:</legend>
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
                        <legend>Coffee Drink Type Preference:</legend>
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
                        <legend>Coffee Acidity Level Preference:</legend>
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
                        <legend>Coffee Strength Level Preference:</legend>
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
                <input class="formButton2" type="submit" id="submitBtn" value="Submit Preferences" style="display: none;">
            </form>

            <script src="/js/hideFieldset.js"></script>
        </div>
    </div>
@endsection

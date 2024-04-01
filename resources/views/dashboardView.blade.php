@extends('layout.layout')

@section('main_content')
    <div class="container">
        <h1>Landing Page</h1>
        <h3>This is the landing page of Coffee Recommender System using Collaborative Filtering</h3>

        <form action="{{ url('/preferences') }}" method="POST">
            @csrf
            {{-- <label for="preferenceMood">Mood:</label><br>
                <input type="radio" id="sad" name="preferenceMood" value="0">
                <label for="sad">Sad</label>
                <input type="radio" id="happy" name="preferenceMood" value="1">
                <label for="happy">Happy</label><br><br> --}}

            {{-- <label for="preferenceMood">Mood:</label><br>
                <input type="number" id="mood" name="preferenceMood" min="1" max="5" value="1">
                <br><br> --}}

            <label for="preferenceMood">Mood:</label><br>
            <input type="radio" id="mood1" name="preferenceMood" value="1">
            <label for="mood1">1 (Sad)</label>
            <input type="radio" id="mood2" name="preferenceMood" value="2">
            <label for="mood2">2</label>
            <input type="radio" id="mood3" name="preferenceMood" value="3">
            <label for="mood3">3</label>
            <input type="radio" id="mood4" name="preferenceMood" value="4">
            <label for="mood4">4</label>
            <input type="radio" id="mood5" name="preferenceMood" value="5">
            <label for="mood5">5 (Happy)</label>
            <br><br>

            <label for="preferenceActivity">Activity:</label><br>
            <input type="radio" id="chilling" name="preferenceActivity" value="1">
            <label for="chilling">Chilling</label>
            <input type="radio" id="working" name="preferenceActivity" value="5">
            <label for="working">Working</label><br><br>

            <label for="preferenceCoffeeTemperature">Coffee Temperature:</label><br>
            <input type="radio" id="cold" name="preferenceCoffeeTemperature" value="1">
            <label for="cold">Cold</label>
            <input type="radio" id="hot" name="preferenceCoffeeTemperature" value="5">
            <label for="hot">Hot</label><br><br>

            {{-- <label for="preferenceCoffeeSweetness">Coffee Sweetness:</label><br>
                <input type="radio" id="not_sweet" name="preferenceCoffeeSweetness" value="0">
                <label for="not_sweet">Not Sweet</label>
                <input type="radio" id="sweet" name="preferenceCoffeeSweetness" value="1">
                <label for="sweet">Sweet</label><br><br> --}}

            <label for="preferenceCoffeeSweetness">Coffee Sweetness:</label><br>
            <input type="radio" id="mood1" name="preferenceCoffeeSweetness" value="1">
            <label for="mood1">1 (Not sweet)</label>
            <input type="radio" id="mood2" name="preferenceCoffeeSweetness" value="2">
            <label for="mood2">2</label>
            <input type="radio" id="mood3" name="preferenceCoffeeSweetness" value="3">
            <label for="mood3">3</label>
            <input type="radio" id="mood4" name="preferenceCoffeeSweetness" value="4">
            <label for="mood4">4</label>
            <input type="radio" id="mood5" name="preferenceCoffeeSweetness" value="5">
            <label for="mood5">5 (Sweet)</label>
            <br><br>

            <label for="preferenceCoffeeMilkness">Coffee Milkness:</label><br>
            <input type="radio" id="no_milk" name="preferenceCoffeeMilkness" value="1">
            <label for="no_milk">No Milk</label>
            <input type="radio" id="with_milk" name="preferenceCoffeeMilkness" value="5">
            <label for="with_milk">With Milk</label><br><br>

            {{-- <label for="preferenceMood">Coffee Milkness:</label><br>
                <input type="radio" id="mood1" name="preferenceMood" value="1">
                <label for="mood1">1 (No Milk)</label>
                <input type="radio" id="mood2" name="preferenceMood" value="2">
                <label for="mood2">2</label>
                <input type="radio" id="mood3" name="preferenceMood" value="3">
                <label for="mood3">3</label>
                <input type="radio" id="mood4" name="preferenceMood" value="4">
                <label for="mood4">4</label>
                <input type="radio" id="mood5" name="preferenceMood" value="5">
                <label for="mood5">5 (With Milk)</label>
                <br><br> --}}

            {{-- <label for="preferenceCoffeeMilkType">Coffee Milk Type:</label><br>
            <input type="radio" id="almond_milk" name="preferenceCoffeeMilkType" value="1">
            <label for="almond_milk">Almond Milk</label>
            <input type="radio" id="regular_milk" name="preferenceCoffeeMilkType" value="5">
            <label for="regular_milk">Regular Milk</label><br><br> --}}

            <label for="preferenceCoffeePrice">Coffee Price:</label><br>
            <input type="radio" id="cheap" name="preferenceCoffeePrice" value="1">
            <label for="cheap">Cheap</label>
            <input type="radio" id="pricy" name="preferenceCoffeePrice" value="5">
            <label for="pricy">Pricy</label><br><br>

            <label for="preferenceCoffeeDrinkType">Coffee Drink Type:</label><br>
            <input type="radio" id="pure_coffee" name="preferenceCoffeeDrinkType" value="1">
            <label for="pure_coffee">Pure Coffee</label>
            <input type="radio" id="variant_coffee" name="preferenceCoffeeDrinkType" value="5">
            <label for="variant_coffee">Variant Coffee</label><br><br>

            {{-- <label for="preferenceCoffeeAcidityLevel">Coffee Acidity Level:</label><br>
                <input type="radio" id="not_acid" name="preferenceCoffeeAcidityLevel" value="0">
                <label for="not_acid">Not Acid</label>
                <input type="radio" id="acid" name="preferenceCoffeeAcidityLevel" value="1">
                <label for="acid">Acid</label><br><br> --}}

            <label for="preferenceCoffeeAcidityLevel">Coffee Acidity Level:</label><br>
            <input type="radio" id="mood1" name="preferenceCoffeeAcidityLevel" value="1">
            <label for="mood1">1 (Not acid)</label>
            <input type="radio" id="mood2" name="preferenceCoffeeAcidityLevel" value="2">
            <label for="mood2">2</label>
            <input type="radio" id="mood3" name="preferenceCoffeeAcidityLevel" value="3">
            <label for="mood3">3</label>
            <input type="radio" id="mood4" name="preferenceCoffeeAcidityLevel" value="4">
            <label for="mood4">4</label>
            <input type="radio" id="mood5" name="preferenceCoffeeAcidityLevel" value="5">
            <label for="mood5">5 (Acid)</label>
            <br><br>

            {{-- <label for="preferenceCoffeeStrengthLevel">Coffee Strength Level:</label><br>
                <input type="radio" id="not_strong" name="preferenceCoffeeStrengthLevel" value="0">
                <label for="not_strong">Not Strong</label>
                <input type="radio" id="strong" name="preferenceCoffeeStrengthLevel" value="1">
                <label for="strong">Strong</label><br><br> --}}

            <label for="preferenceCoffeeStrengthLevel">Coffee Strength Level:</label><br>
            <input type="radio" id="mood1" name="preferenceCoffeeStrengthLevel" value="1">
            <label for="mood1">1 (Not strong)</label>
            <input type="radio" id="mood2" name="preferenceCoffeeStrengthLevel" value="2">
            <label for="mood2">2</label>
            <input type="radio" id="mood3" name="preferenceCoffeeStrengthLevel" value="3">
            <label for="mood3">3</label>
            <input type="radio" id="mood4" name="preferenceCoffeeStrengthLevel" value="4">
            <label for="mood4">4</label>
            <input type="radio" id="mood5" name="preferenceCoffeeStrengthLevel" value="5">
            <label for="mood5">5 (Strong)</label>
            <br><br>

            <input type="submit" value="Submit Preferences">
        </form>
    </div>
@endsection

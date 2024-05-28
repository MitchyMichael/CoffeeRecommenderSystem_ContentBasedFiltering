@extends('layout.layout')
@section('main_content')
    <script>
        // Function to get query parameters from the URL
        function getQueryParams() {
            const params = {};
            const queryString = window.location.search.substring(1);
            const queries = queryString.split("&");
            for (const query of queries) {
                const [key, value] = query.split("=");
                params[key] = decodeURIComponent(value);
            }
            return params;
        }

        // Get the cafeId from the query parameters and display it
        window.onload = function() {
            const params = getQueryParams();
            const cafeId = params.cafeId;
            // Set the cafeId in the h1 element
            if (cafeId) {
                document.getElementById('cafeIdDisplay').textContent = cafeId;
                document.getElementById('cafeIdField').value = cafeId;
            }
        };
    </script>

    <h1>Add New Coffee</h1>
    <h1>Cafe ID: <span id="cafeIdDisplay"></span></h1>

    <h2>Coffee Form</h2>
    <form action="/submitNewCoffee" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="coffeeName">Coffee Name:</label><br>
        <input type="text" id="coffeeName" name="coffeeName"><br>

        <label for="coffeeDescription">Coffee Description:</label><br>
        <input type="text" id="coffeeDescription" name="coffeeDescription"><br>

        <label for="coffeePrice">Coffee Price:</label><br>
        <input type="number" id="coffeePrice" name="coffeePrice"><br>

        <label for="coffeeIsBestSeller">Is Best Seller:</label><br>
        <input type="checkbox" id="coffeeIsBestSeller" name="coffeeIsBestSeller" value="true"><br>

        <label for="coffeePreferenceMood">Preference Mood (1-5):</label><br>
        <input type="number" id="coffeePreferenceMood" name="coffeePreferenceMood" min="1" max="5"><br>

        <label for="coffeePreferenceActivity">Preference Activity (1-5):</label><br>
        <input type="number" id="coffeePreferenceActivity" name="coffeePreferenceActivity" min="1"
            max="5"><br>

        <label for="coffeeTemperature">Temperature (1 or 5):</label><br>
        <input type="number" id="coffeeTemperature" name="coffeeTemperature" min="1" max="5"><br>

        <label for="coffeeSweetness">Sweetness (1-5):</label><br>
        <input type="number" id="coffeeSweetness" name="coffeeSweetness" min="1" max="5"><br>

        <label for="coffeeMilkness">Milkness (1 or 5):</label><br>
        <input type="number" id="coffeeMilkness" name="coffeeMilkness" min="1" max="5"><br>

        <label for="coffeeCheapness">Cheapness (1-5):</label><br>
        <input type="number" id="coffeeCheapness" name="coffeeCheapness" min="1" max="5"><br>

        <label for="coffeeAcidityLevel">Acidity Level (1-5):</label><br>
        <input type="number" id="coffeeAcidityLevel" name="coffeeAcidityLevel" min="1" max="5"><br>

        <label for="coffeeStrengthLevel">Strength Level (1-5):</label><br>
        <input type="number" id="coffeeStrengthLevel" name="coffeeStrengthLevel" min="1" max="5"><br>

        <label for="coffeePhoto">Coffee Photo:</label><br>
        <input type="file" id="coffeePhoto" name="coffeePhoto" accept="image/*"><br>

        <input type="hidden" id="cafeIdField" name="cafeIdField">

        <input type="submit" value="Submit">
    </form>
@endsection

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

    <div class="container">
        <div class="addCoffeeForm">
            <br><br>
            <h1>Tambah Menu Kopi</h1><br>
            <form action="/submitNewCoffee" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="coffeeName">Nama menu:</label> <input type="text" id="coffeeName" name="coffeeName" value="Menu Baru"><br>

                <label for="coffeeDescription">Deskripsi Menu:</label> <input type="text" id="coffeeDescription" name="coffeeDescription" value="Deskripsi Menu"><br>

                <label for="coffeePrice">Harga Menu:</label> <input type="number" id="coffeePrice" name="coffeePrice" value="20000">

                <br>

                <input type="hidden" id="coffeeIsBestSeller" name="coffeeIsBestSeller" value="true"><br>

                <label for="coffeePreferenceMood">Angka Preferensi Mood (1-5(Baik)):</label> <input type="number" id="coffeePreferenceMood" name="coffeePreferenceMood" min="1"
                    max="5" value="0"><br>

                <label for="coffeePreferenceActivity">Angka Preferensi Kegiatan (1(Bersantai) atau 5(Melakukan sesuatu)):</label> <input type="number" id="coffeePreferenceActivity" name="coffeePreferenceActivity" min="1"
                    max="5" value="0"><br>

                <label for="coffeeTemperature">Suhu Menu (1(Dingin) atau 5(Panas)):</label> <input type="number" id="coffeeTemperature" name="coffeeTemperature" min="1" max="5" value="0"><br>

                <label for="coffeeSweetness">Angka Tingkat Kemanisan (1-5(Sangat Manis)):</label> <input type="number" id="coffeeSweetness" name="coffeeSweetness" min="1" max="5" value="0"><br>

                <label for="coffeeMilkness">Penggunaan Susu (1(Tanpa Susu) atau 5(Dengan Susu)):</label> <input type="number" id="coffeeMilkness" name="coffeeMilkness" min="1" max="5" value="0"><br>

                <label for="coffeeCheapness">Angka Tingkat Harga (1-5(Lebih Mahal)):</label> <input type="number" id="coffeeCheapness" name="coffeeCheapness" min="1" max="5" value="0"><br>

                <label for="coffeeAcidityLevel">Angka Tingkat Keasaman (1-5(Asam)):</label> <input type="number" id="coffeeAcidityLevel" name="coffeeAcidityLevel" min="1" max="5" value="0"><br>

                <label for="coffeeStrengthLevel">Angka Tingkat Kekuatan (1-5(Kuat)):</label> <input type="number" id="coffeeStrengthLevel" name="coffeeStrengthLevel" min="1" max="5" value="0">

                <br><br>

                <label for="coffeePhoto">Foto Menu:</label><br>
                <input type="file" id="coffeePhoto" name="coffeePhoto" accept="image/*">

                <br>

                <input type="hidden" id="cafeIdField" name="cafeIdField">

                <br>

                <input type="submit" value="Simpan" class="btn btn-primary">
                <br><br><br>
            </form>
        </div>
    </div>
@endsection

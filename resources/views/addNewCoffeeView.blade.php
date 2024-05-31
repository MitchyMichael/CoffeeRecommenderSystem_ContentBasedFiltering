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
            <br>
            <h1>Tambah Menu Kopi</h1><br>
            <h1 style="display:none;">Cafe ID: <span id="cafeIdDisplay"></span></h1>

            <form action="/submitNewCoffee" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Nama Menu --}}
                <div class="form-group row">
                    <label for="coffeeName" class="col-sm-2 col-form-label">Nama menu</label><br>
                    <div class="col-sm-10">
                        <input type="text" id="coffeeName" name="coffeeName" value="Menu Baru" class="form-control">
                    </div>
                </div>
                <p></p>

                {{-- Deskripsi Menu --}}
                <div class="form-group row">
                    <label for="coffeeDescription" class="col-sm-2 col-form-label">Deskripsi Menu</label><br>
                    <div class="col-sm-10">
                        <input type="text" id="coffeeDescription" name="coffeeDescription" value="Deskripsi Menu"
                            class="form-control">
                    </div>
                </div>
                <p></p>

                {{-- Harga Menu --}}
                <div class="form-group row">
                    <label for="coffeePrice" class="col-sm-2 col-form-label">Harga Menu</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeePrice" name="coffeePrice" value="20000" class="form-control">
                    </div>
                </div>
                <hr>

                <input type="hidden" id="coffeeIsBestSeller" name="coffeeIsBestSeller" value="true">

                {{-- Mood --}}
                <div class="form-group row">
                    <label for="coffeePreferenceMood" class="col-sm-2 col-form-label">Angka Preferensi Mood
                        (1-5(Baik))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeePreferenceMood" name="coffeePreferenceMood" min="1"
                            max="5" value="0" class="form-control">
                    </div>
                </div>

                {{-- Activity --}}
                <div class="form-group row">
                    <label for="coffeePreferenceActivity" class="col-sm-2 col-form-label">Angka Preferensi Kegiatan
                        (1(Bersantai) atau 5(Melakukan
                        sesuatu))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeePreferenceActivity" name="coffeePreferenceActivity" min="1"
                            max="5" value="0" class="form-control">
                    </div>
                </div>

                {{-- Temperature --}}
                <div class="form-group row">
                    <label for="coffeeTemperature" class="col-sm-2 col-form-label">Suhu Menu (1(Dingin) atau
                        5(Panas))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeTemperature" name="coffeeTemperature" min="1" max="5"
                            value="0" class="form-control">
                    </div>
                </div>

                {{-- Sweetness --}}
                <div class="form-group row">
                    <label for="coffeeSweetness" class="col-sm-2 col-form-label">Angka Tingkat Kemanisan (1-5(Sangat
                        Manis))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeSweetness" name="coffeeSweetness" min="1" max="5"
                            value="0" class="form-control">
                    </div>
                </div>

                {{-- Milk --}}
                <div class="form-group row">
                    <label for="coffeeMilkness" class="col-sm-2 col-form-label">Penggunaan Susu (1(Tanpa Susu) atau 5(Dengan
                        Susu))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeMilkness" name="coffeeMilkness" min="1" max="5"
                            value="0" class="form-control">
                    </div>
                </div>

                {{-- Price --}}
                <div class="form-group row">
                    <label for="coffeeCheapness" class="col-sm-2 col-form-label">Angka Tingkat Harga (1-5(Lebih
                        Mahal))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeCheapness" name="coffeeCheapness" min="1" max="5"
                            value="0" class="form-control">
                    </div>
                </div>

                {{-- Acid --}}
                <div class="form-group row">
                    <label for="coffeeAcidityLevel" class="col-sm-2 col-form-label">Angka Tingkat Keasaman
                        (1-5(Asam))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeAcidityLevel" name="coffeeAcidityLevel" min="1"
                            max="5" value="0" class="form-control">
                    </div>
                </div>

                {{-- Strength --}}
                <div class="form-group row">
                    <label for="coffeeStrengthLevel" class="col-sm-2 col-form-label">Angka Tingkat Kekuatan
                        (1-5(Kuat))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeStrengthLevel" name="coffeeStrengthLevel" min="1"
                            max="5" value="0" class="form-control">
                    </div>
                </div>
                <hr>

                <div class="custom-file">
                    <label for="coffeePhoto" class="custom-file-label col-sm-2 col-form-label">Foto Menu</label>
                    <input type="file" id="coffeePhoto" name="coffeePhoto" accept="image/*" class="custom-file-input">
                </div>

                <input type="hidden" id="cafeIdField" name="cafeIdField">

                <br>
                <input type="submit" value="Simpan" class="btn btn-primary">
                <br><br><br>
            </form>
        </div>
    </div>
@endsection

@extends('layout.layout')
@section('main_content')
<div class="container">
    <div class="addCoffeeForm">
        <br><br>
        <h1>Edit Coffee</h1><br>
        <form action="{{ route('coffee.update', $coffee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" id="cafeId" name="cafeId" value={{ $coffee->cafeId }}><br>

            <label for="coffeeName">Nama Menu:</label> <input type="text" id="coffeeName" name="coffeeName" value={{ $coffee->coffeeName }}><br>

            <label for="coffeeDescription">Deskripsi Menu:</label> <input type="text" id="coffeeDescription" name="coffeeDescription" value={{ $coffee->coffeeDescription }}><br>

            <label for="coffeePrice">Harga Menu:</label> <input type="number" id="coffeePrice" name="coffeePrice" value={{ $coffee->coffeePrice }}><br>

            <input type="hidden" id="coffeeIsBestSeller" name="coffeeIsBestSeller" value="true"><br>

            <label for="coffeePreferenceMood">Angka Preferensi Mood (1-5(Baik)):</label> <input type="number" id="coffeePreferenceMood" name="coffeePreferenceMood" min="1"
                max="5" value={{ $coffee->coffeePreferenceMood }}><br>

            <label for="coffeePreferenceActivity">Angka Preferensi Kegiatan (1(Bersantai) atau 5(Melakukan sesuatu)):</label> <input type="number" id="coffeePreferenceActivity" name="coffeePreferenceActivity" min="1"
                max="5" value={{ $coffee->coffeePreferenceActivity }}><br>

            <label for="coffeeTemperature">Suhu Menu (1(Dingin) atau 5(Panas)):</label> <input type="number" id="coffeeTemperature" name="coffeeTemperature" min="1" max="5" value={{ $coffee->coffeeTemperature }}><br>

            <label for="coffeeSweetness">Angka Tingkat Kemanisan (1-5(Sangat Manis)):</label> <input type="number" id="coffeeSweetness" name="coffeeSweetness" min="1" max="5" value={{ $coffee->coffeeSweetness }}><br>

            <label for="coffeeMilkness">Penggunaan Susu (1(Tanpa Susu) atau 5(Dengan Susu)):</label> <input type="number" id="coffeeMilkness" name="coffeeMilkness" min="1" max="5" value={{ $coffee->coffeeMilkness }}><br>

            <label for="coffeeCheapness">Angka Tingkat Harga (1-5(Lebih Mahal)):</label> <input type="number" id="coffeeCheapness" name="coffeeCheapness" min="1" max="5" value={{ $coffee->coffeeCheapness }}><br>

            <label for="coffeeAcidityLevel">Angka Tingkat Keasaman (1-5(Asam)):</label> <input type="number" id="coffeeAcidityLevel" name="coffeeAcidityLevel" min="1" max="5" value={{ $coffee->coffeeAcidityLevel }}><br>

            <label for="coffeeStrengthLevel">Angka Tingkat Kekuatan (1-5(Kuat)):</label> <input type="number" id="coffeeStrengthLevel" name="coffeeStrengthLevel" min="1" max="5" value={{ $coffee->coffeeStrengthLevel }}><br><br>

            <label for="coffeePhoto">Foto Menu:</label> <input type="file" id="coffeePhoto" name="coffeePhoto" accept="image/*"><br>
            @if ($coffee->coffeePhoto)
                <img src="{{ asset($coffee->coffeePhoto) }}" style="max-width: 100px; margin-top: 10px;">
            @endif

            <input type="hidden" id="cafeIdField" name="cafeIdField"><br>

            <br>

            <input type="submit" value="Submit" class="btn btn-primary">
            <br><br><br>
        </form>
    </div>
</div>
@endsection

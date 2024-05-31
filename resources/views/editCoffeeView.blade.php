@extends('layout.layout')
@section('main_content')
    <div class="container">
        <div class="addCoffeeForm">
            <br>
            <h1>Edit Menu Kopi</h1><br>
            <form action="{{ route('coffee.update', $coffee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" id="cafeId" name="cafeId" value={{ $coffee->cafeId }}>

                {{-- Nama Menu --}}
                <div class="form-group row">
                    <label for="coffeeName" class="col-sm-2 col-form-label">Nama menu</label><br>
                    <div class="col-sm-10">
                        <input type="text" id="coffeeName" name="coffeeName" class="form-control"
                            value="{{ $coffee->coffeeName }}">
                    </div>
                </div>
                <p></p>

                {{-- Deskripsi Menu --}}
                <div class="form-group row">
                    <label for="coffeeDescription" class="col-sm-2 col-form-label">Deskripsi Menu</label><br>
                    <div class="col-sm-10">
                        <input type="text" id="coffeeDescription" name="coffeeDescription"
                            value="{{ $coffee->coffeeDescription }}" class="form-control">
                    </div>
                </div>
                <p></p>

                {{-- Harga Menu --}}
                <div class="form-group row">
                    <label for="coffeePrice" class="col-sm-2 col-form-label">Harga Menu</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeePrice" name="coffeePrice" value="{{ $coffee->coffeePrice }}"
                            class="form-control">
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
                            max="5" value="{{ $coffee->coffeePreferenceMood }}" class="form-control">
                    </div>
                </div>

                {{-- Activity --}}
                <div class="form-group row">
                    <label for="coffeePreferenceActivity" class="col-sm-2 col-form-label">Angka Preferensi Kegiatan
                        (1(Bersantai) atau 5(Melakukan
                        sesuatu))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeePreferenceActivity" name="coffeePreferenceActivity" min="1"
                            max="5" value="{{ $coffee->coffeePreferenceActivity }}" class="form-control">
                    </div>
                </div>

                {{-- Temperature --}}
                <div class="form-group row">
                    <label for="coffeeTemperature" class="col-sm-2 col-form-label">Suhu Menu (1(Dingin) atau
                        5(Panas))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeTemperature" name="coffeeTemperature" min="1" max="5"
                            value="{{ $coffee->coffeeTemperature }}" class="form-control">
                    </div>
                </div>

                {{-- Sweetness --}}
                <div class="form-group row">
                    <label for="coffeeSweetness" class="col-sm-2 col-form-label">Angka Tingkat Kemanisan (1-5(Sangat
                        Manis))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeSweetness" name="coffeeSweetness" min="1" max="5"
                            value="{{ $coffee->coffeeSweetness }}"class="form-control">
                    </div>
                </div>

                {{-- Milk --}}
                <div class="form-group row">
                    <label for="coffeeMilkness" class="col-sm-2 col-form-label">Penggunaan Susu (1(Tanpa Susu) atau 5(Dengan
                        Susu))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeMilkness" name="coffeeMilkness" min="1" max="5"
                            value="{{ $coffee->coffeeMilkness }}" class="form-control">
                    </div>
                </div>

                {{-- Price --}}
                <div class="form-group row">
                    <label for="coffeeCheapness" class="col-sm-2 col-form-label">Angka Tingkat Harga (1-5(Lebih
                        Mahal))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeCheapness" name="coffeeCheapness" min="1" max="5"
                            value="{{ $coffee->coffeeCheapness }}" class="form-control">
                    </div>
                </div>

                {{-- Acid --}}
                <div class="form-group row">
                    <label for="coffeeAcidityLevel" class="col-sm-2 col-form-label">Angka Tingkat Keasaman
                        (1-5(Asam))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeAcidityLevel" name="coffeeAcidityLevel" min="1"
                            max="5" value="{{ $coffee->coffeeAcidityLevel }}" class="form-control">
                    </div>
                </div>

                {{-- Strength --}}
                <div class="form-group row">
                    <label for="coffeeStrengthLevel" class="col-sm-2 col-form-label">Angka Tingkat Kekuatan
                        (1-5(Kuat))</label>
                    <div class="col-sm-10">
                        <input type="number" id="coffeeStrengthLevel" name="coffeeStrengthLevel" min="1"
                            max="5" value="{{ $coffee->coffeeStrengthLevel }}"class="form-control">
                    </div>
                </div>
                <hr>

                <div class="custom-file">
                    <label for="coffeePhoto" class="custom-file-label col-sm-2 col-form-label">Foto Menu</label>
                    <input type="file" id="coffeePhoto" name="coffeePhoto" accept="image/*"
                        class="custom-file-input">
                    @if ($coffee->coffeePhoto)
                        <img src="{{ asset($coffee->coffeePhoto) }}" style="max-width: 100px; margin-top: 10px;">
                    @endif
                </div>

                <input type="hidden" id="cafeIdField" name="cafeIdField"><br>

                <br>

                <input type="submit" value="Submit" class="btn btn-primary">
                <br><br><br>
            </form>
        </div>
    </div>
@endsection

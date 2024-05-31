@extends('layout.layout')
@section('main_content')
    @php
        $hasCafeId = Session::has('cafeId');
        if ($hasCafeId) {
            $cafeId = Session::get('cafeId');
        }

        $formLink = '/preferences';

        $randomMood = rand(1, 5);
        $randomActivity = rand(1, 5);
        $randomTemperature = rand(1, 5);
        $randomSugar = rand(1, 5);
        $randomMilk = rand(1, 5);
        $randomAcid = rand(1, 5);
        $randomStrength = rand(1, 5);
        $randomPrice = rand(1, 5);
    @endphp
    <div class="container">
        <div class="inputForm">
            <h1>
                Beri Tahu Preferensi Kopimu!
            </h1>
            <form action="{{ url($formLink) }}" method="POST">
                @csrf

                <div class="preferenceForm">
                    {{-- Mood Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Bagaimana kabarmu?</legend>
                        <label for="mood1">
                            <input type="radio" id="mood1" name="preferenceMood" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/156c8a97-758f-4006-a14f-e88189c8cb9f/pRvyMkbq4Y.json"
                                        background="transparent" speed="1" loop autoplay class="inputChoise">
                                    </dotlottie-player>
                                    <p>Kurang baik</p>
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
                                    <p>Sangat baik</p>
                                </div>
                            </span>
                        </label>

                        <label for="mood3">
                            <input type="radio" id="mood3" name="preferenceMood" value="{{ $randomMood }}">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/7f2c3da9-f531-4430-b3bf-3cb39d8e4268/WjCL0FLgaV.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Tidak tahu</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Activity Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Apa kegiatanmu?</legend>
                        <label for="chilling">
                            <input type="radio" id="chilling" name="preferenceActivity" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/87839366-0ff1-4e00-94cf-902fc3df322a/XRYeBmKow5.json"
                                        background="transparent" speed="1" loop autoplay
                                        class="inputChoise"></dotlottie-player>
                                    <p>Beristirahat / bersantai</p>
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
                                    <p>Melakukan sesuatu</p>
                                </div>
                            </span>
                        </label>

                        <label for="dontKnowActivity">
                            <input type="radio" id="dontKnowActivity" name="preferenceActivity"
                                value="{{ $randomActivity }}">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/7f2c3da9-f531-4430-b3bf-3cb39d8e4268/WjCL0FLgaV.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Tidak Tahu</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Temperature Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Kamu lebih pilih minuman dingin atau panas?</legend>
                        <label for="cold">
                            <input type="radio" id="cold" name="preferenceCoffeeTemperature" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/d62d4b75-1a4c-45ec-84d0-220b69c453a1/rVVlyTVZAc.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Dingin</p>
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
                                    <p>Panas</p>
                                </div>
                            </span>
                        </label>
                        <label for="dontKnowTemperature">
                            <input type="radio" id="dontKnowTemperature" name="preferenceCoffeeTemperature"
                                value="{{ $randomTemperature }}">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/7f2c3da9-f531-4430-b3bf-3cb39d8e4268/WjCL0FLgaV.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Tidak tahu</p>
                                </div>
                            </span>
                        </label>

                    </fieldset>
                    <br>

                    {{-- Coffee Sweetness Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Jumlah gula yang diinginkan</legend>
                        <label for="sweetness1">
                            <input type="radio" id="sweetness1" name="preferenceCoffeeSweetness" value="1">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/noSugar.svg">
                                    <p>Tanpa gula</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness2">
                            <input type="radio" id="sweetness2" name="preferenceCoffeeSweetness" value="2">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/lessSugar.svg">
                                    <p>Gula dikurang</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness3">
                            <input type="radio" id="sweetness3" name="preferenceCoffeeSweetness" value="3">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/normalSugar.svg">
                                    <p>Takaran normal</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness4">
                            <input type="radio" id="sweetness4" name="preferenceCoffeeSweetness" value="5">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/moreSugar.svg">
                                    <p>Gula ditambah</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness5">
                            <input type="radio" id="sweetness5" name="preferenceCoffeeSweetness"
                                value="{{ $randomSugar }}">
                            <span>
                                <div class="inSpanSugar">
                                    <img src="/svg/sugar/extraSugar.svg">
                                    <p>Tidak tahu</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Milkness Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Apakah mau menggunakan susu?</legend>
                        <label for="no_milk">
                            <input type="radio" id="no_milk" name="preferenceCoffeeMilkness" value="1">
                            <span>
                                <div class="inSpanMilk">
                                    <img src="/svg/milk/withoutMilk.svg">
                                    <p>Tanpa susu</p>
                                </div>
                            </span>
                        </label>
                        <label for="with_milk">
                            <input type="radio" id="with_milk" name="preferenceCoffeeMilkness" value="5">
                            <span>
                                <div class="inSpanMilk">
                                    <img src="/svg/milk/withMilk.svg">
                                    <p>Dengan susu</p>
                                </div>
                            </span>
                        </label>
                        <label for="dontKnowMilk">
                            <input type="radio" id="dontKnowMilk" name="preferenceCoffeeMilkness" value="{{ $randomMilk }}">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/7f2c3da9-f531-4430-b3bf-3cb39d8e4268/WjCL0FLgaV.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Tidak tahu</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Acidity Level Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Tingkat keasaman minuman</legend>
                        <label for="acidity1">
                            <input type="radio" id="acidity1" name="preferenceCoffeeAcidityLevel" value="1">
                            <span>
                                <div class="inSpanAcid">
                                    <img src="/svg/acidity/notAcid.svg">
                                    <p>Tidak asam</p>
                                </div>
                            </span>
                        </label>

                        <label for="acidity5">
                            <input type="radio" id="acidity5" name="preferenceCoffeeAcidityLevel" value="5">
                            <span>
                                <div class="inSpanAcid">
                                    <img src="/svg/acidity/acid.svg">
                                    <p>Asam</p>
                                </div>
                            </span>
                        </label>

                        <label for="acidity3">
                            <input type="radio" id="acidity3" name="preferenceCoffeeAcidityLevel" value="{{ $randomAcid }}">
                            <span>
                                <div class="inSpanAcid">
                                    <img src="/svg/acidity/normal.svg">
                                    <p>Bebas</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Strength Level Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Kamu lebih pilih kopi yang kuat atau tidak?</legend>
                        <label for="strength1">
                            <input type="radio" id="strength1" name="preferenceCoffeeStrengthLevel" value="1">
                            <span>
                                <div class="inSpanAcid">
                                    <img src="/svg/strength/notStrong.svg">
                                    <p>Tidak</p>
                                </div>
                            </span>
                        </label>

                        <label for="strength5">
                            <input type="radio" id="strength5" name="preferenceCoffeeStrengthLevel" value="5">
                            <span>
                                <div class="inSpanAcid">
                                    <img src="/svg/strength/strong.svg">
                                    <p>Kuat</p>
                                </div>
                            </span>
                        </label>

                        <label for="strength3">
                            <input type="radio" id="strength3" name="preferenceCoffeeStrengthLevel" value="{{ $randomStrength }}">
                            <span>
                                <div class="inSpanAcid">
                                    <img src="/svg/strength/normal.svg">
                                    <p>Bebas</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Price Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Apakah harga mempengaruhi pilihanmu?</legend>

                        <label for="no">
                            <input type="radio" id="no" name="preferenceCoffeePrice" value="5">
                            <span>
                                <div class="inSpanPrice">
                                    <img src="/svg/price/no.svg">
                                    <p>Tidak</p>
                                </div>
                            </span>
                        </label>

                        <label for="yes">
                            <input type="radio" id="yes" name="preferenceCoffeePrice" value="1">
                            <span>
                                <div class="inSpanPrice">
                                    <img src="/svg/price/yes.svg">
                                    <p>Ya</p>
                                </div>
                            </span>
                        </label>

                        <label for="IDC">
                            <input type="radio" id="IDC" name="preferenceCoffeePrice" value="{{ $randomPrice }}">
                            <span>
                                <div class="inSpanPrice">
                                    <img src="/svg/price/neutral.svg">
                                    <p>Tidak tahu</p>
                                </div>
                            </span>
                        </label>


                    </fieldset>
                    <br>
                </div>

                {{-- Submit Button --}}
                <input class="formButton2" type="button" id="nextBtn" value="Lanjut" style="display: none;">
                <input class="formButton2" type="submit" id="submitBtn" value="Simpan Preferensi"
                    style="display: none;">
            </form>

            <script src="/js/hideFieldset.js"></script>
        </div>
    </div>
@endsection

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
                                    <p>Sad</p>
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
                                    <p>Chilling</p>
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
                                    <p>Working</p>
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
                        <legend class="slideTitle">Sweet or not sweet?</legend>
                        <label for="sweetness1">
                            <input type="radio" id="sweetness1" name="preferenceCoffeeSweetness" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/a9fdeac8-08a4-4874-a293-90508ddbe07c/01P1wg7ES2.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Not Sweet</p>
                                </div>
                            </span>
                        </label>

                        <label for="sweetness5">
                            <input type="radio" id="sweetness5" name="preferenceCoffeeSweetness" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/627f4811-2452-4b3e-a644-a205512ab875/P3AHoWu8TU.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Sweet</p>
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
                        <legend class="slideTitle">Do you prefer the cheap one or the pricy one?</legend>
                        <label for="cheap">
                            <input type="radio" id="cheap" name="preferenceCoffeePrice" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/469205c7-0948-4949-b78c-b88a92680a6c/KAFHzhUK13.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Cheap</p>
                                </div>
                            </span>
                        </label>
                        <label for="pricy">
                            <input type="radio" id="pricy" name="preferenceCoffeePrice" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/c18ac307-9ecc-4f9f-b2d6-bb28603cb9ff/G6BsgUQXcg.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Pricy</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                    <br>

                    {{-- Coffee Acidity Level Preference --}}
                    <fieldset class="slide-group">
                        <legend class="slideTitle">Do you prefer the more acid one or not?</legend>
                        <label for="acidity1">
                            <input type="radio" id="acidity1" name="preferenceCoffeeAcidityLevel" value="1">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/a9fdeac8-08a4-4874-a293-90508ddbe07c/01P1wg7ES2.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Not acid</p>
                                </div>
                            </span>
                        </label>
                        <label for="acidity5">
                            <input type="radio" id="acidity5" name="preferenceCoffeeAcidityLevel" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/54209371-bee2-4f65-8955-b19d910b3474/KILMGaG4BC.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
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
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/a9fdeac8-08a4-4874-a293-90508ddbe07c/01P1wg7ES2.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
                                    <p>Not strong</p>
                                </div>
                            </span>
                        </label>
                        <label for="strength5">
                            <input type="radio" id="strength5" name="preferenceCoffeeStrengthLevel" value="5">
                            <span>
                                <div class="inSpan">
                                    <dotlottie-player
                                        src="https://lottie.host/cdb50b35-742e-4d6e-b19c-cd0f94f15e36/mlCjaXXV9e.json"
                                        background="transparent" speed="1" class="inputChoise" loop
                                        autoplay></dotlottie-player>
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

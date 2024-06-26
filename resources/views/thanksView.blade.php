@extends('layout.layout')

@section('main_content')
    <div class="container" id="thanksContainer">
        <div class="thanks">
            <h1>Umpan Balik</h1>
            <p class="recSubTitle">
                Tolong berikan umpan balikmu!
            </p>

            <form id="feedbackForm" action={{ url('/save-like') }} method="POST">
                @csrf
                <div class="thanksForm">
                    {{-- Pertanyaan 1 --}}
                    <fieldset class="thanksGroup">
                        <legend class="thanksTitle">Seberapa mudah kamu menjelajahi situs web ini?</legend>
                        <label for="pertanyaan1_jawaban1">
                            <input type="radio" id="pertanyaan1_jawaban1" name="pertanyaan1" value="1">
                            <span>
                                <div class="inSpan">
                                    <p>1</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan1_jawaban2">
                            <input type="radio" id="pertanyaan1_jawaban2" name="pertanyaan1" value="2">
                            <span>
                                <div class="inSpan">
                                    <p>2</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan1_jawaban3">
                            <input type="radio" id="pertanyaan1_jawaban3" name="pertanyaan1" value="3">
                            <span>
                                <div class="inSpan">
                                    <p>3</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan1_jawaban4">
                            <input type="radio" id="pertanyaan1_jawaban4" name="pertanyaan1" value="4">
                            <span>
                                <div class="inSpan">
                                    <p>4</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan1_jawaban5">
                            <input type="radio" id="pertanyaan1_jawaban5" name="pertanyaan1" value="5">
                            <span>
                                <div class="inSpan">
                                    <p>5</p>
                                </div>
                            </span>
                        </label>
                    </fieldset><br><hr>

                    {{-- Pertanyaan 2 --}}
                    <fieldset class="thanksGroup">
                        <legend class="thanksTitle">Apakah rekomendasi yang dihasilkan membantumu dalam menentukan kopi yang akan dipesan?</legend>
                        <label for="pertanyaan2_jawaban1">
                            <input type="radio" id="pertanyaan2_jawaban1" name="pertanyaan2" value="1">
                            <span>
                                <div class="inSpan">
                                    <p>1</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan2_jawaban2">
                            <input type="radio" id="pertanyaan2_jawaban2" name="pertanyaan2" value="2">
                            <span>
                                <div class="inSpan">
                                    <p>2</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan2_jawaban3">
                            <input type="radio" id="pertanyaan2_jawaban3" name="pertanyaan2" value="3">
                            <span>
                                <div class="inSpan">
                                    <p>3</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan2_jawaban4">
                            <input type="radio" id="pertanyaan2_jawaban4" name="pertanyaan2" value="4">
                            <span>
                                <div class="inSpan">
                                    <p>4</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan2_jawaban5">
                            <input type="radio" id="pertanyaan2_jawaban5" name="pertanyaan2" value="5">
                            <span>
                                <div class="inSpan">
                                    <p>5</p>
                                </div>
                            </span>
                        </label>
                    </fieldset><br><hr>

                    {{-- Pertanyaan 3 --}}
                    <fieldset class="thanksGroup">
                        <legend class="thanksTitle">Apakah kamu akan merekomendasikan situs web ini kepada temanmu?</legend>
                        <label for="pertanyaan3_jawaban1">
                            <input type="radio" id="pertanyaan3_jawaban1" name="pertanyaan3" value="1">
                            <span>
                                <div class="inSpan">
                                    <p>1</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan3_jawaban2">
                            <input type="radio" id="pertanyaan3_jawaban2" name="pertanyaan3" value="2">
                            <span>
                                <div class="inSpan">
                                    <p>2</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan3_jawaban3">
                            <input type="radio" id="pertanyaan3_jawaban3" name="pertanyaan3" value="3">
                            <span>
                                <div class="inSpan">
                                    <p>3</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan3_jawaban4">
                            <input type="radio" id="pertanyaan3_jawaban4" name="pertanyaan3" value="4">
                            <span>
                                <div class="inSpan">
                                    <p>4</p>
                                </div>
                            </span>
                        </label>

                        <label for="pertanyaan3_jawaban5">
                            <input type="radio" id="pertanyaan3_jawaban5" name="pertanyaan3" value="5">
                            <span>
                                <div class="inSpan">
                                    <p>5</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                </div>
            </form>
            <input class="formButton2" type="button" id="nextBtn" value="Simpan" style="display: none">
        </div>
    </div>

    <form id="saveLikeForm" action="/save-like" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="question1" id="question1Input">
        <input type="hidden" name="question2" id="question2Input">
        <input type="hidden" name="question3" id="question3Input">

        <input type="hidden" name="customer_id" id="customerIdInput" value="{{ $choise_id }}">
    </form>

    <script src="/js/submitFeedback.js"></script>
@endsection

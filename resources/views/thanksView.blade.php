@extends('layout.layout')

@section('main_content')
    <div class="container">
        <div class="thanks">
            <h1>Thank you</h1>
            <p class="recSubTitle">
                How would you rate this site?
            </p>

            <form id="feedbackForm" action={{ url('/save-like') }} method="POST">
                @csrf
                <div class="thanksForm">
                    <fieldset class="thanksGroup">
                        <legend class="thanksTitle"></legend>
                        <label for="dislike">
                            <input type="radio" id="dislike" name="likeOrDislike" value="0">
                            <span>
                                <div class="inSpan">
                                    <div class="thanksAnimContent">
                                        <dotlottie-player
                                            src="https://lottie.host/fea7e118-c9d4-47b9-88e1-586f186babd2/4LD5juYuE4.json"
                                            background="transparent" speed="1" class="thanksLottie"
                                            loop autoplay class="dislike" ></dotlottie-player>
                                    </div>
                                    <p>Bad</p>
                                </div>
                            </span>
                        </label>

                        <label for="like">
                            <input type="radio" id="like" name="likeOrDislike" value="1">
                            <span>
                                <div class="inSpan">
                                    <div class="thanksAnimContent">
                                        <dotlottie-player
                                            src="https://lottie.host/a7c399fc-683d-429c-a8da-2f5de9a0e62c/bdSr0c6rTU.json"
                                            background="transparent" speed="1" class="thanksLottie"
                                            loop autoplay></dotlottie-player>
                                    </div>
                                    <p>Good</p>
                                </div>
                            </span>
                        </label>
                    </fieldset>
                </div>
            </form>
            <input class="formButton2" type="button" id="nextBtn" value="Submit" style="display: none">
        </div>
    </div>

    <form id="saveLikeForm" action="/save-like" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="like_id" id="likeIdInput">
        <input type="hidden" name="customer_id" id="customerIdInput" value="{{ $customerId }}">
    </form>

    <script>
        document.getElementById('feedbackForm').addEventListener('click', function() {
            document.getElementById('nextBtn').style.display = 'inline-block';
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            var likeId = document.querySelector('input[name="likeOrDislike"]:checked').value;
            document.getElementById('likeIdInput').value = likeId;
            document.getElementById('saveLikeForm').submit();
        });
    </script>
@endsection

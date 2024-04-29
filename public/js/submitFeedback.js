document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('feedbackForm').addEventListener('click', function() {
        document.getElementById('nextBtn').style.display = 'inline-block';
    });

    document.getElementById('nextBtn').addEventListener('click', function () {
        var question1 = document.querySelector('input[name="pertanyaan1"]:checked').value;
        var question2 = document.querySelector('input[name="pertanyaan2"]:checked').value;
        var question3 = document.querySelector('input[name="pertanyaan3"]:checked').value;

        document.getElementById('question1Input').value = question1;
        document.getElementById('question2Input').value = question2;
        document.getElementById('question3Input').value = question3;

        document.getElementById('saveLikeForm').submit();
    });
});



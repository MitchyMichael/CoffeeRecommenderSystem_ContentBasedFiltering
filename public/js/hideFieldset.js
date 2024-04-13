document.addEventListener("DOMContentLoaded", function () {
    var currentFieldsetIndex = 0;
    var fieldsets = document.querySelectorAll(".slide-group");
    var nextBtn = document.getElementById("nextBtn");
    var submitBtn = document.getElementById("submitBtn");

    // Initially hide all fieldsets except the first one
    for (var i = 1; i < fieldsets.length; i++) {
        fieldsets[i].style.display = "none";
    }

    // Function to show the next fieldset
    function showNextFieldset() {
        fieldsets[currentFieldsetIndex].style.display = "none"; // Hide current fieldset
        currentFieldsetIndex++; // Move to the next fieldset
        if (currentFieldsetIndex < fieldsets.length) {
            fieldsets[currentFieldsetIndex].style.display = "block"; // Show next fieldset
            if (currentFieldsetIndex === fieldsets.length - 1) {
                nextBtn.style.display = "none"; // Hide next button on the last fieldset
                addChangeEventListenersLast(); // Show submit button on the last fieldset
            } else {
                nextBtn.style.display = "none"; // Hide next button on other fieldsets
                // Add event listener for the new current fieldset
                addChangeEventListeners();
            }
        }
    }

    // Function to add event listeners for radio buttons in the last fieldset
    function addChangeEventListenersLast() {
        var radios = fieldsets[currentFieldsetIndex].querySelectorAll('input[type="radio"]');
        radios.forEach(function (radio) {
            radio.addEventListener("change", function () {
                if (isRadioSelected()) {
                    submitBtn.style.display = "inline-block";
                } else {
                    submitBtn.style.display = "none";
                }
            });
        });
    }

    // Function to add event listeners for radio buttons in the current fieldset
    function addChangeEventListeners() {
        var radios = fieldsets[currentFieldsetIndex].querySelectorAll('input[type="radio"]');
        radios.forEach(function (radio) {
            radio.addEventListener("change", function () {
                if (isRadioSelected()) {
                    nextBtn.style.display = "inline-block";
                } else {
                    nextBtn.style.display = "none";
                }
            });
        });
    }

    // Function to check if any radio button in the current fieldset is selected
    function isRadioSelected() {
        var radios = fieldsets[currentFieldsetIndex].querySelectorAll('input[type="radio"]');
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return true;
            }
        }
        return false;
    }

    // Event listener for the next button
    nextBtn.addEventListener("click", showNextFieldset);

    // Initialize event listeners for the first fieldset
    addChangeEventListeners();
});

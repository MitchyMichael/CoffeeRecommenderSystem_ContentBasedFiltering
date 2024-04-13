document.addEventListener("DOMContentLoaded", function() {
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
                submitBtn.style.display = "inline-block"; // Show submit button on the last fieldset
            }
        }
    }

    // Event listener for the next button
    nextBtn.addEventListener("click", showNextFieldset);
});

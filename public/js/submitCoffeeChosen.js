document.addEventListener('DOMContentLoaded', function () {
    const coffeeLinks = document.querySelectorAll('.coffee-link');

    coffeeLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const coffeeId = this.getAttribute('data-coffee-id');
            // Store the coffee ID in a variable accessible to the Confirm button click event handler
            document.getElementById('coffeeIdInput').value = coffeeId;
            // Display the pop-up here (if applicable)
        });
    });

    // Add event listener to the Confirm button
    const confirmButton = document.querySelector('.confirmButton2');
    confirmButton.addEventListener('click', function (event) {
        event.preventDefault();
        // Retrieve the coffee ID from the stored variable and submit the form
        const coffeeId = document.getElementById('coffeeIdInput').value;
        document.getElementById('coffeeIdInput').value = coffeeId;
        document.getElementById('saveCoffeeForm').submit();
    });
});

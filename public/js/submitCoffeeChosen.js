document.addEventListener('DOMContentLoaded', function () {
    const coffeeLinks = document.querySelectorAll('.coffee-link');

    coffeeLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const coffeeId = this.getAttribute('data-coffee-id');
            document.getElementById('coffeeIdInput').value = coffeeId;
            document.getElementById('saveCoffeeForm').submit();
        });
    });
});

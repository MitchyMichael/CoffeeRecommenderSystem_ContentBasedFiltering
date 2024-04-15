document.addEventListener('DOMContentLoaded', function () {
    const coffeeLinks = document.querySelectorAll('.coffee-link');
    const descriptionPopup = document.querySelector('.item-description-popup .description');

    coffeeLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const coffeeDescription = this.querySelector('.recMenu').innerHTML.trim();
            descriptionPopup.innerHTML = coffeeDescription;
            descriptionPopup.parentNode.style.display = 'block';

            // Hide popup when user clicks outside of it
            document.addEventListener('click', function hidePopup(e) {
                if (!descriptionPopup.parentNode.contains(e.target) && !link.contains(e.target)) {
                    descriptionPopup.parentNode.style.display = 'none';
                    document.removeEventListener('click', hidePopup);
                }
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const coffeeLinks = document.querySelectorAll('.coffee-link');
    const descriptionPopup = document.querySelector('.item-description-popup .description');
    const cancelButton = document.querySelector('.cancelButton'); 

    coffeeLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const coffeeDescription = this.querySelector('.recMenu').innerHTML.trim();
            descriptionPopup.innerHTML = coffeeDescription;
            descriptionPopup.parentNode.style.display = 'block';

            // Hide popup when user clicks outside of it
            function hidePopup(e) {
                if (!descriptionPopup.parentNode.contains(e.target) && !link.contains(e.target)) {
                    descriptionPopup.parentNode.style.display = 'none';
                    document.removeEventListener('click', hidePopup);
                }
            }

            document.addEventListener('click', hidePopup);

            // Add event listener for cancel button
            cancelButton.addEventListener('click', function () {
                descriptionPopup.parentNode.style.display = 'none';
                document.removeEventListener('click', hidePopup);
            });
        });
    });

    coffeeLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const coffeeDescription = this.querySelector('.recMenuFirst').innerHTML.trim();
            descriptionPopup.innerHTML = coffeeDescription;
            descriptionPopup.parentNode.style.display = 'block';

            // Hide popup when user clicks outside of it
            function hidePopup(e) {
                if (!descriptionPopup.parentNode.contains(e.target) && !link.contains(e.target)) {
                    descriptionPopup.parentNode.style.display = 'none';
                    document.removeEventListener('click', hidePopup);
                }
            }

            document.addEventListener('click', hidePopup);

            // Add event listener for cancel button
            cancelButton.addEventListener('click', function () {
                descriptionPopup.parentNode.style.display = 'none';
                document.removeEventListener('click', hidePopup);
            });
        });
    });
});

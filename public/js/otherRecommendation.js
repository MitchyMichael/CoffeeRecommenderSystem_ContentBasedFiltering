document.addEventListener('DOMContentLoaded', function () {
    const otherButton = document.querySelector('.buttonOthers');
    const backButton = document.querySelector('.buttonOthers2');
    const mainRecContainer = document.querySelector('.mainContentRec');
    const otherMainRecContainer = document.querySelector('.mainContentRecOther');

    // Add click event listener to the button
    otherButton.addEventListener('click', function () {
        // Toggle visibility of mainRecContainer and otherMainRecContainer
        mainRecContainer.style.display = 'none';
        otherMainRecContainer.style.display = 'block'; 
    });
});

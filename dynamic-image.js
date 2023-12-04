document.addEventListener('DOMContentLoaded', function () {
    // Function to get the current day (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
    function getDayOfWeek() {
        const today = new Date();
        return today.getDay();
    }

    // Function to set the dynamic image based on the current day
    function setDynamicImage() {
        const dayOfWeek = getDayOfWeek();
        const dynamicImage = document.querySelector('.dynamic-image img');

        // Set image source based on the day
        switch (dayOfWeek) {
            case 0: // Sunday
                dynamicImage.src = 'img/sunday-image.jpg';
                break;
            case 1: // Monday
                dynamicImage.src = 'img/monday-image.jpg';
                break;
            case 5: // Friday
                dynamicImage.src = 'img/friday-image.jpg';
                break;
            default:
                // Use a default image for other days
                dynamicImage.src = 'img/default-image.jpg';
                break;
        }
    }

    // Call the function to set the dynamic image on page load
    setDynamicImage();
});

document.addEventListener('DOMContentLoaded', function () {
    // Function to get the current day (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
    function getDayOfWeek() {
        const today = new Date();
        return today.getDay();
    }

    // Function to set the dynamic image based on the current day
    function setDynamicImage() {
        const dayOfWeek = getDayOfWeek();
        const dynamicImage = document.querySelector('dynamic-image');

        // Set image source based on the day
        switch (dayOfWeek) {
            case 0: // Sunday
                dynamicImage.src = "Sunday-sunday.jpeg";
                break;
            case 1: // Monday
                dynamicImage.src = 'monday-monday.jpeg';
                break;
            case 5: // Friday
                dynamicImage.src = 'friday-image.jpeg';
                break;
            default:
                // Use a default image for other days
                dynamicImage.src = 'daily.jpeg';
                break;
        }
    }

    // Call the function to set the dynamic image on page load
    setDynamicImage();
});

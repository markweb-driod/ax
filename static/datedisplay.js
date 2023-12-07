// dateDisplay.js

document.addEventListener('DOMContentLoaded', function () {
    // Function to format the date as "Day, Month DD, YYYY"
    function formatDate(date) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('en-US', options);
    }

    // Get the current date
    const currentDate = new Date();

    // Display the formatted date in the HTML element with the id "currentDate"
    const dateElement = document.getElementById('currentDate');
    if (dateElement) {
        dateElement.textContent = formatDate(currentDate);
    }
});

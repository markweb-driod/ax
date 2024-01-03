// Add this to your existing script.js or create a new JS file
document.addEventListener("DOMContentLoaded", function () {
    const notificationContainer = document.getElementById("notification-container");
    const notification = document.getElementById("notification");
    const notificationMessage = document.getElementById("notification-message");
    const closeNotification = document.getElementById("close-notification");

    // Function to show the notification
    function showNotification(message, type = "success") {
        notificationMessage.textContent = message;
        notification.classList.add(type);
        notificationContainer.classList.remove("hidden");

        // Automatically hide the notification after 3 seconds
        setTimeout(() => {
            hideNotification();
        }, 3000);
    }

    // Function to hide the notification
    function hideNotification() {
        notificationContainer.classList.add("hidden");
        notification.classList.remove("success");
    }

    // Event listener to close the notification
    closeNotification.addEventListener("click", function () {
        hideNotification();
    });
});

// Your existing JavaScript code...

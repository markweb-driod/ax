// script.js

document.addEventListener('DOMContentLoaded', function () {
    const notificationDiv = document.getElementById('notification');

    function showNotification(message, type) {
        // Create a new notification element
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.textContent = message;

        // Append the notification to the container
        notificationDiv.appendChild(notification);

        // Remove the notification after 3 seconds (3000 milliseconds)
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }

    // This ensures that the function is available globally
    window.showNotification = showNotification;
});

// script.js

// Function to show a pop-up notification
function showNotification(message, type) {
    const notificationElement = document.createElement('div');
    notificationElement.className = `notification ${type}`;
    notificationElement.textContent = message;

    // Append the notification to the body
    document.body.appendChild(notificationElement);
}

// Function to close the pop-up notification
function closeNotification() {
    const notification = document.querySelector('.notification');

    // Check if the notification exists before removing it
    if (notification) {
        notification.remove();
    }
}

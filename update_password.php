<?php
session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];
    $newPassword = password_hash($_POST["new_password"], PASSWORD_BCRYPT);

    // Update the user's password and clear the reset token
    $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE reset_token = ?");
    $stmt->bind_param("ss", $newPassword, $token);
    $result = $stmt->execute();

    if ($result) {
        // Password updated successfully
        echo "Password updated successfully.";
        
        // You can redirect the user to the login page or any other page after successful password update
        header("Location: login.php");
        exit;
    } else {
        // Error updating password
        echo "Error updating password. Please try again.";
    }
} else {
    // Invalid request method
    echo "Invalid request method.";
}

$conn->close();
?>

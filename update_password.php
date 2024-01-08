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
        $_SESSION['success_message'] = "Password updated successfully.";
        
        // Redirect the user to the login page or any other page after successful password update
        header("Location: login.php");
        exit;
    } else {
        // Error updating password
        $_SESSION['error_message'] = "Error updating password. Please try again.";
        header("Location: reset_password.php?token=$token");
        exit;
    }
} else {
    // Invalid request method
    $_SESSION['error_message'] = "Invalid request method.";
    header("Location: reset_password.php?token=$token");
    exit;
}

$conn->close();
?>

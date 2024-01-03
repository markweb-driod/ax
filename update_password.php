<?php
session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];
    $newPassword = password_hash($_POST["new_password"], PASSWORD_BCRYPT);

    // Update the user's password and clear the reset token
    $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE reset_token = ?");
    $stmt->bind_param("ss", $newPassword, $token);
    $stmt->execute();

    echo "Password updated successfully.";
}

$conn->close();
?>

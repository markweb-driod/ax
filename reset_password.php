<?php
session_start();
include("db_connect.php");

if (isset($_GET["token"])) {
    $token = $_GET["token"];

    // Check if the token is valid
    $stmt = $conn->prepare("SELECT id FROM users WHERE reset_token = ? AND reset_token_expiry > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Display the password reset form
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Reset Password</title>
        </head>
        <body>
        <div class="ahh">
        <div class="container">
            <h2>Reset Password</h2>
            <form action='update_password.php' method='post'>
                <input type='hidden' name='token' value='$token'>
                <label for='new_password'>New Password:</label>
                <input type='password' name='new_password' required>
                <button type='submit'>Reset Password</button>
            </form>
            </div>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "Invalid or expired token.";
    }
} else {
    echo "Token not provided.";
}
?>

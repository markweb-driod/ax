<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\src\SMTP;
use PHPMailer\PHPMailer\src\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT id, username FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Generate a unique token
        $token = bin2hex(random_bytes(32));

        // Store the token and set an expiration timestamp in the database
        $stmt = $conn->prepare("UPDATE users SET reset_token = ?, reset_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE id = ?");
        $stmt->bind_param("si", $token, $user["id"]);
        $stmt->execute();

       


        // Send reset link via email using PHPMailer
        $resetLink = "https://austinexchange.store/reset_password.php?token=$token";

        // Email configuration
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'markishayajatau007@gmail.com'; // Replace with your email
        $mail->Password = 'czqofjxdkmnxyiew'; // Replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email content
        $mail->setFrom('Austin@austinexchange.store', 'Austin'); // Replace with your name and email
        $mail->addAddress($email);
        $mail->Subject = 'Password Reset';
        $mail->Body = "Click the following link to reset your password: $resetLink";

        // Send the email
        if ($mail->send()) {
            echo "Password reset link sent. Check your email.";
        } else {
            echo "Failed to send password reset email. Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>

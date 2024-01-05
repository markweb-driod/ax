<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset(); // Clear all session data
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to the login page or any other page
    exit;
} else {
    // Redirect to the login page if the logout button is not pressed
    header("Location: login.php");
    exit;
}
?>

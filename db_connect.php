<?php
$servername = "127.0.0.1:3377";
$username = "root";
$password = "(60813322@))";
$database = "rift";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

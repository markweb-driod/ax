<?php
session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];

    // Check if email, username, or phone number already exists
    $checkQuery = "SELECT id FROM users WHERE email = ? OR username = ? OR phone_number = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bind_param("sss", $email, $username, $phone_number);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        echo '<div class="notification error">Email, username, or phone number is already in use.</div>';
    } else {
        // Insert new user
        $sql = "INSERT INTO users (username, password, full_name, email, phone_number) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $username, $password, $full_name, $email, $phone_number);

        if ($stmt->execute()) {
            echo '<div class="notification success">Registration successful. You can now login.</div>';
        } else {
            echo '<div class="notification error">Registration failed. Please try again later.</div>';
        }
    }
}

$conn->close();
?>

<!-- HTML form for registration -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="regstyle.css">
   
    
    <title>AX_CHANGE</title>
</head>
<body>

    <header>
        <img src="img/logo.jpg" alt="Site Logo">
        <h1 style="display: flex; font-family: courier new;font-size: 40px;">AXCHANGE </h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="payment.html">PAYMENT TAGS</a></li>
            <li><a href="tradegift.html">TRADE</a></li>
           
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        
    </nav>
   
    </div>
   
    <div class="ahh">
        <div class="kracken">
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone_number">Phone Number:</label>
        <input type="tel" name="phone_number" required>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
<br>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
       
</div>
    </div>
    

    <div class="foo">
    <footer style="background-color: black; padding: 10px 0; text-align: center;">
        <p style="font-family: 'Verdana', sans-serif; color: white; margin: 0;">
           AXCHANGE (c) 2023 Powered by <a href="###" style="font-family: 'Verdana', sans-serif; color: yellow; font-weight: bold; text-decoration: none;">SHRINE</a>
        </p>
    </footer>
</div>



</body>
</html>

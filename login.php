<?php
session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $row["username"];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>

<!--ddhgfd-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="dynamic-image.js" defer></script>
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
    <div class="ahh">
    <div class="container">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Forgot password? <a href="forgot_password.php">Reset password</a>.</p>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </div>

</div>
    

        <!-- WhatsApp and Telegram Icons -->
        <div class="contact-icons">
            <a href="whatsapp-link" target="_blank"><img src="img/whatsapp.png" alt="WhatsApp"></a>
            <br>
            <a href="telegram-link" target="_blank"><img src="img/telegram.png" alt="Telegram"></a>
        </div>
    </main>

    <div class="foo">
    <footer style="background-color: black; padding: 10px 0; text-align: center;">
        <p style="font-family: 'Verdana', sans-serif; color: white; margin: 0;">
           AXCHANGE (c) 2023 Powered by <a href="###" style="font-family: 'Verdana', sans-serif; color: yellow; font-weight: bold; text-decoration: none;">SHRINE</a>
        </p>
    </footer>
</div>

</body>
</html>

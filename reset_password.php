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
        <h2>Reset Password</h2>
        
        <?php
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
                <form action='update_password.php' method='post'>
                    <input type='hidden' name='token' value='$token'>
                    <label for='new_password'>New Password:</label>
                    <input type='password' name='new_password' required>
                    <button type='submit'>Reset Password</button>
                </form>
                ";
            } else {
                echo "<p class='error-message'>Invalid or expired token.</p>";
            }
        } else {
            echo "<p class='error-message'>Token not provided.</p>";
        }
        ?>
    </div>
    </div>

    <div class = "foo">
        <footer  >
        <p style="font-family: verdana; color:white; text-decoration: solid;"> (c) 2023 Powered by <a href="###" style="font-family: verdana; color: white;font-weight: bold;"> SHRINE </a></p>
     </footer>
    </div>

</body>
</html>

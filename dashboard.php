<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="script.js"></script>
    <script src="static/dynamic-image.js"></script>
    <script src="dynamic-image.js" defer></script>
    <title>AX_CHANGE</title>
    <script src="//code.jivosite.com/widget/znWBHX9sZo" async></script>
</head>
<body>

    <header>
        <img src="img/logo.jpg" alt="Site Logo">
        <h1 style="display: flex; font-family: courier new;font-size: 40px;">AXCHANGE </h1>
    </header>

    <nav style="background-color: #e9be02; color:black">
        <ul>
            <li><a href="dashboard.php">HOME</a></li>
            <li><a href="payment.html">Trades</a></li>
            <li><a href="tradegift.html">Profile</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        
    </nav><br>
    <div class="na">
  
    <form action="logout.php" method="post">
                <button type="submit" name="logout">Logout</button>
            </form>
    </div>
            <div class="name">
  
           
            <h1 style="padding-top: 9px;" >Welcome, <?php echo $_SESSION['username']; ?></h1>
         </div>

         <div class="dynamic-image" id="dynamicImage">
             <img src="" alt="Dynamic Testimonial Image">
         </div>
   
         <div class="contact-icons">
            <a href="http://wa.me/+2348168473898" target="_blank"><img src="img/whatsapp.png" alt="WhatsApp"></a>
            <br>
            <a href="https://t.me/Austinxchange" target="_blank"><img src="img/telegram.png" alt="Telegram"></a>
        </div>


    

</body>
<div class = "foo">
        <footer  >
        <p style="font-family: verdana; color:white; text-decoration: solid;"> (c) 2023 Powered by <a href="###" style="font-family: verdana; color: white;font-weight: bold;"> SHRINE </a></p>
     </footer>
    </div>
</html>

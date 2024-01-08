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
    <script src="static/datedisplay.js"></script>
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
            <li><a href="payment.php">Trades</a></li>
            <li><a href="tradegift.php">Profile</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        
    </nav>
    <p id="currentDate" style="font-family:serif;font-size: 15px; color: rgb(10, 10, 10); text-align: right; padding-right:5px"></p>

    <br>
     

        <div class="wel">
             <h1 >Welcome, <?php echo $_SESSION['username']; ?></h1>
       </div>


   <div class="logout">
    <form action="logout.php" method="post">
               <p>Logout <button type="submit" name="logout"><img src="bgs/logout.png" style="height: 450px;width:30px"></button>
            </form>
   </div>
    
<div class="chan">
<h2>USER PROFILE</h2>

<img src="bgs/pp.jpg" alt="user">

</div>






<div class="our">
            <h2> Trade With Us Via Our Channels: </h2> 
            <div class="social-icons">
        <a href="#" class="icon"><img src="img/whatsapp.png" alt="Facebook"></a>
        <a href="#" class="icon"><img src="img/telegram.png" alt="Twitter"></a>
        <a href="#" class="icon"><img src="img/instagram.png" alt="Instagram"></a>
        </div> 
        <br>
        <h4>Access us via our online 24hr chat below:</h4>

</div>



    <style>
        .image-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
           
        }

        .image-container img {
            font-family: courier;
            width: 160px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 10px; /* Adjust the margin between image and text */
        }

        .image-container div {
            text-align: center;
        }

    </style>

<div class = "foo">
        <footer  >
        <p style="font-family: verdana; color:white; text-decoration: solid;"> (c) AXCHANGE 2023 Powered/Built by <a href="https://wa.me/qr/WZDSRJESKMKPD1" style="font-family: verdana; ;font-weight: bold;color:yellow"> SHRINE </a></p>
            <p id="currentDate"></p>
    </footer>
    </div>
</body>
</html>

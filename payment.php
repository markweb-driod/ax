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
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8GM2RW00V7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8GM2RW00V7');
</script>
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
    
    <div class="timer">
    <script src="dateDisplay.js" defer></script>
    </div>
    
        <script src="https://kit.fontawesome.com/b87e39db14.js" crossorigin="anonymous"></script>
        <title>AX_CHANGE</title>
    </head>
<body>

    <header>
        <img src="bgs/logo.png" alt="Site Logo">
        <h1 style="display: flex; font-family: courier new;font-size: 39px;">AXCHANGE </h1>
    </header>

    <nav>
        <ul style="background-color:#e9be02">
        <li><a href="dashboard.php">HOME</a></li>
            <li><a href="payment.php">Trades</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        
    </nav>
    <p id="currentDate" style="font-size: 15px; color: rgb(10, 10, 10); text-align: right;"></p>
    <br>
    <br>
    <div class="wel">
             <h1 >Welcome, <?php echo $_SESSION['username']; ?></h1>
       </div>


   <div class="logout">
    <form action="logout.php" method="post">
               <p>Logout <button type="submit" name="logout"><img src="bgs/logout.png" style="height: 450px;width:30px"></button>
            </form>
   </div>
    
    <div class="pac">  
        
     <p style="font-size: 18px;"> Trade your funds with us:</p>
     <p style="text-align: center; background-image:url(bgs/cb.jpg) ;font-family:verdana; color:white; text-decoration:none ;height:150px; padding-top:34px; ">
        🌐✨ Need to receive funds? Simply ask for our payment tags 💳💸<br>
        Whether it's Western Union, PayPal, CashApp, MoneyGram, TransferWise, WebMoney, and more – we've got your transactions covered.<br> 
        🌐💸 Ask for our versatile payment tags and unlock seamless global transactions.
        </p>
        
        <img src="bgs/pay.jpg" style="width: 550px;">

    </div> 
    <div class="seke">
        <img src="bgs/paycave.png" style="width:47% ;">

    </div>
    <div class="second">
    <p style="font-size: 20px; font-family: verdana; font-weight: bold;">Enjoy hassle-free Transaction</p>
    <a href="http://wa.me/+2348168473898" id="tradeLinkSecond" onclick="displayTradeMessageSecond()">
    <button id="tradeButtonSecond">Trade Now</button>
    </a>
    <p id="trade-message-second" style="display: none; font-size: 18px; color: #333;">Let's explore!</p>
  </div>
  <br>
  <br>
        <!-- WhatsApp and Telegram Icons -->
        <div class="contact-icons">
            <a href="http://wa.me/+2348168473898" target="_blank"><img src="img/whatsapp.png" alt="WhatsApp"></a>
            <br>
            <a href="https://t.me/Austinxchange" target="_blank"><img src="img/telegram.png" alt="Telegram"></a>
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

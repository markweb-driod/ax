



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="script.js"></script>
    <script src="dynamic-image.js" defer></script>
    <title>AX_CHANGE</title>
</head>
<body>

    <header>
        <img src="img/logo.jpg" alt="Site Logo">
        <h1 style="display: flex; font-family: courier new;font-size: 40px;">AXCHANGE </h1>
    </header>

    <nav style="background-color: #e9be02; color:black">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="payment.html">Trades</a></li>
            <li><a href="tradegift.html">Profile</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        
    </nav><br>
         
    <form action="logout.php" method="post">
                <button type="submit" name="logout">Logout</button>
            </form>

            <div class="name">
  
           
            <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
       

                 </div>

    <div class="dashboard-container">
        

       

        <section class="account-details">
            <h2>Account Details</h2>
            <p>Email: user@example.com</p>
            <p>Balance: $1000</p>
        </section>

        <section class="main-section">
            <h2>Quick Actions</h2>
            <ul>
                <li><a href="http://wa.me/+2348168473898">Initiate Gift Card Trade</a></li>
                <li><a href="http://wa.me/+2348168473898">Buy/Sell Cryptocurrency</a></li>
                <!-- Add more quick actions as needed -->
            </ul>
        </section>
    </div>



    <div class = "foo">
        <footer  >
        <p style="font-family: verdana; color:white; text-decoration: solid;"> (c) 2023 Powered by <a href="###" style="font-family: verdana; color: white;font-weight: bold;"> SHRINE </a></p>
     </footer>
    </div>

</body>
</html>

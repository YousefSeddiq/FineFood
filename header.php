<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <script src='js/jquery-3.6.0.min.js'></script>
    <script src="js/script.js"></script>

</head>

<body>
<!-- header section starts  -->

<header class="header">
    <?php
        if (isset($_SESSION["useremail"])) {
            echo "<a href='index.php' class='logo'> <i class='fas fa-shopping-basket'></i> fine food </a>

            <nav class='navbar'>
              <a href='index.php'>home</a>
              <a href='index.php#features'>features</a>
              <a href='index.php#products'>products</a>
              <a href='index.php#categories'>categories</a>
              <a href='contactUs.php'>contact us</a>
              <a href='aboutUs.php'>about</a>
              <a href='include/logout.inc.php'>log out</a>
          </nav>
        
            <div class='icons'>
                <div class='fas fa-bars' id='menu-btn'></div>
                <div class='fas fa-search' id='search-btn'></div>
                <div class='fas fa-shopping-cart' id='cart-btn'></div>
                <a href='settings.php'><div class='fas fa-user' id='login-btn'></div></a>
            </div>";
        }
        else {
            echo "<a href='index.php' class='logo'> <i class='fas fa-shopping-basket'></i> fine food </a>

            <nav class='navbar'>
              <a href='index.php'>home</a>
              <a href='index.php#features'>features</a>
              <a href='index.php#products'>products</a>
              <a href='index.php#categories'>categories</a>
              <a href='contactUs.php'>contact us</a>
              <a href='aboutUs.php'>about</a>
          </nav>
        
            <div class='icons'>
                <div class='fas fa-bars' id='menu-btn'></div>
                <div class='fas fa-search' id='search-btn'></div>
                <div class='fas fa-shopping-cart' id='cart-btn'></div>
                <a href='registration.php'><div class='fas fa-user' id='login-btn'></div></a>
            </div>";
        }
    ?>
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">EGP 4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">EGP 4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">EGP 4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : EGP 19.69/- </div>
        <a href="payment.html" class="btn">checkout</a>
    </div>

</header>
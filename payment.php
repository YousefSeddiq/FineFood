<?php
session_start();
// Create connection
if(isset($_POST['Done'])){
  $payment_id = $_POST['payment_id'];
  $amount  = $_POST['amount'];
  $email = $_POST['email'];
  $fullname = $_POST['fullname'];
  $address = $_POST["address"];
$city = $_POST['city'];
  $cvv = $_POST['cvv'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $nameoncard = $_POST["nameoncard"];
 $creditcardnumber = $_POST['creditcardnumber'];
  $expirymonth = $_POST['expirymonth'];
  $expiryyear = $_POST['expiryyear'];

  if($ $payment_id=== $confirpayment)
  {
      $paymentsql = "INSERT INTO `payment`(`payment_id`, `amount`, `fullname`,`address`,`city`, `cvv`, `zip`,`nameoncard`,'creditcardnumber','expirymonth','expiryyear')
      VALUES ('$payment_id','$amount','$email','$fullname'$address','$city','$cvv','$zip', '$nameoncard'$creditcardnumber','$expirymonth','$expiryyear'                              );";

      $paymentgo = mysqli_query($conn, $paymentsql);

      if($paymentgo){
          $_SESSION['add']="payment done successfully";
          header("location: payment.php");
      }else{
          $_SESSION['add']="failed";
          header("location: payment.php");
      }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

      <a href="index.html" class="logo"> <i class="fas fa-shopping-basket"></i> fine food </a>
  
      <nav class="navbar">
        <a href="index.html">home</a>
        <a href="index.html#features">features</a>
        <a href="index.html#products">products</a>
        <a href="index.html#categories">categories</a>
        <a href="contactUs.html">contact us</a>
        <a href="aboutUs.html">about</a>
    </nav>
  
      <div class="icons">
          <div class="fas fa-bars" id="menu-btn"></div>
          <div class="fas fa-search" id="search-btn"></div>
          <div class="fas fa-shopping-cart" id="cart-btn"></div>
          <a href="registration.html"><div class="fas fa-user" id="login-btn"></div></a>
      </div>
  
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
                  <span class="price">$4.99/-</span>
                  <span class="quantity">qty : 1</span>
              </div>
          </div>
          <div class="box">
              <i class="fas fa-trash"></i>
              <img src="image/cart-img-2.png" alt="">
              <div class="content">
                  <h3>onion</h3>
                  <span class="price">$4.99/-</span>
                  <span class="quantity">qty : 1</span>
              </div>
          </div>
          <div class="box">
              <i class="fas fa-trash"></i>
              <img src="image/cart-img-3.png" alt="">
              <div class="content">
                  <h3>chicken</h3>
                  <span class="price">$4.99/-</span>
                  <span class="quantity">qty : 1</span>
              </div>
          </div>
          <div class="total"> total : $19.69/- </div>
          <a href="payment.html" class="btn">checkout</a>
      </div>
  
      <form action="" class="login-form">
          <h3>login now</h3>
          <input type="email" placeholder="your email" class="box">
          <input type="password" placeholder="your password" class="box">
          <p>forget your password <a href="#">click here</a></p>
          <p>don't have an account <a href="#">create now</a></p>
          <input type="submit" value="login now" class="btn">
      </form>
  
  </header>

<!-- header section ends -->




<!--  your content starts here!!!  -->

<section class="payment-form">
<div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
  
          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label class="payment-label" for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input class="payment-input" type="text" id="fname" name="firstname" placeholder="John M. Doe">
              <label class="payment-label" for="email"><i class="fa fa-envelope"></i> Email</label>
              <input class="payment-input" type="text" id="email" name="email" placeholder="john@example.com">
              <label class="payment-label" for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input class="payment-input" type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label class="payment-label" for="city"><i class="fa fa-institution"></i> City</label>
              <input class="payment-input" type="text" id="city" name="city" placeholder="New York">
  
              <div class="row">
                <div class="col-50">
                  <label class="payment-label" for="state">State</label>
                  <input class="payment-input" type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label class="payment-label" for="zip">Zip</label>
                  <input class="payment-input" type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <h3>Payment</h3>
              <label class="payment-label" for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fab fa-cc-visa" style="color:navy;"></i>
                <i class="fab fa-cc-amex" style="color:blue;"></i>
                <i class="fab fa-cc-mastercard" style="color:red;"></i>
                <i class="fab fa-cc-discover" style="color:orange;"></i>
              </div>
              <label class="payment-label" for="cname">Name on Card</label>
              <input class="payment-input" type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label class="payment-label" for="ccnum">Credit card number</label>
              <input class="payment-input" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label class="payment-label" for="expmonth">Exp Month</label>
              <input class="payment-input" type="text" id="expmonth" name="expmonth" placeholder="September">
  
              <div class="row">
                <div class="col-50">
                  <label class="payment-label" for="expyear">Exp Year</label>
                  <input class="payment-input" type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label class="payment-label" for="cvv">CVV</label>
                  <input class="payment-input" type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
  
          </div>
          <label class="payment-label">
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>

    <div class="col-25">
      <div class="container">
        <h4 style="font-size: large;">Cart
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>4</b>
          </span>
        </h4>
        <a href="#">Product 1</a> <span class="price">$15</span>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
      </div>
    </div>
  </div>

</section>
<!--
// Load total no.of prodcut added in the cart 
    load_cart_product_number();

    function load_cart_product_number() {
      $.ajax({
        url: 'onlinefood.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }

-->




<!--  your content ends here!!!  -->






<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> fine food <i class="fas fa-shopping-basket"></i> </h3>
            <p>shop all your daily essentials from one seamless site.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> AwladRagab@outlook.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Madinaty, Cairo - 11828 </a>
        </div>

        div class="box">
            <h3>quick links</h3>
            <a href="index.html" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="index.html#features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="index.html#products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="index.html#categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="registration.html" class="links"> <i class="fas fa-arrow-right"></i> login/signup </a>
            <a href="contactUs.html" class="links"> <i class="fas fa-arrow-right"></i> contact us </a>
            <a href="aboutUs.html" class="links"> <i class="fas fa-arrow-right"></i> about </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Fine Food </span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->

</body>

</html>
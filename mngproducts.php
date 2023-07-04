<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--To make the page responsive-->

    <title>admin dashboard</title>

    <link rel="stylesheet" href="css/adminStyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--the links from index-->


    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>

</head>

<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- The sidebar -->
<div class=" containeradmin">
    <div class="adminsidebar">
    <a href="adminDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>

<a href="#analytics"><i class="fa fa-fw fa-analytic"></i> Analytics</a>

<a href="#managecustomers"><i class="fa fa-fw fa-customer"></i> Manage Customers</a>

<a href="mngproducts.php"><i class="fa fa-fw fa-products"></i> Manage Products</a>
<a href="adminContact.php"><i class="fa fa-fw fa-settings"></i> reviews</a>
<a href="adminprofiles.php"><i class="fa fa-fw fa-settings"></i> admin profiles</a>
<a href="adminLogout.php">Logout</a>

    </div>



 <div class="categoriesAd" id="categoriesAd">

   <section class="categories" id="categories">

    <h1 class="products-heading"> <span>bakery & pastry</span> </h1>

    <div class="box-container">

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Breadway Arabic Flat Bread Brown Small 180 gm.png" alt="">
			<h3>Breadway Arabic Flat Bread Brown Small 180 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/- ">
            <a href="#" class="btn">Update</a>
        </div>


        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Breadway Arabic Flat Bread Plain Small 180 gm.png" alt="">
            <h3>Breadway Arabic Flat Bread Plain Small 180 gm</h3>
			<input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Breadway Plain Toast 500 gm.png" alt="">
            <h3>Breadway Plain Toast 500 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Breadway Whole Wheat Brown Toast 500 gm.png" alt="">
            <h3>Breadway Whole Wheat Brown Toast 500 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla Batton Sale Sesame 500 gm.png" alt="">
            <h3>Pearla Batton Sale Sesame 500 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla Fetir Meshaltet 1 Piece.png" alt="">
            <h3>Pearla Fetir Meshaltet 1 Piece</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla Honey Cake 1 Pcs.png" alt="">
            <h3>Pearla Honey Cake 1 Pcs</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla Loaf Cake Vanilla 600 gm.png" alt="">
            <h3>Pearla Loaf Cake Vanilla 600 gm</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla Mine Ajwa 500 gm.png" alt="">
            <h3>Pearla Mine Ajwa 500 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla Mine Plain 500 gm.png" alt="">
            <h3>Pearla Mine Plain 500 gm</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla Muffin Vanilla 1 Pcs.png" alt="">
            <h3>Pearla Muffin Vanilla 1 Pcs</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Pearla White Toast 400 gm.png" alt="">
            <h3>Pearla White Toast 400 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/bakery&pastry/Rich Bake Balady Brown Bread 20 cm.png" alt="">
            <h3>Rich Bake Balady Brown Bread 20 cm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

    </div>

</section>






<section class="categories" id="categories">

    <h1 class="products-heading"><span>eggs & dairy</span> </h1>

    <div class="box-container">

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Activia Rayeb 220G.png" alt="">
            <h3>Activia Rayeb 220G</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Almarai Full Cream Milk 1L 4 Pcs.png" alt="">
            <h3>Almarai Full Cream Milk 1L 4 Pcs</h3>
          <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Juhayna Plain Light Yoghurt 105 gm.png" alt="">
            <h3>Juhayna Plain Light Yoghurt 105 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Juhayna Plain Yoghurt 105 gm.png" alt="">
            <h3>Juhayna Plain Yoghurt 105 gm</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Juhayna Skimmed Multi Pack 1L 6 Pcs.png" alt="">
            <h3>Juhayna Skimmed Multi Pack 1L 6 Pcs</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/La Vache Qui Rit Triangle Cheese 16 Pcs Promo.png" alt="">
            <h3>La Vache Qui Rit Triangle Cheese 16 Pcs Promo</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Lurpak Danish UnSalted Butter 100 g.png" alt="">
            <h3>Lurpak Danish UnSalted Butter 100 g</h3>
          <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Lychee 0 Fat Greek Yogurt Original 225 gm.png" alt="">
            <h3>Lychee 0% Fat Greek Yogurt Original 225 g</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Lychee 0 Fat Greek Yogurt Strawberries 225 gm.png" alt="">
            <h3>Lychee 0% Fat Greek Yogurt Strawberries 225 g</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Organic Red Eggs x10.png" alt="">
            <h3>Organic Red Eggs *10</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Organic Red Eggs x15.png" alt="">
            <h3>Organic Red Eggs *15</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Organic White Eggs x10.png" alt="">
            <h3>Organic White Eggs *10</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/Organic White Eggs x12.png" alt="">
            <h3>Organic White Eggs *12</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/President Cream Spread Cheese 240 g.png" alt="">
            <h3>President Cream Spread Cheese 240 g</h3>
         <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/President Smoked Cheese 240 gm.png" alt="">
            <h3>President Smoked Cheese 240 g</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/President Spread Cheese Light 240 g.png" alt="">
            <h3>President Spread Cheese Light 240 g</h3>
        <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/eggs&dairy/President Triangle Cheese 16 Pcs.png" alt="">
            <h3>President Triangle Cheese 16 Pcs</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

    </div>

</section>

<section class="categories" id="categories">

    <h1 class="products-heading"> <span>meat & poultry</span> </h1>

    <div class="box-container">

        <div class="swiper-slide box">
            <img src="image/meat&poultry/Fresh Farm Baladi Beef Piccata 400 gm.png" alt="">
            <h3>Fresh Farm Baladi Beef Piccata 400 gm</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/meat&poultry/Shahd Chichen Breast 1 Kg.png" alt="">
            <h3>Shahd Chichen Breast 1 Kg</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/meat&poultry/Shahd Chicken Fillet 1 Kg.png" alt="">
            <h3>Shahd Chicken Fillet 1 Kg</h3>
        <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/meat&poultry/Shahd Chicken Legs 1 Kg.png" alt="">
            <h3>Shahd Chicken Legs 1 Kg</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/meat&poultry/Shahd Chicken Shish 1 Kg.png" alt="">
            <h3>Shahd Chicken Shish 1 Kg</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/meat&poultry/Shahd Drum Stick Chicken 1 Kg.png" alt="">
            <h3>Shahd Drum Stick Chicken 1 Kg</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/meat&poultry/Shahd Whole Chicken 1000 -1100 gm.png" alt="">
            <h3>Shahd Whole Chicken 1000/1100 gm</h3>
          <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

    </div>

</section>


<section class="categories" id="categories">

    <h1 class="products-heading">  <span>vegetables</span> </h1>

    <div class="box-container">

        <div class="swiper-slide box">
            <img src="image/vegetables/brown onion.png" alt="">
            <h3>fresh golden onion</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/vegetables/carrot.png" alt="">
            <h3>fresh carrot</h3>
          <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>
        
        <div class="swiper-slide box">
            <img src="image/vegetables/chery tomato.png" alt="">
            <h3>fresh chery tomato</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/vegetables/cucumber.png" alt="">
            <h3>fresh cucumber</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/vegetables/garlic.png" alt="">
            <h3>fresh garlic</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>
        
        <div class="swiper-slide box">
            <img src="image/vegetables/lemon.png" alt="">
            <h3>fresh lemon</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/vegetables/lettuce.png" alt="">
            <h3>fresh lettuce</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/vegetables/mixed pepers.png" alt="">
            <h3>fresh mixed pepers</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>
        
        <div class="swiper-slide box">
            <img src="image/vegetables/potato.png" alt="">
            <h3>fresh potato</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/vegetables/tomato.png" alt="">
            <h3>fresh tomato</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

    </div>

</section>




<section class="categories" id="categories">

    <h1 class="products-heading"> <span>fruits</span> </h1>

    <div class="box-container">

        <div class="swiper-slide box">
            <img src="image/fruits/banana.png" alt="">
            <h3>fresh banana</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/fruits/green apple.png" alt="">
            <h3>fresh green apple</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>
        
        <div class="swiper-slide box">
            <img src="image/fruits/guava.png" alt="">
            <h3>fresh guava</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/fruits/orange for juice.png" alt="">
            <h3>fresh orange for juice</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/fruits/pineapple.png" alt="">
            <h3>fresh pineapple</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>
        
        <div class="swiper-slide box">
            <img src="image/fruits/plum.png" alt="">
            <h3>fresh plum</h3>
			<input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/fruits/pomegranate.png" alt="">
            <h3>fresh pomegranate</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/fruits/red grapes.png" alt="">
            <h3>fresh red grapes</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>
        
        <div class="swiper-slide box">
            <img src="image/fruits/strawberry.png" alt="">
            <h3>fresh strawberry</h3>
			<input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/fruits/tangerine.png" alt="">
            <h3>fresh tangerine</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/fruits/yellow apple.png" alt="">
            <h3>fresh yellow apple</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

    </div>

</section>



<section class="categories" id="categories">

    <h1 class="products-heading"> <span>snacks & beverages</span> </h1>

    <div class="box-container">

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/7up 1L.png" alt="">
            <h3>7up 1L</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/barbican malt beverage 250ml.png" alt="">
            <h3>barbican malt beverage 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/barbican malt beverage apple 250ml.png" alt="">
            <h3>barbican malt beverage apple 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/barbican malt beverage pomegranate 250ml.png" alt="">
            <h3>barbican malt beverage pomegranate 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/barbican malt beverage strawberry 250ml pack of 6.png" alt="">
            <h3>barbican malt beverage strawberry 250ml pack of 6</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Cadbury Dairy Milk Plain Multipack 4+1 185g.png" alt="">
            <h3>Cadbury Dairy Milk Plain Multipack 4+1 185g</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/coca cola 250ml.png" alt="">
            <h3>coca cola 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/fanta orange 250ml.png" alt="">
            <h3>fanta orange 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/fanta red apple 250ml.png" alt="">
            <h3>fanta red apple 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Hayat Natural Water 1.5 L.png" alt="">
            <h3>Hayat Natural Water 1.5 L</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Hayat Natural Water 600 ml.png" alt="">
            <h3>Hayat Natural Water 600 ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/KitKat Mini Moments Cinnabon Chocolate Bar 119g.png" alt="">
            <h3>KitKat Mini Moments Cinnabon Chocolate Bar 119g</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/miranda orange 1L.png" alt="">
            <h3>miranda orange 1L</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/miranda orange 250ml.png" alt="">
            <h3>miranda orange 250ml</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Nestle Water 1.5 L.png" alt="">
            <h3>Nestle Water 1.5 L</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Nestle Water 600 ml.png" alt="">
            <h3>Nestle Water 600 ml</h3>
           <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Raw Sea Salt & Vinegar Kettle Cooked Potatoes 140 gm.png" alt="">
            <h3>Raw Sea Salt & Vinegar Kettle Cooked Potatoes 140 gm</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/redbull energy drink 250ml pack of 4.png" alt="">
            <h3>redbull energy drink 250ml pack of 4</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/redbull energy drink 250ml.png" alt="">
            <h3>redbull energy drink 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/sprite 250ml.png" alt="">
            <h3>sprite 250ml</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Tiger Big Super Chili & Lemon.png" alt="">
            <h3>Tiger Big Super Chili & Lemon</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

        <div class="swiper-slide box">
            <img src="image/snacks&beverages/Tiger Super Sweet Chili.png" alt="">
            <h3>Tiger Super Sweet Chili</h3>
            <input type="text"  class="price" value="EGP4.99/- - 10.99/-">
            <a href="#" class="btn">Update</a>
        </div>

    </div>



</div>
</div>














</body>
</html>
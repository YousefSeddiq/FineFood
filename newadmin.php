<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $First_name = $_POST['adminFName'];
    $Last_name = $_POST['adminLName'];
    $email = $_POST['email'];
    $adminpw = $_POST['adminPW'];
    $confirmpw = $_POST["password_2"];

    if($adminpw === $confirmpw)
    {
        $adminsql = "INSERT INTO `adminUser`(`adminFName`, `adminLName`, `adminEmail`,`adminPW`)
        VALUES ('$First_name','$Last_name','$email','$adminpw');";

        $adminresult = mysqli_query($conn, $adminsql);

        if($adminresult){
            $_SESSION['add']="Admin added successfully";
            header("location: adminprofiles.php");
        }else{
            $_SESSION['add']="failed";
            header("location: newadmin.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--To make the page responsive-->

    <title>Add new admin</title>

<!-- bootstrap links: -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




    <link rel="stylesheet" href="css/adminStyle.css">
<!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <!--the links from index-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/adminScript.js"></script>

</head>

<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- The sidebar -->
<section>
    <div class="adminsidebar">
    <a href="adminDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>

<a href="#analytics"><i class="fa fa-fw fa-analytic"></i> Analytics</a>

<a href="#managecustomers"><i class="fa fa-fw fa-customer"></i> Manage Customers</a>

<a href="mngproducts.php"><i class="fa fa-fw fa-products"></i> Manage Products</a>
<a href="adminContact.php"><i class="fa fa-fw fa-settings"></i> reviews</a>
<a href="adminprofiles.php"><i class="fa fa-fw fa-settings"></i> admin profiles</a>
<a href="adminLogout.php">Logout</a>

    </div>
</section>

<!--content of the page-->
<section>
<div class="Admin-content-wrap my-5">

    <h1>New Admin</h1>
    <br>

    <form method='POST' action="newadmin.php" style="width: 500px; font-size: 18px;">
    <div class="mb-3">
        <label>First Name</label>
        <input type="text" name="adminFName" class="form-control p-3" placeholder="Enter your first name">
    </div>
    <div class="mb-3">
        <label>Last Name</label>
        <input type="text" name="adminLName" class="form-control p-3" placeholder="Enter your last name">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control p-3" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="adminPW" class="form-control p-3" placeholder="Enter your password">
    </div>
    <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="password_2" class="form-control p-3" placeholder="Enter your password">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div> <!--div content wrap-->
</section>

</body>
</html>
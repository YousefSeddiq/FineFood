<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--To make the page responsive-->

    <title>admin dashboard</title>
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
    
    <?php
    if(isset($_SESSION['success']))
    {
        echo $_SESSION['success'];
    }
    ?>

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
<div class="Admin-content-wrap">

    <h1 style="margin-left: 20px;">Admin profiles</h1>
    <br>
    <button type="button" class="btn-newadmin" onclick="document.location='newadmin.php'">Add admin</button>
    <br><br>
    <?php
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    
    if(isset($_SESSION['delete']))
    {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }
    if(isset($_SESSION['update']))
    {
        echo $_SESSION['update'];
        unset($_SESSION['update']);
    }
    ?>
    <br>
    <div class="orders-table">
        <table>
            <tr>
                <th>Admin ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit/Delete</th>
            </tr>
            <?php
            //Display admins
                $sql = "SELECT * FROM adminUser";
                $res = mysqli_query($conn, $sql);

                if($res)
                {
                    $countrows = mysqli_num_rows($res); //getting all rows

                    if($countrows > 0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            $id = $rows['adminID'];
                            $fname = $rows['adminFName'];
                            $lname = $rows['adminLName'];
                            $email = $rows['adminEmail'];
                            $pass = $rows['adminPW'];

                            ?>
                            <tr>

                                <td><?php echo $id; ?></td>
                                <td><?php echo $fname; ?></td>
                                <td><?php echo $lname; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $pass; ?></td>
                                <td>
                                    <a href = "http://localhost/FineFood/updateadmin.php?id=<?php echo $id; ?>" class="btn-adminAction">Update </a>
                                    <a href = "http://localhost/FineFood/deleteadmin.php?id=<?php echo $id; ?>" class="btn-adminAction">Delete </a>

                                </td>
                            </tr>
            <?php
                        }

                    }
                    else
                    {

                    }
                }
            ?>
        </table>
        
    </div>
    

</div> <!--div content wrap-->
</section>

</body>
</html>
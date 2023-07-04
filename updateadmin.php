<?php
    include_once 'connect.php';
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
    <h1>Update</h1>
    <br>
    <br>
    <?php
    $id = $_GET['id'];

    $sql = "SELECT * FROM adminUser WHERE adminID=$id";

    $res = mysqli_query($conn, $sql);

    if($res)
    {
        $count = mysqli_num_rows($res);

        if($count === 1)
        {
            //echo "admin available";
            $row=mysqli_fetch_assoc($res);

            $fname= $row['adminFName'];
            $lname = $row['adminLName'];
            $email = $rows['adminEmail'];
            $pass = $rows['adminPW'];
        }
        else
        {
           echo 'error';
        }
    }

    ?>
    
    <form method='POST' action="adminprofiles.php" style="width: 500px; font-size: 18px;">
    <table>
        <tr>
            <td>First Name</td>
            <td>
                    <input type="text" name='fname' value="<?php echo $fname; ?>">
            </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name='lname' value="<?php echo $lname; ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name='adminEmail' value="<?php echo $email; ?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name='pass' value="<?php echo $pass; ?>">
                </td>
            </tr>
            <tr>
                <td>Confirm password</td>
                <td>
                    <input type="password" name='pass2' value="<?php echo $pass2; ?>">
                </td>
            </tr>
            <tr>
                <td>
                <input type="hidden" name='adminID' value="<?php echo $id; ?>">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>
</table>
</form>
</div> <!--div content wrap-->
</section>

<?php
if(isset($_POST['submit']))
{
    echo "button clicked";
    $id = $_POST['adminID'];
    $fname = $_POST['adminFName'];
    $lname = $_POST['adminLName'];
    $email = $_POST['adminEmail'];
    $pass = $_POST['adminPW'];
    $pass2 = $_POST['pass2'];

    if($pass === $pass2)
    {
        $adminupdate = "UPDATE adminUser SET
        adminFName = '$fname',
        adminLName = '$lname',
        adminEmail = '$email',
        pass = '$adminPW', 
        WHERE adminID = '$id";

        $res2 = mysqli_query($conn, $adminupdate);

        if($res2)
        {
            $_SESSION['update'] = "Admin Updated successfully.";
            header("location: adminprofiles.php");
        }
        else
        {
            $_SESSION['update'] = "Admin not updated.";
            header("location: adminprofiles.php");
        }
    }
}
?>
</body>
</html>
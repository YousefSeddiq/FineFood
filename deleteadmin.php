<?php
    include 'connect.php';

    $id = $_GET['id'];



    $deletequery = "DELETE FROM adminUser WHERE adminID = '$id'";

    $deletequery_run = mysqli_query($conn, $deletequery);

    if($deletequery_run)
    {

        $SESSION['delete'] = "Admin Deleted successfully";
        header("location: adminprofiles.php");
    }
    else
    {
        $SESSION['delete'] = "Admin is not deleted";
        header("location: adminprofiles.php");
    }



?>

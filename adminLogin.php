<?php
include_once 'connect.php';

//condition for login
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql="select * from adminUser where adminEmail= '".$email."' AND adminPW = '".$password."' ";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

        if($row["adminEmail"]==$email && $row["adminPW"]==$password) 
        {
            $_SESSION["username"] = $username;  //username ely fo2, ma8yrsh 7aga tany

            header("location: adminDashboard.php");
        }
        else
        {
            echo "email or password is incorrect";
        } 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>
<center>
<div style="padding: 200px; margin
: 100px; background-color: orange">
    <form action="#" method="POST">
        <h1>Admin login form</h1>
        <br>

        <div>
            <label>Email</label>
            <input type="text" name ="email" required>
        </div>
        <br>

        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <br>

        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</div>
</center>

</body>
</html>
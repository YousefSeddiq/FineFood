<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "finefood";



$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else 
{ echo "Connected successfully"; }


if(isset($_SESSION['success']) && $_SESSION['success'] != '')
{
    echo '<h2>' .$SESSION['success']. ' </h2>';
    unset($_SESSION['success']);
}

if(isset($_SESSION['unsuccess']) && $_SESSION['unsuccess'] != '')
{
    echo '<h2>' .$SESSION['unsucess']. ' </h2>';
    unset($_SESSION['unsuccess']);
}

?>
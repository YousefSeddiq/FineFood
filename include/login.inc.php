<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pwd = $_POST["password"];

    require_once 'connection.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email,$pwd) !== false) {
        header("location: ../registration.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $pwd);
}
else {
    header("location: ../registration.php");
    exit();
}
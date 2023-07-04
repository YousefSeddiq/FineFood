<?php

if(isset($_POST["submit"])){
    $name = $_POST["fullName"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $cnfPwd = $_POST["password_2"];

    require_once 'connection.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name,$email,$pwd,$cnfPwd) !== false) {
        header("location: ../registration.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../registration.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd,$cnfPwd) !== false) {
        header("location: ../registration.php?error=passworddontmatch");
        exit();
    }
    if (emailExists($conn, $email) !== false) {
        header("location: ../registration.php?error=emailUsed");
        exit();
    }

    createUser($conn, $name, $email, $pwd);
}
else{
    header("location: ../registration.php");
    exit();
}
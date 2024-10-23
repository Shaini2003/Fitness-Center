<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput =emptyInputLogin($email,$pwd);
    $invalidUid = invalidUid($email);
    $invalidEmail=invalidEmail($email);
    
    if ($emptyInput !== false){
        header("Location:../admin.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false){
        header("Location:../admin.php?error=invaliduid");
        exit();
    }
    if($invalidEmail !== false){
        header("Location:../admin.php?error=invalidemail");
        exit();
    }

    LoginUser($conn,$email,$pwd);
    }
    else{
        header('location:../index.php');
        exit();
    }
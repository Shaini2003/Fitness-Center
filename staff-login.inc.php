<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];


    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "fitness_center";
    
    
    $conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);
    
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    
    }
    require_once 'staff-functions.inc.php';

    $emptyInput =emptyInputLogin($email,$pwd);
    $invalidUid = invalidUid($email);
    $invalidEmail=invalidEmail($email);
    
    if ($emptyInput !== false){
        header("Location:../staff.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false){
        header("Location:../staff.php?error=invaliduid");
        exit();
    }
    if($invalidEmail !== false){
        header("Location:../staff.php?error=invalidemail");
        exit();
    }
   
    LoginUser($conn,$email,$pwd);
    }

        header('location:../staff-login.php');
        exit();
    
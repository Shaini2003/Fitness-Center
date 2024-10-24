<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat =$_POST["confirm-password"];
    $userType =$_POST["type"];

    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        
        $secretKey= '6LcxGWsqAAAAAKj2oOYMWaEHH3nGwAg2BY3vqCaX';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.($_POST['g-recaptcha-response']));
        $response = json_decode($verifyResponse);

    
        $emptyInput =emptyInputSignup($name,$phone,$email,$pwd,$pwdRepeat,$userType);
        $invalidUid = invalidUid($email);
        $invalidName = invalidName($name);
        $invalidEmail=invalidEmail($email);
        $invalidPhone =invalidPhone($phone);
        $pwdMatch = pwdMatch($pwd , $pwdRepeat);
        $invalidUserType = invalidType($userType);
        $uidExists =uidExists($conn,$name,$email);
    
        if ($emptyInput !== false){
            header("Location:../createAccount.php?error=emptyinput");
            exit();
        }
        if ($invalidUid !== false){
            header("Location:../createAccount.php?error=invaliduid");
            exit();
        }
        if($invalidEmail !== false){
            header("Location:../createAccount.php?error=invalidemail");
            exit();
        }
        if($invalidName !== false){
            header("Location:../createAccount.php?error=invalidname");
            exit();
        }
        if ($invalidPhone !== false){
            header("Location:../createAccount.php?error=invalidPhone");
            exit();
        }
        
        if ($pwdMatch !== false){
            header("Location:../createAccount.php?error=passwordsdontmatch");
            exit();
        }
        if($invalidUserType !== false){
            header("Location:../createAccount.php?error=invaliduserType");
            exit();
        }
        if ($uidExists !== false){
            header("Location:../createAccount.php?error=emailtaken");
            exit();
        }
    createUser($conn,$name,$phone,$email,$pwd,$userType);
    
    }
    else{
        $_SESSION['status'] = "Error in recapcha verification";
        header("Location: {$_SERVER["HTTP_REFERER"]}");
        exit(0);
    }
    }
    else{
        header('location:../login.php');
    }

    
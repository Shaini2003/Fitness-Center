<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat =$_POST["confirm-password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput =emptyInputSignup($name,$phone,$email,$pwd,$pwdRepeat);
    $invalidUid = invalidUid($email);
    $invalidName = invalidName($name);
    $invalidEmail=invalidEmail($email);
    $invalidPhone =invalidPhone($phone);
    $pwdMatch = pwdMatch($pwd , $pwdRepeat);
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
    if ($uidExists !== false){
        header("Location:../createAccount.php?error=emailtaken");
        exit();
    }
createUser($conn,$name,$phone,$email,$pwd);

}
else{
    header('location:../login.php');
}
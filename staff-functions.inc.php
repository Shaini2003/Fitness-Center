<?php

function emptyInputLogin($email,$pwd){
    if(empty($email) || empty($pwd)) {
        $result =true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidUid($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;

}
function invalidEmail($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

}
function LoginUser($conn,$email,$pwd){
    $uidExists = uidExists($conn,$email,$email);
    if($uidExists === false){
        header("location:../staff.php?error=wronglogin");
        exit();
    }
    else if($pwd === true){
        session_start();
        $_SESSION["userid"] =$uidExists["staffId"];
        $_SESSION["email"] =$uidExists["usersEmail"];
        $_SESSION['username'] = $uidExists["usersName"];
        header("Location:../staff-login.php");
        exit();
    }
    }
    

function uidExists($conn,$name,$email){
    $sql= "SELECT*FROM staff WHERE usersEmail= ? OR usersName= ?;";
    $stmt =mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../staff.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$name,$email);
    mysqli_stmt_execute($stmt);
    $resultData= mysqli_stmt_get_result($stmt);
    if($row =mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        return false;
    }
    mysqli_stmt_close($stmt);
    

}
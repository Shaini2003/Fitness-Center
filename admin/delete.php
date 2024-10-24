<?php
if(isset($_GET["usersId"])){
    $id = $_GET["usersId"];

    $serverName = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "fitness_center";


    $conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);

    $sql ="DELETE FROM users WHERE usersId=$id";
    $conn->query($sql);

}
header("location: /admin/users.php");
exit;
?>
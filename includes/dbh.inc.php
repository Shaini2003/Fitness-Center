<?php
$serverName = "localhost";
$dbUsername = "Shaini_tharushika";
$dbPassword = "shaini12@MT";
$dbName = "fitness_center";

$conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed : ".mysqli_connect_error());

}else{
    echo 'its working';
}
<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "fitness_center";


$conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed : ".mysqli_connect_error());

}else{
    echo 'its working';
}
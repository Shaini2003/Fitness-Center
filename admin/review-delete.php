<?php
if (isset($_GET["review_id"])) {
    $id = $_GET["review_id"];

    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "fitness_center";


    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    $sql = "DELETE FROM review_table WHERE review_id=$id";
    $conn->query($sql);
}
header("location: /admin/reviews.php");
exit;

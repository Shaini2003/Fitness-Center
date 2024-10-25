<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];


    if (filter_var($id, FILTER_VALIDATE_INT)) {
        $serverName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "fitness_center";

        $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

    
        $sql = "DELETE FROM membership WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
        
            $successMessage = "Record deleted successfully.";
        } else {
            $errorMessage = "Error deleting record: " . $stmt->error;
        }

        
        $stmt->close();
        $conn->close();
    } else {
        $errorMessage = "Invalid ID.";
    }
}


header("location: /admin/membership.php");
exit;
?>

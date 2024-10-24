<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "fitness_center";


// Establishing MySQLi connection
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['edit'];

// Initialize message array
$message = [];

// Handle update request
if (isset($_POST['update_class'])) {
    $class_name = $_POST['class_name'];
    $class_price = $_POST['class_price'];

    // Check if an image was uploaded
    if (isset($_FILES['class_image']) && $_FILES['class_image']['error'] !== UPLOAD_ERR_NO_FILE) {
        $class_image_tmp_name = $_FILES['class_image']['tmp_name'];
        $class_image = file_get_contents($class_image_tmp_name); // Get image content as a binary string

        // Prepare the SQL statement
        $stmt = $conn->prepare("UPDATE classes SET name=?, price=?, image=? WHERE id=?");
        $stmt->bind_param("sisi", $class_name, $class_price, $class_image, $id); // 's' for string, 'i' for integer

        // Execute the statement
        if ($stmt->execute()) {
            $message[] = 'Class updated successfully.';
            header('<location: /admin/classes.php');
            exit;
        } else {
            $message[] = 'Could not update the class.';
        }

        $stmt->close();
    } else {
        // Update without changing the image
        $stmt = $conn->prepare("UPDATE classes SET name=?, price=? WHERE id=?");
        $stmt->bind_param("sii", $class_name, $class_price, $id);

        // Execute the statement
        if ($stmt->execute()) {
            $message[] = 'Class updated successfully.';
            header('location:/admin/classes.php');
            exit;
        } else {
            $message[] = 'Could not update the class.';
        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="class.css">
</head>
<body style="background-color: black;">

<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>

<div class="container">
    <div class="admin-product-form-container centered">

        <?php
        $select = mysqli_query($conn, "SELECT * FROM classes WHERE id = '$id'");
        if ($row = mysqli_fetch_assoc($select)) {
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="title">Update the Class</h3>
            <input type="text" class="box" name="class_name" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Enter the class name" required>
            <input type="number" min="0" class="box" name="class_price" value="<?php echo htmlspecialchars($row['price']); ?>" placeholder="Enter the class price" required>
            <input type="file" class="box" name="class_image" accept="image/png, image/jpeg, image/jpg">
            <input type="submit" value="Update Class" name="update_class" class="btn"style="background-color:#0984e3;">
            <a href="classes.php" class="btn"style="background-color:#0984e3;">Go Back!</a>
        </form>

        <?php } else { ?>
            <p>No class found with that ID.</p>
        <?php } ?>

    </div>
</div>

</body>
</html>

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

// Handle adding a new class
if (isset($_POST['add_class'])) {
    $class_name = $_POST['class_name'];
    $class_price = $_POST['class_price'];

    // Check if an image was uploaded
    if (isset($_FILES['class_image']) && $_FILES['class_image']['error'] === UPLOAD_ERR_OK) {
        $class_image_tmp_name = $_FILES['class_image']['tmp_name'];
        $class_image = file_get_contents($class_image_tmp_name); // Get image content as a binary string

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO classes(name, price, image) VALUES(?, ?, ?)");
        $stmt->bind_param("sbs", $class_name, $class_price, $class_image); // 's' for string, 'b' for blob

        // Execute the statement
        if ($stmt->execute()) {
            $message[] = 'New class added successfully';
        } else {
            $message[] = 'Could not add the class.';
        }

        $stmt->close();
    } else {
        $message[] = 'Please fill out all fields and upload an image.';
    }
}

// Handle deletion of a class
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM classes WHERE id = $id");
    header('location:classes.php');
    exit; // Make sure to exit after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Custom CSS File Link -->
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
        <div class="admin-product-form-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <h3>Add a New Class or Sevice</h3>
                <input type="text" placeholder="Enter class name" name="class_name" class="box" required>
                <input type="number" placeholder="Enter class price" name="class_price" class="box" required>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="class_image" class="box" required>
                <input type="submit" class="btn" name="add_class" value="Add Class" style="background-color:#0984e3;">
            </form>
        </div>

        <?php
        $select = mysqli_query($conn, "SELECT * FROM classes");
        ?>
        <div class="product-display">
            <table class="product-display-table" style="background-color: white;">
                <thead>
                    <tr>
                        <th>Class Image</th>
                        <th>Class Name</th>
                        <th>Class Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                    <tr>
                        <td>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" height="100" alt="Class Image">
                        </td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td>$<?php echo htmlspecialchars($row['price']); ?>/-</td>
                        <td>
                            <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"style="background-color:#0984e3;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="classes.php?delete=<?php echo $row['id']; ?>" class="btn">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

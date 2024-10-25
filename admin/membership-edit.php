<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "fitness_center";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

$name = "";
$price = "";
$details = "";
$errorMessage = "";
$successMessage = "";
$id = null; // Initialize $id to prevent undefined variable

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location: /admin/membership.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM membership WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /admin/membership.php");
        exit;
    }

    $name = $row["class_name"];
    $price = $row["class_price"];
    $details = $row["class_details"];
} else {
    // Ensure $id is set for POST
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
    } else {
        header("location: /admin/membership.php");
        exit;
    }

    $name = $_POST["name"];
    $price = $_POST["price"];
    $details = $_POST["details"];

    do {
        if (empty($name) || empty($price) || empty($details)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Escape variables to prevent SQL injection
        $name = $conn->real_escape_string($name);
        $price = $conn->real_escape_string($price);
        $details = $conn->real_escape_string($details);

        $sql = "UPDATE membership SET class_name = '$name', class_price = '$price', class_details = '$details' WHERE id = $id";

        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }
        $successMessage = "User Updated Successfully";
        header("location: /admin/membership.php");
        exit;
    } while (false);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: black; color: white;">
    <div class="container my-5">
        <h2 style="font-size: 40px; font-weight: 600;">Edit Membership Plan</h2><br>
        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="font-size: 20px;">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="font-size: 20px;">Price</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="<?php echo htmlspecialchars($price); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="font-size: 20px;">Details</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="details" value="<?php echo htmlspecialchars($details); ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/admin/membership.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

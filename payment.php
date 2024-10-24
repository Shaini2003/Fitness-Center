<?php
$serverName = "localhost";
$dbUsername = "Shaini_tharushika";
$dbPassword = "shaini12@MT";
$dbName = "fitness_center";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// Check for a successful connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$class_name = "";
$price = "";
$number = "";
$MM = "";
$YY = "";
$CCV = "";
$first_name = "";
$last_name = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $class_name = $_POST["class_name"];
    $price = $_POST["class_price"];
    $number = $_POST["card_number"];
    $MM = $_POST["MM"];
    $YY = $_POST["YY"];
    $CCV = $_POST["CCV"]; // Correctly referenced CCV
    $first_name = $_POST["First_Name"];
    $last_name = $_POST["Last_Name"];

    // Validate input
    if (empty($class_name) || empty($price) || empty($number) || empty($MM) || empty($YY) || empty($CCV) || empty($first_name) || empty($last_name)) {
        $errorMessage = "All fields are required.";
    } else {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO payment (class_name, class_price, card_number, MM, YY, CCV, First_Name, Last_Name) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $class_name, $price, $number, $MM, $YY, $CCV, $first_name, $last_name);

        if ($stmt->execute()) {
            $successMessage = "Payment successfully added";
            header("location: classes.php");
             exit;

            // Reset form values
            $class_name = "";
            $price = "";
            $number = "";
            $MM = "";
            $YY = "";
            $CCV = "";
            $first_name = "";
            $last_name = "";
        } else {
            $errorMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
<?php
if (!empty($errorMessage)) {
    echo "
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>$errorMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    ";
}

if (!empty($successMessage)) {
    echo "
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>$successMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    ";
}
?>
    
<form method="post">
    <div class="payment-form">
        <br>
        <label style="font-size: 20px;text-align: center;font-weight: 600;">Pay with Credit or Debit Card</label>
        <div class="card-logos">
            <img src="Media/visa.webp" alt="Visa">
            <img src="Media/master.webp" alt="Mastercard">
        </div>
        <div class="card-details">
            <label for="class_name">Class Name</label>
            <input type="text" id="class_name" name="class_name" value="<?php echo $class_name ?>" required>
            <label for="class_price">Class Price</label>
            <input type="text" id="class_price" name="class_price" value="<?php echo $price ?>" required>
            <label for="card_number">Card Number</label>
            <input type="text" id="card_number" name="card_number" value="<?php echo $number ?>" required>
            <label for="mm">MM</label>
            <input type="text" id="mm" name="MM" required maxlength="2" value="<?php echo $MM ?>">
            <label for="yy">YY</label>
            <input type="text" id="yy" name="YY" required maxlength="2" value="<?php echo $YY ?>">
            <label for="ccv">CCV/CVC</label>
            <input type="password" id="ccv" name="CCV" required maxlength="3" value="<?php echo $CCV ?>">
        </div>
        <div class="personal-details">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="First_Name" value="<?php echo $first_name ?>" required>
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="Last_Name" value="<?php echo $last_name ?>" required>
        </div>
        <center><button type="submit">Submit</button></center>
    </div>
</form>
</body>
</html>

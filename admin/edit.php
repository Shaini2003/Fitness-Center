<?php
$serverName = "localhost";
$dbUsername = "Shaini_tharushika";
$dbPassword = "shaini12@MT";
$dbName = "fitness_center";

$conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);



$id="";
$name= "";
$phone= "";
$email="";
$password="";
$userType="";

$errorMessage ="";
$successMessage ="";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET["usersId"])){
        header("location: /admin/users.php");
        exit;
    }
$id=$_GET["usersId"];

$sql ="SELECT * FROM users WHERE usersId=$id";
$result=$conn->query($sql);
$row =$result->fetch_assoc();

if(!$row){
    header("location: /admin/users.php");
    exit;
}
    $name= $row["usersName"];
    $phone=$row["usersPhone"];
    $email=$row["usersEmail"];
    $password=$row["usersPwd"];
    $userType=$row["userType"];
}
else {
    $id = $_POST["id"]; // Ensure the ID is fetched
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userType = $_POST["userType"];
   
    do {
        if (empty($id) || empty($name) || empty($phone) || empty($email) || empty($password) || empty($userType)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Debugging SQL output
        $sql = "UPDATE users " . 
        "SET usersName = '$name', usersPhone = '$phone', usersEmail = '$email', usersPwd = '$password', userType = '$userType' " . 
        "WHERE usersId = $id";

         
        
        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }
        $successMessage = "User Updated Successfully";
        header("location: /admin/users.php");
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

<body>
    <div class="container my-5">
        <h2>New Client</h2>
        <?php
        if(!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close'data-bs-dismiss='alert'aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" value="<?php echo $password ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">userType</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="userType" value="<?php echo $userType ?>">
                </div>
            </div>


            <?php
            if(!empty($successMessage)){
                echo "
                <div class='row mb-3>
                <div class='offset-sm-3 col-sm-6'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>$successMessage</strong>
            <button type='button' class='btn-close'data-bs-dismiss='alert'aria-label='Close'></button>
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
                    <a class="btn btn-outline-primary" href="/admin/users.php" role="button">Cancel</a>
                </div>

            </div>
    </div>
    </form>
    </div>
</body>

</html>
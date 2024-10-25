<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "fitness_center";


$conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);



$name= "";
$phone= "";
$email="";
$password="";
$userType="";

$errorMessage ="";
$successMessage ="";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name= $_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $userType=$_POST["userType"];

    do{
        if(empty($name) || empty($phone) || empty($email) || empty($password) || empty($userType)){
            $errorMessage ="All the fields are required";
            break;
        }
       
        //add user to the database
        $sql="INSERT INTO staff (usersName,usersPhone,usersEmail,usersPwd,userType) " .
        "VALUES ('$name','$phone','$email','$password','$userType')";
        $result=$conn->query($sql);

        if(!$result){
            $errorMessage ="Invalid query: " . $conn->error;
            break;
        }

        $name= "";
        $phone= "";
       $email="";
       $password="";
       $userType="";

       $successMessage="User added Successfully";
       header("location: /admin/staffmembers.php");
       exit;

    }while(false);
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

<body style="background-color: black;color:white;">
    <div class="container my-5">
        <h2 style="font-size: 40px;font-weight: 600;">New Client</h2><br>
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
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="font-size: 20px;">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"  style="font-size: 20px;">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"  style="font-size: 20px;">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"  style="font-size: 20px;">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" value="<?php echo $password ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"  style="font-size: 20px;">userType</label>
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
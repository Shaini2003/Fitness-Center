<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: black;color: white;">
<div class="container my-5">
        <h2 style="text-align: center;">Membership and Pricing Packages</h2>
        <a class="btn btn-primary" href="/admin/add-membership.php" role="button">Add New Membership plan</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Class Name</th>
                    <th>Class Price</th>
                    <th>Class Details</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $serverName = "localhost";
                $dbUsername = "root";
                $dbPassword ="";
                $dbName = "fitness_center";
                

                $conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);
                if(!$conn){
                    die("Connection failed : ".mysqli_connect_error());
                
                }

                $sql= "SELECT * FROM membership";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ".$conn->error);
                }
                while($row =$result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[class_name]</td>
                    <td>$row[class_price]</td>
                    <td>$row[class_details]</td>
                    <td>
                        <a class='btn btn-primary btn-sm'href='/admin/membership-edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm'href='/admin/membership-delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr> ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
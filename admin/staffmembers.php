<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: black;color: white;">
    <div class="container my-5">
        <h2>List of Staff</h2>
        <a class="btn btn-primary" href="/admin/staff-create.php" role="button">Add New Staff Member</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>UserType</th>
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

                $sql= "SELECT * FROM staff";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ".$conn->error);
                }
                while($row =$result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[staffId]</td>
                    <td>$row[usersName]</td>
                    <td>$row[usersPhone]</td>
                    <td>$row[usersEmail]</td>
                    <td>$row[usersPwd]</td>
                    <td>$row[userType]</td>
                    <td>
                        <a class='btn btn-primary btn-sm'href='/admin/edit.php?usersId=$row[staffId]'>Edit</a>
                        <a class='btn btn-danger btn-sm'href='/admin/delete.php?usersId=$row[staffId]'>Delete</a>
                    </td>
                </tr> ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
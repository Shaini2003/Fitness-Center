<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
        <h2>List of Reviews</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Review_Id</th>
                    <th>User_Name</th>
                    <th>User_Rating</th>
                    <th>User_Review</th>
                    <th>Date Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $serverName = "localhost";
                $dbUsername = "Shaini_tharushika";
                $dbPassword = "shaini12@MT";
                $dbName = "fitness_center";

                $conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);
                if(!$conn){
                    die("Connection failed : ".mysqli_connect_error());
                
                }

                $sql= "SELECT * FROM review_table";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ".$conn->error);
                }
                while($row =$result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[review_id]</td>
                    <td>$row[user_name]</td>
                    <td>$row[user_rating]</td>
                    <td>$row[user_review]</td>
                    <td>$row[datetime]</td>
                    <td>
                        <a class='btn btn-primary btn-sm'href='/admin/review-edit.php?usersId=$row[review_id]'>Edit</a>
                        <a class='btn btn-danger btn-sm'href='/admin/review-delete.php?usersId=$row[review_id]'>Delete</a>
                    </td>
                </tr> ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
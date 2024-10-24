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
        <h2 style="text-align: center;">List of FAQs</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>FAQ</th>
                    
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

                $sql= "SELECT * FROM user_emails";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ".$conn->error);
                }
                while($row =$result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[Id]</td>
                    <td>$row[email]</td>
                    <td>$row[FAQ]</td>
                    
                    
                </tr> ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
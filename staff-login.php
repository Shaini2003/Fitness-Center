
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header> <!---Create a Logo-->
        <a href="index.php" class="logo">Fitzone Staff Dashboard</a>
        <!---Create a navigation bar-->
        <ul class="navbar">
            <li><a href="#users">User Details</a></li>
            <li><a href="#classes">SERVICES</a></li>
            <li><a href="#FAQ">FAQs</a></li>
            <li><a href="#review">User Reviews</a></li>



        </ul>
    </header>
    <section id="users">
        <div class="container my-5">
            <h2>List of Users</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>UserId</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>UserType</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $serverName = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbName = "fitness_center";


                    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
                    if (!$conn) {
                        die("Connection failed : " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM users";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr>
                    <td>$row[usersId]</td>
                    <td>$row[usersName]</td>
                    <td>$row[usersPhone]</td>
                    <td>$row[usersEmail]</td>
                    <td>$row[usersPwd]</td>
                    <td>$row[userType]</td>
                
                </tr> ";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </section>

    </section>
    <section id="classes">
        <div class="container my-5">
            <h2 style="text-align: center;font-size: 40px;"> Services</h2>

            <table class="table">
                <thead style="font-size: 20px;">
                    <tr>
                        <th>Class ID</th>
                        <th>Class Name</th>
                        <th>Class Price</th>
                        <th>Class Image</th>
                    </tr>
                </thead>
                <tbody style="font-size: 18px;">
                    <?php
                    $serverName = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbName = "fitness_center";


                    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
                    if (!$conn) {
                        die("Connection failed : " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM classes";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Class Image' style='width:100px; height:auto;'/></td>
                </tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section id="FAQ">
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
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbName = "fitness_center";


                    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
                    if (!$conn) {
                        die("Connection failed : " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM user_emails";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }
                    while ($row = $result->fetch_assoc()) {
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
    </section>

    <section id="review">
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
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbName = "fitness_center";


                    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
                    if (!$conn) {
                        die("Connection failed : " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM review_table";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr>
                    <td>$row[review_id]</td>
                    <td>$row[user_name]</td>
                    <td>$row[user_rating]</td>
                    <td>$row[user_review]</td>
                    <td>$row[datetime]</td>
                    <td>
                        
                        <a class='btn btn-danger btn-sm' href='/admin/review-delete.php?review_id=$row[review_id]'>Delete</a>
                    </td>
                </tr> ";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
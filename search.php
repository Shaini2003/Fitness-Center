<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Classes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h2>Search Classes</h2>
    <center>
        <form class="d-flex" role="search" action="" method="GET">
            <input class="form-control me-2" type="search" name="query" placeholder="Search by Class Name" aria-label="Search" style="font-size: 17px;">
            <button class="btn btn-outline-primary" type="submit" style="font-size: 20px;font-weight: 500;width: 140px;height: 40px;">Search</button>
        </form>
    </center><br>
    <table class="table">
        <thead>
            <tr>
                <th>Class ID</th>
                <th>Class Name</th>
                <th>Class Price</th>
                <th>Class Image</th>
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

            // Initialize search query variable
            $search_query = "";
            if (isset($_GET['query'])) {
                $search_query = $_GET['query'];
            }

            // Prepare the SQL statement
            $sql = "SELECT * FROM classes WHERE name LIKE ?";
            $stmt = $conn->prepare($sql);
            $search_term = "%" . $search_query . "%";
            $stmt->bind_param("s", $search_term);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result) {
                // Fetch the results and display them in the table
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['price']}</td>
                        <td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Class Image' style='width:100px; height:auto;'/></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>No results found.</td></tr>";
            }

            // Close connections
            $stmt->close();
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="staff.css">
</head>
<body style="background-image: url(Media/background\ image.jpg);background-size:cover;background-position: center center;">
    <a href="index.php" class="logo">Fitzone <span>Fitness </span>Center</a>

    <p style="color:#2980b9;font-weight: 900;font-size: 40px;">Elevate your fitness</p><br><br><br>
    <div class="container">
        <div class="login-form">
            <h1 style="text-align: center;font-weight:900;color: white;">Admin Login</h1>
            <form action="admin/admin-login.inc.php" method="post">
                <div style="text-align: center;">
                    <label for="email" style="font-size: 18px;text-align:left;color: white;">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Email"><br><br>
                    <label for="password" style="font-size: 18px;text-align:left;color: white;">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <p style="font-weight: bolder;font-size: 18px;color: white;">Forget Password?</p>
                    <center>
                        <button name="submit" type="submit" class="button">LOGIN</button>
                    </center>
                </div>
            </form>

            <p style="font-weight: bolder;color: white;">Don't have an account? &nbsp;<a href="createAccount.php" style="color:black;font-weight: bold;color: white;">Sign Up</a></p>
            
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == 'emptyinput') {
                    echo '<div class="error">Fill in all fields</div>';
                } else if ($_GET["error"] == 'invaliduid') {
                    echo '<div class="error" style="color: red;">Invalid Username</div>';
                } else if ($_GET["error"] == 'invalidemail') {  // Corrected typo here
                    echo '<div class="error" style="color: red;">Invalid Email</div>';
                } else if ($_GET["error"] == 'invalidcredentials') {
                    echo '<div class="error" style="color: red;">Invalid Credentials</div>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

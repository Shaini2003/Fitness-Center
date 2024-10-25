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

    <p style="color:#2980b9;font-weight: 900;font-size: 40px;">Elevate your fitness</p><br><br><br><br>
    <div class="container">
        <div class="login-form">

            <h1 style="text-align: center;font-weight:900;color: white;"><img src="Media/search.png" width="40px">&nbsp;SignIn with Google</h1>

            <form action="includes/login.inc.php" method="post">
                <div style="text-align: center;">
                    <label for="email" style="font-size: 18px;text-align:left;color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Email"><br><br>
                    <label for="password" style="font-size: 18px;text-align:left;color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <center>
                        <a href="staff-login.php" class="button" style="background-color: black;"><img src="Media/search.png" width="20px">&nbsp;SIGN IN</a>
                    </center>
                </div>
                </center>
            </form>

            <p style="font-weight: bolder;color: white;">Don't have an account? &nbsp;<a href="createAccount.php" style="color:black;font-weight: bold;color: white;">Sign Up</a></p>
        </div>
    </div>


</body>

</html>
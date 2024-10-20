<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>

<body style="background-image: url(Media/background.jpeg);background-size:cover;background-position: center center;">
    <a href="index.php" class="logo">Fitzone <span>Fitness </span>Center</a>

    <p style="color:#2980b9;font-weight: 900;font-size: 40px;">Elevate your fitness</p><br><br><br><br>
    <div class="container">
        <div class="login-form">

            <h1 style="text-align: center;font-weight:900;">Login</h1>

            <form action="includes/login.inc.php" method="post">
                <div style="text-align: center;">
                    <label for="email"
                        style="font-size: 18px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email
                        Address:</label>
                    <input type="email" id="email" name="email" placeholder="Email"><br><br>
                    <label for="password"
                        style="font-size: 18px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <center>   <p style="font-weight: bolder;font-size: 18px;">Forget Password?</p>
                   
                        <a href="admin.php" class="staff">Continue as Admin</a>
                        <a href="staff.php" class="staff">Continue as a Staff Member</a>
                        <a href="#" class="staff">Login with Google</a>
                        <a href="" class="button">LOGIN</a></center>
                </div>
            </form>
        
        <p style="font-weight: bolder;">Don't have an account? &nbsp;<a href="createAccount.php"
                style="color:black;font-weight: bold;">Sign Up</a></p>
    </div>
</div>


</body>

</html>
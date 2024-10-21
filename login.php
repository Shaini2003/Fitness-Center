<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>

<body style="background-image: url(Media/background\ image.jpg);background-size:cover;background-position: center center;">
    <a href="index.php" class="logo">Fitzone <span>Fitness </span>Center</a>

    <p style="color:white;font-weight: 700;font-size: 40px;">Elevate your fitness</p>
    <div class="container">
        <div class="login-form">

            <h1 style="text-align: center;font-weight:900;color: #2980b9;">User Login</h1>

            <form action="includes/login.inc.php" method="post">
                <div style="text-align: center;">
                    <label for="email"
                        style="font-size: 20px;text-align:left;font-weight: 700;color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email
                        Address:</label>
                    <input type="email" id="email" name="email" placeholder="Email"><br><br>
                    <label for="password"
                        style="font-size: 20px;text-align:left;font-weight: 700;color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <center>   <p style="font-weight: bolder;font-size: 18px;color: white;">Forget Password?</p>
                   
                        <a href="admin.php" class="staff">Continue as Admin</a>
                        <a href="staff.php" class="staff">Continue as a Staff Member</a>
                        <a href="#" class="staff">Login with Google</a>
                        <button name="submit" type="submit"class="button">LOGIN</button></center>
                </div>
            </form>
            <?php
          if(isset($_GET["error"])){
            if($_GET["error"] == 'emptyinput'){
                echo '<div class="error">Fill in the all fields</div>';
            } else if($_GET["error"] == 'invaliduid'){
                echo '<div class="error">Invalid Usename</div>';
            } 
            else if($_GET["error"] == 'invaliemail'){
                echo '<div class="error">Invalid Email</div>';
            } 
            else if($_GET["error"] == 'passworddontmatch'){
                echo '<div class="error">Password not matching</div>';
            } 
            else if($_GET["error"] == 'stmtfailed'){
                echo '<div class="error">Something Went Wrong</div>';
            } 
            else if($_GET["error"] == 'none'){
                echo '<div class="error">Account Created</div>';
            } 
          }
          ?>
        <p style="font-weight: 700;color: white;">Don't have an account? &nbsp;<a href="createAccount.php"
                style="color:white;font-weight: bold;">Sign Up</a></p>
    </div>
</div>


</body>

</html>
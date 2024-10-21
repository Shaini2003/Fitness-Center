<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body style="background-image: url(Media/background.jpeg);background-size: cover;background-position: center center;">
    <a href="index.php" class="logo">Fitzone <span>Fitness </span>Center</a>
    <p style="color:#2980b9;font-weight: 700;font-size: 40px;margin-top: 1px;text-align: center;">Become a member</p>
    <div class="container">
        <div class="login-form">

            <h1 style="text-align: center;font-weight:700;">Create a Account</h1>
            <form action="includes/signup.inc.php" method="post">
                <label for="name" style="font-size: 18px;text-align: left;">Name:</label><select style="width: 10%;
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 10px;">
                    <option>Mr.</option>
                    <option>Ms.</option>
                    <option>Mrs.</option>
                </select>
                <input type="text" id="name" name="name" placeholder="Name">
                <label for="phone" style="font-size: 18px;text-align: left;">Phone Number:</label>
                <input type="tel" id="phone" name="phone" style="width: 90%;" placeholder="Phone Number">
                <label for="email" style="font-size: 18px;text-align: left;">Email:</label>
                <input type="email" id="email" name="email" style="width: 90%;" placeholder="Email">
                <label for="password" style="font-size: 18px;text-align: left;">Password:</label>
                <input type="password" id="password" name="password" style="width: 90%;" placeholder="Password">
                <label for="confirm-password" style="font-size: 18px;text-align: left;">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" style="width: 90%;" placeholder="Repeat Password">
                <label for="type" style="font-size: 18px;text-align: left;">User Type:</label>
                <input type="text" id="type" name="type" placeholder="User Type">
                <center>
                    <button name="submit" type="submit" style="color: white;" class="button">Register</button>
                    <p style="font-weight: bolder;">Already have an account? &nbsp;<a href="Login.php" style="color:black;font-weight: bold; text-decoration: none;">Login</a></p>

                </center>


            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == 'emptyinput') {
                    echo '<div class="error">Fill in the all fields</div>';
                } else if ($_GET["error"] == 'invaliduid') {
                    echo '<div class="error" style=" color: red;border: 1px solid red;padding: 12px;font-size: 22px;margin-bottom: 10px;">Invalid Usename</div>';
                } else if ($_GET["error"] == 'invaliemail') {
                    echo '<div class="error"style="color: red;border: 1px solid red;padding: 12px;font-size: 22px;margin-bottom: 10px;">Invalid Email</div>';
                } else if ($_GET["error"] == 'passworddontmatch') {
                    echo '<div class="error"style="color: red;border: 1px solid red;padding: 12px;font-size: 22px;margin-bottom: 10px;">Password not matching</div>';
                } else if ($_GET["error"] == 'stmtfailed') {
                    echo '<div class="error"style="color: red;border: 1px solid red;padding: 12px;font-size: 22px;margin-bottom: 10px;">Something Went Wrong</div>';
                } else if ($_GET["error"] == 'none') {
                    echo '<div class="error"style="color: red;border: 1px solid red;padding: 12px;font-size: 22px;margin-bottom: 10px;">Account Created</div>';
                }
            }
            ?>

        </div>
    </div>

</body>

</html>
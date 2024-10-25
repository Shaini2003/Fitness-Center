<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Define your credentials
    $valid_email = "shinitharushika2020@gmail.com";
    $valid_password = "shaini2003@";
    $username = "Shaini Tharushika"; // User's name

    // Validate the credentials
    if (empty($email) || empty($password)) {
        header("Location: ../index.php?error=emptyinput");
        exit();
    } elseif ($email !== $valid_email) {
        header("Location: ../index.php?error=invalidemail");
        exit();
    } elseif ($password !== $valid_password) {
        header("Location: ../index.php?error=invalidcredentials");
        exit();
    } else {
        // If credentials are correct, store the username in the session
        $_SESSION['username'] = $username;
        // Redirect to home.php
        header("Location: ../admin/home.php");
        exit();
    }
}
?>

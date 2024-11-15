<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="348151458747-2lll62ao2im3chloi122v9pn187dgl2e.apps.googleusercontent.com">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" rel="google.css">
</head>

<body><center>
  <h2 class="alert alert-primary">Sign in with Google</h2>
  <div class="g-signin2" data-onsuccess="onSignIn"></div>
  <div class="data">
    <p>Name</p>
    <p id="name" class="alert alert-success"></p>
    <p>Profile Pic</p>
    <img id="image" class="rounded-circle" width="100" height="100" />
    <p>Email</p>
    <p id="email"></p>
    <button type="button" class="btn btn-danger" onclick="signOut();">Sign Out</button>
  </div>

    <script src="google.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</center>
</body>

</html>
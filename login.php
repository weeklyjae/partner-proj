<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Nova Vista SHS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles-login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
</head>
<body>
    <div class="d-flex main">
        <div class="img">
            <img src="img/logo text2 transparent.png" alt="">
        </div>
        <div class="login">
            <div class="container">
                <div class="row my-2">
                    <img src="img/logo text1 transparent.png" alt="">
                </div>
                <div class="row">
                    <h3>Log in to your account</h3>
                </div>
                <div class="input-box">
                    <div class="input-field p-0">
                        <input type="text" class="input form-control" id="username" required autocomplete="off">
                        <label for="email">Username</label>
                    </div>
                    <div class="input-field p-0">
                        <input type="password" class="input form-control" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="check p-0 my-3">
                        <input type="checkbox" class="input form-check-label" id="rememberme">
                        <label for="rememberme">Remember me</label>
                    </div>
                    <div class="submit my-3">
                        <input type="submit" class="submit btn btn-success" value="Log in">
                    </div>
                    <div class="signup my-4">
                        <p>Don’t have an account yet?
                            <a href="registration.php" style="color: black;">Create one now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php



?>
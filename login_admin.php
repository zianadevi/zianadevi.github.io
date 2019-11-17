<?php
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: khususadmin.php");
    exit;
  }

require 'function.php';

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {

            //set session
            $_SESSION["login"] = true;

            header("Location: khususadmin.php");
            exit;
        }

    }
    $error = true;
  }
?>


<!doctype html>
<html lang="en">
  <head>
      
    </header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>LOG IN ADMIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form method="post" action="" class="form-signin">
        <img class="mb-4" src="images/LOGO.png" alt="" width="200" height="80">
        <h1 class="h3 mb-3 font-weight-normal">LOG IN</h1>
        <?php if( isset($error) ) : ?>
                <p style="color: blue; font-style: italic;">Username atau Password Salah</p>
        <?php endif; ?>
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
    
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
        <p> Or </p>
        <button class="btn smoothscroll btn-primary mr-2 mb-2" type="submit" name="login">Sign in</button>
        
        </form>
</body>
</html>
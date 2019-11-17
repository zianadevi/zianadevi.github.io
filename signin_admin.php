<?php
require 'function.php';

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["signin"]) ) {
    //cek apakah User berhasil ditambahkan atau tidak
    if( signin($_POST) > 0 ) {
        echo "
            <script> 
                alert('Admin Berhasil Ditambahkan!');
                document.location.href = 'login_admin.php';
            </script>
            ";
    } else {
      echo mysqli_error($conn);
    }
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
    <title>SIGN IN ADMIN</title>

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
        <h1 class="h3 mb-3 font-weight-normal">SIGN IN</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label for="password2" class="sr-only">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2" class="form-control" placeholder="Konfirmasi Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
        
        </form>
</body>
</html>
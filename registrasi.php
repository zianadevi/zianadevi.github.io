<?php
session_start();

if( isset($_SESSION["registrasi"]) ) {
    header("Location: konsultasi.php");
    exit;
  }
require 'function.php';

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["registrasi"]) ) {
    //cek apakah User berhasil ditambahkan atau tidak
    if( registrasi($_POST) > 0 ) {
        echo "
            <script> 
                alert('User Berhasil Ditambahkan!');
                document.location.href = 'konsultasi.php';
            </script>
            ";
            $_SESSION["registrasi"] = true;
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
    <title>DATA USER</title>

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
        <h1 class="h3 mb-3 font-weight-normal">Data Diri</h1>
        <label for="nama" class="sr-only">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required autofocus>
        <label for="jenis_kelamin" class="sr-only">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" required autofocus>
        <label for="umur" class="sr-only">Umur</label>
        <input type="text" name="umur" id="umur" class="form-control" placeholder="Umur" required autofocus>
        
        
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="registrasi">Registrasi</button>
        
        </form>
</body>
</html>
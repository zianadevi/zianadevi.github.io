<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["tambah"]) ) {
    //cek apakah User berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script> 
                alert('Gejala Berhasil Ditambahkan!');
                document.location.href = 'khususadmin.php';
            </script>
            ";
    } else {
        echo "
            <script> 
                alert('Gejala Gagal Ditambahkan!');
                document.location.href = 'khususadmin.php';
            </script>
            ";
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
    <title>Tambah</title>

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
        <h1 class="h3 mb-3 font-weight-normal">Tambah Data Gejala</h1>
        <label for="id_gejala" class="sr-only">ID</label>
        <input type="text" name="id_gejala" id="id_gejala" class="form-control" placeholder="ID" required autofocus>
        <label for="gejala" class="sr-only">Gejala</label>
        <input type="text" name="gejala" id="gejala" class="form-control" placeholder="Gejala" required autofocus>
        <label for="ifyes" class="sr-only">Jika Ya</label>
        <input type="text" name="ifyes" id="ifyes" class="form-control" placeholder="Jika Ya" required autofocus>
        <label for="ifno" class="sr-only">Jika Tidak</label>
        <input type="text" name="ifno" id="ifno" class="form-control" placeholder="Jika Tidak" required autofocus>
        
        </div><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="tambah">Tambah Gejala</button>
        
        </form>
</body>
</html>
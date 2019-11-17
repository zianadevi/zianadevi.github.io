<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["tambahdiag"]) ) {
    //cek apakah User berhasil ditambahkan atau tidak
    if( tambahdiag($_POST) > 0 ) {
        echo "
            <script> 
                alert('Diagnosa Berhasil Ditambahkan!');
                document.location.href = 'khususadmin.php';
            </script>
            ";
    } else {
        echo "
            <script> 
                alert('Diagnosa Gagal Ditambahkan!');
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
        <h1 class="h3 mb-3 font-weight-normal">Tambah Data Diagnosa</h1>
        <label for="id_penyakit" class="sr-only">ID</label>
        <input type="text" name="id_penyakit" id="id_penyakit" class="form-control" placeholder="ID" required autofocus>
        <label for="penyakit" class="sr-only">Diagnosa</label>
        <input type="text" name="penyakit" id="penyakit" class="form-control" placeholder="Diagnosa" required autofocus>
        <label for="keterangan" class="sr-only">Keterangan</label>
        <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" required autofocus>
        <label for="solusi" class="sr-only">Solusi</label>
        <input type="text" name="solusi" id="solusi" class="form-control" placeholder="Solusi" required autofocus>
        
        </div><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="tambahdiag">Tambah Diagnosa</button>
        
        </form>
</body>
</html>
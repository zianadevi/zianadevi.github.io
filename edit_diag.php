<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';

$id_penyakit = $_GET["id_penyakit"];

$penyakit = query("SELECT * FROM penyakit WHERE id_penyakit = '$id_penyakit'")[0];

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["edit"]) ) {
    //cek apakah User berhasil ditambahkan atau tidak
    if( editdiag($_POST) > 0 ) {
        echo "
            <script> 
                alert('Diagnosa Berhasil Diubah!');
                document.location.href = 'khususadmin.php';
            </script>
            ";
    } else {
        echo "
            <script> 
                alert('Diagnosa Gagal Diubah!');
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
    <title>Edit Diagnosa</title>

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
        <h1 class="h3 mb-3 font-weight-normal">Ubah Data Diagnosa</h1>
        <input type="hidden" name="id_penyakit" value="<?= $penyakit["id_penyakit"]; ?>">
        <li>
          <label for="penyakit" >Diagnosa : </label>
          <input type="text" name="penyakit" id="penyakit" value="<?= $penyakit["penyakit"]; ?>">
        </li>
        <li>
          <label for="keterangan" >Keterangan : </label>
          <input type="text" name="keterangan" id="keterangan" value="<?= $penyakit["keterangan"]; ?>">
        </li>
        <li>
          <label for="solusi" >Solusi : </label>
          <input type="text" name="solusi" id="solusi" value="<?= $penyakit["solusi"]; ?>">
        </li>

        <br>
        </div>
        <button class="btn smoothscroll btn-primary mr-2 mb-2" type="submit" name="edit">Edit Diagnosa</button>
        </form>
</body>
</html>
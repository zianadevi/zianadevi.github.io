<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';

$nama = $_GET["nama"];

if( hapushasil($nama) > 0 ) {
    echo "
    <script> 
        alert('Data Berhasil Dihapus!');
        document.location.href = 'khususadmin.php';
    </script>
    ";
} else {
    echo "
        <script> 
            alert('Data Gagal Dihapus!');
            document.location.href = 'khususadmin.php';
       </script>
        ";
}

?>
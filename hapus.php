<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';

$id_gejala = $_GET["id_gejala"];

if( hapus($id_gejala) > 0 ) {
    echo "
    <script> 
        alert('Gejala Berhasil Dihapus!');
        document.location.href = 'khususadmin.php';
    </script>
    ";
} else {
    echo "
        <script> 
            alert('Gejala Gagal Dihapus!');
            document.location.href = 'khususadmin.php';
       </script>
        ";
}

?>
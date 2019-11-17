<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';

$pesan = $_GET["pesan"];

if( hapuspesan($pesan) > 0 ) {
    echo "
    <script> 
        alert('Pesan Berhasil Dihapus!');
        document.location.href = 'khususadmin.php';
    </script>
    ";
} else {
    echo "
        <script> 
            alert('Pesan Gagal Dihapus!');
            document.location.href = 'khususadmin.php';
       </script>
        ";
}

?>
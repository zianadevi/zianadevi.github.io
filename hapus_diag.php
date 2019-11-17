<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';

$id_penyakit = $_GET["id_penyakit"];

if( hapusdiag($id_penyakit) > 0 ) {
    echo "
    <script> 
        alert('Diagnosa Berhasil Dihapus!');
        document.location.href = 'khususadmin.php';
    </script>
    ";
} else {
    echo "
        <script> 
            alert('Diagnosa Gagal Dihapus!');
            document.location.href = 'khususadmin.php';
       </script>
        ";
}

?>
<?php
session_start();

if( !isset($_SESSION["registrasi"]) ) {
  header("Location: registrasi.php");
  exit;
}
$conn = mysqli_connect("localhost", "root", "", "dbpsytest");

$query = mysqli_query( $conn, "SELECT * FROM users ORDER BY id_user DESC LIMIT 1");
$row_query = mysqli_fetch_array($query);

$hasil = mysqli_query( $conn, "SELECT * FROM penyakit WHERE id_penyakit='A04'");
$row_hasil = mysqli_fetch_array($hasil);

$kd_user = $row_query['id_user'];
$kd_penyakit = $row_hasil['id_penyakit'];
$hasil = $row_hasil['penyakit'];
$diag = "INSERT INTO hasil VALUES ('', '$kd_user', '$kd_penyakit', '$hasil')";
  mysqli_query($conn, $diag);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Hasil Konsultasi &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div class="site-section cta-big-image" id="konsultasi">
      <div class="container">
        <div class="row mb-1">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Sukses Konsultasi! </h2>
            <p>Data hasil konsultasi Anda</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-0 text-left">
          <div class="col-lg-11 ml-auto text-left">
            <div class="mb-0">
            </div>
            <form name="hasil" method="post" action="">
			
            <td>Nama : <?= $row_query['nama'] ?></td><br>
            <td>Jenis Kelamin : <?= $row_query['jenis_kelamin'] ?></td><br>
            <td>Umur : <?= $row_query['umur'] ?></td><br>
            <td>Tanggal : <?= $row_query['tanggal'] ?></td><br><br>
			
            <span class="title">Hasil Diagnosis : </span><hr>
			<span style="color:#000; font-weight:bold;"><?= $row_hasil['penyakit'] ?></span>
			<p>Social anxiety disorder atau fobia sosial adalah gangguan kesehatan mental yang ditandai dengan rasa takut akan diawasi, dihakimi, atau dipermalukan oleh orang lain.</p><br/>	
			<span class="title">Solusi :</span><hr> <p>Salah satu bentuk psikoterapi untuk mengatasi fobia sosial adalah terapi perilaku kognitif. Terapi perilaku kognitif berlangsung selama 12 minggu, Pemberian obat anticemas atau antiansietas benzodiazepine, obat antidepresan, seperti fluoxetine, Obat penghambat beta, bisoprolol.</p>
            <br>
            
			<div class="col-12 text-center">
			<div data-aos="fade" data-aos-delay="">
				<a href="index.php" class="btn smoothscroll btn-primary mr-2 mb-2" name="submit" onclick="return confirm('Apakah Anda yakin ingin keluar?')">SELESAI</a>
			</div>
			</div>
            <br><br>
            </form>
  
          </div>
        </div>
      </div>  
    </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  
    
  </body>
</html>
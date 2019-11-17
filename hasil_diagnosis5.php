<?php
session_start();

if( !isset($_SESSION["registrasi"]) ) {
  header("Location: registrasi.php");
  exit;
}
$conn = mysqli_connect("localhost", "root", "", "dbpsytest");

$query = mysqli_query( $conn, "SELECT * FROM users ORDER BY id_user DESC LIMIT 1");
$row_query = mysqli_fetch_array($query);

$hasil = mysqli_query( $conn, "SELECT * FROM penyakit WHERE id_penyakit='A05'");
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
			<p>Gangguan panik dengan Agoraphobia adalah salah satu jenis gangguan cemas pada manusia, di mana penderitanya merasa ketakutan tiba-tiba yang mencapai puncaknya dalam beberapa menit dan memicu gejala fisik yang intensif dimana penderita mungkin berpikir bahwa benar-benar dapat kehilangan kendali. Penderita juga cenderung menghindari tempat atau situasi yang menimbulkan rasa panik dan membuatnya malu, terjebak, atau tidak berdaya.</p><br/>	
			<span class="title">Solusi :</span><hr> <p>Umumnya pengobatan jangka pendek, terapi perilaku kognitif berfokus pada pengajaran keterampilan khusus untuk secara bertahap kembali ke aktivitas yang pernah Anda dihindari karena kecemasan. Beberapa langkah pengobatan yang dapat dilakukan untuk mengatasi agoraphobia adalah dengan Psikoterapi, Penderita akan dibantu oleh psikolog atau psikiater untuk belajar mengurangi gejala-gejala kecemasan. Konsumsi obat-obatan, obat antidepresan atau obat antiansietas untuk meredakan gejala kecemasan. Jika Anda menderita agoraphobia, berlatihlah untuk mengatasi dan mengendalikan rasa takut akan suatu tempat. Ajaklah anggota keluarga atau teman untuk pergi bersama ke tempat yang ditakuti.</p>
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
<?php
session_start();

if( !isset($_SESSION["registrasi"]) ) {
  header("Location: registrasi.php");
  exit;
}

require 'function.php';
//pagination
//konfigurasi
$jumlahDataPerHalaman = 1;
$jumlahData = count(query("SELECT * FROM gejala"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;


$gejala = query("SELECT * FROM gejala LIMIT $awalData, $jumlahDataPerHalaman");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Konsultasi &mdash;</title>
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
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  

  <div class="site-section cta-big-image" id="konsultasi">
      <div class="container">
        <div class="row mb-1">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Konsultasi</h2>
            <p>Silahkan menjawab semua pertanyaan dibawah ini !</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-0 text-left">
          <div class="col-lg-11 ml-auto text-left">
            <div class="mb-0">
            </div>
            <form name="gejala" method="post" action="hasil_diagnosis.php">
            
            <?php foreach( $gejala as $row ) : ?>
                <tr>
                    
                    <td><?= $row["gejala"]; ?></td> 
                    <br>
                    <i>
                      <?php
                        //<li><input name="ifyes" id="ifyes" type="radio" >Ya</li>
                        //<li><input name="ifno" id="ifno" type="radio" >Tidak</li>
                      ?>
                    </i>
                    <br><br><br><br>
                    <!-- navigasi -->
                    
                    <?php if( $halamanAktif == 1 ) : ?>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="hasil_diagnosissehat.php" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 2 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 3 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 4 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 5 ) : ?>
                      <a href="hasil_diagnosis1.php" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 6 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 7 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 8 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 9 ) : ?>
                      <a href="hasil_diagnosis2.php" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 10 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 11 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 12 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 13 ) : ?>
                      <a href="hasil_diagnosis3.php" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 14 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 15 ) : ?>
                      <a href="hasil_diagnosis4.php" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 16 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 17 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 18 ) : ?>
                      <a href="hasil_diagnosis6.php" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 19 ) : ?>
                      <a href="hasil_diagnosis5.php" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 20 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 21 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 22 ) : ?>
                      <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 2; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                    <?php if( $halamanAktif == 23 ) : ?>
                      <a href="hasil_diagnosis7.php" class="btn smoothscroll btn-primary mr-2 mb-2">YA</a>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn smoothscroll btn-primary mr-2 mb-2">TIDAK</a>
                    <?php endif; ?>

                </tr>
            <?php endforeach; ?>
            </form>
  
          </div>
        </div>
      </div>  
    </div>

  <?php if( $halamanAktif > 23 ) : ?>
    <div class="col-12 text-center">
      <div data-aos="fade" data-aos-delay="">
        <a href="hasil_diagnosis.php" class="btn smoothscroll btn-primary mr-2 mb-2" name="submit" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">SUBMIT</a>
      </div>
    </div>
  <?php endif; ?>
  

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
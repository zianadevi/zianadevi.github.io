<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login_admin.php");
  exit;
}
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "dbpsytest");

$query = mysqli_query($conn, "SELECT * FROM gejala");

$penyakit = mysqli_query($conn, "SELECT * FROM penyakit");

$result = mysqli_query( $conn, "SELECT users.nama, users.jenis_kelamin, users.umur, users.tanggal, hasil.hasil FROM users INNER JOIN hasil ON id_user=kd_user");


$pesan = mysqli_query( $conn, "SELECT * FROM kontak");

//if( isset($_POST["cari"]) ) {
    //$penyakit = cari($_POST["keyword"]);
    //$result = cari($_POST["keyword"]);
    //$query = cari($_POST["keyword"]);
    //$pesan = cari($_POST["keyword"]);
//}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Admin &mdash;</title>
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
  

  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

<div class="container">
  <div class="row align-items-center">
    
    <div class="col-6 col-xl-2">
      <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">PSYTEST</a></h1>
    </div>

    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
          <li><a href="index.php" class="nav-link">Home</a></li>
          <li><a href="#gejala-section" class="nav-link">Gejala</a></li>
          <li><a href="#diagnosis-section" class="nav-link">Diagnosa</a></li>
          <li><a href="#hasil-section" class="nav-link">Hasil</a></li>
          <li><a href="#contact-section" class="nav-link">Pesan</a></li>
          <form action="" method="post">
                
          </form>
        </ul>
      </nav>
    </div>


    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

  </div>
</div>

</header>
    

  <div class="site-section cta-big-image" id="gejala-section">
      <div class="container">
        <div class="row mb-1">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Daftar Gejala</h2>
            <div data-aos="fade" data-aos-delay="">
            </div>
                <div>
                    <table border="1" cellpading="10" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Gejala</th>
                        <th>Jika Ya</th>
                        <th>Jika Tidak</th>
                        <th>Aksi</th>
                    </tr>

                    <?php while( $row = mysqli_fetch_assoc($query) ) : ?>
                    <tr>
                        <td><?= $row["id_gejala"]; ?></td>
                        <td><?= $row["gejala"]; ?></td>
                        <td><?= $row["ifyes"]; ?></td>
                        <td><?= $row["ifno"]; ?></td>
                        <td>
                            <a href="edit.php?id_gejala=<?= $row["id_gejala"]; ?>">Edit</a>
                            <a href="hapus.php?id_gejala=<?= $row["id_gejala"]; ?>" onclick = "return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    </table>
                </div>
          </div>
        </div>
        <br>
        <a href="tambah.php" class="btn smoothscroll btn-primary mr-2 mb-2">Tambah</a>
      </div>  
    </div>


    <div class="site-section cta-big-image" id="diagnosis-section">
      <div class="container">
        <div class="row mb-1">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Daftar Diagnosa</h2>
            <div data-aos="fade" data-aos-delay="">
            </div>
                <div>
                    <table border="1" cellpading="10" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Diagnosa</th>
                        <th>Keterangan</th>
                        <th>Solusi</th>
                        <th>Aksi</th>
                    </tr>

                    <?php while( $row = mysqli_fetch_assoc($penyakit) ) : ?>
                    <tr>
                        <td><?= $row["id_penyakit"]; ?></td>
                        <td><?= $row["penyakit"]; ?></td>
                        <td><?= $row["keterangan"]; ?></td>
                        <td><?= $row["solusi"]; ?></td>
                        <td>
                            <a href="edit_diag.php?id_penyakit=<?= $row["id_penyakit"]; ?>">Edit</a>
                            <a href="hapus_diag.php?id_penyakit=<?= $row["id_penyakit"]; ?>" onclick = "return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    </table>
                </div>
          </div>
        </div>
        <br>
        <a href="tambah_diag.php" class="btn smoothscroll btn-primary mr-2 mb-2">Tambah</a>
      </div>  
    </div>

    <div class="site-section cta-big-image" id="hasil-section">
      <div class="container">
        <div class="row mb-1">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Hasil Diagnosa</h2>
            <div data-aos="fade" data-aos-delay="">
            </div>
                <div>
                    <table border="1" cellpading="10" cellspacing="0">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Tanggal</th>
                        <th>Hasil</th>
                        <th>Aksi</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php while( $row_query = mysqli_fetch_assoc($result) ) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row_query['nama']; ?></td>
                        <td><?= $row_query['jenis_kelamin']; ?></td>
                        <td><?= $row_query['umur']; ?></td>
                        <td><?= $row_query['tanggal']; ?></td>
                        <td><?= $row_query['hasil']; ?></td>
                        <td>
                            <a href="hapus_hasil.php?nama=<?= $row_query["nama"]; ?>" onclick = "return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endwhile; ?>
                    </table>
                </div>
          </div>
        </div>
        <br>
      </div>  
    </div>


    <div class="site-section cta-big-image" id="contact-section">
      <div class="container">
        <div class="row mb-1">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Pesan</h2>
            <div data-aos="fade" data-aos-delay="">
            </div>
                <div>
                    <table border="1" cellpading="10" cellspacing="0">
                    <tr>
                        <th>No.</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php while( $row_pesan = mysqli_fetch_assoc($pesan) ) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row_pesan['fname']; ?></td>
                        <td><?= $row_pesan['lname']; ?></td>
                        <td><?= $row_pesan['email']; ?></td>
                        <td><?= $row_pesan['subject']; ?></td>
                        <td><?= $row_pesan['pesan']; ?></td>
                        <td>
                            <a href="hapus_pesan.php?pesan=<?= $row_pesan["pesan"]; ?>" onclick = "return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endwhile; ?>
                    </table>
                </div>
          </div>
        </div>
        <br>
      </div>  
    </div>


  </div> <!-- .site-wrap -->

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
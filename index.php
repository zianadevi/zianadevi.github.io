<?php
//session_start();

//if( !isset($_SESSION["login"]) ) {
//  header("Location: login_admin.php");
//  exit;
//}
require 'function.php';

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["kirim"]) ) {
  
  if( kontak($_POST) > 0 ) {
      echo "
          <script> 
              alert('Pesan Berhasil Dikirim!');
              document.location.href = 'index.php';
          </script>
          ";
  } else {
    echo mysqli_error($conn);
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Psytest &mdash;</title>
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
            <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">PSYTEST</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li>
                  <a href="#about-section" class="nav-link">About Us</a>
                </li>
                <li><a href="#diagnosa-section" class="nav-link">Diagnosa</a></li>
                <li><a href="#contact-section" class="nav-link">Contac Us</a></li>
                <li><a href="#petunjuk-section" class="nav-link">Konsultasi</a></li>
                <li><a href="login_admin.php" class="nav-link">Login Admin</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/happy_img.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase mb-5" data-aos="fade-up">WELCOME TO PSYTEST</h1>
            
            <div data-aos="fade-up" data-aos-delay="100">
              <a href="#about-section" class="btn smoothscroll btn-primary mr-2 mb-2">What is PSYTEST?</a>
            </div>
          </div>
            
        </div>
      </div>

    
    </div>  

    <a href="#about-section" class="mouse smoothscroll">
      <span class="mouse-icon">
        <span class="mouse-wheel"></span>
      </span>
    </a>
  </div>  

  
  <div class="site-section cta-big-image" id="about-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="section-title mb-3">About PSYTEST</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
          <figure class="circle-bg">
          <img src="images/shutterstock_282943754-760x475@2x.jpg" alt="Image" class="img-fluid">
          </figure>
        </div>
        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <div class="mb-4">
            <h3 class="h3 mb-4 text-black">LET'S TALK ABOUT MENTAL HEALTH</h3>
            <p>PSYTEST Platform Diagnosis Gangguan Kecemasan (Anxiety Disorder) berbasis WEB untuk mendiagnosis dan membantu penderita gangguan kecemasan dalam memperoleh informasi mengenai gangguan kecemasan yang dialami.</p>
         </div>
          
          <p><a href="#diagnosa-section" class="smoothscroll btn btn-primary">LET'S GO</a></p>

        </div>
      </div>
    </div>  
  </div>


  <section class="site-section border-bottom bg-light" id="diagnosa-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Diagnosa</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Gangguan Obsesif Kompulsif</h3>
                <p>Kelainan psikologis yang memengaruhi pikiran dan perilaku penderitanya. Begitu seseorang memiliki penyakit OCD, pikiran dan rasa takut yang tidak diinginkan akan muncul secara terus menerus, menyebabkan penderita terobsesi pada sesuatu dan melakukan tindakan tertentu secara berulang-ulang sebagai respon terhadap ketakutannya.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Gangguan Kecemasan Umum</h3>
                <p>Rasa cemas atau khawatir yang berlebihan dan tak terkendali sehingga mengganggu aktivitas sehari-hari penderitanya. Kondisi jangka panjang ini bisa dialami oleh anak-anak maupun orang dewasa.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Fobia Spesifik</h3>
                <p>Jenis gangguan kecemasan yang ditandai oleh ketakutan yang berlebihan dan tidak rasional terhadap objek atau situasi tertentu.</p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Fobia Sosial</h3>
                <p>Gangguan kesehatan mental yang ditandai dengan rasa takut akan diawasi, dihakimi, atau dipermalukan oleh orang lain.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Gangguan Panik dengan Agorafobia</h3>
                <p>Salah satu jenis gangguan cemas pada manusia, di mana penderitanya merasa ketakutan tiba-tiba yang mencapai puncaknya dalam beberapa menit dan memicu gejala fisik yang intensif dimana penderita mungkin berpikir bahwa benar-benar dapat kehilangan kendali. Penderita juga cenderung menghindari tempat atau situasi yang menimbulkan rasa panik dan membuatnya malu, terjebak, atau tidak berdaya.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Gangguan Panik tanpa Agorafobia</h3>
                <p>Jenis gangguan kecemasan di mana Anda mengalami serangan ketakutan tiba-tiba yang mencapai puncaknya dalam beberapa menit dan memicu gejala fisik yang intensif. Anda mungkin berpikir bahwa Anda benar-benar dapat kehilangan kendali, mengalami serangan jantung atau bahkan kematian.</p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Agorafobia tanpa Gangguan Panik</h3>
                <p>Salah satu jenis gangguan cemas pada manusia, di mana penderitanya merasa ketakutan yang berlebih dan menghindari tempat atau situasi yang menimbulkan rasa panik dan membuatnya malu, terjebak, atau tidak berdaya.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
              <div>
                <h3>Gangguan Kecemasan Lain</h3>
                <p>Konsultasikan dengan ahli untuk keterangan lebih lanjut.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span>Departemen Teknik Elektro dan Teknologi Informasi, UGM</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#">+1 232 3235 324</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="#">psytest@gmail.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            

            <form action="#" method="post" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Depan</label>
                  <input type="text" name="fname" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nama Belakang</label>
                  <input type="text" name="lname" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" name="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="pesan">Pesan</label> 
                  <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control" placeholder="Tulis Pesan Anda disini..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="kirim">Kirim Pesan</button>
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </section>

    

    <div class="site-section cta-big-image" id="petunjuk-section">
      <div class="container">
        <div class="row mb-1">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">PETUNJUK</h2>
            <div data-aos="fade" data-aos-delay="">
            </div>
            <p>Dalam tes ini ada serangkaian pertanyaan yang menggambarkan keadaan anda saat ini</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-0 text-left" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-11 ml-auto text-left" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-0">
            </div>  
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Bacalah tiap pernyataan dengan cermat, kemudian pilihlah pernyataan yang paling mencerminkan keadaan diri anda dan apa yang anda rasakan akhir-akhir ini.</li>
                <li>Pada setiap nomor, ada beberapa alternatif pernyataan dan silahkan memilih pernyataan yang menurut anda paling mencermikan kondisi anda sekarang.</li>
                <li>Pilih dengan memberikan tanda centang pada alternatif pernyataan yang anda pilih:</li>
                <li>PERHATIAN : Tidak ada benar atau salah. Semua pertanyaan adalah refleksi dari diri anda, semakin sesuai dengan kondisi anda, maka akan semakin lengkap gambaran diri anda untuk penanganan lebih lanjut. Kondisi psikologis Anda dapat berubah sesuai dengan kejadian/peristiwa yang sedang Anda alami saat melakukan tes.</li>
                <li>PERHATIAN : Pastikan untuk selalu melakukan tes ulang, ketika Anda sudah merasakan adanya perubahan terhadap situasi dan kondisi psikologis Anda.</li>
                <li>PERHATIAN : Hasil akhir yang didapat adalah bersifat RAHASIA, hanya antara anda (testee) dengan Psikolog.</li>
              </ul>
              <div class="col-12 text-center" data-aos="fade"></div>
              <a href="registrasi.php" class="btn smoothscroll btn-primary mr-2 mb-2">LANJUT</a>
              </div> 
            </div> 
          </div>
        </div>
      </div>  
    </div>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>PSYTEST Platform Diagnosis Gangguan Kecemasan (Anxiety Disorder) berbasis WEB untuk mendiagnosis dan membantu penderita gangguan kecemasan dalam memperoleh informasi mengenai gangguan kecemasan yang dialami.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Psytest Team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

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
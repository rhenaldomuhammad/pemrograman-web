<?php
include_once 'koneksi.php';
$query = "SELECT * FROM services";
$run = mysqli_query($conn, $query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rhenxyz - Services</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Rhenxyz</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
          <li><a class="nav-link" href="index.php#home">Home</a></li>
          </li>
          <li class="nav-item">
          <li><a class="nav-link" href="about.php#about">About</a></li>
          </li>
          <li class="nav-item">
          <li><a class="nav-link" href="services.php#services">Services</a></li>
          </li>
          <li class="nav-item">
          <li><a class="nav-link" href="gallery.php#gallery">Gallery</a></li>
          </li>
          <li class="nav-item">
          <li><a class="nav-link" href="contact.php#contact">Contact</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  
  <!--/ Intro Skew End /-->

  

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
                Flexible and Scalable Network Services.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php
                    if (mysqli_num_rows($run) > 0) {
                        while ($user_data = mysqli_fetch_array($run)) {


                    ?>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="<?=$user_data['logo']?>"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?=$user_data['project']?></h2>
              <p class="s-description text-center">
              <?=$user_data['desk']?>
              </p>
            </div>
          </div>
        </div>
        <?php }
        }?>
        <!-- <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-cloud"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Cloud Computing</h2>
              <p class="s-description text-center">
                The goal of cloud computing is to allow users to take benefit from all of these technologies, without the need for deep knowledge 
                about or expertise with each one of them. 
                The cloud aims to cut costs and helps the users focus on their core business instead of being impeded by IT obstacles..
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-steam"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Network Optimization</h2>
              <p class="s-description text-center">
                Gain a faster, more efficient 
                network with greater performance insight and visibility to provide network users with seamless and reliable experiences.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-ios-briefcase"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">IT Consultant</h2>
              <p class="s-description text-center">
                Undertaking short-term or long-term projects to address a variety of issues and needs. 
                Meeting with management or appropriate staff to understand their requirements.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">IT Support</h2>
              <p class="s-description text-center">
                Install and configure software and computer systems. Troubleshoot and resolve issues with software or hardware. 
                Walk colleagues or clients through steps to help them resolve their technical problems. 
                Maintain procedures and reports that provide technical support to the entire organization..
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-chatbubbles"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Business Communication System</h2>
              <p class="s-description text-center">
                Foster greater teamwork and improve communication 
                by utilizing advanced collaboration tools and technology to easily share data anytime from anywhere.
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->


  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

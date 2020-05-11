<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include ("Conexion/Conexion.php");
  session_start();
  if (isset($_SESSION['usuario'])) {
    //echo "SI EXISTE USUARIO";
    //session_destroy();
  }else{
    //echo "NO EXISTE USUARIO";

  }
   ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lumia Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v2.0.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1><a href="index.html">COVID19</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#queBuscamos">Que buscamos?</a></li>
          <li><a href="#portfolio">Informacion COVID19</a></li>
          <li><a href="#hitos">Hitos</a></li>
          <li><a href="#contact">Contacto</a></li>
      <?php
      if(isset($_SESSION['usuario'])){
        echo "<li><a href=\"#usuario\">".$_SESSION['usuario']."</a></li>";
      }
       ?>
     </ul>
     </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Beinvenido <span>
        <?php
            if(isset($_SESSION['usuario'])){
              echo $_SESSION["usuario"];
            }
         ?>
      </span></h1>
      <h2>A un espacio donde puedes compartir informacion e informarte sobre el COVID19</h2>
      <?php
        if(isset($_SESSION['usuario'])){
          echo "<form action=\"indexCovid.php\" method=\"post\">
                  <input class=\"btn btn-danger\" type=\"submit\" value=\"Cerrar Sesion\">
                </form>";
          //session_destroy();
        }else{
          echo "<form action=\"forms/login.php\" method=\"post\">
                  <input class=\"btn-get-started scrollto\" type=\"submit\" value=\"Iniciar Sesion\">
                </form>";
        }
       ?>
    </div>
  </section><!-- End Hero -->


<style>
  #publicidad{
    background-color: white;
    border: black 1px solid;
    position: fixed;
    top: 5;
    right: 4;
    z-index: 1;
  }
</style>

<div id="publicidad" class="col-lg-2">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

  <main id="main">

    <!-- ======= Seccion de publicidad ======= -->
<section id="infoPublicidad">
  <div class="container">
    <div class="section-title">
      <h2>Publicidad?</h2>
      <?php
        if(isset($_SESSION['usuario'])){
          echo "<form id=\"login-form\" class=\"form\" action=\"forms/anuncios/anuncioIndex.php\" method=\"post\">";
          echo "<button type=\"submit\" class=\"btn btn-primary\">Administrar Anuncios</button>";
          echo "</form>";
        }else{
          echo "<h3 class=\"text-center\">Anunciate con nosotros<h3>";
        }
       ?>
    </div>
  </div>
</section>


<div class="container">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>



    <!-- ======= What We Do Section ======= -->
    <section id="queBuscamos" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Que buscamos?</h2>
          <p>Ser un medio de informacion, y formar una comunidad que comparta informacion relevante sobre el COVID19</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Dashboard</a></h4>
              <p>Herramienta para analizar fuentes de datos mundiales por medio de filtros de datos y gráficas</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Proyectos Cunoc</a></h4>
              <p>Pagina de facebook donde se encuentra informacion relacionada a loa proyectos del CUNOC contra el covid19</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Ingenieria Cunoc</a></h4>
              <p>Pagina de Ingeniraia CUNOC</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->
    <!-- ======= Portfolio Section ======= -->

    <div class="container">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>

    <?php  ?>

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portafolio</h2>
          <p>Infografias con informacion relevante sobre el covid19</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-general">General</li>
              <li data-filter=".filter-terceraEdad">Tercera edad</li>
              <li data-filter=".filter-prevencion">Prevencion</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-general wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/general.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/general.jpg" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Informacion general</a></h4>
                <p>General</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-general wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/general1.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/general1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Informacion general</a></h4>
                <p>General</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-terceraEdad wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/ancianos.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/ancianos.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Tercera edad</a></h4>
                <p>Tercera Edad</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-terceraEdad wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/ancianos2.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/ancianos2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Tercera edad</a></h4>
                <p>Tercera Edad</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-terceraEdad wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/ancianos3.png" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/ancianos3.png" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Tercera edad</a></h4>
                <p>Tercera Edad</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-prevencion wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/prevencion.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/prevencion.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Sintomas</a></h4>
                <p>Prevencion</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-prevencion wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/prevencion1.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/prevencion1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Acciones para la Tos</a></h4>
                <p>Prevencion</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-prevencion wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/prevencion2.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/prevencion2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Limpieza de manos</a></h4>
                <p>Prevencion</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-prevencion wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/covid/prevencion3.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/covid/prevencion3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Limpieza de manos</a></h4>
                <p>Prevencion</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <div class="container">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>


    <!-- ============Seccion perfil =============-->
    <?php
      if(isset($_SESSION['usuario'])){
        echo "<section id=\"usuario\" class=\"about\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-lg-6\">
          <img src=\"assets/img/about.jpg\" class=\"img-fluid\" alt=\"\">
          </div>";
        echo "<div class=\"col-lg-6 pt-4 pt-lg-0\">";
        echo "<h3>Perfil</h3>";
    //Consulta del usuario
        echo "<ul>";
        echo "<li><strong>Correo:</strong>".$_SESSION['correo']."</li>";
        echo "<li><strong>Usuario:</strong>".$_SESSION['usuario']."</li>";
        echo "<li><strong>Tipo:</strong>".$_SESSION['tipoDeUsuario']."</li><br><br>";
        echo "<form action=\"indexCovid.php\" method=\"post\">
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Cerrar Sesion\">
              </form>";

        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "</section>";
      }
     ?>


    <!--==============Seccion Hitos=========== -->
    <?php
      if(isset($_SESSION['usuario'])){
        echo "<section id=\"hitos\" class=\"about\">";
        echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-lg-1\">";
        echo "</div>";
        echo "<div class=\"col-lg-11\">";
        echo "<h3>Hitos</h3>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</section>";
      }else{
        echo "<section id=\"hitos\" class=\"about\">";
        echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-lg-9\">";
        echo "<h3>Hitos</h3>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</section>";
      }

     ?>


    <div class="container">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <div class="container">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Lumia</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

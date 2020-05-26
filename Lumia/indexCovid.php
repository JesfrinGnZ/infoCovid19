<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include ("Conexion/Conexion.php");
  session_start();
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
          <li><a href="#infoPublicidad">Publicidad</a></li>
          <li><a href="#queBuscamos">Que buscamos?</a></li>
          <li><a href="#portfolio">Informacion COVID19</a></li>
          <li><a href="#hitos">Hitos</a></li>
      <?php
      if(isset($_SESSION['usuario'])){
        echo "<li><a href=\"#perfil\">".$_SESSION['usuario']."</a></li>";
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
          echo "<form action=\"cerrarSesion.php\" method=\"post\">
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


  <main id="main">

    <!-- ======= Seccion de publicidad ======= -->
<section id="infoPublicidad">
  <div class="container">
    <div class="section-title">
      <h2>Publicidad?</h2>
      <?php
        if(isset($_SESSION['usuario'])){
          echo "<form id=\"login-form\" class=\"form\" action=\"validacionUsuarioAnuncio.php\" method=\"post\">";
          echo "<button type=\"submit\" class=\"btn btn-primary\">Administrar Anuncios</button>";
          echo "</form>";
          echo "<br>";
          echo "<form id=\"login-form\" class=\"form\" action=\"forms/anuncios/tablonIndex.php\" method=\"post\">";
          echo "<button type=\"submit\" class=\"btn btn-primary\">Tablon de anuncios</button>";
          echo "</form>";

        }else{
          echo "<h3 class=\"text-center\">Anunciate con nosotros<h3>";
          echo "<form action=\"forms/login.php\" method=\"post\">
                  <input class=\"btn btn-success\" type=\"submit\" value=\"Iniciar Sesion\">
                </form>";
        }
       ?>
    </div>
  </div>
</section>



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
              <h4><a href="#">Dashboard</a></h4>
              <p>Herramienta para analizar fuentes de datos mundiales por medio de filtros de datos y gráficas</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="https://www.facebook.com/">Proyectos Cunoc</a></h4>
              <p>Pagina de facebook donde se encuentra informacion relacionada a loa proyectos del CUNOC contra el covid19</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="http://ingenieria.cunoc.usac.edu.gt/">Ingenieria Cunoc</a></h4>
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



    <!--==============Seccion Hitos=========== -->
<?php

echo "
<section id=\"hitos\">
  <div class=\"container\">
    <div class=\"section-title\">
      <h2>Hitos</h2>";
      if(isset($_SESSION['usuario'])){
        echo "<form id=\"login-form\" class=\"form\" action=\"validacionUsuarioHito.php\" method=\"post\">";
        echo "<button type=\"submit\" class=\"btn btn-primary\">Administrar Hitos</button>";
        echo "</form>";
      }else{
        echo "<h3 class=\"text-center\">Inicia sesion para crear Hitos<h3>";
        echo "<form action=\"forms/login.php\" method=\"post\">
                <input class=\"btn btn-success\" type=\"submit\" value=\"Iniciar Sesion\">
              </form>";
      }

echo "</div>
  </div>
</section>";
 ?>



    <!-- ============Seccion perfil =============-->
    <?php

    if(isset($_SESSION['usuario'])){
      echo "
      <section id=\"perfil\">
        <div class=\"container\">
          <div class=\"section-title\">
            <h2>Perfil</h2>";
            echo "<div class=\"row\">";
            echo "<div class=\"col-lg-6\">
              <img src=\"assets/img/about.jpg\" class=\"img-fluid\" alt=\"\">
              </div>";
          //Consulta del usuario
          echo "<div class=\"col-lg-6 pt-4 pt-lg-0 text-left\">";
          echo "<ul class=\"list-group\">";
          echo "<li class=\"list-group-item\"><strong>Correo:</strong>".$_SESSION['correo']."</li>";
          echo "<li class=\"list-group-item\"><strong>Usuario:</strong>".$_SESSION['usuario']."</li>";
          echo "<li class=\"list-group-item\"><strong>Tipo:</strong>".$_SESSION['tipoDeUsuario']."</li><br><br>";
          echo "</ul>";
          echo "<form action=\"cerrarSesion.php\" method=\"post\">
                  <input class=\"btn btn-danger\" type=\"submit\" value=\"Cerrar Sesion\">
                </form>";
          echo "</div>";
          //FIn de trader_line
          echo "</div>";
      echo "</div>
        </div>
      </section>";
    }

     ?>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contactenos</p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Lugar:</h4>
                  <p>Guatemala<br>Guatemala</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>cuncoc@edu.gt<br>jess2298gnz@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Llamanos:</h4>
                  <p>+502 5589 55488<br>+502 5589 22475</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


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

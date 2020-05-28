
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Anuncio</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="../assets/css/style.css" rel="stylesheet">

<?php
  session_start();
 ?>

  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <h2>Algo salio mal</h2>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- Button trigger modal -->
            <li><a href="../indexCovid.php">Pagina principal</a></li>
            <li><a href="login.php">Volver</a></li>

       </ul>
       </nav><!-- .nav-menu -->
    </header><!-- End Header -->
    <br><br><br><br>

    <?php
    session_destroy();
    echo "<div class=\"text-center\">
            <h2>Ha ocurrido un error</h2>
              <div class=\"alert alert-danger\" role=\"alert\">
              Esto se puede dever a las siguientes causas:<br>
              *El correo usado ya esta registrado, o el nombre de usuario ya esta en uso.<br>
              <form action=\"registro.php\">
              <button type=\"submit\" class=\"btn btn-primary\">Volver a Intentarlo</button>
              </form>
              </div>
            <img src=\"https://images.vexels.com/media/users/3/153978/isolated/preview/483ef8b10a46e28d02293a31570c8c56-se--al-de-advertencia-de-color-icono-de-trazo-by-vexels.png\" width=\"300\" height=\"300\">
          </div>";
     ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Anuncios</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="../../assets/css/style.css" rel="stylesheet">

<?php
  session_start();
 ?>

  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <h1><a href="index.html">Anuncios</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- Button trigger modal -->
            <li><a  data-toggle="modal" data-target="#modalCreacionAnuncio">Crear Anuncio</a></li>
        <?php
        if(isset($_SESSION['usuario'])){
          echo "<li><a href=\"#usuario\">".$_SESSION['usuario']."</a></li>";
          echo "<button href=\"cerrarSesion.php\" type=\"button\" class=\"btn btn-danger\">Cerrar sesion</button>";
        }
         ?>
       </ul>
       </nav><!-- .nav-menu -->
    </header><!-- End Header -->
    <br><br><br><br>

    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <input class="form-control" id="search" type="text" placeholder="Buscar" aria-label="Search">
          <p id="parrafo"></p>
        </div>
      </div>
    </div>

<style>

</style>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Link para deshabilitar</th>
      <th scope="col">verificado</th>
    </tr>
  </thead>
  <tbody id="anuncios"></tbody>
</table>


        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalCreacionAnuncio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Creacion de anuncio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="creacionAnuncio">
              <?php if (isset($_SESSION['usuario'])) {
                echo "<input type=\"hidden\" id=\"correo\" value=\"".$_SESSION['correo']."\">";
              } ?>
              <div class="form-group">
                <input autocomplete="off" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" id="nombreAnuncio" placeholder="nombre de Anuncio*">
              </div>
              <div class="form-group">
                <input autocomplete="off" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" id="descripcionAnuncio" placeholder="Descripcion de Anuncio*">
              </div>
              <div class="form-group">
                <input autocomplete="off" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" id="link" placeholder="link">
              </div>
              <button type="submit" class="btn btn-primary btn-block text-center" name="button">Guardar anuncio</button>
            </form>
          </div>
<!--          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar anuncio</button>
          </div>-->
        </div>
      </div>
    </div>

    <script type="text/javascript" src="anuncio.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

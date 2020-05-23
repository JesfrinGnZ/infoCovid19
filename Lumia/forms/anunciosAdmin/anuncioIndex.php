<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Administracion de Anuncios</title>
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
          <h2>Administracio de Anuncios</h2>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- Button trigger modal -->
            <li><a href="../../indexCovid.php">Pagina principal</a></li>
            <li><a href="../hitosAdmin/hitosIndex.php">Administracio de Hitos</a></li>
            <li><a href="../../cerrarSesion.php">Cerrar sesion</a></li>
        <?php
        if(isset($_SESSION['usuario'])){
          echo "<li><a href=\"#usuario\">".$_SESSION['usuario']."</a></li>";
          echo "<input id=\"correoUsuario\" type=\"hidden\" value=\"".$_SESSION['correo']."\">";
        }
         ?>
       </ul>
       </nav><!-- .nav-menu -->
    </header><!-- End Header -->
    <br><br><br><br>


<div class="section" id="crearAnuncio" class="contact section-bg">
  <div class="container">
    <h3>Creacion de anuncio</h3>
    <div class="row d-flex justify-content-center">
      <div class="col-md-10">
        <form method="POST" id="creacionAnuncio" action="creacionAnuncio.php" enctype="multipart/form-data">
          <?php if (isset($_SESSION['usuario'])) {
            echo "<input type=\"hidden\" name=\"correo\" id=\"correo\" value=\"".$_SESSION['correo']."\">";
          } ?>
          <div class="form-group">
            <input  required autocomplete="off" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" id="nombreAnuncio" name="nombreAnuncio" placeholder="nombre de Anuncio*">
          </div>
          <div class="form-group">
            <input required autocomplete="off" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" id="descripcionAnuncio" name="descripcionAnuncio" placeholder="Descripcion de Anuncio*">
          </div>
          <div class="form-group">
            <input required autocomplete="off" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" id="link" name="link" placeholder="link">
          </div>
          <div class="form-group">
            <input required type="file" id="imagen" name="imagen" size="20" class="form-control">
          </div>
          <button required type="submit" class="btn btn-success text-center" name="button">Guardar anuncio</button>
        </form>
      </div>
    </div>
  </div>
</div>

<br>

<div class="section" id="misAnuncios">
  <div class="container">
    <h3>Mis anuncios</h3>
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
          <input class="form-control" id="search" type="text" placeholder="Buscar" aria-label="Search">
          <p id="parrafo"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Link para deshabilitar</th>
      <th scope="col">Verificado</th>
      <th scope="col">Imagen</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody id="anuncios"></tbody>
</table>
        </div>
    </div>
  </div>
</div>


<!-- MODAL PARA VER LAS IMAGENES -->
<!-- Modal -->
<div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Imagen de anuncio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <img src="imagenesAnuncios/km.jpg" id="imagenDeAnuncio" class="cambio-imagen"width="400" height="453">
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

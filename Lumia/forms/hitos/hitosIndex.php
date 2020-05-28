<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Hitos</title>
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
          <h2>Hitos</h2>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- Button trigger modal -->
            <li><a href="../../indexCovid.php">Pagina principal</a></li>
            <li><a href="../anuncios/anuncioIndex.php">Anuncios</a></li>
            <li><a href="../anuncios/tablonIndex.php">Tablon Anuncios</a></li>
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


<div class="section" id="crearHito" class="contact section-bg">
  <div class="container">
    <h3>Creacion de Hito</h3>
    <div class="row d-flex justify-content-center">
      <div class="col-md-10">
        <form method="POST" id="crearHito" action="#">
          <?php if (isset($_SESSION['usuario'])) {
            echo "<input type=\"hidden\" name=\"correo\" id=\"correo\" value=\"".$_SESSION['correo']."\">";
          } ?>
          <div class="form-group">
            <h5>Fecha del suceso:</h5>
            <input id="fechaSuceso" name="fechaSuceso" class="form-control" type="date" value="2020-01-01" required>
          </div>
          <div class="form-group">
            <textarea  id="detalle" name="detalle" class="form-control" rows="5" placeholder="Detalle del suceso*"></textarea>
          </div>
          <div class="form-group">
            <textarea id="comentario" id="comentario" class="form-control" rows="3" placeholder="Comentario de usuario"></textarea>
          </div>
          <div class="form-group">
            <input id="fuente" name="fuente" required autocomplete="off" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Fuente*">
          </div>
          <button required type="submit" class="btn btn-success text-center" name="button">Guardar Hito</button>
        </form>
      </div>
    </div>
  </div>
</div>

<br>

<div class="section" id="misAnuncios">
  <div class="container">
    <h3>Mis Hitos</h3>
      <div class="row d-flex justify-content-center">
        <div class="form-group col-md-10">
          <div>
            <select id="seleccionTipoDeHitos" class="browser-default custom-select">
              <option value="misAprobados">Mis hitos aprobados</option>
              <option value="misSinAprobar">Mis hitos sin Aprobar</option>
              <option value="todosMios">Todos mis hitos</option>
              <option value="todosAprobados">Todos los aprobados</option>
              <option value="todosSinAprobar">Todos sin aprobar</option>
              <option value="todos">Todos</option>

            </select>
          </div>
        </div>
        <div class="col-md-2">
          <button type="button" class="buscar-Hitos btn btn-info">Buscar</button>
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
    </div>
  </div>
</div>

<div class="container" id="misHitos">
</div>

    <script type="text/javascript" src="hitos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

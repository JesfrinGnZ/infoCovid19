<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Tablon de Anuncios</title>
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
          <h2>ACTIVACION DE USUARIOS</h2>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- Button trigger modal -->
            <li><a href="../../indexCovid.php">Pagina principal</a></li>
            <li><a href="../anunciosAdmin/anuncioIndex.php">Admin.Anuncios</a></li>
            <li><a href="../hitosAdmin/hitosIndex.php">Admin.Hitos</a></li>
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


    <div class="section" id="misAnuncios">
      <div class="container">
        <h3>Buscar Usuarios</h3>
          <div class="row d-flex justify-content-center">
            <div class="form-group col-md-10">
              <div>
                <select id="seleccionTipoDeAnuncios" class="browser-default custom-select">
                  <option value="usuariosAprobados">Usuarios aprobados</option>
                  <option value="usuariosSinAprobar">Usuarios sin aprobar</option>
                  <option value="todos">Todos los usuarios</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <button type="button" class="buscar-usuarios btn btn-info">Buscar</button>
            </div>
          </div>
      </div>
    </div>
<!--
    <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="form-group col-md-12">
            <div>
              <input class="form-control" type="text" id="buscarUsuarioTexto" name="buscarAnuncioTexto" placeholder="Ingrese una palabra clave">
            </div>
          </div>
        </div>
    </div>
-->
<div class="container">
  <div class="form-group" id="anunciosBuscados">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Correo</th>
          <th scope="col">idUsuario</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody id="usuarios"></tbody>
    </table>
  </div>
</div>


    <script type="text/javascript" src="usuarios.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

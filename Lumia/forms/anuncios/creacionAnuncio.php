
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
          <h2>Informacion Anuncio</h2>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- Button trigger modal -->
            <li><a href="../../indexCovid.php">Pagina principal</a></li>
            <li><a href="../hitos/hitosIndex.php">Hitos</a></li>
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
    <?php

      include ("../../Conexion/Conexion.php");
      $correo=$_POST['correo'];
      $descripcion=$_POST['descripcionAnuncio'];
      $nombre=$_POST['nombreAnuncio'];
      $link="link.link";
      $nombreImagen =$_FILES['imagen']['name'];
      $tipoImagen=$_FILES['imagen']['type'];
      $tamanoImagen=$_FILES['imagen']['size'];
      $carpetaDestino = '/var/www/html/covid/Lumia/forms/anuncios/imagenesAnuncios/';
      $uploadfile=$carpetaDestino.$_FILES['imagen']['name'];
      $rutaRelativaImagen="imagenesAnuncios/".$nombreImagen;
      if (move_uploaded_file($_FILES['imagen']['tmp_name'], $uploadfile)) {
          //echo "File is valid, and was successfully uploaded.\n";
      } else {
          //echo "Upload failed";
      }

      if($nombre=="" || $descripcion==""){
        //echo "NOMBRE O DESCRIPCION NULAS";
      }else{
        $sql = "INSERT INTO ANUNCIO(correoUsuario,descripcion,nombre,linkParaDeshabilitar,verificado,direccionImagen) VALUES(?,?,?,?,?,?)";
        $resultado=Conexion::$conexion->prepare($sql);
        try {
          $resultado->execute(array($correo,$descripcion,$nombre,$link,0,$rutaRelativaImagen));
          //echo "1";
          //echo "Su anuncio se ha registrado";
          echo "<div class=\"text-center\">
                    <h2>Se ha registrado su anuncio</h2>
                    <div class=\"alert alert-success\" role=\"alert\">
                    </div>
                    <form action=\"anuncioIndex.php\">
                    <button type=\"submit\" class=\"btn btn-primary\">Volver a Anuncios</button>
                    </form>
                    <img src=\"https://www.pngkey.com/png/full/779-7799206_palomitas-verdes-png.png\" width=\"300\" height=\"300\">
                </div>";


        } catch (Exception $e) {
          echo "<div class=\"text-center\">
                  <h2>No se ha Guardado el Anuncio</h2>
                    <div class=\"alert alert-danger\" role=\"alert\">
                    Esto se puede dever a las siguientes causas:<br>
                    *Ya existe un anuncio con el mismo nombre,suyo o de otro usuario.<br>
                    <form action=\"anuncioIndex.php\">
                    <button type=\"submit\" class=\"btn btn-primary\">Volver a Anuncios</button>
                    </form>
                    </div>
                  <img src=\"https://images.vexels.com/media/users/3/153978/isolated/preview/483ef8b10a46e28d02293a31570c8c56-se--al-de-advertencia-de-color-icono-de-trazo-by-vexels.png\" width=\"300\" height=\"300\">
                </div>";

            //echo "ERROR AL INGRESAR";
            //echo $e->getMessage();
        }
      }

     ?>
    <script type="text/javascript" src="anuncio.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

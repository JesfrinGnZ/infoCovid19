<?php

include ("../../Conexion/Conexion.php");
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
     <meta charset="utf-8">
     <title>Administracion de Hitos</title>
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



   </head>
   <body>
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top d-flex align-items-center">
       <div class="container d-flex align-items-center">

         <div class="logo mr-auto">
           <h2>Ver Anuncio</h2>
           <!-- Uncomment below if you prefer to use an image logo -->
           <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav class="nav-menu d-none d-lg-block">
           <ul>
             <!-- Button trigger modal -->
             <li><a href="../../indexCovid.php">Pagina principal</a></li>
             <li><a href="anuncioIndex.php">Volver</a></li>
             <li><a href="../../cerrarSesion.php">Cerrar sesion</a></li>
         <?php
         if(isset($_SESSION['usuario'])){
           echo "<li><a href=\"#usuario\">".$_SESSION['usuario']."</a></li>";
           echo "<input id=\"correoUsuario\" type=\"hidden\" value=\"".$_SESSION['correo']."\">";
           echo "<input id=\"idAnuncio\" type=\"hidden\" value=\"".$_POST['idAnuncio']."\">";
           //echo "<h5>".$_POST['idHito']."<h5>";
         }
          ?>
        </ul>
        </nav><!-- .nav-menu -->
     </header><!-- End Header -->
     <br><br><br><br>

<!--OPCIONES PARA HITO--->
<div class="section" id="hitoActual">
  <div class="section" id="crearAnuncio" class="contact section-bg">
    <div class="container">
      <h3>Opciones para hito</h3>
      <?php
       echo "<button type=\"button\"";
       $sql = "SELECT verificado FROM ANUNCIO WHERE idAnuncio=?";
       $resultado=Conexion::$conexion->prepare($sql);
       $resultado->execute(array($_POST['idAnuncio']));
       while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
         if($registro['verificado']==1){
           echo "id=\"accionHito\" class=\"btn btn-warning\">Desactivar";
         }else{
           echo "id=\"accionHito\" class=\"btn btn-info\">Activar";
         }
       }
       echo "</button>";
       ?>
      <button type="button" id="borrarHito" class="buscar-hitos btn btn-danger">Borrar</button>
    </div>
  </div>

<!--HITO-->
<br>
<div class="container">

<?php

$sql = "SELECT * FROM ANUNCIO WHERE idAnuncio=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_POST['idAnuncio']));
while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
echo "

<ul class=\"list-group\">
  <li class=\"list-group-item list-group-item-success\">".$registro['nombreDeEmpresa'].":".$registro['nombre']."</li>
  <li class=\"list-group-item\">Descripcion:".$registro['descripcion']."</li>
  <li class=\"list-group-item\">Direccion:".$registro['direccion']."</li>

</ul>
<br>
<div class=\"text-center\">
<img src=\"../anuncios/".$registro['direccionImagen']."\" id=\"imagenDeAnuncio\" class=\"cambio-imagen\" width=\"800\" height=\"453\">
</div>

";
}

 ?>
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


     <script type="text/javascript" src="accionAnuncio.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>

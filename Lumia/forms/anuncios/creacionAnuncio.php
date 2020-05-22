<?php

  include ("../../Conexion/Conexion.php");

  $correo=$_POST['correo'];
  echo "CORREO:".$correo;
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
      echo "File is valid, and was successfully uploaded.\n";
  } else {
      echo "Upload failed";
  }

  if($nombre=="" || $descripcion==""){
    echo "NOMBRE O DESCRIPCION NULAS";
  }else{
    $sql = "INSERT INTO ANUNCIO(correoUsuario,descripcion,nombre,linkParaDeshabilitar,verificado,direccionImagen) VALUES(?,?,?,?,?,?)";
    $resultado=Conexion::$conexion->prepare($sql);
    try {
      $resultado->execute(array($correo,$descripcion,$nombre,$link,0,$rutaRelativaImagen));
      echo "1";
      echo "Su anuncio se ha registrado";
    } catch (Exception $e) {
        echo "ERROR AL INGRESAR";
        echo $e->getMessage();
    }
  }

 ?>

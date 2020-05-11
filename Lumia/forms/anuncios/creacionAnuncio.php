<?php

  include ("../../Conexion/Conexion.php");
  $correo=$_POST['correo'];
  $descripcion=$_POST['descripcion'];
  $nombre=$_POST['nombre'];
  $link="link.link";

  if($nombre=="" || $descripcion==""){
    echo "0";
  }else{
    $sql = "INSERT INTO ANUNCIO(correoUsuario,descripcion,nombre,linkParaDeshabilitar,verificado) VALUES(?,?,?,?,0)";
    $resultado=Conexion::$conexion->prepare($sql);
    try {
      $resultado->execute(array($correo,$descripcion,$nombre,$link));
      echo "1";
    } catch (Exception $e) {
      echo "0";
    }
  }





 ?>

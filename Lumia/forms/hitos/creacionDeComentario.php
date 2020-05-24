<?php

include ("../../Conexion/Conexion.php");
session_start();
$idHito =$_POST['idHito'];
$comentario=$_POST['comentario'];
$date = new DateTime();
$fecha =$date->format('Y-m-d H:i:s');

//$fecha=getTimestamp();
//echo $idHito." ".$comentario." ".$fecha." ".$_SESSION['correo'];


try {
  $sql = "INSERT INTO COMENTARIO_HITO(correoUsuario,idHito,descripcion,fecha) VALUES(?,?,?,?)";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array($_SESSION['correo'],$idHito,$comentario,$fecha));
  //$resultado->execute(array($_POST['correo'],$_POST['fuente'],$_POST['detalle'],0,$_POST['fechaSuceso'],'0',$_POST['fechaSuceso']));

  echo "1";
} catch (Exception $e) {
  echo $e->getMessage();
}
 ?>

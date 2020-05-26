<?php

include ("../../Conexion/Conexion.php");
try {
//Borrando comentarios
$sql = "DELETE FROM COMENTARIO_HITO WHERE idHito=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_POST['idHito']));
//Borrando hito
  $sql = "DELETE FROM HITO WHERE idHito=?";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array($_POST['idHito']));
} catch (Exception $e) {
  echo $e->getMessage();
}

echo "Borrado:".$_POST['idHito'];
 ?>

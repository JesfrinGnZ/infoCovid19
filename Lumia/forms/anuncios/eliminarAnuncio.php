<?php

include ("../../Conexion/Conexion.php");
$nombreAnuncio=$_POST['nombre'];
$sql = "DELETE FROM ANUNCIO WHERE nombre = ?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($nombreAnuncio));
echo "1";
 ?>

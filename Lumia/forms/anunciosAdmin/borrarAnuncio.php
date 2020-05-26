<?php

include ("../../Conexion/Conexion.php");
$sql = "DELETE FROM ANUNCIO WHERE idAnuncio = ?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_POST['idAnuncio']));
echo "1";
 ?>

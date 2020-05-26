<?php

include ("../../Conexion/Conexion.php");
$sql = "SELECT verificado FROM ANUNCIO WHERE idAnuncio=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_POST['idAnuncio']));
$nuevoVerificado=1;
while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
  if($registro['verificado']==0){//No esta verificado
    $nuevoVerificado=1;
  }else{
    $nuevoVerificado=0;
  }
}
//Actualizando
$sql="UPDATE ANUNCIO SET verificado =$nuevoVerificado WHERE idAnuncio=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_POST['idAnuncio']));

echo $nuevoVerificado;
 ?>

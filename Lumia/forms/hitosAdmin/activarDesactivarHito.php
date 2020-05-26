<?php

include ("../../Conexion/Conexion.php");
$sql = "SELECT verificado FROM HITOS_USUARIO WHERE idHito=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_POST['idHito']));
$nuevoVerificado=1;
while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
  if($registro['verificado']==0){//No esta verificado
    $nuevoVerificado=1;
  }else{
    $nuevoVerificado=0;
  }
}
//Actualizando
$sql="UPDATE HITO SET verificado =$nuevoVerificado WHERE idHito=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_POST['idHito']));

echo $nuevoVerificado;
 ?>

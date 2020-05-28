<?php

include ("../../Conexion/Conexion.php");
$correoUsuario=$_POST['nombre'];
$sql = "SELECT verificado FROM USUARIO WHERE correoUsuario=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($correoUsuario));
$nuevoVerificado=1;
while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
  if($registro['verificado']==0){//No esta verificado
    $nuevoVerificado=1;
  }else{
    $nuevoVerificado=0;
  }
}
//Actualizando
$sql="UPDATE USUARIO SET verificado =$nuevoVerificado WHERE correoUsuario=?";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($correoUsuario));

echo $nuevoVerificado;
 ?>

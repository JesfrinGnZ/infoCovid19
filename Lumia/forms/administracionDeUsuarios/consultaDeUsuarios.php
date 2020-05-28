<?php

include ("../../Conexion/Conexion.php");
$filtro = $_POST['filtro'];
//$filtro="todos";
$json=array();
if($filtro=="todos"){
  $sql ="SELECT * FROM USUARIO WHERE tipoDeUsuario=?";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array("administrador"));
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $json[]=array(
        'correoUsuario' => $registro['correoUsuario'],
        'idUsuario' => $registro['idUsuario'],
        'verificado' => $registro['verificado']
      );
    }
    $jsonString = json_encode($json);
    echo $jsonString;
}else if($filtro=="usuariosSinAprobar"){
  $sql ="SELECT * FROM USUARIO WHERE tipoDeUsuario=? AND verificado=0";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array("administrador"));
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $json[]=array(
        'correoUsuario' => $registro['correoUsuario'],
        'idUsuario' => $registro['idUsuario'],
        'verificado' => $registro['verificado']
      );
    }
    $jsonString = json_encode($json);
    echo $jsonString;

}else{//$filtro=usuariosAprobados
  $sql ="SELECT * FROM USUARIO WHERE tipoDeUsuario=? AND verificado=1";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array("administrador"));
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $json[]=array(
        'correoUsuario' => $registro['correoUsuario'],
        'idUsuario' => $registro['idUsuario'],
        'verificado' => $registro['verificado']
      );
    }
    $jsonString = json_encode($json);
    echo $jsonString;
}

 ?>

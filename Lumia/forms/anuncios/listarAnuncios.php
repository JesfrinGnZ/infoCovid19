<?php
  include ("../../Conexion/Conexion.php");
  $correoUsuario=$_GET['correoUsuario'];
  $sql = "SELECT * FROM ANUNCIO WHERE correoUsuario = ?";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array($correoUsuario));
  if($resultado->rowCount()<=0){
    echo $correoUsuario;
  }else{
    $json=array();
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        $json[]=array(
            'nombre' => $registro['nombre'],
            'descripcion' => $registro['descripcion'],
            'link' => $registro['linkParaDeshabilitar'],
            'verificado' => $registro['verificado'],
            'imagen' => $registro['direccionImagen']
        );
      }
      $jsonString = json_encode($json);
      echo $jsonString;
  }
 ?>

<?php
  include ("../../Conexion/Conexion.php");
  $sql = "SELECT * FROM ANUNCIO";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute();
  if($resultado->rowCount()<=0){
    echo "Sin resultados";
  }else{
    $json=array();
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        $json[]=array(
            'nombre' => $registro['nombre'],
            'descripcion' => $registro['descripcion'],
            'link' => $registro['linkParaDeshabilitar'],
            'verificado' => $registro['verificado']
        );
      }
      $jsonString = json_encode($json);
      echo $jsonString;
  }
 ?>

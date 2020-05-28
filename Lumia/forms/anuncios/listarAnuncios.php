<?php
  include ("../../Conexion/Conexion.php");
  $correoUsuario=$_GET['correoUsuario'];
  $sql = "SELECT * FROM ANUNCIO WHERE correoUsuario = ?";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array($correoUsuario));
  $verificado="";
  if($resultado->rowCount()<=0){
    echo $correoUsuario;
  }else{
    $json=array();
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      if($registro['verificado']==0){
        $verificado="NO VERIFICADO";
      }else{
        $verificado="VERIFICADO";
      }
        $json[]=array(
            'nombre' => $registro['nombre'],
            'descripcion' => $registro['descripcion'],
            'link' => $registro['linkPagina'],
            'verificado' => $verificado,
            'imagen' => $registro['direccionImagen']
        );
      }
      $jsonString = json_encode($json);
      echo $jsonString;
  }
 ?>

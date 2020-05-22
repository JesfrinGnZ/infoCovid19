<?php
  include ("../../Conexion/Conexion.php");
  $nombreAnuncio = $_POST['nombre'];
  $sql ="SELECT direccionImagen FROM ANUNCIO WHERE nombre=?";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array($nombreAnuncio));
  if($resultado->rowCount()<=0){
    echo "Sin imagen";
  }else{
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      echo $registro['direccionImagen'];
      }
  }

 ?>

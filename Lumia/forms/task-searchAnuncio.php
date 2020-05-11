<?php

   /* include ("../Conexion/Conexion.php");
    $search=$_POST['consulta'];
    if(!empty($search)){
        $sql ="SELECT * FROM ANUNCIO WHERE nombre LIKE '%".$search."%'";
        $resultado=Conexion::$conexion->prepare($sql);
        $resultado->execute();
        $json=array();
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            $json[]=array(
                'nombre' => $row['nombre'],
                'descripcion' => $row['descripcion'],
                'link' => $row['linkParaDeshabilitar']
            );
          }
          $jsonString = json_encode($json);
          echo $jsonString;
    }*/
    echo "ESTE ES MI DATO";
?>
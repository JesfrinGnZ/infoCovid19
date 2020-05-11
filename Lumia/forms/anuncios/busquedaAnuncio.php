<?php
include ("../../Conexion/Conexion.php");
 $search=$_POST['search'];
 if(!empty($search)){
     $sql ="SELECT * FROM ANUNCIO WHERE nombre LIKE '%$search%'";
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
               'link' => $registro['linkParaDeshabilitar']
           );
         }
         $jsonString = json_encode($json);
         echo $jsonString;
     }

 }

?>

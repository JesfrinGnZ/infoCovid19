<?php
include ("../../Conexion/Conexion.php");
 $search=$_POST['search'];
 $verificado="";
 if(!empty($search)){
     $sql ="SELECT * FROM ANUNCIO WHERE nombre LIKE '%$search%' OR descripcion LIKE '%$search%' OR direccion LIKE '%$search%'";
     $resultado=Conexion::$conexion->prepare($sql);
     $resultado->execute();
     if($resultado->rowCount()<=0){
       echo "Sin resultados";
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

 }

?>

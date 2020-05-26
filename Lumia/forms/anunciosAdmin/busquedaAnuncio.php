<?php
include ("../../Conexion/Conexion.php");
 $search=$_POST['search'];
 if(!empty($search)){
     $sql ="SELECT * FROM ANUNCIO WHERE nombre LIKE '%$search%' OR descripcion LIKE '%$search%' OR direccion LIKE '%$search%'";
     $resultado=Conexion::$conexion->prepare($sql);
     $resultado->execute();
     if($resultado->rowCount()<=0){
       echo "Sin resultados";
     }else{
       $json=array();
       while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
           $json[]=array(
             'idAnuncio' => $registro['idAnuncio'],
             'correoUsuario' => $registro['correoUsuario'],
             'descripcion' => $registro['descripcion'],
             'nombre' => $registro['nombre'],
             'verificado' => $registro['verificado'],
             'direccionImagen' => $registro['direccionImagen'],
             'direccion' => $registro['direccion'],
             'nombreDeEmpresa' => $registro['nombreDeEmpresa'],
             'linkPagina' => $registro['linkPagina']
           );
         }
         $jsonString = json_encode($json);
         echo $jsonString;
     }

 }

?>

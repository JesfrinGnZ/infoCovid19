<?php
include ("../../Conexion/Conexion.php");
session_start();
$sql="SELECT t1.idComentarioHito,t1.descripcion,t1.fecha,t2.idUsuario FROM COMENTARIO_HITO AS t1 INNER JOIN USUARIO AS t2 ON t1.correoUsuario=t2.correoUsuario WHERE t1.idHito=? ORDER BY fecha DESC";
$resultado=Conexion::$conexion->prepare($sql);
$resultado->execute(array($_GET['idHito']));
$json=array();
while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
          $json[]=array(
              'idComentarioHito' => $registro['idComentarioHito'],
              'descripcion' => $registro['descripcion'],
              'fecha' => $registro['fecha'],
              'idUsuario' => $registro['idUsuario']
          );
        }
$jsonString = json_encode($json);
echo $jsonString;
//echo "HOLA DESDE LISTAR COMENTARIOS ID HITO:".$_GET['idHito'];
 ?>

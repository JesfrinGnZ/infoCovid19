<?php

//SELECT t1.idHito, t1.fuente, t1.descripcion, t1.comentarioCreador, t1.fecha, t1.verificado, t1.fechaSuceso,t2.idUsuario FROM HITO AS t1 INNER JOIN USUARIO AS t2 ON t1.correoUsuario=t2.correoUsuario;

include ("../../Conexion/Conexion.php");
session_start();
  $filtro = $_GET['filtro'];
  $correo =$_SESSION['correo'];
  $usuario=$_SESSION['usuario'];

$json=array();

if($filtro=="todos"){
  $sql = "SELECT * FROM HITOS_USUARIO";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute();
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    if($registro['verificado']==0){
      $verificado ="NO VERIFICADO";
    }else{
      $verificado="VERIFICADO";
    }
    if($registro['comentarioCreador']==""){
      $comentarioCreador="";
    }else{
      $comentarioCreador=$registro['comentarioCreador'];
    }

            $json[]=array(
                'idHito' => $registro['idHito'],
                'idUsuario' => $registro['idUsuario'],
                'fuente' => $registro['fuente'],
                'descripcion' => $registro['descripcion'],
                'comentarioCreador' => $comentarioCreador,
                'fecha' => $registro['fecha'],
                'verificado' => $verificado,
                'fechaSuceso' => $registro['fechaSuceso']
            );
          }
          $jsonString = json_encode($json);
          echo $jsonString;
}else if($filtro=="todosSinAprobar"){
  $sql = "SELECT * FROM HITOS_USUARIO WHERE verificado =0";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute();
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    if($registro['verificado']==0){
      $verificado ="NO VERIFICADO";
    }else{
      $verificado="VERIFICADO";
    }
    if($registro['comentarioCreador']==""){
      $comentarioCreador="";
    }else{
      $comentarioCreador=$registro['comentarioCreador'];
    }
            $json[]=array(
                'idHito' => $registro['idHito'],
                'idUsuario' => $registro['idUsuario'],
                'fuente' => $registro['fuente'],
                'descripcion' => $registro['descripcion'],
                'comentarioCreador' => $comentarioCreador,
                'fecha' => $registro['fecha'],
                'verificado' => $verificado,
                'fechaSuceso' => $registro['fechaSuceso']
            );
          }
          $jsonString = json_encode($json);
          echo $jsonString;

}else if($filtro=="todosAprobados"){
  $sql = "SELECT * FROM HITOS_USUARIO WHERE verificado =1";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute();
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    if($registro['verificado']==0){
      $verificado ="NO VERIFICADO";
    }else{
      $verificado="VERIFICADO";
    }
    if($registro['comentarioCreador']==""){
      $comentarioCreador="";
    }else{
      $comentarioCreador=$registro['comentarioCreador'];
    }
            $json[]=array(
                'idHito' => $registro['idHito'],
                'idUsuario' => $registro['idUsuario'],
                'fuente' => $registro['fuente'],
                'descripcion' => $registro['descripcion'],
                'comentarioCreador' => $comentarioCreador,
                'fecha' => $registro['fecha'],
                'verificado' => $verificado,
                'fechaSuceso' => $registro['fechaSuceso']
            );
          }
          $jsonString = json_encode($json);
          echo $jsonString;
}else if($filtro=="todosMios"){
    $sql = "SELECT * FROM HITOS_USUARIO WHERE idUsuario=?";
    $resultado=Conexion::$conexion->prepare($sql);
    $resultado->execute(array($usuario));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      if($registro['verificado']==0){
        $verificado ="NO VERIFICADO";
      }else{
        $verificado="VERIFICADO";
      }
      if($registro['comentarioCreador']==""){
        $comentarioCreador="";
      }else{
        $comentarioCreador=$registro['comentarioCreador'];
      }
              $json[]=array(
                  'idHito' => $registro['idHito'],
                  'idUsuario' => $registro['idUsuario'],
                  'fuente' => $registro['fuente'],
                  'descripcion' => $registro['descripcion'],
                  'comentarioCreador' => $comentarioCreador,
                  'fecha' => $registro['fecha'],
                  'verificado' => $verificado,
                  'fechaSuceso' => $registro['fechaSuceso']
              );
            }
            $jsonString = json_encode($json);
            echo $jsonString;

}else if($filtro=="misSinAprobar"){
  $sql = "SELECT * FROM HITOS_USUARIO WHERE idUsuario=? AND verificado=0";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array($usuario));
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    if($registro['verificado']==0){
      $verificado ="NO VERIFICADO";
    }else{
      $verificado="VERIFICADO";
    }
    if($registro['comentarioCreador']==""){
      $comentarioCreador="";
    }else{
      $comentarioCreador=$registro['comentarioCreador'];
    }
            $json[]=array(
                'idHito' => $registro['idHito'],
                'idUsuario' => $registro['idUsuario'],
                'fuente' => $registro['fuente'],
                'descripcion' => $registro['descripcion'],
                'comentarioCreador' => $comentarioCreador,
                'fecha' => $registro['fecha'],
                'verificado' => $verificado,
                'fechaSuceso' => $registro['fechaSuceso']
            );
          }
          $jsonString = json_encode($json);
          echo $jsonString;
}else{//$filtro=="misAprobados
  $sql = "SELECT * FROM HITOS_USUARIO WHERE idUsuario=? AND verificado=1";
  $resultado=Conexion::$conexion->prepare($sql);
  $resultado->execute(array($usuario));
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    if($registro['verificado']==0){
      $verificado ="NO VERIFICADO";
    }else{
      $verificado="VERIFICADO";
    }
    if($registro['comentarioCreador']==""){
      $comentarioCreador="";
    }else{
      $comentarioCreador=$registro['comentarioCreador'];
    }
            $json[]=array(
                'idHito' => $registro['idHito'],
                'idUsuario' => $registro['idUsuario'],
                'fuente' => $registro['fuente'],
                'descripcion' => $registro['descripcion'],
                'comentarioCreador' => $comentarioCreador,
                'fecha' => $registro['fecha'],
                'verificado' => $verificado,
                'fechaSuceso' => $registro['fechaSuceso']
            );
          }
          $jsonString = json_encode($json);
          echo $jsonString;
}


//  echo "DESDE LISTAR HITOS FILTRO:".$_GET['filtro'];
 ?>

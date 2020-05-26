<?php

include ("../../Conexion/Conexion.php");
session_start();
  $filtro = $_GET['filtro'];
  $correo =$_SESSION['correo'];
  $usuario=$_SESSION['usuario'];

  $json=array();

  if($filtro=="todos"){
    $sql = "SELECT * FROM ANUNCIO";
    $resultado=Conexion::$conexion->prepare($sql);
    $resultado->execute();
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
  }else if($filtro=="todosSinAprobar"){
    $sql = "SELECT * FROM ANUNCIO WHERE verificado = 0";
    $resultado=Conexion::$conexion->prepare($sql);
    $resultado->execute();
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
  }else if($filtro=="todosAprobados"){
    $sql = "SELECT * FROM ANUNCIO WHERE verificado = 1";
    $resultado=Conexion::$conexion->prepare($sql);
    $resultado->execute();
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
              $json[]=array(
                  'idAnuncio' => $registro['idAnuncio '],
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
  }else if($filtro=="todosMios"){
    $sql = "SELECT * FROM ANUNCIO WHERE correoUsuario = ?";
    $resultado=Conexion::$conexion->prepare($sql);
    $resultado->execute(array($correo));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
              $json[]=array(
                  'idAnuncio' => $registro['idAnuncio '],
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
  }else if($filtro=="misSinAprobar"){
    $sql = "SELECT * FROM ANUNCIO WHERE correoUsuario = ? AND verificado=0";
    $resultado=Conexion::$conexion->prepare($sql);
    $resultado->execute(array($correo));
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
  }else{//else if($filtro=="misAprobados"){
    $sql = "SELECT * FROM ANUNCIO WHERE correoUsuario = ? AND verificado=1";
    $resultado=Conexion::$conexion->prepare($sql);
    $resultado->execute(array($correo));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
              $json[]=array(
                'idAnuncio' => $registro['idAnuncio'],
                  'idAnuncio' => $registro[''],
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

  /*else if($filtro=="todosSinAprobar"){
    echo "Hola";
  }else if($filtro=="todosAprobados"){
    echo "Hola";

  }else if($filtro=="todosMios"){
    echo "Hola";

  }else if($filtro=="misSinAprobar"){
    echo "Hola";

  }else{//else if($filtro=="misSinAprobar"){
    echo "Hola";

  }*/



 ?>

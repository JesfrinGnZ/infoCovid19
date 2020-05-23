<?php

  include ("../../Conexion/Conexion.php");
  //echo "DESDE CREACION DE HITO:".$_POST['correo'].$_POST['fechaSuceso'].$_POST['detalle'].$_POST['comentario'].$_POST['fuente'];

  //Verificar si se tiene comentario del creador del hito
  if($_POST['comentario']==""){//Se crea sin comentario
    try{
      $sql = "INSERT INTO HITO(correoUsuario,fuente,descripcion,cantidadDeMeGusta,fecha,verificado,fechaSuceso) VALUES(?,?,?,?,?,?,?)";
      $resultado=Conexion::$conexion->prepare($sql);
      $resultado->execute(array($_POST['correo'],$_POST['fuente'],$_POST['detalle'],0,$_POST['fechaSuceso'],'0',$_POST['fechaSuceso']));
      echo "1";
    }catch(Exception $e){
      echo $e->getMessage();
    }

  }else{//Se crea con comentario
    try{
      $sql = "INSERT INTO HITO(correoUsuario,fuente,descripcion,comentarioCreador,cantidadDeMeGusta,fecha,verificado,fechaSuceso) VALUES(?,?,?,?,?,?,?,?)";
      $resultado=Conexion::$conexion->prepare($sql);
      $resultado->execute(array($_POST['correo'],$_POST['fuente'],$_POST['detalle'],$_POST['comentario'],0,$_POST['fechaSuceso'],'0',$_POST['fechaSuceso']));
      echo "1";
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }

 ?>

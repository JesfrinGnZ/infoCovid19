<?php
  session_start();
  echo "Usuario:".$_SESSION['usuario'];
  //Destruyendo la sesion
  if(session_destroy()){
    echo "Sesion cerrada correctamente";
  }else{
    echo "No se pudo cerrar la sesion";
  }
  header('Location:indexCovid.php');
 ?>

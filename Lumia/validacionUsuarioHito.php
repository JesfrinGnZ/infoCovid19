<?php

//Se buscara el tipo de usuario para acceder a su pagina
  session_start();
  if($_SESSION['tipoDeUsuario']=='normal'){
    header('Location:forms/hitos/hitosIndex.php');
  }else{
    header('Location:forms/hitosAdmin/hitosIndex.php');
  }

 ?>

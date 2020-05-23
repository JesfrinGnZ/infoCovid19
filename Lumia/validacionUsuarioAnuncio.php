<?php
//Se buscara el tipo de usuario para acceder a su pagina
  session_start();
  if($_SESSION['tipoDeUsuario']=='normal'){
    header('Location:forms/anuncios/anuncioIndex.php');
  }else{
    header('Location:forms/anunciosAdmin/anuncioIndex.php');
  }
 ?>

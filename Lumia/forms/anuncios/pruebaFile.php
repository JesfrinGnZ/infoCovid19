<?php

  $nombre = $_FILES['img']['name'];
  $nombreTemp = $_FILES['img']['tmp_name'];
  echo "Nombre:".$nombre;
  echo "NombreTmp".$nombreTemp;
  echo "nombreAnuncio:".$_POST['nombreAnuncio'];

 ?>

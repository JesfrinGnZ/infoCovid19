<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    ///                      <input type="hidden" name="tipoDePagina" value="0">
    include ("../Conexion/Conexion.php");
    $correo=$_POST['correo'];
    $tipoDeUsuario=$_POST['tipoDeUsuario'];
    $usuario=$_POST['username'];
    $contrasena=$_POST['password'];
    $sql="INSERT INTO USUARIO VALUES(?,?,?,?)";
    $resultado=Conexion::$conexion->prepare($sql);

    try {
      $resultado->execute(array($correo,$tipoDeUsuario,$contrasena,$usuario));
      session_start();
      $_SESSION['usuario']=$usuario;
      header("Location: ../indexCovid.php");
    } catch (PDOException $e) {
      echo $e->getMessage();

    }



    //  $resultado->execute();
      //$resultado->execute(array("dssada","normal","dsafasd","sdfasd"));




     ?>
  </body>
</html>

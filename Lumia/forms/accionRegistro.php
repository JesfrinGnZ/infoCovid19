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
    $sql="INSERT INTO USUARIO VALUES(?,?,?,?,0)";
    $resultado=Conexion::$conexion->prepare($sql);

    try {
      $resultado->execute(array($correo,$tipoDeUsuario,$contrasena,$usuario));
      session_start();
      $_SESSION['usuario']=$usuario;
      $_SESSION['correo']=$correo;
      $_SESSION['tipoDeUsuario']=$tipoDeUsuario;
      $_SESSION['verificado']=0;
      if($tipoDeUsuario=="administrador"){
        if($verificado==0){
        header("Location: usuarioRegistradoNoVerificado.php");
          echo "Tipo:".$tipoDeUsuario." VERIFICADO:".$verificado;
        }
      }else{
        header("Location: ../indexCovid.php");
      }
    } catch (PDOException $e) {
      //echo $e->getMessage();
      header("Location: errorRegistro.php");

    }



     ?>
  </body>
</html>

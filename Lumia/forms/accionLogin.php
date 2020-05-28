<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include ("../Conexion/Conexion.php");
     $usuario=$_POST['username'];
     $contrasena=$_POST['password'];
     $sql ="SELECT * FROM USUARIO WHERE idUsuario=? AND contrasena=?";
     $resultado=Conexion::$conexion->prepare($sql);
     $resultado->execute(array($usuario,$contrasena));
     while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
       $usuarioEncontrado=$registro['idUsuario'];
       $correo=$registro['correoUsuario'];
       $tipoDeUsuario=$registro['tipoDeUsuario'];
       $verificado=$registro['verificado'];
     }
     if($usuarioEncontrado!=null){
       session_start();
       $_SESSION['usuario']=$usuario;
       $_SESSION['correo']=$correo;
       $_SESSION['tipoDeUsuario']=$tipoDeUsuario;
       $_SESSION['verificado']=$verificado;
       if($tipoDeUsuario=="administrador"){
         if($verificado==0){
           header("Location: usuarioNoVerificado.php");
           //echo "Tipo:".$tipoDeUsuario." VERIFICADO:".$verificado;
         }
       }
       header("Location: ../indexCovid.php");
     }else{
       header("Location: usuarioNoEncontrado.php");
     }

     ?>
  </body>
</html>

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
     }
     if($usuarioEncontrado!=null){
       session_start();
       $_SESSION['usuario']=$usuario;
       header("Location: ../indexCovid.php");
     }else{
       echo "NO SE ENCONTRO EL USUARIO";

     }

     ?>
  </body>
</html>

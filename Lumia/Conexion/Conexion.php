<?php
  require('config.php');

  class Conexion{

    public static $conexion;

    private function Conexion(){

    }

    public static function conectarA_Base(){
      if(Conexion::$conexion==null){
        try{
          Conexion::$conexion = new PDO('mysql:host=localhost;dbname=covid19', 'jes', '7321');
          Conexion::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          Conexion::$conexion->exec("SET CHARACTER SET utf8");
        }catch(Exception $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";
          }
      }
    return $conexion;
    }

    public static function desconectarDeBase(){
      $conexion=null;
    }
  }

  Conexion::conectarA_Base();
?>

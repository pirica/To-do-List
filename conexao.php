<?php
  abstract class Conexao{
    private static $con;
    public static function getCon(){
      
      
      $host = "localhost:3306";
      $user = "root";
      $senha = "root";
      $database = "List";
      
      self::$con = new mysqli($host, $user, $senha, $database);
      
      return self::$con;
    }
  }
  


?>
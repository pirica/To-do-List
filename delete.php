<?php
  require_once('Crud.php');
  if(isset($_GET['id'])){
    try {
      $sql = new Crud();
      if($sql->Delete($_GET['id']) == true){
        header('Location: index.php');
      }
    } catch (Exception $e) {
      print_r('Ocorreu um erro');
    }
    
  }
?>
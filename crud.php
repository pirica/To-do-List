<?php

  require_once "conexao.php";
  
  class Crud{
    
    //atributo que armazena o objeto da conexao com o banco de dados
    private $con;
    
    //atributo que armazena a tarefa;
    private $tarefa;
    
    public function __construct($tarefa=null){
      $this->con = Conexao::getCon();
      $this->tarefa = $tarefa;
    }
    
    //Função que faz a inserção da nova tarefa
    public function Insert(){
      $sql = "INSERT INTO Tarefas (tarefa) VALUES ('$this->tarefa')";
      
      if($this->con->query($sql) === true){
        return true;
      }else{
        print_r($this->con->error);
        return false;
      }
    }
    public function Select(){
      $sql = "SELECT * FROM Tarefas";
      
      $result = $this->con->query($sql);
      
      if($result->num_rows > 0){
        return $result;
      }else{
        return false;
      }
    }
    
    public function Delete($id){
     
      $sql = "DELETE FROM Tarefas WHERE id = '$id'";
            
      if($this->con->query($sql) === true){
        return true;
      }else{
        print_r($this->con->error);
        return false;
      }
    }
  }

?>
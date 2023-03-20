<?php

  require("crud.php");
  //Verifica se o botão foi clicado
  if (isset($_POST['new'])) {
    
    //Testa se os dados do input não estejam vazios
    if (!empty($_POST["tarefa"])) {
      
      //Cria um objeto Crud
      $new = new Crud($_POST['tarefa']);
      
      //inserir e testa se foi inserido com sucesso
      if($new->Insert() === true){
        //Manda para pagina principal
        header('Location: index.php');
      }else{
        //Manda para pagina principal
        print_r("Falha ao inserir");
      }
    }else {
      //A tarefa esta vazia
      print_r("A tarefa esta vazia");
    }
   
  } else {
    //O botão não foi clicado
    print_r("Nenhum botao clicado");
  }
  


?>
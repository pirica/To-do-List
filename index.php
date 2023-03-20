<?php
  require("Crud.php");
  $sql = new Crud();
  $registros = $sql->Select();
  $cont = 1;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="navbar navbar-expand-lg fixed-top bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">To do List</a>
    </div>
  </header>
  <article>
    <div class="container-fluid">
      <h1>
        Lista de Tarefas
      </h1>
      <hr>
      <?php if($registros->num_rows > 0): ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tarefa</th>
              <th scope="col">Feito</th>
            </tr>
          </thead>
        <?php while($tarefas = $registros->fetch_assoc()): ?>
          
            <tbody>
              <tr>
                <th scope="row"><?php print_r($cont);?></th>
                <td><?php print_r($tarefas["tarefa"]);?></td>
                <td>
                  <a class="btn btn-danger" href="delete.php?id=<?=$tarefas['id']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                  </a>
                </td>
              </tr>
            </tbody>
          <?php $cont++; ?>
        <?php endwhile; ?>
        
        </table>
      <?php else: ?>
        <h3>Nenhuma Tarefa Encontrada</h3>
      <?php endif; ?>
    </div>
    
  </article>
  <footer class="navbar navbar-expand-lg fixed-bottom bg-dark">
    <div class="container-fluid">
      <form action="insert.php" method="post" class="d-flex">
        <input type="text" name="tarefa" id="tarefa" placeholder="Insira uma tarefa" class="form-control" />
        <button type="submit" class="btn btn-danger" name="new">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
        </button>
      </form>
    </div>
    
  </footer>
</body>
</html>
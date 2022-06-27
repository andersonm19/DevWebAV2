<?php

    include_once('conn-alunos.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   

    <title>Alunos</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a href=""><img id="img-form" src="img/logo.png" alt width="150"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-5 mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="">alunos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="">Outros</a>
            </li>
            </ul>                 
        </div>

      </nav>
    </header>
    <div class="container text-center classe">
    <table rules="all" class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <th>MATRÍCULA</th>
          <th>NOME</th>
          <th>AV1</th>
          <th>AV2</th>
          <th>AVD</th>
          <th>ACÕES</th>
        </tr>
      </thead>
      <tbody>
      <?php

        $sql_consulta=mysqli_query($conectar, "SELECT * FROM alunos");

        while($dados=mysqli_fetch_array($sql_consulta)){
            ?>

            <tr>
            <td> <?= $dados[0] ?> </td>
            <td> <?= $dados[1] ?> </td>
            <td> <?= $dados[2] ?> </td>
            <td> <?= $dados[3] ?> </td>
            <td> <?= $dados[4] ?> </td>
            <td>
              <a href="editar.php?codigo=<?=$dados[0] ?>"> <button class="btn btn-success">Editar</button></a>
              <a href="eliminar.php?codigo=<?=$dados[0] ?>"><button class="btn btn-danger">Excluir</button></a>
            </td>
            </tr>
            
            
        <?php } ?>
      </tbody>

    </table>
    <a href="cad-aluno.html"><button class="btn btn-success btn-lg">Cadastrar novo aluno</button></a>
  </div>
  
  
            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>





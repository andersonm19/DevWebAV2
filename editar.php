<?php

    include_once('conn-alunos.php');

    $matricula = $_GET['codigo'];

    $sql_consulta = mysqli_query($conectar, "SELECT *FROM alunos WHERE matricula='$matricula'");

    $dados=mysqli_fetch_array($sql_consulta);



?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   

    <title>Atualizar</title>
  </head>
  <body style="background: #c0c0c0 ;">
    </header>      
        <div class="container text-center classe ">
            <div class="img mt-5 m-5"><img src="img/logo.png"></div>
            <form method="POST" action="atualizar.php">
                <div class="row p-5 m-0">
                  <div class="col ">
                    <input type="text" name="codigo" value="<?=$dados[0] ?>" class="form-control" placeholder="Matrícula">
                  </div>
                  <div class="col">
                    <input type="text" name="nome2" value="<?=$dados[1] ?>" class="form-control" placeholder="Nome">
                  </div>
                  <div class="col">
                    <input type="text" name="av1" value="<?=$dados[2] ?>" class="form-control" placeholder="Av1">
                  </div>
                  <div class="col">
                    <input type="text" name="av2" value="<?=$dados[3] ?>" class="form-control" placeholder="Av2">
                  </div>
                  <div class="col">
                    <input type="text" name="avd" value="<?=$dados[4] ?>" class="form-control" placeholder="Avd">
                  </div>
                </div>
                <button class="btn btn-success btn-lg">Atualizar</button>
              </form>
        </div>
    




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php

    require_once('conn-alunos.php');

    $matricula = $_POST['codigo'];
    $nome = $_POST['nome2'];
    $av1 = $_POST['av1'];
    $av2 = $_POST['av2'];
    $avd = $_POST['avd'];

    $sql_atualizar=mysqli_query($conectar, "UPDATE alunos SET matricula='$matricula', nome='$nome',
     av1='$av1', av2='$av2', avd='$avd' WHERE matricula='$matricula' ");
 

    if($sql_atualizar==true){

        echo " <script>

        alert('Usuario atualizado com sucesso');
        window.location.href='lista.php';
        
        </script> ";


    }
    else{

        echo " <script>

        alert('Falha na edição');
        window.location.href='editar.php';
        
        </script> ";


    }




?>


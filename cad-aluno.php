<?php

    require_once('conn-alunos.php');

    $mat = $_POST['matricula'];
    $nome = $_POST['nome2'];
    $av1 = $_POST['av1'];
    $av2 = $_POST['av2'];
    $avd = $_POST['avd'];

    $sql_cad=mysqli_query($conectar, "INSERT INTO alunos (matricula, nome, av1, av2, avd) 
    VALUES ('$mat', '$nome', '$av1', '$av2', '$avd')");

    if($sql_cad==true){

        echo " <script>

        alert('Usuario cadastrado com sucesso');
        window.location.href='lista.php';
        
        </script> ";


    }
    else{

        echo " <script>

        alert('Falha no cadastro');
        window.location.href='cad-aluno.html';
        
        </script> ";


    }




?>




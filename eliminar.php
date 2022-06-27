<?php

    include_once('conn-alunos.php');

    $matricula = $_GET['codigo'];

    $sql_eliminar = mysqli_query($conectar, "DELETE FROM alunos WHERE matricula='$matricula'");

    if($sql_eliminar==true){

        echo " <script>

        alert('Usuario excluido com sucesso');
        window.location.href='lista.php';
        
        </script> ";

    }else{
        
        echo " <script>

        alert('Falha ao excluir');
        window.location.href='lista.php';
        
        </script> ";
    }





?>

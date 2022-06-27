<?php

    require_once('conexao.php');

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $senha_conf = $_POST['senha_confirm'];

    $sql_cadastro=mysqli_query($ligar, "INSERT INTO cadastro (email, nome, senha, senha_confirm) 
    VALUES ('$email', '$nome', '$senha', '$senha_conf')");

    if($sql_cadastro==true){

        echo " <script>

        alert('Usuario cadastrado com sucesso');
        window.location.href='lista.php';
        
        </script> ";


    }
    else{

        echo " <script>

        alert('Falha no cadastro');
        window.location.href='cadastro.html';
        
        </script> ";


    }




?>


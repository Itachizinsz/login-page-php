<?php
    include 'conexao.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $sql = "INSERT INTO usuarios (Nome, Email,Senha) values ('$nome', '$email', '$senha')";

    if($conn->query($sql) === TRUE){
        echo "Dados inseridos com sucesso!";
        header('Location: ../index.php');
    }else{
        echo "Erro ao inserir os dados".$conn->error;
    }
    $conn->close();
?>
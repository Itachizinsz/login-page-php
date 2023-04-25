<?php
include 'conexao.php';
session_start();
$email = $_POST['email'];
$senha = $_POST['password'];

$query ="select * from usuarios WHERE Email='$email'";
$result = mysqli_query($conn, $query);
if(!$result){
    die('Erro ao executar a consulta:'.mysqli_error($conn));
}

//Verificar se o usuário foi encontrado
if(mysqli_num_rows($result) == 1){

    $usuario =mysqli_fetch_assoc($result);
    if($senha === $usuario['senha']){
        $_SESSION['nome'] = $usuario['Nome'];
        header('Location: ../principal.php');
        exit;
    }else{
        echo 'senha incorreta!';
    }   
}else{
    echo "Usuário não encontrado, Por favor realizar Login: <a href='../index.php'> Login </a>";
}
mysqli_close($conn);

?>
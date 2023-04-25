<?php
   include 'php/conexao.php';
   session_start();
   if(isset($_SESSION['nome'])){
       echo 'Seja Bem vindo! : '.$_SESSION['nome'].'<br>';
       echo "<a href='php/sair.php'>Sair</a>";
   }else{
       echo "Página Restrita, Por favor realizar Login: <a href='index.php'> Login </a>";
   }

?>

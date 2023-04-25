<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "projetologin";

   $conn = mysqli_connect($host, $usuario, $senha, $bd);

   if(!$conn){
    die('Erro ao conectar com a base de dados'.mysqli_connect_error());
   }
?>
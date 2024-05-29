<?php
// Script de conexção para o banco de dados - Nescessário para usar o MySQL

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_will";

//Criando função para conexão com o servidor de banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Definindo conjunto de charset padrão (UTF8)
mysqli_set_charset($conexao, "utf8");

//Testeando a conexão
// if (!$conexao){
//     //Caso a conexão dê erro usar comando 'die()' para parar a aplicação
//     die("Dados inválidos." . mysqli_connect_error());
// } else {
//     echo "Bem vindo.";
// }

?>
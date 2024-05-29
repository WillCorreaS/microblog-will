<?php
//Requerindo o acesso dos dados da conexão
require "conecta.php";

//Criando função para inserir usuário no banco de dados 
function inserirUsuario($conexao, $nome, $email, $tipo, $senha){
    //Montando o comando SQL em uma variável '$sql'
    $sql = "INSERT INTO usuarios(nome, email, tipo, senha)
            VALUES ('$nome', '$email', '$tipo', '$senha')";
    
    //O codigo acima é identificado como texto pelo PHP, abaixo será usado um comando para torná-lo um comando válido

    mysqli_query($conexao, $sql) or die(mysqli_errno($conexao));
}





//Criando função para exibir usuários do banco de dados
function exibirUsuarios($conexao){
    $sql = "SELECT nome, email, tipo, id FROM usuarios";
    //O comando 'mysqli_query()' usando SELECT - retorna a consulta e é necessário armazenar este conteúdo em outra variável
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    //Retornamos o resultado TRANSFORMADO em array associativo
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}






?>
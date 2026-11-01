<?php

session_start();
include "conexao.php";

//A palavra Usuario e Senha vem do nome do campo no formulário
if (empty($_POST['usuario']) || empty($_POST['senha'])) {

//  REDIRECIONA PARA A TELA INICIAL DE LOGIN
    header("Location: tela_inicial_login.php");
    exit();
}

//  Variáveis que vão receber os dados do formulário
$usuario = htmlspecialchars($_POST['usuario']);
$senha = htmlspecialchars($_POST['senha']);

//  Faz a pesquisa no banco de dados
$sql_usuario = "SELECT * FROM usuario WHERE nome = '$usuario'";

//  Executa o SELECT no banco de dados
$resultado_usuario = mysqli_query($conn, $sql_usuario);

//  Retorno da pesquisa informando a quantidade de linhas encontradas
$num_registro = mysqli_num_rows($resultado_usuario);
//  Se retornar algum resultado
if ($num_registro > 0) {
//    Pesquisa a senha do usuário encontrado
    $sql_senha = "SELECT senha FROM usuario WHERE nome = '$usuario'";

//  Executa o SELECT no banco de dados
    $retorno_senha = mysqli_query($conn, $sql_senha);

//  Retorna as informações encontradas em um array
    $usuario_senha = mysqli_fetch_assoc($retorno_senha);

//    password_verify verifica se as duas senha são iguais
    if (password_verify($senha, $usuario_senha['senha'])) {

//        Se forem iguais, cria uma sessão com o nome do usuário
        $_SESSION['usuario'] = $usuario;

//        Abre a página dashoboard.php
        header("Location: dashoboard.php");
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header("Location: tela_inicial_login.php");
    }
}else{
    echo "<h2>Usuário não cadastrado.</h2><br>";
    echo "<hr>";
    echo "<a href='tela_inicial_login.php'>Voltar</a>";
}
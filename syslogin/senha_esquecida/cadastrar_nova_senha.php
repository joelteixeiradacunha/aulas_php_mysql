<?php

include "../conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = htmlspecialchars($_POST['usuario']);
    $docto = htmlspecialchars($_POST['docto']);
    $data_nasc = htmlspecialchars($_POST['data_nasc']);
    $convert_data_sql = date('Y-m-d', strtotime($data_nasc));

    $nova_senha = htmlspecialchars($_POST['nova_password']);
    $conf_nova_password = htmlspecialchars($_POST['conf_nova_password']);

    $sql = "SELECT * FROM usuario WHERE nome = '$usuario'";

    $pesquisa = mysqli_query($conn, $sql);

    $retorno = mysqli_fetch_assoc($pesquisa);

    $registro = mysqli_num_rows($pesquisa);

    if ($registro > 0){
        $id = $retorno['id'];
        $cpf = $retorno['cpf'];
        $data_nasc_sql = $retorno['data_nascimento'];

        if ($nova_senha === $conf_nova_password &&
            $cpf === $docto &&
            $convert_data_sql === $data_nasc_sql){
            $hash_nova_senha = password_hash($nova_senha, PASSWORD_DEFAULT);

            $sql_update = "UPDATE usuario SET senha = '$hash_nova_senha' WHERE id = '$id'";

            $update = mysqli_query($conn, $sql_update);

            echo "<h2>Senha atualizada com sucesso.</h2>";

        }else{
            echo "<h2>Os dados informados não estão corretos ou as senhas não conferem.</h2>";
        }
    }else{
        echo "<h2>Usuário não encontrado.</h2>";
    }

}


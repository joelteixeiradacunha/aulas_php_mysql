<?php
include "funcao_select.php";

$consulta = select("cadastro_aluno");

if ($consulta == true) {

    foreach ($consulta as $linha) {
        echo $consulta["id_aluno"];
        echo $consulta["nome"];
        echo $consulta["email"];
        echo $consulta["telefone"];

    }

    }else {
    echo "Nenhum registro encontrado";
}

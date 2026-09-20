<?php
include "funcao_select.php";

$consulta = select("cadastro_aluno");

if ($consulta == true) {

    foreach ($consulta as $linha) {
        echo $consulta["nome"];
        echo $consulta["email"];


    }

    }else {
    echo "Nenhum registro encontrado";
}

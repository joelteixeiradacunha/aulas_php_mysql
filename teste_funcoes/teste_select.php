<?php
include "../funcoes/funcao_select.php";

$consulta = select('questoes', ('referencia'));

$materias = "todas";

$disciplinas = array("Geografia", "Inglês", "Espanhol", "Português", "Matemática", "Química");

if ($materias == "todas") {
    $consulta = select('questoes');

    if ($consulta == true){

    }
}
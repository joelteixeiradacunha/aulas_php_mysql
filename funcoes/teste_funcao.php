<?php
include "funcao_select.php";

$consulta = select("questoes");

if ($consulta == true) {
    $i = 0;
    while ($i <= count($consulta)) {
        $referencia = array($consulta['referencia']);
        $referenciaUnica = array_values(array_unique($referencia));
        $i++;
    }
    var_dump($referenciaUnica);
    }else {
    echo "Nenhum registro encontrado";
}

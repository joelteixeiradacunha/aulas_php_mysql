<?php
include "../funcoes/funcao_select.php";

$consulta = select('questoes');
if ($consulta == true) {

    echo $consulta['referencia'];
}
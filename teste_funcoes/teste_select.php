<?php
include "../funcoes/funcao_select.php";

$consulta = select('questoes', "referencia");
$materia = [];
$contador = 0;
$semRepetir = array();
$numberOfQuestions = 3;



foreach (['SORT_REGULAR'] as $flag) {
    $a_new = array_unique($consulta, constant($flag));
    echo "{$flag} ==> ";
    var_dump($a_new);
    $new_consulta_limpo = array_values(array_filter($a_new));
    var_dump($new_consulta_limpo);
}

foreach ($a_new as $referencia) {
    $new_consulta = select('questoes', 'referencia');
    var_dump($new_consulta);

}

for ($i = 1; $i < count($new_consulta_limpo); $i++){
    $materia[] = $i;
    print_r($materia);
    echo "<br>";
    for ($j = 0; $j <= $numberOfQuestions; $j++){


        $j++;
    }
    $i++;

}
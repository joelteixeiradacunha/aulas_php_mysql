<?php
include "../funcoes/funcao_select.php";

$consulta = select('questoes', "referencia");
$dadosBD = select('questoes');
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

var_dump($consulta);

foreach ($new_consulta_limpo as $key => $value) {
    print_r($value);

    for ($i = 0; $i < $numberOfQuestions; $i++) {
        ?>

        <div class="container-fluid mb-3" style="max-width: 1000px">
            <div class="row">
                <div class="col-10">
                    <div class="numQuestao">
                        <?php echo "Questão: " . ($i + 1) ?>
                    </div>
                    <div class="titulo-questao">
                        <?php echo $dadosBD[$i]['titulo']  ?>
                    </div>
                    <div class="subtitulo">
                        <?php echo $dadosBD[$i]['subtitulo'] ?>
                    </div>
                    <div class="questao">
                        <?php echo $dadosBD[$i]['questao']?>
                    </div>
                </div>
            </div>
        </div>
        <?php

    }
}

?>

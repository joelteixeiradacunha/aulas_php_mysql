<?php
include "../funcoes/funcao_select.php";

$consulta = select("questoes", "questao", null, null, null);

?>
<!DOCTYPE html>
<html LANG="pt-BR">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Retorno Função Select</title>
</head>
<body>

    <div class="titulo">
        <h1>Simulação de Avaliação</h1>
        <br>
        <h3>Avaliação de Geografia</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo-questao"><?php $consulta['titulo']  ?></div>
                <div class="subtitulo"><?php $consulta['subtitulo'] ?></div>
                <div class="questao"><?php $consulta['questao']?></div>
                <div class="lista-alternativas">
                    <input type="radio" id="AlternativaA" name="alternativaA" value="A">
                    <label for="AlternativaA"><?php $consulta['alternativaA']?></label><br>
                    <input type="radio" id="AlternativaB" name="alternativaB" value="B">
                    <label for="AlternativaB"><?php $consulta['alternativaB']?></label><br>
                    <input type="radio" id="AlternativaC" name="alternativaC" value="C">
                    <label for="AlternativaC"><?php $consulta['alternativaC']?></label><br>
                    <input type="radio" id="AlternativaD" name="alternativaD" value="D">
                    <label for="AlternativaD"><?php $consulta['alternativaD']?></label><br>
                    <input type="radio" id="AlternativaE" name="alternativaE" value="E">
                    <label for="AlternativaE"><?php $consulta['alternativaE']?></label><br>
                    <input type="radio" id="RespostaCorreta" name="respostaCorreta" value="Correta" hidden="hidden">
                    <label for="RespostaCorreta"><?php $consulta['respostaCorreta']?></label><br>
                </div>

            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

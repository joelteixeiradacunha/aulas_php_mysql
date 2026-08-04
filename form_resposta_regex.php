<?php
    @$nome = $_REQUEST["nome"];
    @$email = $_REQUEST["email"];
    @$telefone = $_REQUEST["telefone"];
    @$url = $_REQUEST["url"];
    @$genero = $_REQUEST["genero"];

    @$valNome = "";
    @$valEmail = "";
    @$valTelefone = "";
    @$valUrl = "";
    @$valGenero = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Você me apertou!!! Delícia</h1>
    <?php
        echo $nome . "<br>";
        echo $email . "<br>";
        echo $telefone . "<br>";
        echo $url . "<br>";
        echo $genero . "<br>";

    ?>
</body>
</html>
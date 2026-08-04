<?php
    @$nome = $_POST["nome"];
    @$email = $_POST["email"];
    @$telefone = $_POST["telefone"];
    @$url = $_POST["url"];
    @$genero = $_POST["genero"];

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
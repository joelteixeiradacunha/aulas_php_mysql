<?php
    @$nome = $_REQUEST["nome"];
    @$email = $_REQUEST["email"];
    @$telefone = $_REQUEST["telefone"];
    @$url = $_REQUEST["url"];
    @$genero = $_REQUEST["genero"];

    @$valNome = "/^[a-zA-Z]+(?: [a-zA-Z]+)+$/"; // /^[A-Za-zÀ-ÿ]+(?: [A-Za-zÀ-ÿ]+)+$/u
    @$valEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    @$valTelefone = "/^[0-9]{2}[2-9][0-9]{8,9}$/";
    @$valUrl = "/^https?:\/\/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b(?:[-a-zA-Z0-9()@:%_\+.~#?&\/\/=]*)$/";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            background: #fbd7d7;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto Condensed', sans-serif;
            color: #8a2626;
        }
        section{
            width: 400px;
            height: 400px;
            padding: 10px;
            background-color: #94a3b8;
        }
    </style>
</head>
<body>

    <section>
        <h1>Dados digitados</h1>
        <?php
            if (preg_match($valNome, $nome)) {
                echo "<h3>Nome: $nome </h3>";
            }else{
                echo "<p>A informação que você digitou não atende aos requisitos.</p>
                        <p>Digite seu nome e sobrenome.</p>";
            }

            if (preg_match($valEmail, $email)) {
                echo "<h3>E-mail: $email </h3>";
            }else{
                echo "<p>Digite um e-mail válido.</p>";
            }

            if (preg_match($valTelefone, $telefone)) {
                echo "<h3>Telefone: $telefone </h3>";
            }else{
                echo "<p>Digite um telefone válido.</p>";
            }

            if (preg_match($valUrl, $url)) {
                echo "<h3>URL: $url </h3>";
            }else{
                echo "<p>Digite uma URL válida</p>";
            }

            echo "<h3>Gênero: $genero </h3>";

        ?>
    </section>
</body>
</html>
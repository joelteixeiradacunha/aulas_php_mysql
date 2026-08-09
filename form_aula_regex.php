<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Aula REGEX</title>
</head>
<body>
<form action="form_resposta_regex.php" method="post">

    Nome: <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
    E-mail: <input type="text" name="email" placeholder="Digite um e-mail válido"><br><br>
    Telefone: <input type="text" name="telefone" placeholder="Digite o telefone com o DDD. Somente números."><br><br>
    Webmail: <input type="text" name="url" placeholder="Digite a URL completa"><br><br>
    Gênero: <input type="radio" value="masculino" name="genero">Masculino
    <input type="radio" value="Feminino" name="genero">Feminino
    <input type="radio" value="Não quero informar" name="genero">Não informar<br><br>
    <input type="submit" value="Me aperte!!" style="padding: 15px">

</form>

</body>
</html>

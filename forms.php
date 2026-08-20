<?php
//  MANIPULAÇÃO DE FORMULÁRIOS

//  AS SUPERGLOBAIS $_GET E $_POST SÃO UTILIZADAS PARA COLETAR DADOS

?>
<!--<form action="forms_welcome_post.php" method="post">-->
<!--    Name: <input type="text" name="name"><br>-->
<!--    E-mail: <input type="text" name="email"><br>-->
<!--    <input type="submit">-->
<!--</form>-->

<?php
//  Quando o usuário preenche os dados do formulário e clica no botão submit, os dados do formulário são enviados para processamento no arquivo PHP chamado welcome.php através do método HTTP POST.
//  Para exibir os dados submetidos pode-se simplesmente fazer um echo para todas as variáveis

//  Mesmo exemplo, só que agora com o método GET
?>
<!--<form action="forms_welcome_get.php" method="get">-->
<!--    Name: <input type="text" name="name"><br>-->
<!--    E-mail: <input type="text" name="email"><br>-->
<!--    <input type="submit">-->
<!--</form>-->

<?php
//  $_GET é uma array de variáveis passadas para o script atual via parâmetros de pesquisa URL. As informações enviadas são visíveis para todos. É usada para informações ão sensíveis. Nunca deve ser utilizado para envio de senhas

//  $_POST é uma array de variáveis passadas para o script atual via método HTTP POST. É invisível para os outros.

// VALIDAÇÃO DE FORMULÁRIOS
//  TENHA SEMPRE EM MENTE A SEGURANÇA NO PROCESSAMENTO DE FORMULÁRIOS

$name = $email = $gender = $comment = $website = $phone = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$validaNome = "/^[a-zA-Z ]*$/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = verificar_entrada($_POST["name"]);
//        verifica se o nome contém apenas letras e espaços em branco
        if (!preg_match($validaNome,$name)) {
            $nameErr = "Permitido apenas letras e espaço em branco";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = verificar_entrada($_POST["email"]);
//        Verifica se o endereço de e-mail ´bem formado
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de e-mail inválido";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = verificar_entrada($_POST["website"]);
//        Vwrifica se a sintaxe da URL é válida
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "URL inválida.";
        };

    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = verificar_entrada($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = verificar_entrada($_POST["gender"]);
    }
}

function verificar_entrada($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strtoupper($data);
    return $data;
}
?>
<html lang="pt-BR">
<head>
    <style>
        .error{color: red}
    </style>

    <title>Formulários</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br>
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Telefone: <input type="text" name="phone" value="<?php echo $phone; ?>">
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>" placeholder="Exemplo: https://www.exemplo.com.br"><br>
        <span style="color: lightgrey"><small>Exemplo: https://www.exemplo.com.br</small></span>
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40" value="<?php echo $comment; ?>"></textarea><br>
        <br><br>
        Gênero:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Feminino
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Masculino
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Outro
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
//  ANALISANDO O FORMULÁRIO ACIMA

//  $_SERVER["PHP_SELF"] é uma variável super global que o nome do arquivo onde o script está sendo executado.
//  A função htmlspecialchars() converte caracteres especiais em entidades. Isso significa que irá substituir caracteres como < e > em &lt; e &gt;. Isso impede que invasores explorem o código injetando código HTML ou Javascript.

//  VALIDAÇÃO DO CÓDIGO PHP
//  1º PASSO
//  Remover caracteres desnecessários (espaços extras, tabulações, novas linhas) dos dados de entrada do usuário com a função PHP trim()
//  2º PASSO
//  Remover barras invertidas \ dos dados de entrada do usuário com a função PHP stripslashes()


?>
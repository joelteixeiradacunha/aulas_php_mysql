<?php
include "../funcoes/funcao_inserir.php";

$nome = $_REQUEST['fullName'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$type = $_REQUEST['kind'];
$telefone = $_REQUEST['cellPhone'];

inserir(array('nome', 'password', 'email', 'tipo', 'telefone'), array('$nome', '$password', '$email', '$type', '$telefone'), 'cadastro_aluno');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Exit</title>
</head>
<body>

<h3>Parabéns <?php echo $nome ?>, seu cadastro foi realizado com sucesso.</h3>

</body>
</html>



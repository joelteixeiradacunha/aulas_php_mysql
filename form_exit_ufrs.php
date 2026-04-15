<?php


//@$nome = $_REQUEST["nome"];
//@$password = $_REQUEST["password"];
//@$email = $_REQUEST["email"];
//@$type = $_REQUEST["kind"];
//@$telefone = $_REQUEST["cellPhone"];


//  A classe mysqli é instanciada com servidor, usuário, senha, banco e porta.
//  Se houver falha na conexão, o programa encerra exibindo a mensagem de erro.
//  Por fim, a conexão é fechada com close(), liberando os recursos utilizados.
//  Estilo orientado a objetos

//$mysqli = new mysqli("localhost", "root", "", "aulaphp");
//
//if ($mysqli->connect_error) {
//    die("Erro de conexão." . $mysqli->connect_error);
//}
//$mysqli->close();

// Estilo ProceduraL
//  Aqui, utiliza-se a função mysqli_connect() para abrir a conexão, mysqli_connect_error() para tratar falhas e mysqli_close() para encerrá-la.
//
//$conexao = mysqli_connect("localhost", "root", "", "aulaphp");
//
//if (!$conexao) {
//    die("Erro de conexão:" . mysqli_connect_error());
//}
//
//mysqli_close($conexao);

//  Tratamento de erros e definição do charset
//  Quando trabalhamos com conexões entre PHP e MySQL, dois pontos fundamentais precisam ser garantidos:
//  Tratar erros de conexão e execução de forma organizada, para evitar que mensagens confusas ou inseguras cheguem ao usuário.
//  Definir corretamente o conjunto de caracteres (charset), para impedir problemas de acentuação e garantir compatibilidade com Unicode, incluindo símbolos e emojis.

//  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); – Ativa o modo de exceções, fazendo com que qualquer erro na conexão ou consulta lance uma exceção em vez de apenas retornar false.
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//  try { ... } catch (mysqli_sql_exception $e) { ... } – Usa um bloco try/catch para capturar e tratar erros de conexão.
//try {
////    cria a conexão
//    $conn = new mysqli("localhost", "root", "", "aulaphp");
//
////    define charset
//    $conn->set_charset("utf8mb4");
//    echo "Conexão relaizada com sucesso!";
//}catch (mysqli_sql_exception $e){
//    echo "Erro ao conectar ao banco de dados." . $e->getMessage();
//}

//INSERIR INFORMAÇÕES NO BANCO DE DADOS

$nome = $_REQUEST['fullName'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$type = $_REQUEST['kind'];
$telefone = $_REQUEST['cellPhone'];

try {
    //  conexão com o banco de dados
    $con = new mysqli("localhost", "root", "", "escola");
    $con->set_charset("utf8mb4");

    //  INSERIR DADOS NA TABELA DO BANCO DE DADOS
    //  PRESTAR ATENÇÃO NO NOME DA TABELA
    $sql = "INSERT INTO cadastro_aluno (nome, senha, email, tipo, telefone) VALUES ('$nome','$password','$email','$type','$telefone')";
    $con->query($sql);

    echo "New record created successfully";
}catch (mysqli_sql_exception $e){
    echo "Erro ao inserir no banco de dados." . $e->getMessage();
} finally {
    $con->close();
}
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


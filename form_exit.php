<?php
$connect = mysqli_connect("localhost", "root", "", "aulaphp");

$name = $_REQUEST["name"];
$regAluno = $_REQUEST["regAluno"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["cellPhone"];

$insert = "INSERT INTO cadastroalunos(regAluno, nome, email, celular) 
VALUES ($name, $regAluno, $email, $phone)";

if (mysqli_query($connect, $insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $connect->error;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Exit</title>
</head>
<body>

<h3>Parabéns <?php echo $name ?>, seu cadastro foi realizado com sucesso.</h3>

</body>
</html>

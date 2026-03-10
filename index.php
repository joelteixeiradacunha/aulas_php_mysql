<?php
//Comandos de saída
//echo
echo "<h1>Olá Mundo!</h1><br>
<h3>Hoje está chovendo muito!!!</h3><br>";

//Print
echo "<br>---------------------------------<br>";
$mensagem = "Olá!";
if (print $mensagem) {
    echo " - Mensagem exibida com sucesso!";
}

echo "<br>---------------------------------<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exemplo PHP</title>
</head>
<body>
<h1>Bem-vindo!</h1>

<!--Uso do PHP dentro do HTML-->
<p>
    Hoje é: <?php echo date("d/m/Y"); ?>
</p>
</body>
</html>

<?php
echo "-x-x-x-x-x-x-x-x-x-x-x-x-x<br>";
$nome = "Ana Maria";

if ($nome == "Ana") {
    echo "Olá, Ana!";
} else {
    echo "Bem-vindo, visitante!";
}
echo "<br>-x-x-x-x-x-x-x-x-x-x-x-x-x<br>";


for ($i = 1; $i <= 3; $i++) {
    echo "<br>Número: $i";
}
?>
<?php
echo "<br>---------------------------<br>";
//VARIÁVEIS
//Começam sempre com $
$nome = "Carlos";
$idade = 17;
$altura = 1.75;
$address = "Rua Que sobe e desce e nunca aparece, 723";


echo "Nome: $nome, Altura: $altura, Idade: $idade, Endereço: $address <br>";
echo "Nome: ", $nome, ", Idade: ", $idade, ", Endereço: ", $address, "<br>";

//As variáveis no PHP seguem algumas regras importantes:
//
//Devem começar com o símbolo $.
//
//O nome deve iniciar com uma letra ou sublinhado (_), nunca com número.
//
//O nome pode conter letras, números e o caractere de sublinhado.
//
//São sensíveis a maiúsculas e minúsculas ($nome e $Nome são variáveis diferentes).
//Varáveis válidas
$valorTotal = 175.00;
$_usuario = "JTCunha";
$quantidade_produtos = 100;

//VAriáveis inválidas
$numero = 0;      // Começa com número
$meunome = "Joel";     // Contém hífen
?>

<?php
echo "<br>--------------------------<br>";
define("PI", 3.14159);
define("C", 299792458);

echo "O valor de PI é: ", PI, " e o valor da velocidade da luz é ", C, "m/s.";

const TAXA = 0.15;
echo "<br>O valor da taxa é: " , TAXA;

//Boas práticas no uso de variáveis e constantes
//
//Segue abaixo uma listagem com boas práticas no uso de variáveis e constantes:
//
//    Nomes claros e significativos: use nomes que indiquem o propósito da informação ($totalCompra, TAXA_CAMBIO).
//
//    Evite abreviações sem contexto: nomes como $t ou $x dificultam a leitura.
//
//    Use constantes para valores fixos: como URLs base de uma API, ou caminhos de diretórios.
//
//    Padronize a escrita: por convenção, nomes de constantes são escritos em letras maiúsculas, separados por underline.
?>

<!--Exemplo prático

// Exercício 1
// Crie um algorítmo para verificar se uma pessoa é maior de 18 anos
// Caso seja maior de 18 anos, imprimir na tela "Você já é maior de idade e pode tirar sua habilitação"
// Caso seja menor de idade, imprimir na tela "Você ainda é menor de idade e terá de esperar mais X anos", onde X é a diferença entre a idade atual e a da maioridade.
-->
<?php
$idade = 18;

if ($idade >= 18){
    echo "Você já pode ser preso.";
} else {
    echo "Você ainda é menor de idade.";
}
?>

// Exercício 2
// Crie uma condicional para contar os números de 1 a 100, de um em um e de dois em dois.
// Depois, faça a mesma condicional imprimir a contagem regressiva de três em três

<?php

for ($i = 1; $i <= 100; $i++) {
    echo "$i";
    echo "<br>";
}
for ($i = 1; $i <= 100; $i = $i + 2) {
    echo "$i";
    echo "<br>";
}

for ($i = 100; $i >=1; $i = $i - 3) {
    echo "$i";
}



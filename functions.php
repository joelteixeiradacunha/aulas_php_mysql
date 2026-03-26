<?php

//  Uma função é um bloco de instruções que pode ser usado repetidamente em um programa.
//  Uma função não é executada automaticamente quando uma página é carregada.
//  Uma função é executada somente quando é chamada.

//  CRIANDO UMA FUNÇÃO
//  Começa com a palavra chave function, seguindo do nome da função
//  A chave de abertura "{" indica o início do código da função e a chave de fechamento indica o final da função

//  SYNTAX

function functionName($parametro1, $parametro2)
{
//    código a ser executado
    return true;
}

function myMessage()
{
    echo "Hello World!";
}

//  CHAMANDO A FUNÇÃO
myMessage();

//  PARÂMETROS DA FUNÇÃO
//  Os parâmtros são como variáveis
//  São especificados dentro dos parênteses
//  Pode colocar quantos parâmetros quiser, separados pela vírgula

function familyName($name)
{
    echo "$name Cunha. <br>";
}

familyName("Joel");
familyName("Salete");
familyName("Daniel");
familyName("Neide");

function familyNameBorn($name, $year)
{
    echo "$name Cunha. Nascido em $year. <br>";

}

familyNameBorn("Joel", 1968);
familyNameBorn("Salete", 1967);
familyNameBorn("Daniel", 1959);
familyNameBorn("Neide", 1957);

//  Parâmetro com valor padrão

function setHeight($height = 50) {
    echo "A altura é: $height <br>";
}

setHeight(350);
setHeight();

//  RETORNANDO VALORES

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

//  Passando argumentos por referência
//  Quando um argumento de função é passado por referência, as alterações feitas no argumento também alteram a variável que foi passada como argumento. Para transformar um argumento de função em uma referência, use o operador & antes do argumento/parâmetro:

function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo "<br>" . $num;

//  Número variável de parâmetros
//  Use o operador "..." na frente do parâmetro da função

function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo "<br>" . $a;

//  Pode haver somente um argumento com tamanho variável, e tem que ser o último

function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
        $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo "<br>" . $a;
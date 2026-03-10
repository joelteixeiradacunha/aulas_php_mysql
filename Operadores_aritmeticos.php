<?php

// OPERADORES ARITMÉTICOS
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a - $b; // 7
echo $a * $b; // 30
echo $a / $b; // 3.333...
echo $a % $b; // 1


// OPERADORES RELACIONAIS
// == true se forem iguais
// != true se diferentes
// < true se menor
// > true se maior
// <= true se menor igual
// >= true se maior igual
// === true se' iguais em valor e tipo
// !== true se diferentes em valor ou tipo

$a = 10;
$b = "10";

echo ($a == $b);   // true (valores iguais, tipos diferentes)
echo ($a === $b);  // false (valores iguais, tipos diferentes)


//and true se ambos forem true
//or true se um ou outro forem verdadeiros
//xor se a ou b é true, mas não ambos ao mesmo tempo
//!$a true se a não é true
//&& true se ambos forem true
// || se a ou b é true


$idade = 18;
$tem_carteira = true;


if ($idade >= 18 && $tem_carteira) {
    echo "Pode dirigir.";
} else {
    echo "Não pode dirigir.";
}











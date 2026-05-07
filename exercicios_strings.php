<?php

### 🧩 Exercícios de PHP – Strings

//  Crie uma variável que receba uma frase com ao menos 30 palavras, contando como foi seu final de semana.
//  Resolva as questões abaixo usando essa frase como base
//  Apresente os resultados na tela de forma organizada, contendo o número da pergunta, a pergunta e a resposta.

$fraseDoDia = "Se tiver que amar, ame hoje. Se tiver que sorrir, sorria hoje. Se tiver que chorar, chore hoje. Pois o importante é viver hoje. O ontem já foi e o amanhã talvez não venha.";

//  1. **Contar caracteres**
//  Crie um script que receba uma string e exiba o número total de caracteres usando `strlen()`.
echo $fraseDoDia . "<br>";
echo "Exercício 1 <br>";
echo strlen($fraseDoDia) . " posições.";
echo "<br><br>";
//  2. **Converter para maiúsculas e minúsculas**
//  Dada uma string, exiba:
//
//   * tudo em maiúsculas (`strtoupper()`)
//   * tudo em minúsculas (`strtolower()`)

echo "Exercício 2 <br>";
echo strtoupper($fraseDoDia) . "<br>";
echo strtolower($fraseDoDia) . "<br>";
echo "<br><br>";

//  3. **Inverter uma string**
//  Receba uma palavra e mostre sua versão invertida usando `strrev()`.

echo "Exercício 3 <br>";
echo strrev($fraseDoDia) . "<br>";
echo "<br><br>";
//
//  4. **Verificar se contém uma palavra**
//  Peça uma frase e uma palavra, e verifique se a palavra existe na frase usando `strpos()`.

echo "Exercício 4 <br>";
echo strpos($fraseDoDia, "sorria hoje") . "<br>";
echo "<br><br>";
//  5. **Substituir palavras**
//  Substitua uma palavra específica dentro de uma frase usando `str_replace()`.

echo "Exercício 5 <br>";
echo str_replace("hoje", "sempre", $fraseDoDia) . "<br>";
echo "<br><br>";
//
//  6. **Remover espaços extras**
//  Dada uma string com espaços no início e no fim, remova-os usando `trim()`.

echo "Exercício 6 <br>";
echo trim($fraseDoDia) . "<br>";
echo "<br><br>";
//  7. **Dividir uma string em array**
//  Transforme uma frase em um array de palavras usando `explode()`.

echo "Exercício 7 <br>";
$separar = explode(".", $fraseDoDia);
print_r($separar);
echo "<br><br>";

//  8. **Juntar elementos de um array em string**
//  Dado um array de palavras, junte tudo em uma string usando `implode()`.

echo "Exercício 8 <br>";
$implode = implode(".", $separar);
print_r($implode);
echo "<br><br>";

//
//  9. **Contar palavras em uma frase**
//  Conte quantas palavras existem em uma frase usando `str_word_count()`.

echo "Exercício 9 <br>";
echo str_word_count($fraseDoDia) . " palavras.<br>";
echo "<br><br>";

//  10. **Capitalizar palavras**
//  Receba uma frase e transforme a primeira letra de cada palavra em maiúscula usando `ucwords()`.
echo "Exercício 10 <br>";
echo ucwords($fraseDoDia, "\v");
echo "<br><br>";



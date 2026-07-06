<?php
//  É UMA SEQUENCIA DE CARACTERES
//  É CERCADA POR ASPAS DUPLAS OU SIMPLES

echo "Olá terceirão!!!";
echo '<br>_________________________________________<br>';

//   HÁ DIFERENÇA ENTRE AS DUAS
//   Uma string entre aspas duplas substituirá o valor das variáveis e aceita muitos caracteres especiais, como \n, \r, \t,.

echo "Exemplo: aspas duplas<br>";

$x = "Christian";
$y = "Domynic";
echo "O $x e a $y são muito amigos.";
echo '<br>_________________________________________<br>';

// AS ASPAS SIMPLES NÃO SUBSTITUEM O VALOR DAS VARIÁVEIS
// IMPRIME A STRING COMO ELA FOI ESCRITA

echo "Exemplo: aspas simples<br>";

$x = "Christian";
$y = "Domynic";
echo 'O $x e a $y são muito amigos.';
echo '<br>_________________________________________<br>';

//
// FUNÇÕES COM STRING
// STRLEN() RETORNA O TAMANHO DA STRING

echo "Exemplo: strlen()<br>";
echo ("Olá terceirão. Blz?<br>");
echo strlen("Olá terceirão. Blz?") . " caracteres.";

echo '<br>_________________________________________<br>';


// STR_WORD_COUNT conta o núumero de palavras em uma string
echo "Exemplo: str_word_count()<br>";
echo  str_word_count("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquet velit luctus finibus faucibus. Etiam nisi eros, congue ac sapien.") . " palavras.";
echo '<br>_________________________________________<br>';

//// STR_CONTAINS verifica se a string contém uma substring específica
//// RETORNA TRUE (1) OU FALSE (0)

echo "Exemplo: str_contains()<br>";
$txt = "No meio do caminho tinha uma pedra. Tinha uma pedra no meio do caminho. Tinha uma pedra no meio do caminho tinha uma pedra.";
var_dump(str_contains($txt, "Tinha"));
echo '<br>_________________________________________<br>';
var_dump(str_contains($txt, "boy"));
//
//echo '<br>_________________________________________<br>';
// STRPOS procura por um texto específico dentro de uma string
// Se encontrado, retorna a posição do primeiro caractere do primeiro correspondente

echo "Exemplo: strpos()<br>";

echo strpos("As casas espiam os homens que correm atrás de mulheres. A tarde talvez fosse azul, não houvesse tantos desejos.", "espiam");
echo '<br>_________________________________________<br>';
//
// STR_STARTS_WITH()
// Verifica se a string começa com a referida substring
// Se um correspondente é encontrado, retorna true ou false
// A função é 'case sensitive'

echo "Exemplo: str_starts_with()<br>";
$txt_2 = "As casas espiam os homens que correm atrás de mulheres. A tarde talvez fosse azul, não houvesse tantos desejos.";

var_dump(str_starts_with($txt_2, "As casas"));
echo '<br>_________________________________________<br>';

var_dump(str_starts_with($txt_2, "as casas"));
//echo '<br>_________________________________________<br>';

// STR_ENDS_WITH()
// Verifica se a string termina com a referida substring
// Se um correspondente é encontrado, retorna true
// A função é 'case sensitive'

$tct_2 = "I really love you!";
//echo "str_ends_with()";
//var_dump(str_ends_with($tct_2, "you!"));
//echo '<br>_________________________________________<br>';
//
//var_dump(str_ends_with($tct_2, "You!"));
//echo '<br>_________________________________________<br>';

//  STRREV inverte a string

$text_3 = "socorra-me subi no ônibus em marrocos";
//echo "strrev()<br>";
//echo strrev($text_3);
//echo '<br>_________________________________________<br>';

// TRIM
// remove qualquer espaço em branco do início e do fim da frase

$text_4 = "     I do love you!     ";
//echo $text_4 . "<br>";
//echo trim($text_4);
//
//echo '<br>_________________________________________<br>';

// EXPLODE divide uma string em uma array

$text_5 = "1,2, 3, 4, 5, 6, 7, 8, 9";
$y = explode(",", $text_5);
//echo "Explode";
//print_r($y);
//echo '<br>_________________________________________<br>';

// STRING CONCATENATION
// PARA CONCATENAR utilize . (ponto)

$text_6 = "I don't wanna be your baby!";
$text_7 = "I wanna be your lover!";
//echo $text_6 . $text_7 . "<br>";
//echo $text_6 . " " . $text_7 . "<br>";
//echo "$text_6 $text_7";
//echo '<br>_________________________________________<br>';
//
// SUBSTR -> FATIA UMA STRING
// É usado para extrair uma parte de uma string
// Especifique o índice inicial e o número de caracteres que você quer que retorne

$text_8 = "Your kiss is on my list of the best things of life!";
//echo substr($text_8, 10, 20) . "<br>";
//
//
// Tirando o último parâmetro , a faixa irá até o final.
//echo substr($text_8, 12) . "<br>";
//
// Use índice negativo irá começar a dividir do final para o início
//echo substr($text_8, -15,) . "<br>";
//
// Use tamanho negativo para especificar quantos caracteres omitir, começando do final da string
//echo substr($text_8, 5, -3) . "<br>";
//
//ESCAPE CHARACTERS
// Para inserir caracteres que são ilegais em uma string use um caracter de fuga
$text_9 = "And could \"never\" tears us apart";
//echo $text_9;

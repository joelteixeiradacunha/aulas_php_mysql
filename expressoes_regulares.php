<?php

//  Estrutura
//  "/padrão/modificador

//  Exemplo
//  $exp = "/Maria Luiza/i";
//
//  Maria Luiza é o padrão a ser pesquisado e o i é o modificador
//  que torna a pesquisa case-insensitive

$txt = "E.E. Maria Luiza Miranda Bastos";
$pattern = "/s/i";
echo "Quantas correspondências foram encontradas: " . preg_match_all($pattern, $txt);
?>

<p>As correspondências são procuradas aqui:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>

<p>(Cada correspondência foi substituída por um caractere #)</p>


//  /m

<p>Quantas vezes a plavara "você" ocorre no início da frase:</p>

<pre>Você é a luz que ilumina os meus dias mais difíceis.<br>Você traz paz e alegria para o meu coração todos os instantes.<br>Você transforma qualquer tristeza em um sorriso sincero e radiante.<br>Você tem o dom especial de tornar a vida muito mais leve.<br>Você é a pessoa mais incrível e importante que eu já conheci.</pre>

<?php
$txt = "Você é a luz que ilumina os meus dias mais difíceis.\nVocê traz paz e alegria para o meu coração todos os instantes.\nVocê transforma qualquer tristeza em um sorriso sincero e radiante.\nVocê tem o dom especial de tornar a vida muito mais leve.\nVocê é a pessoa mais incrível e importante que eu já conheci você.";
$pattern = "/^você/m";
echo preg_match_all($pattern, $txt);
?>

<p>As correspondências são mostradas aqui:</p>

<pre>
<?php
echo preg_replace($pattern, "#", $txt);
?>
</pre>

<p>(Cada caractere foi trocado por uma #)</p>

<?php
echo "<br>===================================================<br>";

?>

//  [abc]
<p>Quantas ocorrências das letras "c" or "o" existem no texto acima:</p>

<?php

$pattern = "/[co]/";
echo preg_match_all($pattern, $txt);
?>

<p>As correspondências são mostradas aqui:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>

<p>Cada correspondência foi trocada por #</p>

<?php
echo "<br>===================================================<br>";
?>
//  [^abc]

<p>Quantas letras no texto "E.E. Maria Luiza Miranda Bastos" não são "i" ou "s":</p>

<?php
$txt = "E.E. Maria Luiza Miranda Bastos";
$pattern = "/[^is]/";
echo preg_match_all($pattern, $txt);
?>

<p>As correspondências são mostradas aqui:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>

<p>Cada correspondência foi trocada por #</p>

<?php
echo "<br>===================================================<br>";
?>

//  [a-z] ou [123]
<p>Quantas letras no texto "Eu queria a mala, a mala como ninguém, mas como não posso tê-la, pois a mala esqueci no trem." estão alfabeticamente entre "e" e "o":</p>

<?php
$txt = "Eu que a mala, a mala como ninguém, mas como não posso tê-la, pois a mala esqueci no trem.";
$pattern = "/[e-o]/";
echo preg_match_all($pattern, $txt);
?>

<p>As correspondências são mostradas aqui:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>

<p>Cada correspondência foi trocada por #</p>

<?php
echo "<br>===================================================<br>";
?>


//  [A-z]

<p>Quantas letras no texto anteiorEstão alfabeticamente entre "T" e "e":</p>

<?php

$pattern = "/[T-e]/";
echo preg_match_all($pattern, $txt);
?>

<p>As correspondências são mostradas aqui:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>

<p>Cada correspondência foi trocada por #</p>

<?php
echo "<br>===================================================<br>";
?>



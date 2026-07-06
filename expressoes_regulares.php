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

//  [A-Z]


<p>Quantas letras no texto "E.E. Maria Luiza Miranda Bastos" estão alfabeticamente entre "A" maiúsculo e "Z" maiúculo:</p>

<?php

$txt = "Bem vindos ao E.E. Maria Luiza Miranda Bastos";
$pattern = "/[A-Z]/";
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
//  [0-5] [0-9]

<p>Quantos caracteres no texto "Ligue 99561-1098" é um dígito entre "0" e "5"?</p>

<?php
$txt = "Ligue 99561-1098";
$pattern = "/[0-5]/";
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

<p>Quantos caracteres no texto "Ligue 99561-1098" é um dígito entre "0" e "9"?</p>

<?php
$txt = "Ligue 99561-1098";
$pattern = "/[0-9]/";
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

//  |

<p>Quantas ocorrências de "gato", "cachorro" ou "peixe" estão no texto "Nós temos dois gatos, um peixe e nenhum cachorro.":</p>

<?php
$txt = "Nós temos dois gatos, um peixe e nenhum cachorro.";
$pattern = "/cachorro|gato|peixe/";
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


//  ^ (circunflexo)

<p>O texto "Vou me embora para Pasárgada.", começa com "Vou"?:</p>

<?php
$txt = "Vou me embora para Pasárgada.";
$pattern = "/^Vou/";
echo preg_match_all($pattern, $txt);
?>

<p>Esse método retorna 1 e há uma correpondência, caso contrário 0</p>

<p>As correspondências são mostradas aqui:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>

<p>Cada correspondência foi trocada por #</p>

<?php
echo "<br>===================================================<br>";
?>

//  $ (sifrão)

<p>O texto "Porque lá sou amigo do rei", termina com "rei"?:</p>

<?php
$txt = "Porque lá sou amigo do rei";
$pattern = "/rei$/";
echo preg_match_all($pattern, $txt);
?>

<p>Esse método retorna 1 e há uma correpondência, caso contrário 0</p>

<p>As correspondências são mostradas aqui:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>

<p>Cada correspondência foi trocada por #</p>

<?php
echo "<br>===================================================<br>";
?>


//  \d

<p>Quantos números estão no texto "O ano de 1945 foi marcado pelo fim da 2º guerra mundial."?:</p>

<?php
$txt = "O ano de 1945 foi marcado pelo fim da 2º guerra mundial.";
$pattern = "/\d/";
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


//  \D

    p>Quantos caracteres não numéricos estão no texto "O ano de 1945 foi marcado pelo fim da 2º guerra mundial."?:</p>

<?php
$txt = "O ano de 1945 foi marcado pelo fim da 2º guerra mundial.";
$pattern = "/\D/";
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

//  \s

<p>Quantos espaços em brancos tem no texto <br> "De tudo, ao meu amor serei atento. Antes, e com tal zelo, e sempre, e tanto que mesmo em face do maior encanto dele se encante mais meu pensamento"?:</p>

<?php
$txt = "De tudo, ao meu amor serei atento. Antes, e com tal zelo, e sempre, e tanto que mesmo em face do maior encanto dele se encante mais meu pensamento";
$pattern = "/\s/";
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

//  \S
<p>Quantos caracteres sem os espaços em branco tem no texto <br> "Quero vivê-lo em cada vão momento e em seu louvor hei de espalhar meu canto e rir meu riso e derramar meu pranto ao seu pesar ou seu contentamento."?:</p>

<?php
$txt = "Quero vivê-lo em cada vão momento e em seu louvor hei de espalhar meu canto e rir meu riso e derramar meu pranto ao seu pesar ou seu contentamento.";
$pattern = "/\S/";
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
\\  \w

<p>Quantos caracteres alfabéticos ou numéricos estão no texto "www.devops.com.br?:</p>
<?php
$txt = "www.devops.com.br";
$pattern = "/\w/";
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


//  \W

<p>Qunatos caracteres não-alfabéticos e não-numéricos estão no texto "www.devops.com.br"?:</p>
<?php
$txt = "www.devops.com.br";
$pattern = "/\W/";
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

//  \b

<p>O texto "Que não seja imortal, posto que é chama, mas que seja infinito enquanto dure." começa com "Que"?:</p>

<?php
$txt = "Que não seja imortal, posto que é chama, mas que seja infinito enquanto dure.";
$pattern = "/\bQue/";
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



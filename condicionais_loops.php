<?php

// CONDICIONAL IF, ELSEIF ELSE

//   if (condição) {
//    // código executado se a condição for verdadeira
//   }

$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.<br>";
}

echo "<br>----------------------------------------<br>";
// ELSE

//  if(condição) {
//    // verdadeiro
//} else {
//    // falso
//}

$idade = 16;

if ($idade >= 18) {
    echo "Pode dirigir.";
} else {
    echo "Não pode dirigir.";
}

echo "<br>----------------------------------------<br>";
// ELSEIF

//  if (condição1) {
//    // se condição1 for verdadeira
//} elseif (condição2) {
//    // se condição2 for verdadeira
//} else {
//    // se nenhuma condição anterior for verdadeira
//}

$nota = 5;

if ($nota >= 9) {
    echo "Excelente!";
} elseif ($nota >= 7) {
    echo "Aprovado.";
} else {
    echo "Reprovado.";
}
echo "<br>----------------------------------------<br>";
//   OPERADORES COMUNS EM ESTRUTURAS CONDICIONAIS

$idade = 17;
$tem_autorizacao = false;


if ($idade >= 18 || $tem_autorizacao) {
    echo "Entrada liberada.";
} elseif ($idade >= 18 && $tem_autorizacao) {
    echo "Não pode entrar. Vai chamar seu pai.";
}
else {
    echo "Entrada negada.";
}

echo "<br>----------------------------------------<br>";
// SWITCH-CASE
// switch (expressão) {
//    case valor1:
//        // código executado se a expressão for igual a valor1
//        break;
//
//
//    case valor2:
//        // código executado se a expressão for igual a valor2
//        break;
//
//    default:
//        // código executado se nenhum dos valores anteriores for igual
//}

$dia = 10;

switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Valor inválido.";
}
echo "<br>----------------------------------------<br>";
// AGRUPANDO MÚLTIPLOS CASOS

$diaSemana = 12;

switch ($diaSemana) {
    case 1:
    case 7:
        echo "Fim de semana";
        break;
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "Dia útil. Acorda e vai trabalhar";
        break;
    default:
        echo "Dia inválido";
}

// WHILE..DO
// FOR..FOREACH
//while (condição) {
//    // código a ser executado
//}

$contador = 0;

while ($contador <= 5) {
    echo "Contador: $contador<br>";
    $contador++;
}
echo "<br>----------------------------------------<br>";
// DO...WHILE
// do {
//  // código a ser executado
//} while (condição);

$contador = 1;
do {
    echo "Número: $contador<br>";
    $contador++;
} while ($contador <= 10);
echo "<br>----------------------------------------<br>";
// FOR
// for (inicialização; condição; incremento) {
//  // código a ser executado
//}

for ($i = 0; $i <= 5; $i++) {
    echo "Valor: $i<br>";
}
// FOREACH
// foreach ($array as $valor) {
// código que usa $valor

echo "<br>----------------------------------------<br>";
$cores = ["vermelho", "azul", "verde"];

foreach ($cores as $cor) {
    echo "Cor: $cor<br>";
}
echo "<br>----------------------------------------<br>";
$aluno = ["nome" => "Lucas", "idade" => 16];

foreach ($aluno as $chave => $valor) {
    echo "$chave: $valor<br>";
    }
?>
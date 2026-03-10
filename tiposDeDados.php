<!--Os principais tipos de dados no PHP são:

    integer : Números inteiros, positivos ou negativos, sem casas decimais

    float: Números reais, também conhecidos como "doubles", com casas decimais

    string: Sequências de caracteres (textos)

    boolean: Valores lógicos: verdadeiro (true) ou falso (false)

    array: Conjunto ordenado de dados indexados

    object: Instância de uma classe (Programação Orientada a Objetos)

    NULL: Valor especial que representa ausência de valor

    resource: Referência a recursos externos, como conexões de banco de dados ou arquivos
-->
<?php
//  INTEIROS
$ano = 2025;
echo $ano;
echo "<br>";
?>

<?php
//   PONTO FLUTUANTE
$pi = 3.14159;
echo "Valor de PI: $pi";
?>

<?php

// STRINGS
$nome = "Joel T Cunha";
$cpf = '09963462871';
echo $nome . ' CPF: ' . $cpf;


// BOOLEAN
$idade = 18;

if ($idade == true) {
    echo "<br>" . $idade;
}
?>
// ARRAYS

// ARRAYS INDEXADAS
// São arrays em que os elementos são armazenados com índices numéricos automáticos, começando do zero
<?php
$nomes = ["Joel T Cunha", 57, "Rua Jamelão", "202", "Apto 102"];
//          [0]          [1]        [2]       [3]     [4]
echo "<br>Nomes: " . $nomes[4];
foreach ($nomes as $nome) {
    echo "<br>" . $nome;
}

echo "<br>-------------------------------------------<br>";
// ARRAYS ASSOCIATIVAS
//Em vez de usar números como índice, os arrays associativos usam chaves nomeadas.

$aluno = [
        "nome" => "João",
        "idade" => 17,
        "curso" => "Informática",
        "escola" => "Maria Luiza"
];

// Acessando os valores pelas chaves
echo $aluno["nome"] . "<br>";   // Saída: João
echo $aluno["idade"] . "<br>";  // Saída: 17
echo $aluno["curso"] . "<br>";
echo $aluno["escola"] . "<br>";

echo "<br>-------------------------------------------<br>";
foreach ($aluno as $curso) {
//    echo $curso["nome"] . "<br>";
}
// ARRAYS MULTIDIMENSIONAIS

// São arrays que contêm outros arrays dentro deles. São úteis para representar tabelas, matrizes ou estruturas mais complexas.
echo "<br>-------------------------------------------<br>";

  $turma = [
    ["nome" => "Ana", "nota" => 8.5], // [0]
    ["nome" => "Bruno", "nota" => 7.0], // [1]
    ["nome" => "Clara", "nota" => 9.2] // [2]
  ];

  echo $turma[0]["nome"] . "<br>"; // Ana
  echo $turma[1]["nota"] . "<br>"; // 9.2


// Exercício prático

// Declare uma variável com seu nome (string)

// Declare sua idade (integer)

// Declare sua altura (float)

// Declare se você é estudante (boolean)
$estudante = true;
if ($estudante)
// Crie um array com 3 cores favoritas

// Exiba todas as informações usando echo
?>
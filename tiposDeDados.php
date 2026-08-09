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
//String
$x = "Bom dia galera";
$y = '5'; // isso é uma string
var_dump($x);
var_dump($y);
echo "<br>";

//  INTEIROS
$x = 2026;
var_dump($x);
echo "<br>";
?>
<!---->
<?php
//   PONTO FLUTUANTE
$pi = 3.14159;
var_dump($pi);
echo "<br>";
?>
<!---->
<?php
//
//// STRINGS
//$nome = "Joel T Cunha";
//$cpf = '09963462871';
//echo $nome . ' CPF: ' . $cpf;
//
//
// BOOLEAN - BOOL -> Verdadeiro (True) ou Falso (False)
$x = false;
var_dump($x);
echo "<br>";

?>
// ARRAYS
<?php
$carros = array("Volkswagen","Fiat","Chevrolet", 57, 27, "Ford");
var_dump($carros);
?>
<!--// ARRAYS INDEXADAS-->
<!--// São arrays em que os elementos são armazenados com índices numéricos automáticos, começando do zero-->
<?php
// OBJETO
class Car {
    public $cor;
    public $modelo;
    public function __construct($cor, $modelo) {
        $this->cor = $cor;
        $this->modelo = $modelo;
    }
    public function message() {
        return "Meu carro é um " . $this->modelo . " " . $this->cor . "!";

    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

//NULL
$x = "Hello world!";
var_dump($x);

//$x = null;
//var_dump($x);

//$nomes = ["Joel T Cunha", 57, "Rua Jamelão", "202", "Apto 102"];
////          [0]          [1]        [2]       [3]     [4]
//echo "<br>Nomes: " . $nomes[4];
//foreach ($nomes as $nome) {
//    echo "<br>" . $nome;
//}
//
//echo "<br>-------------------------------------------<br>";
//// ARRAYS ASSOCIATIVAS
////Em vez de usar números como índice, os arrays associativos usam chaves nomeadas.
//
//$aluno = [
//        "nome" => "João",
//        "idade" => 17,
//        "curso" => "Informática",
//        "escola" => "Maria Luiza"
//];
//
//// Acessando os valores pelas chaves
//echo $aluno["nome"] . "<br>";   // Saída: João
//echo $aluno["idade"] . "<br>";  // Saída: 17
//echo $aluno["curso"] . "<br>";
//echo $aluno["escola"] . "<br>";
//
//echo "<br>-------------------------------------------<br>";
//foreach ($aluno as $curso) {
////    echo $curso["nome"] . "<br>";
//}
//// ARRAYS MULTIDIMENSIONAIS
//
//// São arrays que contêm outros arrays dentro deles. São úteis para representar tabelas, matrizes ou estruturas mais complexas.
//echo "<br>-------------------------------------------<br>";
//
//  $turma = [
//    ["nome" => "Ana", "nota" => 8.5], // [0]
//    ["nome" => "Bruno", "nota" => 7.0], // [1]
//    ["nome" => "Clara", "nota" => 9.2] // [2]
//  ];
//
//  echo $turma[0]["nome"] . "<br>"; // Ana
//  echo $turma[1]["nota"] . "<br>"; // 9.2
//
//
//// Exercício prático
//
//// Declare uma variável com seu nome (string)
//
//// Declare sua idade (integer)
//
//// Declare sua altura (float)
//
//// Declare se você é estudante (boolean)
//$estudante = true;
//if ($estudante)
//// Crie um array com 3 cores favoritas
//
//// Exiba todas as informações usando echo
//?>
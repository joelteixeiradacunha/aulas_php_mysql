<?php

//  ARRAYS
//  É uma variável especial que pode manter muitos valores sob um único nome e é possível acessar os valores referindo-se a eles com um número de índice ou um nome.

$carros = array("Volvo", "BMW", "Toyota");
echo "<br>";
var_dump($carros);

//  TRÊS TIPOS DE ARRAYS
//  -> Indexadas
//  -> Associativas
//  -> Multidimensional

//  Os itens de um array podem ser qualquer tipo de dados

//$myArr = array("Volvo", 15,  ["apples", "bananas"]);
//echo "$myArr[0]<br>";
//echo "$myArr[1]<br>";
//echo "$myArr[2]";

// Contando os itens de um array

echo count($carros);

$cars = array("Volvo", "BMW", "Toyota");
echo "<br>" . $cars[0];

//  MUDANDO O VALOR DE UM ITEM DO ARRAY
$animals = array("dog", "cat", "horse", "monkey");
echo "<br>";
var_dump($animals);
echo "<br>";
$animals[1] = "Bat";
var_dump($animals);

//  Percorrer a array e imprimir todos os valores
$animals = array("dog", "cat", "horse", "monkey");
foreach ($animals as $animal) {
    echo "I love " . $animal . "<br>";
}
echo "<br><br>";


//      ARRAYS ASSOCIATIVAS
//  Usa uma chave nomeada
$car = array("marca"=>"Ford", "modelo"=>"Mustang", "ano"=>1964);
var_dump($car);

// Acessando um item do array
echo $car["marca"];
echo "<br>";

//  Trocando um item de um array
$car["ano"] = 2024;
var_dump($car);

//  Percorrer uma array associativa
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}

//  DECLARANDO UMA ARRAY VAZIA
$cars = [];
$cars[0] = "Brasília";
$cars[1] = "Puma";
$cars[2] = "Veraneio";
var_dump($cars);

$myCar = [];
$myCar["brand"] = "Volkswagen";
$myCar["model"] = "Variant";
$myCar["year"] = 1970;
var_dump($myCar);

//  ADICIONAR ITENS AO ARRAY

<?php
//
////  ARRAYS (MATRIZ)
////  É uma variável especial que pode manter muitos valores sob um único nome e é possível acessar os valores referindo-se a eles com um número de índice ou um nome.
////  Os itens de um array podem ser qualquer tipo de dados
//
//// CRIANDO ARRAYS
//echo "Meu array <br>";
//$meuArray= array("Volvo", 15,  ["maçãs", "bananas"]);
//var_dump($meuArray);
//echo "<br>";
//
//echo "Meu segundo array <br>";
//$meuSegundoArray = ["Volvo", 15,  ["maçãs", "bananas"]];
//var_dump($meuSegundoArray);
//echo "<br>";
//
//$names = [
//    "John",
//    "Mary",
//    "Jane",
//    "All are Does"
//];
//var_dump($names);
//
//echo "<br>";
////  Declarando um array vazio
//$cities = [];
//$cities[0] = "Londres";
//$cities[1] = "Asturias";
//$cities[2] = "Contagem";
//var_dump($cities);
//echo "<br>";
//  TRÊS TIPOS DE ARRAYS
//  -> Indexadas
//  -> Associativas
//  -> Multidimensional

//  ARRAYS INDEXADOS
//  Em um array indexado cada item tem um índice numérico.
//
//echo  "Arrays Indexados: <br>";
//$carros = array("Volvo", "BMW", "Toyota");
//echo "<br>";
//var_dump($carros);
//echo "<br><br>";
//echo "Acessando item do array: <br>";
//echo "Posição [0] = " . $carros[0] . "<br>";
//
//echo "<br><br>";
//
////  MUDANDO O VALOR DE UM ITEM DO ARRAY
////  Para mudar o valor de um item, utilize o índice numérico
//
//echo "Mudando o valor de um array: <br>";
//$animals = array("dog", "cat", "horse", "monkey");
//echo "<br>";
//var_dump($animals);
//echo "<br>";
//echo "Substituindo cat por Bat";
//$animals[1] = "Bat";
//var_dump($animals);
//
//// LOOP ATRAVÉS DE UM ARRAY INDEXADO
//echo "<br><br>";
//echo "Usando a array animals <br>";
//echo "Usa-se foreach (para cada) para percorrer o array <br>";
//foreach ($animals as $animal) {
//    echo $animal . "<br>";
//}
//echo "<br><br>";
//// Contando os itens de um array
//echo "Contando os itens de um array <br>";
//echo count($animals);
//echo "<br><br>";
//
////  Percorrer a array e imprimir todos os valores
//$animals = array("dog", "cat", "horse", "monkey");
//foreach ($animals as $animal) {
//    echo "I love " . $animal . "<br>";
//}
//echo "<br><br>";
//
////      ARRAYS ASSOCIATIVAS
////  Usa uma chave nomeada, ao invés de índices numéricos
//echo "Arrays Associativos: <br>";
//$car = array("marca"=>"Ford", "modelo"=>"Mustang", "ano"=>1964);
//var_dump($car);
//
//// Acessando um item do array
//echo"Acessando o item de um array associativo <br>";
//echo $car["marca"];
//echo "<br>";
//echo "<br><br>";
////  Trocando um item de um array
//echo "Trocando item do array <br>";
//$car["ano"] = 2024;
//var_dump($car);
//echo "<br><br>";
//
////  Percorrer uma array associativa
//foreach ($car as $x => $y) {
//    echo "$x: $y <br>";
//}
//
////  DECLARANDO UMA ARRAY VAZIA
//$cars = [];
//$cars[0] = "Brasília";
//$cars[1] = "Puma";
//$cars[2] = "Veraneio";
//var_dump($cars);
//
//$myCar = [];
//$myCar["brand"] = "Volkswagen";
//$myCar["model"] = "Variant";
//$myCar["year"] = 1970;
//var_dump($myCar);
//
//$cars = array("marca"=>"Ford", "modelo"=>"Mustang", "ano"=>1964);


//  ADICIONAR ITENS AO ARRAY

//  [] - ADICIONA UM ÚNICO ITEM NO FINAL DE UM ARRAY
echo "[] - ADICIONA UM ÚNICO ITEM NO FINAL DE UM ARRAY <br>";
$fruits = array("Maçã", "Banana", "Morango");
var_dump($fruits);
echo "<br>";
$fruits[] = "Laranja";
var_dump($fruits);
echo "<br>";

//$fruits = array("Maçã", "Banana", "Morango");
//var_dump($fruits);
//echo "<br>";
//$fruits[] = "Laranja";
//$fruits[] = "Pera";
//var_dump($fruits);
//echo "<br>";
//
//echo "[] - ADICIONA UM ÚNICO ITEM NO FINAL DE UM ARRAY ASSOCIATIVA <br>";
//echo "<br>";
//$cars = array("brand" => "Ford", "model" => "Mustang");
//$cars["color"] = "Red";
//var_dump($cars);
//echo "<br>";
//
////  ARRAY_PUSH() - ADICIONA UM OU MAIS ITENS AO FINAL DE UM ARRAY
//echo"ARRAY_PUSH() - ADICIONA UM OU MAIS ITENS AO FINAL DE UM ARRAY<br>";
//$fruits = array("Maçã", "Banana", "Morango");
//var_dump($fruits);
//echo "<br>";
//array_push($fruits, "Laranja", "Kiwi", "Limão");
//var_dump($fruits);
//echo "<br>";
//
//echo"ARRAY_PUSH() - ADICIONA UM OU MAIS ITENS AO FINAL DE UM ARRAY ASSOCIATIVA<br>";
//$cars = array("brand" => "Ford", "model" => "Mustang");
//var_dump($cars);
//echo "<br>";
//$cars += ["color" => "red", "year" => 1964];
//var_dump($cars);
//echo "<br>";
//
////  ARRAY_UNSHIFT() - ADICIONA UM OU MAIS ITENS NO INÍCIO DE UM ARRAY
//echo "ARRAY_UNSHIFT() - ADICIONA UM OU MAIS ITENS NO INÍCIO DE UM ARRAY<br>";
//$fruits = array("Maçã", "Banana", "Morango");
//var_dump($fruits);
//echo "<br>";
//array_unshift($fruits, "Laranja", "Kiwi", "Limão");
//var_dump($fruits);
//echo "<br>";
//
////  ARRAY_SPLICE() - REMOVE UMA PORÇÃO DO ARRAY E SUBSTITUI COM NOVOS ELEMENTOS
//echo "ARRAY_SPLICE() - REMOVE UMA PORÇÃO DO ARRAY E SUBSTITUI COM NOVOS ELEMENTOS<br>";
//$fruits = array("Maçã", "Banana", "Morango");
//var_dump($fruits);
//echo "<br>";
//$new_fruit = "Laranja";
//array_splice($fruits, 1, 0, $new_fruit); // insere "Laranja" no index 1
//var_dump($fruits);
//echo "<br>";
//
////  ARRAY_MERGE() - MESCLA DUAS OU MAIS ARRAYS
//echo "ARRAY_MERGE() - MESCLA DUAS OU MAIS ARRAYS<br>";
//$fruits1 = array("Maçã", "Banana");
//$fruits2 = array("Morango", "Laranja");
//var_dump($fruits1);
//echo "<br>";
//var_dump($fruits2);
//echo "<br>";
//$result = array_merge($fruits1, $fruits2);
//var_dump($result);
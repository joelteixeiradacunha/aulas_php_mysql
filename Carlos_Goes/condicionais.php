<?php
//  DECLARAÇÕES CONDICIONAIS

// IF

$idade = 60;

if ($idade <= 11){
    echo "Você é criança.";
}elseif ($idade <= 19){
    echo "Você é teen (adolescente).";
}elseif ($idade <60){
    echo "Você é adulto.";
}else{
    echo "Você é velhinho.";
}

//  Verifique o dia da semana e mostre uma frase de efeito para aquele dia da semana.

$diaDaSemana = "Domingo";
if ($diaDaSemana == "Segunda"){
    echo "<br>Segunda<br>";
}elseif ($diaDaSemana == "Terca"){
    echo "<br>Terça <br>";
}elseif ($diaDaSemana == "Quarta"){
    echo "<br>Quarta <br>";
}elseif ($diaDaSemana == "Quinta"){
    echo "<br>Quinta <br>";
}elseif ($diaDaSemana == "Sexta"){
    echo "<br>Sexta <br>";
}elseif ($diaDaSemana == "Sabado"){
    echo "<br>Sábado <br>";
}elseif ($diaDaSemana == "Domingo"){
    echo "<br>Domingo <br>";
}else{
    echo "Verifique se você digitou o dia da semana corretamente,";
}
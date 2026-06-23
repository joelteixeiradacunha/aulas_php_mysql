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

$diaDaSemanaSwitch = "Terça-feira";

switch ($diaDaSemanaSwitch) {
    case "Segunda":
        echo "<br>É o melhor dia da semana!";
        break;
    case "Terça":
        echo "<br>Falta muito para o final de semana.";
        break;
    case "Quarta":
        echo "<br>Estamos no meio da semana.";
        break;
    case "Quinta":
        echo "<br>Véspera de sexta. Graças a Deus.";
    case "Sexta":
        echo "<br>Que alegria. Dia de bebemorar.";
        break;
    case "Sabado":
        echo "<br>Vou dormir até acordar.";
        break;
    case "Domingo":
        echo "<br>Ahhhh. Está acabando o final de semana.";
        break;
    default:
        echo "<br>Digite corretamento o dia da semana!!!";
}
<?php
//  CRIAR UMA FUNÇÃO QUE AVALIA O PLACAR DE UM JOGO.
//  INFORMAR SE FOI VITÓRIA, EMPATE OU DERROTA E QUANTOS
//  PONTOS O TIME GANHOU.

function resultadoDoJogo($timeA, $timeB)
{
    if ($timeA > $timeB) {
        echo "O time A ganhou de $timeA x $timeB. Ganhou 3 pontos na tabela";
    }elseif ($timeB > $timeA) {
        echo "O time B ganhou de $timeB x $timeA. Ganhou 3 pontos na tabela";
    }else{
        echo "Ocorreu um empate.";
    }
}

resultadoDoJogo(0, 0);
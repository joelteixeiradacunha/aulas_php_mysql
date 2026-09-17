<?php

function atualizar($coluna, $valor, $tabela, $where)
{
//    Verifica se são arrays existe e se possui o mesmo número de elementos de valor

    if ((is_array($coluna)) and (is_array($valor))) {
//        Verifica se possui o mesmo número de elementos de valor
        if (count(($coluna)) == count($valor)) {
            $valor_coluna = null;

//          Colocar os dois arrays em uma única string
            for ($i = 0 ; $i < count($coluna); $i++) {
                $valor_coluna .= "{$coluna[$i]}= '{$valor[$i]}',";
            }
//            Tirando a vírgula da última posição
            $valor_coluna = substr($valor_coluna,0, -1);

//            MySQL
            $atualizar = "UPDATE {$tabela} SET {$valor_coluna} {$where}";
        }else{
            return false;
        }
    }else{
        $atualizar = "UPDATE {$tabela} SET {$coluna} = {$valor} {$where}";
    }
    if ($conexao = connect()){
        if (mysqli_query($conexao, $atualizar)){
            return true;
        }else{
            echo "Query inválida";
            return false;
        }
    }else{
        return false;
    }
}
<?php

include "../includes/conexao.php";
include "../includes/fecha_conexao.php";

function select($tabela, $coluna="*", $where = NULL, $ordem=NULL, $limit=NULL)
{
//    $SQL da consulta
    $sql="SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limit})";

    if ($conexao = conectar())
    {
//        conseguiu consultar
        if ($query = mysqli_query($conexao, $sql)) {
//        encontrou alguma coisa
            if (mysqli_num_rows($query) > 0) {
                $resultados_totais = array();

                while ($resultado = mysqli_fetch_assoc($query)) {
                    $resultados_totais[] = $resultado;
                }
//                fecha conexão
                fechaConexao($conexao);
                return $resultados_totais;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }else{
        return false;
    }
}

select("questoes");
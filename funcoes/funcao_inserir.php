<?php
include "../includes/conexao.php";
include "../includes/fecha_conexao.php";

    function inserir ($coluna, $valor, $tabela){
        if ((is_array($coluna)) and (is_array($valor))) {
            if (count($coluna) == count($valor)){
                $inserir = "INSERT INTO {$tabela} (".implode(', ', $coluna).") VALUE ('".implode('\', \'',$valor)."')";

            }else {
                return false;
            }
//        }else {
//            $inserir = "INSERT INTO {$tabela} ({$coluna}) VALUES ('{$valor}')";
        }
        if ($conexao = conectar()) {
            if (mysqli_query($conexao, $inserir)) {
                fechaConexao($conexao);
                return true;
            }else {
                echo "Query inválida";
                return false;
            }
        }else {
            return false;
        }
    }

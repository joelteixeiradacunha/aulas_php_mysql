<?php
    include ("includes/conexao.php");
    include ("includes/fecha_conexao.php");

    function select ($tabela, $coluna = "*", $where = null, $ordem = null, $limite = null )
    {
        $sql = "select {$coluna} from {$tabela} {$where} {$ordem} {$limite}";

        if ($conexao = conectar()) {
            if ($query = mysqli_query($conexao, $sql)) {
                if (mysqli_num_rows($query)>0) {
                    $resultados_totais = array();
                    while ($resultado = mysqli_fetch_assoc($query)) {
                        $resultados_totais[]=$resultado;
                    }
                    fechaConexao($conexao);
                    return$resultados_totais;
                }else {
                    return false;
                }

            }else {
                return  false;
            }
        } else {
            return  false;
        }
    }


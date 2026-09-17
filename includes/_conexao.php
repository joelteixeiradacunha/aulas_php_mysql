<?php
    $banco = "burgu147_sglaf";
    $usuario = "burgu147_jtcunha";
    $senha = "xLmgetvHQI%K";
    $hostname = "localhost";


    function conectar ($banco = "burgu147_sglaf", $usuario = "burgu147_jtcunha",  $senha = "xLmgetvHQI%K", $hostname = "localhost") {
        $connect = mysqli_connect($hostname, $usuario, $senha, $options);
        if (!$connect) {
            die(trigger_error("Não foi possível estabelecer conexão com o banco de dados"));
            return false;
        }else {
            $db = mysqli_select_db($connect, $banco);
            if (!$db) {
                die(trigger_error("Não foi possível selecionar o banco de dados"));
                return  false;
            }else {
                return $connect;
            }
        }
    }
?>
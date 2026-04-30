<?php
$conn = mysqli_connect("localhost", "root", "", "escola");

if ($conn ->connect_error){
    die("Falha na conexão: " . $conn->connect_error);
}else{
    echo "Tudo ok";
}
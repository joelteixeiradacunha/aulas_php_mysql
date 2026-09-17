<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";
$nome = $_REQUEST['nome'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to update a record
$sql = "UPDATE cadastro_aluno SET lastname='Doe' WHERE nome= '$nome'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
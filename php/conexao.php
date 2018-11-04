<?php

define("HOST", "localhost"); 
define("USER", "ppi");
define("PASSWORD", "ppi2018-2"); 
define("DATABASE", "ppi");

function conectaAoMySQL()
{
	$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if ($conn->connect_error)
	throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);

	return $conn;   
}

?>

<!--
CREATE TABLE Cliente(
	nome varchar(15),
    sobrenome varchar(30),
    cpf varchar(14),
    telefone varchar(15)
);
-->
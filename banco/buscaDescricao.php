<?php

require "../conectarComMySQL.php";

$id = $_GET["id"];
$descricao = "";

if($id !== "")
{
    $id     = strtolower($id);
    $len    = strlen($id);
   
    // Função definida no arquivo conexaoMysql.php
    $conn = conectaAoMySQL();

    $sql = "
    SELECT DESCRICAO
    FROM imovel WHERE ID = ". $id . ";
    ";

    $result = $conn->query($sql);
	if (!$result)
		throw new Exception('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conn->error);

	if ($result->num_rows == 1)  //To check if the row exists
    {
        $row = $result->fetch_assoc();
        echo $row['DESCRICAO'];
    }            
        
    else {
        echo "Descrição não encontrada";
    }
    $conn->close();
}


?>
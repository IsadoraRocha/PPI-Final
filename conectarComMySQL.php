<?php	
	define( "HOST", "localhost" );
	define( "USER", "root");
	define( "PASSWORD", "");
	define( "DATABASE", "ppi");
	
	
	function conectaAoMySQL()
	{
		$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
		if ($conn->connect_error)
		throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);
	
		return $conn;   
	}
?>
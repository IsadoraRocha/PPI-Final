<?php
	// define( "HOST", "fdb22.awardspace.net" );
	// define( "USER", "2838336_imobiliariadacidade");
	// define( "PASSWORD", "ppifinal123");
	// define( "DATABASE", "2838336_imobiliariadacidade");
	
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
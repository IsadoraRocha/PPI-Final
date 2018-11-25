<?php

	session_start();

	include 'conectarComMySQL.php';
	
	$nome=$_POST['nome'];
	
	$senha=$_POST['senha'];
	
	
	/*$nome='Ivan';
	$senha='1327';*/
	
	$sql = "SELECT COUNT(*) FROM FUNCIONARIO WHERE NOME = :nome AND SENHA = :senha";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':senha', $senha );
	$result = $stmt->execute();
	/*$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );*/
	$result = $stmt->fetchColumn();
	/*echo "Contagem: ";
	print_r($result);*/

	
	
	if ($result)
	{
		$_SESSION['usuarioLogado']=$nome;
	}
?>
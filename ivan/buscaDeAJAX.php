<?php

	session_start();

	include 'conectarComMySQL.php';
	
	class Imovel 
		{
		  public $nome;
		  public $senha;
		}
	
	/*$nome=$_POST['nome'];
	echo "Você digitou o nome de usuário ".$nome." ";
	$senha=$_POST['senha'];
	echo "Você digitou a senha ".$senha." ";*/
	
	$nome='Ivan';
	$senha='1327';
	
	$sql = "SELECT * FROM CLIENTE WHERE NOME = :nome AND SENHA = :senha";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':senha', $senha );
	$result = $stmt->execute();
	$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );
	/*$result = $stmt->fetch_assoc();*/
	/*echo "Contagem: ";
	print_r($result);
	echo $result;*/
	$imovel = new Imovel();
	if ($result)
	{
		$imovel->rua    = $result["NOME"];
		$imovel->numero = $result["SENHA"];
	}
	/*echo 'Usuário logado (login.php): '.$_SESSION['usuarioLogado'].'.';*/
	$jsonStr = json_encode($endereco);
	echo $jsonStr;
?>
<?php

require "conexao.php";

function filtraEntrada($dado) 
{
  $dado = trim($dado);               // remove espaços no inicio e no final da string
  $dado = stripslashes($dado);       // remove contra barras: "cobra d\'agua" vira "cobra d'agua"
  $dado = htmlspecialchars($dado);   // caracteres especiais do HTML (como < e >) são codificados
  
  return $dado;
}

$msgErro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  // Define e inicializa as variáveis
  $nome = $sobrenome = $cpf = $telefone = $email = "";
  
  $nome             = filtraEntrada($_POST["nome"]); 
  $sobrenome        = filtraEntrada($_POST["sobrenome"]);
  $cpf              = filtraEntrada($_POST["cpf"]);    
  $telefone         = filtraEntrada($_POST["telefone"]);
  $email            = filtraEntrada($_POST["email"]);

  try
	{    
    // Função definida no arquivo conexaoMysql.php
    $conn = conectaAoMySQL();

    $sql = "
      INSERT INTO Cliente (nome, sobrenome, cpf, telefone, email)
      VALUES (?, ?, ?, ?, ?);
    ";

    // prepara a declaração SQL (stmt é uma abreviação de statement)
    if (! $stmt = $conn->prepare($sql))
      throw new Exception("Falha na operacao prepare");

    // Faz a ligação dos parâmetros em aberto com os valores.
    if (! $stmt->bind_param($nome, $sobrenome, $cpf, $telefone, $email))
      throw new Exception("Falha na operacao bind_param");
        
    if (! $stmt->execute())
      throw new Exception("Falha na operacao execute");
    
    $formProcSucesso = true;
  }
	catch (Exception $e)
	{
		$msgErro = $e->getMessage();
	}
}
  
?>
<?php

require "conectarComMySQL.php";

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
  $nome = $sobrenome = $cpf = $email = $telefone = "";
  
  $nome             = filtraEntrada($_POST["nome"]);     
  $sobreNome        = filtraEntrada($_POST["sobreNome"]);
  $cpf              = filtraEntrada($_POST["cpf"]);
  $email            = filtraEntrada($_POST["email"]);
  $telefone         = filtraEntrada($_POST["telefone"]);

  try
	{    
    // Função definida no arquivo conexaoMysql.php
    $conn = conectaAoMySQL();

    $sql = "
			INSERT INTO CLIENTE (NOME, SOBRENOME, CPF, EMAIL, TELEFONE) 
			VALUES(?, ?, ?, ?, ?);
    ";

    // prepara a declaração SQL (stmt é uma abreviação de statement)
    if (! $stmt = $conn->prepare($sql))
      throw new Exception("Falha na operacao prepare: " . $conn->error);

    // Faz a ligação dos parâmetros em aberto com os valores.
    if (! $stmt->bind_param("sssss", $nome, $sobreNome, $cpf, $email, $telefone))
      throw new Exception("Falha na operacao bind_param: " . $stmt->error);
        
    if (! $stmt->execute())
      throw new Exception("Falha na operacao execute: " . $stmt->error);
    
    $formProcSucesso = true;
  }
    catch (Exception $e)
    {
      $msgErro = $e->getMessage();
    }
    mysqli_close($conn);
}

?>
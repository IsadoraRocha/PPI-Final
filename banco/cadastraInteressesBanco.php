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
  $nome = $imovel = $proposta = $email = $telefone = "";
  
  $nome             = filtraEntrada($_POST["nome"]);     
  $email            = filtraEntrada($_POST["email"]);
  $telefone         = filtraEntrada($_POST["telefone"]);
  $imovel           = filtraEntrada($_POST["imovel"]);
  $proposta         = filtraEntrada($_POST["proposta"]);

  try
	{    
    // Função definida no arquivo conexaoMysql.php
    $conn = conectaAoMySQL();

    $sql = "
			INSERT INTO INTERESSES (NOME, EMAIL, TELEFONE, IMOVEL, PROPOSTA) 
			VALUES(?, ?, ?, ?, ?);
    ";

    // prepara a declaração SQL (stmt é uma abreviação de statement)
    if (! $stmt = $conn->prepare($sql))
      throw new Exception("Falha na operacao prepare: " . $conn->error);

    // Faz a ligação dos parâmetros em aberto com os valores.
    if (! $stmt->bind_param("sssis", $nome, $email, $telefone, $imovel, $proposta))
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
<?php

session_start();

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
  $senha = $email = "";
  
  $senha            = filtraEntrada($_POST["senha"]);
  $email            = filtraEntrada($_POST["email"]);

  try
	{    
    // Função definida no arquivo conexaoMysql.php
    $conn = conectaAoMySQL();

    $sql = "
    SELECT EMAIL, SENHA
    FROM funcionario WHERE EMAIL = ? AND SENHA = ?;
  ";
    // prepara a declaração SQL (stmt é uma abreviação de statement)
    if (! $stmt = $conn->prepare($sql))
      throw new Exception("Falha na operacao prepare: " . $conn->error);

    // Faz a ligação dos parâmetros em aberto com os valores.
    if (! $stmt->bind_param("ss", $email, $senha))
      throw new Exception("Falha na operacao bind_param: " . $stmt->error);
        
    if (! $stmt->execute())
      throw new Exception("Falha na operacao execute: " . $stmt->error);
    
    $stmt->bind_result($email, $senha);
    $stmt->store_result();

    if($stmt->num_rows == 1)  //To check if the row exists
      $_SESSION['email'] = $email;        
      
    else {
        echo "<script>alert(\"Usuário ou senha inválido\");</script>";
    }
    $stmt->close();
    
  }
	catch (Exception $e)
	{
		$msgErro = $e->getMessage();
	}
  $conn->close();
}

?>
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
  $tipoImovel = $sobreNome = $cpf = $nascimento = $bairro = "";
  $cep = $rua = $numero =  $senha = $email = $telefone = "";
  
  $tipoImovel             = filtraEntrada($_POST["tipoImovel"]);     
  $sobreNome        = filtraEntrada($_POST["sobreNome"]);
  $cpf              = filtraEntrada($_POST["cpf"]);
  $nascimento       = filtraEntrada($_POST["nascimento"]); 
  $bairro           = filtraEntrada($_POST["bairro"]);
  $cep              = filtraEntrada($_POST["cep"]);
  $rua              = filtraEntrada($_POST["rua"]);
  $numero           = filtraEntrada($_POST["numero"]);
  $senha            = filtraEntrada($_POST["senha"]);
  $senha            = password_hash($senha, PASSWORD_DEFAULT);
  $email            = filtraEntrada($_POST["emailFunc"]);
  $telefone         = filtraEntrada($_POST["telefone"]);

  try
	{    
    // Função definida no arquivo conexaoMysql.php
    $conn = conectaAoMySQL();

    $sql = "
    INSERT INTO FUNCIONARIO (NOME, SOBRENOME, CPF, NASCIMENTO, BAIRRO, CEP, RUA, NUMERO, SENHA, EMAIL, TELEFONE) 
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
  ";
  

    // prepara a declaração SQL (stmt é uma abreviação de statement)
    if (! $stmt = $conn->prepare($sql))
      throw new Exception("Falha na operacao prepare: " . $conn->error);

    // Faz a ligação dos parâmetros em aberto com os valores.
    if (! $stmt->bind_param("sssssisisss", $nome, $sobreNome, $cpf, $nascimento, $bairro, $cep, $rua, $numero, $senha, $email, $telefone))
      throw new Exception("Falha na operacao bind_param: " . $stmt->error);
        
    if (! $stmt->execute())
      throw new Exception("Falha na operacao execute: " . $stmt->error);
    
    $formProcSucesso = true;
  }
	catch (Exception $e)
	{
		$msgErro = $e->getMessage();
	}
  $conn->close();
}

?>
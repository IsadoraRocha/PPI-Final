<?php 

require 'conectarComMySQL.php';

class Cliente 
{
    public $nome;
    public $sobrenome;
    public $cpf;
    public $telefone;
    public $email;
}

function getClientes($conn)
{
  $arrayClientes = [];
  
  $SQL = "
    SELECT NOME, SOBRENOME, CPF, TELEFONE, EMAIL
    FROM cliente
  ";
  
  // Prepara a consulta
  if (! $stmt = $conn->prepare($SQL))
    throw new Exception("Falha na operacao prepare: " . $conn->error);
      
  // Executa a consulta
  if (! $stmt->execute())
    throw new Exception("Falha na operacao execute: " . $stmt->error);

  // Indica as variáveis PHP que receberão os resultados
  if (! $stmt->bind_result($nome, $sobrenome, $cpf, $telefone, $email))
    throw new Exception("Falha na operacao bind_result: " . $stmt->error);    
  
  // Navega pelas linhas do resultado
  while ($stmt->fetch())
  {
    $cliente = new cliente();
    
    $cliente->nome          = $nome;
    $cliente->sobrenome     = $sobrenome;
    $cliente->cpf           = $cpf;
    $cliente->telefone      = $telefone;
    $cliente->email         = $email;

    $arrayClientes[] = $cliente;
  }
  
  return $arrayClientes;
}

$arrayClientes = "";
$msgErro = "";

try
{
  $conn = conectaAoMySQL();
  $arrayClientes = getClientes($conn);  
  
}
catch (Exception $e)
{
  $msgErro = $e->getMessage();
}

?>

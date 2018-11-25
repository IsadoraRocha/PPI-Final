<?php 

require 'conectarComMySQL.php';

class Funcionario 
{
    public $nome;
    public $sobrenome;
    public $cpf;
    public $telefone;
    public $email;
    public $bairro;
    public $rua;
    public $numero;
}

function getFuncionarios($conn)
{
  $arrayFuncionarios = [];
  
  $SQL = "
    SELECT NOME, SOBRENOME, CPF, TELEFONE, EMAIL, BAIRRO, RUA, NUMERO
    FROM funcionario;
  ";
  
  // Prepara a consulta
  if (! $stmt = $conn->prepare($SQL))
    throw new Exception("Falha na operacao prepare: " . $conn->error);
      
  // Executa a consulta
  if (! $stmt->execute())
    throw new Exception("Falha na operacao execute: " . $stmt->error);

  // Indica as variáveis PHP que receberão os resultados
  if (! $stmt->bind_result($nome, $sobrenome, $cpf, $telefone, $email, $bairro, $rua, $numero))
    throw new Exception("Falha na operacao bind_result: " . $stmt->error);    
  
  // Navega pelas linhas do resultado
  while ($stmt->fetch())
  {
    $funcionario = new Funcionario();
    
    $funcionario->nome          = $nome;
    $funcionario->sobrenome     = $sobrenome;
    $funcionario->cpf           = $cpf;
    $funcionario->telefone      = $telefone;
    $funcionario->email         = $email;
    $funcionario->bairro        = $bairro;
    $funcionario->rua           = $rua;
    $funcionario->numero        = $numero;

    $arrayFuncionarios[] = $funcionario;
  }
  
  return $arrayFuncionarios;
}

$arrayFuncionarios = "";
$msgErro = "";

try
{
  $conn = conectaAoMySQL();
  $arrayFuncionarios = getFuncionarios($conn);  
  
}
catch (Exception $e)
{
  $msgErro = $e->getMessage();
}

?>

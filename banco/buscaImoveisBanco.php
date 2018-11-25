<?php 

require 'conectarComMySQL.php';

class Imovel 
{
    public $tipoImovel;
    public $situacao;
    public $aluguel;
    public $venda;
    public $bairro;
    public $cep;
    public $rua;
    public $numero;
    public $valor;
    public $qtsuites;
    public $qtsalas;
    public $qtjantar;
    public $qtbanheiros;
    public $qtquartos;
    public $qtvagas;
    public $terreno;
    public $armarios;
    public $descricao;
    public $titulo;
}

function getImoveis($conn)
{
  $arrayImoveis = [];
  
  $SQL = "
    SELECT TITULO, DATA_CONSTRUCAO, TIPO_IMOVEL, SITUACAO_IMOVEL, ALUGUEL, VENDA, CEP, RUA, NUMERO, BAIRRO, VALOR,
    QTDE_QUARTOS, QTDE_SUITES, QTDE_BANHEIROS, QTDE_SALAS, QTDE_JANTAR, QTDE_VAGAS, TERRENO, ARMARIOS, DESCRICAO
    FROM imovel
  ";
  
  // Prepara a consulta
  if (! $stmt = $conn->prepare($SQL))
    throw new Exception("Falha na operacao prepare: " . $conn->error);
      
  // Executa a consulta
  if (! $stmt->execute())
    throw new Exception("Falha na operacao execute: " . $stmt->error);

  // Indica as variáveis PHP que receberão os resultados
  if (! $stmt->bind_result($titulo, $construcao, $tipoImovel, $situacao, $aluguel, $venda, $cep, $rua, $numero, $bairro, $valor, $qtquartos, $qtsuites, $qtbanheiros, $qtsalas, $qtjantar, $qtvagas, $terreno, $armarios, $descricao))
    throw new Exception("Falha na operacao bind_result: " . $stmt->error);    
  
  // Navega pelas linhas do resultado
  while ($stmt->fetch())
  {
    $imovel = new Imovel();
    
    $imovel->titulo           = $titulo;
    $imovel->construcao       = $construcao;
    $imovel->tipoImovel       = $tipoImovel;    
    $imovel->situacao         = $situacao; 
    $imovel->aluguel          = $aluguel;
    $imovel->venda            = $venda; 
    $imovel->cep              = $cep;
    $imovel->rua              = $rua;
    $imovel->numero           = $numero;
    $imovel->bairro           = $bairro;
    $imovel->valor            = $valor;
    $imovel->qtquartos        = $qtquartos;
    $imovel->qtsuites         = $qtsuites;
    $imovel->qtsalas          = $qtsalas;
    $imovel->qtjantar         = $qtjantar;
    $imovel->qtbanheiros      = $qtbanheiros;
    $imovel->qtvagas          = $qtvagas;
    $imovel->terreno          = $terreno;
    $imovel->armarios         = $armarios;
    $imovel->descricao        = $descricao;
  

    $arrayImoveis[] = $imovel;
  }
  
  return $arrayImoveis;
}

$arrayImoveis = "";
$msgErro = "";

try
{
  $conn = conectaAoMySQL();
  $arrayImoveis = getImoveis($conn);  
  
}
catch (Exception $e)
{
  $msgErro = $e->getMessage();
}

?>

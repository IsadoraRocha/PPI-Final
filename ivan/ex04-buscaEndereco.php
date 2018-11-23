<?php

class Endereco 
{
  public $rua;
  public $numero;
  public $bairro;
}

try
{
  include 'conectarComMySQL.php';

    $nome='Ivan';
	$senha='1327';
	
	$sql = "SELECT COUNT(*) FROM FUNCIONARIO WHERE NOME = :nome AND SENHA = :senha";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':senha', $senha );
	$result = $stmt->execute();
	/*$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );*/
	$result = $stmt->fetchColumn();
	/*echo "Contagem: ";
	print_r($result);*/
	echo $result;
    
  if ($result)
  {
    
    $endereco = new Endereco();
    
    $endereco->rua    = 'Cambuquira';
    $endereco->numero = '925';
    $endereco->bairro = 'Osvaldo';

  }
  
  $jsonStr = json_encode($endereco);
  echo $jsonStr;
  
}
catch (Exception $e)
{
  $msgErro = $e->getMessage();
}


if ($conn != null)
  $conn->close();

?>
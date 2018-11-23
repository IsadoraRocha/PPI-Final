<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	try
	{						
		// Inicializa as variáveis como vazias
		$bairro = "";
		/*echo "bairro: $bairro (bloco try)";*/

		// Verifica se todos os campos necessários foram recebidos
		if (!isset($_POST["bairro"]))
			throw new Exception("O bairro do imovel deve ser fornecida");
		/*if (!isset($_POST["nome"]))
			throw new Exception("O nome do aluno deve ser fornecido");
		if (!isset($_POST["email"]))
			throw new Exception("O email do aluno deve ser fornecido");
		if (!isset($_POST["senha"]))
			throw new Exception("A senha do aluno deve ser fornecida");*/

		// Pre-processa os dados recebidos
		$bairro = filtraEntradaForm($_POST["bairro"]);
		/*$nome      = filtraEntradaForm($_POST["nome"]);
		$email     = filtraEntradaForm($_POST["email"]);
		$senha     = filtraEntradaForm($_POST["senha"]);*/

		// Valida os dados recebidos
		if ($bairro == "")
			throw new Exception("O bairro do imóvel deve ser fornecida");
		/*if ($nome == "")
			throw new Exception("O nome do aluno deve ser fornecido");
		if ($email == "")
			throw new Exception("O email do aluno deve ser fornecido");
		if ($senha == "")
			throw new Exception("A senha do aluno deve ser fornecida");*/

		buscaImovel($bairro/*, $nome, $email, $senha*/);
		/*echo "OK Dados cadastrados: $bairro";*/
	}
	catch (Exception $e)
	{
		// altera o código de retorno de status para '400 Bad Request'.
		// A função http_response_code deve ser chamada antes do script enviar qualquer
		// texto para a saída padrão 
		http_response_code(400); 
		
		$msgErro = $e->getMessage();
		echo $msgErro;
	}
}

function buscaImovel($bairro/*, $nome, $email, $senha*/)
{
	// Efetivar o cadastro do aluno.
	/*echo "buscaImovel ";*/
	
	include 'conectarComMySQL.php';
	
	$sql = "SELECT COUNT(*) FROM IMOVEIS WHERE BAIRRO = :bairro";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam( ':bairro', $bairro );
	$result = $stmt->execute();
	/*$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );*/
	$result = $stmt->fetchColumn();
	/*echo "Contagem: ";
	print_r($result);*/
	/*echo "Result: ".$result;*/
	
	/*$sql = "INSERT INTO ENDERECO (bairro) VALUES (:bairro)";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam( ':bairro', $bairro );
	$result = $stmt->execute();
	
	$sql = "SELECT COUNT(*) FROM ENDERECO WHERE bairro = :bairro";
	$stmt->bindParam( ':bairro', $bairro );
	$stmt = $PDO->prepare($sql);
	echo "Contagem depois de inserção: ".$result;
	
	$caminho = 'fotoDeImovel/'.$bairro;
	move_uploaded_file($_FILES['userfile']['tmp_name'], $caminho);*/
	
	if($result)
	{
		
	$sql = "SELECT ID, TIPO_IMOVEL, BAIRRO, ALUGUEL, AREA, QUARTOS, VAGAS_GARAGEM FROM IMOVEIS WHERE BAIRRO = :bairro";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam( ':bairro', $bairro );
	$result = $stmt->execute();
	while ($row = $stmt->fetch())
	{	
	echo '<div class="row">
                <div class="info col-md-3">
                    <h5>';
	echo $row['BAIRRO'];			
	echo '</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Aluguel:</td>
                            <td>';
	echo $row['ALUGUEL'];
	echo '</td>
                        </tr>
                        <tr>
                            <td>Área total:</td>
                            <td>';
	echo $row['AREA'];						
	echo '</td>
                        </tr>
                        <tr>
                            <td>Número de quartos:</td>
                            <td>';
	echo $row['QUARTOS'];						
	echo '</td>
                        </tr>
                        <tr>
                            <td>Vagas na garagem</td>
                            <td>';
	echo $row['VAGAS_GARAGEM'];						
	echo '</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col d-flex align-items-center">
                    <table class="table table-borderless align-middle">
                        <tbody>
                            <tr>
                                <td><img class="imagem img-fluid" src="fotoDeImovel/';
								echo $row['ID'];
								echo '1.jpg" alt="imagem1"></td>
                                <td><img class="imagem img-fluid" src="fotoDeImovel/';
								echo $row['ID'];
								echo '2.jpg" alt="imagem2"></td>
								<td><img class="imagem img-fluid" src="fotoDeImovel/';
								echo $row['ID'];
								echo '3.jpg" alt="imagem3"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>';
	};
	};
	
	return "OK";
}

function filtraEntradaForm($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
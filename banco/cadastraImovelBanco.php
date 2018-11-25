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
  $tipoImovel = $situacao = $aluguel = $venda = $bairro = "";
  $cep = $rua = $numero =  $valor = $qtsuites = $qtsalas = "";
  $qtjantar = $qtbanheiros = $qtquartos = $qtvagas = "";
  $terreno = $armarios = $descricao = $titulo = $construcao = "";
  
  $titulo           = filtraEntrada($_POST["titulo"]);
  $construcao       = filtraEntrada($_POST["construcao"]);
  $tipoImovel       = filtraEntrada($_POST["tipoImovel"]);     
  $situacao         = filtraEntrada($_POST["situacao"]);
  $aluguel          = filtraEntrada($_POST["aluguel"]);
  $venda            = filtraEntrada($_POST["venda"]);
  $cep              = filtraEntrada($_POST["cep"]);
  $rua              = filtraEntrada($_POST["rua"]);
  $numero           = filtraEntrada($_POST["numero"]);
  $bairro           = filtraEntrada($_POST["bairro"]);
  $valor            = filtraEntrada($_POST["valor"]);
  $qtquartos        = filtraEntrada($_POST["qtquartos"]);
  $qtsuites         = filtraEntrada($_POST["qtsuites"]);
  $qtsalas          = filtraEntrada($_POST["qtsalas"]);
  $qtjantar         = filtraEntrada($_POST["qtjantar"]);
  $qtbanheiros      = filtraEntrada($_POST["qtbanheiros"]);
  $qtvagas          = filtraEntrada($_POST["qtvagas"]);
  $terreno          = filtraEntrada($_POST["terreno"]);
  $armarios         = filtraEntrada($_POST["armarios"]);
  $descricao        = filtraEntrada($_POST["descricao"]);

  if(!$aluguel == 'Sim'){
    $aluguel = 'Nao';
  }  
  if(!$venda == 'Sim'){
    $venda = 'Nao';
  }
  
  try
	{    
    // Função definida no arquivo conexaoMysql.php
    $conn = conectaAoMySQL();

    $sql = "
    INSERT INTO imovel (TITULO, TIPO_IMOVEL, DATA_CONSTRUCAO, SITUACAO_IMOVEL, ALUGUEL, VENDA, CEP, RUA, NUMERO, BAIRRO, VALOR,
    QTDE_QUARTOS, QTDE_SUITES, QTDE_BANHEIROS, QTDE_SALAS, QTDE_JANTAR, QTDE_VAGAS, TERRENO, ARMARIOS, DESCRICAO) 
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
  ";
  

    // prepara a declaração SQL (stmt é uma abreviação de statement)
    if (! $stmt = $conn->prepare($sql))
      throw new Exception("Falha na operacao prepare: " . $conn->error);

    // Faz a ligação dos parâmetros em aberto com os valores.
    if (! $stmt->bind_param("ssssssisisdiiiiiidss", $titulo, $tipoImovel,$construcao, $situacao, $aluguel, $venda, $cep, $rua, $numero, $bairro, $valor, $qtquartos, $qtsuites, $qtbanheiros, $qtsalas, $qtjantar, $qtvagas, $terreno, $armarios, $descricao))
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

// //Upload fotos

// $target_dir = "css/img/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "<script type='text/javascript'>alert(<?php echo \"Insira um arquivo de foto\"; 
//  ?/>);</script>";
//         $uploadOk = 0;
//     }
// }
// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "<script type='text/javascript'>alert(<?php echo \"Nome de aruqivo já existente\"; ?/>);</script>";
//     $uploadOk = 0;
// }
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "<script type='text/javascript'>alert(<?php echo \"Arquivo muito grande\"; ?/>);</script>";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "<script type='text/javascript'>alert(<?php echo \"Insira um arquivo de foto\"; ?/>);</script>";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "<script type='text/javascript'>alert(<?php echo \"Não foi possivel fazer o upload\"; ?/>);</script>";

//   // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//       echo "<script type='text/javascript'>alert(<?php echo \"Arquivos salvos com sucesso\"; ?/>);</script>";
//     } else {
//       echo "<script type='text/javascript'>alert(<?php echo \"Erro ao fazer upload\"; ?/>);</script>";
//     }
// }
?>


<?php
	require "php/verificaSessao.php";
	include "banco/buscaFuncionarioBanco.php";
?>

<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
	<meta charset="UTF-8">
	<title>Lista de Funcionarios</title>
	<!--Partes Bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!--Partes css-->
	<link rel="stylesheet" href="css/acessoRestritoCSS.css">
    <link rel="stylesheet" href="css/indexCSS.css">

	<!--Partes JS-->
	<script src = "jQuery/animations.js"></script>
</head>
<body>
<br>
<div class="container" style="text-align:center">
<h3>Funcionarios Cadastrados</h3>

<table class="table table-hover bg-light" style="opacity: 0.8">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Sobrenome</th>
      <th>CPF</th>
      <th>Telefone</th>
      <th>E-mail</th>
      <th>Bairro</th>
      <th>Rua</th>
      <th>Número</th>
    </tr>
  </thead>
  
  <tbody>
      <?php
  
  if ($arrayFuncionarios != "")
  {
    foreach ($arrayFuncionarios as $funcionario)
    {       
      echo "
      <tr>
        <td>$funcionario->nome</td>
        <td>$funcionario->sobrenome</td>
        <td>$funcionario->cpf</td>
        <td>$funcionario->telefone</td>
        <td>$funcionario->email</td>
        <td>$funcionario->bairro</td>
        <td>$funcionario->rua</td>
        <td>$funcionario->numero</td>
      </tr>      
      ";
    }
  }
      
      ?>    
      
  </tbody>
</table>

<?php

if ($msgErro != "")
  echo "<p class='text-danger'>A operação não pode ser realizada: $msgErro</p>";

?>
</div>
    <br>
    <?php include "php/footer.php"; ?>	
</body>
</html>
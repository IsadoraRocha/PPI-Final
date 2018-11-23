<?php
	//require "php/verificaSessao.php";
	require "banco/cadastraClienteBanco.php";
?>

<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
	<meta charset="UTF-8">
	<title>Acesso Liberado</title>
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
<div class="container">
		<div class="card">
			<div class="card-body">
				<h2>Cadastro de Clientes</h2><br>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
					<div class="row">
						<div class="form-group col-md-4">
							<label for="nome">Nome:</label>
							<input type="text" class="form-control" id="nome" name="nome">
						</div>

						<div class="form-group col-md-4">
							<label for ="sobreNome">Sobrenome:</label>
							<input type="text" class="form-control" name="sobreNome"  id="sobreNome"><br>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="cpf">CPF:</label>
							<input type="number" class="form-control" name="cpf" id="cpf" maxlength="11"><br>
						</div>

						<div class="form-group col-md-4">
							<label for="telefone">Telefone:</label>
							<input type="tel" class="form-control" id="telefone" name="telefone" maxlength="12"><br>
						</div>
					</div>
					<div class="form-group col">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" id="email" name="email"><br>
					</div>
					<br>
					<button type="submit" class="btn btn-default" name="botaoCliente">Cadastrar</button>
				</form> 
				<?php 
				if ($_SERVER["REQUEST_METHOD"] == "POST") 
				{  
					if ($msgErro == "")
					echo "<h3 class='text-success'>Dados armazenados com sucesso!</h3>";
					else
					echo "<h3 class='text-danger'>Cadastro não realizado: $msgErro</h3>";
				}
				?>   
			</div>
		</div>
	</div>
    <br>
    <?php include "php/footer.php"; ?>	
</body>
</html>
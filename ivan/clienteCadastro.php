<?php include('openDB.php') ?>

<?php
$sucess = false;

$nome = mysqli_real_escape_string($db, $_POST['nome']);
$sobreNome = mysqli_real_escape_string($db, $_POST['sobreNome']);
$cpf = mysqli_real_escape_string($db, $_POST['cpf']);
$telefone = mysqli_real_escape_string($db, $_POST['telefone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password_1']);

	$query = "INSERT INTO CLIENTE (nome, sobreNome, cpf, email, senha, telefone) 
			VALUES('$nome', '$sobreNome', '$cpf', '$email', '$password', '$telefone')";
	mysqli_query($db, $query);

	$sucess = true;

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
	<meta charset="UTF-8">
	<title>Acesso Liberado</title>
	<!--Partes Bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
<?php include "php/navbar.php"; ?>
<br>


<div class="container">
		<div class="card">
			<div class="card-body">
				<h2>Cadastro de Clientes</h2><br>

				<?php if ($sucess): ?>
					<h3>Cliente cadastrado com sucesso</h3>
					<?php else: ?>
					<div class="error">
						<h3>Erro:</h3><br>
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>
	
</body>
</html>

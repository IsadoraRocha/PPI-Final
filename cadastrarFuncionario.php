<?php
    //require "php/verificaSessao.php";
	require "banco/cadastraFuncionarioBanco.php";
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
	<meta charset="UTF-8">
	<title>Cadastro de funcionario</title>
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
<br>
<div class="container">
    <!--Cadastro de funcionários-->
    <div class="card">
        <div class="card-body">
            <h2>Cadastro de Funcionários</h2><br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="nomeFuncionario">Nome:</label>
                        <input type="text" class="form-control" id="nomeFuncionario" name="nome" required><br>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sobreNomeFuncionario">Sobrenome:</label>
                        <input type="text" class="form-control" id= "sobreNomeFuncionario" name="sobreNome" required><br>
                    </div>
                </div>

                <div class="row">
                    <div class="formm-group col-md-4">
                        <label for="cpfFuncionario">CPF:</label>
                        <input type="number" name="cpf" id="cpfFuncionario" class="form-control" maxlength="11" required><br>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="nascimento">Data de nascimento:</label>
                        <input type="date" class="form-control col-md-5" id="nascimento" name="nascimento" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telefoneFuncionario">Telefone:</label>
                        <input type="tel" name="telefone" class="form-control" id="telefoneFuncionario" maxlength="12" required>
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-2">
                        <label for = "cep">CEP:</label>
                        <input type="number" class="form-control" id="cep" name="cep" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for = "rua">Rua:</label>
                        <input type="txt" class="form-control" id="rua" name="rua" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for = "numero">Nº:</label>
                        <input type="number" class="form-control" min="1" id="numero" name="numero" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for = "bairro">Bairro:</label>
                        <input type="txt" class="form-control" id="bairro" name="bairro" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-7">
                        <label for = "emailFunc">E-mail:</label>
                        <input type="email" class="form-control" id="emailFunc" name="emailFunc" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for = "senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                </div>

                <br>
                <br><button type="submit" class="btn btn-default" name="botaoCliente">Cadastrar</button>
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
</div><br>
    <br>
    <?php include "php/footer.php"; ?>
</body>
</html>

<!-- 
email@email.com
12345
-->
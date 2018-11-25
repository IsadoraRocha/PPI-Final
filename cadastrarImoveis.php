<?php
    require "php/verificaSessao.php";
	require "banco/cadastraImovelBanco.php";
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

    <div class="container">
    <!--Cadastro de imóveis-->
        <div class="card">
            <div class="card-body">
                <h2>Cadastro de Imóveis</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text"class="form-control" id="titulo" name="titulo">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="tipoImovel">Tipo de imóvel:</label>
                            <select name="tipoImovel" id="tipoImovel" class="form-control">
                                <option value="Casa">Casa</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Flet">Flet</option>
                            </select>
                        </div>

                        <div class = "form-group col-md-5">
                            <label for="construcao">Data de construção:</label>
                            <input type="date" class="form-control mol-md-5" id="construcao" name="construcao">
                        </div>
                    </div>
                    <div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="situacao" value="novo">Imóvel novo
                            </label>
                        </div>

                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="situacao" value="usado">Imóvel usado
                            </label>
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="Sim" name="aluguel">Aluguel
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="Sim" name="venda">Venda
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for = "cep">CEP:</label>
                            <input type="number" class="form-control" id="cep" name="cep">
                        </div>
                        <div class="form-group col-md-5">
                            <label for = "rua">Rua:</label>
                            <input type="txt" class="form-control" id="rua" name="rua"required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for = "numero">Nº:</label>
                            <input type="number" class="form-control" min="1" id="numero" name="numero" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for = "bairro">Bairro:</label>
                            <input type="txt" class="form-control" id="bairro" name="bairro" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for = "valor">Valor: </label>
                            <input type="number" min="1" step="any" class="form-control" id="valor" name="valor" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for = "qtquartos">Nº quartos:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtquartos" name="qtquartos" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtsuites">Nº suites:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtsuites" name="qtsuites" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtsalas">Nº salas:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtsalas" name="qtsalas" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtjantar">Nº salas de jantar:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtjantar" name="qtjantar" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtbanheiros">Nº banheiros:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtbanheiros" name="qtbanheiros" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for = "qtvagas">Nº vagas na garagem:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtvagas" name="qtvagas" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "terreno">Tamanho do terreno(m²):</label>
                            <input type="number" min="30" class="form-control" id="terreno" name="terreno" required>
                        </div>
                    </div>

                    Possui armários embutidos?
                    <br>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="armarios" value="Sim">Sim
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="armarios" value="Nao">Não
                        </label>
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <label class="comment">Descrição:</label>
                        <textarea class="form-control" rows="5" id="descricao" name="descricao" required></textarea>
                        
                    </div>
                    <br>
                    <!-- Selecione as fotos: <input type="file" name="fileToUpload" id="fileToUpload" required><br> -->
                    <button type="submit" class="btn btn-default">Cadastrar</button>
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
    </div>
    <br>
    <?php include "php/footer.php"; ?>
        
</body>
</html>
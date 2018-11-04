<?php
require "php/cadastraCliente.php"
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

    <div id="accordion">

        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    Cadastro de clientes
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <h2>Cadastro de clientes</h2><br>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>

                            <div class="form-group col-md-6">
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
                        <div class="form-group col-sm-7">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="12"><br>
                            </div>
                        <br><button type="submit" class="btn btn-default">Cadastrar</button>
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

        <!--Cadastro de funcionários-->
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    Cadastro de funcionários
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <h2>Cadastro de Funcionários</h2><br>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="nomeFuncionario">Nome:</label>
                            <input type="text" class="form-control" id="nomeFuncionario" name="nome"><br>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="sobreNomeFuncionario">Sobrenome:</label>
                            <input type="text" class="form-control" id= "sobreNomeFuncionario" name="sobreNome"><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for = "cep">CEP:</label>
                            <input type="number" class="form-control" id="cep" name="cep">
                        </div>
                        <div class="form-group col-md-5">
                            <label for = "rua">Rua:</label>
                            <input type="txt" class="form-control" id="rua" name="rua">
                        </div>
                        <div class="form-group col-md-2">
                            <label for = "numero">Nº:</label>
                            <input type="number" class="form-control" min="1" id="numero" name="numero">
                        </div>
                        <div class="form-group col-md-4">
                            <label for = "bairro">Bairro:</label>
                            <input type="txt" class="form-control" id="bairro" name="bairro">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="telefoneFuncionario">Telefone:</label>
                            <input type="tel" name="telefone" class="form-control" id="telefoneFuncionario" maxlength="12">
                        </div>

                        <div class="formm-group col-md-4">
                            <label for="cpfFuncionario">CPF:</label>
                            <input type="number" name="cpf" id="cpfFuncionario" class="form-control" maxlength="11"><br>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="nascimento">Data de nascimento:</label>
                            <input type="date" class="form-control col-md-5" id="nascimento" name="nascimento">
                        </div>
                    </div>
                    <br><input type="submit" value="Cadastrar">
                </div>
            </div>
        </div><br>
    <!--Cadastro de imóveis-->
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    Cadastrar Imóveis
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <h2>Cadastro de Imóveis</h2>
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text"class="form-control" id="titulo" name="titulo">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="tipoImovel">Tipo de imóvel:</label>
                            <select class="form-control" id="tipoImovel">
                                <option>Casa</option>
                                <option>Apartamento</option>
                                <option>Flet</option>
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
                                <input type="radio" class="form-check-input" value="" name="situacao">Imóvel novo
                            </label>
                        </div>

                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="" name="situacao">Imóvel usado
                            </label>
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="" name="aluguel">Aluguel
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="" name="venda">Venda
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
                            <input type="txt" class="form-control" id="rua" name="rua">
                        </div>
                        <div class="form-group col-md-2">
                            <label for = "numero">Nº:</label>
                            <input type="number" class="form-control" min="1" id="numero" name="numero">
                        </div>
                        <div class="form-group col-md-4">
                            <label for = "bairro">Bairro:</label>
                            <input type="txt" class="form-control" id="bairro" name="bairro">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for = "qtquartos">Nº quartos:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtquartos" name="qtquartos">
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtsuites">Nº suites:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtsuites" name="qtsuites">
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtsalas">Nº salas:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtsalas" name="qtsalas">
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtjantar">Nº salas de jantar:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtjantar" name="qtjantar">
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "qtbanheiros">Nº banheiros:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtbanheiros" name="qtbanheiros">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for = "qtvagas">Nº vagas na garagem:</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="qtvagas" name="qtvagas">
                        </div>

                        <div class="form-group col-md-2">
                            <label for = "terreno">Tamanho do terreno(m²):</label>
                            <input type="number" max="10" min="0" maxlength="2" class="form-control" id="terreno" name="terreno">
                        </div>
                    </div>

                    Possui armários embutidos?
                    <br>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="" name="armarios">Sim
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="" name="armarios">Não
                        </label>
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <label class="comment">Descrição:</label>
                        <txtarea class="form-control" rows="5" id="descricao"></txtarea>
                    </div>
                    <br><input type="submit" value="Cadastrar">
                </div>
            </div>
        </div>
</body>
</html>
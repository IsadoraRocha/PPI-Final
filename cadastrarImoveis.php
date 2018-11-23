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
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text"class="form-control" id="titulo" name="titulo">
                </div>
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="tipoImovel" name="tipoImovel">Tipo de imóvel:</label>
                        <select class="form-control" id="tipoImovel">
                            <option value="casa">Casa</option>
                            <option value="apartamento">Apartamento</option>
                            <option value="flet">Flet</option>
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
                            <input type="radio" class="form-check-input" value="novo" name="novo">Imóvel novo
                        </label>
                    </div>

                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="usado" name="usado">Imóvel usado
                        </label>
                    </div>
                </div>
                <br>
                <div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="alguel" name="aluguel">Aluguel
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="venda" name="venda">Venda
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
                    <div class="form-group col-md-2">
                        <label for = "valor">Valor: </label>
                        <input type="number" max="10" min="0" class="form-control" id="valor" name="valor">
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
                        <input type="radio" class="form-check-input" value="sim" name="armarios">Sim
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="nao" name="armarios">Não
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
    </div>
    <br>
    <?php include "php/footer.php"; ?>
        
</body>
</html>
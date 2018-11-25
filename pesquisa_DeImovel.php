<?php
	require "php/verificaSessao.php";
//	include "banco/buscaImoveisBanco.php";
?>
<!DOCTYPE html>
<html lang="ptn">
<head>
    <meta charset="UTF-8">
    <title>Nossos imóveis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <!-- Parte css -->
    <link rel="stylesheet" href="css/pesquisaDeImovel.css">
    <link rel="stylesheet" href="css/indexCSS.css.css">
    <script src = "jQuery/animations.js"></script>

</head>
<body>
    <div class="headPesquisa">
        <h3>O que você está procurando?</h3>
    </div>
    <!--Filtro de pesquisa-->
    <div class="row filtro">
        <div class="form-group col-md-2">
            <label for="tipoImovel">Disponível para:</label>
            <select class="form-control" id="tipoImovel">
                <option>Aluguar</option>
                <option>Comprar</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="tipoImovel">Tipo de imóvel:</label>
            <select class="form-control" id="tipoImovel">
                <option>Casa</option>
                <option>Apartamento</option>
                <option>Flet</option>
            </select>
        </div>
        <div class="form-group col">
            <label for = "bairro">Bairro:</label>
            <input type="txt" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="form-group col">
            <label for = "minimo">Valor mínimo:</label>
            <input type="txt" class="form-control" id="minimo" name="minimo">
        </div>
        <div class="form-group col">
            <label for = "maximo">Valor máximo:</label>
            <input type="txt" class="form-control" id="maximo" name="maximo">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
    <br>

    <div class="bobyPesquisa d-flex align-items-center">
        <!--Imóveis disponíveis -->
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div id="myCarousel" class="container imoveis carousel-inner" style="padding: 20px">
                <div class="row carousel-item active">
                    <div class="row">
                        <div class="info col-md-3">
                            <h6>Santa Mônica</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Aluguel:</td>
                                    <td>R$ 800,00</td>
                                </tr>
                                <tr>
                                    <td>Área total:</td>
                                    <td>200 m²</td>
                                </tr>
                                <tr>
                                    <td>Número de quartos:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Vagas na garagem</td>
                                    <td>2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col d-flex align-items-center">
                            <table class="table table-borderless align-middle">
                                <tbody>
                                <tr>
                                    <td><img class="imagem img-fluid" src="css/img/imagem1.jpg" alt="imagem1"></td>
                                    <td><img class="imagem img-fluid" src="css/img/imagem2.jpg" alt="imagem2"></td>
                                    <td><img class="imagem img-fluid" src="css/img/imagem3.jpg" alt="imagem3"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>    
                
                <div class="row carousel-item">
                    <div class="row">
                        <div class="info col-md-3">
                            <h6>Santa Mônica</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Aluguel:</td>
                                    <td>R$ 1000,00</td>
                                </tr>
                                <tr>
                                    <td>Área total:</td>
                                    <td>500 m²</td>
                                </tr>
                                <tr>
                                    <td>Número de quartos:</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Vagas na garagem</td>
                                    <td>2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col d-flex align-items-center">
                            <table class="table table-borderless align-middle">
                                <tbody>
                                <tr>
                                    <td><img class="img img-fluid" src="css/img/imagem1.jpg" alt="imagem1"></td>
                                    <td><img class="img img-fluid" src="css/img/imagem2.jpg" alt="imagem2"></td>
                                    <td><img class="img img-fluid" src="css/img/imagem3.jpg" alt="imagem3"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>    

                <div class="row carousel-item">
                    <div class="row">
                        <div class="info col-md-3">
                            <h6>Santa Mônica</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Aluguel:</td>
                                    <td>R$ 900,00</td>
                                </tr>
                                <tr>
                                    <td>Área total:</td>
                                    <td>270 m²</td>
                                </tr>
                                <tr>
                                    <td>Número de quartos:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Vagas na garagem</td>
                                    <td>3</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col d-flex align-items-center">
                            <table class="table table-borderless align-middle">
                                <tbody>
                                <tr>
                                    <td><img class="img-fluid" src="css/img/imagem1.jpg" alt="imagem1"></td>
                                    <td><img class="img-fluid" src="css/img/imagem2.jpg" alt="imagem2"></td>
                                    <td><img class="img-fluid" src="css/img/imagem3.jpg" alt="imagem3"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>    

                <div class="row carousel-item">
                    <div class="row">
                        <div class="info col-md-3">
                            <h6>Santa Mônica</h6>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Aluguel:</td>
                                    <td>R$ 500,00</td>
                                </tr>
                                <tr>
                                    <td>Área total:</td>
                                    <td>160 m²</td>
                                </tr>
                                <tr>
                                    <td>Número de quartos:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Vagas na garagem</td>
                                    <td>1</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col d-flex align-items-center ">
                            <table class="table table-borderless align-middle">
                                <tbody>
                                <tr>
                                    <td><img class="img-fluid" src="css/img/imagem1.jpg" alt="imagem1"></td>
                                    <td><img class="img-fluid" src="css/img/imagem2.jpg" alt="imagem2"></td>
                                    <td><img class="img-fluid" src="css/img/imagem3.jpg" alt="imagem3"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div> 
                <?php require "php/tenhoInteresse.php"?>
                <?php require "php/maisInfo.php"?>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>   
        </div>
    </div>
    <br>
    <?php include "php/footer.php"; ?>
</body>
</html>
<?php
	// session_start();
    include "login.php";
?>

<!DOCTYPE html>
<html lang="ptn">
<head>
<meta charset="UTF-8">
    <title>Home</title>
    <!--Partes Bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!--Css e JavaScript-->
    <link rel="stylesheet" href="css/indexCSS.css">
    <script src = "jQuery/animations.js"></script>
</head>

<body>
    <?php require "php/verificaSessao.php"?>   
    <div class=" container col container1">
        <div class="boasVindas">
            <h1>Seja bem vindo à nossa imobiliaria!</h1>
            <h3 style="margin: 10px;"> Temos diferentes estilos de se morar bem!</h3>
        </div>
    </div>

    <div class="container  col container2">
        <div class="missao">
            Especializada em Lançamentos Imobiliários a Imobiliaria da Cidade foi fundada em Abril de 
            2012 com foco nas vendas de imóveis novos e usados, prontos e/ou na planta, locação, 
            incorporações e avaliações imobiliárias. Sua força de vendas é composta por corretores 
            parceiros altamente treinados e qualificados para auxiliá-lo a realizar o melhor negócio.
        </div>
    </div>

    <div class="container col container3">
        <div class="row valores">
            <div class="col-md-4">
                <i class='fas fa-sign' style='font-size:48px;color:white'></i><br><br>
                Cadastre seu imóvel no nosso site.
            </div>
            <div class="col-md-4">
                <i class='fas fa-home' style='font-size:48px;color:white'></i><br><br>
                Realize seu financiamento conosco.
            </div>
            <div class="col-md-4">
                <i class='fas fa-phone' style='font-size:48px;color:white'></i><br><br>
                Ligamos para você.
            </div>
        </div>
    </div>
    <div id="contato">
        <?php include "php/footer.php"; ?>
    </div>
</body>
</html>
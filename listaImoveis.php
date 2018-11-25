<?php
	require "php/verificaSessao.php";
	include "banco/buscaImoveisBanco.php";
?>

<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
	<meta charset="UTF-8">
	<title>Lista de Imóveis</title>
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
<h3>Imóveis Cadastrados</h3>
<div class="table-responsive hover justify-content-start bg-light">
    <table class="table table-hover" style="table-layout: auto">
        <thead>
            <tr class="d-flex">
            <th class="col-md-2">Título</th>
            <th class="col-md-1">Tipo de Imóvel</th>
            <th class="col-sm-1">Situação</th>
            <th class="col-sm-1">Data de construção</th>
            <th class="col-sm-1">Alugel</th>
            <th class="col-md-1">Venda</th>
            <th class="col-md-1">CEP</th>
            <th class="col-md-2">Rua</th>
            <th class="col-md-1">Número</th>
            <th class="col-md-2">Bairro</th>
            <th class="col-md-1">Valor</th>
            <th class="col-md-1">Nº de Quartos</th>
            <th class="col-md-1">Nº de suites</th>
            <th class="col-md-1">Nº de salas</th>
            <th class="col-md-1">Nº de salas de jantar</th>
            <th class="col-md-1">Nº de banheiros</th>
            <th class="col-md-1">Nº de vagas na garem</th>
            <th class="col-md-1">Tamanho do terreno</th>
            <th class="col-md-1">Armários embutidos</th>
            <th class="col-md-7">Descrição</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
            if ($arrayImoveis != "")
            {
                
                foreach ($arrayImoveis as $imovel)
                {
                echo"           
                <tr class=\"d-flex\">
                    <td class=\"col-md-2\">$imovel->titulo</td>
                    <td class=\"col-md-1\">$imovel->tipoImovel</td>
                    <td class=\"col-sm-1\">$imovel->situacao</td>
                    <td class=\"col-sm-1\">$imovel->construcao</td>
                    <td class=\"col-sm-1\">$imovel->aluguel</td>
                    <td class=\"col-md-1\">$imovel->venda</td>
                    <td class=\"col-md-1\">$imovel->cep</td>
                    <td class=\"col-md-2\">$imovel->rua</td>
                    <td class=\"col-md-1\">$imovel->numero</td>
                    <td class=\"col-md-2\">$imovel->bairro</td>
                    <td class=\"col-md-1\">$imovel->valor</td>
                    <td class=\"col-md-1\">$imovel->qtquartos</td>
                    <td class=\"col-md-1\">$imovel->qtsuites</td>
                    <td class=\"col-md-1\">$imovel->qtsalas</td>
                    <td class=\"col-md-1\">$imovel->qtjantar</td>
                    <td class=\"col-md-1\">$imovel->qtbanheiros</td>
                    <td class=\"col-md-1\">$imovel->qtvagas</td>
                    <td class=\"col-md-1\">$imovel->terreno</td>
                    <td class=\"col-md-1\">$imovel->armarios</td>
                    <td class=\"col-md-7\">$imovel->descricao</td>
                </tr>      
                ";
                }
            }
            
        ?>    
                
        </tbody>
    </table>
</div>

<?php

if ($msgErro != "")
  echo "<p class='text-danger'>A operação não pode ser realizada: $msgErro</p>";

?>
</div>
    <br>
    <?php include "php/footer.php"; ?>	
</body>
</html>
<?php
	require "php/verificaSessao.php";
//	include "banco/buscaImoveisBanco.php";
?>
<!DOCTYPE html>
<html>
<title>Pesquise seu imóvel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- Parte css -->
<link rel="stylesheet" href="css/pesquisaDeImovel.css">
<link rel="stylesheet" href="css/indexCSS.css.css">
<script src = "jQuery/animations.js"></script>

<style>

</style>
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
        <button type="submit" class="btn btn-dark pesquisa">
            <i class='fas fa-search'></i>
        </button>
    </div>
    <br>

    <!-- Slideshow -->
    <div class="w3-container center bobyPesquisa">
      <div class="w3-display-container imoveis mySlides ">
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
      
        <div class="w3-display-container imoveis mySlides">
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
                            <td>200 m²</td>
                        </tr>
                        <tr>
                            <td>Número de quartos:</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Vagas na garagem</td>
                            <td>1</td>
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
        <div class="w3-display-container imoveis mySlides">
             <div class="row">
                <div class="info col-md-3">
                    <h6>Santa Mônica</h6>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Aluguel:</td>
                            <td>R$ 1200,00</td>
                        </tr>
                        <tr>
                            <td>Área total:</td>
                            <td>300 m²</td>
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

      <!-- Slideshow next/previous buttons -->
      <div class="w3-container w3-dark-grey w3-padding w3-xlarge bg-dark">
        <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
        <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
      
        <div class="w3-center">
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
      </div>
    </div>
    <?php include "php/footer.php"; ?>
  <!-- Footer -->  
   
  <script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>

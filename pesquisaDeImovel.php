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
<script src = "jQuery/animations.js"></script>

<style>

</style>
<body>
<script>
     
	function sendForm()
	{
		$("#divSuccessMsg").hide();
		$("#divErrorMsg").hide();

		document.getElementById("btnCadastraAluno").disabled = true;    
		var formAluno = document.getElementById("formCadAluno");
		var formData = new FormData(formAluno);  // Ver datalhes em https://developer.mozilla.org/pt-BR/docs/Web/API/FormData/FormData

		$.ajax({
			url: 'buscaEndereco.php',
			method: "POST",
			data: formData,
			
			cache: false,
			processData: false,  // Diz ao jQuery para não processar os dados do formulário (ver detalhes em http://api.jquery.com/jquery.ajax/)   
			contentType: false,  // Diz ao jQuery para não definir cabeçalho de contentType (ver detalhes em http://api.jquery.com/jquery.ajax/)   

			success: function (result) {

				if (result)
				{
					/*document.getElementById('divSuccessMsg').innerHTML = "Dados salvos com sucesso: " + result;    
					$("#divSuccessMsg").stop().fadeIn(200).delay(2500).fadeOut(200);*/
					document.getElementById("btnCadastraAluno").disabled = false;
					document.getElementById("formCadAluno").reset();
					/*$("body").append(result);*/
					$("#slider").append(result);					
				}
				else
					showMessageError(result);
			},

			error: function (xhr, status, error) {

				var errorMsg = xhr.responseText;
				document.getElementById("errorMsg").innerText = errorMsg;
				$("#divErrorMsg").fadeIn(200);
				document.getElementById("btnCadastraAluno").disabled = false;
			}
		});
	}
	
	function showMessageError(message)
	{
		document.getElementById("errorMsg").innerHTML = message;
		$("#divErrorMsg").fadeIn(200);
	}	
	
	</script>

<!-- Links (sit on top) -->
<?php include "php/navbar.php"; ?>

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
        <button type="button" class="btn btn-dark pesquisa" onclick="sendForm();">
            <i class='fas fa-search'></i>
        </button>
    </div>
    <br>

    <!-- Slideshow -->
    <div class="center bobyPesquisa">     
        <div class="w3-display-container mySlides " id="slider">
		</div>
	</div>
    
      <!-- Slideshow next/previous buttons -->
      <div class="container w3-dark-grey w3-padding w3-xlarge bg-dark align-self-end">
        <div class="float-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
        <div class="float-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
      
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

</script>

</body>
</html>

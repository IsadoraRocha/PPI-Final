<link rel="stylesheet" href="css/maisInfo.css">

<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#info" style="float: left;">
    Mais...
</button>

<!--Modal-->

<div class="modal fade" id="info">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Informações do imóvel</h4>
        <button type="button" class="close" data-dismiss="modal">&times;
        </button> 
      </div>
        <div class="modal-body">
            <div class="form-group col-md-4">
                <label for="id">Id do imovel:</label>
                <input type="number" class="form-control" id="id" name="id" onkeyup="mostraDescricao(this.value)"><br>
            </div>
            <div style="text-aling: center">
                <h4>Descrição do imovel</h4>
                <span id="textoDescricao"></span>
            </div>
        </div>
    </div>
  </div>
</div>

<script>  
function mostraDescricao(id) 
{
  if (id.length == 0) 
    document.getElementById("textoDescricao").innerHTML = "";
  else 
    buscaDescricao(id);
}

function buscaDescricao(id)
{
  var xmlhttp = new XMLHttpRequest();

  var url = "banco/buscaDescricao.php?id=" + id;

  xmlhttp.open("GET", url, true);
  xmlhttp.onload = function () 
  {
    if (xmlhttp.status == 200)
    {
      // Coloque aqui as operações necessárias para tratar o resultado 
      // da requisição quando finalizada com sucesso	
      document.getElementById("textoDescricao").innerHTML = xmlhttp.responseText;
    }
    else
    {
      // Ocorreu alguma falha no processamento da requisição e o servidor
      // retornou um código de status diferente de '200 Ok'.
      // Coloque o tratamento de erro aqui.
      alert("Ocorreu um erro ao processar a requisição: " + xmlhttp.status + xmlhttp.responseText);			
    }
  };

  xmlhttp.onerror = function () 
  {
    // Ocorreu um erro no processamento da requisição a nível de rede
    // Coloque o tratamento aqui
    alert("Ocorreu um erro ao processar a requisição");
  };

  xmlhttp.send();
}		
</script>


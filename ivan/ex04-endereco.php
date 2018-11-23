<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desenvolvimento Web com AJAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script>
  
  function buscaEndereco(cep)
  {
    $.ajax({

      url: 'ex04-buscaEndereco.php',
      type: 'POST',
      async: true,
      dataType: 'json',
      data: {'cep':cep},         

      success: function(result) {
      
        // se dataType fosse 'html', então seria necessário
        // converter a string JSON recebida em um objeto JavaScript
        // manualmente (utilizando a função JavasScript JSON.parse)
        
        // Como dataType foi definido para o valor 'json', então a conversão
        // da string para um objeto JavaScript é realizada automaticamente.

        // NOTA IMPORTANTE 1: Entretanto, todo conteúdo gerado
        // pelo script PHP precisa ser convertido para JSON (no servidor, em PHP).
        // Caso contrário, teremos um erro de conversão para 
        // JSON no JavaScript/jQuery, o que faz com que esta parte
        // do código (success:) não seja executada, mas sim a parte 
        // definida em 'error:'. Isto pode acontecer mesmo
        // quando o script PHP termina sem gerar erros.

        // NOTA IMPORTANTE 2: Em algumas situações esta funçao pode ser
        // executada mesmo quando o script PHP não termina com sucesso 
        // (por exemplo, quando ocorre erros de sintaxe no PHP). Isto acontece
        // porque em algumas situações o PHP (em conjunto com o servidor web) retorna
        // o código de STATUS 200 - OK, mesmo na presenças de alguns erros/warnings no script.        
        
        if (result != "")
        {                  
          document.forms[0]["rua"].value    = /*result.rua*/"Teste";
          /*document.forms[0]["numero"].value = result.numero;
          document.forms[0]["bairro"].value = result.bairro;*/
		  
        }
      },

      error: function(xhr, status, error) {
        alert(status + error + xhr.responseText);
      }

    });  

  }
  
  </script>
  
</head>
<body>

<div class="container">
  <h3>Preenchendo o endereço com AJAX</h3>
  <br>
  
  <form>
	
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="text" class="form-control" placeholder="Informe o CEP" name="cep" onkeyup="buscaEndereco(this.value)">
    </div>
		
    <div class="form-group">
      <label for="">Rua:</label>
      <input type="text" class="form-control" name="rua">
    </div>
    <div class="form-group">
      <label for="">Número:</label>
      <input type="text" class="form-control" name="numero">
    </div>
    <div class="form-group">
      <label for="">Bairro:</label>
      <input type="text" class="form-control" name="bairro">
    </div>
    

  </form>
</div>

</body>
</html>
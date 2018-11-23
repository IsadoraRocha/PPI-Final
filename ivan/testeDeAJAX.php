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
  function buscaEndereco()
  {
    $.ajax({

      url: 'buscaDeAJAX.php',
      type: 'POST',
      async: true,
      dataType: 'json',         

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
          $("p").html("Hello <b>world</b>!");
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
<p id="demo">Teste de AJAX</p>
<?php
include 'conectarComMySQL.php';
$nome='Ivan';
	$senha='1327';
	
	$sql = "SELECT * FROM CLIENTE WHERE NOME = :nome AND SENHA = :senha";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':senha', $senha );
	$result = $stmt->execute();
	$result = $stmt-> fetchAll( PDO::FETCH_ASSOC );
	/*$result = $stmt->fetch_assoc();*/
	/*echo "Contagem: ";*/
	print_r($result);
?>
</body>
</html>
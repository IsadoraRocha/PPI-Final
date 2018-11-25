<?php
      //  require "banco/cadastraInteressesBanco.php";
?>

<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#interesse" style="float: right">
    Tenho Interesse
</button>

<!--Modal-->

<div class="modal fade" id="interesse">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tenho Interesse</h4>
        <button type="button" class="close" data-dismiss="modal">&times;
        </button> 
      </div>
        <div class="modal-body">
            <form method="POST" id="interesseForm">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nome" class="col-form-label">Nome Completo:</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefone" class="col-form-label">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="imovel" class="col-form-label">Número do imóvel:</label>
                    <input type="number" class="form-control col-md-2" id="imovel" name="imovel">
                </div>
                <div class="form-group">
                    <label for="proposta">Proposta:</label>
                    <textarea class="form-control" rows="5" id="proposta" name="proposta"></textarea>
                </div>
                <!-- <button type="submit" class="btn btn-default">Enviar</button> -->
            </form>
        </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-default" id="submitForm" data-dismiss="modal">Enviar</button>
      </div>
    </div>
</div>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {  
        if ($msgErro == "")
        echo "<h3 class='text-success'>Proposta com sucesso!</h3>";
        else
        echo "<h3 class='text-danger'>Cadastro não realizado: $msgErro</h3>";
    }
    ?>
</div>

<script>
/* must apply only after HTML has loaded */
$(document).ready(function () {
    $('#interesseForm').on('submit', function() {
        event.preventDefault();
        $.ajax({
            url: "banco/cadastraInteressesBanco.php",
            method: "POST",
            data: $('#interesseForm').serealize(),
            success: function(data)
            {
                //limpa o modal
                 $('#interesseForm')[0].reset();
                 //esconde o modal
                 $('#interesse').modal('hide');
                 $('').html(data);
                 //Alerta sucesso
                 alert("Proposta enviada com sucesso");
            }
        })
    });
});
</script>
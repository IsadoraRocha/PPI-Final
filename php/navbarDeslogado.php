<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mynavbar">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
            <img src="css/img/Imagem1.png" alt="" id="logo">
        </a>    
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pesquisaDeImovel.php">Nossos Imóveis</a>
        </li>
        <ul class="nav navbar-nav navbar-right">
        <li>
          <button type="button" class="fas fa-sign-in-alt btn btn-outline-light" data-toggle="modal" data-target="#login">
            Log-in
          </button>
        </li>
      </ul>
    </div>        
  </nav>


<!-- Modal de Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log-in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action= "../index.php" method="POST">
          <div class="form-group">
            <label for="usuario" class="col-form-label">Usuário:</label>
            <input type="text" class="form-control" id="usuario" name="email">
          </div>
          <div class="form-group">
            <label for="senha" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
		<div class="modal-footer">
        <button type="submit">Login</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
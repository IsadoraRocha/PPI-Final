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
        <!-- Quando sessão iniciada -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Cadastrar
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="cadastrarCliente.php">Cliente</a>
            <a class="dropdown-item" href="cadastrarFuncionario.php">Funcionário</a>
            <a class="dropdown-item" href="cadastrarImoveis.php">Imóvel</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Consultar
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="listaCliente.php">Cliente</a>
            <a class="dropdown-item" href="listaFuncionarios.php">Funcionário</a>
            <a class="dropdown-item" href="listaImoveis.php">Imóvel</a>
          </div>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="logout.php" class="fas fa-sign-out-alt">
            Log-out
          </a>
          <!--<i class='fas fa-sign-in-alt'  href="#myModal">   Log-in</i>
           <i class='fas fa-sign-out-alt'>  Sair</i>  -->
        </li>
      </ul>
    </div>        
  </nav>
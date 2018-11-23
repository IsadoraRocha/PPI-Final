<?php

require 'conectarComMYSQL.php';

function filtraEntradaForm($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function loginUsuario($email, $senha, $mysqli)
{
  $SQL = "
    SELECT EMAIL, SENHA 
    FROM FUNCIONARIO
    WHERE EMAIL = ?
    LIMIT 1
  ";
  
  $stmt = $mysqli->prepare($SQL);
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $stmt->store_result();
  
  // Resgata o resultado nas variáveis
  $stmt->bind_result($email, $senhaHash);
  $stmt->fetch();
  
  if ($stmt->num_rows == 1)
  {
    if (password_verify($senha, $senhaHash))
    {
      // Senha correta
      echo "Entrei";
            
      // Armazena dados úteis para confirmação de login
      // em outros scripts PHP
      $_SESSION['email'] = $email;
      $_SESSION['loginString'] = hash('sha512', $senhaHash . $_SERVER['HTTP_USER_AGENT']);
      
      // Sucesso no login
      return true;
    }
    else
    {
      // Senha incorreta
      echo "Nao logado";
      return false;
    }
  }
  else
  {
    // Usuário não existe
    return false;
  }
}

function checkUsuarioLogadoOrDie($mysqli)
{
  if (!isset($_SESSION['email']))
  {
    $mysqli->close();
    header("Location: /index.php");
    die();
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  loginUsuario($_POST['email'], $_POST['senha'], conectaAoMySQL());
}
<?php
session_start();

$servidor = "fdb22.awardspace.net";
$usuario = "2838336_imobiliariadacidade";
$senha = "ppifinal123";
$nomeBD = "2838336_imobiliariadacidade";
$porta = "3306";
$db = mysqli_connect($servidor, $usuario, $senha, $nomeBD, $porta);

?>
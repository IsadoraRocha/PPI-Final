<?php 
session_start();

if (!isset($_SESSION['email']))
{
    include "php/navbarDeslogado.php";
    // header('Location: index.php');
	// exit;
} else {
    include "php/navbarLogado.php";
}
?>
<?php 
session_start();

if (!isset($_SESSION['email']))
{
    // @header('Location: ');
    //@header('Location: /isadora/index.php');
    include "php/navbarDeslogado.php";
} else {
    include "php/navbarLogado.php";
}
?>
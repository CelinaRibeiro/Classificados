<?php
require 'config.php';
use classes\Anuncios;

if (empty($_SESSION['cLogin'])) {
    header("Location: login.php");
    exit;
}

require 'classes/Anuncios.php';
$a = new Anuncios();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $a->excluirAnuncio($_GET['id']);
}
header("Location: meus-anuncios.php");
?>


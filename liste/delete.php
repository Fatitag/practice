<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];

    if (isset($_SESSION['produits'][$index])) {
        unset($_SESSION['produits'][$index]);
        $nombreProduits = count($_SESSION['produits']);
        setcookie('nombre_produits', $nombreProduits, time() + 3600);
    }
}

header('Location: index.php');
exit();
?>
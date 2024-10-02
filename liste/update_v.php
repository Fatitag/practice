<?php
session_start();

if (isset($_POST['index'])) {
    $index = $_POST['index'];

    if (isset($_SESSION['produits'][$index])) {
        $libelle = $_POST['libelle'];
        $pu = $_POST['pu'];

        $_SESSION['produits'][$index]['libelle'] = $libelle;
        $_SESSION['produits'][$index]['pu'] = $pu;
    }
}

header('Location: liste.php');
exit();
?>
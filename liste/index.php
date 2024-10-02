<?php
session_start();
if (!isset($_SESSION['produits'])) {
    $_SESSION['produits'] = array();
}

if (!isset($_COOKIE['nombre_produits'])) {
    setcookie('nombre_produits', 0, time() + 360); 
}
if (isset($_POST['submit'])) {
    $libelle = $_POST['libelle'];
    $pu = $_POST['pu'];
    $produit = array(
        'libelle' => $libelle,
        'pu' => $pu
    );
    array_push($_SESSION['produits'], $produit);

    $nombreProduits = count($_SESSION['produits']);
    setcookie('nombre_produits', $nombreProduits, time() + 3600);
    header('Location: liste.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ajouter un produit</h1>
        <form method="POST" action="index.php">
            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé :</label>
                <input type="text" class="form-control" name="libelle" id="libelle" required>
            </div>

            <div class="mb-3">
                <label for="pu" class="form-label">Prix unitaire :</label>
                <input type="number" class="form-control" name="pu" id="pu" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
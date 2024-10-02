<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];

    if (isset($_SESSION['produits'][$index])) {
        $produit = $_SESSION['produits'][$index];
    } else {
        header('Location: liste.php');
        exit();
    }
} else {
    header('Location: liste.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Modifier un produit</h1>
        <form method="POST" action="update_v.php">
            <input type="hidden" name="index" value="<?php echo $index; ?>">

            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé :</label>
                <input type="text" name="libelle" id="libelle" class="form-control" value="<?php echo $produit['libelle']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="pu" class="form-label">Prix unitaire :</label>
                <input type="number" name="pu" id="pu" class="form-control" value="<?php echo $produit['pu']; ?>" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
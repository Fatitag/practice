<?php
session_start();
$nombreProduits = isset($_COOKIE['nombre_produits']) ? $_COOKIE['nombre_produits'] : 0;

if (isset($_GET['action']) && $_GET['action'] === 'supprimer' && isset($_GET['index'])) {
    $index = $_GET['index'];

    if (isset($_SESSION['produits'][$index])) {
        unset($_SESSION['produits'][$index]);
        $nombreProduits = count($_SESSION['produits']);
        setcookie('nombre_produits', $nombreProduits, time() + 3600);
    }

    header('Location: liste.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Liste des produits</h1>
        <p>Nombre de produits : <?php echo $nombreProduits; ?></p>
        <table class="table">
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Prix unitaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($_SESSION['produits'])): ?>
                    <?php foreach ($_SESSION['produits'] as $index => $produit): ?>
                        <tr>
                            <td><?php echo $produit['libelle']; ?></td>
                            <td><?php echo $produit['pu']; ?></td>
                            <td>
                                <a href="update.php?index=<?php echo $index; ?>" class="btn btn-primary">Modifier</a>
                                <a href="liste.php?action=supprimer&index=<?php echo $index; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <p><a href="liste.php" class="btn btn-secondary">Vider la session</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
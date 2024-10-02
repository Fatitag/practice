<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ajouter'])) {
        ajouterProduit($_POST['libelle'], $_POST['prix']);
    } elseif (isset($_POST['modifier'])) {
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $prix = $_POST['prix'];
        
        mettreAJourProduit($id, $libelle, $prix);
    } elseif (isset($_POST['supprimer'])) {
        supprimerProduit($_POST['id']);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Produits</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <ul>
        <?php $produits = recupererProduits();
        foreach ($produits as $produit) { ?>
            <li>
                <?php echo $produit['libelle']; ?> - <?php echo $produit['prix']; ?>
                <form action="" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                    <input type="submit" name="modifier" value="Modifier">
                    <input type="submit" name="supprimer" value="Supprimer">
                </form>
            </li>
        <?php } ?>
    </ul>

    <h2>Ajouter un Produit</h2>
    <form action="" method="post">
        Libellé: <input type="text" name="libelle" required>
        Prix: <input type="number" name="prix" step="0.01" required>
        <input type="submit" name="ajouter" value="Ajouter">
    </form>
</body>
</html>

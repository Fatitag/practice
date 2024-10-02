<?php
require_once 'config.php';

function ajouterProduit($libelle, $prix) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO produits (libelle, prix) VALUES (?, ?)");
    $stmt->execute([$libelle, $prix]);
}

function recupererProduits() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM produits");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function mettreAJourProduit($id, $libelle, $prix) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produits SET libelle=?, prix=? WHERE id=?");
    $stmt->execute([$libelle, $prix, $id]);
}

function supprimerProduit($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM produits WHERE id=?");
    $stmt->execute([$id]);
}
?>

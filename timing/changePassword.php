<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_login'])) {
    echo "Vous devez être connecté pour changer votre mot de passe.";
    exit();
}

if (isset($_POST['old_password'], $_POST['new_password'], $_POST['confirm_password'])) {
    $login = $_SESSION['user_login'];
    $old_password = md5($_POST['old_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);

    if ($new_password == $confirm_password) {
        $stmt = $conn->prepare("SELECT * FROM user WHERE login = :login AND password = :old_password");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':old_password', $old_password);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            $stmt = $conn->prepare("UPDATE user SET password = :new_password WHERE login = :login");
            $stmt->bindParam(':new_password', $new_password);
            $stmt->bindParam(':login', $login);
            $stmt->execute();
            echo "Mot de passe changé avec succès!";
            header("Location: dashboard.php");
            exit;
        } else {
            echo "L'ancien mot de passe est incorrect.";
        }
    } else {
        echo "Les nouveaux mots de passe ne correspondent pas.";
    }
} else {
    echo "Tous les champs sont requis.";
}
?>

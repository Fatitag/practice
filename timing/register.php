<?php
include 'db.php';
session_start();


if (isset($_POST['nom'],$_POST['email'],$_POST['login'],$_POST['password'],$_POST['confirm_password'])){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    if ($password !==$confirm_password) {
        echo "n'est pas le meme mot de passe";
        exit;
    }

    if (empty($nom) || empty($email) || empty($login) || empty($password) || empty($confirm_password)) {
        echo "Tous les champs sont requis";
        exit;
    }

    if (!preg_match("/^[A-Za-z]{3,50}$/", $nom)) {
        echo "Nom invalide! (doit contenir uniquement des lettres et avoir une longueur entre 3 et 50 caractères)";
        exit;
    }

    $pass = md5($password);

    $role = "user";
    $tentatives = 0;
    $lockout = 0;
    $valid = 0;

    $f = $conn->prepare("INSERT INTO user VALUES (Null,:nom,:email,:login,:password,:role,0,0,0)");
        $f->execute([
        ':nom'=>$nom,
        ':email'=>$email,
        ':login'=> $login,
        ':password'=> $pass,
        ':role'=> $role
            
    ]);
    
        header("Location: login.php");
        exit;    
    } else {
        echo "Une erreur s'est produite lors de l'inscription!";
    }

?>

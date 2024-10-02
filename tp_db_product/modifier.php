<?php

 require_once 'config.php';
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$idville=$_POST['idville'];

$sql="select * from";

$str=$pdo->prepare($sql);
$str->bindParam(':libelle',$libelle);
$str->execute();


?>
<?php

 require_once 'config.php';
 if (isset($_POST['libelle'])) {
    $libelle = $_POST['libelle'];
    $pu = $_POST['pu'];
    $qte = $_POST['qte'];

    if (!empty($libelle) && is_numeric($pu) && is_numeric($qte)) 
$libelle=$_POST['libelle'];
$sql="insert into ville values(NULL,:libelle)";

$str=$pdo->prepare($sql);
$str->bindParam(':libelle',$libelle);
$str->execute();


?>
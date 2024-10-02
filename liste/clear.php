<?php
session_start();
unset($_SESSION['produits']);
header('Location: liste.php');
exit();
?>
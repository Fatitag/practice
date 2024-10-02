<?php
include 'db.php';
session_start();

if (isset($_POST['login'], $_POST['password'])) {
    $login=$_POST['login'];
    $password=$_POST['password'];

    $f=$conn->prepare("SELECT * FROM user WHERE login = :login AND password = :password");
    $f->bindParam(':login',$login);
    $f->bindParam(':password',$password);
    $f->execute();
    $user=$f->fetch();

    if ($user) {
        $_SESSION['user_login'] = $login;
        $_SESSION['user_role'] = $user['role'];
        header("Location: index.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>login ou mot de passe sont incorrect</div>";


    }


    // if($lockout){
    //     $tentative=3;
    //     echo"le compte est bloqué";
    // }
    if (empty($_SESSION['failed_login'])) 
{
    $_SESSION['failed_login'] = 1;
} 
elseif (isset($_POST['login'])) 
{
    $_SESSION['failed_login']++;
}

if ($_SESSION['failed_login'] > 3) {
	$error[] = 'you passed 3  times ' . $_SESSION['failed_login'];
} 
}
?>

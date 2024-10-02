<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    header("Location: login.html");
    exit;
}

include 'db.php';

$login = $_SESSION['user_login'];
$stmt = $conn->prepare("SELECT * FROM user WHERE login = :login");
$stmt->bindParam(':login', $login);
$stmt->execute();
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p>Welcome, <?php echo $_SESSION['user_login']; ?>!</p>
                       
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                        <a href="changePassword.html" class="btn btn-danger">Change mdp</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagina inicial</title>
</head>
<body>
    <h2>Bem vindo, <?= $_SESSION['user'] ?>!</h2>
    <p>Você acessou o sistema!</p>
    <a href="logout.php">Sair</a>
    
</body>
</html>
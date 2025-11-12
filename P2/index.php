<?php
session_start();
require 'usuarios.php';
require 'notificacao.php';

$erro = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (isset($admins[$usuario]) && password_verify($senha, $admins[$usuario])) {
        $_SESSION['user'] = $usuario;
        enviarNotificacaoLogin($usuario);
        header('location: home.php');
        exit;
    }else{
        $erro = 'Usuário ou senha invalidos';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>
  <?php if ($erro): ?>
    <p sytle="color: red;"><?= $erro ?></p>
 <?php endif; ?>
 <form method="post" action="index.php">
    <label >Usuário</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Senha</label><br>
    <input type="password" name = "senha" required><br><br>


    <button type="submit">Entrar</button>
 </form>

 <br>
 <a href="esqueci_senha.php">Esqueci a Senha</a>
    
</body>
</html>
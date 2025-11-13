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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

 <div class="container">
    <h2>Login</h2>

    <?php if ($erro): ?>
        <p class="mensagem erro"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>
    
    <form method="post" action="index.php">
        <label>Usuário</label>
        <input type="text" name="usuario" required>

        <label>Senha</label>
        <input type="password" name="senha" required>

        <button type="submit">Entrar</button>
    </form>

    <a href="esqueci_senha.php">Esqueci a Senha</a>
 </div>
    
</body>
</html>
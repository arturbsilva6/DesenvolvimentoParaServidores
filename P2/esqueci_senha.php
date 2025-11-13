<?php

require 'usuarios.php';
require 'notificacao.php';

$mensagem = '';
$mensagem_classe = ''; // Variável para controlar a classe CSS

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email_recuperacao'] ?? '';
    $nova_senha_temporaria = 'Fatec2025SI';

    if (isset($admins[$email])) {
        
        if (enviarEmailRecuperacao($email, $nova_senha_temporaria)) {
            $mensagem = "Sucesso! Um e-mail com a nova senha foi enviado para $email.";
            $mensagem_classe = 'sucesso'; // Classe de sucesso
        } else {
            $mensagem = "Erro ao enviar o e-mail. Tente novamente mais tarde.";
            $mensagem_classe = 'erro'; // Classe de erro
        }

    } else {
        $mensagem = "E-mail não encontrado em nosso cadastro.";
        $mensagem_classe = 'erro'; // Classe de erro
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Recuperação de Senha</h2>
    <p style="margin-bottom: 1.5rem;">Digite seu e-mail de login para resetar sua senha.</p>

    <?php if ($mensagem): ?>
        <p class="mensagem <?= $mensagem_classe ?>"><?= htmlspecialchars($mensagem) ?></p>
    <?php endif; ?>

    <form method="post" action="esqueci_senha.php">
        <label>E-mail:</label>
        <input type="email" name="email_recuperacao" required>

        <button type="submit">Recuperar</button>
    </form>
    
    <a href="index.php">Voltar ao Login</a>
</div>
    
</body>
</html>
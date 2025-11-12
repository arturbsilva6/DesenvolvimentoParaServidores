<?php

require 'usuarios.php';
require 'notificacao.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email_recuperacao'] ?? '';
    $nova_senha_temporaria = 'Fatec2025SI';

    if (isset($admins[$email])) {
        
        if (enviarEmailRecuperacao($email, $nova_senha_temporaria)) {
            $mensagem = "Sucesso! Um e-mail com a nova senha foi enviado para $email.";
        } else {
            $mensagem = "Erro ao enviar o e-mail. Tente novamente mais tarde.";
        }

    } else {
       
        $mensagem = "E-mail não encontrado em nosso cadastro.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
</head>
<body>

<h2>Recuperação de Senha</h2>
<p>Digite seu e-mail de login para resetar sua senha.</p>

<?php if ($mensagem): ?>
    <p style="color: blue;"><?= htmlspecialchars($mensagem) ?></p>
<?php endif; ?>

<form method="post" action="esqueci_senha.php">
    <label>E-mail:</label><br>
    <input type="email" name="email_recuperacao" required><br><br>

    <button type="submit">Recuperar</button>
</form>
<br>
<a href="index.php">Voltar ao Login</a>
    
</body>
</html>
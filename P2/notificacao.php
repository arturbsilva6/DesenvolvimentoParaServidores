<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarNotificacaoLogin($usuario) {

    date_default_timezone_set('America/Sao_Paulo');
    $dataHora = date('d/m/Y \à\s H:i:s');

    $mail = new PHPMailer(true);

    try {
       
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'artbsilva6@gmail.com'; 
        $mail->Password   = 'cwku ixrz hwsv rdtx';      
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

       
        $mail->setFrom('arturbsilva6@gmail.com', 'Sistema de Login');  
        $mail->addAddress('artbsilva6@gmail.com', 'Admin do Sistema'); 

        $mail->isHTML(false); 
        $mail->Subject = 'Acesso bem sucedido ao Sistema';
        $mail->Body  = "Olá,\n\nO usuário '$usuario' acabou de fazer login no sistema.\n\n";
        $mail->Body .= "Data e Hora do Acesso: $dataHora\n";

        $mail->send();
       
    } catch (Exception $e) {
        error_log("Erro ao enviar notificação de login: {$mail->ErrorInfo}");
    }
}

function enviarEmailRecuperacao($email_destinatario, $nova_senha) {
    
    $mail = new PHPMailer(true);

    try {
       
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'artbsilva6@gmail.com'; 
        $mail->Password   = 'cwku ixrz hwsv rdtx'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        // Remetente e Destinatário
        $mail->setFrom('artbsilva6@gmail.com', 'Sistema - Recuperação');
        $mail->addAddress($email_destinatario); // Envia para o e-mail que solicitou

        // Conteúdo do E-mail
        $mail->isHTML(false); 
        $mail->Subject = 'Recuperação de Senha do Sistema';
        $mail->Body    = "Olá,\n\nConforme solicitado, sua senha foi resetada.\n\n";
        $mail->Body   .= "Sua nova senha temporária é: " . $nova_senha . "\n\n";
        $mail->Body   .= "Recomendamos que você acesse o sistema e altere esta senha assim que possível.";

        $mail->send();
        
        return true; // Sucesso

    } catch (Exception $e) {
        error_log("Erro ao enviar e-mail de recuperação: {$mail->ErrorInfo}");
        return false; // Falha
    }
}
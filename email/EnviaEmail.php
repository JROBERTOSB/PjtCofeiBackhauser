<?php

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

# Servidor de envio (SMTP)
$mail->Host = 'smtp.live.com'; // Hotmail
#$mail->Host = 'smtp.gmail.com'; // Gmail

# Autenticação
$mail->SMTPAuth = true;
$mail->Username = 'robertoeducacional@outlook.com';
$mail->Password = 'edu222223';

# 
$mail->SMTPSecure = 'tls';

# Porta TCP
$mail->Port = 587;

# Para
$mail->setFrom('robertoeducacional@outlook.com', 'Roberto');

# Adicionar Emails
$mail->addAddress($_POST['email'], $_POST['nome']);
//$mail->addAddress('ellen@example.com');

# responder para
//$mail->addReplyTo('info@example.com', 'Information');

# Com cópia
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

# Anexos
//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');

# Formato Html
$mail->isHTML(true);

# Corpo da mensagem
$mail->Subject = $_POST['assunto'];
$mail->Body    = $_POST['mensagem'];
$mail->AltBody = $_POST['mensagem'];

# Envio
if(!$mail->send()) {
    echo 'Erro ao enviar a mensagem.';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada com sucesso!';
}
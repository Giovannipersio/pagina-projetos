<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Acesso inválido.');
}

$name    = trim($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    exit('Preencha os campos obrigatórios.');
}

$to = "giovanni.persio@outlook.com";
$subject = "Contato pelo site";

$body = "Name: {$name}\r\n"
      . "Email: {$email}\r\n"
      . "Phone: {$phone}\r\n"
      . "Message:\r\n{$message}";

$headers  = "From: contato@seudominio.com\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo "Mensagem enviada com sucesso.";
} else {
    echo "Erro ao enviar mensagem.";
}

?>
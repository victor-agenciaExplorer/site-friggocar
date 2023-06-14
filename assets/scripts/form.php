<?php

if ($_POST) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $tel = addslashes($_POST['tel']);
    $message = addslashes($_POST['message']);
    
    $from = 'site@friggocar.com.br';
    $to = 'vendas@friggocar.com.br';
    $subjet = 'Contato - Formulário Friggocar';

    $body = "Nome: " . $name . "\r\n" .
        "E-mail: " . $email . "\r\n" .
        "Telefone: " . $tel . "\r\n" .
        "Mensagem: " . $message;

    $headers = "From: Friggocar <$from> \r\n";
    $headers .= "Return-Path: $from\r\n";
    $headers .= "Bcc: $from \r\n";
    $headers .= "Reply-to: $email \r\n";
    $headers .= "X-Mailer:PHP/" . phpversion();

    $sendMail = mail($to, $subjet, $body, $headers);

    header('location: ../../obrigado.php');
}

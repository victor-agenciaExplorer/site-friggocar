<?php

if ($_POST) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);

    $from = 'site@friggocar.com.br';
    $to = 'vendas@friggocar.com.br';
    $subjet = 'Newsletter - Friggocar';

    $body = "Nome: " . $name . "\r\n" .
        "E-mail: " . $email . "\r\n";

    $headers = "From: Friggocar <$from> \r\n";
    $headers .= "Return-Path: $from\r\n";
    $headers .= "Bcc: $from \r\n";
    $headers .= "Reply-to: $email \r\n";
    $headers .= "X-Mailer:PHP/" . phpversion();

    $sendMail = mail($to, $subjet, $body, $headers);

    header('location: ../../obrigado-newsletter.php');
}

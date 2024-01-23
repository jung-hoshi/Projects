<?php
$username = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';

if (strlen($username) < 2)
    $error = 'Введите имя';
else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    $error = 'Введите корректный Email';
else if (strlen($mess) < 3)
    $error = 'Введите сообщение';

if ($error != ''){
    echo $error;
    exit();
}

$to = 'some@gmail.com';
$subject = "=?utf-8?B?".base64_encode("Новое сообщение")."?=";
$message = "Пользователь: $username<br>$mess";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";


if (mail($to, $subject, $message, $headers)) {
    echo "Done";
} else {
    echo "Ошибка при отправке сообщения.";
}


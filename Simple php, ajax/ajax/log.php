<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';

if (strlen($login) < 3)
    $error = 'Введите логин';
else if (strlen($password) < 3)
    $error = 'Введите пароль';

if ($error != ''){
    echo $error;
    exit();
}

require_once "../lib/mysql.php";

$sql = 'SELECT id, password FROM users WHERE `login` = ?';
$query = $pdo->prepare($sql);
$query->execute([$login]);

if ($query->rowCount() == 0) {
    echo 'Такого пользователя нет';
} else {
    $user = $query->fetch(PDO::FETCH_ASSOC);
    $hashedPasswordFromDB = $user['password'];

    if (password_verify($password, $hashedPasswordFromDB)) {
        echo "Done";
        setcookie('login', $login, time() + 3600  * 24 * 30, "/");
    } else {
        echo 'Неверный пароль';
    }
}





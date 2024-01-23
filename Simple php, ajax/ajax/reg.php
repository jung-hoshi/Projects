<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    $error = '';

    if (strlen($username) < 2)
        $error = 'Введите имя';
    else if (strlen($email) < 5)
        $error = 'Введите Email';
    else if (strlen($login) < 3)
        $error = 'Введите логин';
    else if (strlen($password) < 3)
        $error = 'Введите пароль';


    if ($error != ''){
        echo $error;
        exit();
    }


    require_once "../lib/mysql.php";

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $login,  $hashedPassword]);

    echo "Done";



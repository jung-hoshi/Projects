<?php
$user = "root";
$dbPassword = "root";
$db = "WebBlog";
$host = "localhost";
$port = 8889;

$dsn = 'mysql:host='.$host.';dbname='.$db.';port='.$port;
$pdo = new PDO($dsn, $user, $dbPassword);


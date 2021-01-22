<?php

$dsn = 'mysql:dbname=sysmoveis;host=127.0.0.1';
$user = 'root';
$password = '';


$dbh = null;
try {
    $dbh = new PDO($dsn, $user, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>
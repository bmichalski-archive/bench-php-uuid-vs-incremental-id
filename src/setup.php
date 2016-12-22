<?php

require __DIR__.'/../vendor/autoload.php';

$benchDb = 'bench_db';

$conn = null;

$conn = new \PDO('mysql:host=mariadb', 'root', 'root');

$exec = function ($sql) use (&$conn) {
    $conn->exec($sql);
};

$execPrepared = function ($sql, array $parameters = [], array $types = []) use (&$conn) {
    $stmt = $conn->prepare($sql);

    foreach ($parameters as $parameter => $value) {
        $type = isset($types[$parameter]) ? $types[$parameter] : \PDO::PARAM_STR;

        $stmt->bindValue($parameter, $value, $type);
    }

    $stmt->execute();
};

$exec('DROP DATABASE '.$benchDb);
$exec('CREATE DATABASE '.$benchDb);

$conn = new \PDO(
    'mysql:dbname='.$benchDb.';host=mariadb',
    'root',
    'root',
    [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ]
);

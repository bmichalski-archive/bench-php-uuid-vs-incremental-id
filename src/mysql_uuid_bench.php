<?php

require __DIR__ . '/mysql_setup.php';

$exec('CREATE TABLE uuid (id BINARY(16) PRIMARY KEY)');

$maxI = 10000;

for ($i = 0; $i < $maxI; $i += 1) {
    $execPrepared('INSERT INTO uuid (id) VALUES (:uuid)', [ 'uuid' => \Ramsey\Uuid\Uuid::uuid1()->getBytes() ], [ 'uuid' => \PDO::PARAM_LOB ]);
}

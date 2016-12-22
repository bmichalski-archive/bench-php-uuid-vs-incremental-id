<?php

require __DIR__.'/setup.php';

$exec('CREATE TABLE uuid (uuid BINARY(16) PRIMARY KEY)');

$maxI = 10000;

for ($i = 0; $i < $maxI; $i += 1) {
    $uuid = \Ramsey\Uuid\Uuid::uuid1();

    $execPrepared('INSERT INTO uuid (uuid) VALUES (:uuid)', [ 'uuid' => $uuid->getBytes() ], [ 'uuid' => \PDO::PARAM_LOB ]);
}

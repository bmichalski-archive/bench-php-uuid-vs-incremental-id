<?php

require __DIR__ . '/postgres_setup.php';

$exec('CREATE TABLE uuid (id UUID PRIMARY KEY)');

$maxI = 10000;

for ($i = 0; $i < $maxI; $i += 1) {
    $execPrepared('INSERT INTO uuid (id) VALUES (:uuid)', [ 'uuid' => \Ramsey\Uuid\Uuid::uuid1() ]);
}

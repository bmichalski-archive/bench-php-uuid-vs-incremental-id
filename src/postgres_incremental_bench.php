<?php

require __DIR__ . '/postgres_setup.php';

$exec('CREATE TABLE incremental (id SERIAL PRIMARY KEY)');

$maxI = 10000;

for ($i = 0; $i < $maxI; $i += 1) {
    $exec('INSERT INTO incremental (id) VALUES (DEFAULT)');
}

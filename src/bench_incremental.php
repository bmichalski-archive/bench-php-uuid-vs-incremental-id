<?php

require __DIR__.'/setup.php';

$exec('CREATE TABLE incremental (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY)');

$maxI = 10000;

for ($i = 0; $i < $maxI; $i += 1) {
    $exec('INSERT INTO incremental () VALUES ()');
}

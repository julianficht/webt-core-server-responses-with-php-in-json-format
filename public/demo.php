<?php

require_once '../src/Seeder.php';

$osts = Seeder::seed();

header('Content-type: application/json');

echo json_encode(array_map(function ($ost) {
    return $ost->getOSTData();
}, $osts), JSON_PRETTY_PRINT);

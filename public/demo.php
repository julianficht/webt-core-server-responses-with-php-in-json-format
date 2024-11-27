<?php
require_once '../src/Seeder.php';

$osts = Seeder::seed();

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    foreach ($osts as $ost) {
        if ($ost->getOSTData()['id'] === $id) {
            header('Content-type: application/json');
            echo json_encode($ost->JsonSerialize(), JSON_PRETTY_PRINT);
            exit;
        }
    }

    echo "The OST with the id {$id} doesn't exist!";
    exit;
}

if (isset($_GET['all'])) {
    header('Content-type: application/json');
    echo json_encode(array_map(function($ost) {
        return $ost->JsonSerialize();
    }, $osts), JSON_PRETTY_PRINT);
    exit;
}
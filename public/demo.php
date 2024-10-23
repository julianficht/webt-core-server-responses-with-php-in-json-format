<?php
require_once '../src/Seeder.php';

$osts = Seeder::seed();

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    foreach ($osts as $ost) {
        if ($ost->getOSTData()['id'] === $id) {
            header('Content-type: application/json');
            echo json_encode($ost->getOSTData(), JSON_PRETTY_PRINT);
            exit;
        }
    }
    echo "Error: The OST with the id {$id} doesn't exist!";
} else {
    header('Content-type: application/json');
    echo json_encode(array_map(function($ost) {
        return $ost->getOSTData();
    }, $osts), JSON_PRETTY_PRINT);
}
<?php
require_once '../src/OST.php';
require_once '../src/Song.php';

$ost = new OST(1, "Legend of Zelda OST", "Legend of Zelda", 1986);

$song1 = new Song(1, "Main Theme", "Koji Kondo", 1, "2:30");
$song2 = new Song(2, "Dungeon Theme", "Koji Kondo", 2, "1:45");

$ost->addSong($song1);
$ost->addSong($song2);

header('Content-type: application/json');
echo json_encode($ost->getOSTData(), JSON_PRETTY_PRINT);
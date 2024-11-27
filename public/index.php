<?php
require_once '../src/OST.php';
require_once '../src/Song.php';

$ost = new OST(2, "Super Mario OST", "Super Mario Bros", 1985);

$song1 = new Song(1, "Overworld Theme", "Koji Kondo", 1, "3:15");
$song2 = new Song(2, "Underground Theme", "Koji Kondo", 2, "2:00");
$song3 = new Song(3, "Castle Theme", "Koji Kondo", 3, "1:45");

$ost->addSong($song1);
$ost->addSong($song2);
$ost->addSong($song3);

header('Content-type: application/json');
echo json_encode($ost->JsonSerialize(), JSON_PRETTY_PRINT);
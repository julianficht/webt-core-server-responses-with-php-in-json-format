<?php

require_once 'OST.php';
require_once 'Song.php';

class Seeder
{
    public static function seed()
    {
        $osts = [];

        $ost1 = new OST(1, "Final Fantasy VII OST", "Final Fantasy VII", 1997);
        $ost1->addSong(new Song(1, "Opening Theme", "Nobuo Uematsu", 1, "3:45"));
        $ost1->addSong(new Song(2, "Aerith's Theme", "Nobuo Uematsu", 2, "4:12"));
        $ost1->addSong(new Song(3, "One-Winged Angel", "Nobuo Uematsu", 3, "6:30"));
        $ost1->addSong(new Song(4, "Victory Fanfare", "Nobuo Uematsu", 4, "1:30"));
        $osts[] = $ost1;

        $ost2 = new OST(2, "The Legend of Zelda: Ocarina of Time OST", "The Legend of Zelda: Ocarina of Time", 1998);
        $ost2->addSong(new Song(5, "Title Theme", "Koji Kondo", 1, "2:15"));
        $ost2->addSong(new Song(6, "Hyrule Field Theme", "Koji Kondo", 2, "3:20"));
        $ost2->addSong(new Song(7, "Zelda's Lullaby", "Koji Kondo", 3, "2:05"));
        $ost2->addSong(new Song(8, "Gerudo Valley", "Koji Kondo", 4, "2:50"));
        $osts[] = $ost2;

        $ost3 = new OST(3, "Chrono Trigger OST", "Chrono Trigger", 1995);
        $ost3->addSong(new Song(9, "Chrono Trigger Theme", "Yasunori Mitsuda", 1, "4:00"));
        $ost3->addSong(new Song(10, "Frog's Theme", "Yasunori Mitsuda", 2, "2:45"));
        $ost3->addSong(new Song(11, "Battle Theme", "Yasunori Mitsuda", 3, "3:10"));
        $ost3->addSong(new Song(12, "End of Time", "Yasunori Mitsuda", 4, "1:55"));
        $osts[] = $ost3;

        return $osts;
    }
}
<?php
class OST
{
    protected $tracklist = [];
    public function __construct(protected int $id, protected string $name, protected string $videoGameName, protected string $releaseYear) {}

    public function getTracklist(): array { return $this->tracklist; }
    public function addSong()
    {

    }
}

class Song {
    
}

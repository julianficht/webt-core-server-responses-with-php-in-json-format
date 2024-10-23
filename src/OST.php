<?php
class OST
{
    protected $trackList = [];
    public function __construct(protected int $id, protected string $name, protected string $videoGameName, protected string $releaseYear) {}

    public function addSong(Song $song) {
        $this->trackList[] = $song;
    }

    public function getOSTData() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'videoGameName' => $this->videoGameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => array_map(function($song) {
                return $song->getSongData();
            }, $this->trackList)
        ];
    }

}

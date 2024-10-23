<?php
class Song {
    public function __construct(protected int $id, protected string $name, protected string $artist, protected int $trackNumber, protected string $duration) {}

    public function getSongData() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration
        ];
    }
}

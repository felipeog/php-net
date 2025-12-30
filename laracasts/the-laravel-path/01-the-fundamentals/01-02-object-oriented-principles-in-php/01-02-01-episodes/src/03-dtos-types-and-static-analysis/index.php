<?php

// Data Transfer Object (DTO) with type hints
class Song
{
    // type-hinted properties
    public function __construct(
        public string $name,
        public string $artist
    ) {
    }
}

$songs = [
    new Song('Back in Black', 'AC/DC'),
    new Song('Highway to Hell', 'AC/DC'),
    new Song('Thunderstruck', 'AC/DC'),
];

foreach ($songs as $song) {
    echo $song->name;
}

class Playlist
{
    /**
     * @param string $name
     * @param Song[] $songs
     */
    public function __construct(
        public string $name,
        public array $songs
    ) {
    }

    public function shuffle()
    {
        shuffle($this->songs);
    }
}

$playlist = new Playlist('AC/DC', $songs);

echo $playlist->name;

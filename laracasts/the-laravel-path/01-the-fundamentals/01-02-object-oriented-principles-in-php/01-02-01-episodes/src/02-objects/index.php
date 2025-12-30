<?php

class Playlist_01
{
    // public instance property
    public $name;
}

$playlist_01 = new Playlist_01();

// property can be assigned directly
$playlist_01->name = 'Rock';

// property can be accessed directly
echo "Playlist_01 name: {$playlist_01->name}\n";

// =============================================================================

class Playlist_02
{
    public $name;

    // constructor method
    public function __construct($name)
    {
        // property assignment
        $this->name = $name;
    }
}

$playlists_02 = [];
$playlists_02[] = new Playlist_02('Jazz');
$playlists_02[] = new Playlist_02('Classical');
$playlists_02[] = new Playlist_02('Pop');

foreach ($playlists_02 as $playlist) {
    echo "Playlist_02 name: {$playlist->name}\n";
}

// =============================================================================

class Playlist_03
{
    public $name;
    public $songs;

    public function __construct($name, $songs)
    {
        $this->name = $name;
        $this->songs = $songs;
    }

    public function shuffle()
    {
        shuffle($this->songs);
    }
}

$playlist_03 = new Playlist_03('AC/DC', [
    'Back in Black',
    'Thunderstruck',
    'You Shook Me All Night Long',
]);

echo "Playlist_03 name: {$playlist_03->name}\n";
echo "Playlist_03 songs: " . implode(', ', $playlist_03->songs) . "\n";

$playlist_03->shuffle();

echo "Playlist_03 shuffled\n";
echo "Playlist_03 songs: " . implode(', ', $playlist_03->songs) . "\n";

// =============================================================================

class Playlist_04
{
    // contstructor property promotion
    public function __construct(
        public $name,
        public $songs
    ) {}

    public function shuffle()
    {
        shuffle($this->songs);
    }
}

$playlist_04 = new Playlist_04('Led Zeppelin', [
    'Stairway to Heaven',
    'Whole Lotta Love',
    'Kashmir',
]);

echo "Playlist_04 name: {$playlist_04->name}\n";
echo "Playlist_04 songs: " . implode(', ', $playlist_04->songs) . "\n";

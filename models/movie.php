<?php

class Movie
{
    private string $title;
    private int $duration;
    private string $genre;

    public function __construct(string $title, int $duration, string $genre)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }
}

$pokemon = new Movie("", 0, "");

try {
    $pokemon->setTitle("Pokemon!!!");
    $pokemon->setDuration(104);
    $pokemon->setGenre("animation");

    var_dump($pokemon->getTitle(), $pokemon->getDuration(), $pokemon->getGenre());
} catch (Exception $e) {
    echo $e->getMessage();
}

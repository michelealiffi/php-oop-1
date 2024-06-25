<?php

require_once __DIR__ . '/Actor.php';

class Movie
{
    private string $title;
    private int $duration;
    private int $year;
    private array $genres = [];
    private array $actors = [];
    private static int $movie_id = 0;

    public function __construct(string $title, int $duration, int $year, array $genre, array $actors)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->year = $year;
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

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        if ($year < 1900) {
            throw new Exception("Non è ancora uscito Star Wars");
        }

        $this->year = $year;
    }

    public function getGenre(): array
    {
        return $this->genres;
    }

    public function setGenre(string ...$genre): void
    {
        if (!in_array($genre, $this->genres)) {
            $this->genres = [...$this->genres, ...$genre];
        }
    }

    public function getActors(): array
    {
        return $this->actors;
    }

    public function setActor(Actor $actor): void
    {
        $this->actors[] = $actor;
    }
}

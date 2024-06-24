<?php

require_once __DIR__ . "/models/movie.php";

$movie1 = new Movie("Star Wars", 99, "Sci-fi");
$movie2 = new Movie("Back to The Future", 45, "Sci-fi");
$movie3 = new Movie("Matrix", 105, "Sci-fi");
$movie4 = new Movie("The Avengers", 280, "Action");
$movie5 = new Movie("Inside Out", 70, "Comedy");
$movie6 = new Movie("The Two Popes", 175, "Drama");
$movie7 = new Movie("Oppenheimer", 360, "Thriller");
$movie8 = new Movie("The Ring", 10, "Horror");

$movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8];

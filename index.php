<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/db.php";

$movie1 = new Movie("Pokemon");
$movie2 = new Movie("Star Wars");
$movie3 = new Movie("The Ring");

$error = "";

try {
    $movie1->setTitle("Pokemon!!!");
    $movie1->setDuration(104);
    $movie1->setYear(1999);
    $movie1->setGenre("animation", "drama");
    $movie1->setActor(new Actor("Ash", "Ketchum"));
    $movie1->setActor(new Actor("Jhonny", "Silverhand"));

} catch (Exception $error) {
    $error = $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/iperH9IBTIalnkREa5pL" rel="icon" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP OOP Movies</title>
</head>

<body>
    <h1 class="text-center">Movies</h1>
    <div class="container">
        <h3>List</h3>
        <?php if($error) : ?>
            <div>Errore: <?php echo $error ?></div>
        <?php else : ?>
        <ul>
            <?php foreach ($movie_list as $movie) : ?>
                <li>
                    <h5><?php echo $movie->getTitle(); ?></h5>
                    <p><?php echo $movie->getDuration(); ?></p>
                    <p><?php echo $movie->getGenre(); ?></p>
                </li>
            <?php endforeach ?>
            <?php foreach ($movie["actors"] as $actor) : ?>
                <p><?php echo $actor?->getName() ?> </p>
                <p><?php echo $actor?->getSurname() ?></p>
                <?php if ($actor !== end($movie["actors"])) : ?>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
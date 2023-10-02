<?php

include './Models/Genre.php';
include './Models/Movie.php';
include './Database/db.php';
$movies = [];
foreach ($movies_data as $movie_data) {
    $genres = [];
    foreach ($movie_data['genres'] as $genre_data) {
        $genres[] = new Genre($genre_data);

    }
    // echo "<pre>";
    // var_dump($genres);
    // echo "</pre>";
    $movies[] = new Movie($movie_data['title'], $genres, $movie_data['data_out'], $movie_data['vote']);

}
;
foreach ($movies as $movie) {
    echo $movie->get_film();
    echo '<hr>';
}
;
// echo "<pre>";
// var_dump($movies);
// echo "</pre>";
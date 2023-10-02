<?php

include __DIR__ . './Models/Genre.php';
include __DIR__ . './Models/Movie.php';
include __DIR__ . './Database/db.php';
$movies = [];
foreach ($movies_data as $movie_data) {
  $genres = [];
  foreach ($movie_data['genres'] as $genre_data) {
    $genres[] = new Genre($genre_data);

  }
  $movies[] = new Movie($movie_data['title'], $genres, $movie_data['data_out'], $movie_data['vote']);
}
;
// foreach ($movies as $movie) {
//     echo $movie->get_film();
//     echo '<hr>';
// }
// ;
// echo "<pre>";
// var_dump($movies);
// echo "</pre>";
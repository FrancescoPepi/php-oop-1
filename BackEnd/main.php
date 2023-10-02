<?php

include __DIR__ . './Models/Production.php';
include __DIR__ . './Models/TvSerie.php';
include __DIR__ . './Models/Movie.php';
include __DIR__ . './Models/Genre.php';
include __DIR__ . './Database/db.php';
$movies = [];
$tv_series = [];
foreach ($movies_data as $movie_data) {
  $genres = [];
  foreach ($movie_data['genres'] as $genre_data) {
    $genres[] = new Genre($genre_data);

  }
  $movies[] = new Movie($movie_data['title'], $genres, $movie_data['data_out'], $movie_data['vote'], $movie_data['duration']);
}
;

foreach ($tv_series_data as $tv_serie_data) {
  $genres = [];
  foreach ($tv_serie_data['genres'] as $genre_data) {
    $genres[] = new Genre($genre_data);

  }
  $tv_series[] = new TvSerie($tv_serie_data['title'], $genres, $tv_serie_data['data_out'], $tv_serie_data['n_episodes'], $tv_serie_data['n_seasons']);
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
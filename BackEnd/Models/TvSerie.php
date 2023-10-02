<?php
class TvSerie extends Production
{
    public $titolo;
    public $genres;
    public $data;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(
        string $titolo,
        array $genres,
        string $data,
        int $number_of_episodes = null,
        int $number_of_seasons = null,

    ) {
        parent::__construct($titolo, $genres, $data);
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }

    public function get_details()
    {
        $text_genre = $this->get_genres_text();
        return " Titolo: $this->titolo <br> Uscito: $this->data <br> Genere: $text_genre<br> N° Episodi: $this->number_of_episodes <br> N° stagioni: $this->number_of_seasons";
    }
}
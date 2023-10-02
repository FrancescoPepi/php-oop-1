<?php
class Movie extends Production
{
    public $titolo;
    public $genres;
    public $data;
    public $voto;
    public $published_year;
    public $running_time;
    public function __construct(
        string $titolo,
        array $genres,
        string $data,
        int $voto = null,
        int $running_time = null,

    ) {
        parent::__construct($titolo, $genres, $data);
        $this->voto = $voto;
        $this->running_time = $running_time;
    }

    public function get_details()
    {
        $text_genre = $this->get_genres_text();
        return " Titolo: $this->titolo <br> Uscito: $this->data <br> Genere: $text_genre <br> Voto: $this->voto <br> Durata: $this->running_time";
    }
}
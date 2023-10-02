<?php
class Movie
{
    public $titolo;
    public $genres;
    public $data;
    public $voto;
    // public $descrizione;
    public function __construct(
        string $titolo = null,
        array $genres = null,
        string $data = null,
        int $voto = null,
        // string $descrizione,

    ) {
        $this->titolo = $titolo;
        $this->genres = $genres;
        $this->data = $data;
        $this->voto = $voto;
        // $this->descrizione = $descrizione;
    }
    public function get_genres_text()
    {
        $text_genre = '';
        $trattino = '';
        foreach ($this->genres as $genre => $value) {
            $genre != (count($this->genres) - 1) ? $trattino = '-' : $trattino = '  ';
            $text_genre .= $value->genre . $trattino;


        }
        ;
        return $text_genre;
    }

    public function get_film()
    {
        $text_genre = $this->get_genres_text();
        return " Titolo: $this->titolo <br> Uscito: $this->data <br> Genere: $text_genre <br> Voto: $this->voto";
    }
}
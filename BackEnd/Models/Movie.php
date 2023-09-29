<?php
class Movie
{
    public $titolo;
    public $genere;
    public $data;
    public $voto;
    public $descrizione;
    public function __construct(
        string $titolo,
        Genere $genere,
        string $data,
        int $voto,
        string $descrizione,

    ) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->data = $data;
        $this->voto = $voto;
        $this->descrizione = $descrizione;
    }
    public function get_film()
    {
        return "<hr> Titolo: $this->titolo <br> Uscito: $this->data <br> Genere <br> Voto: $this->voto <br> Descrizione: $this->descrizione<hr>";
    }
}
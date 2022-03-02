<?php

class Movie
{
    public $title;
    public $genre;
    public $language;
    public $rank;
    public $recomend = '';

    public function __construct($title, $genre, $language, $rank)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->rank = $rank;
    }

    public function get_recomend()
    {
        if ($this->rank > 3) {
            $this->recomend = 'Consigliato';
        } else $this->recomend = 'Non consigliato';
        return $this->recomend;
    }

    public function all_print($movies)
    {
        foreach ($movies as $movie) {
            $this->get_recomend();
            echo $movie;
            echo "<br>";
        }
    }
}

$firstMovie = new Movie('Social Network', 'Biografia', 'en', 4);

$secondMovie = new Movie('Gli Stagisti', 'Commedia', 'en', 3);

$thirdMovie = new Movie('Bad Boys', 'Azione', 'en', 2);

/* $firstMovie->all_print($firstMovie);

$secondMovie->all_print($secondMovie);

$thirdMovie->all_print($thirdMovie);
 */
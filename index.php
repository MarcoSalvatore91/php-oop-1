<?php

class Movie
{
    public $title;
    public $genre;
    public $language;
    public $rank;

    function __construct($title, $genre, $language, $rank)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->rank = $rank;
    }

    function all_print($movies)
    {
        foreach ($movies as $movie) {
            echo $movie;
            echo "<br>";
        }
    }
}

$firstMovie = new Movie('Social Network', 'Biografia', 'en', '4');

$secondMovie = new Movie('Gli Stagisti', 'Commedia', 'en', '3');

$thirdMovie = new Movie('Bad Boys', 'Azione', 'en', '2');

$firstMovie->all_print($firstMovie);

$secondMovie->all_print($secondMovie);

$thirdMovie->all_print($thirdMovie);

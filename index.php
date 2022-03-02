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
}

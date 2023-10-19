
<?php
// è definita una classe ‘Movie’ => 
// all’interno della classe sono dichiarate delle variabili d’istanza => 
// all’interno della classe è definito un costruttore => 
// all’interno della classe è definito almeno un metodo

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


class Movie
{
    public $title;
    public $duration;
    public $stars;
    public $genre;

    function __construct($title, $duration, $stars, $genre)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->stars = $stars;
        $this->genre = $genre;
    }

    function get_stars()
    {
        return $this->stars;
    }
}

$movie = new Movie("una notte al musero", 120, 4, "commedia");
$movie2 = new Movie("el camino", 120, 3, "action");
?>
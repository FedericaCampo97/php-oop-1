<?php
// è definita una classe ‘Movie’ => 
// all’interno della classe sono dichiarate delle variabili d’istanza => 
// all’interno della classe è definito un costruttore => 
// all’interno della classe è definito almeno un metodo

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
class Movie
{
    public $title;
    public $image;
    public $duration;
    public $stars;
    public $genre;

    function __construct($title, $genre, $duration, $stars, $image)
    {
        $this->title = $title;
        $this->image = $this->get_fullurl_image($image);
        $this->duration = $duration;
        $this->stars = $stars;
        $this->genre = $genre;
    }

    function get_fullurl_image($image)
    {
        return "./img/" . $image . ".jpg";
    }
}

$movie = new Movie("Una notte al museo", "Commedia", 120, 4, "notte");

$movie2 = new Movie("Red", "Action", 120, 3, "red");

$movie3 = new Movie("Ghost", "Thriller", 190, 5, "ghost");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="block_header text-center">
            <h1>Favorite Movies</h1>
        </div>
    </header>
    <main>
        <div class="container text-center block_container">
            <div class="row align-items-start">
                <div class="col p-3">
                    <div class="card block_card">
                        <?php
                        echo "<img src='$movie->image'>"
                        ?>
                        <div>
                            <?php
                            echo "<h5> $movie->title</h5>";
                            echo "<p><strong>Genere:</strong> $movie->genre</p>";
                            echo "<p><strong>Durata:</strong> $movie->duration minuti</p>";
                            echo "<p><strong>Voto:</strong> $movie->stars</p>";
                            ?>
                        </div>


                    </div>
                </div>
                <div class="col p-3">
                    <div class="card block_card">
                        <?php
                        echo "<img src='$movie2->image'>"
                        ?>
                        <div>
                            <?php
                            echo "<h5>$movie2->title</h5>";
                            echo "<p><strong>Genere:</strong> $movie2->genre</p>";
                            echo "<p><strong>Durata:</strong> $movie2->duration minuti</p>";
                            echo "<p><strong>Voto:</strong> $movie2->stars</p>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="card block_card">
                        <?php
                        echo "<img src='$movie3->image'>";
                        ?>
                        <div>
                            <?php
                            echo "<h5>$movie3->title</h5>";
                            echo "<p><strong>Genere:</strong> $movie3->genre</p>";
                            echo "<p><strong>Durata:</strong> $movie3->duration minuti</p>";
                            echo "<p><strong>Voto:</strong> $movie3->stars</p>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
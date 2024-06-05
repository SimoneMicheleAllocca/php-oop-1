<?php
// Importa la classe Genre
require_once __DIR__ . "/genre.php";
// Importa la classe Movie
require_once __DIR__ . "/movie.php";

// Crea istanze della classe Genre
$comedy = new Genre("Commedia");
$thriller = new Genre("Thriller");
$animation = new Genre("Animazione");
$action = new Genre("Azione");

// Crea istanze della classe Movie
$film1 = new Movie("Interstellar", 2014, $action);
$film2 = new Movie("Una notte al museo", 2006, $comedy);
$film3 = new Movie("I guardiano del destino", 2011, $thriller);
$film4 = new Movie("Mulan", 1998, $animation);

// Stampa i film
$films = [$film1, $film2, $film3, $film4];

foreach ($films as $index => $film) {
    echo "Film " . ($index + 1) . ":<br>";
    echo "Titolo: " . $film -> getTitle() . "<br>";
    echo "Anno di uscita: " . $film -> getYear() . "<br>";
    echo "Genere: " . $film -> getGenre() -> getName() . "<br><br>";
}
?>
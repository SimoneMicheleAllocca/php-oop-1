<?php

class Movie {
    
    private string $title;
    private int $year;
    private Genre $genre;

    // Costruttore della classe Movie
    public function __construct(string $title, int $year, Genre $genre) {
        
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    //  titolo del film
    public function setTitle(string $title) {
        
        $this -> title = $title;
    }

    
    public function getTitle(): string {
        
        return $this->title;
    }

    // anno di uscita del film
    public function setYear(int $year) {
        
        $this->year = $year;
    }

    
    public function getYear(): int {
        
        return $this->year;
    }

    // genere del film
    public function setGenre(Genre $genre) {
        
        $this->genre = $genre;
    }

    
    public function getGenre(): Genre {
        
        return $this->genre;
    }
}
?>
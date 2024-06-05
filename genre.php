<?php


class Genre {
    
    private string $name;

    
    public function __construct(string $name) {
        
        $this->name = $name;
    }
    
    // nome del genere
    public function setName(string $name) {
        
        $this->name = $name;
    }

    
    public function getName() {
        
        return $this->name;
    }

}

?>
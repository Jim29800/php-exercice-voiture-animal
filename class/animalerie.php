<?php
class Animalerie {
    private $tableau_animaux= [];
    private $compteur=0;
    private $tableau_nom= [];
    
    public function __construct(){
        echo "Construction de l'objet  ".__CLASS__." <br />";
    }

    public function liste(){
        echo "La liste des animaux :<br />";
        foreach ($this->tableau_animaux as $animal) {
            echo $animal->getNom()." C'est un : ".get_class($animal)." et il fait : ".$animal->parler();
        }
        return $this;
    }
    public function ajout(Animal $nom){
        $this->compteur++;
        array_push($this->tableau_animaux, $nom);        
        return $this;
    }
    public function nombre(){
        echo "<br />";
        echo "il y a : ".$this->compteur." animaux. <br />";
        foreach ($this->tableau_animaux as $animal) {
            array_push($this->tableau_nom, $animal->race());               
        }
        $test = array_count_values($this->tableau_nom);
        foreach ($test as $key => $value) {
            echo $key." : ".$value."<br />";
        }
        echo "<br />";
        return $this;
    }
    public function __destruct(){
        echo "Destruction de l'objet ".__CLASS__." <br />";
    }
};
<?php
abstract class Animal{
    private $nom;
    public function __construct($nom, $animalerie){
        $this->nom = $nom;
        $animalerie->ajout($this);
    }
    public function getNom(){
        return "Nom : ".$this->nom."<br />";
    }
    abstract public function parler();
};

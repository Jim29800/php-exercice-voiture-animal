<?php 
abstract class Vehicule{
    protected $couleur;

    public function __construct($choixCouleur){
        $this->setCouleur($choixCouleur);
    }
    public function setCouleur($choixCouleur){
        $this->couleur = $choixCouleur;
    }
    public function getKlaxon(){
        return "pouet"; 
    }
    abstract public function avancer();
}
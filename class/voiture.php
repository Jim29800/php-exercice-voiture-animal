<?php
require_once("vehicule.php");
class Voiture extends Vehicule
{
    const INDICATEUR_ROUGE = 10;
    const CAPACITE_MAX = 50;
    private $reservoir;
    private $indicReservoirRouge;
    public static $nbVoiture = 0;
    //constructeur (1 seul)
    public function __construct ($choixCouleur) {
        $this->setReservoir(0);
        self::$nbVoiture++;
        parent::__construct($choixCouleur);
    }

    //abstraite
    public function avancer(){
        echo "La voiture roule en appuyant sur l'accélérateur";
        return $this;
    }


    //methode (set)
    public function setReservoir($reservoir){
        //implementation :
        if ($reservoir < self::CAPACITE_MAX) :
            $this->reservoir = $reservoir;

            //indicateur du reservoir
            if ($this->reservoir < self::INDICATEUR_ROUGE) {

                $this->indicReservoirRouge = true;

            }
            else {

                $this->indicReservoirRouge = false;

            }
        else :
            echo "Vous avez essayé de mettre ".$reservoir."L mais vous ne pouvez pas mettre plus de ". self::CAPACITE_MAX." L dans le reservoir";
        endif;
    }
    public function displayTableauDeBord(){
        if ($this->indicReservoirRouge) {
            return "Le reservoire à : ".$this->reservoir." L. Indicateur rouge allumé";
        }else{
            return "Le reservoire à : ".$this->reservoir." L. Indicateur rouge éteint";            
        }
    }
    //methodes
    public function demarerMoteur(){
        echo "Le moteur est allumer <br />";
        return $this;
    }
    public function eteindreMoteur(){
        echo "Le moteur est éteint  <br />";
        return $this;        
    }
    public function passerVitesse($numVitesse){
        echo "Vitesse changer : ".$numVitesse." <br />";    
        return $this;        
    }
    public function debrayer(){
        echo "Pedale de debrayage enfoncé, changement de vitesse possible  <br />"; 
        return $this;        
    }
    public function embrayer(){
        echo "Pedale de debrayage relevé, changement de vitesse impossible  <br />";     
        return $this;        
    }
}

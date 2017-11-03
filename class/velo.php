<?php
require_once("vehicule.php");
class Velo extends Vehicule
{
    private $selle;
    //construct
    
    public function pedaler(){
        echo "pedale !";
        return $this;
    }
    public function avancer(){
        echo "Le vélo avance en pédalant";
        return $this;
    }
}
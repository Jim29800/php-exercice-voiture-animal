<?php
require_once("animal.php");
class Chien extends Animal {
    public function parler(){
        return "ouaf <br />";
    }
    public function race(){
        return __CLASS__;      
    }
};

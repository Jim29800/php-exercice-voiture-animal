<?php
require_once("animal.php");
class Cheval extends Animal{
    public function parler(){
        return "Huhuhu <br />";      
    }
    public function race(){
        return __CLASS__;      
    }
}
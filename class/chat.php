<?php
require_once("animal.php");
class Chat extends Animal{
    public function parler(){
        return "miaou <br />";      
    }
    public function race(){
        return __CLASS__;      
    }
};
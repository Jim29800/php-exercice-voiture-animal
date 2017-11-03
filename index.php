<?php
//_____________________________________________EXERCICE VOITURE__________________________________________
//require("class/voiture.php");
//require("class/velo.php");

// $toyota = new Voiture();
// echo "Initiation : ".$toyota->displayTableauDeBord()."<br>";
// $toyota->setReservoir(40);
// echo "Après un essai d'ajout de 40L : ".$toyota->displayTableauDeBord()."<br>";
// $toyota->setReservoir(8);
// echo "Après un essai d'ajout de 8L  : ".$toyota->displayTableauDeBord()."<br>";
// $toyota->setReservoir(55);
// echo "<br>Après un essai d'ajout de 55L  : ".$toyota->displayTableauDeBord()."<br>";


// echo Voiture::$nbVoiture."<br>";
// $renault = new Voiture();
// echo Voiture::$nbVoiture."<br>";
// for ($i=0; $i < 1000 ; $i++) { 
    //     new Voiture();
    // }
    // echo Voiture::$nbVoiture."<br>";
    
    // $toyota = new Voiture("bleu");
    // var_dump($toyota);
    // $toyota -> demarerMoteur()
    //         -> debrayer()
    //         -> passerVitesse(1)
    //         -> embrayer()
    //         -> eteindreMoteur();
    // $mercier = new Velo("rouge");
    // var_dump($mercier);
    // $mercier -> pedaler();
    
    
    // $tableau_vehicules = [];
    // array_push($tableau_vehicules,
    // new Voiture("bleu"),
    // new Voiture("rouge"),
    // new Velo("jaune"),
    // new Voiture("noir"),
    // new Velo("rose")
    // );
    // var_dump($tableau_vehicules);
    
    // foreach ($tableau_vehicules as $tatayoyo) {
        //     $tatayoyo->avancer();
        //     echo "<br>";
        // }
//_____________________________________________EXERCICE ANIMALERIE__________________________________________

require("class/chat.php");
require("class/chien.php");
require("class/cheval.php");
require("class/animalerie.php");

$animalerie1 = new Animalerie();
$animalerie2 = new Animalerie();

$rex = new Chien("rex", $animalerie1);
$felindra = new Chat("felindra", $animalerie1);
$felix = new Chat("felix", $animalerie1);
$miaouss = new Chat("miaouss", $animalerie2);
$snoopy = new Chien("snoopy", $animalerie2);
$poney = new Cheval("poney", $animalerie1);
// $rex -> parler();
// $felindra -> parler();
// $rex -> getNom();
// $felindra->getNom();
// $aa -> ajout($rex)
//     -> ajout($felindra)
//     -> ajout($felix)
//     -> ajout($miaouss)
//     -> ajout($snoopy)    
//     -> liste();
echo "<strong>ANIMALERIE 1 :</strong><br />";
$animalerie1->liste();
$animalerie1->nombre();

echo "<strong>ANIMALERIE 2 :</strong><br />";
$animalerie2->liste();
$animalerie2->nombre();


//var_dump($animalerie1);
//var_dump($animalerie2);
// $test1 = new Animalerie();
// unset($test1);
// $test2 = new Animalerie();
// unset($test2);


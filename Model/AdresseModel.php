<?php 

class Adresse{
    public $id;
    public $num;
    public $rue;
    public $CP;
    public $commune;

}

class AdresseManager {
    private $adresse;
    
    public function getAdresse() {
        return $this->adresse;
    }
}

$articleManager = new AdresseManager();
$articles = $articleManager->getAdresse();
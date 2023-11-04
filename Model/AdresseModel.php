<?php 

class Adresse{
    public $id;
    public $num;
    public $rue;
    public $CP;
    public $commune;

    public function __construct($id, $num, $rue, $CP, $commune) {
        $this->id = $id;
        $this->num = $num;
        $this->rue = $rue;
        $this->CP = $CP;
        $this->commune = $commune;
    }
}

class AdresseManager {
    private $adresse;

    public function __construct() {
        $this->adresse = new Adresse(1, 44 , "Victor Hugo", 13127, "Vitrolles");
    }
    public function getAdresse() {
        return $this->adresse;
    }
}

$articleManager = new AdresseManager();
$articles = $articleManager->getAdresse();
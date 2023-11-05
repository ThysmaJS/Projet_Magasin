<?php
include 'Model/ArticleModel.php';
include 'Model/AdresseModel.php';

class FactureController {
    public function afficherFacture() {
        $articleManager = new ArticleManager();
        $articles = $articleManager->getArticles();
        $AdresseManager = new AdresseManager();
        $adresse = $AdresseManager->getAdresse();

        require 'views/facture.php';
    }
}

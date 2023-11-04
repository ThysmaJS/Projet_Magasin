<?php
include 'Model/ArticleModel.php'; // Assurez-vous que le chemin du fichier est correct

class FactureController {
    public function afficherFacture() {
        $articleManager = new ArticleManager();
        $articles = $articleManager->getArticles();
        require 'views/facture.php';
    }
}

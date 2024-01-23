<?php
include 'Model/ArticleModel.php';
include 'Model/AdresseModel.php';
include 'Model/DatabaseModel.php';

class FactureController {
    public function afficherFacture() {
        $db = new PDO('mysql:host=localhost;dbname=facture', 'root', '');
        $articleManager = new ArticleManager($db);
        $articles = $articleManager->getArticles();

        require 'views/facture.php';
    }
}

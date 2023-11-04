<?php
include 'Model/article_modele.php';
class FactureController {
    public function afficherFacture() {
        $mysqli = new mysqli("localhost", "root", "", "projet_magasin");

        if ($mysqli->connect_error) {
            die("Échec de la connexion : " . $mysqli->connect_error);
        }

        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticles($mysqli);
        require 'views/facture.php';
    }
}

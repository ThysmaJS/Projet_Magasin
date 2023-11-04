<?php
// Inclure les fichiers et initialisations nécessaires

// Créez une logique pour gérer les routes
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/facture') {
    // Chargez le contrôleur de facture
    require 'controllers/FactureController.php';
    $factureController = new FactureController();
    $factureController->afficherFacture();
} else {
    // Gérez les autres routes
}
<?php
$serveur = "localhost";  // Adresse du serveur MySQL (en général, "localhost" en local)
$nom_utilisateur = "root"; // Nom d'utilisateur MySQL
$mot_de_passe = ""; // Mot de passe MySQL (laissez vide s'il n'y en a pas)
$base_de_donnees = "projet_magasin"; // Nom de la base de données que vous avez créée

// Connexion à la base de données
$connexion = new mysqli($serveur, $nom_utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}


// FactureController.php
class FactureController {
    public function afficherFacture() {
        // Charger la page HTML de la facture
        require 'views/facture.php';
    }
}

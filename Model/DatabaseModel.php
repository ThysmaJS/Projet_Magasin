<?php

// Remplacez ces informations par les paramètres de votre base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facture";

// Créez une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Exécutez la requête pour récupérer l'adresse de facturation
$adresseQuery = "SELECT num, rue, CP, commune FROM Adresse WHERE id = '1'";
$adresseResult = $conn->query($adresseQuery);
$adresse = $adresseResult->fetch_object();

// Exécutez la requête pour récupérer les articles de la commande
$articlesQuery = "SELECT name, quantity, price, deliveryMode FROM Article";
$articlesResult = $conn->query($articlesQuery);
$articles = [];

while ($row = $articlesResult->fetch_object()) {
    $articles[] = $row;
}

// Fermez la connexion à la base de données
$conn->close();

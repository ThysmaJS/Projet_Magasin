<?php

class ArticleModel {
    public function getArticles($connexion) {
        
        // Établissez la connexion à la base de données (assurez-vous que vous avez déjà une connexion établie).

        // Exécutez la requête SQL pour récupérer tous les articles
        $query = "SELECT * FROM Article";
        $result = mysqli_query($connexion, $query);

        // Vérifiez si la requête a réussi
        if ($result) {
            $articles = array(); // Initialisez un tableau pour stocker les articles

            // Parcourez les résultats et stockez-les dans le tableau
            while ($row = mysqli_fetch_assoc($result)) {
                $articles[] = $row;
            }

            // Fermez la ressource résultat
            mysqli_free_result($result);

            return $articles; // Retournez le tableau d'articles
        } else {
            // Gérez les erreurs si la requête échoue
            // Exemple : die("Erreur SQL : " . mysqli_error($connexion));
            return false;
        }

        // Fermez la connexion à la base de données
        mysqli_close($connexion);
    }
}

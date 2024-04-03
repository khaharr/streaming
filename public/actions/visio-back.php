<?php
// Inclusion du fichier de connexion à la base de données
require_once 'loginConnexion.php';

// Initialisation du tableau des saisons
$liensSaisons = array();

// Vérifier si l'ID de l'anime est présent dans l'URL
if(isset($_GET['id'])) {
    $idAnime = $_GET['id'];

    // Récupérer les informations de l'anime depuis la base de données en fonction de son ID
    $sqlAnime = "SELECT nom FROM anime WHERE id = $idAnime";
    $resultAnime = $conn->query($sqlAnime);

    if ($resultAnime->num_rows > 0) {
        $rowAnime = $resultAnime->fetch_assoc();
        $nomAnime = $rowAnime['nom'];


        $sqlSaisons = "SELECT id, nom, nb_episode, saison, lien, episode FROM saisons WHERE id_anime = $idAnime";

        $resultSaisons = $conn->query($sqlSaisons);

        if ($resultSaisons->num_rows > 0) {
            // Parcourir les résultats et stocker les saisons dans le tableau $liensSaisons
            while($rowSaison = $resultSaisons->fetch_assoc()) {
                $liensSaisons[] = $rowSaison;
            }
        }
    } else {
        // Gérer le cas où l'ID de l'anime n'existe pas dans la base de données
        $nomAnime = "Anime introuvable";
    }
} else {
    // Gérer le cas où aucun ID d'anime n'est spécifié dans l'URL
    // Par exemple, rediriger l'utilisateur vers une autre page
    header("Location: liste-anime.php");
    exit();
}

?>

<?php
// Inclusion du fichier de connexion à la base de données
require_once 'loginConnexion.php';

// Vérifier si l'ID de l'anime est présent dans l'URL
if(isset($_GET['id'])) {
    $idAnime = $_GET['id'];

    // Récupérer les informations de l'anime depuis la base de données en fonction de son ID
    // Assurez-vous d'adapter cette partie en fonction de votre configuration de base de données
    $sql = "SELECT nom FROM anime WHERE id = $idAnime";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nomAnime = $row['nom'];
    } else {
        // Gérer le cas où l'ID de l'anime n'existe pas dans la base de données
        // Par exemple, afficher un message d'erreur ou rediriger l'utilisateur vers une autre page
        $nomAnime = "Anime introuvable";
    }
} else {
    // Gérer le cas où aucun ID d'anime n'est spécifié dans l'URL
    // Par exemple, rediriger l'utilisateur vers une autre page
    header("Location: liste-anime.php");
    exit();
}
?>

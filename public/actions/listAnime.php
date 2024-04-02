<?php
include "loginConnexion.php";

// Requête pour récupérer les données de la table anime
$sql = "SELECT nom, image  FROM anime";
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Parcourir les résultats et les afficher
    while($row = $result->fetch_assoc()) {
        echo '<div class="Image-Name">';
        echo '<img src="' . $row["image"] . '" alt="' . $row["nom"] . '">';
        echo '<div class="show-name">' . $row["nom"] . '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
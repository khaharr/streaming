<?php

require_once '../../src/db.php';

if(isset($_POST['boutonInscrire'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $motDePasse = $_POST['motDePasse'];

    try {
        $requete = $pdo->prepare("INSERT INTO users VALUES (0, :user, :nom, :prenom,:motDePasse, :email)");
        $requete->execute(
            array(
                "user" => $user,
                "nom" => $nom,
                "prenom" => $prenom,
                "motDePasse" => $motDePasse,
                "email" => $email,
                ":motDePasse" => password_hash($motDePasse, PASSWORD_DEFAULT),
            )
        );
        header("Location: ../chargement.php");
        exit();
    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1062) { // Code d'erreur MySQL pour la violation de la contrainte unique
            if (strpos($e->getMessage(), 'email') !== false) {
                header("Location: ../inscription.php?error=Email deja utilisé");
            } 

            elseif(strpos($e->getMessage(), 'user') !== false) {
                header("Location: ../inscription.php?error=pseudo déja utilisé");
            }

        } else {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
?>


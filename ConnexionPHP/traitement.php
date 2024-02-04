<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=flash_streaming", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch(PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}


if(isset($_POST['boutonInscrire'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $motDePasse = $_POST['motDePasse'];

    try {
        $requete = $bdd->prepare("INSERT INTO users VALUES (0, :user, :nom, :prenom,:motDePasse, :email)");
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
        echo "Inscription réussie";
        header("Location: Home.php");
        exit();
    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1062) { // Code d'erreur MySQL pour la violation de la contrainte unique
            if (strpos($e->getMessage(), 'email') !== false) {
                header("Location: ./pageInscription.PHP?error=Email deja utilisé");
            } 

            elseif(strpos($e->getMessage(), 'user') !== false) {
                header("Location: ./pageInscription.PHP?error=pseudo déja utilisé");
            }

        } else {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
?>

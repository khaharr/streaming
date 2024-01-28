<?php
$servername = "localhost";
$username = "root";
$password ="";

try{
    $bdd = new PDO("mysql:host=$servername; dbname=utiisateurstreaming", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo "connexion reussi";
}
catch(PDOException $e){
    echo "Erreur  : ".$e->getMessage();
}

 
if(isset($_POST['boutonInscrire'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $motDePasse = $_POST['motDePasse'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :user, :nom, :prenom, :motDePasse, :email)");
    $requete->execute(
        array(
            "user" => $user,
            "nom" => $nom,
            "prenom" => $prenom,
            "motDePasse" => $motDePasse,
            "email" => $email,

        )
        );
        echo "Inscription réussi";
        //header("Location: page.php");   < pour rediriger vers la page 
}

?>
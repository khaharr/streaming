<?php
session_start();
include "loginConnexion.php";
if(isset($_POST['email']) && isset($_POST['motDePasse'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $motDePasse = validate($_POST['motDePasse']);
    $email = validate($_POST['email']);

    if (empty($email)){
        header("Location: ../connexion.PHP?error=email est requis");
        exit();
    }else if(empty($motDePasse)){
        header("Location: ../connexion.PHP?error=mot de passe est requis");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE email='$email'  OR user='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if ($row ['email']=== $email OR $row['user']=== $email){
                if (password_verify($motDePasse, $row['motDePasse'])) {
                    $_SESSION['user'] = $row['user'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: ../chargement.php");
                    exit();
                } else{
                    header("Location: ../connexion.PHP?error=mot de passe ou email incorrect");}
            }else{
                header("Location: ../connexion.PHP?error=mot de passe ou email incorrect");
                exit();

                if ($row ['user']=== $email){
                    if (password_verify($motDePasse, $row['motDePasse'])) {
                        $_SESSION['user'] = $row['user'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: ../chargement.php");
                        exit();
                    } else{
                        header("Location: ../connexion.php?error=mot de passe ou email incorrect");}
                }else{
                    header("Location: ../connexion.php?error=mot de passe ou email incorrect");
                    exit();    
        }
        }}else{
            header("Location: ../connexion.php?error=mot de passe ou email incorrect");
            exit();
        }
    }
    
}else{
    header("Location: connexion.php");
    exit();
}

?>
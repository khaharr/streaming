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
        header("Location: ./pageConnexion.PHP?error=email est requis");
        exit();
    }else if(empty($motDePasse)){
        header("Location: ./pageConnexion.PHP?error=mot de passe est requis");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE email='$email' AND motDePasse='$motDePasse'";
        $result = mysqli_query($conn, $sql  );
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row ['email']=== $email && $row ['motDePasse']=== $motDePasse ){
                $SESSION['user'] = $row['user'];
                $SESSION['id'] = $row['id'];
                header("Location: Home.PHP");
            }else{
                header("Location: ./pageConnexion.PHP?error=mot de passe ou email incorrect");
                exit();
        }
        }else{
            header("Location: ./pageConnexion.PHP?error=mot de passe ou email incorrect");
            exit();
        }
    }
    
}else{
    header("Location: pageConnexion.PHP");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
    <link rel="stylesheet" href="pageInscription.css">
</head>
<body>
    <img class="bg" src="crane.png" alt="">
    <div class="box">
        <span class="borderLine"></span>
        <form method="POST"  action="traitement.php"> 
            <h2>Inscription</h2>
            <div class="inputBox">
                <input type="text"  name="nom" required="required">
                <span>nom</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="text" name ="prenom" required="required">
                <span>prénom</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="email" name ="email" required="required">
                <span>email</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="text" name ="user" required="required">
                <span>nom d'utilisateur</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name ="motDePasse" required="required">
                <span>mot de passe</span>
                <i></i>
            </div>

            <div class="links">
            <a href="pageConnexion.PHP">SE CONNECTER</a>
            </div>
            <input type="submit" value="inscription" name = "boutonInscrire">
        </form>
    </div>
    
</body>
</html>
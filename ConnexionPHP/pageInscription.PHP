
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
    <link rel="stylesheet" href="../CSSconnexion/pageInscription.css">
</head>
<body>
    <div class="bulle"> 
    <span style="--i:11;"></span>
    <span style="--i:12;"></span>
    <span style="--i:24;"></span>
    <span style="--i:10;"></span>
    <span style="--i:14;"></span>
    <span style="--i:23;"></span>
    <span style="--i:18;"></span>
    <span style="--i:16;"></span>
    <span style="--i:20;"></span>
    <span style="--i:22;"></span>
    <span style="--i:25;"></span>
    <span style="--i:18;"></span>
    <span style="--i:21;"></span>
    <span style="--i:15;"></span>
    <span style="--i:13;"></span>
    <span style="--i:26;"></span>
    <span style="--i:17;"></span>
    <span style="--i:13;"></span>
    <span style="--i:28;"></span>
    <span style="--i:11;"></span>
    <span style="--i:12;"></span>
    <span style="--i:24;"></span>
    <span style="--i:10;"></span>
    <span style="--i:14;"></span>
    <span style="--i:23;"></span>
    <span style="--i:18;"></span>
    <span style="--i:16;"></span>
    <span style="--i:20;"></span>
    <span style="--i:22;"></span>
    <span style="--i:25;"></span>
    <span style="--i:18;"></span>
    <span style="--i:21;"></span>
    <span style="--i:15;"></span>
    <span style="--i:13;"></span>
    <span style="--i:26;"></span>
    <span style="--i:17;"></span>
    <span style="--i:13;"></span>
    <span style="--i:28;"></span>
    <span style="--i:11;"></span>
    <span style="--i:12;"></span>
    <span style="--i:24;"></span>
    <span style="--i:10;"></span>
    <span style="--i:14;"></span>
    <span style="--i:23;"></span>
    <span style="--i:18;"></span>
    <span style="--i:16;"></span>
    <span style="--i:20;"></span>
    <span style="--i:22;"></span>
    <span style="--i:20;"></span>
    </div>

    
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
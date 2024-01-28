<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
    <link rel="stylesheet" href="../CSSconnexion/pageConnexion.css">
</head>
<body>    
    <div class="box">
        <span class="borderLine"></span>
        <form method="post" action="login.php">
            <h2>connexion</h2>
            <?php if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'];?></p> 
            <?php } ?>
            <div class="inputBox">
                <input type="texe" name ="email" >
                <span>nom d'utilisateur ou e-mail</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="motDePasse" >
                <span>mot de passe</span>
                <i></i>
            </div>
        <div class="links">
            <a href="#">mot de passe oublié</a>
            <a href="pageInscription.PHP">s'inscrire</a>
        </div> 
        <input type="submit" value="connexion" name ="connexion">
        </form>
   
    
    </div>
    
</body>
</html>
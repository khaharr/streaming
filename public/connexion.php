<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
    <link rel="stylesheet" href="./assets/styles/pageConnexion.css">
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
        <form method="post" action="./actions/login.php">
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
            <a href="inscription.php">s'inscrire</a>
        </div> 
        <input type="submit" value="connexion" name ="connexion">
        </form>
   
    
    </div>
    
</body>
</html>
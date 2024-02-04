
<div id="Navbar">
    
    <a id="logo" href="../ConnexionPHP/Page1.php">
        <img src="../IMG/logo2.png" alt="Logo" >
        <h2>Streaming</h2>
    </a>

    <nav>
        <a href="#">Film</a>
        <a href="liste_anime.php">Anime</a>
            <!-- Catégories avec menu déroulant -->
        <div id="categories">
            <a href="#">Categories <i class="fas fa-caret-down"></i></a></li>
            <div class="drop-down-box">
                <a href="#">action</a>
                <a href="#">avanture</a>
                <a href="#">Shojo</a>
                <a href="#">Seinen</a>
                <a href="#">Josei</a>
                <a href="#">Kodomomuke</a>
                <a href="#">shonen</a>
            </div>
        </div>
        <a href="#">Contact</a>
    </nav>
        <!-- Autres options de navigation -->
    <div id="nav-options">
        <div class="search-bar">
            <input type="search" name="search" placeholder="Recherche...">
            <i class="fas fa-search"></i>
        </div>
        <button onclick="location.href='./pageConnexion.php'" id="signIn">Se Déconnecter</button>
    </div>

</div>
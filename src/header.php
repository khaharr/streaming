
<div id="Navbar">
    
    <a id="logo" href="index.php">
        <img src="./assets/IMG/logo2.png" alt="Logo" >
        <h2>Streaming</h2>
    </a>

    <nav>
        <a href="#">Film</a>
        <a href="liste-anime.php">Anime</a>
            <!-- Catégories avec menu déroulant -->
        <div id="categories">
            <a href="#">Categories <i class="fas fa-caret-down"></i></a>
            <div class="drop-down-box">
                <a href="#">Action</a>
                <a href="#">Aventure</a>
                <a href="#">Shojo</a>
                <a href="#">Seinen</a>
                <a href="#">Josei</a>
                <a href="#">Kodomomuke</a>
                <a href="#">shonen</a>
            </div>
        </div>
        <a href="#">Contact</a>
    </nav>

    <div id="nav-options">
        <div class="search-bar">
            <input type="search" name="search" placeholder="Recherche...">
            <i class="fas fa-search"></i>
        </div>
        <button onclick="location.href='connexion.php'" id="signIn">Se Déconnecter</button>
    </div>

    <div id="responsive-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
   
</div>

<script>

    const nav = document.querySelector('#Navbar>nav'); // Les boutons de navigations
    const navOptions = document.querySelector('#nav-options'); // Les options de navigations
    const menu = document.querySelector('#responsive-menu'); // Le menu hamburger
    let menuHidden = true; // Variable de status du menu

    // Rend visible/invisible les boutons de navigations au clic du menu hamburger
    menu.addEventListener('click', function(){    
        if (menuHidden) { // Afficher si le menu est invisible
            nav.style.display = 'flex';
            menuHidden = false;
        } else { // Caché si le menu est visible
            nav.style.display = 'none';
            menuHidden = true;
        }
    })

    // Rend visible/invisible le menu hamburger et les boutons de navigation
    function responsiveHeader() {

        if (window.innerWidth < 1000) { // Fenêtre inférieur à 1000px

            if (menuHidden) { // Cache seulement si le menu n'est pas visible
                nav.style.display = 'none'; // Cache les boutons
                navOptions.style.display = 'none';  // Cache les options
            }

            nav.classList.add('responsive-nav') // Style css responsive
            menu.style.display = 'flex'; // Affiche le menu hamburger

        } else {
            nav.style.display = 'flex';
            navOptions.style.display = 'flex';
            nav.classList.remove('responsive-nav')
            menu.style.display = 'none';
        }
    }

    responsiveHeader(); // Applique la fonction au chargement de la page

    // Applique la fonction au redimmensionnement de la page
    window.addEventListener('resize', responsiveHeader);

    if (window.location.pathname === '/liste-anime.php') {
    const searchBar = document.querySelector('.search-bar input');

    searchBar.addEventListener('input', function() {
        const searchText = searchBar.value.toLowerCase().trim();

        const animeItems = document.querySelectorAll('.Image-Name');

        animeItems.forEach(function(animeItem) {
            const animeName = animeItem.querySelector('.show-name').textContent.toLowerCase();

            if (searchText === '') {
                animeItem.style.display = 'block';
            } else {
                if (animeName.includes(searchText)) {
                    animeItem.style.display = 'block';
                } else {
                    animeItem.style.display = 'none';
                }
            }
        });
    });
}
</script>
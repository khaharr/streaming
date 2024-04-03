<?php require_once './actions/visio-back.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomAnime; ?></title>
    <link rel="stylesheet" href="./assets/styles/visio-anime.css">
    <link rel="stylesheet" href="./assets/styles/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
                integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <?php require_once '../src/header.php'; ?>
    <h1><?php echo $nomAnime; ?></h1>
    
    <div class="saisons-container">
        <?php foreach ($liensSaisons as $saison): ?>
            <div class="saison">
                <h2><?php echo $saison['nom']; ?></h2>
                <p>épisode: <?php echo $saison['episode']; ?> saison: <?php echo $saison['saison']; ?></p>
                <select onchange="changeEpisode(this, '<?php echo $saison['nom']; ?>', '<?php echo $saison['id']; ?>')">
                    <?php for ($i = 1; $i <= $saison['nb_episode']; $i++): ?>
                        <option value="<?php echo $i; ?>">Épisode <?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <div class="video-container">
                    <video id="videoPlayer-<?php echo $saison['id']; ?>" controls>
                        <source src="<?php echo $saison['lien']; ?>" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de la vidéo.
                    </video>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="additional-info">
        <h2>Avis des utilisateurs</h2>
        <p>Cette série est incroyable, j'ai adoré chaque épisode!</p>
        <p>Les personnages sont très bien développés et l'histoire est captivante.</p>
        <a href="#">Voir d'autres épisodes</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function changeEpisode(select, saisonNom, saisonId) {
        var episode = select.value;
        var idAnime = <?php echo $idAnime; ?>;
        
        $.ajax({
            type: "POST",
            url: "./actions/update-episode.php",
            data: { episode: episode, saison: saisonId, idAnime: idAnime },
            success: function(response) {
                if(response == 'success') {
                    var video = document.getElementById('videoPlayer-' + saisonId);
                    var newSrc = '<?php echo $saison['lien'] ?>&episode=' + episode;
                    video.src = newSrc;
                } else {
                    alert('Erreur lors de la mise à jour de l\'épisode.');
                }
            }
        });
    }
</script>

    </script>
</body>
</html>

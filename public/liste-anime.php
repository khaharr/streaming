<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>voir tout</title>
    <link rel="stylesheet" href="./assets/styles/liste-anime.css">
    <link rel="stylesheet" href="./assets/styles/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
                integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <?php require_once '../src/header.php'; ?>
        

<div id="AllBanners">
        <div id="primaryMainContainer">
        <form method="post" action="./actions/listAnime.php">
        
            <div id="contentBanners">
                <!-- For Trending Now  -->
                    <div id="MainContainer">

                    
                            <div id="Banners-container">
                            <?php require_once './actions/listAnime.php';
                             ?>
                            </div>
                    </div>
            </div>
        </form>
        </div>
</div>
</body>
</html>
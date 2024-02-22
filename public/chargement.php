<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Loading Animation</title>
      <link rel="stylesheet" href="./assets/styles/chargement.css">
   </head>
   <body>
   <script>
// Fermer la page actuelle après 10 secondes
setTimeout(function() {
    // Rediriger vers une autre page après la fermeture de celle-ci
    window.location.href = "./index.php"; // Remplacez "nouvelle_page.html" par l'URL de votre nouvelle page
}, 5000); // 10000 millisecondes = 10 secondes
</script>
   <link rel="stylesheet" href="./assets/styles/chargement.css">
      <div class="center">
         <div class="ring"></div>
         <span>CHARGEMENT...</span>
      </div>
   </body>
</html>
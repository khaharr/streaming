<?php

function initDB() {
    
    $db_host = 'database'; // Nom du serveur
    $db_name = 'streaming'; // Nom de la base de donnée
    $db_port = '3306'; // Port occupé 
    $db_user = 'flash'; // Nom du compte utilisateur
    $db_pass = 'pass'; // Mot de passe

    // Data Source Name
    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';port=' . $db_port . '';

    try {
        $db = new PDO($dsn, $db_user, $db_pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = 'Europe/Paris'",
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    catch (Exception $e) {
        die('Erreur MySQL, maintenance en cours.' . $e->getMessage());
    }

    return $db;
}

// Connexion a la db
$pdo = initDB();

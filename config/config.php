<?php
/**
 * De inloggegevens van de gebruiker van de Database staan hier onder
 */

// De naam van de sql-server;
$dbHost = 'localhost';

// De naam van de database;
$dbName = 'rollercoaster_2509b';

// Naam van de gebruiker die de queries gaat uitvoeren
$dbUser = 'root';

// Wachtwoord van root
$dbPass = ''

/**
 * We gaan data-sourcenamestring maken waarin alle benodigde gegevens 
 * staan die nodig zijn om een verbinding te maken met de database
 */
$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

/**
 * Maak een nieuwe PDO-Object zodat we een verbinding kunnen maken
 * met de mysql-server en de database
 */
$pdo = new PDO($dsn, $dbUser, $dbPass);

?>
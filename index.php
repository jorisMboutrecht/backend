<?php
/**
 * Haal de inlogegevens uit het bestand config.php
 */
include('config/config.php');

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

/**
 * maak een select-quary die alle gegevens uit de tabel
 * HoogsteAchtbaanVanEuropa haalt. Sorteerd op Hoogte aflopend
 */
$sql= "SELECT HAVE.id
             ,HAVE.Rollercoaster
             ,HAVE.AmusementPark
             ,HAVE.Country
             ,HAVE.Topspeed
             ,HAVE.Height
             ,DATE_FORMAT(HAVE.YearsOfConstruction, '%d-%m-%y') AS YOFC FROM rollercoaster AS HAVE ORDER BY HAVE.Height DESC";
              
/**
 * Met de methode prepare van PDO-Object maakt sql-query
 * klaar voor het PDO-Object om uitgevoerd te worden. De geprepareede
 * sql-query stoppen we in een variable $statement
 */

$statement = $pdo->prepare($sql);

/**
 * We voeren nu de geprepareede sql-query uit op de database
 */

$statement->execute();

/**
 * Haal de geslecteerde  records binnen als  een array van objecten
 * en stop deze in een variable
 */

$result = $statement->fetchAll(PDO::FETCH_OBJ);

// Toon de geslecteerde data uit de database
// var_dump($result);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD-Basics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" herf="img/favicon.ico" type="image/x-icon"> 
  </head>
  <body>
    <h1>bij 4.1.3 gebleven </h1>
    <div class="container mt-3">

        <div class="row justify-content center">
            <div class="col-8">
                <h3>Hoogste achtbanen van Europa</h3>
            </div>
        </div>

        <div class="row justify-content center">
            <div class="col-10">
                <!-- Hier komt  de tabel -->
                 <table>
                    <thead>
                        <th>Naam Achtbaan</th>
                        <th>Naam Pretpark</th>
                        <th>Land</th>
                        <th>Topsnelheid (KM/u)</th>
                        <th>Hoogte (m)</th>
                        <th>Bouwjaar</th>
                        <th>Verwijder</th>
                    </thead>
                    <tbody>
                        <?php foreach($result as $rollercoaster):?>
                        <tr>
                            <td><?= $rollercoaster->Rollercoaster; ?></td>
                            <td><?= $rollercoaster->AmusementPark; ?></td>
                            <td><?= $rollercoaster->Country; ?></td>
                            <td class="text-center"><?= $rollercoaster->Topspeed; ?></td>
                            <td class="text-center"><?= $rollercoaster->Height; ?></td>
                            <td><?= $rollercoaster->YOFC; ?></td>
                            <td class="text-center">
                                <a href="delete.php?id=<?= $rollercoaster->id; ?>">
                                    <i class="bi bi-x-square text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                 </table>
            </div>
        </div>        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
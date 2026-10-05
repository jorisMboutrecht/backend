<?php
include('config/config.php')

$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

$pdo = new PDO($dsn, $dbUser, $dbPass);

$sql = "DELETE FROM HoogsteAchtbaanVanEuropa WHERE ID = :id";

$statement = $pdo->prepare($sql);

$statement->bindParam(':id, $_GET['id']', PDO::PARAM_INT);
?>
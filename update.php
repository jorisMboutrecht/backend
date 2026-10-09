<?php
include('config/config.php');


if (isset($_POST['submit'])) {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE rollercoaster AS HAVE SET
     Rollercoaster = :rollerCoaster
    ,AmusementPark = :amusementPark
    ,Country = :country
    ,TopSpeed = :topSpeed
    ,Height = :height
    ,YearsOfConstruction = :yearsOfConstruction
    WHERE HAVE.id = :id";

    $statement = $pdo->prepare($sql);

    $statement->bindValue(':rollerCoaster', $_POST['naamAchtbaan'] ?? '', PDO::PARAM_STR);
    $statement->bindValue(':amusementPark', $_POST['naamPretpark'] ?? '', PDO::PARAM_STR);
    $statement->bindValue(':country', $_POST['land'] ?? '', PDO::PARAM_STR);
    $statement->bindValue(':topSpeed', $_POST['topsnelheid'] ?? 0, PDO::PARAM_INT);
    $statement->bindValue(':height', $_POST['hoogte'] ?? 0, PDO::PARAM_INT);
    $statement->bindValue(':yearsOfConstruction', $_POST['bouwjaar'] ?? '', PDO::PARAM_STR);
    $statement->bindValue(':id', $_POST['id'], PDO::PARAM_INT);

    $statement->execute();

    $display = 'flex';

    header('Refresh:3; index.php');

} else {
    $sql = "SELECT   HAVE.id
                    ,HAVE.Rollercoaster
                    ,HAVE.AmusementPark
                    ,HAVE.Country
                    ,HAVE.Topspeed
                    ,HAVE.Height
                    ,HAVE.YearsOfConstruction
                    FROM rollercoaster AS HAVE WHERE HAVE.id = :id";

    $statement = $pdo->prepare($sql);

    $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_OBJ);

    //var_dump($result);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-3">

        <div class="row justify-content center">
            <div class="col-6"><h3 class="text-primary">Wijzig de achtbaangegevens:</h3></div>
        </div>

        <div class="row justify-content-center" style="display:<?= $display ?? 'none'; ?>">
            <div class="col-6">
                <div class="alert alert-succes text-center" role="alert">
                    de gegevens zijn gewijzigd. U wordt terug gestuurd naar de index-pagina.
                </div>
            </div>
        </div>

        
        <form action="update.php" method="POST">
                    <div class="mb-3">
                        <label for="inputNaamAchtbaan" class="form-label">Naam Achtbaan:</label>
                        <input name="naamAchtbaan" placeholder="Vul de naam van de achtbaan in"  type="text" class="form-control" id="inputNaamAchtbaan"
                        value="<?= $result->Rollercoaster ?? $_POST['naamAchtbaan'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputNaamPretpark" class="form-label">Naam Pretpark:</label>
                        <input name="naamPretpark" placeholder="Vul de naam van de pretpark in"  type="text" class="form-control" id="inputNaamPretpark"
                        value="<?= $result->AmusementPark ?? $_POST['naamPretpark'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputNaamLand" class="form-label">Land:</label>
                        <input name="land" placeholder="Vul de naam van het land in"  type="text" class="form-control" id="inputNaamLand"
                        value="<?= $result->Country ?? $_POST['land'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputNaamTopsnelheid" class="form-label">Topsnelheid:</label>
                        <input name="topsnelheid" placeholder="Vul de topsnelheid in"  type="number" min="0" max="255" class="form-control" id="inputTopsnelheid"
                        value="<?= $result->Topspeed ?? $_POST['topsnelheid'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputHoogte" class="form-label">Hoogte:</label>
                        <input name="hoogte" placeholder="Vul de Hoogte in"  type="number" min="0" max="255" class="form-control" id="inputHoogte"
                        value="<?= $result->Height ?? $_POST['hoogte'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputYearOfConstruction" class="form-label">Bouwjaar:</label>
                        <input name="bouwjaar" placeholder="Vul het bouwjaar in in"  type="date" class="form-control" id="inputYearOfConstruction"
                        value="<?= $result->YearsOfConstruction ?? $_POST['bouwjaar'] ?>">  
                    </div>

                    <input type="hidden" name="id" value="<?= $result->id ?? '' ?>">
                    
                    <div class="d-grid gap-2">
                        <button name="submit" type="submit" class="btn btn-primary btn-lg mt-2">verstuur</button>
                    </div>
                </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
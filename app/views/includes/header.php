<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Basics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= URLROOT; ?>/public/css/style.css">
    <link rel="shortcut icon" href="<?= URLROOT; ?>/public/img/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="<?= URLROOT; ?>/homepages/index" class="navbar-brand">
          <i class="bi bi-code-square"></i>MVC Basics  
        </a>
        <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/SmartphoneController/index" class="nav-link">Smartphones</a>
            </li>
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/SneakersController/index" class="nav-link">Sneakers</a>
            </li>
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/HorlogesController/index" class="nav-link">Horloges</a>
            </li>
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/ZangeressenController/index" class="nav-link">Zangeressen</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="wrapper">


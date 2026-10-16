<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-4 d-flex justify-container-center">
        <div class="col-6">
            <h3 class="text-succes"><?php echo $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-<?= $data['display']; ?> justify-container-center">
        <div class="col-6 text-begin text-primary">
            <div class="alert alert-succes" role="alert">
                <?= $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">
            <form action="<?= URLROOT; ?>/SmartphoneController/create" method= "post">
                <div class="mt3">
                    <label for="merk" class="form-label">Merk</label>
                     <input name="merk" type="text" class="form-control" id="merk" value="<?= $_POST['merk'] ?? ''; ?>" required>
                </div>
                <div class="mt3">
                    <label for="model" class="form-label">Model</label>
                     <input name ="model" type="text" class="form-control" id="model" value="<?= $_POST['model'] ?? ''; ?>" required>
                </div>
                <div class="mt3">
                    <label for="prijs" class="form-label">Prijs</label>
                     <input name="prijs" type="number" min="0" max="9999" step="0.1" class="form-control" id="prijs" value="<?= $_POST['prijs'] ?? ''; ?>" required>
                </div>
                <div class="mt3">
                    <label for="geheugen" class="form-label">geheugen (GB)</label>
                     <input name="geheugen" type="number" min="0" max="4000" class="form-control" id="geheugen" value="<?= $_POST['geheugen'] ?? ''; ?>" required>
                </div>
                <div class="mt3">
                    <label for="besturingssysteem" class="form-label">besturingssysteem</label>
                     <input name="besturingssysteem" type="text" class="form-control" id="besturingssysteem" value="<?= $_POST['besturingssysteem'] ?? ''; ?>" required>
                </div>
                <div class="mt3">
                    <label for="schermgrootte" class="form-label">schermgrootte</label>
                     <input name="schermgrootte" type="number" min="0" max="10" step="0.01" class="form-control" id="schermgrootte" value="<?= $_POST['schermgrootte'] ?? ''; ?>" required>
                </div>
                <div class="mt3">
                    <label for="releasedatum" class="form-label">releasedatum</label>
                     <input name="releasedatum" type="date" class="form-control" id="releasedatum" value="<?= $_POST['releasedatum'] ?? ''; ?>" required>
                </div>
                <div class="mt3">
                    <label for="megapixels" class="form-label">megapixels</label>
                     <input name="megapixels" type="number" min="0" max="10000" class="form-control" id="megapixels" value="<?= $_POST['megapixels'] ?? ''; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>

            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>
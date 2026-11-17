<?php require_once APPROOT . '/views/includes/header.php'; ?>

<?php var_dump($_POST); ?>

<div class="container">
    <div class="row mt-4 d-flex justify-container-center">
        <div class="col-6">
            <h3 class="text-succes"><?php echo $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-<?= $data['display']; ?> justify-container-center">
        <div class="col-6">
            <div class="alert alert-<?= $data['color'] ?? 'success'; ?>" role="alert">
                <?= $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">
            <form action="<?= URLROOT; ?>/SmartphoneController/update" method= "post">
                <div class="mt3">
                    <label for="merk" class="form-label">Merk</label>
                     <input name="merk" type="text" class="form-control" id="merk" value="<?= $_POST['merk'] ?? $data['smartphone']->Merk; ?>" required>
                </div>
                <div class="mt3">
                    <label for="model" class="form-label">Model</label>
                     <input name ="model" type="text" class="form-control" id="model" value="<?= $_POST['model'] ?? $data['smartphone']->Model; ?>" required>
                </div>
                <div class="mt3">
                    <label for="prijs" class="form-label">Prijs</label>
                     <input name="prijs" type="number" min="0" max="9999" step="0.1" class="form-control" id="prijs" value="<?= $_POST['prijs'] ?? $data['smartphone']->Prijs; ?>" required>
                </div>
                <div class="mt3">
                    <label for="geheugen" class="form-label">geheugen (GB)</label>
                     <input name="geheugen" type="number" min="0" max="4000" class="form-control" id="geheugen" value="<?= $_POST['geheugen'] ?? $data['smartphone']->Geheugen; ?>" required>
                </div>
                <div class="mt3">
                    <label for="besturingssysteem" class="form-label">besturingssysteem</label>
                     <input name="besturingssysteem" type="text" class="form-control" id="besturingssysteem" value="<?= $_POST['besturingssysteem'] ?? $data['smartphone']->Besturingssysteem; ?>" required>
                </div>
                <div class="mt3">
                    <label for="schermgrootte" class="form-label">schermgrootte</label>
                     <input name="schermgrootte" type="number" min="0" max="10" step="0.01" class="form-control" id="schermgrootte" value="<?= $_POST['schermgrootte'] ?? $data['smartphone']->Schermgrootte;?>" required>
                </div>
                <div class="mt3">
                    <label for="releasedatum" class="form-label">releasedatum</label>
                     <input name="releasedatum" type="date" class="form-control" id="releasedatum" value="<?= $_POST['releasedatum'] ?? $data['smartphone']->Releasedatum; ?>" required>
                </div>
                <div class="mt3">
                    <label for="megapixels" class="form-label">megapixels</label>
                     <input name="megapixels" type="number" min="0" max="10000" class="form-control" id="megapixels" value="<?= $_POST['megapixels'] ?? $data['smartphone']->MegaPixels; ?>" required>
                </div>
                <input type="hidden" name="id" value="<?= $_POST['id'] ?? $data['smartphone']->Id ?>">
                <div class="d-flex justify-centent-between mt-3 mb-5">
                    <button type="submit" class="btn btn-primary">Verstuur</button>
                    <a href="<?=  URLROOT; ?>/homepages/index" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Terug naar de homepage
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>
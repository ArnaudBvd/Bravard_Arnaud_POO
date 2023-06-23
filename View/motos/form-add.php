<?php
include('View/parts/header.php');
?>

<div class="container mb-5">
    <h1 class="text-center mb-4">Ajouter une moto</h1>

    <div id="return-btn">
        <a href="index.php?controller=moto&action=list" class="text-decoration-none">Retour</a>
    </div>

    <!-- <div class="my-4 d-flex justify-content-center">
        <img src="public/img/panorama.webp" alt="r2d2 projecte un hologramme" class="rounded" width="1180" height="445">
    </div> -->

    <form method="post" class="row mt-4">

        <div class="col-md-12 mb-3">
            <label for="marque" class="form-label">Marque :</label>
            <input type="text" value="<?php if (array_key_exists('marque', $_POST)) {
                                            echo ($_POST['marque']);
                                        } ?>" name="marque" id="marque" class="form-control
            <?php if (array_key_exists("marque", $errors)) {
                echo ('is-invalid');
            } ?>">
            <div id="validateName" class="invalid-feedback">
                <?php if (array_key_exists("marque", $errors)) {
                    echo ($errors['marque']);
                } ?>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label for="modele" class="form-label">Modele :</label>
            <input type="text" value="<?php if (array_key_exists('modele', $_POST)) {
                                            echo ($_POST['modele']);
                                        } ?>" name="modele" id="modele" class="form-control
            <?php if (array_key_exists("modele", $errors)) {
                echo ('is-invalid');
            } ?>">
            <div id="validateName" class="invalid-feedback">
                <?php if (array_key_exists("modele", $errors)) {
                    echo ($errors['modele']);
                } ?>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label for="type" class="form-label">Type :</label>
            <select name="type" id="type" class="form-select
            <?php if (array_key_exists("type", $errors)) {
                echo ('is-invalid');
            } ?>">
                <option value=" ">Pas d'info</option>

                <?php foreach (MotoController::$allowedType as $type) {
                    $selected = '';
                    if (array_key_exists("type", $_POST) && $_POST["type"] == $type) {
                        $selected = 'selected';
                    }
                    echo ('<option' . $selected . ' value="' . $type . '">' . $type . '</option>');
                } ?>

            </select>
            <div class="invalid-feedback">
                <?php if (array_key_exists("type", $errors)) {
                    echo ($errors['type']);
                } ?>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label for="image" class="form-label">Photo :</label>
            <input type="text" name="image" id="image" class="form-control
            <?php if (array_key_exists("image", $errors)) {echo ('is-invalid');} ?>">
            <div class="invalid-feedback">
                <?php if (array_key_exists("image", $errors)) {
                    echo ($errors['image']);
                } ?>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <input type="submit" value="VALIDER" id="btn-validate">
        </div>
    </form>
</div>

<?php
include('View/parts/footer.php');

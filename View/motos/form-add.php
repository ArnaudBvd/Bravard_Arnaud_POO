<?php
include('View/parts/header.php');
?>

<section id="section-add"></section>

<div class="container mb-5">
    <h1 class="text-center my-5">Ajouter une moto</h1>

    <p class="text-center fs-4 mb-5">Parce qu'on ne sait jamais quand une collection se finit, faites-vous donc plaisir en ajoutant des motos !</p>

    <div id="return-btn">
        <a href="index.php?controller=moto&action=list" class="text-decoration-none fs-5" id="btn-link">Retour</a>
    </div>

    <!-- <div class="my-4 d-flex justify-content-center">
        <img src="public/img/panorama.webp" alt="r2d2 projecte un hologramme" class="rounded" width="1180" height="445">
    </div> -->

    <form method="post" enctype="multipart/form-data" class="row my-5">

        <div class="col-md-12 mb-4">
            <label for="marque" class="form-label fs-5">Marque :</label>
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

        <div class="col-md-12 mb-4">
            <label for="modele" class="form-label fs-5">Modèle :</label>
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

        <div class="col-md-12 mb-4">
            <label for="validationCustom04" class="form-label fs-5">Type :</label>
            <select class="form-select
                 <?php if (array_key_exists("type", $errors)) {
                        echo ('is-invalid');
                    } ?>" name="type" id="validationCustom04">
                <option value="">Pas d'infos</option>
                <?php
                foreach (MotoController::$allowedType as $type) {
                    $selected = '';
                    if (array_key_exists("type", $_POST) && $_POST["type"] == $type) {
                        $selected = 'selected';
                    }
                    echo ('<option ' . $selected . ' value="' . $type . '">' . $type . '</option>');
                }
                ?>
            </select>
            <div class="invalid-feedback">
                <?php if (array_key_exists("type", $errors)) {
                    echo ($errors["type"]);
                } ?>
            </div>
        </div>

        <div class="col-md-12 mb-4">
            <label for="image" class="form-label fs-5">Photo :</label>
            <p class="fs-6 text-danger">&#x26A0; Seuls les images avec l'extension .jpg, .png ou .webp sont acceptées</p>
            <input type="file" name="image" id="image" class="form-control
            <?php if (array_key_exists("image", $errors)) {
                echo ('is-invalid');
            } ?>">
            <div class="invalid-feedback">
                <?php if (array_key_exists("image", $errors)) {
                    echo ($errors['image']);
                } ?>
            </div>
        </div>


        <div class="d-flex justify-content-center mt-2">
            <input type="submit" value="Valider" id="btn-validate">
        </div>
    </form>
</div>

<section class="mt-5" id="endpage-section"></section>
<section id="end-page"></section>

<?php
include('View/parts/footer.php');

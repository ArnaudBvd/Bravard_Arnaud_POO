<?php
include 'View/parts/header.php';
?>

<div class="container mb-5">
    <h1 class="text-center">La moto <?php echo ($moto->getMarque()) ?></h1>

    <div id="return-btn">
        <a href="index.php?controller=moto&action=list" class="text-decoration-none">Retour</a>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <img src="<?php echo ($moto->getImage()) ?>" alt="" width="500" height="400">
    </div>

    <div class="d-flex justify-content-center flex-column mt-3">
    <p>Modèle : <?php echo($moto->getModele()) ?></p>
    <br>
    <p>Type : <?php echo($moto->getType()) ?></p>

    </div>
</div>

<?php
include ('View/parts/footer.php');
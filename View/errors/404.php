<?php
include 'View/parts/header.php';
?>
<div class="container">
    <h1 class="text-center my-5">Oops ! Cette page n'existe pas</h1>

    <?php
    if ($_GET["scope"] == 'moto') {
        echo ('<h2 class="text-center mt-4">Cette moto a probablement été supprimé...</h2>');
    }
    ?>

    <div class="d-flex justify-content-center my-5">
        <a onclick="window.history.back()">
            <button>Retour</button>
        </a>
    </div>

    <div class="my-5 d-flex justify-content-center">
        <img src="public/icons/motor.png" alt="moteur de moto" class="rounded" width="350" height="400">
    </div>
    <div class="my-5 d-flex justify-content-center">
        <img src="public/icons/oil.png" alt="tache d'huile" class="rounded" width="300" height="100">
    </div>

</div>

<?php
// include 'View/parts/footer.php';
?>
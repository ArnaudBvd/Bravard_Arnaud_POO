<?php
// include 'View/parts/header.php';
?>
<div class="container">
    <h1 class="text-center">Oops ! Cette page n'existe pas</h1>

    <?php
    if ($_GET["scope"] == 'moto') {
        echo ('<h2 class="text-center text-light mt-4">Cette moto a probablement été supprimée</h2>');
    }
    ?>

    <div class="d-flex justify-content-center mt-5">
        <a onclick="window.history.back()">
            <button>Retour</button>
        </a>
    </div>

    <div class="my-4 d-flex justify-content-center">
        <img src="public/img/debris.jpg" alt="debris" class="rounded">
    </div>

</div>

<?php
// include 'View/parts/footer.php';
?>
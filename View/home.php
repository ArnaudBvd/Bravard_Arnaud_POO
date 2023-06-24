<?php
include('View/parts/header.php');
include 'View/parts/slider.php';

?>

<div class="container">

    <h1 class="text-center py-5">Bienvenue chez Moto Passion</h1>

    <div class="row">
        <div class="col-3"></div>

        <div class="col-6  d-flex justify-content-center my-5">
            <a href="index.php?controller=moto&action=list" class="text-decoration-none text-center">
                <button>Voir les motos</button>
            </a>
        </div>

        <div class="col-3"></div>

    </div>
</div>

<?php
include('View/parts/footer.php');

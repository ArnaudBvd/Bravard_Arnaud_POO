<?php
include('View/parts/header.php');
?>

<div class="container">
    <h1 class="text-center mb-5">Bienvenue chez Moto Vroum Vroum !</h1>

    <div class="my-4 d-flex justify-content-center">
        <img src="public/img/duel.jpg" alt="deux sabres lasers se croisent" class="rounded" width="860" height="440">
    </div>

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

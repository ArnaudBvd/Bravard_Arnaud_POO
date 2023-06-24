<?php
include 'View/parts/header.php';
?>

<section id="section-detail"></section>

<div class="container mb-5">
    <h1 class="text-center my-5">La moto <?php echo ($moto->getMarque()) ?></h1>

    <p class="text-center fs-4">Retrouvez ici le détail technique de vos motos</p>

    <div id="return-btn">
        <a href="index.php?controller=moto&action=list" class="text-decoration-none fs-5" id="btn-link">Retour</a>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <img src="public/img/<?php echo ($moto->getImage()) ?>" alt="photo de moto" width="600" height="400" class="rounded border border-warning">
    </div>

    <div class="d-flex justify-content-center">
        <img src="public/sliders/trace.png" alt="trace de pneu de moto" width="700px" height="250px">
    </div>

    <div class="d-flex justify-content-center flex-column">
        <p class="text-center fs-4"><span>Modèle : </span><?php echo ($moto->getModele()) ?></p>
        <br>
        <p class="text-center fs-4"><span>Type : </span><?php echo ($moto->getType()) ?></p>
    </div>
</div>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <article>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse numquam in provident molestiae fugit iste dolorem architecto ullam animi magnam fuga distinctio, voluptate quibusdam id doloremque impedit veniam saepe minus?</p>
                </article>
            </div>
            <div class="col-6">
                <article>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non quis dicta alias atque numquam porro suscipit consequatur eos quod maxime ducimus placeat a possimus, nostrum voluptatum cumque rem assumenda repellat.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="mt-5" id="endpage-section"></section>
<section id="end-page"></section>

<?php
include('View/parts/footer.php');

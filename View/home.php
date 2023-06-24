<?php
include('View/parts/header.php');
include 'View/parts/slider.php';

?>

<div class="container">

    <h1 class="text-center my-5">Bienvenue chez Moto Passion</h1>
    <h2 class="text-center">L'appli N°1 des passionnés de moto !</h2>

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

<section class="my-5" id="section1"></section>

<section class="my-5">
    <div class="container mb-5">
        <div class="row">
            <h3 class="text-center">Dernières actus</h3>
            <div class="col-4 my-5">
                <article>
                    <h4 class="text-center">Nouveautés</h4>
                    <p class="text-article">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ab consequatur reprehenderit non quia eaque quos! Quod sed culpa suscipit reiciendis voluptatum soluta quisquam! Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum.</p>
                    <p class="text-article">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ab consequatur reprehenderit non quia eaque quos! Quod sed culpa suscipit reiciendis voluptatum soluta quisquam! Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum.</p>
                </article>
            </div>
            <div class="col-4 mt-5">
                <article>
                    <h4 class="text-center">Rendez-vous</h4>
                    <p class="text-article">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dignissimos repellat suscipit voluptas fugit maiores? Necessitatibus ab itaque temporibus sunt quasi. Repellat voluptatibus esse expedita laudantium, optio soluta nemo nostrum. Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum.</p>
                    <p class="text-article">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ab consequatur reprehenderit non quia eaque quos! Quod sed culpa suscipit reiciendis voluptatum soluta quisquam! Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum.</p>
                </article>
            </div>
            <div class="col-4 mt-5">
                <article>
                    <h4 class="text-center">Sponsors</h4>
                    <p class="text-article">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis distinctio illum tempore ipsum ducimus omnis unde quia pariatur voluptatum ratione quae eligendi dolorum quisquam asperiores impedit, veritatis animi aliquid recusandae! Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum.</p>
                    <p class="text-article">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ab consequatur reprehenderit non quia eaque quos! Quod sed culpa suscipit reiciendis voluptatum soluta quisquam! Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum. Eum asperiores molestiae impedit repudiandae cum.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="end-page"></section>

<?php
include('View/parts/footer.php');

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
</head>

<body>

    <section id="section-connect"></section>

    <?php
    if (isset($_GET["message"]) && $_GET["message"] == 'logout') {
        echo ('<div class="alert alert-warning" role="alert mt-5">
         <p class="fs-5">Vous êtes déconnecté</p>
        </div>');
    }
    ?>

    <?php
    if (isset($_GET["message"]) && $_GET["message"] == 'error-login') {
        echo ('<div class="alert alert-danger" role="alert">
         <p class="fs-5">Vous devez d\'abord vous connecter</p>
        </div>');
    }
    ?>

    <div class="container">
        <h1 class="text-center my-4">Se connecter</h1>

        <p class="text-center fs-4 mb-3">Merci de vous connecter afin de pouvoir profiter de toutes les fonctions de cette appli !</p>

        <div class="container d-flex flex-column justify-content-center mb-5">
            <a class="mx-auto d-block" href="index.php?controller=default&action=home">
                <button class="mt-5">Accueil</button>
            </a>
        </div>

        <form method="post">

            <div class="col-md-12">
                <label class="fs-5" for="name">Nom * :</label>
                <input type="text" id="name" value="<?php if (array_key_exists("name", $_POST)) {
                                                        echo ($_POST['name']);
                                                    } ?>" name="name" class="form-control
                <?php if (array_key_exists('name', $errors)) {
                    echo ('is-invalid');
                } ?>">

                <div class="invalid-feedback">
                    <?php if (array_key_exists("name", $errors)) {
                        echo ($errors['name']);
                    } ?>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <label class="fs-5" for="password">Mot de passe * :</label>
                <input type="password" id="password" name="password" class="form-control
                    <?php if (array_key_exists('password', $errors)) {
                        echo ('is-invalid');
                    } ?>">
                <p class="mt-3">* tous les champs sont obligatoires</p>
                <div class="invalid-feedback">
                    <?php if (array_key_exists("password", $errors)) {
                        echo ($errors['password']);
                    } ?>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4 mb-5">
                <input type="submit" value="Valider" id="btn-validate">
            </div>
        </form>
    </div>

    <section id="end-page"></section>

    <?php
    include 'View/parts/footer.php';
    ?>
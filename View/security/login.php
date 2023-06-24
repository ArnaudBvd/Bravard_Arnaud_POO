<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
</head>

<body>

    <div class="container">
        <h1 class="text-center my-4">Se connecter</h1>

        <div class="container d-flex flex-column justify-content-center">

            <a class="mx-auto d-block" href="index.php?controller=default&action=home">
                <button class="mt-5">Accueil</button>
            </a>
        </div>

        <!-- <div id="return-btn">
            <a href="index.php?controller=security&action=login" class="text-decoration-none">Retour</a>
        </div> -->

        <!-- <div class="my-4 d-flex justify-content-center">
            <img src="public/img/register.jpg" alt="salle de contrôle" class="rounded" width="1180" height="445">
        </div> -->

        <form method="post">

            <div class="col-md-12">
                <label for="name">Nom * :</label>
                <input type="text" id="name" value="<?php if (array_key_exists("name", $_POST)) {
                                                            echo ($_POST['name']);
                                                        } ?>" name= "name" class="form-control
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
                <label for="password">Mot de passe * :</label>
                <input type="password" id="password" name="password" class="form-control
                <?php if (array_key_exists('password', $errors)) {
                    echo ('is-invalid');
                } ?>">

                <div class="invalid-feedback">
                    <?php if (array_key_exists("password", $errors)) {
                        echo ($errors['password']);
                    } ?>
                </div>
            </div>

            

                <div class="d-flex justify-content-center mt-4">
                    <input type="submit" value="VALIDER" id="btn-validate">
                </div>

        </form>
    </div>

    <?php
    include 'View/parts/footer.php';
    ?>
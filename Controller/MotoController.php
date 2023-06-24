<?php

class MotoController extends SecurityController
{
    private $mm;

    public static $allowedType = [
        "Roadster",
        "Custom",
        "Enduro",
        "Sportive"
    ];

    public static $allowedPicture = [
        "image/jpeg",
        "image/png",
        "image/webp"
    ];

    public function __construct()
    {
        parent::__construct();
        parent::isLoggedIn();
        $this->mm = new MotoManager();
    }

    public function displayAll()
    {
        $motos = $this->mm->getAll();

        require 'View/motos/list.php';
    }

    public function displayOne($id)
    {
        $moto = $this->mm->getOne($id);

        if (is_null($moto)) {
            header('Location: index.php?controller=default&action=not-found&scope=moto');
        }

        require 'View/motos/detail.php';
    }

    public function delete($id)
    {
        parent::isLoggedIn();

        $moto = $this->mm->getOne($id);

        if (is_null($moto)) {
            header('Location: index.php?controller=default&action=not-found&scope=moto');
        } else {
            $this->mm->delete($moto->getId());
            header("Location: index.php?controller=moto&action=list");
        }
    }

    public function add()
    {
        parent::isLoggedIn();

        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            if (empty($_POST['marque'])) {
                $errors['marque'] = 'Veuillez saisir une marque';
            }

            if (strlen($_POST['marque']) > 250) {
                $errors['marque'] = 'Le nom de la marque est trop long (250 caractères)';
            }

            if (empty($_POST['modele'])) {
                $errors['modele'] = "Veuillez saisir un modèle";
            }

            if (!in_array($_POST['type'], self::$allowedType)) {
                $errors['type'] = "Ce type de moto n'existe pas";
            }

            // if (strlen($_POST['image']) > 250) {
            //     $errors['image'] = 'Veuillez entrer un lien plus court';
            // }

            // return $errors;

            if (count($errors) == 0) {
                $uniqFileName = null;

                if (!in_array($_FILES["image"]["type"], self::$allowedPicture)) {
                    $errors["image"] = "Ce fichier n'est pas accepté";
                }
                if ($_FILES["image"]["error"] != 0) {
                    $errors["image"] = 'Erreur de l\'upload';
                }
                if ($_FILES["image"]["size"] > 1000000) {
                    $errors["image"] = "Le fichier est trop grand";
                }

                if (count($errors) == 0) {
                    $extension = explode('/', $_FILES["image"]["type"])[1];
                    $uniqFileName = uniqid() . '.' . $extension;
                    move_uploaded_file($_FILES["image"]["tmp_name"], "public/img/" . $uniqFileName);
                }

                if (count($errors) == 0) {
                    $moto = new Moto(null, $_POST['marque'], $_POST['modele'], $_POST['type'], $uniqFileName);
                    $this->mm->add($moto);

                    header('Location: index.php?controller=moto&action=list');
                }
            }
        }
        require 'View/motos/form-add.php';
    }
}

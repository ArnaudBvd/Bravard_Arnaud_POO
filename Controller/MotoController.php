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

            if (strlen($_POST['image']) > 250) {
                $errors['image'] = 'Veuillez entrer un lien plus court';
            }

            // return $errors;

            if (count($errors) == 0) {
                $moto = new Moto(null, $_POST['marque'], $_POST['modele'], $_POST['type'], $_POST['image']);
                $this->mm->add($moto);

                header('Location: index.php?controller=moto&action=list');
            }
        }
        require 'View/motos/form-add.php';
    }
}

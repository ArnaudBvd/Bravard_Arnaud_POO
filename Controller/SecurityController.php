<?php

class SecurityController
{
    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    // A EFFACER !!!!
    // fonction pour enregistrer un utilisateur
    // public function register()
    // {
    //     $errors = [];

    //     if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    //         if (empty($_POST['name'])) {
    //             $errors['name'] = "Veuillez saisir un nom";
    //         }

    //         $user = $this->userManager->getByUsername($_POST['name']);
    //         if (($user)) {
    //             $errors['name'] = "Impossible";
    //         }

    //         if (empty($_POST['password'])) {
    //             $errors['password'] = "Veuillez saisir un mot de passe";
    //         }     

    //         if (count($errors) == 0) {
    //             $user = new User(null, $_POST['name'], password_hash($_POST['password'], PASSWORD_BCRYPT));

    //             $this->userManager->add($user);
                
    //             header('Location: index.php?controller=security&action=login');
    //         }
    //     }

    //     require 'View/security/register.php';
    // }
}

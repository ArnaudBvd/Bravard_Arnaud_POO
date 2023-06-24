<?php

class SecurityController
{
    private $userManager;
    protected $currentUser;

    public function __construct()
    {
        $this->userManager = new UserManager();
        $this->currentUser = null;

        if (array_key_exists('user', $_SESSION)) {
            $this->currentUser = unserialize($_SESSION['user']);
        }
    }

    public function isLoggedIn() {
        if (!$this->currentUser) {
            header('Location: index.php?controller=security&action=login');
        }
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

    public function login() {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            if (empty($_POST['name'])) {
                $errors['name'] = "Veuillez saisir un nom";
            }

            if (empty($_POST['password'])) {
                $errors['password'] = "Veuillez saisir un mot de passe";
            }

            if (count($errors) == 0) {
                $user = $this->userManager->getByUsername($_POST['name']);

                if(is_null($user) || !password_verify($_POST['password'], $user->getPassword())) {
                    $errors['password'] = "Identifiant ou mot de passe incorrecte";
                } else {
                    $this->currentUser = $user;
                    $_SESSION['user'] = serialize($user);
                    header('Location: index.php?controller=default&action=home');
                }
            }
        }
        
        require 'View/security/login.php';
    }
}

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

    public static function connexion_status()
    {
        if (array_key_exists("user", $_SESSION)) {
            return true;
        } else {
            return false;
        }
    }

    public function isLoggedIn()
    {
        if (!$this->currentUser) {
            header('Location: index.php?controller=security&action=login&message=error-login');
        }
    }

    public function login()
    {
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

                if (is_null($user) || !password_verify($_POST['password'], $user->getPassword())) {
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

    public function logout()
    {
        session_destroy();
        $this->currentUser = null;
        header('Location: index.php?controller=security&action=login&message=logout');
    }

    
}

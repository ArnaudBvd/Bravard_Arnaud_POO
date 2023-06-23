<?php

class DefaultController
{

    public function home()
    {
        require 'View/home.php';
    }

    public function notFound()
    {
        require 'View/errors/404.php';
    }
}

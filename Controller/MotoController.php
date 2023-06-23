<?php

class MotoController
{
    private $mm;

    public function __construct()
    {
        $this->mm = new MotoManager();
    }

    public function displayAll()
    {
        $motos = $this->mm->getAll();

        require 'View/motos/list.php';
    }
}

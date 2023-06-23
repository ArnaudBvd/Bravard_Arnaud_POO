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

    public function displayOne($id)
    {
        $moto = $this->mm->getOne($id);

        if (is_null($moto)) {
            header('Location: index.php?controller=default&action=not-found&scope=moto');
        }

        require 'View/motos/detail.php';
    }
}

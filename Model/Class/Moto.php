<?php

class Moto
{

    private $id;
    private $marque;
    private $modele;
    private $type;
    private $image;

    public function __construct($id, $marque, $modele, $type, $image)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->type = $type;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}

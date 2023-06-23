<?php

class MotoManager extends DBManager
{

    public function getAll()
    {

        $query = $this->bdd->prepare('SELECT * FROM moto');
        $query->execute();
        $results = $query->fetchAll();

        $motos = [];

        foreach ($results as $res) {
            $motos[] = new Moto(
                $res['id'],
                $res['marque'],
                $res['modele'],
                $res['type'],
                $res['image']
            );
        }

        return $motos;
    }

    public function getOne($id)
    {
        $querry = $this->bdd->prepare('SELECT * FROM moto WHERE id = :id');
        $querry->bindParam(':id', $id);
        $querry->execute();
        $res = $querry->fetch();

        $moto = null;
        if ($res) {
            $moto = new Moto($res['id'], $res['marque'], $res['modele'], $res['type'], $res['image']);
            return $moto;
        }
    }

    public function delete($id)
    {
        $querry = $this->bdd->prepare('DELETE FROM moto WHERE id = :id');
        $querry->bindParam('id', $id);
        $querry->execute();
    }

    public function add(Moto $moto)
    {
        $marque = $moto->getMarque();
        $modele = $moto->getType();
        $type = $moto->getType();
        $image = $moto->getImage();

        $query = $this->bdd->prepare(
            'INSERT INTO moto ( marque, modele, type, image) VALUES ( :marque, :modele, :type, :image)'
        );

        $query->bindParam(':marque', $marque);
        $query->bindParam(':modele', $modele);
        $query->bindParam(':type', $type);
        $query->bindParam(':image', $image);

        $query->execute();

        $moto->setId($this->bdd->lastInsertId());

        return $moto;

    }
}

<?php

class MotoManager extends DBManager {

    public function getAll() {

        $query = $this->bdd->prepare('SELECT * FROM moto');
        $query->execute();
        $results = $query->fetchAll();

        $motos = [];

        foreach ($results as $res) {
            $motos[] = new Moto (
                $res['id'],
                $res['marque'],
                $res['modele'],
                $res['type'],
                $res['image']
            );
        }

        return $motos;
    }
}
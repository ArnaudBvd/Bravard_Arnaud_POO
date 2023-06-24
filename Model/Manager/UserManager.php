<?php

class UserManager extends DBManager
{
    public function getByUsername($name)
    {
        $query = $this->bdd->prepare('SELECT * FROM user WHERE name = :name');
        $query->bindParam("name", $name);
        $query->execute();

        $res = $query->fetch();
        $user = null;
        if ($res != false) {
            $user = new User($res['id'], $res['name'], $res['password']);
        }
        return $user;
    }

    // public function add(User $user)
    // {
        

    //     $name = $user->getName();
    //     $password = $user->getPassword();

    //     $query = $this->bdd->prepare("INSERT INTO user (name, password) VALUES (:name, :password)");

    //     $query->bindParam("name", $name);
    //     $query->bindParam("password", $password);


    //     $res = $query->execute();        
    // }
}

# Bravard_Arnaud_POO

## Partie théorique 

- Donner 5 méthodes magiques que vous avez étudié en PHP OO
- Expliquer les éléments déclencheurs de l’exécution de la méthode magique 


### 5 Méthodes magiques

- __construct()

- __get()

- __set()

- __isset()

- __unset()


### Eléments déclencheurs de l'exécution de la méthode magique

- La méthode __construct() va être appelée dès qu’on va instancier une classe possédant un constructeur

**Exemple :**
```php

<?php
class Chasseur extends Personnage
{
    private array $listTrap;
    private string $pet;

    public function __construct($name, $statAt, $statLife, $weapon, $listTrap, $pet){
        parent::__construct($name, $statAt, $statLife, $weapon);

        $this->listTrap = $listTrap;
        $this->pet = $pet;
    }        
    
    public function attaquePiege(){
        $randTrap = rand(0,2);
        return $this->listTrap[$randTrap];
    }
}

$chasseur1 = new Chasseur("Robin", 35, 90, "Arc", ["piège à ours", "chausse-trape", "poison"], "Potit chien");
?>
```



- La méthode __get() va s’exécuter si on tente d’accéder à une propriété inaccessible (ou qui n’existe pas) dans une
classe

**Exemple :**
```php

<?php

   class Maclasse{
      private $attribut="Bonjour";
      public function __get($att){
         return $this->$att;
      }
   }
   $objet=new Maclasse();
   echo $objet->attribut;
?>
```



- La méthode __set() s’exécute dès qu’on tente de créer ou de mettre à jour une propriété inaccessible (ou qui n’existe pas) dans une classe

**Exemple :**
```php

<?php
   class Maclasse{
      private $attribut="Bonjour";
      public function __get($att){
         return $this->$att;
      }
      public function __set($att,$val){
         $this->$att=$val;
      }
   }
   $objet=new Maclasse();
   $objet->attribut="Bonsoir";
   echo $objet->attribut;
?>
```



- La méthode __isset() va s’exécuter lorsque les fonctions isset() ou empty() sont appelées sur des propriétés inaccessibles

**Exemple :**
```php

<?php

   class Maclasse{
      private $attribut="Bonjour";
      public function __isset($att){
         return isset($this->$att);
      }
   }
   $objet=new Maclasse();
   if(isset($objet->attribut))
      echo "L'attribut existe";
   else
      echo "L'attribut n'existe pas";
?>
```



- La méthode __unset() va s’exécuter lorsque la fonction unset() est appelée sur des propriétés inaccessibles

**Exemple :**
```php

<?php
   class Maclasse{
      private $attribut="Bonjour";
      public function __unset($att){
         unset($this->$att);
      }
   }
   $objet=new Maclasse();
   unset($objet->attribut);
?>
```

## Connexion à la BDD

- Identifiant : root

- Mot de passe : ""

- Nom de la BDD : tp-poo
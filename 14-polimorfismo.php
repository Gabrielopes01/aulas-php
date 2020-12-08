<?php
//Polimorfismo - Ter muitas formas, é basicamente ter metodos com mesmo nome em classes herdadas tem comportamentos diferentes


abstract class Animal {

    public function falar(){

        return "som";

    }

    public function mover(){

        return "Anda";

    }

}

class Cachorro extends Animal {

        public function falar(){
            return  "Latido";
        }

}


class Gato extends Animal {

    public function falar(){
        return "Miado";
    }
}

class Passaro extends Animal {

    public function falar(){
        return "Piado";
    }

    public function mover(){
        return "Voar e ".parent::mover();  //Chamamento de classe estatica
    }
}


$pluto = new Cachorro();
$garfield = new Gato();
$piupiu = new Passaro();

echo $pluto->falar()."<br>";  //Polimorfismo pois o mesmo metodo tem comportamento diferente
echo $pluto->mover()."<br><hr>";
echo $garfield->falar()."<br>";
echo $garfield->mover()."<br><hr>";
echo $piupiu->falar()."<br>";
echo $piupiu->mover()."<br>";


?>
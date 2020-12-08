<?php

//Classe abstrata nao pode ser instanciada, ela apenas define alguns metodos para poder ser estendida e assim usar em outro arquivo
abstract class Automovel{  //Nao pode ser instanciada, serve apenas como um modelo

    public function acelerar($velocidade){
        echo "Acelerar = $velocidade";
    }

    public function frenar($velocidade){
        echo "Frenou = $velocidade";
    }

    public function trocarMarcha($marcha){
        echo "Trocou = $marcha";
    }

}

class DelRey extends Automovel{

    public function empurrar(){

    }

}

$carro = new DelRey();

$carro->acelerar(200);

?>
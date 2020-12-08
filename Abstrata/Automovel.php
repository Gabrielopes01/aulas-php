<?php
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

?>
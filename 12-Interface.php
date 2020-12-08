<?php
//Todos os metodos de uma interface devem se inderidas em quem implementar a interface
//Uma classe no PHP pode implementar diversas interfaces, mas apenas uma herança

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);


}

class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "Acelerar";
    }

    public function frenar($velocidade){
        echo "Frenou";
    }

    public function trocarMarcha($marcha){
        echo "Trocou";
    }

}

$carro = new Civic();

$carro->trocarMarcha(1);

?>
<?php

namespace Cliente;

class Cadastro extends \Cadastro{ //Esta barra invertida faz retornar uma pasta atras

    public function resgistrarVenda(){
        echo "<br>Venda Registratada para o cliente ".$this->getNome();
    }
}

?>
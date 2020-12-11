<?php

$data = array(
    "jogo"=>"CyberPunk 2077"
);

setcookie("COOKIE1", json_encode($data), time() + 3600); //Cada cookie deve ter um nome unico que e uma chave identificadora e um valor que o cookie ira salvar e o  tempo que o cookie ficara ativo

echo "OK";

?>
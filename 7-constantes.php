<?php

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

define("BANCO_DE_DADOS", [
    "127.0.0.1",
    "root",
    "password",
    "test"
], true);  //Este true deixa a constanta insensitiva, ou seja, não importa se voce escreve com Maiusc o Minus, ela sempre vai ler a constante

echo "<br>";
print_r(BaNCo_DE_DaDoS);

echo "<br>";
echo PHP_VERSION;

?>
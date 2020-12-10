<?php

$file = fopen("texts/teste.txt", "w+");


fclose($file);

unlink("texts/teste.txt");  //Remove um arquivo

echo "Arquivo Removido";

?>
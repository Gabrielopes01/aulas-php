<?php

$file = fopen("texts/log.txt", "w+"); //Cria um arquivo para escrever e reescreve caso criado, a+ ele abre e vai adicionando a escrita

fwrite($file, date("d/m/Y H:i:s")."\r\nOla");  //Pode pular linha com \r\n, sendo \r o retorno ao inicio da linha e \n um salto de linha

fclose($file); //Sempre feche o arquivo quando temrinar

echo "Arquivo criado com sucesso";

?>
<?php
//Uma camada de segurança que encripta informações trocadas entre cliente e servidor
//O certificado é gerado por um orgao para trabalhar com SSL - Certificado de Servidor Web
//SSL serve para prteger ataques a sessões

session_start();

echo session_id()."<br>";

//Depois de verificar login e senha, reinicie o ID da sesão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();




?>
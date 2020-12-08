<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Alister Krei");
$cad->setEmail("alisterKrei@gmail.com");
$cad->setSenha("resposta42");

echo $cad;

$cad->resgistrarVenda();

?>
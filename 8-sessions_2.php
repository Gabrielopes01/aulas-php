<?php

require_once("8-config.php");

//session_unset();  //Apaga uma variavel de sessao, se nao houver a var, ele paga todas as vars
//session_destroy(); //Encerra todas a variaveis e remove o usuario da sessao

echo $_SESSION['nome'];

?>
<?php

session_id("v3qugfm6ebou7ongbaclkmh5ui");

require_once("8-config.php");

$_SESSION['nome'] = "Gabriel";


//echo "Oi <br>";

//ID de sessao
//session_destroy();  //Desativa a sessao
//session_regenerate_id();  //Reinicia a sessao e muda o id
echo session_id();

?>
<?php

require_once("config.php");

$sql = new Sql();

$pesquisa = $sql->select("SELECT * FROM persona WHERE Num = :ID", array(
    ":ID"=>$_POST['num']
));

echo "<br>Seu Resultado:<br>";
echo "<img width=".'"270px"'." height=".'"360px"'. "src=".$pesquisa[0]['Imagem']."></img><br>";
echo "<strong>Nome: </strong>".$pesquisa[0]['Nome']."<br>";
echo "<strong>Elementos: </strong>".$pesquisa[0]['Elementos']."<br>";
echo "<strong>Fraquezas: </strong>".$pesquisa[0]['Fraquezas']."<br>";

/*
$sql->query("INSERT persona VALUES (0, :NOME, :ELEMENTOS, :FRAQUEZAS, :IMAGEM)", array(
    ":NOME"=>"Arsene",
    ":ELEMENTOS"=>"Trevas",
    ":FRAQUEZAS"=>"Luz e Gelo",
    ":IMAGEM"=>"https://static.zerochan.net/Ars%C3%A8ne.%28Persona.5%29.full.1839761.jpg"
));
*/



?>
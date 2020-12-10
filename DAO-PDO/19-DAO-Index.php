<?php

require_once("config.php");


/*
//SELECT
$sql = new Sql();

echo "<hr>";

$usuarios = $sql->select("SELECT * FROM tb_usuarios");


$json = json_encode($usuarios);

foreach ($usuarios as $linhas) {
    foreach ($linhas as $coluna => $valor) {
        echo "<strong>$coluna</strong>: $valor<br>";
    }
    echo "<hr>";
}

echo $json;
//var_dump($usuarios);
*/

/*
//Select By Id do Usuario

$root = new Usuario();

$root->loadById(22);


echo $root;
*/


//List de Usuarios

//Usuario::getList();

//Usuario::search("root");

/*
//INSERT DE USUARIO

$aluno = new Usuario("Robertinho", "rob123");

$aluno->insert();
*/


/*
//LOGIN

$user = new Usuario();

$user->login("Cleiton", "cleito123");
*/


/*
//UPDATE
$user = new Usuario();

$user->loadById("22");

echo $user;

$user->update("Gabriel", "54");

echo $user;
*/



//DELETE

$user = new Usuario();

$user->loadById(23);

//echo $user;

$user->delete();

echo $user;

?>
<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

$headders = array();

foreach ($usuarios[0] as $coluna => $valor) {
    array_push($headders, ucfirst($coluna));
}

$file = fopen("texts/usuario.csv", "w+");

fwrite($file, implode(",", $headders));

foreach ($usuarios as $linha) {
    $data = array();

    foreach ($linha as $coluna => $valor) {
        array_push($data, $valor);
    }

    fwrite($file, "\r\n".implode(",", $data));
}

fclose($file);

echo "CSV criado";

?>
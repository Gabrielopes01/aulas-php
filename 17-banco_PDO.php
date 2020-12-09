<?php

$con = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); //mysql:dbname=nome;host=localhost

$stmt = $con->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);  //Ja gera as diversas linhas de codigo so select, cada linha é um aray da tabela, ou seja, uma linha

foreach ($result as $row) {

    foreach ($row as $coluna => $valor) {
        echo "<strong>".$coluna."</strong>= ".$valor."<br>";
        if($coluna=="deslogin" && $valor=="Jorge"){
            echo "Haha";
        }
    }

    echo "<hr>";
}

?>
<?php

//INSERT
$con = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASS)");

$login = "Jorge";
$pass = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "Inserido<br>";

//UPDATE
$stmt = $con->prepare("UPDATE tb_usuarios SET dessenha=:PASS WHERE idusuario=:ID");

$id = 7;
$pass = "senha";

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "Atualizado<br>";

//DELETE
$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario=:ID");

$id = 8;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado<br>";

//TRANSACTION

$con->beginTransaction();

$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario=?");

$id = 1;

for($id; $id<20 ;$id++){

    $stmt->execute(array($id));  //Forma um array que inserwe informação conforme o número de interrogações (?)
}

//$con->rollback();  //Apaga os dados e mudanças ate a transação
$con->commit();  //Salva todos os dados alterados a partir do transact5ion

echo "Deletado com commit";


?>
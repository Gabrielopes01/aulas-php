<?php

$con = new mysqli("localhost", "root", "", "dbphp7");

if ($con->connect_error){
    echo "Erro: ".$con->connect_error;
}


/*
//Cadastro
$stmt = $con->prepare("INSERT tb_usuarios (deslogin, dessenha) VALUES (?, ?)");   //Coloca interrogaçoes antes de enviar

$stmt->bind_param("ss", $login, $pass);   //Seleciona o tipo de dado das interrogações, no caso Strings e fala os valores

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "67890";

$stmt->execute();*/


//Consulta

$result = $con->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){  //Enquanto houver dados no banco, armazene no row

    array_push($data, $row);

}


echo json_encode($data);
?>
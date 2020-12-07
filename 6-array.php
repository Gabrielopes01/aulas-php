<?php
//Arrays com 1 dimensao sao chamados de vetor, se tiverem 2, sao chamados de array

$frutas = array("Laranja", "Abacaxi", "Melancia");

print_r($frutas);
echo "<br>";

$carros[0][0] = "GM";
$carros[0][1] = "Onix";
$carros[0][2] = "Camaro";
$carros[0][3] = "Cobalt";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
echo "<br>";

echo end($carros[1]);

echo "<br>";

$pessoas = array();

array_push ($pessoas, array(
    'nome' => 'João',
    'idade' => '20'
));

array_push ($pessoas, array(
    'nome' => 'Gabriel',
    'idade' => '19'
));

print_r($pessoas);


echo "<br>";
$matriz = array("Primos" => array(1,3,5,7,11), "Pares" => array(0,2,4,6,8));
print_r($matriz);
echo end($matriz["Primos"]);


?>
<?php
//JSON é um formatio leve para troca de informaçãqo entre sistemas

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

echo "<br> JSON Encode = ".json_encode($pessoas);

$jason = '[{"nome":"Jo\u00e3o","idade":"20"},{"nome":"Gabriel","idade":"19"}]';

$decodificado = json_decode($jason, true);
echo "<br> JSON Decode = ";
print_r($decodificado);
?>
<?php

//Precedencia de Operadores = https://www.php.net/manual/pt_BR/language.operators.precedence.php

//Atribuicao (=) - Atribui um valor a var
$atribuir = "Valor";

//Concatenar (.)
$concatenar = $atribuir." concatenado";
$concatenar .= " agora";
echo "Texto = ".$concatenar;

//Incrementos (+=, *=, ++) e Decrementos(-=, /=, --)

//Aritmeticos (+, -, *, /, mod, **)

//Comparacao (==, !=, <, <=, >, >=, ===, !==, <=>, ??)
// a <=> b - Se a for maior, retorna 1, se b for maior, retorna -1, se forem iguais, retorna 0
//?? = Se for nulo, a proxima variavel sera exibida
$a = NULL;

$b = NULL;

$c = 10;

echo "<br> Operador ?? = ";
echo $a ?? $b ?? $c;

//Relacionais (&&-and, ||-or, xor, !)
echo "<br> Operador ! (Not) = ";
$ver = false;
var_dump(!$ver);
?>
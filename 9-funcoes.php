<?php


//Funcao sem parametro
function ola(){

    return "Ola Mundo<br>";

}

echo ola();

$frase = ola();

echo strlen($frase)."<br>";


function salario(){
    return 946.00;
}

echo "José recebeu 3 salários: ".(3*salario())."<br>";

//Funcao com parametro

function olaNome($nome = "mundo"){

    return "Ola $nome<br>";

}

echo olaNome("Roberto Bolanos");
echo olaNome();


function teste(){

    $argumentos = func_get_args();
    return $argumentos;
}


var_dump(teste("Ola", "Bom dia", "O Jogo"));

//Parametro por valor - Passa um valor de variavel

echo "<br>";
echo "<hr>";

$a = 10;

function trocaValor($a){
    $a += 50;
    return $a;
}

echo "Por Valor:<br>";
echo "Valor na função = ".trocaValor($a)."<br>";
echo "Valor fora da função = ".$a."<br>";;

//Paremetro por referencia - Puxa o "endereço" de uma variavel, referencia uma variavel

function trocaValor2(&$a){
    $a += 50;
    return $a;
}

echo "Por Referêrncia:<br>";
echo "Valor na função = ".trocaValor2($a)."<br>";
echo "Valor fora da função = ".$a;

echo "<br>";
echo "<hr>";

//Filtro de parametro

function soma($valor, int ...$valores):string{  //As retisencias(...) criam um array de valores a serem inseridos, od dois pontos(:) servem para indicar o tipo de retorno 
    return array_sum($valores) + $valor;
}

echo soma (1, 2, "3", 4, 5)."<br>";  //Converte numero str para i9nt, so nao recebe caracteres
//var_dump(soma (1, 2, "3", 4, 5));
echo "<br>";
echo soma (1, 2, 3, 4, 5, 6.9);  //Arredonda o float para a casa menor

?>
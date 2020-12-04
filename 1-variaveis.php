<?php

$nome = "HCode";
$numero_Inteiro =  23; //O unico caractere especial que PHP aceita e o underline

echo "<u>$nome</u>";
echo "----------";
echo '<u>\'$nome</u>';
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo isset($nome);

unset($nome);

echo isset($nome);  //Nao vai exibir pois o unset vai excluir o valor associado a ela, remove a atribuicao

echo "<br>";

//Dados Primitivos
//String
$palavra = "Xucrute";
//Integer
$ano = 2000;
//Float
$valor = 220.05;
//Boolean
$registrado = true;

//Dados Compostos
//Array
$frutas = array("abacaxi", "maça", "banana");
//Objeto
$nascimento = new DateTime();
//var_dump($nascimento);


//Dados especiais 
//Resource
$arquivo = fopen("1-variaveis.php", "r"); //Abre o arquivo de texto no modo de leitura
var_dump($arquivo);

//NULL
$nulo = NULL;   //Espaço em nulo, sem valor atribuido



////////////////////////////////////////////////////////////////////
//Variavei Pre Definidas ou GLOBAIS

$nome = $_GET['nomezinho'];  //O GET retorna valores de um  form de forma visivel na barra de URL, inclusive pode ser definido pelo URL
//Vamos adicionar na barra de URL o ?nomezinho=nome
echo "<br>";
echo $nome;

$idade = $_GET['idadezinha'];
//Vamos adicionar na barra de URL o &idadezinha=20
echo "<br>";
echo $idade;

?>
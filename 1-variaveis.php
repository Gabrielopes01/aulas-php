<?php

$nome = "HCode";
$numero_Inteiro =  23; //O unico caractere especial que PHP aceita e o underline

echo "<u>$nome</u>";
echo "----------";
echo '<u>\'$nome</u>';
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo "A variavel esta definida? = ".isset($nome);

unset($nome);

echo isset($nome);  //Nao vai exibir pois o unset vai excluir o valor associado a ela, remove a atribuicao

echo "<br>";


//////////////////////////////////////////////////////
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
echo "Tipo de dado de arquivo de leitura =  ";
var_dump($arquivo);

//NULL
$nulo = NULL;   //Espaço em nulo, sem valor atribuido



////////////////////////////////////////////////////////////////////
//Variavei Pre Definidas ou GLOBAIS


//_GET
$nome = $_GET['nomezinho'];  //O GET retorna valores de um  form de forma visivel na barra de URL, inclusive pode ser definido pelo URL
//Vamos adicionar na barra de URL o ?nomezinho=nome
echo "<br> Nome (Exemplo GET) = ".$nome;

$idade = $_GET['idadezinha'];
//Vamos adicionar na barra de URL o &idadezinha=20
echo "<br>";
echo $idade;


//_SERVER
$ip = $_SERVER['REMOTE_ADDR'];

echo "<br> IP do Provedor = ".$ip;


//////////////////////////////////////////////////////////////////
//Escopo de Variavel - Are de atuçao de uma var, sendo Local ou Global, quando ela e criada, ela e local

$nome = "Valmir";

function teste1(){
    echo $nome;  //Nao vai dar o eco por ser uman funcao com variavel local, deve-se antes transforma-la em global
}

//GLOBAL
function teste2(){
    //global $nome;  //Define global uma variavel
    echo $GLOBALS['nome'];  //A superglobal define qualquer variavel em uma global
}


echo "<br>Sem definicao de escopo global = ";
teste1();
echo "Com definicao de escopo global = ";
teste2();


?>
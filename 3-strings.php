<?php

//Funcoes String
echo "<h1>Funções</h1>";
$nome = "gabriel";
echo "String = $nome<br>";
echo "<hr>"; 
//Deixa todas as letras maiusculas
echo "strtoupper() = ".strtoupper($nome)."<br>";
//Deixa as letras inicias maiusculas de cada palavra
echo "ucwords() = ".ucwords($nome." lopes")."<br>";
//Deixa somente a prmeira letra da string maiuscula
echo "ucfirst() = ".ucfirst($nome." lopes")."<br>";
//Substitui um valor por outro em uma string
echo "str_replace() = ".str_replace("a", "4", $nome)."<br>";
//Encontra a posição de uma string dentro de outra
echo "strpos() = ".strpos($nome." lopes", "lop")."<br>";
//Pega uma parte da string de tal ponto a tal ponto
echo "substr() = ".substr($nome, 0, 3)."<br>";
//Conta quantos caracteres haem uma string
echo "strlen() = ".strlen($nome)."<br>";


?>
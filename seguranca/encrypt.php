<?php


//Este tipo de criptografia foi removida a paritr do PHP 7.2
/*
$data = [
    "nome"=>"Hcode"
];

define("SECRET", pack("a16", "senha"));

$mcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, SECRET, json_encode($data), MCRYPT_MODE_ECB);

var_dump($mcrypt);
*/

//Use o openssl no lugar

//Chaves para abrir o arquivo
define("SECRET_IV", pack("a16", "senha"));
define("SECRET", pack("a16", "senha"));

//Informaçaio que sera encriptada
$data = [
    "nome" => "Hcode"
];

//Encriptando em Openssl
$openssl = openssl_encrypt(
    json_encode($data),   //Transformando o arquivo em string, este arquivo sera a string que sera encriptada
    "AES-128-CBC",  //Algoritmo a setr usado
    SECRET,   //Chave
    0,        //Diz que não retona nada alem da criptografia
    SECRET_IV    //Segunda chave
);

echo "Openssl Encriptado = ".$openssl."<br>";
echo "Base64 = ".base64_encode($openssl)."<br>";


//Decriptando o Openssl

$string = openssl_decrypt(
    $openssl,   //O que vai decriptado
    "AES-128-CBC",    //Metodo de criptografia usado
    SECRET,    //Senha/Chave
    0,     //Sem retorno extra
    SECRET_IV   //Chave 2
);

echo "Openssl Decriptado = ".$string."<br>Json Decode = ";
echo var_dump(json_decode($string))."<br>";


//Segundo Teste

define("CHAVE1", pack("a16", "abc123"));
define("CHAVE2", pack("a16", "segundasenha"));

$info = [
    "nome" => "Gabriel",
    "sobrenome" => "Lopes",
    "idade" => "20"
];

//Este metodo usa duas chaves por segurança
$encrypt = openssl_encrypt(
    json_encode($info),      //op PRIMEIRO PARAMETRO SEMPRE E UMA STRING
    "AES-128-CFB8",
    CHAVE1,
    0,              //Retorna apenas o codigo
    CHAVE2
);

echo "<br> Teste Encrypt = ".$encrypt;


$decrypt = openssl_decrypt(
    $encrypt,
    "AES-128-CFB8",
    CHAVE1,
    0,              //Retorna apenas o codigo
    CHAVE2
);

echo "<br> Teste Decrypt = ".$decrypt;
$lista = json_decode($decrypt);

echo "<br> Decode Json = ";
var_dump(json_decode($decrypt));
?>
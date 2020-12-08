<?php
//AutoLoad carrega as classes sem a necessidade de require em todos os arquivos, ele pega arquivos e extensoes echama sozinho
/*function __autoload($nomeClass){ //Funcao caso todos os arquivos estejam no mesmo diertorio

    require_once("$nomeClass.php");

}*/
//O Autoload so encontra no mesmo diretorio, por isso ha funçoes para ajudar isto
spl_autoload_register(function($nomeClass){

    if(file_exists("Abstrata".DIRECTORY_SEPARATOR.$nomeClass.".php")){
        require_once("Abstrata".DIRECTORY_SEPARATOR.$nomeClass.".php");
    }

});

$carro = new DelRey();

$carro->acelerar(100);



?>
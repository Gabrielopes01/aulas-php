<?php

$nome = "images";

if(!is_dir($nome)){
    mkdir($nome);
    echo 'Diretorio"'.$nome.'" criado com sucesso';
} else{
    rmdir($nome);
    echo 'Ja ha um diretorio"'.$nome.'". O diretorio foi removido';
}

?>
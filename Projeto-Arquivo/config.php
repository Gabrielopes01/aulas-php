<?php

spl_autoload_register(function($className){   //Sempre quehouver um New ou estends/implements, este metodo é chamdo com o nome que vem depois

    $filename = "class". DIRECTORY_SEPARATOR. $className.".php";

    if(file_exists($filename)){

        require_once($filename);

    } else {
        echo "Classe <strong>$className</strong> não encontrada";
    }

});

?>
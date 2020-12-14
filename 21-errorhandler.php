<?php 

function error_handler($code, $message, $file, $line){

    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "file"=>$file,
        "line"=>$line
    ));

}

set_error_handler("error_handler");


echo 100/0;


//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); //Diz que todos os erros vao ser exibidos, menos os notices

?>
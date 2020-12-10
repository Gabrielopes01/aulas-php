<?php

$images = scandir("images");  // (.) = Diretorio Local , (..) = Diretorio Interno

$data = array();

foreach ($images as $img) {

    if(!in_array($img, array(".", ".."))){   //Se não for . ou .. então rode o codigo abaixo

        $filename = "images".DIRECTORY_SEPARATOR.$img;

        $info = pathinfo($filename);

        $info["size"] =  (filesize($filename)/1000)." Kbytes"; //Informa o tamanho do arquivo
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));  //O filemtime retorna um timestamp que o date formata
        $info["url"] = "http://localhost/20-Arquivos/".str_replace("\\", "/", $filename);  //Retornando o endereço do arquivo

        array_push($data, $info);

    }


}

$json = json_encode($data);

$njson = str_replace("\\", "", $json);

echo $njson;

?>
<?php

$filename = "texts/usuario.csv";

if (file_exists($filename)){

    $file = fopen($filename, "r");  //E o modo  de leitura

    //var_dump(fgets($file)); //O fgets pega e le uma linha do aarquivo e depois pula para a proxima linha

    $headders = explode(",", fgets($file));

    var_dump($headders);

    $data = array();

    while ($row = fgets($file)){

        $rowData = explode(",", $row);
        $linha = array();

        for($i=0; $i<count($headders);$i++){

            $linha[$headders[$i]] = $rowData[$i];

        }

        array_push($data, $linha);

    }

    fclose($file);


    echo json_encode($data);


}

?>
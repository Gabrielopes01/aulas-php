<?php

$dir1 = "P_1";
$dir2 = "P_2";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if(!file_exists($dir1. DIRECTORY_SEPARATOR. $filename)) {

    $file = fopen($dir1. DIRECTORY_SEPARATOR. $filename, "w+");

    fwrite($file, date("d/m/Y"));

    fclose($file);

}


rename($dir1. DIRECTORY_SEPARATOR. $filename, $dir2. DIRECTORY_SEPARATOR. $filename);  //Este atributo move o arquivo de um diretorio a outro

?>
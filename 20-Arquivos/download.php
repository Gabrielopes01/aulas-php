<?php

$link = "https://www.pngkit.com/png/detail/71-717474_1-kbyte-v-ice-hockey-player-transparent.png";

$content = file_get_contents($link);

$parse = parse_url($link);  //Gera um array de atriibutos de definições

$basename = basename($parse["path"]);  //Retorna apenas o nome do arquivo

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>


<img src="<?=$basename?>">
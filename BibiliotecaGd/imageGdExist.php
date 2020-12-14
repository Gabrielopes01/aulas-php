<?php

$img = imagecreatefromjpeg("certificado.jpg");

$tileColor =  imagecolorallocate($img, 0, 0, 0);
$gray = imagecolorallocate($img, 100, 100, 100);

imagestring($img, 5, 450, 150, "CERTIFICADO", $tileColor); 
imagestring($img, 5, 440, 150, "Gabriel Lopes", $tileColor); 
imagestring($img, 3, 440, 370, utf8_decode("Concluído em ").date("d/m/Y"), $tileColor);

header("Content-Type: image/jpeg");

imagejpeg($img, "certificado".date("Y-m-d").".jpg", 10);   //Diz qual imagem sera exibida, onde e como ela sera salva, e que tamanho ela tera reduzindo qualidade e memória

imagedestroy($img);


?>
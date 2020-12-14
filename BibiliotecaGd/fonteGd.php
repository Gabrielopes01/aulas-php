<?php

$img = imagecreatefromjpeg("certificado.jpg");

$tileColor =  imagecolorallocate($img, 0, 0, 0);
$gray = imagecolorallocate($img, 100, 100, 100);

imagettftext($img, 32, 0, 320, 250, $tileColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($img, 32, 0, 440, 350, $tileColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Gabriel Lopes");
imagestring($img, 3, 440, 370, utf8_decode("Concluído em ").date("d/m/Y"), $tileColor);

header("Content-Type: image/jpeg");

imagejpeg($img);   //Diz qual imagem sera exibida, onde e como ela sera salva, e que tamanho ela tera reduzindo qualidade e memória

imagedestroy($img);


?>
<?php

header("Content-Type: image/png");   //Este atributo dis o tipo de resposta deste arquivo, que ser uma imagem

$img = imagecreate(256,256);

$black = imagecolorallocate($img, 0, 0, 0);  //MAX = 2555, MIN = 0

$red = imagecolorallocate($img, 255, 0, 0); 


imagestring($img, 5, 60,120, "Curso PHP", $red);


//Exibindo Imagem
imagepng($img);  //Exibibe e desenha a imagem na tela

imagedestroy($img); //Sempre destrua a imagem no final para não ocupar memmoria

?>
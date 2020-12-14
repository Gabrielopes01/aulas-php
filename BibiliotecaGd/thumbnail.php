<?php

header("Content-Type: image/jpeg");

$img = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($img);

$newImage = imagecreatetruecolor($new_width, $new_height);
$oldImage = imagecreatefromjpeg($img);

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($newImage);

imagedestroy($oldImage);
imagedestroy($newImage);


?>
<?php

$filename = "images/Kbts.jpg";

$b64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$encode = "data:".$mimetype.";base64,".$b64;   //Formato padrão de exibir B64

?>


<a href="<?=$encode?>"  target="_blank">Link para a Imagem</a>

<img src="<?=$encode?>"></img>
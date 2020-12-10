<?php

if(!is_dir("texts")) mkdir("texts");

foreach (scandir("texts") as $arquivo) {
    if(!in_array($arquivo, array(".",".."))){

        unlink("texts/".$arquivo);

    }
}
echo "Deletado";

?>
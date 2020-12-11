<?php

if(isset($_COOKIE["COOKIE1"])){
    $obj = json_decode($_COOKIE["COOKIE1"]);

    echo $obj->jogo;
}


echo "<br>OK";

?>
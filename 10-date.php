<?php

echo date("d/m/y H:i:s D-M-Y", 997163105);  //O Y maisculo retorna o ano com 4 digitos, o minusculo retorna com 2

echo "<br>";

echo time();  //Este metodo retorna um time stamp, que o segundo parametro de date() e serve para travar um horario especifico

//Time stamp limite = 9223371999999999999, pode usar -

echo "<br>";

echo "Meu Time Stamp = ".strtotime("2001-08-07 07:45:05");  //Aceita argumento now, day (Proximo dia), week (Proxima semana)

?>

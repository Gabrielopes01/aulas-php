<?php

echo date("d/m/y H:i:s D-M-Y", 997163105);  //O Y maisculo retorna o ano com 4 digitos, o minusculo retorna com 2

echo "<br>";

echo time();  //Este metodo retorna um time stamp, que o segundo parametro de date() e serve para travar um horario especifico

//Time stamp limite = 9223371999999999999, pode usar -

echo "<br>";

echo "Meu Time Stamp = ".strtotime("2001-08-07 07:45:05");  //Aceita argumento now, day (Proximo dia), week (Proxima semana)


//Set Locale e strftime
echo "<br>";
echo "<hr>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");  //LC_ALL uma constante que diz que toda a configuração deve ser mudad para pt

echo "Hoje é dia ".strftime("%d")." (".ucwords(strftime("%A")).") "." de ".ucwords(strftime("%B"))." de ".strftime("%G");  //Formatacao de data


//DateTime
echo "<br>";
echo "<hr>";

$dt = new DateTime();

$periodo = new DateInterval("P15D");

$dt->add($periodo);

echo $dt->format("d/m/y");

?>

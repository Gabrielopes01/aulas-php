<?php


//If Else
$suaIdade = 111;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($suaIdade < $idadeCrianca){
    echo "Você é uma criança";
} elseif($suaIdade < $idadeMaior) {
    echo "Você é um adolescente";
} elseif($suaIdade < $idadeMelhor){
    echo "Você é um adulto";
} else{
    echo "Você é um idoso";
}

echo "<br>";

echo ($suaIdade > $idadeMaior)?"Maior de idade":"Menor de idade"; //Operador ternario


echo "<br>";
echo "<hr>";
//Switch Case

$diaSemana = date("w")." - ";

echo $diaSemana;

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;

    case 1:
        echo "Segunda";
        break;

    case 2:
        echo "Terça";
        break;

    case 3:
        echo "Quarta";
        break;

    case 4:
        echo "Quinta";
        break;

    case 5:
        echo "Sexta";
        break;

    case 6:
        echo "Sabado";
        break;

    default:
        echo "Data Invalida";
        break;
}


echo "<br>";
echo "<hr>";
//For
echo "<select>";
for($i = 0; $i < 10; $i++){

    if ($i > 4 && $i < 6) continue;

    if ($i === 8) break; //If em uma linhaso por so ter um comando

    echo $i."<br>";

    echo '<option value="'.$i.'">';
    echo $i;
    echo "</option>";

}
echo "</select>";


echo "<br>";
echo "<hr>";
//Foreach

$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

foreach ($meses as $num => $mes) {
    echo $num." = ".$mes."<br>";
}


echo "<br>";
echo "<hr>";
//While

$contador = 0;

while($contador<=10){
    echo $contador."<br>";
    $contador++;
}

do{
    echo $contador."<br>";
    $contador++;
} while($contador<=10);

?>
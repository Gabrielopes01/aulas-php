<form method="POST">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>


<?php

//XSS ataque na onde o hacker insere comandos HTML em campos de inserção do site
//Para evitar podemos usar o StritedX, que remove tags, ou usando o HTML special chars, que remove tags tambem

//Se o busca receber tags, ele ira ler como HTML

if (isset($_POST["busca"])){

    //Parametro Passad = <strong>oi</strong><button>Oi</button
    //echo strip_tags($_POST["busca"], "<button>");   //Este metodo remove tags, podendo deixar que algumas apareçam, no segundo parametro voce coloca quais ele deve exibir
    //Ha como não remover as tags, e exibir elas na tela
    echo htmlentities($_POST["busca"]);  //Este metodo escreve as tags, removendo os comandos, mas mantendo as tags como texto

}

?>

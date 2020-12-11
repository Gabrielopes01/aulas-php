<?php
/*
try {
    
    throw new Exception("Houve um erro", 42);
    

} catch (Exception $e) {
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}
*/

function trataNome($nome){

    if (!$nome) {
        
        throw new Exception("Nome não informado<br>", 1);

    } else{

        echo ucfirst("$nome<br>");

    }
}

try {
    trataNome("Kleber");
    trataNome(""); //Com a excepttion, o programa encerra instantanemanete
    trataNome();

} catch (Exception $e) {
    echo $e->getMessage();

} finally{  //Este bloco sempre é eecutado por ultipo apos o try
    echo "Executou o try";
}

?>
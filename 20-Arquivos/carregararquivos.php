<form method="POST" enctype="multipart/form-data">
    
    <input type="file" name="fileupload">
    <br>
    <button type="submmit">Send</button>

</form>


<?php

if ($_SERVER["RESQUEST_METHOD"] = "POST"){

    $file = $_FILES["fileupload"];

    if ($file["error"]){
        throw new Exception("Erro: Arquivo não encontrado");
    }

    $dirupload = "uploads";

    if(!is_dir($dirupload)){

        mkdir($dirupload);

    }

    if (move_uploaded_file($file["tmp_name"], $dirupload.DIRECTORY_SEPARATOR.$file["name"])){
        echo "Upload realizado com suecesso";
    }else{
        echo "Não foi possível realizar o upload";
    }


}


?>


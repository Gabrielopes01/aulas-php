<?php


class Sql extends PDO{

    private $con;

    public function __construct(){

        $this->con = new PDO("mysql:host=localhost;dbname=personas", "root", "");

        echo "<br>Conectado ao BD<br><hr>";
    }

    public function query($rawQuery, $params = array()){   //Os parametros serao um array no qual recebem como chave o nome a ser alterado na query e como valor, o vaqlor real da query

        $stmt = $this->con->prepare($rawQuery);

        $this->setParams($stmt, $params);

        if($stmt->execute()){
            echo "Comando SQL executado<hr>";
        } else {
            echo "Não foi possível executar o seguinte comando SQL: $rawQuery<hr>";
        }

        return $stmt;

    }

    public function select($rawQuery, $params = array()){

        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function setParams($statement, $params){

        foreach ($params as $id => $valor) {

            $this->setParam($statement, $id, $valor);

        }
    }

    public function setParam($statement, $id, $valor){

        $statement->bindParam($id, $valor);

    }

}


 ?>
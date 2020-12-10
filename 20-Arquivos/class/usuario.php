<?php

class Usuario{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


//Metodos Construtores
    public function __construct($login = "", $senha =""){

        $this->setDeslogin($login);
        $this->setDessenha($senha);

    }


    public function __toString(){
        return "<br><strong>ID</strong> = ".$this->getIdusuario()."<br>".json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        )
        );
    }



//Metodos Convencionais
    public function loadById($id){

        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $id
        ));

        if (count($resultado) > 0){

            $this->setData($resultado[0]);
            echo "ID encontrado e definido";

        }

    }

    public static function getList(){

        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM tb_usuarios");

        foreach ($resultado as $linha) {
            foreach ($linha as $coluna => $valor) {
                echo "<strong>$coluna</strong>: $valor<br>";
            }
            echo "<hr>";
        }

    }


    public static function search($login){

        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN", array(
            ":LOGIN"=>$login
        ));


        echo '<strong>Resultado da busca por"'.$login.'":</strong><br>';
        foreach ($resultado as $linha) {
            foreach ($linha as $coluna => $valor) {
                echo "<strong>$coluna</strong>: $valor<br>";
            }
            echo "<hr>";
        }

    }

    public function login($login, $pass){

        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASS", array(
            ":LOGIN" => $login,
            ":PASS" => $pass
        ));

        if (count($resultado) > 0){

            $this->setData($resultado[0]);
            echo "Login Efetuado";

        } else {

            throw new Exception("Login e/ou senha inválido(s)", 1);

        }

    }

    public function setData($data){

        $this->setIdusuario($data["idusuario"]);
        $this->setDeslogin($data["deslogin"]);
        $this->setDessenha($data["dessenha"]);
        $this->setDtcadastro(new DateTime($data["dtcadastro"]));

    }

    public function insert(){

        $sql = new Sql();

        $resultado = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASS)", array(
                ":LOGIN"=>$this->getDeslogin(),
                ":PASS"=>$this->getDessenha()
        ));

        if (count($resultado) > 0){

            $this->setData($resultado[0]);

        }

    }


    public function update($login, $senha){

        $this->setDeslogin($login);
        $this->setDessenha($senha);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASS"=>$this->getDessenha(),
            ":ID"=>$this->getIdusuario()
        ));

        echo "Realizando Update";
    }


    public function delete(){

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setdessenha("");
        $this->setdtcadastro(new DateTime());

        echo "Deletando dados";
    }



    //Gets e Sets
    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($valor){
        $this->idusuario = $valor;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }

    public function setDeslogin($valor){
        $this->deslogin = $valor;
    }

    public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($valor){
        $this->dessenha = $valor;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setDtcadastro($valor){
        $this->dtcadastro = $valor;
    }


}

?>
<?php

//O this não tem cifrao

//Metodos e Atributos
class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }


    public function getMotor(){
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getAno():int{
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }


    public function exibe(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2007");

print_r($gol->exibe());

//Metodos Estaticos

echo "<br>";
echo "<hr>";

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $resultado = Documento::validarCPF($numero);
        if($resultado == false){
            echo "CPF informado é inválido";
        } else {
            $this->numero = $numero;
        }
    }

    public static function validarCPF($cpf):bool{  //Um metodo static ´pode ser usado fora da funcao
         if(empty($cpf)) {
        return false;
    }

    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }

    else if ($cpf == '00000000000' ||
        $cpf == '11111111111' ||
        $cpf == '22222222222' ||
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999') {
        return false;

     } else {

        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
    }
    }
}

$cpf = new Documento();
$cpf->setNumero("32181519889");

echo $cpf->getNumero();

echo"<br>";
var_dump(Documento::validarCPF("32181519889")); //Chamando um metodo estático


//Metodos mágicos (__CONSTRUCT) OU METODOS CONSTRUTORES
echo "<br>";
echo "<hr>";

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;


    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        var_dump("DESTRUÍDO");
    }

    public function __toString(){
        return "<br>".$this->logradouro." - ".$this->numero." - ".$this->cidade."<br>";  //Sempre que houver um echo nesta classe, sera exibido deste modo
    }

}

$meuEndereco = new Endereco("Rua 5", "1049", "Rio Claro");

var_dump($meuEndereco);

//unset($meuEndereco); //Este metodo rwemove da memorio e executsa o destruct

echo $meuEndereco;  //Chama o toStrring por ser um objeto


echo "<br>";
echo "<hr>";
//Encapsulamento e Herança

class Pessoa {
    public $nome = "Rasmus Lerdof";
    protected $idade = 40;
    private $senha = "123123";


    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }
}


$objeto = new Pessoa();

echo $objeto->nome."<br>";
//echo $objeto->idade."<br>";  //Nao pode acessar um atributo protegido a nçao ser que estaja dentro da classe ou herde dela
//echo $objeto->senha."<br>";   //Nao pode ser acessado por ser um atributo privado, so e possivel acessar dentro da propria classe
$objeto->verDados();


class Programador extends Pessoa{  //O que for privado nao vaqi ser extendido
    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }
}

$objeto = new Programador();

$objeto->verDados();  //Puxando verdados da propria classe, se chamasse por extensao, iria aparecer a senha, ela nao aprece por ser privada

?>
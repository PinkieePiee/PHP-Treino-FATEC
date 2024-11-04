<?php
class Pessoa {
    // * Super Classe - Classe Pai - Classe Base
    public $nome;
    public $idade;
    public $telefone;
    public $endereco;
    public $email;
}

//abastract classe Pessoa faria com que A classe não possa ser instanciada.

class Funcionario extends Pessoa { //Conceito de Herança
    //Quando uma classe pode usar variáveis de outra classe
    // * Sub Classe - Classe filha - Derivada
    public $setor;
    public $cargo;
    public $salario;

    function BoasVindas(){
        echo "Seja bem vind(a/o/e) ao nosso time! \n";
    }
}

$p1 = new Pessoa(); 
$p1 -> nome = "Isabela\n";

echo $p1 -> nome;

$p2 = new Funcionario();
$p2 -> nome = "Laura";
$p2 -> idade = 21;
$p2 -> cargo = "Programadora Sênior";
$p2 -> salario = 10.999;
$p2 -> BoasVindas();
//Conceito de Herança, a classe derivada pode usar todos os atributos e métodos que foram atribuidos a classe pai.

echo $p2 -> nome;

echo "\nA " . $p2 -> nome . " que é " . $p2 -> cargo . ", ganha " . $p2 -> salario;

?>